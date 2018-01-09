<?php

namespace App\Entities;

use \Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Venue
 * @package App\Entities
 *
 * Venue ORM using eloquent
 */
class Venue extends Model
{
    use SoftDeletes;

    protected $table = 'venue';

    public $timestamps = true;

    protected $primaryKey = "id";

    protected $fillable = [
        'name', 'address'
    ];
    protected $guarded = array('id');

}