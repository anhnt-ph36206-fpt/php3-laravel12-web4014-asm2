@extends('layouts.master-layout')
@section('title', 'Danh sách Sản Phẩm')

@section('header', 'Danh sách Sản Phẩm')

@section('content')
    <div class="row">
        <h1 class="text-center">Chi tiết  Sản Phẩm</h1>
       <div class="col-md-6 offset-md-3">
            <div class="card">
                {{-- <div class="card-header">
                    <h3 class="card-title">{{ $productShow->name }}</h3>
                </div> --}}
                <div class="card-body">
                    <p class="card-text">Tên sản phẩm: {{ $productShow->name }}</p>
                    <p class="card-text">Giá: {{ number_format($productShow->price, 0, '.', ',') . ' VNĐ'}}</p>
                    <p class="card-text">Danh mục: {{ $productShow->category->name }}</p>
                    <p class="card-text">Ngày tạo mới: {{ $productShow->created_at }}</p>
                    <p class="card-text">Ngày cập nhật: {{ $productShow->updated_at }}</p>
                </div>
            </div>
        </div>
        <h4 class="text-primary mt-4">Các Sản phẩm cùng danh mục</h4>
        @if($relatedProducts->count() > 0)
            <ul class="list-group mt-3">
                @foreach ($relatedProducts as $item)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>{{ $item->name }} — {{ number_format($item->price) }} VNĐ</span>
                        <a href="{{ route('products.show', $item->id) }}" class="btn btn-sm btn-outline-primary">Xem</a>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-center text-muted">Chưa có sản phẩm cùng danh mục</p>
        @endif
    </div>
@endsection