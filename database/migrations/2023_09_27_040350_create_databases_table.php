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
        Schema::create('databases', function (Blueprint $table) {
            $table->id();
            $table->string('Tanggal');
            $table->string('ORG_CODE');
            $table->string('NAMA_CUSTOMER');
            $table->string('KODE_PRODUK');
            $table->string('AMMOUNT');
            $table->string('HARGA_JUAL');
            $table->string('TRX');
            $table->string('TYPE_MITRA');
            $table->string('AMMOUNT_FIX');
            $table->string('PRODUK_FIX');
            $table->string('BUCKET_NAME');
            $table->string('Type_Produk');
            $table->string('TYPE_BISNIS');
            $table->string('REV_INPPN');
            $table->string('PAJAK');
            $table->string('REV_EXPPN');    
            $table->string('HPP');          
            $table->string('TOTAL_HPP_INPPN');          
            $table->string('TOTAL_HPP_EXPPN');
            $table->string('Margin_INPPN');    
            $table->string('Margin_EXPPN');          
            $table->string('Hari');          
            $table->string('Bulan');    
            $table->string('KET_PROD');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('databases');
    }
};
