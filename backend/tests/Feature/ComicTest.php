<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Comic;

class ComicTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $comic = new Comic();
        $response = $comic->chapters();
        $this->assertSame(true, true);
    }
}
