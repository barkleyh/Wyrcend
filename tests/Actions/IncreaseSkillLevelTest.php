<?php

namespace Tests\Actions;

use App\Actions\IncreaseSkillLevel;
use App\Models\PlayerCharacter;
use App\Models\User;
use PHPUnit\Framework\TestCase;

class IncreaseSkillLevelTest extends TestCase
{
    public function test_it_can_increase_a_skill()
    {
        $playerCharacter = PlayerCharacter::factory()
            ->create();

        $playerCharacter->skills;

    }

}
