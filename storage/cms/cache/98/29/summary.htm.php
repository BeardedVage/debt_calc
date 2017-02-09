<?php 
use Illuminate\Support\Facades\DB;use RainLab\User\Facades\Auth;class Cms589c27c1f2f36903275232_1858135615Class extends \Cms\Classes\PartialCode
{


public function onStart()
    {
    $user = Auth::getUser();
    $this['debt'] = DB::table('vage_calculator_debt')
        ->where('debt', '>', 0)
        ->where('uid', '=', $user->id)
        ->sum('debt');
    }
}
