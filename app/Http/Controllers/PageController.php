<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Page;

class PageController extends Controller
{
    public function show(String $slug) {
        return view('pages.page', [
            'page' => Page::whereSlug($slug)->first()
        ]);
    }

    public function store(Request $request) {

        $this->validate($request, [
            'page_title' => 'required',
        ]);

        $page = Page::create([
            'title' => $request->input('page_title'),
            'content' => $request->input('page_content'),
            'slug' => Str::slug($request->input('page_title', '-')),
        ]);

        return redirect()
            ->to('dashboard/page/edit/' . $page->id)
            ->with('info', 'Page has been added successfully');
    }

    public function update(int $pageId, Request $request) {

        $this->validate($request, [
            'page_title' => 'required',
        ]);

        Page::whereId($pageId)->update([
            'title' => $request->input('page_title'),
            'content' => $request->input('page_content'),
            'slug' => Str::slug($request->input('page_title', '-')),
        ]);

        return redirect()
            ->to('dashboard/page/edit/' . $pageId)
            ->with('info', 'Page has been edited successfully');
    }
}
