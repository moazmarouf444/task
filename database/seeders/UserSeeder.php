<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'name'                       =>'moaz',
                'phone'                      => "0102030405$i",
                'email'                      => "a@a$i.com",
                'password'                   => bcrypt('123456'),
                'date_of_birth'              => '1990/10/10',
                'gender'                     => 'male',
            ];

        }
        User::insert($data);
    }
}
