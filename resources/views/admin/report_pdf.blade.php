<!DOCTYPE html>
<html>
<head>
    <title>Laporan Dashboard</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 6px; text-align: left; }
        th { background: #f3f3f3; }
    </style>
</head>
<body>

<h2>Laporan Dashboard Coffee Shop</h2>
<p>Tanggal: {{ date('d-m-Y') }}</p>

<h3>Ringkasan</h3>
<ul>
    <li>Total Pengguna: {{ $totalUsers }}</li>
    <li>Total Menu: {{ $totalMenu }}</li>
    <li>Total Pesanan: {{ $totalOrders }}</li>
    <li>Total Pendapatan: Rp {{ number_format($totalRevenue) }}</li>
</ul>

<h3>Pesanan Terbaru</h3>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Customer</th>
            <th>Qty</th>
            <th>Total Harga</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($recentOrders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->user->name ?? '-' }}</td>
            <td>{{ $order->qty }}</td>
            <td>Rp {{ number_format($order->total_price) }}</td>
            <td>{{ $order->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
