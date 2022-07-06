<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Post;
use App\Models\Category;

class CategoryController extends Controller
{

    public function posts(Category $category)
    {
        return view('posts.index', [
            'posts' => $category->posts
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required',
        ]);

        $category = Category::create([
            'name' => ucfirst($request->input('category_name')),
            'slug' => Str::slug($request->input('category_name', '-')),
        ]);

        return redirect()
            ->to('dashboard/categories')
            ->with('info', 'Category has been added successfully');
    }

    public function update(int $categoryId, Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required',
        ]);

        Category::whereId($categoryId)->update([
            'name' => ucfirst($request->input('category_name')),
            'slug' => Str::slug($request->input('category_slug', '-')),
        ]);

        return redirect()
            ->to('dashboard/category/edit/' . $categoryId)
            ->with('info', 'Category has been updated successfully');
    }

    public function delete(int $categoryId)
    {
        Category::whereId($categoryId)->delete();

        return redirect()
            ->to('dashboard/categories')
            ->with('info', 'Category has been deleted successfully');
    }
}
