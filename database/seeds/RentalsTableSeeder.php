<?php

use Illuminate\Database\Seeder;

class RentalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rentals')->delete();
        
        \DB::table('rentals')->insert(array (
            0 => 
            array (
                'created_at' => '2019-05-27 04:27:40',
                'deleted_at' => NULL,
                'id' => 8,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-30 00:32:34',
                'user_id' => 1,
            ),
            1 => 
            array (
                'created_at' => '2019-05-27 04:32:05',
                'deleted_at' => NULL,
                'id' => 9,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 04:32:05',
                'user_id' => 1,
            ),
            2 => 
            array (
                'created_at' => '2019-05-27 04:35:29',
                'deleted_at' => NULL,
                'id' => 10,
                'status_id' => 1,
                'total' => '690.00',
                'updated_at' => '2019-05-27 04:35:29',
                'user_id' => 1,
            ),
            3 => 
            array (
                'created_at' => '2019-05-27 04:37:12',
                'deleted_at' => NULL,
                'id' => 11,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 04:37:12',
                'user_id' => 1,
            ),
            4 => 
            array (
                'created_at' => '2019-05-27 04:38:56',
                'deleted_at' => NULL,
                'id' => 12,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 04:38:56',
                'user_id' => 1,
            ),
            5 => 
            array (
                'created_at' => '2019-05-27 04:39:14',
                'deleted_at' => NULL,
                'id' => 13,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-27 04:39:14',
                'user_id' => 1,
            ),
            6 => 
            array (
                'created_at' => '2019-05-27 04:40:52',
                'deleted_at' => NULL,
                'id' => 14,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 04:40:52',
                'user_id' => 1,
            ),
            7 => 
            array (
                'created_at' => '2019-05-27 04:41:18',
                'deleted_at' => NULL,
                'id' => 15,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 04:41:18',
                'user_id' => 1,
            ),
            8 => 
            array (
                'created_at' => '2019-05-27 04:45:07',
                'deleted_at' => NULL,
                'id' => 16,
                'status_id' => 1,
                'total' => '660.00',
                'updated_at' => '2019-05-27 04:45:07',
                'user_id' => 1,
            ),
            9 => 
            array (
                'created_at' => '2019-05-27 04:47:52',
                'deleted_at' => NULL,
                'id' => 17,
                'status_id' => 1,
                'total' => '430.00',
                'updated_at' => '2019-05-27 04:47:52',
                'user_id' => 1,
            ),
            10 => 
            array (
                'created_at' => '2019-05-27 04:55:10',
                'deleted_at' => NULL,
                'id' => 18,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 04:55:10',
                'user_id' => 1,
            ),
            11 => 
            array (
                'created_at' => '2019-05-27 04:59:49',
                'deleted_at' => NULL,
                'id' => 19,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 04:59:49',
                'user_id' => 1,
            ),
            12 => 
            array (
                'created_at' => '2019-05-27 05:00:05',
                'deleted_at' => NULL,
                'id' => 20,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 05:00:05',
                'user_id' => 1,
            ),
            13 => 
            array (
                'created_at' => '2019-05-27 05:00:45',
                'deleted_at' => NULL,
                'id' => 21,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-27 05:00:45',
                'user_id' => 1,
            ),
            14 => 
            array (
                'created_at' => '2019-05-27 05:05:07',
                'deleted_at' => NULL,
                'id' => 22,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-27 05:05:08',
                'user_id' => 1,
            ),
            15 => 
            array (
                'created_at' => '2019-05-27 05:08:36',
                'deleted_at' => NULL,
                'id' => 23,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 05:08:36',
                'user_id' => 1,
            ),
            16 => 
            array (
                'created_at' => '2019-05-27 07:08:49',
                'deleted_at' => NULL,
                'id' => 24,
                'status_id' => 1,
                'total' => '990.00',
                'updated_at' => '2019-05-27 07:08:49',
                'user_id' => 1,
            ),
            17 => 
            array (
                'created_at' => '2019-05-27 07:21:41',
                'deleted_at' => NULL,
                'id' => 25,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 07:21:41',
                'user_id' => 1,
            ),
            18 => 
            array (
                'created_at' => '2019-05-27 07:23:03',
                'deleted_at' => NULL,
                'id' => 26,
                'status_id' => 1,
                'total' => '430.00',
                'updated_at' => '2019-05-27 07:23:04',
                'user_id' => 1,
            ),
            19 => 
            array (
                'created_at' => '2019-05-27 07:30:26',
                'deleted_at' => NULL,
                'id' => 27,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 07:30:26',
                'user_id' => 1,
            ),
            20 => 
            array (
                'created_at' => '2019-05-27 07:31:16',
                'deleted_at' => NULL,
                'id' => 28,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-27 07:31:16',
                'user_id' => 1,
            ),
            21 => 
            array (
                'created_at' => '2019-05-27 08:00:38',
                'deleted_at' => NULL,
                'id' => 29,
                'status_id' => 1,
                'total' => '430.00',
                'updated_at' => '2019-05-27 08:00:38',
                'user_id' => 1,
            ),
            22 => 
            array (
                'created_at' => '2019-05-27 08:02:02',
                'deleted_at' => NULL,
                'id' => 30,
                'status_id' => 1,
                'total' => '430.00',
                'updated_at' => '2019-05-27 08:02:02',
                'user_id' => 1,
            ),
            23 => 
            array (
                'created_at' => '2019-05-27 10:38:20',
                'deleted_at' => NULL,
                'id' => 31,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-27 10:38:20',
                'user_id' => 1,
            ),
            24 => 
            array (
                'created_at' => '2019-05-27 11:27:59',
                'deleted_at' => NULL,
                'id' => 32,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 11:27:59',
                'user_id' => 1,
            ),
            25 => 
            array (
                'created_at' => '2019-05-27 11:28:01',
                'deleted_at' => NULL,
                'id' => 33,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 11:28:01',
                'user_id' => 1,
            ),
            26 => 
            array (
                'created_at' => '2019-05-27 13:16:59',
                'deleted_at' => NULL,
                'id' => 34,
                'status_id' => 1,
                'total' => '460.00',
                'updated_at' => '2019-05-27 13:16:59',
                'user_id' => 1,
            ),
            27 => 
            array (
                'created_at' => '2019-05-27 13:20:18',
                'deleted_at' => NULL,
                'id' => 35,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-27 13:20:18',
                'user_id' => 1,
            ),
            28 => 
            array (
                'created_at' => '2019-05-27 13:58:39',
                'deleted_at' => NULL,
                'id' => 36,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-27 13:58:39',
                'user_id' => 1,
            ),
            29 => 
            array (
                'created_at' => '2019-05-27 14:01:12',
                'deleted_at' => NULL,
                'id' => 37,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 14:01:12',
                'user_id' => 1,
            ),
            30 => 
            array (
                'created_at' => '2019-05-27 14:03:10',
                'deleted_at' => NULL,
                'id' => 38,
                'status_id' => 1,
                'total' => '460.00',
                'updated_at' => '2019-05-27 14:03:10',
                'user_id' => 1,
            ),
            31 => 
            array (
                'created_at' => '2019-05-27 14:33:25',
                'deleted_at' => NULL,
                'id' => 39,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-27 14:33:25',
                'user_id' => 1,
            ),
            32 => 
            array (
                'created_at' => '2019-05-27 14:35:51',
                'deleted_at' => NULL,
                'id' => 40,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-27 14:35:51',
                'user_id' => 1,
            ),
            33 => 
            array (
                'created_at' => '2019-05-27 14:44:45',
                'deleted_at' => NULL,
                'id' => 41,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 14:44:45',
                'user_id' => 1,
            ),
            34 => 
            array (
                'created_at' => '2019-05-27 14:46:20',
                'deleted_at' => NULL,
                'id' => 42,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-27 14:46:20',
                'user_id' => 1,
            ),
            35 => 
            array (
                'created_at' => '2019-05-27 14:47:40',
                'deleted_at' => NULL,
                'id' => 43,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-27 14:47:40',
                'user_id' => 1,
            ),
            36 => 
            array (
                'created_at' => '2019-05-27 14:49:28',
                'deleted_at' => NULL,
                'id' => 44,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-27 14:49:29',
                'user_id' => 1,
            ),
            37 => 
            array (
                'created_at' => '2019-05-27 14:51:49',
                'deleted_at' => NULL,
                'id' => 45,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 14:51:49',
                'user_id' => 1,
            ),
            38 => 
            array (
                'created_at' => '2019-05-27 15:36:38',
                'deleted_at' => NULL,
                'id' => 46,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-27 15:36:38',
                'user_id' => 1,
            ),
            39 => 
            array (
                'created_at' => '2019-05-27 15:36:38',
                'deleted_at' => NULL,
                'id' => 47,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 15:36:38',
                'user_id' => 1,
            ),
            40 => 
            array (
                'created_at' => '2019-05-27 15:41:16',
                'deleted_at' => NULL,
                'id' => 48,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-27 15:41:16',
                'user_id' => 1,
            ),
            41 => 
            array (
                'created_at' => '2019-05-27 15:42:18',
                'deleted_at' => NULL,
                'id' => 49,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-27 15:42:18',
                'user_id' => 1,
            ),
            42 => 
            array (
                'created_at' => '2019-05-27 15:42:59',
                'deleted_at' => NULL,
                'id' => 50,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-27 15:42:59',
                'user_id' => 1,
            ),
            43 => 
            array (
                'created_at' => '2019-05-27 15:42:59',
                'deleted_at' => NULL,
                'id' => 51,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 15:42:59',
                'user_id' => 1,
            ),
            44 => 
            array (
                'created_at' => '2019-05-27 15:44:50',
                'deleted_at' => NULL,
                'id' => 52,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-27 15:44:50',
                'user_id' => 1,
            ),
            45 => 
            array (
                'created_at' => '2019-05-27 15:44:51',
                'deleted_at' => NULL,
                'id' => 53,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 15:44:51',
                'user_id' => 1,
            ),
            46 => 
            array (
                'created_at' => '2019-05-27 15:47:05',
                'deleted_at' => NULL,
                'id' => 54,
                'status_id' => 1,
                'total' => '530.00',
                'updated_at' => '2019-05-27 15:47:05',
                'user_id' => 1,
            ),
            47 => 
            array (
                'created_at' => '2019-05-27 15:47:05',
                'deleted_at' => NULL,
                'id' => 55,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 15:47:05',
                'user_id' => 1,
            ),
            48 => 
            array (
                'created_at' => '2019-05-27 15:47:48',
                'deleted_at' => NULL,
                'id' => 56,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 15:47:48',
                'user_id' => 1,
            ),
            49 => 
            array (
                'created_at' => '2019-05-27 15:47:59',
                'deleted_at' => NULL,
                'id' => 57,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-27 15:47:59',
                'user_id' => 1,
            ),
            50 => 
            array (
                'created_at' => '2019-05-27 15:48:00',
                'deleted_at' => NULL,
                'id' => 58,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 15:48:00',
                'user_id' => 1,
            ),
            51 => 
            array (
                'created_at' => '2019-05-27 15:48:25',
                'deleted_at' => NULL,
                'id' => 59,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-27 15:48:25',
                'user_id' => 1,
            ),
            52 => 
            array (
                'created_at' => '2019-05-27 15:48:25',
                'deleted_at' => NULL,
                'id' => 60,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 15:48:25',
                'user_id' => 1,
            ),
            53 => 
            array (
                'created_at' => '2019-05-27 17:06:18',
                'deleted_at' => NULL,
                'id' => 61,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-27 17:06:18',
                'user_id' => 1,
            ),
            54 => 
            array (
                'created_at' => '2019-05-27 17:06:18',
                'deleted_at' => NULL,
                'id' => 62,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-27 17:06:18',
                'user_id' => 1,
            ),
            55 => 
            array (
                'created_at' => '2019-05-28 02:59:26',
                'deleted_at' => NULL,
                'id' => 63,
                'status_id' => 1,
                'total' => '460.00',
                'updated_at' => '2019-05-28 02:59:27',
                'user_id' => 1,
            ),
            56 => 
            array (
                'created_at' => '2019-05-28 02:59:27',
                'deleted_at' => NULL,
                'id' => 64,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-28 02:59:27',
                'user_id' => 1,
            ),
            57 => 
            array (
                'created_at' => '2019-05-28 03:08:48',
                'deleted_at' => NULL,
                'id' => 65,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-28 03:08:48',
                'user_id' => 1,
            ),
            58 => 
            array (
                'created_at' => '2019-05-28 03:08:48',
                'deleted_at' => NULL,
                'id' => 66,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-28 03:08:48',
                'user_id' => 1,
            ),
            59 => 
            array (
                'created_at' => '2019-05-28 03:25:41',
                'deleted_at' => NULL,
                'id' => 67,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-28 03:25:41',
                'user_id' => 1,
            ),
            60 => 
            array (
                'created_at' => '2019-05-28 03:25:41',
                'deleted_at' => NULL,
                'id' => 68,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-28 03:25:41',
                'user_id' => 1,
            ),
            61 => 
            array (
                'created_at' => '2019-05-28 04:28:23',
                'deleted_at' => NULL,
                'id' => 69,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-28 04:28:23',
                'user_id' => 4,
            ),
            62 => 
            array (
                'created_at' => '2019-05-28 05:18:57',
                'deleted_at' => NULL,
                'id' => 70,
                'status_id' => 1,
                'total' => '460.00',
                'updated_at' => '2019-05-29 19:06:22',
                'user_id' => 4,
            ),
            63 => 
            array (
                'created_at' => '2019-05-28 05:19:25',
                'deleted_at' => NULL,
                'id' => 71,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-29 19:06:13',
                'user_id' => 4,
            ),
            64 => 
            array (
                'created_at' => '2019-05-28 05:22:44',
                'deleted_at' => NULL,
                'id' => 72,
                'status_id' => 1,
                'total' => '460.00',
                'updated_at' => '2019-05-28 05:22:44',
                'user_id' => 1,
            ),
            65 => 
            array (
                'created_at' => '2019-05-28 05:23:11',
                'deleted_at' => NULL,
                'id' => 73,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-28 05:23:11',
                'user_id' => 1,
            ),
            66 => 
            array (
                'created_at' => '2019-05-28 05:24:35',
                'deleted_at' => NULL,
                'id' => 74,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-28 05:24:35',
                'user_id' => 1,
            ),
            67 => 
            array (
                'created_at' => '2019-05-28 05:24:35',
                'deleted_at' => NULL,
                'id' => 75,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-28 05:24:35',
                'user_id' => 1,
            ),
            68 => 
            array (
                'created_at' => '2019-05-28 05:27:21',
                'deleted_at' => NULL,
                'id' => 76,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-28 05:27:21',
                'user_id' => 1,
            ),
            69 => 
            array (
                'created_at' => '2019-05-28 05:34:51',
                'deleted_at' => NULL,
                'id' => 77,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-28 05:34:51',
                'user_id' => 1,
            ),
            70 => 
            array (
                'created_at' => '2019-05-28 05:36:01',
                'deleted_at' => NULL,
                'id' => 78,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-28 05:36:01',
                'user_id' => 1,
            ),
            71 => 
            array (
                'created_at' => '2019-05-28 05:46:19',
                'deleted_at' => NULL,
                'id' => 79,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-28 05:46:19',
                'user_id' => 1,
            ),
            72 => 
            array (
                'created_at' => '2019-05-28 05:47:42',
                'deleted_at' => NULL,
                'id' => 80,
                'status_id' => 1,
                'total' => '460.00',
                'updated_at' => '2019-05-28 05:47:42',
                'user_id' => 1,
            ),
            73 => 
            array (
                'created_at' => '2019-05-28 05:59:36',
                'deleted_at' => NULL,
                'id' => 81,
                'status_id' => 1,
                'total' => '460.00',
                'updated_at' => '2019-05-28 05:59:36',
                'user_id' => 1,
            ),
            74 => 
            array (
                'created_at' => '2019-05-28 05:59:36',
                'deleted_at' => NULL,
                'id' => 82,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-28 05:59:36',
                'user_id' => 1,
            ),
            75 => 
            array (
                'created_at' => '2019-05-28 06:11:32',
                'deleted_at' => NULL,
                'id' => 83,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-28 06:11:32',
                'user_id' => 1,
            ),
            76 => 
            array (
                'created_at' => '2019-05-28 06:15:39',
                'deleted_at' => NULL,
                'id' => 84,
                'status_id' => 1,
                'total' => '230.00',
                'updated_at' => '2019-05-28 06:15:39',
                'user_id' => 1,
            ),
            77 => 
            array (
                'created_at' => '2019-05-28 06:15:39',
                'deleted_at' => NULL,
                'id' => 85,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-28 06:15:39',
                'user_id' => 1,
            ),
            78 => 
            array (
                'created_at' => '2019-05-28 06:58:52',
                'deleted_at' => NULL,
                'id' => 86,
                'status_id' => 1,
                'total' => '1380.00',
                'updated_at' => '2019-05-28 06:58:52',
                'user_id' => 1,
            ),
            79 => 
            array (
                'created_at' => '2019-05-28 06:58:52',
                'deleted_at' => NULL,
                'id' => 87,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-28 06:58:52',
                'user_id' => 1,
            ),
            80 => 
            array (
                'created_at' => '2019-05-28 07:17:20',
                'deleted_at' => NULL,
                'id' => 88,
                'status_id' => 1,
                'total' => '690.00',
                'updated_at' => '2019-05-28 07:17:20',
                'user_id' => 1,
            ),
            81 => 
            array (
                'created_at' => '2019-05-28 07:17:20',
                'deleted_at' => NULL,
                'id' => 89,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-28 07:17:20',
                'user_id' => 1,
            ),
            82 => 
            array (
                'created_at' => '2019-05-28 23:37:32',
                'deleted_at' => NULL,
                'id' => 90,
                'status_id' => 1,
                'total' => '600.00',
                'updated_at' => '2019-05-28 23:37:32',
                'user_id' => 1,
            ),
            83 => 
            array (
                'created_at' => '2019-05-28 23:37:32',
                'deleted_at' => NULL,
                'id' => 91,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-28 23:37:32',
                'user_id' => 1,
            ),
            84 => 
            array (
                'created_at' => '2019-05-29 03:40:58',
                'deleted_at' => NULL,
                'id' => 92,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-29 03:40:58',
                'user_id' => 1,
            ),
            85 => 
            array (
                'created_at' => '2019-05-29 03:41:37',
                'deleted_at' => NULL,
                'id' => 93,
                'status_id' => 1,
                'total' => '300.00',
                'updated_at' => '2019-05-29 03:41:37',
                'user_id' => 1,
            ),
            86 => 
            array (
                'created_at' => '2019-05-29 03:41:38',
                'deleted_at' => NULL,
                'id' => 94,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-29 03:41:38',
                'user_id' => 1,
            ),
            87 => 
            array (
                'created_at' => '2019-05-29 03:43:34',
                'deleted_at' => NULL,
                'id' => 95,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-29 03:43:34',
                'user_id' => 1,
            ),
            88 => 
            array (
                'created_at' => '2019-05-29 03:43:55',
                'deleted_at' => NULL,
                'id' => 96,
                'status_id' => 1,
                'total' => '300.00',
                'updated_at' => '2019-05-29 03:43:55',
                'user_id' => 1,
            ),
            89 => 
            array (
                'created_at' => '2019-05-29 03:43:55',
                'deleted_at' => NULL,
                'id' => 97,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-29 03:43:55',
                'user_id' => 1,
            ),
            90 => 
            array (
                'created_at' => '2019-05-29 03:47:31',
                'deleted_at' => NULL,
                'id' => 98,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-29 03:47:31',
                'user_id' => 1,
            ),
            91 => 
            array (
                'created_at' => '2019-05-29 03:47:46',
                'deleted_at' => NULL,
                'id' => 99,
                'status_id' => 1,
                'total' => '300.00',
                'updated_at' => '2019-05-29 03:47:46',
                'user_id' => 1,
            ),
            92 => 
            array (
                'created_at' => '2019-05-29 03:47:46',
                'deleted_at' => NULL,
                'id' => 100,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-29 03:47:46',
                'user_id' => 1,
            ),
            93 => 
            array (
                'created_at' => '2019-05-29 15:45:10',
                'deleted_at' => NULL,
                'id' => 101,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 15:45:10',
                'user_id' => 1,
            ),
            94 => 
            array (
                'created_at' => '2019-05-29 15:52:59',
                'deleted_at' => NULL,
                'id' => 102,
                'status_id' => 1,
                'total' => '600.00',
                'updated_at' => '2019-05-29 15:52:59',
                'user_id' => 1,
            ),
            95 => 
            array (
                'created_at' => '2019-05-29 16:30:05',
                'deleted_at' => NULL,
                'id' => 103,
                'status_id' => 1,
                'total' => '300.00',
                'updated_at' => '2019-05-29 16:30:05',
                'user_id' => 1,
            ),
            96 => 
            array (
                'created_at' => '2019-05-29 16:31:25',
                'deleted_at' => NULL,
                'id' => 104,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 16:31:25',
                'user_id' => 1,
            ),
            97 => 
            array (
                'created_at' => '2019-05-29 16:32:31',
                'deleted_at' => NULL,
                'id' => 105,
                'status_id' => 1,
                'total' => '300.00',
                'updated_at' => '2019-05-29 16:32:31',
                'user_id' => 1,
            ),
            98 => 
            array (
                'created_at' => '2019-05-29 16:47:24',
                'deleted_at' => NULL,
                'id' => 106,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 16:47:24',
                'user_id' => 1,
            ),
            99 => 
            array (
                'created_at' => '2019-05-29 16:50:18',
                'deleted_at' => NULL,
                'id' => 107,
                'status_id' => 1,
                'total' => '300.00',
                'updated_at' => '2019-05-29 16:50:18',
                'user_id' => 1,
            ),
            100 => 
            array (
                'created_at' => '2019-05-29 16:50:18',
                'deleted_at' => NULL,
                'id' => 108,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-29 16:50:18',
                'user_id' => 1,
            ),
            101 => 
            array (
                'created_at' => '2019-05-29 16:56:03',
                'deleted_at' => NULL,
                'id' => 109,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-29 16:56:03',
                'user_id' => 1,
            ),
            102 => 
            array (
                'created_at' => '2019-05-29 16:57:42',
                'deleted_at' => NULL,
                'id' => 110,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 16:57:42',
                'user_id' => 1,
            ),
            103 => 
            array (
                'created_at' => '2019-05-29 16:57:43',
                'deleted_at' => NULL,
                'id' => 111,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-29 16:57:43',
                'user_id' => 1,
            ),
            104 => 
            array (
                'created_at' => '2019-05-29 17:05:48',
                'deleted_at' => NULL,
                'id' => 112,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 17:05:48',
                'user_id' => 1,
            ),
            105 => 
            array (
                'created_at' => '2019-05-29 17:10:31',
                'deleted_at' => NULL,
                'id' => 113,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-29 17:10:31',
                'user_id' => 1,
            ),
            106 => 
            array (
                'created_at' => '2019-05-29 17:11:13',
                'deleted_at' => NULL,
                'id' => 114,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 17:11:13',
                'user_id' => 1,
            ),
            107 => 
            array (
                'created_at' => '2019-05-29 17:12:43',
                'deleted_at' => NULL,
                'id' => 115,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 17:12:43',
                'user_id' => 1,
            ),
            108 => 
            array (
                'created_at' => '2019-05-29 17:14:01',
                'deleted_at' => NULL,
                'id' => 116,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 17:14:01',
                'user_id' => 1,
            ),
            109 => 
            array (
                'created_at' => '2019-05-29 17:18:29',
                'deleted_at' => NULL,
                'id' => 117,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 17:18:29',
                'user_id' => 1,
            ),
            110 => 
            array (
                'created_at' => '2019-05-29 17:20:18',
                'deleted_at' => NULL,
                'id' => 118,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 17:20:18',
                'user_id' => 1,
            ),
            111 => 
            array (
                'created_at' => '2019-05-29 17:22:40',
                'deleted_at' => NULL,
                'id' => 119,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 17:22:40',
                'user_id' => 1,
            ),
            112 => 
            array (
                'created_at' => '2019-05-29 17:28:58',
                'deleted_at' => NULL,
                'id' => 120,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 17:28:59',
                'user_id' => 1,
            ),
            113 => 
            array (
                'created_at' => '2019-05-29 17:29:49',
                'deleted_at' => NULL,
                'id' => 121,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-29 17:29:49',
                'user_id' => 1,
            ),
            114 => 
            array (
                'created_at' => '2019-05-29 17:30:34',
                'deleted_at' => NULL,
                'id' => 122,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 17:30:34',
                'user_id' => 4,
            ),
            115 => 
            array (
                'created_at' => '2019-05-29 17:32:07',
                'deleted_at' => NULL,
                'id' => 123,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 17:32:07',
                'user_id' => 4,
            ),
            116 => 
            array (
                'created_at' => '2019-05-29 17:32:48',
                'deleted_at' => NULL,
                'id' => 124,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 17:32:48',
                'user_id' => 4,
            ),
            117 => 
            array (
                'created_at' => '2019-05-29 17:32:59',
                'deleted_at' => NULL,
                'id' => 125,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-29 17:32:59',
                'user_id' => 4,
            ),
            118 => 
            array (
                'created_at' => '2019-05-29 17:33:24',
                'deleted_at' => NULL,
                'id' => 126,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 17:33:24',
                'user_id' => 4,
            ),
            119 => 
            array (
                'created_at' => '2019-05-29 17:34:15',
                'deleted_at' => NULL,
                'id' => 127,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 17:34:15',
                'user_id' => 4,
            ),
            120 => 
            array (
                'created_at' => '2019-05-29 17:36:01',
                'deleted_at' => NULL,
                'id' => 128,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 17:36:01',
                'user_id' => 4,
            ),
            121 => 
            array (
                'created_at' => '2019-05-29 17:36:18',
                'deleted_at' => NULL,
                'id' => 129,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-29 17:36:18',
                'user_id' => 4,
            ),
            122 => 
            array (
                'created_at' => '2019-05-29 17:36:43',
                'deleted_at' => NULL,
                'id' => 130,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 17:36:43',
                'user_id' => 4,
            ),
            123 => 
            array (
                'created_at' => '2019-05-29 18:16:43',
                'deleted_at' => NULL,
                'id' => 131,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-29 18:16:43',
                'user_id' => 4,
            ),
            124 => 
            array (
                'created_at' => '2019-05-29 18:18:37',
                'deleted_at' => NULL,
                'id' => 132,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 18:18:37',
                'user_id' => 4,
            ),
            125 => 
            array (
                'created_at' => '2019-05-29 18:19:23',
                'deleted_at' => NULL,
                'id' => 133,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 18:19:23',
                'user_id' => 4,
            ),
            126 => 
            array (
                'created_at' => '2019-05-29 18:20:07',
                'deleted_at' => NULL,
                'id' => 134,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 18:20:07',
                'user_id' => 4,
            ),
            127 => 
            array (
                'created_at' => '2019-05-29 18:20:47',
                'deleted_at' => NULL,
                'id' => 135,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 18:20:47',
                'user_id' => 4,
            ),
            128 => 
            array (
                'created_at' => '2019-05-29 18:21:36',
                'deleted_at' => NULL,
                'id' => 136,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 19:11:35',
                'user_id' => 4,
            ),
            129 => 
            array (
                'created_at' => '2019-05-29 18:22:25',
                'deleted_at' => '2019-05-29 19:11:08',
                'id' => 137,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 19:11:08',
                'user_id' => 4,
            ),
            130 => 
            array (
                'created_at' => '2019-05-29 19:08:02',
                'deleted_at' => '2019-05-29 19:10:31',
                'id' => 138,
                'status_id' => 1,
                'total' => '200.00',
                'updated_at' => '2019-05-29 19:10:31',
                'user_id' => 4,
            ),
            131 => 
            array (
                'created_at' => '2019-05-29 22:10:34',
                'deleted_at' => NULL,
                'id' => 139,
                'status_id' => 1,
                'total' => '664.00',
                'updated_at' => '2019-05-29 22:10:51',
                'user_id' => 1,
            ),
            132 => 
            array (
                'created_at' => '2019-05-30 00:30:02',
                'deleted_at' => NULL,
                'id' => 140,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-30 00:30:02',
                'user_id' => 1,
            ),
            133 => 
            array (
                'created_at' => '2019-05-30 00:33:26',
                'deleted_at' => NULL,
                'id' => 141,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-30 00:33:26',
                'user_id' => 1,
            ),
            134 => 
            array (
                'created_at' => '2019-05-30 00:36:43',
                'deleted_at' => NULL,
                'id' => 142,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-30 00:36:43',
                'user_id' => 1,
            ),
            135 => 
            array (
                'created_at' => '2019-05-30 00:36:45',
                'deleted_at' => NULL,
                'id' => 143,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-30 00:36:45',
                'user_id' => 1,
            ),
            136 => 
            array (
                'created_at' => '2019-05-30 00:36:46',
                'deleted_at' => NULL,
                'id' => 144,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-30 00:36:46',
                'user_id' => 1,
            ),
            137 => 
            array (
                'created_at' => '2019-05-30 00:38:24',
                'deleted_at' => NULL,
                'id' => 145,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-30 00:38:24',
                'user_id' => 1,
            ),
            138 => 
            array (
                'created_at' => '2019-05-30 00:43:02',
                'deleted_at' => NULL,
                'id' => 146,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-30 00:43:02',
                'user_id' => 1,
            ),
            139 => 
            array (
                'created_at' => '2019-05-30 01:03:26',
                'deleted_at' => NULL,
                'id' => 147,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-30 01:03:26',
                'user_id' => 1,
            ),
            140 => 
            array (
                'created_at' => '2019-05-30 01:18:54',
                'deleted_at' => NULL,
                'id' => 148,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-30 01:18:54',
                'user_id' => 1,
            ),
            141 => 
            array (
                'created_at' => '2019-05-30 01:19:02',
                'deleted_at' => NULL,
                'id' => 149,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-30 01:19:02',
                'user_id' => 1,
            ),
            142 => 
            array (
                'created_at' => '2019-05-30 01:19:43',
                'deleted_at' => NULL,
                'id' => 150,
                'status_id' => 1,
                'total' => '0.00',
                'updated_at' => '2019-05-30 01:19:43',
                'user_id' => 1,
            ),
            143 => 
            array (
                'created_at' => '2019-05-30 01:23:33',
                'deleted_at' => NULL,
                'id' => 151,
                'status_id' => 1,
                'total' => '250.00',
                'updated_at' => '2019-05-30 01:23:35',
                'user_id' => 1,
            ),
            144 => 
            array (
                'created_at' => '2019-05-30 03:49:35',
                'deleted_at' => NULL,
                'id' => 152,
                'status_id' => 1,
                'total' => '250.00',
                'updated_at' => '2019-05-30 03:49:35',
                'user_id' => 1,
            ),
        ));
        
        
    }
}