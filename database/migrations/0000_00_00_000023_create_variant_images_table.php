<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('variant_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('variant_id')
                ->constrained('variants')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('url');
            $table->string('name')->nullable();
            $table->string('aditional_info')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('goods');
    }
};