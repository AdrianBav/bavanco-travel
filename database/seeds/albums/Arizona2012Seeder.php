<?php

use Illuminate\Database\Seeder;

class Arizona2012Seeder extends Seeder
{
    /**
     * Album ID.
     *
     * @var  integer
     */
    public $album_id = 6;

    /**
     * Album default camera.
     *
     * @var  integer
     */
    public $default_camera = 'DMC-TZ3';

    /**
     * Album photographs.
     *
     * @var  array
     */
    public $photographs = [
        [
            'filename' => 'grand_canyon.jpg',
            'caption'  => 'The Grand Canyon',
        ],
        [
            'filename' => 'observation_point.jpg',
            'caption'  => 'An observation point',
        ],
        [
            'filename' => 'grand_canyon_hopi_point.jpg',
            'caption'  => 'The Grand Canyon: Hopi Point',
        ],
        [
            'filename' => 'sky.jpg',
            'caption'  => 'Arizona Sky',
        ],
        [
            'filename' => 'flora.jpg',
            'caption'  => 'Canyon flora',
        ],
        [
            'filename' => 'fauna.jpg',
            'caption'  => 'Canyon fauna',
        ],
        [
            'filename' => 'grand_canyon_the_abyss.jpg',
            'caption'  => 'The Grand Canyon: The Abyss',
        ],
        [
            'filename' => 'jillian.jpg',
            'caption'  => 'Jillian looks on',
        ],
        [
            'filename' => 'adrian.jpg',
            'caption'  => 'Adrian looks back',
        ],
        [
            'filename' => 'lookout.jpg',
            'caption'  => 'A Lookout over the canyon',
        ],
        [
            'filename' => 'switchbacks.jpg',
            'caption'  => 'Switchbacks leading to the bottom of the canyon',
        ],
        [
            'filename' => 'panoramic.jpg',
            'caption'  => 'Panoramic of the Grand Canyon',
        ],
        [
            'filename' => 'devils_bridge.jpg',
            'caption'  => 'Our hike to Devil\'s Bridge in Sedona',
        ],
    ];
}
