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
    Schema::create('ordars', function (Blueprint $table) {
        $table->id();
        $table->string('subject');
        $table->string('Topic');
        $table->text('Description');
        $table->string('files');
        $table->string('accountname');
        $table->string('accountoredrnumber');
        $table->string('papertype');
        $table->string('paperlavel');
        $table->string('format');
        $table->string('language');
        $table->integer('slidecount');
        $table->integer('noofsources');
        $table->string('spacing');
        $table->string('nature');
        $table->integer('ammounttopay');
        $table->date('actualdeadline');
        $table->date('writerdeadline');
        $table->date('paymentdate');
        $table->string('writer');
        $table->string('allocationmode');
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
        Schema::drop('ordars');
    }
};
