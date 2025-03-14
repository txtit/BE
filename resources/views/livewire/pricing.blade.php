<div>
    <h1>Trang Pricing</h1>

    <!-- Nút gọi hàm addhehe -->
    <button wire:click="addhehe">Thêm vào giỏ hàng</button>
    <button wire:click="$emit('addToCart2', 123)">Thêm vào giỏ</button>

    <!-- Hiển thị thông báo -->
    @if (session()->has('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <!-- Hiển thị giỏ hàng -->
    <h3>Giỏ hàng:</h3>
    <ul>
        @if (!empty($cart))
            @foreach ($cart as $item)
                <li>Sản phẩm ID: {{ $item }}</li>
            @endforeach
        @else
            <p>Giỏ hàng trống!</p>
        @endif
    </ul>

</div>
