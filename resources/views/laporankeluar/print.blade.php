<!DOCTYPE html>
<html>
<head>
    <title>Generate PDF</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { font-size: 24px; font-weight: bold; text-align: center; }
        .table { width: 100%; border-collapse: collapse; }
        .table-bordered { border: 1px solid black; }
        .table-bordered th, .table-bordered td { border: 1px solid black; padding: 8px; text-align: left; }
        .table-bordered th { background-color: #f2f2f2; font-weight: bold; }
    </style>
</head>
<body>
    <p>Laporan Uang Keluar</p>
  
    <table class="table table-bordered">
        <tr>
            <td rowspan="1" colspan="7">TOTAL : Rp.{{ number_format(App\Models\UangKeluar::sum('jumlah'), 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>NO</th>
            <th>Tanggal</th>
            <th>Barang</th>
            <th>Kategori</th>
            <th>Keterangan Pengeluaran</th>
            <th>QTY</th>
            <th>Jumlah Pengeluaran</th>
        </tr>
        @php $num = 1; @endphp
        @foreach($uang_keluars as $uang_keluar)
        <tr>
            <td>{{ $num++ }}</td>   
            <td>{{ $uang_keluar->tanggal}}</td>
            <td>{{ $uang_keluar->barang->nama_barang}} - {{ $uang_keluar->barang->suplier }}</td>
            <td>{{ $uang_keluar->barang->kategori}}</td>
            <td>{{ $uang_keluar->keterangan_pengeluaran}}</td>
            <td>{{ $uang_keluar->qty}}</td>
            <td>Rp.{{ number_format($uang_keluar->jumlah, 0, ',', '.') }}</td>
        </tr>
        @endforeach
        
    </table>
  
</body>
</html>