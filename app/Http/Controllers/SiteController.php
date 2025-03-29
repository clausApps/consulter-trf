<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;

class SiteController extends Controller
{
    public function index()
    {
        $sites = Site::all();
        return view('sites.index', compact('sites'));
    }

    public function create()
    {
        return view('sites.create');
    }

    public function store(Request $request)
    {
        Site::create($request->only(['nome', 'url', 'login_field', 'password_field']));
        return redirect()->route('sites.index');
    }

    public function edit(Site $site)
    {
        return view('sites.edit', compact('site'));
    }

    public function update(Request $request, Site $site)
    {
        $site->update($request->only(['nome', 'url', 'login_field', 'password_field']));
        return redirect()->route('sites.index');
    }

    public function destroy(Site $site)
    {
        $site->delete();
        return redirect()->route('sites.index');
    }
}
