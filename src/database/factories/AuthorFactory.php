<?php

namespace Database\Factories;

use App\Models\Author; //3-7:ファクトリを作成する際に、Authorモデルをインポートします。
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 3-7:ファクトリ：fakerメソッドを用いて、name、age、nationalityの３つのカラムに対して、ランダムデータを作成するように記述
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(1,100),
            'nationality' =>$this->faker->country
        ];
    }
}
