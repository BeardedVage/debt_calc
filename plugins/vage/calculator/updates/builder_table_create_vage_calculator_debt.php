<?php namespace Vage\Calculator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVageCalculatorDebt extends Migration
{
    public function up()
    {
        Schema::create('vage_calculator_debt', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vage_calculator_debt');
    }
}
