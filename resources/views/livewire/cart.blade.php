<div>
    <!-- Nút mở giỏ hàng -->
    <button wire:click="openCart" class="fixed top-4 right-4 bg-blue-500 text-white p-2 rounded-full">
        🛒 (<span>{{ count($cart) }}</span>)
    </button>

    <!-- Overlay mờ -->
    @if ($isOpen)
        <div class="fixed inset-0 bg-black bg-opacity-50 z-40" wire:click="closeCart"></div>
    @endif
    <button wire:click="addhehe(1, 'Laptop', 15000000)" class="btn btn-primary">
        Thêm vào giỏ hàng
    </button>
    <!-- Popup giỏ hàng -->
    <div
        class="fixed top-0 right-0 bg-white shadow-lg p-6 w-96 h-screen transform transition-transform duration-300 z-50 
                {{ $isOpen ? 'translate-x-0' : 'translate-x-full' }}">
        <h2 class="text-lg font-semibold flex justify-between">
            🛒 Giỏ hàng
            <button wire:click="closeCart" class="text-red-500">❌</button>
        </h2>

        <ul class="mt-4 space-y-2">
            @forelse ($cart as $index => $item)
                <li class="flex justify-between items-center border-b pb-2">
                    <span>{{ $item['name'] }} x {{ $item['quantity'] }}</span>
                    <span>{{ number_format($item['price'] * $item['quantity']) }}đ</span>
                    <button wire:click="remove({{ $index }})" class="text-red-500">❌</button>
                </li>
            @empty
                <li class="text-gray-500">Giỏ hàng trống</li>
            @endforelse
        </ul>

        @if (count($cart) > 0)
            <button wire:click="clearCart()" class="mt-4 bg-red-500 text-white px-4 py-2 rounded-lg w-full">
                Xóa giỏ hàng
            </button>
        @endif
    </div>
</div>
