<?php

namespace App\Entities;

use \Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Organisation
 * @package App\Entities
 *
 * Organisation ORM using eloquent
 */

class Organisation extends Model
{
    use SoftDeletes;

    protected $table = 'organisation';

    public $timestamps = true;

    protected $primaryKey = "id";

    protected $fillable = [
        'name'
    ];
    protected $guarded = array('id');

}