<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Character;

class CharacterControllerTest extends TestCase
{
    use RefreshDatabase;
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_index_displays_success()
{
    Character::factory()->count(3)->create();

    $response = $this->get(route('characters.index'));

    $response->assertStatus(200);
    $response->assertViewIs('characters.index');
    $response->assertViewHas('characters');
}

public function test_delete_character()
{
    $character = Character::factory()->create();

    $response = $this->delete(route('characters.destroy', $character));

    $response->assertRedirect(route('characters.index'));
    $this->assertSoftDeleted('characters', ['id' => $character->id]);
}

public function test_restore_character()
{
    $character = Character::factory()->create();
    $character->delete();

    $response = $this->put(route('characters.restore', $character));

    $response->assertRedirect(route('characters.index'));
    $this->assertDatabaseHas('characters', ['id' => $character->id, 'deleted_at' => null]);
}
}
