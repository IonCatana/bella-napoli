<?php

use Illuminate\Database\Seeder;
use App\Pizza;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pizzas = [
            [
                'name' => 'margherita',
                'description' => 'pomodoro, mozzarella',
                'price' => 4.5,
                'img' => 'https://'
            ],
            [
                'name' => 'diavola',
                'description' => 'pomodoro, mozzarella , salame picante',
                'price' => 6.5,
                'img' => 'https://'
            ],
            [
                'name' => 'veggetariana',
                'description' => 'pomodoro, mozzarella , zucchine, melanzane',
                'price' => 6.0,
                'img' => 'https://'
            ]

        ];

        foreach ($pizzas as  $pizza) {
            # code...
            $newpizza = new Pizza();
            $newpizza->name =  $pizza['name'];
            $newpizza->description =  $pizza['description'];
            $newpizza->price =  $pizza['price'];
            $newpizza->img =  $pizza['img'];
            $newpizza->save();
        }
    }
}
