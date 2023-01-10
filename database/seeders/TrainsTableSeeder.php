<?php

namespace Database\Seeders;

use Faker\Generator as Faker;

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
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $new_train = new Train();
            $new_train->company = 'trenitalia';
            $new_train->from = $faker->city();
            $new_train->to = $faker->city();
            $new_train->departure = $faker->time();
            $new_train->arrival = $faker->time();
            $new_train->train_number = 12345;
            $new_train->total_couch = $faker->numberBetween(6, 20);
            $new_train->is_on_time = 1;
            $new_train->is_deleted = 0;
            //dump($new_train);
            $new_train->save();
        }

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
        /*
            $new_train = new Train();
            $new_train->company = 'Italo';
            $new_train->from = 'Roma Termini';
            $new_train->to = 'Milano Centrale';
            $new_train->departure = '10:00:00';
            $new_train->arrival = '13:00:00';
            $new_train->train_number = 12345;
            $new_train->total_couch = 6;
            $new_train->is_on_time = 1;
            $new_train->is_deleted = 0;
            $new_train->save();
        */



    }
}
