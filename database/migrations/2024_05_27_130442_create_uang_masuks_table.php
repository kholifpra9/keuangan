<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('uang_masuks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('barang_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->integer('qty', false, false);
            $table->double('jumlah');
            $table->date('tanggal');
            $table->string('keterangan_pemasukan');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uang_masuk');
    }
};
