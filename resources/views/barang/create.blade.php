<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Barang') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('barang.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf

                        <!-- Nama Barang -->
                        <div class="max-w-xl">
                            <x-input-label for="nama_barang" value="Nama Barang" />
                            <x-text-input id="nama_barang" type="text" name="nama_barang" class="mt-1 block w-full" value="{{ old('nama_barang') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('nama_barang')" />
                        </div>

                        <!-- Nama suplier -->
                        <div class="max-w-xl">
                            <x-input-label for="suplier" value="Supplier" />
                            <x-text-input id="suplier" type="text" name="suplier" class="mt-1 block w-full" value="{{ old('suplier') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('suplier')" />
                        </div>

                        <!-- Kategori -->
                        <div class="max-w-xl">
                            <x-input-label for="kategori" value="Kategori" />
                            <select id="kategori" name="kategori" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                <option value="">Pilih Kategori</option>
                                @foreach(['pakan', 'susu', 'pasir'] as $kategori)
                                    <option value="{{ $kategori }}" {{ old('kategori') == $kategori ? 'selected' : '' }}>{{ ucfirst($kategori) }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('kategori')" />
                        </div>

                        <!-- Qty -->
                        <div class="max-w-xl">
                            <x-input-label for="stok" value="Jumlah Stok (stok)" />
                            <x-text-input id="stok" type="number" name="stok" class="mt-1 block w-full" value="{{ old('stok') }}" min="0" required />
                            <x-input-error class="mt-2" :messages="$errors->get('stok')" />
                        </div>

                        <!-- Harga -->
                        <div class="max-w-xl">
                            <x-input-label for="harga" value="Harga" />
                            <x-text-input id="harga" type="number" name="harga" class="mt-1 block w-full" value="{{ old('harga') }}" min="0" required />
                            <x-input-error class="mt-2" :messages="$errors->get('harga')" />
                        </div>

                        <!-- Buttons -->
                        <div class="flex justify-end space-x-4">
                        <a href="{{ route('barang.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-400 active:bg-gray-500 focus:outline-none focus:border-gray-500 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Cancel
                        </a>
                            <x-primary-button name="save_and_create" value="true">Save & Create Another</x-primary-button>
                            <x-primary-button name="save" value="true">Save</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
