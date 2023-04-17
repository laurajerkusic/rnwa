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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('emp_no',11)->primary()->nullable(false);
            $table->date('birth_date')->nullable(false)->default(null);
            $table->string('first_name',14)->nullable(false)->default(null);
            $table->string('last_name',16)->nullable(false);
            $table->enum('gender',['M','F'])->nullable(false);
            $table->date('hire_date')->nullable(false);
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
        Schema::dropIfExists('employees');
    }
};
