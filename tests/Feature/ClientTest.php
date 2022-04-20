<?php

namespace Tests\Feature;

use App\Models\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientTest extends TestCase
{
    public function test_after_create_is_visible_on_list()
    {
        $client = Client::factory()->create();
        $response = $this->get('/client');

        $response
            ->assertStatus(200)
            ->assertSee($client->first_name)
            ->assertSee($client->last_name)
            ->assertSee($client->pesel)
            ->assertSee($client->email);
    }

    public function test_after_create_is_visible_on_details()
    {
        $client = Client::factory()->create();
        $response = $this->get('/client/' . $client->id);

        $response
            ->assertStatus(200)
            ->assertSee($client->first_name)
            ->assertSee($client->last_name)
            ->assertSee($client->pesel)
            ->assertSee($client->email);
    }

    public function test_create_client_exists()
    {
        $response = $this->get('/client/create');

        $response
            ->assertStatus(200);
    }

    public function test_export_exists()
    {
        $response = $this->get('/clients.csv');

        $response
            ->assertStatus(200);
    }

    public function test_on_edit_visible_details()
    {
        $client = Client::factory()->create();
        $response = $this->get('/client/' . $client->id . '/edit');

        $response
            ->assertStatus(200)
            ->assertSee($client->first_name)
            ->assertSee($client->last_name)
            ->assertSee($client->pesel)
            ->assertSee($client->email);
    }

    public function test_delete()
    {
        $client = Client::factory()->create();
        $response = $this->get('/client/');

        $response
            ->assertStatus(200)
            ->assertSee($client->first_name)
            ->assertSee($client->last_name)
            ->assertSee($client->pesel)
            ->assertSee($client->email);

        $response = $this->call('DELETE', '/client/' . $client->id, ['_token' => csrf_token()]);
        $response
            ->assertStatus(302);

        $response = $this->get('/client/');

        $response
            ->assertStatus(200)
            ->assertDontSee($client->first_name)
            ->assertDontSee($client->last_name)
            ->assertDontSee($client->pesel)
            ->assertDontSee($client->email);
    }
}
