<?php

use Illuminate\Database\Seeder;

class LonJillianSeeder extends Seeder
{
    /**
     * Album ID.
     *
     * @var  integer
     */
    public $album_id = 1;

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
            'filename' => 'bus_stop.jpg',
            'caption'  => 'Jillian waiting for a bus.',
        ],
        [
            'filename' => 'pies.jpg',
            'caption'  => 'Pies.',
            'camera'   => 'DSC-W70',
        ],
        [
            'filename' => 'panda_cat.jpg',
            'caption'  => 'Panda Cat.',
        ],
        [
            'filename' => 'anti_climb_paint.jpg',
            'caption'  => 'Warning Anti-Climb Paint.',
        ],
        [
            'filename' => 'lloyds_building.jpg',
            'caption'  => 'The Lloyd\'s Building.',
        ],
        [
            'filename' => 'the_city.jpg',
            'caption'  => 'The Gherkin.',
        ],
        [
            'filename' => 'london_stone.jpg',
            'caption'  => 'London Stone, seen through its protective grille.',
        ],
        [
            'filename' => 'jillian_dlr.jpg',
            'caption'  => 'Jillian\'s first ride on the DLR.',
            'camera'   => 'DSC-W70',
        ],
        [
            'filename' => 'canary_wharf.jpg',
            'caption'  => 'Canary Wharf.',
        ],
        [
            'filename' => 'jillian_canary_wharf.jpg',
            'caption'  => 'Jillian at Canary Wharf.',
        ],
        [
            'filename' => 'jillian_docklands_museum.jpg',
            'caption'  => 'Jillian at the Museum of London Docklands.',
        ],
        [
            'filename' => 'jillian_and_adrian.jpg',
            'caption'  => 'Jillian and Adrian.',
        ],
        [
            'filename' => 'tower_hill_garden.jpg',
            'caption'  => 'Tower Hill Garden.',
            'camera'   => 'DSC-W70',
        ],
        [
            'filename' => 'tower_of_london.jpg',
            'caption'  => 'The Tower of London.',
        ],
        [
            'filename' => 'jillian_london_tower.jpg',
            'caption'  => 'Jillian at the Tower.',
        ],
        [
            'filename' => 'arrowslit_windsor.jpg',
            'caption'  => 'Arrowslit.',
        ],
        [
            'filename' => 'tower_bridge.jpg',
            'caption'  => 'Tower Bridge.',
        ],
        [
            'filename' => 'tower_bridge_open.jpg',
            'caption'  => 'Tower Bridge Raised.',
        ],
        [
            'filename' => 'hms_belfast.jpg',
            'caption'  => 'HMS Belfast.',
        ],
        [
            'filename' => 'jillian_hms_belfast.jpg',
            'caption'  => 'Jillian aboard HMS Belfast.',
        ],
        [
            'filename' => 'city_cruises.jpg',
            'caption'  => 'City Cruises.',
        ],
        [
            'filename' => 'jillian_turns_valve.jpg',
            'caption'  => 'Jillian turns a valve.',
        ],
        [
            'filename' => 'jillian_headphones.jpg',
            'caption'  => 'Jillian identifying underwater sounds.',
        ],
        [
            'filename' => 'london_bridge.jpg',
            'caption'  => 'London Bridge.',
        ],
        [
            'filename' => 'adrian_and_jillian.jpg',
            'caption'  => 'Adrian and Jillian.',
            'camera'   => 'DSC-W70',
        ],
        [
            'filename' => 'hungerford_bridge.jpg',
            'caption'  => 'The Hungerford Bridge.',
        ],
        [
            'filename' => 'aquarium.jpg',
            'caption'  => 'London Aquarium.',
        ],
        [
            'filename' => 'monument.jpg',
            'caption'  => 'Monument to the Great Fire of London.',
            'camera'   => 'DSC-W70',
        ],
        [
            'filename' => 'jillian_monument.jpg',
            'caption'  => 'Jillian at the top of Monument.',
        ],
        [
            'filename' => 'view_from_monument.jpg',
            'caption'  => 'View from the top of Monument.',
        ],
        [
            'filename' => 'british_museum.jpg',
            'caption'  => 'Adrian and Jillian outside the British Museum.',
        ],
        [
            'filename' => 'transport_museum.jpg',
            'caption'  => 'Adrian at the London Transport Museum.',
            'camera'   => 'DSC-W70',
        ],
        [
            'filename' => 'jillian_oxford_street.jpg',
            'caption'  => 'Jillian at Oxford Circus.',
        ],
        [
            'filename' => 'phone_box.jpg',
            'caption'  => 'London Phone Box.',
        ],
        [
            'filename' => 'scots_guards.jpg',
            'caption'  => 'The Scots Guards outside of the Guards Museum.',
            'camera'   => 'DSC-W70',
        ],
        [
            'filename' => 'taxi.jpg',
            'caption'  => 'London Taxi Sign with Victoria Tower in background.',
        ],
        [
            'filename' => 'big_ben.jpg',
            'caption'  => 'The dial of the Great Clock of Westminster.',
        ],
        [
            'filename' => 'jillian_mini.jpg',
            'caption'  => 'Jillian at the Science Museum.',
        ],
        [
            'filename' => 'millbank_tower.jpg',
            'caption'  => 'View from Millbank Tower.',
        ],
        [
            'filename' => 'jillian_millbank_tower.jpg',
            'caption'  => 'Jillian at Millbank Tower.',
        ],
        [
            'filename' => 'camden_lock.jpg',
            'caption'  => 'Camden Lock.',
        ],
        [
            'filename' => 'graham_coxon.jpg',
            'caption'  => 'Graham Coxon at the Barbican.',
        ],
        // Day trip to Kew Gardens
        [
            'filename' => 'palm_house.jpg',
            'caption'  => 'Day trip to Kew Gardens: The Palm House and Parterre.',
        ],
        [
            'filename' => 'museum1.jpg',
            'caption'  => 'Palm House Pond with Museum No. 1 in background, Kew Gardens.',
        ],
        [
            'filename' => 'pagoda.jpg',
            'caption'  => 'The Pagoda, Kew Gardens.',
        ],
        [
            'filename' => 'jillian_temperate_house.jpg',
            'caption'  => 'Jillian at the Temperate House, Kew Gardens.',
        ],
        [
            'filename' => 'spiral_starecase.jpg',
            'caption'  => 'Spiral Starecase, Kew Gardens.',
        ],
        [
            'filename' => 'temperate_house_walkway.jpg',
            'caption'  => 'Temperate House walkway, Kew Gardens.',
        ],
        [
            'filename' => 'peacock.jpg',
            'caption'  => 'Peacock, Kew Gardens.',
        ],
        [
            'filename' => 'tree.jpg',
            'caption'  => 'Tree, Kew Gardens.',
        ],
        [
            'filename' => 'jillian_kew.jpg',
            'caption'  => 'Jillian, Kew Gardens.',
        ],
        [
            'filename' => 'kew_palace.jpg',
            'caption'  => 'The Palace at Kew.',
        ],
        [
            'filename' => 'kiss.jpg',
            'caption'  => 'A Kiss.',
        ],
        [
            'filename' => 'silhouette.jpg',
            'caption'  => 'Silhouette.',
            'camera'   => 'DSC-W70',
        ],
        [
            'filename' => 'waterlilies.jpg',
            'caption'  => 'Waterlily House, Kew Gardens.',
        ],
        // Day trip to Dover Castle
        [
            'filename' => 'saxon_remains.jpg',
            'caption'  => 'Day trip to Dover Castle: The view down from the possible Saxon burgh, and Harbour beyond.',
        ],
        [
            'filename' => 'union_jack.jpg',
            'caption'  => 'Union Jack, Dover Castle.',
        ],
        [
            'filename' => 'anglo_saxon_church.jpg',
            'caption'  => 'Anglo-Saxon church, Dover Castle.',
        ],
        [
            'filename' => 'gun_emplacement.jpg',
            'caption'  => 'Anti-aircraft gun emplacements, Dover Castle.',
        ],
        [
            'filename' => 'arrowslit_dover.jpg',
            'caption'  => 'Arrowslit, Dover Castle.',
        ],
        [
            'filename' => 'white_cliffs.jpg',
            'caption'  => 'The White Cliffs of Dover',
        ],
    ];
}
