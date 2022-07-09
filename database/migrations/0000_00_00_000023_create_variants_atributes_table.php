<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('variant_atributes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('variant_id')
                ->constrained('variants')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('atribute_id')
                ->constrained('atributes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('value');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('variant_atributes');
    }
};