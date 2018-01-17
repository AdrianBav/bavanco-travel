<?php

use Illuminate\Database\Seeder;

class England2015Seeder extends Seeder
{
    /**
     * Album ID.
     *
     * @var  integer
     */
    public $album_id = 9;

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
        // Cornwall
        [
            'filename' => 'st_ives.jpg',
            'caption'  => 'St. Ives, Cornwall.',
        ],
        [
            'filename' => 'fishing_boats.jpg',
            'caption'  => 'Fishing Boats, St. Ives.',
        ],
        [
            'filename' => 'the_island.jpg',
            'caption'  => 'The Island, St. Ives.',
        ],
        [
            'filename' => 'porthmeor_beach.jpg',
            'caption'  => 'Porthmeor Beach, St. Ives.',
        ],
        [
            'filename' => 'jillian_on_the_beach.jpg',
            'caption'  => 'Jillian on Porthmeor Beach.',
            'camera'   => 'Galaxy Alpha',
        ],
        [
            'filename' => 'porthminster_beach.jpg',
            'caption'  => 'Porthminster Beach, St. Ives.',
        ],
        [
            'filename' => 'cornish_band_member.jpg',
            'caption'  => 'Cornish Band Member.',
        ],
        [
            'filename' => 'lands_end.jpg',
            'caption'  => 'Lands End.',
        ],
        [
            'filename' => 'lands_end_visitors_centre.jpg',
            'caption'  => 'Lands End with visitors centre in the background.',
        ],
        [
            'filename' => 'porthcurno_beach.jpg',
            'caption'  => 'Porthcurno Beach, Porthcurno.',
        ],
        [
            'filename' => 'minack_theatre.jpg',
            'caption'  => 'Minack Theatre, Porthcurno.',
        ],
        [
            'filename' => 'jillian.jpg',
            'caption'  => 'Jillian.',
        ],
        [
            'filename' => 'mousehole.jpg',
            'caption'  => 'Mousehole, Cornwall.',
        ],
        [
            'filename' => 'mousehole harbour.jpg',
            'caption'  => 'Mousehole Harbour.',
        ],
        [
            'filename' => 'st_michaels_mount.jpg',
            'caption'  => 'St. Michaels Mount, Cornwall.',
            'camera'   => 'Galaxy Alpha',
        ],
        // Bath
        [
            'filename' => 'river_avon.jpg',
            'caption'  => 'River Avon, Bath.',
            'camera'   => 'Galaxy Alpha',
        ],
        [
            'filename' => 'pulteney_bridge.jpg',
            'caption'  => 'Pulteney Bridge, Bath.',
        ],
        [
            'filename' => 'bath_abbey.jpg',
            'caption'  => 'Bath Abbey.',
        ],
        [
            'filename' => 'royal_crescent.jpg',
            'caption'  => 'Royal Crescent, Bath.',
        ],
        [
            'filename' => 'roman_baths.jpg',
            'caption'  => 'Roman Baths, Bath.',
            'camera'   => 'Galaxy Alpha',
        ],
        [
            'filename' => 'the_great_bath.jpg',
            'caption'  => 'The Great Bath.',
        ],
        [
            'filename' => 'steam_bath.jpg',
            'caption'  => 'The Great Bath is fed with hot water from the hot spring.',
        ],
        [
            'filename' => 'the_sacred_pool.jpg',
            'caption'  => 'The Sacred Pool.',
        ],
        [
            'filename' => 'victorian_superstructure.jpg',
            'caption'  => 'Victorian Superstructure.',
        ],
        // Carlby
        [
            'filename' => 'horse.jpg',
            'caption'  => 'Horse.',
        ],
        [
            'filename' => 'the_olive_branch.jpg',
            'caption'  => 'The Olive Branch Pub, Clipsham.',
        ],
        // London
        [
            'filename' => 'westminster.jpg',
            'caption'  => 'Westminster, London.',
            'camera'   => 'Galaxy Alpha',
        ],
        [
            'filename' => 'london_eye.jpg',
            'caption'  => 'London Eye.',
        ],
        [
            'filename' => 'spindle_hub_and_tensioned_cables.jpg',
            'caption'  => 'The spindle, hub, and tensioned cables that support the rim.',
            'camera'   => 'Galaxy Alpha',
        ],
        [
            'filename' => 'regents_park.jpg',
            'caption'  => 'Regents Park, London.',
        ],
        [
            'filename' => 'trafalgar_square.jpg',
            'caption'  => 'Trafalgar Square, London.',
        ],
        [
            'filename' => 'nelsons_column.jpg',
            'caption'  => 'Nelsons Column, Trafalgar Square.',
        ],
        [
            'filename' => 'national_gallery.jpg',
            'caption'  => 'National Gallery, Trafalgar Square.',
        ],
        [
            'filename' => 'victoria_and_albert_museum_exterior.jpg',
            'caption'  => 'Victoria and Albert Museum.',
        ],
        [
            'filename' => 'victoria_and_albert_museum_interior.jpg',
            'caption'  => 'V&A Renaissance Raum.',
        ],
        [
            'filename' => 'hms_belfast.jpg',
            'caption'  => 'HMS Belfast, London.',
        ],
        [
            'filename' => 'tower_of_london.jpg',
            'caption'  => 'Tower of London.',
        ],
        [
            'filename' => 'tower_bridge.jpg',
            'caption'  => 'Tower Bridge, London.',
        ],
        [
            'filename' => 'east_lawn.jpg',
            'caption'  => 'East Lawn, Natural History Museum.',
        ],
        [
            'filename' => 'natural_history_museum.jpg',
            'caption'  => 'Natural History Museum, London.',
        ],
        [
            'filename' => 'dinosaur.jpg',
            'caption'  => '&quot;Dippy&quot; at the Natural History Museum.',
        ],
        [
            'filename' => 'tube.jpg',
            'caption'  => 'Hammersmith & City line.',
        ],
        [
            'filename' => 'st_pancras_renaissance_london_hotel.jpg',
            'caption'  => 'St. Pancras Renaissance London Hotel.',
        ],
        [
            'filename' => 'clock_tower.jpg',
            'caption'  => 'St. Pancras Clock Tower.',
        ],
    ];
}
