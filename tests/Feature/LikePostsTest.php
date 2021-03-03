<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LikePostsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function a_post_can_be_liked()
    {
        $post = \App\Models\Post::factory()->create();

        $post->like();

        $this->assertCount(1, $post->likes);
    }
}
