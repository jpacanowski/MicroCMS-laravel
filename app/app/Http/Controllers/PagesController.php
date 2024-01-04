<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Http\Requests\PageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    // Show single page
    public function show(Page $page) {
        $page->increment('visits_count');
        return view('pages.single', [
            'page' => $page
        ]);
    }

    // Show form to add page
    public function create() {
        return view('pages.create');
    }

    // Store page data
    public function store(PageRequest $request) {

        $validated = $request->validated();

        $validated['slug'] = Str::slug($validated['title'], '-');

        $page = Page::create($validated);

        return redirect()->route('pages.edit', $page)
            ->with('info', 'Page has been created successfully');
    }

    // Show form to edit page
    public function edit(Page $page) {
        return view('pages.edit', [
            'page' => $page
        ]);
    }

    // Update page data
    public function update(PageRequest $request, Page $page) {

        $validated = $request->validated();

        $validated['slug'] = Str::slug($validated['title'], '-');

        $page->update($validated);
        return back()->with('info', 'Page has been updated successfully');
    }

    // Delete page
    public function destroy(Page $page) {
        $page->delete();
        return back()->with('info', 'Page has been deleted successfully');
    }
}
