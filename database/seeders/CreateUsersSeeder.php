<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'employer',
               'email'=>'employer@itsolutionstuff.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'writer',
               'email'=>'writer@itsolutionstuff.com',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'admin',
               'email'=>'user@itsolutionstuff.com',
               'type'=>0
               ,
               'password'=> bcrypt('123456'),
            ],

            [
                'name'=>'receptionist',
                'email'=>'receptionist@itsolutionstuff.com',
                'type'=>3
                ,
                'password'=> bcrypt('123456'),
             ],

             [
                'name'=>'accountant',
                'email'=>'raccountant@itsolutionstuff.com',
                
                'type'=>4
                ,
                'password'=> bcrypt('123456'),
             ],

        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}