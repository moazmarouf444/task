<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'name'   => 'moaz' ,
            'phone'       => '01222442506' ,
            'email'       => 'moazmarouf444@gmail.com' ,
            'message'   => 'رساله تجريبه' ,
        ]);
    }
}
