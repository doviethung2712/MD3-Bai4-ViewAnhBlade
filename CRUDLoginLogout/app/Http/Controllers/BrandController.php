<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{

    public function index()
    {
        $brands = DB::table('brands')->get();
        // $brands = DB::table('brands')->get();
        return view('brands.index',compact('brands'));
    }


    public function create()
    {
        return view('brands.create');
    }

    public function store(Request $request)
    {
        $data = $request->only('name');
        DB::table('brands')->insert($data);
        return redirect()->route('brand.index');
    }


    public function show($id)
    {
        $brand = DB::table('brands')->where('id',$id)->first();
        return view('brands.detail',compact('brand'));
    }

    public function edit($id)
    {
        $brand = DB::table('brands')->where('id',$id)->first();
        return view('brands.update',compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->only('name');
        DB::table('brands')->where('id',$id)->update($data);
        return redirect()->route('brand.index');
    }

    public function destroy($id)
    {
        DB::table('brands')->where('id',$id)->delete();
        return redirect()->route('brand.index');
    }
}
