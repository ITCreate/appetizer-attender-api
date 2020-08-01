<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlavorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flavors', function (Blueprint $table) {
            $table->id();
            $table->boolean('sweet_flg')->comment('甘味');
            $table->boolean('acid_flg')->comment('酸味');
            $table->boolean('salt_flg')->comment('塩味');
            $table->boolean('bitter_flg')->comment('苦味');
            $table->boolean('spice_flg')->comment('辛味');
            $table->boolean('astringency_flg')->comment('渋み');
            $table->boolean('umami_flg')->comment('うま味');
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
        Schema::dropIfExists('flavors');
    }
}
