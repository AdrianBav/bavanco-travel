<?php

use Illuminate\Database\Seeder;

class CaymanIslands2017Seeder extends Seeder
{
    /**
     * Album ID.
     *
     * @var  integer
     */
    public $album_id = 10;

    /**
     * Album default camera.
     *
     * @var  integer
     */
    public $default_camera = 'EOS Rebel T6S';

    /**
     * Album photographs.
     *
     * @var  array
     */
    public $photographs = [
        // Conch Point Beach
        [
            'filename' => 'conch_point_beach.jpg',
            'caption'  => 'Conch Point Beach.',
        ],
        [
            'filename' => 'ocean.jpg',
            'caption'  => 'Ocean, Conch Point Beach.',
        ],
        [
            'filename' => 'old_man_fishing.jpg',
            'caption'  => 'Old Man Fishing, Conch Point Beach.',
        ],
        [
            'filename' => 'pier_conch_point_beach.jpg',
            'caption'  => 'Pier, Conch Point Beach.',
        ],
        [
            'filename' => 'crab.jpg',
            'caption'  => 'Crab on pier, Conch Point Beach.',
        ],
        [
            'filename' => 'curly_tailed_lizard.jpg',
            'caption'  => 'Curly-tailed lizard.',
        ],
        // Villas Pappagallo
        [
            'filename' => 'villas_pappagallo.jpg',
            'caption'  => 'Villas Pappagallo.',
        ],
        [
            'filename' => 'villas_pappagallo_tree.jpg',
            'caption'  => 'Villas Pappagallo.',
        ],
        [
            'filename' => 'plumeria.jpg',
            'caption'  => 'Plumeria.',
        ],
        [
            'filename' => 'chicken.jpg',
            'caption'  => 'Chicken.',
        ],
        [
            'filename' => 'villas_pappagallo_appartment.jpg',
            'caption'  => 'Villas Pappagallo.',
        ],
        // Horseback Riding
        [
            'filename' => 'horses.jpg',
            'caption'  => 'Horses on the beach.',
            'camera'   => 'Galaxy S7',
        ],
        [
            'filename' => 'beach_horseback_riding.jpg',
            'caption'  => 'Horseback Riding on the Beach.',
            'camera'   => 'Galaxy S7',
        ],
        [
            'filename' => 'pampered_pony.jpg',
            'caption'  => 'Jillian with Horse (1 hp).',
            'camera'   => 'Galaxy S7',
        ],
        // Spotts Beach
        [
            'filename' => 'jeep.jpg',
            'caption'  => 'Adrian with Jeep (285 hp).',
        ],
        [
            'filename' => 'spotts_beach.jpg',
            'caption'  => 'Spotts Beach.',
            'camera'   => 'Galaxy S7',
        ],
        // Queen Elizabeth II Botanic Park
        [
            'filename' => 'blue_iguana.jpg',
            'caption'  => 'Grand Cayman Blue Iguana, Queen Elizabeth II Botanic Park.',
        ],
        [
            'filename' => 'bananaquit.jpg',
            'caption'  => 'Bananaquit, Queen Elizabeth II Botanic Park.',
        ],
        [
            'filename' => 'jillian_at_botanic_park.jpg',
            'caption'  => 'Jillian, Queen Elizabeth II Botanic Park.',
        ],
        [
            'filename' => 'hibiscus.jpg',
            'caption'  => 'Hibiscus, Queen Elizabeth II Botanic Park.',
        ],
        [
            'filename' => 'water_lilies.jpg',
            'caption'  => 'Water lilies, Queen Elizabeth II Botanic Park.',
        ],
        // Cemetery Beach
        [
            'filename' => 'jillian_cemetery_beach.jpg',
            'caption'  => 'Jillian, Cemetery Beach.',
            'camera'   => 'HERO5 Black',
        ],
        [
            'filename' => 'adrian_cemetery_beach.jpg',
            'caption'  => 'Adrian, Cemetery Beach.',
            'camera'   => 'HERO5 Black',
        ],
        // Rum Point
        [
            'filename' => 'rum_point.jpg',
            'caption'  => 'Rum Point.',
        ],
        [
            'filename' => 'kayaking.jpg',
            'caption'  => 'Kayaking at Rum Point.',
            'camera'   => 'HERO5 Black',
        ],
        [
            'filename' => 'snorkeling.jpg',
            'caption'  => 'Jillian Snorkeling at Rum Point.',
            'camera'   => 'HERO5 Black',
        ],
        [
            'filename' => 'shoal_of_fish.jpg',
            'caption'  => 'Shoal of fish, Rum Point.',
        ],
        [
            'filename' => 'adrian.jpg',
            'caption'  => 'Adrian at Rum Point.',
        ],
        // Smith's Barcadere
        [
            'filename' => 'smiths_barcadere.jpg',
            'caption'  => 'Smith\'s Barcadere.',
        ],
        [
            'filename' => 'family_at_smiths_barcadere.jpg',
            'caption'  => 'Smith\'s Barcadere.',
        ],
        // General
        [
            'filename' => 'breakfast.jpg',
            'caption'  => 'Breakfast at the Grand Cayman Marriott Beach Resort.',
            'camera'   => 'Galaxy S7',
        ],
        [
            'filename' => 'camana_bay.jpg',
            'caption'  => 'Camana Bay.',
            'camera'   => 'Galaxy S7',
        ],
        [
            'filename' => 'palm_trees.jpg',
            'caption'  => 'Palm Trees.',
        ],
        [
            'filename' => 'cruise_ship.jpg',
            'caption'  => 'Cruise ship on the horizon.',
            'camera'   => 'Galaxy S7',
        ],
    ];
}
