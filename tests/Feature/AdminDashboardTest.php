<?php

use App\Models\Admin;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('guests are redirected to the admin login page', function () {
    $this->get(route('admin.dashboard'))->assertRedirect(route('admin.login'));
});

test('logged in users cannot access the admin dashboard', function () {
    $this->actingAs(User::factory()->create())
        ->get(route('admin.dashboard'))
        ->assertRedirect(route('admin.login'));
});

test('admins see platform stats and recent users on the dashboard', function () {
    User::factory()->create(['name' => 'Jane Doe']);
    $admin = Admin::factory()->create(['name' => 'Super Admin']);

    $this->withoutVite();

    $this->actingAs($admin, 'admin')
        ->get(route('admin.dashboard'))
        ->assertOk()
        ->assertViewHas('totalUsers', 1)
        ->assertViewHas('totalAdmins', 1)
        ->assertSee('Welcome back, Super Admin.')
        ->assertSee('Jane Doe');
});
