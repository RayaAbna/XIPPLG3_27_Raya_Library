<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom id sebagai primary key
            $table->unsignedBigInteger('book_id'); // Foreign key untuk buku
            $table->unsignedBigInteger('user_id'); // Foreign key untuk pengguna
            $table->date('loan_date'); // Tanggal peminjaman
            $table->date('return_date')->nullable(); // Tanggal pengembalian, nullable
            $table->string('status'); // Status peminjaman (misalnya, 'On Loan', 'Returned')
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('loans');
    }
}