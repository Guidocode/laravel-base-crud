<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Comic;
use Facade\Ignition\DumpRecorder\Dump;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy('id','desc')->get();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // view create.blade.php
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // quando creo un fumetto dal form e lo invio arriva qui
        // dd($request->all());

        $data = $request->all();
        $new_comic = new Comic();

        $data['slug'] = $this->createSlug($data['title']);
        $new_comic->fill($data);

        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);

        if($comic){
            return view('comics.show', compact('comic'));
        }
        abort(404, 'Fumetto non presente nel database');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function createSlug($string){
        $slug = Str::slug($string, '-');
        $control_slug = Comic::where('slug', $slug)->first();

        $i = 0;
        while ($control_slug){
            $slug = Str::slug($string, '-') . '-' . $i;
            $i++;
            $control_slug = Comic::where('slug', $slug)->first();
        }

        return $slug;
    }
}
