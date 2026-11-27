@php
    /** @var array{name: string, slug: string, description: string, is_active: bool}|null $category */
    $category ??= null;
@endphp

<div class="space-y-5">
    <div>
        <label for="name" class="mb-2 block text-sm font-medium text-heading">Name</label>
        <input
            type="text"
            id="name"
            name="name"
            value="{{ old('name', $category['name'] ?? '') }}"
            placeholder="e.g. Technology"
            required
            class="block w-full rounded-base border border-default-medium bg-neutral-secondary-medium px-3 py-2.5 text-sm text-heading shadow-xs placeholder:text-body focus:border-brand focus:ring-brand"
        />
    </div>

    <div>
        <label for="slug" class="mb-2 block text-sm font-medium text-heading">Slug</label>
        <input
            type="text"
            id="slug"
            name="slug"
            value="{{ old('slug', $category['slug'] ?? '') }}"
            placeholder="e.g. technology"
            class="block w-full rounded-base border border-default-medium bg-neutral-secondary-medium px-3 py-2.5 text-sm text-heading shadow-xs placeholder:text-body focus:border-brand focus:ring-brand"
        />
        <p class="mt-2 text-xs text-body">Used in the URL. Leave empty to generate it from the name.</p>
    </div>

    <div>
        <label for="description" class="mb-2 block text-sm font-medium text-heading">Description</label>
        <textarea
            id="description"
            name="description"
            rows="4"
            placeholder="A short description of this category"
            class="block w-full rounded-base border border-default-medium bg-neutral-secondary-medium px-3 py-2.5 text-sm text-heading shadow-xs placeholder:text-body focus:border-brand focus:ring-brand"
        >{{ old('description', $category['description'] ?? '') }}</textarea>
    </div>

    <div class="flex items-center">
        <input
            type="checkbox"
            id="is_active"
            name="is_active"
            value="1"
            @checked(old('is_active', $category['is_active'] ?? true))
            class="size-4 rounded-xs border border-default-medium bg-neutral-secondary-medium focus:ring-2 focus:ring-brand-soft"
        />
        <label for="is_active" class="ms-2 text-sm font-medium text-heading">Active</label>
    </div>
</div>
