<?php

use Illuminate\Database\Seeder;

class SanFrancisco2008Seeder extends Seeder
{
    /**
     * Album ID.
     *
     * @var  integer
     */
    public $album_id = 3;

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
            'filename' => 'san_francisco.jpg',
            'caption'  => 'The City',
        ],
        [
            'filename' => 'coit_tower.jpg',
            'caption'  => 'Cityscape with Coit Tower in background',
        ],
        [
            'filename' => 'cable_car_hill.jpg',
            'caption'  => 'San Francisco cable car system',
        ],
        [
            'filename' => 'alcatraz.jpg',
            'caption'  => 'San Francisco Bay with Alcatraz Island in the background',
        ],
        [
            'filename' => 'adrian.jpg',
            'caption'  => 'Adrian makes a call',
            'camera'   => 'DSC-W70',
        ],
        [
            'filename' => 'cable_car_corner.jpg',
            'caption'  => 'San Francisco cable car system',
        ],
        [
            'filename' => 'pier_39.jpg',
            'caption'  => 'Sea lions on Pier 39',
        ],
        [
            'filename' => 'lombard_street.jpg',
            'caption'  => 'Lombard Street',
        ],
        [
            'filename' => 'golden_gate_north.jpg',
            'caption'  => 'A view of the Golden Gate Bridge from Lime Point',
        ],
        [
            'filename' => 'jillian.jpg',
            'caption'  => 'Jillian',
        ],
        [
            'filename' => 'golden_gate_painting.jpg',
            'caption'  => 'Painting the Golden Gate Bridge',
        ],
        [
            'filename' => 'golden_gate_framework.jpg',
            'caption'  => 'Golden Gate Bridge steelwork',
        ],
        [
            'filename' => 'golden_gate_sign.jpg',
            'caption'  => 'Golden Gate Bridge speed limit',
        ],
        [
            'filename' => 'golden_gate_traffic.jpg',
            'caption'  => 'Golden Gate Bridge',
        ],
        [
            'filename' => 'golden_gate_south.jpg',
            'caption'  => 'A view of the Golden Gate Bridge from Marshall\'s Beach',
            'camera'   => 'DSC-W70',
        ],
        [
            'filename' => 'muir_woods_lens_flair.jpg',
            'caption'  => 'Muir Woods: Lens Flare',
        ],
        [
            'filename' => 'muir_woods_tree.jpg',
            'caption'  => 'Muir Woods',
        ],
        [
            'filename' => 'hummingbird.jpg',
            'caption'  => 'A hummingbird',
        ],
        [
            'filename' => 'muir_woods_light.jpg',
            'caption'  => 'Muir Woods: Shards of Light'
        ],
        [
            'filename' => 'muir_woods_trees.jpg',
            'caption'  => 'Muir Woods'
        ],
        [
            'filename' => 'pacific_coast.jpg',
            'caption'  => 'Pacific coast'
        ],
        [
            'filename' => 'pacific_beach.jpg',
            'caption'  => 'The beach'
        ],
        [
            'filename' => 'pacific_sunset.jpg',
            'caption'  => 'A sunset'
        ],
    ];
}
