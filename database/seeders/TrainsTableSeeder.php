<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
            $table->string('company', 15);
            $table->string('from', 30);
            $table->string('to', 30);
            $table->time('departure');
            $table->time('arrival');
            $table->smallInteger('train_number')->unsigned();
            $table->tinyInteger('total_couch');
            $table->tinyInteger('is_on_time')->default(1);
            $table->tinyInteger('is_deleted')->default(0);
            $table->timestamps();
        */
        $new_train = new Train();
        $new_train->company = 'Italo';
        $new_train->from = 'Roma Termini';
        $new_train->to = 'Milano Centrale';
        $new_train->departure = '10:00:00';
        $new_train->arrival = '13:00:00';
        $new_train->train_number = 12345;
        $new_train->total_couch = 6;
        $new_train->total_couch = 1;
        $new_train->total_couch = 0;
        $new_train->save();




    }
}
