<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('guests see the login button in the navbar', function () {
    $this->get('/')
        ->assertOk()
        ->assertSee(route('user.login'))
        ->assertDontSee(route('user.logout'));
});

test('logged in users see their name and a logout button in the navbar', function () {
    $user = User::factory()->create(['name' => 'Jane Doe']);

    $this->actingAs($user)
        ->get('/')
        ->assertOk()
        ->assertSee('Jane Doe')
        ->assertSee(route('user.logout'))
        ->assertSee('Profile');
});

test('a logged in user can log out', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->post(route('user.logout'))
        ->assertRedirect('/');

    $this->assertGuest();
});

test('guests cannot use the logout route', function () {
    $this->post(route('user.logout'))->assertRedirect(route('user.login'));
});
