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
        Schema::create('esemenyeks', function (Blueprint $table) {
            $table->biginteger('id');
            $table->integer('kategoria_id');
            $table->string('esemeny-nev',20);
            $table->text(leiras);
            $table->timestamp('datum');
            $table->integer('resztvevok');
            $table->integer('ar');
            $table->string('string',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('esemenyeks');
    }
};
