<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('customers')->truncate();
        for ($i=1; $i < 20; $i++){
            DB::table('customers')->insert(
                [   
                    'user_id' => $i,   
                ]
            );
        }
        DB::table('users')->insert(
            [
                'fname' =>'Admin',
                'lname'=>' ',
                'admin'=>'1',
                'email'=>'admin@admin.com',
                'password'=>'$2y$10$Td2UIcZQvrSP2x9cWKbdyuoPe9BLHX/jFhLJATS0HLVjpJnfY8bD6',
                'provider'=>'Admin',
                'provider_id'=>'1',
                'verified'=>'1',
            ]
        );

        DB::table('buses')->insert(
            [
                'bus_name'=>'MiniBus',
                'total_seat'=>'10',
            ]
            );
        }
    }

