<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Data Pengeluaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('datapengeluaran.store') }}">
                        @csrf

                        <!-- Tanggal -->
                        <div class="max-w-xl mb-4">
                            <label for="tanggal" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Tanggal Pengeluaran</label>
                            <input type="text" name="tanggal" id="tanggal" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('tanggal', now()) }}" required readonly>
                            @error('tanggal')
                                <span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Barang -->
                        <div class="max-w-xl mb-4">
                            <label for="barang_id" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Pilih Barang</label>
                            <select id="barang_id" name="barang_id" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                <option value="">Pilih Barang</option>
                                @foreach($barangs as $barang)
                                    <option value="{{ $barang->id }}" data-harga="{{ $barang->harga }}" {{ old('barang_id') == $barang->id ? 'selected' : '' }}>
                                        {{ $barang->nama_barang }} - {{$barang->suplier}}
                                    </option>
                                @endforeach
                            </select>
                            @error('barang_id')
                                <span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Keterangan Pengeluaran -->
                        <div class="max-w-xl mb-4">
                            <label for="keterangan_pengeluaran" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Keterangan Pengeluaran</label>
                            <input type="text" id="keterangan_pengeluaran" name="keterangan_pengeluaran" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('keterangan_pengeluaran') }}" required>
                            @error('keterangan_pengeluaran')
                                <span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Qty -->
                        <div class="max-w-xl mb-4">
                            <label for="qty" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Jumlah Barang (Qty)</label>
                            <input type="number" id="qty" name="qty" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" min="1" value="{{ old('qty') }}" required>
                            @error('qty')
                                <span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Jumlah -->
                        <div class="max-w-xl mb-4">
                            <label for="jumlah" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Jumlah Pengeluaran</label>
                            <input type="text" id="jumlah" name="jumlah" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @error('jumlah')
                                <span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Buttons -->
                        <div class="flex justify-end space-x-4">
                            <x-primary-button type="submit" name="save" value="true">
                                Simpan Data
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>