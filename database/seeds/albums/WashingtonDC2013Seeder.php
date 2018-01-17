<?php

use Illuminate\Database\Seeder;

class WashingtonDC2013Seeder extends Seeder
{
    /**
     * Album ID.
     *
     * @var  integer
     */
    public $album_id = 7;

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
            'filename' => 'united_states_capitol_reflection.jpg',
            'caption'  => 'United States Capitol',
        ],
        [
            'filename' => 'united_states_capitol.jpg',
            'caption'  => 'The west front of the United States Capitol',
        ],
        [
            'filename' => 'white_house.jpg',
            'caption'  => 'White House: The southern facade with a semi-circular portico',
        ],
        [
            'filename' => 'colorful_row_of_houses.jpg',
            'caption'  => 'Colorful row of houses',
        ],
        [
            'filename' => 'georgetown_houses.jpg',
            'caption'  => 'Georgetown',
        ],
        [
            'filename' => 'georgetown_house.jpg',
            'caption'  => 'Georgetown house detail',
        ],
        [
            'filename' => 'washington_monument.jpg',
            'caption'  => 'Washington Monument',
        ],
        [
            'filename' => 'washington_monument_from_lincoln_memorial.jpg',
            'caption'  => 'View of Washington Monument from the Lincoln Memorial',
        ],
        [
            'filename' => 'lincoln_memorial.jpg',
            'caption'  => 'Inside the Lincoln Memorial',
        ],
        [
            'filename' => 'the_smithsonian_institution_building.jpg',
            'caption'  => 'The Smithsonian Institution Building',
        ],
        [
            'filename' => 'the_castle.jpg',
            'caption'  => 'The Smithsonian Castle',
        ],
        [
            'filename' => 'union_station_detiail.jpg',
            'caption'  => 'Union Station Detiail',
        ],
        [
            'filename' => 'union_station_ceiling.jpg',
            'caption'  => 'Union Station Ceiling',
        ],
        [
            'filename' => 'metro.jpg',
            'caption'  => 'Metro',
        ],
    ];
}
