<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'name' => 'John Doe',
            'contact' => '123456789',
            'email' => 'johndoe@example.com',
        ]);

        Contact::create([
            'name' => 'Jane Smith',
            'contact' => '987654321',
            'email' => 'janesmith@example.com',
        ]);
    }
}

