<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camera extends Model
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
     * Get the camera type that owns the camera.
     */
    public function cameraTypes()
    {
        return $this->belongsTo('App\CameraType');
    }

    /**
     * Get the photographs for the camera.
     */
    public function photographs()
    {
        return $this->hasMany('App\Photograph');
    }
}
