<?php 
use Illuminate\Support\Facades\DB;class Cms589c44c65c9d9124710750_1473886908Class extends \Cms\Classes\PartialCode
{

public function onStart()
    {
    $this['debt'] = DB::table('vage_calculator_debt')->where('debt', '>', 0)->sum('debt');
    }
}
