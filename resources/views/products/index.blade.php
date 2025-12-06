@extends('layouts.master-layout')
@section('title', 'Danh sách Sản Phẩm')

@section('header', 'Quản Lý Danh Sách Sản Phẩm')

@section('content')
    <div class="row">
        <h1 class="text-center mb-5 mt-5">Danh sách Sản Phẩm</h1>
        
        <table class="table table-striped table-hover table-dark">
            <thead>
                <tr class="text-center">
                    <th scope="col">STT</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá sản phẩm</th>
                    <th scope="col">Danh mục sản phẩm</th>
                    <th scope="col">Ngày tạo mới</th>
                    <th scope="col">Ngày cập nhật</th>
                    <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key => $product)
                    <tr class="text-center">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ number_format($product->price, 0, '.', ',') . ' VNĐ'}}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>{{ $product->updated_at }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">Chi Tiết</a>
                        <a href="" class="btn btn-primary btn-sm">Sửa</a>
                        <a href="" class="btn btn-danger btn-sm">Xóa</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection