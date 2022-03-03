<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Users;

class GroupController extends Controller
{
    public function index()
    {
        $group = Group::with('posts')->find(1);
        // $posts = Group::all();
        $posts = $group->posts;
        // dd($posts);
        dd($posts);

        return view('group.index', compact('posts'));
    }
}
