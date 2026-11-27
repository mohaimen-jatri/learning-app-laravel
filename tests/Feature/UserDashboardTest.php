<?php

use App\Models\Admin;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;

uses(RefreshDatabase::class);

test('guests are redirected to the user login page', function () {
    $this->get(route('user.dashboard'))->assertRedirect(route('user.login'));
});

test('logged in admins cannot access the user dashboard', function () {
    Auth::guard('admin')->login(Admin::factory()->create());

    $this->get(route('user.dashboard'))
        ->assertRedirect(route('user.login'));
});

test('logged in users see their dashboard', function () {
    $user = User::factory()->create(['name' => 'Jane Doe']);

    $this->actingAs($user)
        ->get(route('user.dashboard'))
        ->assertOk()
        ->assertSee('Welcome back, Jane Doe!')
        ->assertSee($user->email);
});

test('users are sent to their dashboard after logging in', function () {
    $user = User::factory()->create();

    $this->post(route('user.login.submit'), [
        'email' => $user->email,
        'password' => 'password',
    ])->assertRedirect(route('user.dashboard'));

    $this->assertAuthenticatedAs($user);
});
