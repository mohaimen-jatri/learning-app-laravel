<?php

use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;

uses(RefreshDatabase::class);

test('an admin can log in and is sent to the dashboard', function () {
    $admin = Admin::factory()->create();

    $this->post(route('admin.login.submit'), [
        'email' => $admin->email,
        'password' => 'password',
    ])->assertRedirect(route('admin.dashboard'));

    $this->assertAuthenticatedAs($admin, 'admin');
});

test('admin login never sets a remember me cookie', function () {
    $admin = Admin::factory()->create();

    $this->post(route('admin.login.submit'), [
        'email' => $admin->email,
        'password' => 'password',
        'remember' => 'on',
    ])->assertCookieMissing(Auth::guard('admin')->getRecallerName());

    $this->assertAuthenticatedAs($admin, 'admin');
});

test('an admin cannot log in with a wrong password', function () {
    $admin = Admin::factory()->create();

    $this->from(route('admin.login'))
        ->post(route('admin.login.submit'), [
            'email' => $admin->email,
            'password' => 'wrong-password',
        ])
        ->assertRedirect(route('admin.login'))
        ->assertSessionHasErrors(['email' => 'The provided credentials do not match our records.']);

    $this->assertGuest('admin');
});

test('an inactive admin cannot log in', function () {
    $admin = Admin::factory()->inactive()->create();

    $this->post(route('admin.login.submit'), [
        'email' => $admin->email,
        'password' => 'password',
    ])->assertSessionHasErrors('email');

    $this->assertGuest('admin');
});

test('a logged in admin visiting the login page is sent to the dashboard', function () {
    $this->actingAs(Admin::factory()->create(), 'admin')
        ->get(route('admin.login'))
        ->assertRedirect(route('admin.dashboard'));
});

test('an admin can log out', function () {
    $this->actingAs(Admin::factory()->create(), 'admin')
        ->post(route('admin.logout'))
        ->assertRedirect(route('admin.login'));

    $this->assertGuest('admin');
});
