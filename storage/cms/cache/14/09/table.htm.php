<?php 
use Vage\Calculator\Models\Debt;class Cms5899d984c2c23321196095_450105576Class extends \Cms\Classes\PartialCode
{

public function onStart()
{
    $this['months'] = Debt::where('debt', '>', '0')->get();
}
}
