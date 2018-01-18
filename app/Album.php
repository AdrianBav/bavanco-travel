<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
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
     * Get the photographs for the album.
     */
    public function photographs()
    {
        return $this->hasMany('App\Photograph');
    }


    // Accessors & Mutators

    /**
     * Get the albums's thumbnail.
     *
     * @return string
     */
    public function getThumbnailAttribute()
    {
        return asset(sprintf('storage/albums/%s.jpg', $this->slug));
    }
}
