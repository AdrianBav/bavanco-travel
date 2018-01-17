<?php

use App\Album;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Album::create([
            'name'        => 'LonJillian (2008 - 2010)',
            'slug'        => 'lonjillian',
            'travel_date' => $this->travelDate($year = 2008, $month = 5),
        ]);

        Album::create([
            'name'        => 'Dallister (2008 - 2011)',
            'slug'        => 'dallister',
            'travel_date' => $this->travelDate($year = 2008, $month = 8),
        ]);

        Album::create([
            'name'        => 'San Francisco (2008)',
            'slug'        => 'san-francisco-2008',
            'travel_date' => $this->travelDate($year = 2008, $month = 9),
        ]);

        Album::create([
            'name'        => 'Spain (2010)',
            'slug'        => 'spain-2010',
            'travel_date' => $this->travelDate($year = 2010, $month = 8),
        ]);

        Album::create([
            'name'        => 'Hawaii (2012)',
            'slug'        => 'hawaii-2012',
            'travel_date' => $this->travelDate($year = 2012, $month = 6),
        ]);

        Album::create([
            'name'        => 'Arizona (2012)',
            'slug'        => 'arizona-2012',
            'travel_date' => $this->travelDate($year = 2012, $month = 9),
        ]);

        Album::create([
            'name'        => 'Washington, DC (2013)',
            'slug'        => 'washington-dc-2013',
            'travel_date' => $this->travelDate($year = 2013, $month = 5),
        ]);

        Album::create([
            'name'        => 'US Virgin Islands (2014)',
            'slug'        => 'us-virgin-islands-2014',
            'travel_date' => $this->travelDate($year = 2014, $month = 2),
        ]);

        Album::create([
            'name'        => 'England (2015)',
            'slug'        => 'england-2015',
            'travel_date' => $this->travelDate($year = 2015, $month = 6),
        ]);

        Album::create([
            'name'        => 'Cayman Islands (2017)',
            'slug'        => 'cayman-islands-2017',
            'travel_date' => $this->travelDate($year = 2017, $month = 2),
        ]);
    }


    // Private Functions

    /**
     * Create a date string.
     *
     * @param   integer  $year
     * @param   integer  $month
     * @return  string
     */
    private function travelDate($year, $month)
    {
        return Carbon::createFromDate($year, $month, $day = 1)->toDateString();
    }
}
