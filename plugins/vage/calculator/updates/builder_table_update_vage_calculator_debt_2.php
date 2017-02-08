<?php namespace Vage\Calculator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVageCalculatorDebt2 extends Migration
{
    public function up()
    {
        Schema::table('vage_calculator_debt', function($table)
        {
            $table->string('month');
            $table->integer('salary');
            $table->integer('debt');
            $table->integer('status')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('vage_calculator_debt', function($table)
        {
            $table->dropColumn('month');
            $table->dropColumn('salary');
            $table->dropColumn('debt');
            $table->dropColumn('status');
        });
    }
}
