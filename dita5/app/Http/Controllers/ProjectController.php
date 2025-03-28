<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data = Todo::all();
        // return response()->json($data);
        // return response()->streamDownload(function(){
        //     echo file_get_contents("https://laravel.com/docs/12.x");
        // },"documentation.html");
        // return view('blog.home');
        return view('blog.home',['todos'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function about()
    {
        return view('blog.about');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
