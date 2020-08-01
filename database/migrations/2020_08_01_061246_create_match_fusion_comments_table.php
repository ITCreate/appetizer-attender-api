<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchFusionCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_fusion_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('match_fusion_id');
            $table->text('review')->comment('レビュー');
            $table->integer('star')->comment("星の数");
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
        Schema::dropIfExists('match_fusion_comments');
    }
}
