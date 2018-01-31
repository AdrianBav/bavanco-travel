<?php

use Illuminate\Database\Seeder;

class DallisterSeeder extends Seeder
{
    /**
     * Album ID.
     *
     * @var  integer
     */
    public $album_id = 2;

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
        // Downtown Dallas
        [
            'filename' => 'downtown.jpg',
            'caption'  => 'Downtown Dallas',
        ],
        [
            'filename' => 'thanksgiving_square.jpg',
            'caption'  => 'Thanks-Giving Square',
        ],
        [
            'filename' => 'ice_cream.jpg',
            'caption'  => 'Ice Cream',
        ],
        [
            'filename' => 'fountain_place.jpg',
            'caption'  => 'Fountain Place',
        ],
        [
            'filename' => 'one_main_place.jpg',
            'caption'  => 'One Main Place',
        ],
        [
            'filename' => 'boy.jpg',
            'caption'  => 'Painted wall in downtown Dallas parking lot',
        ],
        [
            'filename' => 'parking.jpg',
            'caption'  => 'Bills Coins',
        ],
        [
            'filename' => 'dcccd.jpg',
            'caption'  => 'DCCCD',
        ],
        [
            'filename' => 'dart.jpg',
            'caption'  => 'Pearl/Arts District DART Station',
        ],
        [
            'filename' => 'dallas_museum_of_art.jpg',
            'caption'  => 'Dallas Museum of Art',
        ],
        [
            'filename' => 'sculpture_garden.jpg',
            'caption'  => 'The Nasher Sculpture Center',
        ],
        [
            'filename' => 'jillian_and_adrian.jpg',
            'caption'  => 'Jillian and Adrian',
        ],
        [
            'filename' => 'pioneer_plaza.jpg',
            'caption'  => 'Pioneer Plaza',
        ],
        [
            'filename' => 'main_street_garden_park.jpg',
            'caption'  => 'Main Street Garden Park',
        ],
        [
            'filename' => 'kennedy_memorial.jpg',
            'caption'  => 'John Fitzgerald Kennedy Memorial',
        ],
        [
            'filename' => 'old_red_museum.jpg',
            'caption'  => 'Old Red Museum',
        ],
        [
            'filename' => 'dallas_city_hall.jpg',
            'caption'  => 'Dallas City Hall',
        ],
        [
            'filename' => 'ferris_plaza_park.jpg',
            'caption'  => 'Ferris Plaza Park',
        ],
        [
            'filename' => 'reunion_tower.jpg',
            'caption'  => 'Reunion Tower',
        ],
        // DFW
        [
            'filename' => 'trinity_river.jpg',
            'caption'  => 'The Trinity River in Dallas flooded up to the levees, seen from the Commerce Street bridge',
        ],
        [
            'filename' => 'the_traveling_man.jpg',
            'caption'  => 'The Traveling Man, Deep Ellum',
        ],
        [
            'filename' => 'hand_museum.jpg',
            'caption'  => 'Hand Collection At Baylor Medical Center',
        ],
        [
            'filename' => 'jillian_trolly_station.jpg',
            'caption'  => 'Waiting for the Trolley',
        ],
        [
            'filename' => 'jillian_on_trolly.jpg',
            'caption'  => 'M-Line Trolley',
        ],
        [
            'filename' => 'adrian_uptown.jpg',
            'caption'  => 'Adrian',
            'camera'   => 'Lomo LC-A+',
        ],
        [
            'filename' => 'house.jpg',
            'caption'  => 'Abandoned house, Uptown',
            'camera'   => 'Lomo LC-A+',
        ],
        [
            'filename' => 'texas_star.jpg',
            'caption'  => 'Texas Star',
        ],
        [
            'filename' => 'science_museum.jpg',
            'caption'  => 'The Museum of Nature & Science at Fair Park',
        ],
        [
            'filename' => 'village_theatre.jpg',
            'caption'  => 'Highland Park Village Theatre',
        ],
        [
            'filename' => 'waterfall.jpg',
            'caption'  => 'Turtle Creek',
        ],
        [
            'filename' => 'jillian.jpg',
            'caption'  => 'Jillian',
        ],
        [
            'filename' => 'white_rock_lake.jpg',
            'caption'  => 'White Rock Lake',
        ],
        [
            'filename' => 'cowboy.jpg',
            'caption'  => 'A Cowboy',
        ],
        [
            'filename' => 'smu.jpg',
            'caption'  => 'Southern Methodist University',
        ],
        [
            'filename' => 'meadows_museum.jpg',
            'caption'  => 'Meadows Museum at SMU',
        ],
        [
            'filename' => 'northpark.jpg',
            'caption'  => 'NorthPark Center',
        ],
        [
            'filename' => 'ice_rink.jpg',
            'caption'  => 'Galleria Ice Skating Center',
        ],
        [
            'filename' => 'ozona.jpg',
            'caption'  => 'Ozona Grill and Bar',
        ],
        [
            'filename' => 'adrian.jpg',
            'caption'  => 'Frozen Margarita',
        ],
        [
            'filename' => 'jillian_on_phone.jpg',
            'caption'  => 'The Great Outdoors',
        ],
        [
            'filename' => 'red_hot_and_blue.jpg',
            'caption'  => 'Red Hot & Blue',
        ],
        [
            'filename' => 'babes.jpg',
            'caption'  => 'Babe\'s Chicken Dinner House',
        ],
        [
            'filename' => 'jillian_menu.jpg',
            'caption'  => 'Chili\'s',
        ],
        [
            'filename' => 'jillian_american_airlines.jpg',
            'caption'  => 'American Airlines C.R. Smith Museum',
        ],
        [
            'filename' => 'adrian_flight_museum.jpg',
            'caption'  => 'Frontiers of Flight Museum',
        ],
        [
            'filename' => 'mason.jpg',
            'caption'  => 'Mason Jennings',
        ],
        [
            'filename' => 'southfork.jpg',
            'caption'  => 'Southfork Ranch',
        ],
        [
            'filename' => 'dallas.jpg',
            'caption'  => 'On the set of Dallas',
        ],
        [
            'filename' => 'baseball_stadium.jpg',
            'caption'  => 'Rangers Ballpark in Arlington',
        ],
        [
            'filename' => 'baseball.jpg',
            'caption'  => 'Texas Rangers',
        ],
        [
            'filename' => 'sixflags.jpg',
            'caption'  => 'Six Flags Over Texas',
        ],
        [
            'filename' => 'jillian_at_sixflags.jpg',
            'caption'  => 'Oil Derrick Observation Tower at Six Flags',
        ],
        // Family
        [
            'filename' => 'jillian_photographer.jpg',
            'caption'  => 'Diana Mini',
        ],
        [
            'filename' => 'swimming.jpg',
            'caption'  => 'Pool Time',
        ],
        [
            'filename' => 'adrian_jillian_and_lumi.jpg',
            'caption'  => 'Adrian, Jillian and Lumi',
        ],
        [
            'filename' => 'lumi.jpg',
            'caption'  => 'Lumi',
        ],
        [
            'filename' => 'lumi_and_ball.jpg',
            'caption'  => 'Lumi with yellow bally in background',
        ],
        [
            'filename' => 'jillian_and_adrian_at_table.jpg',
            'caption'  => 'At the kids table',
        ],
        // Outside the metroplex
        [
            'filename' => 'courthouse.jpg',
            'caption'  => 'Parker County courthouse, Weatherford Texas',
            'camera'   => 'Lomo LC-A+',
        ],
        [
            'filename' => 'adrian_in_weatherford.jpg',
            'caption'  => 'Downtown Weatherford',
        ],
        [
            'filename' => 'possum_kingdom.jpg',
            'caption'  => 'Possum Kingdom',
        ],
        [
            'filename' => 'adrian_possum_kingdom.jpg',
            'caption'  => 'Hiking at Possum Kingdom',
        ],
        [
            'filename' => 'cactus.jpg',
            'caption'  => 'Prickly Pear Cactus, Possum Kingdom Lake',
            'camera'   => 'Lomo LC-A+',
        ],
        [
            'filename' => 'sam_houston_statue.jpg',
            'caption'  => 'Sam Houston Statue',
        ],
        [
            'filename' => 'cows.jpg',
            'caption'  => 'Cows',
            'camera'   => 'Lomo LC-A+',
        ],
        // Day Trip to Fort Worth
        [
            'filename' => 'adrian_and_jillian_in_fort_worth.jpg',
            'caption'  => 'Day Trip to Fort Worth',
        ],
        [
            'filename' => 'bass_performance_hall.jpg',
            'caption'  => 'Bass Performance Hall',
        ],
        [
            'filename' => 'convention_center.jpg',
            'caption'  => 'Fort Worth Convention Center',
        ],
        [
            'filename' => 'modern_art_museum.jpg',
            'caption'  => 'Modern Art Museum of Fort Worth',
        ],
        [
            'filename' => 'mudcracks.jpg',
            'caption'  => 'Mudcracks',
        ],
        [
            'filename' => 'botanic_garden.jpg',
            'caption'  => 'Fort Worth Botanic Garden',
            'camera'   => 'Lomo LC-A+',
        ],
        [
            'filename' => 'water_gardens.jpg',
            'caption'  => 'Fort Worth Water Gardens',
        ],
        // Weekend Break in Austin
        [
            'filename' => 'texas_state_capitol.jpg',
            'caption'  => 'Texas State Capitol',
        ],
        [
            'filename' => 'texas_state_capitol_dome.jpg',
            'caption'  => 'Texas State Capitol Dome',
        ],
        // Weekend Break in San Antonio
        [
            'filename' => 'adrian_in_san_antonio.jpg',
            'caption'  => 'Weekend Break in San Antonio',
        ],
        [
            'filename' => 'riverwalk.jpg',
            'caption'  => 'San Antonio River Walk',
        ],
        [
            'filename' => 'mariachi.jpg',
            'caption'  => 'Mariachi Band',
        ],
        [
            'filename' => 'river.jpg',
            'caption'  => 'Paseo del Río',
        ],
        [
            'filename' => 'architecture.jpg',
            'caption'  => 'Architecture',
        ],
        [
            'filename' => 'alamo.jpg',
            'caption'  => 'The Alamo',
        ],
    ];
}
