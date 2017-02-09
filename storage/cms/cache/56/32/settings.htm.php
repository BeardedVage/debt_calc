<?php 
use Illuminate\Support\Facades\DB;use RainLab\User\Facades\Auth;class Cms589c5078e4c8f800322510_1483302260Class extends \Cms\Classes\PartialCode
{



public function onStart()
    {
    $user = Auth::getUser();
    $this['surname'] = $user->surname;
    }
}
