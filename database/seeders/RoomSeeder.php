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
                'name' => 'PREMIUM ROOM',
                'price' => '225',
                'description' => 'Motorhome or Trailer that is the question for you. Here are some of the advantages and disadvantages of both, so you will be confident when purchasing an RV. When comparing Rvs, a motorhome or a travel trailer, should you buy a motorhome or fifth wheeler? The advantages and disadvantages of both are studied so that you can make your choice wisely when purchasing an RV. Possessing a motorhome or fifth wheel is an achievement of a lifetime. It can be similar to sojourning with your residence as you search the various sites of our great land, America.

                The two commonly known recreational vehicle classes are the motorized and towable. Towable rvs are the travel trailers and the fifth wheel. The rv travel trailer or fifth wheel has the attraction of getting towed by a pickup or a car, thus giving the adaptability of possessing transportation for you when you are parked at your campsite.',
                'capacity'=>'3',
                'bed'=>'King Beds',
                'services'=>'Wifi, Television, Bathroom,...',
                'img'=>'https://www.fourseasons.com/alt/img-opt/~80.930.0,0000-132,7500-3000,0000-1687,5000/publish/content/dam/fourseasons/images/web/AMM/AMM_727_original.jpg',
                'img2'=>'https://www.fourseasons.com/alt/img-opt/~80.930.0,0000-0,0000-1600,0000-900,0000/publish/content/dam/fourseasons/images/web/AMM/AMM_646_aspect16x9.jpg',
                'img3'=>'https://www.fourseasons.com/alt/img-opt/~80.930.0,0000-192,2500-3000,0000-1687,5000/publish/content/dam/fourseasons/images/web/AMM/AMM_726_original.jpg',
            ], 
            [
                'name' => 'DELUXE SUITE',
                'price' => '180',
                'description' => 'Motorhome or Trailer that is the question for you. Here are some of the advantages and disadvantages of both, so you will be confident when purchasing an RV. When comparing Rvs, a motorhome or a travel trailer, should you buy a motorhome or fifth wheeler? The advantages and disadvantages of both are studied so that you can make your choice wisely when purchasing an RV. Possessing a motorhome or fifth wheel is an achievement of a lifetime. It can be similar to sojourning with your residence as you search the various sites of our great land, America.

                The two commonly known recreational vehicle classes are the motorized and towable. Towable rvs are the travel trailers and the fifth wheel. The rv travel trailer or fifth wheel has the attraction of getting towed by a pickup or a car, thus giving the adaptability of possessing transportation for you when you are parked at your campsite.',
                'capacity'=>'3',
                'bed'=>'King Beds',
                'services'=>'Wifi, Television, Bathroom,...',
                'img'=>'https://www.fourseasons.com/alt/img-opt/~80.930.0,0000-0,0000-1600,0000-900,0000/publish/content/dam/fourseasons/images/web/AMM/AMM_691_aspect16x9.jpg',
                'img2'=>'https://www.fourseasons.com/alt/img-opt/~80.930.0,0000-0,0000-1600,0000-900,0000/publish/content/dam/fourseasons/images/web/AMM/AMM_646_aspect16x9.jpg',
                'img3'=>'https://www.fourseasons.com/alt/img-opt/~80.930.0,0000-38,7500-3000,0000-1687,5000/publish/content/dam/fourseasons/images/web/AMM/AMM_692_original.jpg',
            ], 
            [
                'name' => 'PREMIER SUITE',
                'price' => '200',
                'description' => 'Motorhome or Trailer that is the question for you. Here are some of the advantages and disadvantages of both, so you will be confident when purchasing an RV. When comparing Rvs, a motorhome or a travel trailer, should you buy a motorhome or fifth wheeler? The advantages and disadvantages of both are studied so that you can make your choice wisely when purchasing an RV. Possessing a motorhome or fifth wheel is an achievement of a lifetime. It can be similar to sojourning with your residence as you search the various sites of our great land, America.

                The two commonly known recreational vehicle classes are the motorized and towable. Towable rvs are the travel trailers and the fifth wheel. The rv travel trailer or fifth wheel has the attraction of getting towed by a pickup or a car, thus giving the adaptability of possessing transportation for you when you are parked at your campsite.',
                'capacity'=>'2',
                'bed'=>'King Beds',
                'services'=>'Wifi, Television, Bathroom,...',
                'img'=>'https://www.fourseasons.com/alt/img-opt/~80.930.34,2222-0,0000-2931,5556-1649,0000/publish/content/dam/fourseasons/images/web/AMM/AMM_720_original.jpg',
                'img2'=>'https://www.fourseasons.com/alt/img-opt/~80.930.0,0000-96,7500-3000,0000-1687,5000/publish/content/dam/fourseasons/images/web/AMM/AMM_721_original.jpg',
                'img3'=>'https://www.fourseasons.com/alt/img-opt/~80.930.0,0000-6,7500-3000,0000-1687,5000/publish/content/dam/fourseasons/images/web/AMM/AMM_722_original.jpg',
            ], 
            [
                'name' => 'ONE-BEDROOM SUITE',
                'price' => '150',
                'description' => 'Motorhome or Trailer that is the question for you. Here are some of the advantages and disadvantages of both, so you will be confident when purchasing an RV. When comparing Rvs, a motorhome or a travel trailer, should you buy a motorhome or fifth wheeler? The advantages and disadvantages of both are studied so that you can make your choice wisely when purchasing an RV. Possessing a motorhome or fifth wheel is an achievement of a lifetime. It can be similar to sojourning with your residence as you search the various sites of our great land, America.

                The two commonly known recreational vehicle classes are the motorized and towable. Towable rvs are the travel trailers and the fifth wheel. The rv travel trailer or fifth wheel has the attraction of getting towed by a pickup or a car, thus giving the adaptability of possessing transportation for you when you are parked at your campsite.',
                'capacity'=>'1',
                'bed'=>'King Beds',
                'services'=>'Wifi, Television, Bathroom,...',
                'img'=>'https://www.fourseasons.com/alt/img-opt/~80.930.0,0000-58,2500-3000,0000-1687,5000/publish/content/dam/fourseasons/images/web/AMM/AMM_669_original.jpg',
                'img2'=>'https://www.fourseasons.com/alt/img-opt/~80.930.0,0000-42,7500-3000,0000-1687,5000/publish/content/dam/fourseasons/images/web/AMM/AMM_670_original.jpg',
                'img3'=>'https://www.fourseasons.com/alt/img-opt/~80.930.156,8889-0,0000-2686,2222-1511,0000/publish/content/dam/fourseasons/images/web/AMM/AMM_667_original.jpg',
            ], 
            [
                'name' => 'EXECUTIVE SUITE',
                'price' => '160',
                'description' => 'Motorhome or Trailer that is the question for you. Here are some of the advantages and disadvantages of both, so you will be confident when purchasing an RV. When comparing Rvs, a motorhome or a travel trailer, should you buy a motorhome or fifth wheeler? The advantages and disadvantages of both are studied so that you can make your choice wisely when purchasing an RV. Possessing a motorhome or fifth wheel is an achievement of a lifetime. It can be similar to sojourning with your residence as you search the various sites of our great land, America.

                The two commonly known recreational vehicle classes are the motorized and towable. Towable rvs are the travel trailers and the fifth wheel. The rv travel trailer or fifth wheel has the attraction of getting towed by a pickup or a car, thus giving the adaptability of possessing transportation for you when you are parked at your campsite.',
                'capacity'=>'3',
                'bed'=>'King Beds',
                'services'=>'Wifi, Television, Bathroom,...',
                'img'=>'https://www.fourseasons.com/alt/img-opt/~80.930.0,0000-94,2500-3000,0000-1687,5000/publish/content/dam/fourseasons/images/web/AMM/AMM_672_original.jpg',
                'img2'=>'https://www.fourseasons.com/alt/img-opt/~80.930.0,0000-42,7500-3000,0000-1687,5000/publish/content/dam/fourseasons/images/web/AMM/AMM_670_original.jpg',
                'img3'=>'https://www.fourseasons.com/alt/img-opt/~80.930.156,8889-0,0000-2686,2222-1511,0000/publish/content/dam/fourseasons/images/web/AMM/AMM_667_original.jpg',
            ], 
            [
                'name' => 'Small View',
                'price' => '140',
                'description' => 'Motorhome or Trailer that is the question for you. Here are some of the advantages and disadvantages of both, so you will be confident when purchasing an RV. When comparing Rvs, a motorhome or a travel trailer, should you buy a motorhome or fifth wheeler? The advantages and disadvantages of both are studied so that you can make your choice wisely when purchasing an RV. Possessing a motorhome or fifth wheel is an achievement of a lifetime. It can be similar to sojourning with your residence as you search the various sites of our great land, America.

                The two commonly known recreational vehicle classes are the motorized and towable. Towable rvs are the travel trailers and the fifth wheel. The rv travel trailer or fifth wheel has the attraction of getting towed by a pickup or a car, thus giving the adaptability of possessing transportation for you when you are parked at your campsite.',
                'capacity'=>'2',
                'bed'=>'King Beds',
                'services'=>'Wifi, Television, Bathroom,...',
                'img'=>'https://www.fourseasons.com/alt/img-opt/~80.930.0,0000-0,0000-1600,0000-900,0000/publish/content/dam/fourseasons/images/web/AMM/AMM_646_aspect16x9.jpg',
                'img2'=>'https://www.fourseasons.com/alt/img-opt/~80.930.0,0000-42,7500-3000,0000-1687,5000/publish/content/dam/fourseasons/images/web/AMM/AMM_670_original.jpg',
                'img3'=>'https://www.fourseasons.com/alt/img-opt/~80.930.156,8889-0,0000-2686,2222-1511,0000/publish/content/dam/fourseasons/images/web/AMM/AMM_667_original.jpg',
            ], 


        ]);
    }
}
