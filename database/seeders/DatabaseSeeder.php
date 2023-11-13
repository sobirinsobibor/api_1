<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call([
            RoleSeeder::class,
            BookCategorySeeder::class,
            EditorSeeder::class,
            UsersTableSeeder::class,
            BooksTableSeeder::class,
        ]);
    }
}
