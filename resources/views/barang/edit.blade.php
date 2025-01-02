<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Barang') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('barang.update', $barang->id) }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        @method('PATCH')

                        <!-- Nama Barang -->
                        <div class="max-w-xl">
                            <x-input-label for="nama_barang" value="Nama Barang" />
                            <x-text-input id="nama_barang" type="text" name="nama_barang" class="mt-1 block w-full" value="{{ old('nama_barang', $barang->nama_barang) }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('nama_barang')" />
                        </div>

                        <!-- Suplier -->
                        <div class="max-w-xl">
                            <x-input-label for="suplier" value="Suplier" />
                            <x-text-input id="suplier" type="text" name="suplier" class="mt-1 block w-full" value="{{ old('suplier', $barang->suplier) }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('suplier')" />
                        </div>

                        <!-- Kategori -->
                        <div class="max-w-xl">
                            <x-input-label for="kategori" value="Kategori" />
                            <select id="kategori" name="kategori" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                <option value="">Pilih Kategori</option>
                                @foreach(['pakan', 'susu', 'pasir'] as $kategori)
                                    <option value="{{ $kategori }}" {{ old('kategori', $barang->kategori) == $kategori ? 'selected' : '' }}>{{ ucfirst($kategori) }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('kategori')" />
                        </div>

                        <!-- Stok -->
                        <div class="max-w-xl">
                            <x-input-label for="stok" value="Jumlah Stok (stok) - tidak dapat di edit - tambah ulang barang untuk memperbaiki input stok" />
                            <x-text-input id="stok" type="number" name="stok" class="mt-1 block w-full" value="{{ old('stok', $barang->stok) }}" min="0" readonly required />
                            <x-input-error class="mt-2" :messages="$errors->get('stok')" />
                        </div>

                        <!-- Harga -->
                        <div class="max-w-xl">
                            <x-input-label for="harga_beli" value="harga_beli" />
                            <x-text-input id="harga_beli" type="number" name="harga_beli" class="mt-1 block w-full" value="{{ old('harga_beli', $barang->harga_beli) }}" min="0" required />
                            <x-input-error class="mt-2" :messages="$errors->get('harga_beli')" />
                        </div>

                         <!-- Harga -->
                         <div class="max-w-xl">
                            <x-input-label for="harga_jual" value="harga_jual" />
                            <x-text-input id="harga_jual" type="number" name="harga_jual" class="mt-1 block w-full" value="{{ old('harga_jual', $barang->harga_jual) }}" min="0" required />
                            <x-input-error class="mt-2" :messages="$errors->get('harga_jual')" />
                        </div>

                        <!-- Buttons -->
                        <div class="flex justify-end space-x-4">
                        <a href="{{ route('barang.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-400 active:bg-gray-500 focus:outline-none focus:border-gray-500 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Cancel
                        </a>
                            <x-primary-button name="save" value="true">Save</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
