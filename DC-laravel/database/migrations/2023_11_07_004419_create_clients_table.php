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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string("last_name");
            $table->string("first_name");
            $table->string("address");
            $table->string("phone", 14);
            $table->date("birth_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

};
