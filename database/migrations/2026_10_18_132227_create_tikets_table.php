<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tiket', 150);
            $table->text('deskripsi')->nullable();
            
            $table->foreignId('kategori_id')->constrained('kategoris')->onDelete('cascade');
                  
            $table->decimal('harga', 12, 2);
            $table->string('img')->nullable();
            $table->integer('stok')->default(0);
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tikets');
    }
};