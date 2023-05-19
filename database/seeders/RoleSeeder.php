<?php
namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Db;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    // {
    //     Schema::disableForeignKeyConstraints();
    //     Role::truncate();
    //     Schema::enableForeignKeyConstraints();

    //     $data = [
    //         'admin','client',
    //     ];
    //     foreach($data as $value)
    //     {
    //         Role::insert([
    //         'name' => $value
    //         ]);
    //     }
    // }
    {
        DB::table('users')->insert([
            [
                'name' => 'alfin',
                'email' => 'alfin@gmail.com',
                'password' => Hash::make('alfin1245'),
                'no_hp' => '083819710534',
                'address' => 'Tajur',
                'role_id' => 1
            ],
            [
                'name' => 'anta',
                'email' => 'anta@gmail.com',
                'password' => Hash::make('anta1245'),
                'no_hp' => '083819710544',
                'address' => 'Medan',
                'role_id' => 2
            ]
        ]);
    }
}
