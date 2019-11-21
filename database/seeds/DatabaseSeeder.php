<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(MailStatusTableSeeder::class);
         $this->call(AccessTableSeeder::class);
         $this->call(SkillTimeSeeder::class);
         $this->call(SkillTypeSeeder::class);
         $this->call(SkillsSeeder::class);
    }
}
