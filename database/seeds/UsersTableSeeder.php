<?php
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = "Admin";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt('admin');
        $admin->is_admin = true;
        $admin->save();


        $user = new User;
        $user->name = "User";
        $user->email = "user@devtest.com";
        $user->password = bcrypt('user');
        $user->is_admin = false;
        $user->save();

    }
}
