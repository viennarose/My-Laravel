<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class teachers
 * @package App\Models
 * @version September 18, 2021, 12:30 am UTC
 *
 * @property string $Lastname
 * @property string $Firstname
 * @property string $Middlename
 * @property string $Birthday
 * @property string $Religion
 * @property string $Citizenship
 */
class teachers extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'teachers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Lastname',
        'Firstname',
        'Middlename',
        'Birthday',
        'Religion',
        'Citizenship'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Lastname' => 'string',
        'Firstname' => 'string',
        'Middlename' => 'string',
        'Birthday' => 'date',
        'Religion' => 'string',
        'Citizenship' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Lastname' => 'nullable|string|max:50',
        'Firstname' => 'nullable|string|max:50',
        'Middlename' => 'nullable|string|max:50',
        'Birthday' => 'nullable',
        'Religion' => 'nullable|string|max:50',
        'Citizenship' => 'nullable|string|max:50',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
