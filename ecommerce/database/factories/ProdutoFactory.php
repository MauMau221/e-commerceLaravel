<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Estoque;
use App\Models\Produto;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->word,
            'desc' => $this->faker->paragraph(),
            'preco' => $this->faker->randomNumber(2),
            'desconto' => $this->faker->randomNumber(2),
            'status' => $this->faker->randomNumber(2),
            'url' => $this->faker->imageUrl(400, 400),
            'id_user' => User::inRandomOrder()->first()->id ?? User::factory()->create()->id,
            'id_categoria' => Categoria::inRandomOrder()->first()->id ?? Categoria::factory()->create()->id,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Produto $produto) {
            Estoque::factory()->create([
                'produto_id' => $produto->id,
            ]);
        });
    }
}
