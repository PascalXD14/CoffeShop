@extends('layout.navbar')

@section('title', 'Checkout')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-amber-50 via-white to-orange-50 py-12">

@php
// Kalau Buy Now
if(isset($product)) {
    $items = [
        $product->id => [
            'name' => $product->name,
            'price' => $product->price,
            'image' => $product->image,
            'qty' => 1
        ]
    ];
}
@endphp

<div class="max-w-6xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-10">

{{-- LEFT: DETAIL PESANAN (SEMUA PRODUK) --}}
<div class="bg-white p-8 rounded-3xl shadow-xl">
    <h2 class="text-2xl font-bold mb-6">🛍️ Detail Pesanan</h2>

    @foreach($items as $id => $item)
    <div class="flex gap-6 items-center mb-6 border-b pb-4">
        <img src="{{ asset('storage/'.$item['image']) }}" class="w-28 h-28 object-cover rounded-xl shadow">

        <div class="flex-1">
            <h3 class="text-lg font-bold">{{ $item['name'] }}</h3>
            <p class="text-amber-600 font-bold">
                Rp{{ number_format($item['price'],0,',','.') }}
            </p>

            <div class="mt-2 flex items-center gap-3">
                <label>Qty:</label>
                <input type="number" 
                       name="qty_display[{{ $id }}]" 
                       value="{{ $item['qty'] }}" 
                       min="1"
                       class="qtyInput border px-2 py-1 w-16 rounded"
                       data-price="{{ $item['price'] }}"
                       data-id="{{ $id }}">
            </div>
        </div>
    </div>
    @endforeach

    {{-- TOTAL SEMUA --}}
    <div class="mt-6 text-2xl font-bold">
        Total Semua: <span id="grandTotal" class="text-amber-600"></span>
    </div>
</div>

{{-- RIGHT: DATA PEMBAYARAN --}}
<div class="bg-white p-8 rounded-3xl shadow-xl">
    <h2 class="text-2xl font-bold mb-6">💳 Data Pembayaran</h2>

    <form action="{{ route('checkout.confirm') }}" method="POST">
        @csrf

        {{-- Hidden items untuk backend --}}
        @foreach($items as $id => $item)
            <input type="hidden" name="items[{{ $id }}][qty]" id="hiddenQty{{ $id }}" value="{{ $item['qty'] }}">
        @endforeach

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

{{-- SCRIPT TOTAL MULTI PRODUK --}}
<script>
function updateTotal() {
    let grandTotal = 0;

    document.querySelectorAll('.qtyInput').forEach(input => {
        let price = parseInt(input.dataset.price);
        let qty = parseInt(input.value);
        let id = input.dataset.id;

        grandTotal += price * qty;

        // update hidden input
        document.getElementById('hiddenQty' + id).value = qty;
    });

    document.getElementById('grandTotal').innerText = "Rp" + grandTotal.toLocaleString('id-ID');
}

document.querySelectorAll('.qtyInput').forEach(input => {
    input.addEventListener('input', updateTotal);
});

updateTotal();
</script>

@endsection
