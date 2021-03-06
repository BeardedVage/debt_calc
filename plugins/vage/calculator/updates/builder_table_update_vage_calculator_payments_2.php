<?php namespace Vage\Calculator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVageCalculatorPayments2 extends Migration
{
    public function up()
    {
        Schema::table('vage_calculator_payments', function($table)
        {
            $table->date('added_at');
            $table->integer('uid')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('vage_calculator_payments', function($table)
        {
            $table->dropColumn('added_at');
            $table->integer('uid')->unsigned()->change();
        });
    }
}
