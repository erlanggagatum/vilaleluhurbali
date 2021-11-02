<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('book.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('book.index', ['name' => 'Samantha']);
        //
        if($id == 1){
            return view('book.index', ['name' => 'Villa 1']);
        }
        if($id == 2){
            return view('book.index', ['name' => 'Villa 2']);
        }
        if($id == 3){
            return view('book.index', ['name' => 'Villa 3']);
        }
        else {
            return view('book.index', ['name' => 'Villa 4']);
        }
    }


    public function secondStep(Request $request, $id){
        // hanya user yang sudah login boleh akses 2nd step
        if(!Auth::user()){
            return redirect('/login');
        }

        $start = $request->checkinDate;
        $nights = $request->selectNight;
        $end = $request->checkoutDate;
        return view('book.secondstep',[
            'name' => 'Villa '.$id,
            'start' => $start,
            'end' => $end,
            'nights' => $nights,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
}
