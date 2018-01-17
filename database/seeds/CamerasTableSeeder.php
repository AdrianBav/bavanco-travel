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
            'photo_ref'      => 'T6S',
            'image'          => 'canon-eos-rebel-t6s.jpg',
        ]);

        $analogueCamera->cameras()->createMany([
            [
                'manufacturer'   => 'Lomography',
                'model'          => 'Diana Mini',
                'photo_ref'      => 'Mini',
                'image'          => 'lomography-diana-mini.jpg',
            ],
            [
                'manufacturer'   => 'Lomography',
                'model'          => 'Lomo LC-A+',
                'photo_ref'      => 'LC-A+',
                'image'          => 'lomography-lomo-lc-a+.jpg',
            ],
            [
                'manufacturer'   => 'Lomography',
                'model'          => 'Fisheye One',
                'photo_ref'      => 'Fish1',
                'image'          => 'lomography-fisheye-one.jpg',
            ],
            [
                'manufacturer'   => 'Lomography',
                'model'          => 'Sprocket Rocket',
                'photo_ref'      => 'Rocket',
                'image'          => 'lomography-sprocket-rocket.jpg',
            ],
        ]);

        $pointAndShootCamera->cameras()->createMany([
            [
                'manufacturer'   => 'Sony',
                'model'          => 'DSC-W70',
                'photo_ref'      => 'W70',
                'image'          => 'sony-dsc-w70.jpg',
            ],
            [
                'manufacturer'   => 'Sony',
                'model'          => 'DSC-P8',
                'photo_ref'      => 'P8',
                'image'          => 'sony-dsc-p8.jpg',
            ],
            [
                'manufacturer'   => 'Panasonic',
                'model'          => 'DMC-TZ3',
                'photo_ref'      => 'TZ3',
                'image'          => 'panasonic-dmc-tz3.jpg',
            ],
        ]);

        $cameraPhone->cameras()->createMany([
            [
                'manufacturer'   => 'HTC',
                'model'          => 'Desire 610',
                'photo_ref'      => '610',
                'image'          => 'htc-desire-610.jpg',
            ],
            [
                'manufacturer'   => 'Samsung',
                'model'          => 'Galaxy Alpha',
                'photo_ref'      => 'SM-G850A',
                'image'          => 'samsung-galaxy-alpha.jpg',
            ],
            [
                'manufacturer'   => 'Samsung',
                'model'          => 'Galaxy S7',
                'photo_ref'      => 'SM-G930VZKA',
                'image'          => 'samsung-galaxy-s7.jpg',
            ],
        ]);

        $videoCamera->cameras()->createMany([
            [
                'manufacturer'   => 'GoPro',
                'model'          => 'HD HERO2',
                'photo_ref'      => 'HERO2',
                'image'          => 'gopro-hd-hero2.jpg',
            ],
            [
                'manufacturer'   => 'GoPro',
                'model'          => 'HERO5 Black',
                'photo_ref'      => 'HERO5',
                'image'          => 'gopro-hero5-black.jpg',
            ],
        ]);
    }
}
