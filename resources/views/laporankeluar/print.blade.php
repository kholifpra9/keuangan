<!DOCTYPE html>
<html>
<head>
    <title>Generate PDF</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        header {
            text-align: center;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .headerSection {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logoAndName h1 {
            margin: 0;
            font-size: 20px;
            display: flex;
            align-items: center;
        }
        .logoAndName img {
            margin-right: 10px;
        }
        h2 {
            font-size: 18px;
            margin: 0;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table-bordered {
            border: 1px solid black;
        }
        .table-bordered th, .table-bordered td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        .table-bordered th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        footer {
            text-align: center;
            font-size: 12px;
            margin-top: 20px;
            border-top: 1px solid #000;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <header>
        <div class="headerSection">
            <div class="logoAndName">
                <h1>
                    <img width="100px;" src="{{ public_path('image/petshop.png') }}" alt="Logo">
                    Jaya Abadi Pet Shop
                </h1>
            </div>
            <div>
                <h2>Laporan Pengeluaran</h2>
                <p><b>Tanggal:</b> {{ now()->translatedFormat('l, d F Y') }}</p>
            </div>
        </div>
    </header>

    <main>
      
        <table class="table table-bordered">
            <tr>
                <td rowspan="1" colspan="7"><b>TOTAL:</b> Rp.{{ number_format(App\Models\UangKeluar::sum('jumlah'), 0, ',', '.') }}</td>
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
                <td>{{ $uang_keluar->tanggal }}</td>
                <td>{{ $uang_keluar->barang->nama_barang }} - {{ $uang_keluar->barang->suplier }}</td>
                <td>{{ $uang_keluar->barang->kategori }}</td>
                <td>{{ $uang_keluar->keterangan_pengeluaran }}</td>
                <td>{{ $uang_keluar->qty }}</td>
                <td>Rp.{{ number_format($uang_keluar->jumlah, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </table>
    </main>

    <footer>
        <p>Jaya Abadi Pet Shop - {{ now()->year }}</p>
    </footer>
</body>
</html>
