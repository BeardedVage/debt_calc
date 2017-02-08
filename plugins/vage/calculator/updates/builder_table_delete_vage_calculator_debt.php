<?php namespace Vage\Calculator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteVageCalculatorDebt extends Migration
{
    public function up()
    {
        Schema::dropIfExists('vage_calculator_debt');
    }
    
    public function down()
    {
        Schema::create('vage_calculator_debt', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->integer('summ');
        });
    }
}
