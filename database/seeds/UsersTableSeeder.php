<?php

use App\User;
use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: ismaelsaindou
 * Date: 06/05/2018
 * Time: 21:50
 */

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->create();
    }
}