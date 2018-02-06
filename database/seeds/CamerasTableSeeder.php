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
            'model'          => 'EOS Rebel T6s',
            'image'          => 'canon-eos-rebel-t6s.jpg',
            'description'    => 'Our first digital SLR camera.',
            'ref'            => 'T6s',
        ]);

        $analogueCamera->cameras()->createMany([
            [
                'manufacturer'   => 'Lomography',
                'model'          => 'Lomo LC-A+',
                'image'          => 'lomography-lomo-lc-a+.jpg',
                'description'    => 'Jillian\'s favourite film camera.',
                'ref'            => 'LC-A+',
            ],
            [
                'manufacturer'   => 'Lomography',
                'model'          => 'Diana F+ Dreamer',
                'image'          => 'lomography-diana-f+-dreamer.jpg',
                'description'    => 'Jillian\'s medium-format camera.',
                'ref'            => 'Dreamer',
            ],
            [
                'manufacturer'   => 'Lomography',
                'model'          => 'Diana Mini',
                'image'          => 'lomography-diana-mini.jpg',
                'description'    => 'Jillian\'s first Lomography camera.',
                'ref'            => 'Mini',
            ],
            [
                'manufacturer'   => 'Lomography',
                'model'          => 'Sprocket Rocket',
                'image'          => 'lomography-sprocket-rocket.jpg',
                'description'    => 'Adrian\'s favourite film camera.',
                'ref'            => 'Rocket',
            ],
            [
                'manufacturer'   => 'Lomography',
                'model'          => 'Fisheye One',
                'image'          => 'lomography-fisheye-one.jpg',
                'description'    => 'Adrian\'s first Lomography camera.',
                'ref'            => 'Fish1',
            ],
            [
                'manufacturer'   => 'Pentax',
                'model'          => 'MX',
                'image'          => 'pentax-mx.jpg',
                'description'    => 'Adrian\'s second-hand SLR film camera.',
                'ref'            => 'MX',
            ],
        ]);

        $pointAndShootCamera->cameras()->createMany([
            [
                'manufacturer'   => 'Panasonic',
                'model'          => 'DMC-TZ3',
                'image'          => 'panasonic-dmc-tz3.jpg',
                'description'    => 'Adrian\'s upgraded point and shoot.',
                'ref'            => 'TZ3',
            ],
            [
                'manufacturer'   => 'Sony',
                'model'          => 'DSC-P8',
                'image'          => 'sony-dsc-p8.jpg',
                'description'    => 'Adrian\'s first digital camera.',
                'ref'            => 'P8',
            ],
            [
                'manufacturer'   => 'Sony',
                'model'          => 'DSC-W70',
                'image'          => 'sony-dsc-w70.jpg',
                'description'    => 'Jillian borrowed this camera from her Mom.',
                'ref'            => 'W70',
            ],
        ]);

        $cameraPhone->cameras()->createMany([
            [
                'manufacturer'   => 'Samsung',
                'model'          => 'Galaxy S7',
                'image'          => 'samsung-galaxy-s7.jpg',
                'description'    => 'Jillian\'s current smart phone.',
                'ref'            => 'S7',
            ],
            [
                'manufacturer'   => 'Samsung',
                'model'          => 'Galaxy Alpha',
                'image'          => 'samsung-galaxy-alpha.jpg',
                'description'    => 'Jillian\'s last smart phone.',
                'ref'            => 'Alpha',
            ],
            [
                'manufacturer'   => 'HTC',
                'model'          => 'Desire 610',
                'image'          => 'htc-desire-610.jpg',
                'description'    => 'Adrian\'s first smart phone.',
                'ref'            => '610',
            ],
        ]);

        $videoCamera->cameras()->createMany([
            [
                'manufacturer'   => 'GoPro',
                'model'          => 'HERO5 Black',
                'image'          => 'gopro-hero5-black.jpg',
                'description'    => 'An upgrade which takes much better stills.',
                'ref'            => 'HERO5',
            ],
            [
                'manufacturer'   => 'GoPro',
                'model'          => 'HD HERO2',
                'image'          => 'gopro-hd-hero2.jpg',
                'description'    => 'Our first video camera. Also takes stills.',
                'ref'            => 'HERO2',
            ],
        ]);
    }
}
