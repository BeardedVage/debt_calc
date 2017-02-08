<?php 
use Illuminate\Support\Facades\DB;class Cms589ae273b375e862229874_4191414996Class extends \Cms\Classes\PartialCode
{

public function onStart()
    {
    $this['debt'] = DB::table('vage_calculator_debt')->where('debt', '>', 0)->sum('debt');
    }
}
