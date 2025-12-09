@extends('layouts.master-layout')
@section('title', 'Danh sách Sản Phẩm')
@section('header', 'Quản Lý Danh Sách Sản Phẩm')

@section('content')
    <div class="container">

        <h2 class="text-center fw-bold my-5 text-uppercase">Danh Sách Sản Phẩm</h2>

        <div class="row g-4 justify-content-center">

            @foreach ($products as $product)
                <div class="col-md-3 col-sm-6">
                    <div class="card product-card shadow-sm border-0 p-2">

                        {{-- Ảnh sản phẩm --}}
                        <img src="{{ asset('assets/img/products/' . $product->image) }}"
                            onerror="this.src='https://via.placeholder.com/300?text=No+Image';" alt="Hình sản phẩm">

                        <div class="card-body text-center">

                            <div class="product-name">{{ $product->name }}</div>

                            <p class="text-danger fw-bold fs-5 mt-1">
                                {{ number_format($product->price) }} VNĐ
                            </p>

                            <p class="text-muted small mb-1">
                                Danh mục: <span class="fw-semibold text-dark">{{ $product->category->name }}</span>
                            </p>

                            <small class="text-secondary d-block">
                                Cập nhật {{ $product->updated_at->format('d/m/Y') }}
                            </small>

                            <a href="{{ route('products.show', $product->id) }}"
                                class="btn btn-primary btn-sm w-100 mt-3 fw-semibold">
                                Xem Chi Tiết
                            </a>

                        </div>

                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection
