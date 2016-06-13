<?php

use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Paper::class)->create();

        factory(App\Question::class, 20)->create()->each(function($q) {
            $q->choices()->save(new \App\Choice(['key' => 'a', 'label' => 'A']));
            $q->choices()->save(new \App\Choice(['key' => 'b', 'label' => 'B']));
            $q->choices()->save(new \App\Choice(['key' => 'c', 'label' => 'C']));
            $q->choices()->save(new \App\Choice(['key' => 'd', 'label' => 'D']));
        });
    }
}
