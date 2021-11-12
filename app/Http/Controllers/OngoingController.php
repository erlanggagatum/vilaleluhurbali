<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class OngoingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('ongoing.index', [
            'books' => Book::all(),
        ]);
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
        // dd(Book::findOrFail($id)->getUser()->first_name);
        //
        return view('ongoing.detail',[
            'book' => Book::findOrFail($id),
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
        // dd('it works');
        // if ($request->security_checkbox){
        // dd($request->has('security_checkbox'));
        // }
        if($request->has('security_checkbox')){

            $book = Book::findOrFail($id);

            $new_status = '';
            if($book->status == 'Sent to admin'){
                $new_status = 'Waiting for payment';
            }
            else if($book->status == 'Waiting for payment'){
                $new_status = 'Waiting for checkin';
            }
            else if($book->status == 'Waiting for checkin'){
                $new_status = 'Completed';
            }
            else {
                return back()->with('warning','System didn\'t find your data');
            }
            $book->status = $new_status;
            if($book->save()){
                return back()->with('success','Your changes have been saved!'.$new_status);
            }
            
            return back()->with('warning','Data can\'t be saved');
            
        }
        return back()->with('warning','Please make sure you have checked the checkbox below!');
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
