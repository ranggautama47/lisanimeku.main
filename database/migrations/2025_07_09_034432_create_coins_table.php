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
        Schema::create('coins', function (Blueprint $table) {
            $table->id();
            $table->string('channel');             // contoh: dana, gopay, shopeepay, bank, kartukredit
            $table->enum('popup_type', ['qr', 'bank', 'credit_card']); // tipe popup
            $table->unsignedInteger('coin_amount'); // jumlah koin
            $table->unsignedInteger('price');       // harga dalam rupiah
            $table->string('qris_channel')->nullable(); // contoh: logo-dana, logo-gopay, dll
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coins');
    }
};
