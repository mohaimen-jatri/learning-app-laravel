<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Show the category list (UI only, uses sample data until the Category model exists).
     */
    public function index(): View
    {
        return view('admin.categories.index', [
            'categories' => $this->sampleCategories(),
        ]);
    }

    /**
     * Show the form for creating a new category.
     */
    public function create(): View
    {
        return view('admin.categories.create');
    }

    /**
     * Show the form for editing a category (UI only, pre-filled with sample data).
     */
    public function edit(int $category): View
    {
        $sampleCategory = collect($this->sampleCategories())->firstWhere('id', $category)
            ?? $this->sampleCategories()[0];

        return view('admin.categories.edit', [
            'category' => $sampleCategory,
        ]);
    }

    /**
     * Placeholder categories used until the Category model is built.
     *
     * @return list<array{id: int, name: string, slug: string, description: string, posts_count: int, is_active: bool}>
     */
    private function sampleCategories(): array
    {
        return [
            ['id' => 1, 'name' => 'Technology', 'slug' => 'technology', 'description' => 'Gadgets, software and the latest in tech.', 'posts_count' => 12, 'is_active' => true],
            ['id' => 2, 'name' => 'Travel', 'slug' => 'travel', 'description' => 'Stories and tips from around the world.', 'posts_count' => 8, 'is_active' => true],
            ['id' => 3, 'name' => 'Food', 'slug' => 'food', 'description' => 'Recipes, reviews and food culture.', 'posts_count' => 5, 'is_active' => true],
            ['id' => 4, 'name' => 'Lifestyle', 'slug' => 'lifestyle', 'description' => 'Health, habits and everyday life.', 'posts_count' => 0, 'is_active' => false],
        ];
    }
}
