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
        Schema::create('accs', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('kode');
            $table->string('nama');
            $table->string('model');
            $table->string('harga');
            $table->enum('stok', ['Tersedia', 'Dipesan']);
            $table->string('keterangan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accs');
    }
};
