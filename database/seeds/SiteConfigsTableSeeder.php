<?php

use App\Models\SiteConfig;
use Illuminate\Database\Seeder;

class SiteConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteConfig::truncate();

        SiteConfig::create([
            'name' => 'Site name',
            'phone' => '111 22 33 10',
            'address' => 'Address field, Grodno/Belarus',
            'content' => 'this is the description for the concept of the website.',
        ]);
    }
}
