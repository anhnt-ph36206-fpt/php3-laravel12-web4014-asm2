@extends('layouts.master-layout')

@section('title', 'Kết quả tìm kiếm')

@section('content')
<div class="container py-4">
    <h3>Kết quả tìm kiếm cho: <strong class="text-danger">{{ $keyword }}</strong></h3>

    @if($products->count() > 0)
        <table class="table table-bordered table-hover mt-3">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Danh mục</th>
                    <th>Chi tiết</th>
                </tr>
            </thead>

            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ number_format($product->price) }} VNĐ</td>
                        <td>{{ $product->category->name }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">Xem</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="alert alert-danger mt-3">Không tìm thấy sản phẩm</p>
    @endif

    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">⬅ Quay lại trang chủ</a>
</div>
@endsection
