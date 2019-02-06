<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        Admin::create([
            'name' => 'Amin',
            'email' => 'admin@app.com',
            'password' => Hash::make('password')
        ]);
        
        $this->call(BrandTableSeeder::class);


    }
}
