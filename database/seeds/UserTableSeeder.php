<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Alexis Fernández';
        $user->email = 'alexis.fernandez.rc@gmail.com';
        $user->password = bcrypt('afernandez');
        $user->save();

        factory(User::class, 50)->create();
    }
}
