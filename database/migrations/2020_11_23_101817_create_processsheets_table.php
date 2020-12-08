<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcesssheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processsheets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('constructions_id');
            $table->string('work_type');
            $table->string('category');
            $table->string('norm');
            $table->float('workload',8,3);
            $table->string('unit');
            $table->float('quantity',8,3);
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
        Schema::dropIfExists('processsheets');
    }
}
