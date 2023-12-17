<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Carbon\Carbon;

class OngoingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Carbon::now('GMT+8')->subHour(2));
        //
        return view('ongoing.index', [
            'books' => Book::where('end_date', '>=',Carbon::now()->toDateString())
                ->orderBy('created_at','desc')->get(),
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

        // dd(Book::findOrFail($id));
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
            $new_status_detail = '';
            if($book->status == 'Sent to admin'){
                $new_status = 'Waiting for payment';
                $new_status_detail = 'Please pay the bill and confirm it to admin';
            }
            else if($book->status == 'Waiting for payment'){
                $new_status = 'Waiting for checkin';
                $new_status_detail = 'Your payment has been confirmed and ready for checkin';
            }
            else if($book->status == 'Waiting for checkin'){
                $new_status = 'At villa';
                $new_status_detail = 'You are at the villa!';
            }
            else if($book->status == 'At villa'){
                $new_status = 'Completed';
                $new_status_detail = 'Checked out! Your order is finished';
            }
            else {
                return back()->with('warning','System didn\'t find your data');
            }
            $book->status = $new_status;
            $book->status_detail = $new_status_detail;

            if($book->save()){
                return back()->with('success','Your changes have been saved! New status: '.$new_status);
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
        $book = Book::findOrFail($id);
        $book->status = 'Cancelled';

        if($book->save() && Book::destroy($id)){
            return redirect('/admin/ongoing')->with(
                'succes_delete_book', 'Success deleting record!'
            );
        } else {
            return redirect('/admin/ongoing/'.$id)->with(
                'warning', 'Cannot delete book record.'
            );
        }
    }
}
