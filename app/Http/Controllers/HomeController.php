<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $apartments = Home::all();
        return view('welcome', [
            "apartments" => $apartments
        ]);
    }

    public function create(Request $request)
    {
        return view('apartments.new');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'description'=> 'required',
            'location'=> 'required',
            'beds'=>    'required',
            'image'=>  'required|mimes:jpg,png,pdf,jpeg|max:5000'
        ]);

        $fileName = time().'_'.$request->image->getClientOriginalName();
        $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');

        Home::create([
            'description'=> $request->description,
            'location'=> $request->location,
            'beds'=>    $request->beds,
            'image'=>  '/storage/'.$filePath,
        ]);

        return redirect()->route('/');
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        return view('apartments.show', [
            "apartment" => $home
        ]);
    }
    
    public function edit(Home $home)
    {
        return 'edit Home';
    }

    public function update(Home $home)
    {
        return 'update Home';
    }

    public function destroy(Home $home)
    {
        return 'delete Home';
    }
}
