<?php 
use Illuminate\Support\Facades\DB;use RainLab\User\Facades\Auth;class Cms589c95842dfb2761444811_1575608748Class extends \Cms\Classes\PartialCode
{



public function onStart()
    {
    $user = Auth::getUser();
    $this['surname'] = $user->surname;
    }
}
