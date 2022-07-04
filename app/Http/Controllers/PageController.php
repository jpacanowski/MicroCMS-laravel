<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Page;

class PageController extends Controller
{
    public function show(String $slug) {
        return view('pages.page', [
            'page' => Page::whereSlug($slug)->first()
        ]);
    }
}
