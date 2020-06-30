<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
           $table->id();
           $table->string('company_name');
           $table->integer('nombre_personnel');
           $table->string('pays');
           $table->string('region');
           $table->string('departement');
           $table->string('village');
           $table->string('quartier');
           $table->string('langue');
           $table->string('annee_creation');
           $table->integer('status')->default(0);
           $table->string('email')->unique();
           $table->timestamp('email_verified_at')->nullable();
           $table->string('password');
           $table->rememberToken();
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
        Schema::dropIfExists('company');
    }
}
