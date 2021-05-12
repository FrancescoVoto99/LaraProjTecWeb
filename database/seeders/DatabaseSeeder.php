<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
         DB::table('events')->insert([
            ['name' => 'NetBook Modello2', 'catId' => 5,
                'descShort' => 'Caratteristiche NetBook2', 'descLong' => self::DESCPROD,
                'price' => 219.34, 'discountPerc' => 12, 'discounted' => 0, 'image' => ''],
            ['name' => 'HardDisk Modello2', 'catId' => 6,
                'descShort' => 'Caratteristiche HardDisk2', 'descLong' => self::DESCPROD,
                'price' => 86.37, 'discountPerc' => 15, 'discounted' => 1, 'image' => 'Italy.gif'],
            ['name' => 'Desktop Modello1', 'catId' => 3,
                'descShort' => 'Caratteristiche Desktop1', 'descLong' => self::DESCPROD,
                'price' => 1230.49, 'discountPerc' => 25, 'discounted' => 1, 'image' => 'Brazil.gif'],
            ['name' => 'Laptop Modello1', 'catId' => 4,
                'descShort' => 'Caratteristiche Laptop1', 'descLong' => self::DESCPROD,
                'price' => 455.37, 'discountPerc' => 17, 'discounted' => 1, 'image' => ''],
            ['name' => 'Laptop Modello2', 'catId' => 4,
                'descShort' => 'Caratteristiche Laptop1', 'descLong' => self::DESCPROD,
                'price' => 1889.67, 'discountPerc' => 15, 'discounted' => 1, 'image' => 'Argentina.gif'],
            ['name' => 'Netbook Modello3', 'catId' => 5,
                'descShort' => 'Caratteristiche NetBook3', 'descLong' => self::DESCPROD,
                'price' => 259.99, 'discountPerc' => 17, 'discounted' => 0, 'image' => 'Red Apple.gif'],
            ['name' => 'Laptop Modello3', 'catId' => 4,
                'descShort' => 'Caratteristiche Laptop3', 'descLong' => self::DESCPROD,
                'price' => 998.99, 'discountPerc' => 23, 'discounted' => 1, 'image' => 'UK.gif'],
            ['name' => 'HardDisk Modello1', 'catId' => 6,
                'descShort' => 'Caratteristiche HardDisk1', 'descLong' => self::DESCPROD,
                'price' => 88.93, 'discountPerc' => 5, 'discounted' => 0, 'image' => 'USA.gif'],
            ['name' => 'HardDisk Modello4', 'catId' => 6,
                'descShort' => 'Caratteristiche HardDisk4', 'descLong' => self::DESCPROD,
                'price' => 78.66, 'discountPerc' => 7, 'discounted' => 01, 'image' => 'Ukraine.gif']
        ]);
    }
}
