<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

uses(RefreshDatabase::class);

test('a guest can sign up and is logged in', function () {
    $response = $this->post(route('user.signup.store'), [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password123',
        'password_confirmation' => 'password123',
        'terms' => 'on',
    ]);

    $response->assertRedirect('/')->assertSessionHasNoErrors();

    $user = User::where('email', 'test@example.com')->first();
    expect($user)->not->toBeNull()
        ->and(Hash::check('password123', $user->password))->toBeTrue();
    $this->assertAuthenticatedAs($user);
});

test('sign up fails with invalid data', function () {
    User::factory()->create(['email' => 'taken@example.com']);

    $response = $this->from(route('user.signup'))->post(route('user.signup.store'), [
        'name' => '',
        'email' => 'taken@example.com',
        'password' => 'short',
        'password_confirmation' => 'different',
    ]);

    $response->assertRedirect(route('user.signup'))
        ->assertSessionHasErrors(['name', 'email', 'password', 'terms']);
    $this->assertGuest();
});
