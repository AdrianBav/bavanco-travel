<?php

use App\Camera;
use App\Photograph;
use Illuminate\Database\Seeder;

class PhotographsTableSeeder extends Seeder
{
    /**
     * Define album seeders.
     *
     * @var  array
     */
    protected $albumSeeders = [
        LonJillianSeeder::class,
        DallisterSeeder::class,
        SanFrancisco2008Seeder::class,
        Spain2010Seeder::class,
        Hawaii2012Seeder::class,
        Arizona2012Seeder::class,
        WashingtonDC2013Seeder::class,
        USVirginIslands2014Seeder::class,
        England2015Seeder::class,
        CaymanIslands2017Seeder::class,
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->albumSeeders as $albumSeeder) {
            $album = $this->resolve($albumSeeder);

            foreach ($album->photographs as $n => $photograph) {
                $camera_id = $this->getCameraId($photograph, $album->default_camera);

                Photograph::create([
                    'filename'  => $photograph['filename'],
                    'caption'   => $photograph['caption'],
                    'shot'      => $n + 1,
                    'camera_id' => $camera_id,
                    'album_id'  => $album->album_id,
                ]);
            }
        }
    }


    // Private Functions

    /**
     * Get Camera ID from given model.
     *
     * @param   array  $photograph
     * @return  App\Camera
     */
    public function getCameraId($photograph, $default_camera)
    {
        $model = $photograph['camera'] ?? $default_camera;

        return Camera::whereModel($model)->value('id');
    }
}
