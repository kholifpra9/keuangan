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

            <div class="flex flex-wrap pt-4 gap-4 responsiv-margin">
                <div class="card bg-blue-600 p-6 mt-6" style="width: 18rem;">
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
                    <div class="card bg-red-600 p-6 mt-6" style="width: 18rem;">
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

                    <div class="card bg-green-600 p-6 mt-6" style="width: 18rem;">
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
        </div>
        <div>
            <!-- <canvas id="myChart"></canvas> -->
            <div class="container mx-auto">
    <div class="flex flex-col items-center w-full max-w-screen-lg p-6 pb-6 mt-10 bg-white rounded-lg shadow-xl sm:p-8">
        <h2 class="text-xl font-bold">Grafik Pemasukan dan Pengeluaran</h2>
        <div class="flex items-end flex-grow w-full mt-2 space-x-2 sm:space-x-3">
            @foreach ($bulan as $index => $namaBulan)
                @php
                    $pemasukanHeightClass = 'h-' . min(intval($pemasukans[$index + 1] / 1000), 96);
                    $pengeluaranHeightClass = 'h-' . min(intval($pengeluarans[$index + 1] / 1000), 96);
                @endphp
                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                    <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">
                        Pemasukan : Rp{{ number_format($pemasukans[$index + 1] ?? 0, 0, ',', '.') }}
                        Pengeluaran : Rp{{ number_format($pengeluarans[$index + 1] ?? 0, 0, ',', '.') }}
                    </span>
                    <div class="flex items-end w-full">
                        <div class="relative flex justify-center flex-grow bg-indigo-400 {{ $pemasukanHeightClass }}"></div>
                        <div class="relative flex justify-center flex-grow bg-red-200 {{ $pengeluaranHeightClass }}"></div>
                    </div>
                    <span class="absolute bottom-0 text-xs font-bold">{{ $namaBulan }}</span>
                </div>
            @endforeach
        </div>
        <div class="flex w-full mt-3">
            <div class="flex items-center ml-auto">
                <span class="block w-4 h-4 bg-indigo-400"></span>
                <span class="ml-1 text-xs font-medium">Pemasukan</span>
            </div>
            <div class="flex items-center ml-4">
                <span class="block w-4 h-4 bg-red-200"></span>
                <span class="ml-1 text-xs font-medium">Pengeluaran</span>
            </div>
        </div>
    </div>
</div>
    <!-- Component End  -->

        </div>
    </div>
</x-app-layout>