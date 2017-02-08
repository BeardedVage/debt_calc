<?php namespace Vage\Calculator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVageCalculatorPayments extends Migration
{
    public function up()
    {
        Schema::create('vage_calculator_payments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('sum');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vage_calculator_payments');
    }
}