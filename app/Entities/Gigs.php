<?php

namespace App\Entities;

use \Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Gigs
 * @package App\Entities;
 *
 * Gigs ORM using eloquent
 */


class Gigs extends Model
{
    use SoftDeletes;

    protected $table = 'gigs';

    public $timestamps = true;

    protected $primaryKey = "id";

    protected $fillable = [
        'venue_id', 'organisation_id', 'title', 'from', 'to'
    ];
    protected $guarded = array('id');

}