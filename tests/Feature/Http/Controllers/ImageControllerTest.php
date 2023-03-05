<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Image;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ImageController
 */
class ImageControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view(): void
    {
        $images = Image::factory()->count(3)->create();

        $response = $this->get(route('image.index'));

        $response->assertOk();
        $response->assertViewIs('image.index');
        $response->assertViewHas('images');
    }


    /**
     * @test
     */
    public function create_displays_view(): void
    {
        $response = $this->get(route('image.create'));

        $response->assertOk();
        $response->assertViewIs('image.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ImageController::class,
            'store',
            \App\Http\Requests\ImageStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects(): void
    {
        $title = $this->faker->sentence(4);
        $location = $this->faker->text;
        $exif = $this->faker->text;
        $camera_type = $this->faker->word;
        $lens_type = $this->faker->word;
        $date = $this->faker->dateTime();
        $tags = $this->faker->;
        $approved_at = $this->faker->dateTime();

        $response = $this->post(route('image.store'), [
            'title' => $title,
            'location' => $location,
            'exif' => $exif,
            'camera_type' => $camera_type,
            'lens_type' => $lens_type,
            'date' => $date,
            'tags' => $tags,
            'approved_at' => $approved_at,
        ]);

        $images = Image::query()
            ->where('title', $title)
            ->where('location', $location)
            ->where('exif', $exif)
            ->where('camera_type', $camera_type)
            ->where('lens_type', $lens_type)
            ->where('date', $date)
            ->where('tags', $tags)
            ->where('approved_at', $approved_at)
            ->get();
        $this->assertCount(1, $images);
        $image = $images->first();

        $response->assertRedirect(route('image.index'));
        $response->assertSessionHas('image.id', $image->id);
    }


    /**
     * @test
     */
    public function show_displays_view(): void
    {
        $image = Image::factory()->create();

        $response = $this->get(route('image.show', $image));

        $response->assertOk();
        $response->assertViewIs('image.show');
        $response->assertViewHas('image');
    }


    /**
     * @test
     */
    public function edit_displays_view(): void
    {
        $image = Image::factory()->create();

        $response = $this->get(route('image.edit', $image));

        $response->assertOk();
        $response->assertViewIs('image.edit');
        $response->assertViewHas('image');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ImageController::class,
            'update',
            \App\Http\Requests\ImageUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects(): void
    {
        $image = Image::factory()->create();
        $title = $this->faker->sentence(4);
        $location = $this->faker->text;
        $exif = $this->faker->text;
        $camera_type = $this->faker->word;
        $lens_type = $this->faker->word;
        $date = $this->faker->dateTime();
        $tags = $this->faker->;
        $approved_at = $this->faker->dateTime();

        $response = $this->put(route('image.update', $image), [
            'title' => $title,
            'location' => $location,
            'exif' => $exif,
            'camera_type' => $camera_type,
            'lens_type' => $lens_type,
            'date' => $date,
            'tags' => $tags,
            'approved_at' => $approved_at,
        ]);

        $image->refresh();

        $response->assertRedirect(route('image.index'));
        $response->assertSessionHas('image.id', $image->id);

        $this->assertEquals($title, $image->title);
        $this->assertEquals($location, $image->location);
        $this->assertEquals($exif, $image->exif);
        $this->assertEquals($camera_type, $image->camera_type);
        $this->assertEquals($lens_type, $image->lens_type);
        $this->assertEquals($date, $image->date);
        $this->assertEquals($tags, $image->tags);
        $this->assertEquals($approved_at, $image->approved_at);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects(): void
    {
        $image = Image::factory()->create();

        $response = $this->delete(route('image.destroy', $image));

        $response->assertRedirect(route('image.index'));

        $this->assertModelMissing($image);
    }
}
