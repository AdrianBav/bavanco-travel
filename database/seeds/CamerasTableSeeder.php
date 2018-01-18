<?php

use App\Camera;
use App\CameraType;
use Illuminate\Database\Seeder;

class CamerasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $digitalSlrCamera = CameraType::create(['name' => 'Digital SLR Camera']);
        $analogueCamera = CameraType::create(['name' => 'Analogue Camera']);
        $pointAndShootCamera = CameraType::create(['name' => 'Point and Shoot Camera']);
        $cameraPhone = CameraType::create(['name' => 'Camera Phone']);
        $videoCamera = CameraType::create(['name' => 'Video Camera']);

        $digitalSlrCamera->cameras()->create([
            'manufacturer'   => 'Canon',
            'model'          => 'EOS Rebel T6S',
            'image'          => 'canon-eos-rebel-t6s.jpg',
            'ref'            => 'T6S',
        ]);

        $analogueCamera->cameras()->createMany([
            [
                'manufacturer'   => 'Lomography',
                'model'          => 'Diana Mini',
                'image'          => 'lomography-diana-mini.jpg',
                'ref'            => 'Mini',
            ],
            [
                'manufacturer'   => 'Lomography',
                'model'          => 'Lomo LC-A+',
                'image'          => 'lomography-lomo-lc-a+.jpg',
                'ref'            => 'LC-A+',
            ],
            [
                'manufacturer'   => 'Lomography',
                'model'          => 'Fisheye One',
                'image'          => 'lomography-fisheye-one.jpg',
                'ref'            => 'Fish1',
            ],
            [
                'manufacturer'   => 'Lomography',
                'model'          => 'Sprocket Rocket',
                'image'          => 'lomography-sprocket-rocket.jpg',
                'ref'            => 'Rocket',
            ],
        ]);

        $pointAndShootCamera->cameras()->createMany([
            [
                'manufacturer'   => 'Sony',
                'model'          => 'DSC-W70',
                'image'          => 'sony-dsc-w70.jpg',
                'ref'            => 'W70',
            ],
            [
                'manufacturer'   => 'Sony',
                'model'          => 'DSC-P8',
                'image'          => 'sony-dsc-p8.jpg',
                'ref'            => 'P8',
            ],
            [
                'manufacturer'   => 'Panasonic',
                'model'          => 'DMC-TZ3',
                'image'          => 'panasonic-dmc-tz3.jpg',
                'ref'            => 'TZ3',
            ],
        ]);

        $cameraPhone->cameras()->createMany([
            [
                'manufacturer'   => 'HTC',
                'model'          => 'Desire 610',
                'image'          => 'htc-desire-610.jpg',
                'ref'            => '610',
            ],
            [
                'manufacturer'   => 'Samsung',
                'model'          => 'Galaxy Alpha',
                'image'          => 'samsung-galaxy-alpha.jpg',
                'ref'            => 'SM-G850A',
            ],
            [
                'manufacturer'   => 'Samsung',
                'model'          => 'Galaxy S7',
                'image'          => 'samsung-galaxy-s7.jpg',
                'ref'            => 'SM-G930VZKA',
            ],
        ]);

        $videoCamera->cameras()->createMany([
            [
                'manufacturer'   => 'GoPro',
                'model'          => 'HD HERO2',
                'image'          => 'gopro-hd-hero2.jpg',
                'ref'            => 'HERO2',
            ],
            [
                'manufacturer'   => 'GoPro',
                'model'          => 'HERO5 Black',
                'image'          => 'gopro-hero5-black.jpg',
                'ref'            => 'HERO5',
            ],
        ]);
    }
}
