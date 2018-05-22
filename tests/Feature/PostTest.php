<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Post;

// require_once(app\Post.php);

class GoogleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $post = new Post();
        $this->assertTrue($post->timestamps);
    }
    public function testExample2()
    {
        $post = new Post();
        $this->assertEquals('id', $post->primaryKey);
    }
}
