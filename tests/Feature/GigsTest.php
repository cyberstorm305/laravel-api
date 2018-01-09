<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Gigs;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GigsTest extends TestCase
{
    public function testGigModel(){
        $gigs = new Gigs(['name' => 'gig']);
        $this->assertEquals('gig', $gigs->name);
    }
    public function testApiIsReachable()
    {
        $response = $this->get('/api/gigs');

        $response->assertStatus(200);
    }
}
