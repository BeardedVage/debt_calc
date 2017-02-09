<?php 
use Vage\Calculator\Models\Debt;use RainLab\User\Facades\Auth;class Cms589c4add7efbc306799693_1631879150Class extends \Cms\Classes\PartialCode
{



public function onStart()
{
    $user = Auth::getUser();
    $this['months'] = Debt::where('debt', '>', '0')
        ->where('uid', '=', $user->id)
        ->get();
}
}
