<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /** Câu 4
         * 4.	
         * -    Hiển thị toàn bộ Product trên Trang chủ sắp xếp theo mới nhất lên đầu (2 điểm)
         * -	Tạo route và controller để hiển thị danh sách tất cả sản phẩm trên trang chủ (/).
         * -	Sắp xếp sản phẩm theo thứ tự giảm dần của created_at (mới nhất lên đầu).
         */
        $titlePage = 'Quản lý Sản Phẩm';
        $title     = 'Danh Sách Sản Phẩm';

        // Lấy tất cả product bằng Eloquent ORM với all();
        $products = Product::all();
        // dd($products);

        // Hiển thị toàn bộ Product trên Trang chủ sắp xếp theo (ORDERBY) mới nhất lên đầu (DESC), còn (ASC) là cũ trước, mới sau
        $products = Product::with('category')
                            ->orderBy('created_at', 'desc') // Sắp xếp sản phẩm theo thứ tự giảm dần của created_at (mới nhất lên đầu).
                            ->get(); // Lấy tất cả sản phẩm 
        
        
        // Tạo route và controller để hiển thị danh sách tất cả sản phẩm trên trang chủ (/).
        return view('products.index', compact('title', 'titlePage', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        /** 
         * Câu 5. Hiển thị chi tiết Product (2 điểm)
         * -	Tạo route và controller để hiển thị chi tiết một sản phẩm (ví dụ: /products/{id}).
         * -	Hiển thị đầy đủ thông tin của sản phẩm: tên, giá, tên danh mục, ngày tạo (created_at).
         * -	Đảm bảo xử lý trường hợp sản phẩm không tồn tại (trả về lỗi 404).
         */

        //  Tiêu đề view 
        $titlePage = 'Quản lý sản phẩm';
        $title     = 'Chi tiết Sản Phẩm';

        // Hàm hiển thị chi tiết của 1 sản phẩm
        $productShow = Product::with('category')
                            ->findOrFail($id); //  Lấy sản phẩm -> nếu id của sản phẩm đó không tồn tại thì tự động trả về 404 với findOrFail();
        
        
        // Lấy top 5 sản phẩm cùng danh mục, trừ sản phẩm hiện tại
        $relatedProducts = Product::where('category_id', $productShow->category_id)
                            ->where('id', '!=', $productShow->id) // Trừ sản phẩm hiện tại
                            ->latest()  // Tương đương với orderBy ('created_at', 'desc')
                            ->take(5)   // Tương đường LIMIT 5 bản ghi
                            ->get();    // Thực thi truy vấn và lấy tất cả kết quả (tối đa 5 bản ghi )
        // ->newest() // Tương đương với orderBy ('created_at', 'asc')
        
        return view('products.show', compact('titlePage', 'title', 'productShow', 'relatedProducts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function searchProduct(Request $request) {
        //  Query LIKE tìm sản phẩm theo tên
        $keyword = $request->input('keyword');

        // Query LIKE tìm sản phẩm theo tên
        $products = Product::where('name', 'LIKE', "%$keyword%")
                            // ->limit(1)
                            ->latest()
                            ->get();
        return view('products.search', compact('products', 'keyword'));
    }
}
