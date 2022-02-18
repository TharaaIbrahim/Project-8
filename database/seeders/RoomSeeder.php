<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rooms')->insert([
            [
                'name' => 'Premium King Room',
                'price' => '250',
                'description' => ' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing ',
                'capacity'=>'Max persion 3',
                'bed'=>'King Beds',
                'services'=>'Wifi, Television, Bathroom,...',
                'img'=>'https://technext.github.io/sona/img/room/room-1.jpg                '
            ], [
                'name' => 'Premium King Room',
                'price' => '250',
                'description' => ' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing ',
                'capacity'=>'Max persion 3',
                'bed'=>'King Beds',
                'services'=>'Wifi, Television, Bathroom,...',
                'img'=>'https://technext.github.io/sona/img/room/room-1.jpg                '
            ],
            [
                'name' => 'Premium King Room',
                'price' => '250',
                'description' => ' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing ',
                'capacity'=>'Max persion 3',
                'bed'=>'King Beds',
                'services'=>'Wifi, Television, Bathroom,...',
                'img'=>'https://technext.github.io/sona/img/room/room-1.jpg                '
            ],
        ]);
    }
}
