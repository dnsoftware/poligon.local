<?php

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
        $data = [
            [
                'name' => 'автор неизвестен',
                'email' => 'author_unknown@g.g.',
                'password' => bcrypt(str_random(16)),
            ],
            [
                'name' => 'Автор',
                'email' => 'authorl@g.g.',
                'password' => bcrypt(str_random('123123')),
            ]

        ];

        DB::table('users')->insert($data);
    }
}
