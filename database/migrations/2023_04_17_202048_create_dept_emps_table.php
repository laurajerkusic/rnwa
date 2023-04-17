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
        Schema::create('dept_emps', function (Blueprint $table) {
            $table->id();
            $table->foreign('emp_no')->references('emp_no')->on('employees')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('dept_no')->references('dept_no')->on('departments')->onDelete('cascade')->onUpdate('cascade');
            $table->date('from_date')->primary()->nullable(false);
            $table->date('to_date')->nullable(false)->default(null);
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
        Schema::dropIfExists('dept_emps');
    }
};
