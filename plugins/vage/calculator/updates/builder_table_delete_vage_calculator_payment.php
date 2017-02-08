<?php namespace Vage\Calculator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteVageCalculatorPayment extends Migration
{
    public function up()
    {
        Schema::dropIfExists('vage_calculator_payment');
    }
    
    public function down()
    {
        Schema::create('vage_calculator_payment', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('sum');
        });
    }
}
