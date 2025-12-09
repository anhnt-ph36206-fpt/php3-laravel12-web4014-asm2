@extends('layouts.master-layout')
@section('title', 'Chi tiết Sản Phẩm')
@section('header', 'Chi tiết Sản Phẩm')

@section('content')
<div class="container mt-4">

    <h2 class="text-center fw-bold mb-4 text-uppercase">Chi tiết sản phẩm</h2>

    <div class="row gy-4">
        <div class="col-md-6 text-center">
            <img src="{{ asset('assets/img/products/' . $productShow->image) }}"
                 class="img-fluid rounded shadow"
                 style="max-width:75%; object-fit:cover;"
                 onerror="this.src='https://via.placeholder.com/350?text=No+Image';">
        </div>
        <div class="col-md-6">
            <table class="table table-borderless fs-5">
                <tr><th>Tên sản phẩm</th>  <td class="fw-bold text-primary">{{ $productShow->name }}</td></tr>
                <tr><th>Giá</th>           <td class="fw-bold text-danger">{{ number_format($productShow->price) }} VNĐ</td></tr>
                <tr><th>Danh mục</th>      <td>{{ $productShow->category->name }}</td></tr>
                <tr><th>Ngày tạo</th>      <td>{{ $productShow->created_at->format('d/m/Y') }}</td></tr>
                <tr><th>Ngày cập nhật</th> <td>{{ $productShow->updated_at->format('d/m/Y') }}</td></tr>
            </table>
        </div>
    </div>

    <hr class="my-5">

    <h4 class="text-primary fw-bold mb-3 text-uppercase">Sản phẩm cùng danh mục</h4>

    @if ($relatedProducts->count() > 0)
    <div class="row g-4">
        @foreach ($relatedProducts as $item)

        <div class="col-md-3 col-sm-6">
            <div class="card product-card shadow-sm border-0 p-2">

                {{-- Ảnh --}}
                <img src="{{ asset('assets/img/products/' . $item->image) }}"
                     onerror="this.src='https://via.placeholder.com/300?text=No+Image';"
                     alt="Ảnh sản phẩm">

                {{-- Nội dung --}}
                <div class="card-body text-center">
                    <div class="product-name">{{ $item->name }}</div>

                    <p class="text-danger fw-bold mt-1">{{ number_format($item->price) }} VNĐ</p>

                    <a href="{{ route('products.show', $item->id) }}"
                       class="btn btn-primary btn-sm w-100 fw-semibold mt-auto">
                        Xem Chi Tiết
                    </a>
                </div>

            </div>
        </div>

        @endforeach
    </div>
    @else
        <p class="text-muted">Chưa có sản phẩm liên quan.</p>
    @endif

    <div class="mt-4">
        <a href="{{ route('products.index') }}" class="btn btn-dark btn-sm px-3">← Quay lại danh sách</a>
    </div>

</div>
@endsection
