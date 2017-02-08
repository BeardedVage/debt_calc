<?php namespace Vage\Calculator\Models;

use Model;

/**
 * Model
 */
class Debt extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'vage_calculator_debt';
    public $fillable = ['salary', 'status', 'month', 'debt'];
}