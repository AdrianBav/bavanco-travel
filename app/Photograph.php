<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photograph extends Model
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

    /**
     * The relations to eager load on every query.
     * Note: Required for the 'path' accessor.
     *
     * @var  string
     */
    protected $with = 'album';


    // Eloquent Relationships

    /**
     * Get the album that owns the photograph.
     */
    public function album()
    {
        return $this->belongsTo('App\Album');
    }

    /**
     * Get the camera that owns the photograph.
     */
    public function camera()
    {
        return $this->belongsTo('App\Camera');
    }


    // Accessors & Mutators

    /**
     * Get the photographs's file path.
     *
     * @return string
     */
    public function getPathAttribute()
    {
        return asset(sprintf('storage/albums/%s/%s', $this->album->slug, $this->filename));
    }
}
