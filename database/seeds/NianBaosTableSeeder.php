<?php

use Illuminate\Database\Seeder;
use App\Models\NianBao;

class NianBaosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nianbao = factory(NianBao::class)->times(500)->create();
    }
}
