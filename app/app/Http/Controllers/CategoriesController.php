<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    // Show all posts by category
    public function index(Category $category) {
        return view('posts.index', [
            'posts' => $category->posts()->published()->latest()->get(),
            'last_posts' => Post::published()->latest()->limit(5)->get(),
            'categories' => Category::all()
        ]);
    }

    // Show form to create category
    public function create() {
        return view('categories.create');
    }

    // Show form to edit category
    public function edit(Category $category) {
        return view('categories.edit', [
            'category' => $category
        ]);
    }

    // Store category
    public function store(CategoryRequest $request, Category $category) {
        $category = Category::create($request->validated());
        return redirect()->route('categories.edit', $category)
            ->with('info', 'Category has been created successfully');
    }

    // Update category data
    public function update(CategoryRequest $request, Category $category) {
        $category->update($request->validated());
        return back()->with('info', 'Category has been updated successfully');
    }

    // Delete category
    public function destroy(Category $category) {
        $category->delete();
        return back()->with('info', 'Category has been deleted successfully');
    }
}
