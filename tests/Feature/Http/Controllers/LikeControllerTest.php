<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Image;
use App\Models\Like;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\LikeController
 */
class LikeControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view(): void
    {
        $likes = Like::factory()->count(3)->create();

        $response = $this->get(route('like.index'));

        $response->assertOk();
        $response->assertViewIs('like.index');
        $response->assertViewHas('likes');
    }


    /**
     * @test
     */
    public function create_displays_view(): void
    {
        $response = $this->get(route('like.create'));

        $response->assertOk();
        $response->assertViewIs('like.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\LikeController::class,
            'store',
            \App\Http\Requests\LikeStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects(): void
    {
        $user = User::factory()->create();
        $image = Image::factory()->create();

        $response = $this->post(route('like.store'), [
            'user_id' => $user->id,
            'image_id' => $image->id,
        ]);

        $likes = Like::query()
            ->where('user_id', $user->id)
            ->where('image_id', $image->id)
            ->get();
        $this->assertCount(1, $likes);
        $like = $likes->first();

        $response->assertRedirect(route('like.index'));
        $response->assertSessionHas('like.id', $like->id);
    }


    /**
     * @test
     */
    public function show_displays_view(): void
    {
        $like = Like::factory()->create();

        $response = $this->get(route('like.show', $like));

        $response->assertOk();
        $response->assertViewIs('like.show');
        $response->assertViewHas('like');
    }


    /**
     * @test
     */
    public function edit_displays_view(): void
    {
        $like = Like::factory()->create();

        $response = $this->get(route('like.edit', $like));

        $response->assertOk();
        $response->assertViewIs('like.edit');
        $response->assertViewHas('like');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\LikeController::class,
            'update',
            \App\Http\Requests\LikeUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects(): void
    {
        $like = Like::factory()->create();
        $user = User::factory()->create();
        $image = Image::factory()->create();

        $response = $this->put(route('like.update', $like), [
            'user_id' => $user->id,
            'image_id' => $image->id,
        ]);

        $like->refresh();

        $response->assertRedirect(route('like.index'));
        $response->assertSessionHas('like.id', $like->id);

        $this->assertEquals($user->id, $like->user_id);
        $this->assertEquals($image->id, $like->image_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects(): void
    {
        $like = Like::factory()->create();

        $response = $this->delete(route('like.destroy', $like));

        $response->assertRedirect(route('like.index'));

        $this->assertModelMissing($like);
    }
}
