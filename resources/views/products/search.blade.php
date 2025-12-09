@extends('layouts.master-layout')
@section('title', 'Kết quả tìm kiếm')

@section('content')
<div class="container py-4">

    <h3 class="fw-bold">
        Kết quả tìm kiếm cho: 
        <span class="text-danger">{{ $keyword }}</span>
    </h3>

    @if($products->count() > 0)

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 mt-3">

        @foreach($products as $product)
        <div class="col">
            <div class="card search-card border-0 shadow-sm text-center p-2">

                <img src="{{ asset('assets/img/products/' . $product->image) }}"
                    onerror="this.src='https://via.placeholder.com/300?text=No+Image';"
                    class="search-img w-100 mb-2">

                <div class="card-body">
                    <h6 class="fw-bold text-dark">{{ $product->name }}</h6>
                    <p class="text-danger fw-semibold">{{ number_format($product->price) }} VNĐ</p>
                    <span class="badge bg-primary mb-2">{{ $product->category->name }}</span><br>

                    <a href="{{ route('products.show', $product->id) }}" 
                        class="btn btn-outline-primary btn-sm px-3">Xem chi tiết</a>
                </div>

            </div>
        </div>
        @endforeach

    </div>

    @else
        <div class="alert alert-danger text-center mt-4 py-3 fs-5">
            Không tìm thấy sản phẩm nào khớp với từ khóa.
        </div>
    @endif

    <div class="mt-4">
        <a href="{{ route('products.index') }}" class="btn btn-dark btn-sm px-3">← Quay lại trang chủ</a>
    </div>

</div>
@endsection
