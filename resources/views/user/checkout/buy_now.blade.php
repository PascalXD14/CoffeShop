@extends('layout.navbar')

@section('title', 'Checkout')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-amber-50 via-white to-orange-50 py-12">

<div class="max-w-6xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-10">

{{-- LEFT: DETAIL PRODUK --}}
<div class="bg-white p-8 rounded-3xl shadow-xl">
    <h2 class="text-2xl font-bold mb-6">🛍️ Detail Pesanan</h2>

    <div class="flex gap-6 items-center">
        <img src="{{ asset('storage/'.$product->image) }}" class="w-32 h-32 object-cover rounded-xl shadow">

        <div>
            <h3 class="text-xl font-bold">{{ $product->name }}</h3>
            <p class="text-gray-500">{{ $product->description }}</p>

            <p class="text-amber-600 font-bold text-lg mt-2">
                Rp{{ number_format($product->price,0,',','.') }}
            </p>
        </div>
    </div>

    {{-- Quantity --}}
    <div class="mt-6 flex items-center gap-4">
        <label class="font-medium">Jumlah:</label>
        <input type="number" id="qty" value="1" min="1" max="{{ $product->stock }}"
            class="border px-3 py-2 rounded-lg w-20 text-center">
    </div>

    {{-- Total --}}
    <div class="mt-6 text-xl font-bold">
        Total: <span id="totalPrice" class="text-amber-600"></span>
    </div>
</div>

{{-- RIGHT: DATA PEMBAYARAN --}}
<div class="bg-white p-8 rounded-3xl shadow-xl">
    <h2 class="text-2xl font-bold mb-6">💳 Data Pembayaran</h2>

    <form action="{{ route('checkout.confirm') }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <input type="hidden" name="qty" id="qtyHidden">
        <input type="hidden" name="total" id="totalHidden">

        {{-- Nama --}}
        <div class="mb-4">
            <label class="block font-medium">Nama Pemesan</label>
            <input type="text" name="name" value="{{ $user->name }}" class="w-full border p-3 rounded-xl">
        </div>

        {{-- Alamat --}}
        <div class="mb-4">
            <label class="block font-medium">Alamat Pengiriman</label>
            <textarea name="address" class="w-full border p-3 rounded-xl" rows="3"></textarea>
        </div>

        {{-- Metode Pembayaran --}}
        <div class="mb-6">
            <label class="block font-medium mb-2">Metode Pembayaran</label>

            <select name="payment_method" class="w-full border p-3 rounded-xl">
                <option value="COD">Cash On Delivery (COD)</option>
                <option value="BCA">Transfer BCA</option>
                <option value="BRI">Transfer BRI</option>
                <option value="DANA">DANA</option>
                <option value="OVO">OVO</option>
                <option value="GOPAY">GoPay</option>
            </select>
        </div>

        {{-- Button --}}
        <button class="w-full bg-gradient-to-r from-amber-500 to-orange-600 text-white py-4 rounded-xl font-bold hover:scale-105 transition shadow-xl">
            ✅ Konfirmasi Pesanan
        </button>

    </form>
</div>

</div>
</div>

<script>
let price = {{ $product->price }};

function updateTotal() {
    let qty = document.getElementById('qty').value;
    let total = price * qty;

    document.getElementById('totalPrice').innerText = "Rp" + total.toLocaleString('id-ID');
    document.getElementById('qtyHidden').value = qty;
    document.getElementById('totalHidden').value = total;
}

document.getElementById('qty').addEventListener('input', updateTotal);
updateTotal();
</script>
@endsection
