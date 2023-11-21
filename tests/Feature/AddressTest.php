<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(fn () => \App\Models\Address::factory()->create());

it('returns a successful response index', function () {
    $response = $this->get(route('address.index'));

    $response->assertStatus(200);
});

it('returns a successful response show', function () {
    $address = \App\Models\Address::first();

    $response = $this->get(route('address.show', $address));

    $response->assertStatus(200);
});

test('returns a successful response store Address', function () {
    $storeData = [
        'name' => 'Store testing name',
        'slug' => 'testing',
        'city' => 'São Paulo',
        'state' => 'São Paulo',
    ];

    $response = $this->post(route('address.store'), $storeData);

    $response->assertStatus(200);
});

test('returns a successful response update Address', function () {
    $address = \App\Models\Address::first();

    $updatedData = [
        'name' => 'Update testing name',
        'slug' => 'testing',
    ];

    $response = $this->put(route('address.update', $address), $updatedData);

    $response->assertStatus(200);
});

test('returns a successful response delete Address', function () {
    $address = \App\Models\Address::first();

    $response = $this->delete(route('address.destroy', $address));

    $response->assertStatus(200);
});
