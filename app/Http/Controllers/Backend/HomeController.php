<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Home Page');
    }
    public function create()
    {
        $data = Home::orderBy('id', 'asc')->paginate(10);
        return view('pages.backend.home.create', compact('data'));
    }
    public function index()
    {
        $data = Home::orderBy('id', 'asc')->paginate(10);
        return view('pages.backend.home.display', compact('data'));
    }
    public function store(Request $request)
    {
        $data = new Home;
        if ($request->hasFile('wallpaper')) {
            $file = $request->file('wallpaper');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('home/wallpaper', $filename);
            $data->wallpaper = $filename;
        }
        if ($request->hasFile('cards_logo')) {
            $file = $request->file('cards_logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('home/cards_logo', $filename);
            $data->cards_logo = $filename;
        }
        $data->cards_title = $request->cards_title;
        $data->twitter = $request->twitter;
        $data->instagram = $request->instagram;
        $data->facebook = $request->facebook;
        $data->linkdin = $request->linkdin;
        $data->email_id = $request->email_id;
        $data->googlemap = $request->googlemap;
        $data->save();
        return redirect()->route('admin.homedisplay')->with('success', 'Image was Successfully Uploaded');
    }

}