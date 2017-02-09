<?php 
use Vage\Calculator\Models\Payments;use RainLab\User\Facades\Auth;class Cms589c950667dac611884786_1559344881Class extends \Cms\Classes\PartialCode
{



public function onStart()
{
    $user = Auth::getUser();
    $this['months'] = Payments::where('uid', '=', $user->id)
        ->get();
}
}
