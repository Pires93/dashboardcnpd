<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sidebars', function (Blueprint $table) {
            $table->id(); 
            $table->string('titulo')->nullable();
            $table->string('icon')->nullable();
            $table->string('estado')->nullable(); 
            $table->string('url')->nullable(); 
            $table->string('type')->nullable(); 
            $table->timestamp('created_at')->useCurrent()->nullable(); 
            $table->timestamp('updated_at')->useCurrent()->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sidebars');
    }
};
