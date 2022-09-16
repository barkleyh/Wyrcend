<?php

namespace Tests\Feature;

use App\Models\PlayerCharacter;
use App\Models\Skill;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PlayerCharacterTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */


    public function test_the_player_has_a_display_name()
    {
        $playerCharacter = PlayerCharacter::factory()
            ->create();

        $this->assertNotNull($playerCharacter->display_name);

        // $response = $this->get('/');

        // $response->assertStatus(200);
    }

    public function test_the_player_has_skills()
    {
        $playerCharacter = PlayerCharacter::factory()
            ->create();

        $playerCharacter->skills = [
            'Woodcutting' => new Skill(),
            'Fishing' => new Skill(),
            'Cooking' => new Skill(),
            'Hunting' => new Skill()
        ];

        $this->assertNotNull($playerCharacter->skills);
    }
}
