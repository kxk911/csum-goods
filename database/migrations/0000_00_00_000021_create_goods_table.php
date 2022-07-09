<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('brand_id')
                ->nullable()
                ->constrained('brands')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->string('slug')
                ->nullable();
            $table->boolean('visible')
                ->default('true');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('goods');
    }
};