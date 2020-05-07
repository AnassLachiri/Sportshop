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

        $users = [
            [
                'name' => "Admin",
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'is_admin' => true,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "Anass",
                'email' => 'anass@gmail.com',
                'password' => bcrypt('anass'),
                'is_admin' => false,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "imad",
                'email' => 'imad@gmail.com',
                'password' => bcrypt('imad'),
                'is_admin' => false,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "yassir",
                'email' => 'yassir@gmail.com',
                'password' => bcrypt('yassir'),
                'is_admin' => false,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "mohamed",
                'email' => 'mohamed@gmail.com',
                'password' => bcrypt('mohamed'),
                'is_admin' => true,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "fatima",
                'email' => 'fatima@gmail.com',
                'password' => bcrypt('fatima'),
                'is_admin' => true,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "alaa",
                'email' => 'alaa@gmail.com',
                'password' => bcrypt('alaa'),
                'is_admin' => false,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "achraf",
                'email' => 'achraf@gmail.com',
                'password' => bcrypt('achraf'),
                'is_admin' => false,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "marwan",
                'email' => 'marwan@gmail.com',
                'password' => bcrypt('marwan'),
                'is_admin' => true,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "morad",
                'email' => 'morad@gmail.com',
                'password' => bcrypt('morad'),
                'is_admin' => false,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "said",
                'email' => 'said@gmail.com',
                'password' => bcrypt('said'),
                'is_admin' => false,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "kamal",
                'email' => 'kamal@gmail.com',
                'password' => bcrypt('kamal'),
                'is_admin' => false,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "ahmed",
                'email' => 'ahmed@gmail.com',
                'password' => bcrypt('ahmed'),
                'is_admin' => true,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "zakaria",
                'email' => 'zakaria@gmail.com',
                'password' => bcrypt('zakaria'),
                'is_admin' => false,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "abdelah",
                'email' => 'zakabdelaharia@gmail.com',
                'password' => bcrypt('abdelah'),
                'is_admin' => false,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "walid",
                'email' => 'walid@gmail.com',
                'password' => bcrypt('walid'),
                'is_admin' => false,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
        ];

        DB::table('users')->insert($users);


    }
}
