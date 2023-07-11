<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}


/*
Sure, you're welcome.
Since you want the charge creation to be on the seller or connected account and you just want to get a percentage as a platform, you may use the direct charges. You may check this doc for the guide and onboarding: https://stripe.com/docs/connect/direct-charges
Here's the overview of the fund flow: https://stripe.com/docs/connect/direct-charges#flow-of-funds-with-fees
*/
/*
$P$B5A7FHjyEOzfyg0vvUuztS2h71Vq5e0 -p@ssword