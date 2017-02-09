<?php namespace Vage\Calculator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVageCalculatorDebt4 extends Migration
{
    public function up()
    {
        Schema::table('vage_calculator_debt', function($table)
        {
            $table->integer('uid')->unsigned()
                ->foreign('uid')
                  ->references('id')->on('users');
                  });
    }
    
    public function down()
    {
        Schema::table('vage_calculator_debt', function($table)
        {
            $table->renameColumn('us_id', 'user_id');
        });
    }
}