<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("admin")->insert(
            [
                [
                "nama_admin" => "admin",
                "alamat" => "Indonesia",
                "telepon" => "none",
                "email" => "admin@gmail.com",
                "username" => "admin",
                "password" => bcrypt("admin")
                ],
                [
                    "nama_admin" => "admin2",
                    "alamat" => "Indonesia",
                    "telepon" => "none",
                    "email" => "admin2@gmail.com",
                    "username" => "admin2",
                    "password" => bcrypt("admin2")
                ],
                [
                    "nama_admin" => "admin3",
                    "alamat" => "Indonesia",
                    "telepon" => "none",
                    "email" => "admin3@gmail.com",
                    "username" => "admin3",
                    "password" => bcrypt("admin3")
                ],
            ]
    );
    }
}
