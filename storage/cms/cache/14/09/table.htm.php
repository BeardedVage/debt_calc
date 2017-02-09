<?php 
use Vage\Calculator\Models\Debt;use RainLab\User\Facades\Auth;class Cms589c94f419cac164314399_4275801414Class extends \Cms\Classes\PartialCode
{



public function onStart()
{
    $user = Auth::getUser();
    $this['months'] = Debt::where('debt', '>', '0')
        ->where('uid', '=', $user->id)
        ->get();
}
}
