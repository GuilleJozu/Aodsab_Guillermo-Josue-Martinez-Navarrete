<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class NewsSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $news = [];

        for ($i=0; $i < 100; $i++) { 
            $news[] = [
                'title' => $faker->sentence(),
                'slug'  => $faker->sentence(),
                'body'  => $faker->paragraph()
            ];
        }

        $builder = $this->db->table('news');
        $builder->insertBatch($news);
    }
}
