<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CameraType extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    // Eloquent Relationships

    /**
     * Get the cameras for the album.
     */
    public function cameras()
    {
        return $this->hasMany('App\Camera');
    }
}
