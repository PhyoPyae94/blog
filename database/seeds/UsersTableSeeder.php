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
        $user = App\User::create([
            'name' => "Phyo Pyae",
            'email' => "PhyoPyae@gmail.com",
            'password' => bcrypt('123456'),
            'admin' => 1,
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.jpg',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium labore aspernatur molestiae. Dolorem quis pariatur eos aut, architecto accusantium delectus mollitia odio dignissimos magni maiores libero fugit, rem quo laudantium.',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
