<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchFusionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_fusions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alcoholic_beverages_id')->comment('ベースのお酒ID');
            $table->unsignedBigInteger('one_nibble_id')->comment('1つ目のおつまみID');
            $table->unsignedBigInteger('two_nibble_id')->comment('2つ目のおつまみID');
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
        Schema::dropIfExists('match_fusions');
    }
}
