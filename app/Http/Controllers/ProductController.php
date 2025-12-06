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
        // Lấy tất cả product

        $titlePage = 'Quản lý sản phẩm';
        $title     = 'Danh sách Sản Phẩm';
        $products = Product::all();
        // dd($products);
        $products = Product::with('category')
                            ->orderBy('created_at', 'desc')
                            ->get();
        
        return view('products.index', compact('titlePage', 'title', 'products'));
        

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
        $titlePage = 'Quản lý sản phẩm';
        $title     = 'Chi tiết Sản Phẩm';

        // Hàm hiển thị chi tiết của 1 sản phẩm
        $productShow = Product::with('category')
                            ->findOrFail($id); //  Lấy sản phẩm -> nếu id của sản phẩm đó không tồn tại thì tự động trả về 404
        
        
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
        //
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
                            ->latest()
                            ->get();
        return view('products.search', compact('products', 'keyword'));
    }
}
