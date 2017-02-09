<?php 
use Vage\Calculator\Models\Payments;use RainLab\User\Facades\Auth;class Cms589c48400ee79753194070_1172082903Class extends \Cms\Classes\PartialCode
{



public function onStart()
{
    $user = Auth::getUser();
    $this['months'] = Payments::where('uid', '=', $user->id)
        ->get();
}
}
