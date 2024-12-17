<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Selamat Datang di Keuangan Jaya Abadi Petshop") }}
                </div>
            </div>

            <div class="flex flex-wrap pt-2 gap-2 responsiv-margin">
                <a href="{{ route('modalAwal.create') }}">
                    <div class="card bg-blue-700 p-1 mt-6" style="width: 14rem;">
                        <div class="card-body flex">
                            <img src="image/accounting-book.png" class="mb-4 hidden sm:block h-20" alt="">
                            <div>
                                <h5 class="card-title text-white">Modal Awal Hari ini</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary text-white">Rp.</h6>
                                <p class="card-text text-white">
                                {{ number_format(App\Models\ModalAwals::whereDate('tanggal', \Carbon\Carbon::today())->sum('jumlah'), 0, ',', '.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </a>

                <div class="card bg-blue-600 p-1 mt-6" style="width: 14rem;">
                    <div class="card-body flex"> 
                        <img src="image/wallet.png" class="mb-4 mr-2 hidden sm:block h-20" alt="">
                        <div>
                        @php
                            $totalPemasukan = App\Models\UangMasuk::sum('jumlah');
                            $totalPengeluaran = App\Models\UangKeluar::sum('jumlah');
                            $saldo = $totalPemasukan - $totalPengeluaran;
                        @endphp
                            <h5 class="card-title text-white">Saldo</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary text-white">Rp.</h6>
                            <p class="card-text text-white">
                                {{ number_format($saldo, 0, ',', '.') }}
                            </p>
                        </div>

                    </div>
                </div>

                <a href="{{ route('datapengeluaran.index') }}">
                    <div class="card bg-red-600 p-1 mt-6" style="width: 14rem;">
                        <div class="card-body flex">
                            <img src="image/accounting-book.png" class="mb-4 hidden sm:block h-20" alt="">
                            <div>
                                <h5 class="card-title text-white">Pengeluaran</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary text-white">Rp.</h6>
                                <p class="card-text text-white">
                                    {{ number_format(App\Models\UangKeluar::sum('jumlah'), 0, ',', '.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{ route('datapemasukan.index')}}">

                    <div class="card bg-green-600 p-1 mt-6" style="width: 14rem;">
                        <div class="card-body flex">
                            <img src="image/save-money.png" class="mb-4 hidden sm:block h-20" alt="">
                            <div>
                                <h5 class="card-title text-white">Pemasukan</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary text-white">Rp.</h6>
                                <p class="card-text text-white">
                                    {{ number_format(App\Models\UangMasuk::sum('jumlah'), 0, ',', '.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="container px-4 mx-auto">

                        <div class="p-6 m-20 bg-white rounded shadow">
                            {!! $chart->container() !!}
                        </div>

                    </div>
        </div>
    
    </div>

    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
</x-app-layout>