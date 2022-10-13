<?php

namespace Database\Seeders;

use App\Models\Batch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Batch::create([
            'name'=> 'Batch 1',
            'slug' => 'batch_01',
            'shift' => 'morning',
            'start_date' => '1-oct-2022',
            'end_date' => '30-dec-2022',
            'start_time' => '10:00 am',
            'end_time' => '12:00 pm'
        ]);
        Batch::create([
            'name'=> 'Batch 2',
            'slug' => 'batch_02',
            'shift' => 'evening',
            'start_date' => '1-oct-2022',
            'end_date' => '30-dec-2022',
            'start_time' => '1:00 pm',
            'end_time' => '3:00 pm'
        ]);
        Batch::create([
            'name'=> 'Batch 3',
            'slug' => 'batch_03',
            'shift' => 'morning',
            'start_date' => '1-jan-2023',
            'end_date' => '30-march-2023',
            'start_time' => '10:00 am',
            'end_time' => '12:00 pm'
        ]);
        Batch::create([
            'name'=> 'Batch 4',
            'slug' => 'batch_04',
            'shift' => 'evening',
            'start_date' => '1-jan-2023',
            'end_date' => '30-march-2023',
            'start_time' => '1:00 pm',
            'end_time' => '3:00 pm'
    ]);
    }
}
