<form action="{{ route('products.search') }}" method="GET" class="mb-3 d-flex" style="gap:10px;">
    <input type="text" name="keyword" class="form-control" placeholder="Nhập tên sản phẩm..." required>
    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
</form>