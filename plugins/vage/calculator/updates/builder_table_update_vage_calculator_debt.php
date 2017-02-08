<?php namespace Vage\Calculator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVageCalculatorDebt extends Migration
{
    public function up()
    {
        Schema::table('vage_calculator_debt', function($table)
        {
            $table->dropColumn('month_id');
        });
    }
    
    public function down()
    {
        Schema::table('vage_calculator_debt', function($table)
        {
            $table->integer('month_id');
        });
    }
}
