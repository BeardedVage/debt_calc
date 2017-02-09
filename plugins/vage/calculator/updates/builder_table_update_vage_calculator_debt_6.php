<?php namespace Vage\Calculator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVageCalculatorDebt6 extends Migration
{
    public function up()
    {
        Schema::table('vage_calculator_debt', function($table)
        {
            $table->integer('uid')->unsigned()->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('vage_calculator_debt', function($table)
        {
            $table->integer('uid')->unsigned(false)->default(0)->change();
        });
    }
}
