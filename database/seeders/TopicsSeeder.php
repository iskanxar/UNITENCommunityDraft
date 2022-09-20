<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Topic;

class TopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::create(['name' => 'Sports']);
        Topic::create(['name' => 'Art']);
        Topic::create(['name' => 'Culture']);
        Topic::create(['name' => 'Spiritual']);
        Topic::create(['name' => 'Leadership']);
        Topic::create(['name' => 'Intellectual']);
        Topic::create(['name' => 'Skills']);
    }
}
