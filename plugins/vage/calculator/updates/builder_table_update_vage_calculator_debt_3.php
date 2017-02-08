<?php namespace Vage\Calculator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVageCalculatorDebt3 extends Migration
{
    public function up()
    {
        Schema::table('vage_calculator_debt', function($table)
        {
            $table->dropColumn('status');
        });
    }
    
    public function down()
    {
        Schema::table('vage_calculator_debt', function($table)
        {
            $table->integer('status')->default(0);
        });
    }
}
