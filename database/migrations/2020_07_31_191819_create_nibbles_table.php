<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNibblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nibbles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('img_path');
            $table->string('comment')->comment('一言コメント');
            $table->unsignedBigInteger('flavor_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nibbles');
    }
}
