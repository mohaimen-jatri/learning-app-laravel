<?php

use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

dataset('category pages', [
    'list' => fn () => [route('admin.categories.index'), 'All categories'],
    'create' => fn () => [route('admin.categories.create'), 'Add category'],
    'edit' => fn () => [route('admin.categories.edit', 1), 'Edit category'],
]);

test('guests are redirected to the admin login page', function (array $page) {
    $this->get($page[0])->assertRedirect(route('admin.login'));
})->with('category pages');

test('admins can open the category page', function (array $page) {
    $this->withoutVite();

    $this->actingAs(Admin::factory()->create(), 'admin')
        ->get($page[0])
        ->assertOk()
        ->assertSee($page[1]);
})->with('category pages');
