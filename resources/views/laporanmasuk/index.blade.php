<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Laporan Uang Masuk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="GET" action="{{ route('laporanmasuk.index') }}">
                        <div class="flex items-center space-x-4">
                            <div>
                                <x-input-label for="tgl_awal" value="Tanggal Awal" />
                                <x-text-input id="tgl_awal" type="date" name="tgl_awal" class="mt-1 block" required
                                    value="{{ request('tgl_awal') }}" />
                            </div>
                            <div>
                                <x-input-label for="tgl_akhir" value="Tanggal Akhir" />
                                <x-text-input id="tgl_akhir" type="date" name="tgl_akhir" class="mt-1 block" required
                                    value="{{ request('tgl_akhir') }}" />
                            </div>
                            <div class="mt-6">
                                <x-primary-button type="submit">
                                    {{ __('Filter') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>

                    <br>
                <x-primary-button tag="a" href="{{route('laporanmasuk.print')}}" target='blank'>
                        CETAK PDF
                    </x-primary-button>

                    <x-export-button tag="a" href="{{route('laporanmasuk.export')}}" target='_blank'>
                        Export Excel
                    </x-export-button>
                    <br></br>
                    <table class="table">
                         <thead>
                            <tr>
                                <td rowspan="1" colspan="7">TOTAL : Rp.{{ number_format(App\Models\UangMasuk::sum('jumlah'), 0, ',', '.') }}</td>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Tanggal</th>
                                <th>Barang</th>
                                <th>Kategori</th>
                                <th>Keterangan Pemasukan</th>
                                <th>QTY</th>
                                <th>Jumlah Pemasukan</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $num = 1; @endphp
                            @foreach ($uang_masuks as $uang_masuk)
                                <tr>
                                <td>{{ $num++ }}</td>
                                    <td>{{ $uang_masuk->tanggal}}</td>
                                    <td>{{ $uang_masuk->barang->nama_barang}} - {{ $uang_masuk->barang->suplier }}</td>
                                    <td>{{ $uang_masuk->barang->kategori}}</td>
                                    <td>{{ $uang_masuk->keterangan_pemasukan}}</td>
                                    <td>{{ $uang_masuk->qty}}</td>
                                    <td>Rp.{{ number_format($uang_masuk->jumlah, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>
</x-app-layout>