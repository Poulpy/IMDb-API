<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NameBasic extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'name_basics';


    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'nconst';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;


    /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';
}
