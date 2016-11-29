<?php

use Illuminate\Database\Seeder;

class SubtasksTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory('App\Subtask', 69)->create();
    }
}
