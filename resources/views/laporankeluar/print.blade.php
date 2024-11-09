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
            <th>No</th>
            <th>Tanggal</th>
            <th>Keterangan Pengeluaran</th>
            <th>Jumlah Pengeluaran</th>
        </tr>
        @php $num = 1; @endphp
        @foreach($uang_keluars as $um)
        <tr>
            <td>{{ $num++ }}</td>
            <td>{{ $um->tanggal }}</td>
            <td>{{ $um->keterangan_pemasukan }}</td>
            <td>{{ $um->jumlah }}</td>
        </tr>
        @endforeach
        <tr>
                                <td rowspan="1" colspan="4">TOTAL : Rp.{{ number_format(App\Models\UangKeluar::sum('jumlah'), 0, ',', '.') }}</td>
                            </tr>
    </table>
  
</body>
</html>