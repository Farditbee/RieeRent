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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('nama');
            $table->string('model');
            $table->string('ukuran');
            $table->float('harga');
            $table->string('jaminan');
            $table->date('tgl_pesan');
            $table->number('lama');
            $table->string('metode');
            $table->enum('status', ['Proses Transaksi', 'Proses Perentalan', 'Transaksi Selesai', 'Ditolak']);
            $table->nohp('nohp');
            $table->string('alamat');
            $table->string('ig');
            $table->float('total');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
