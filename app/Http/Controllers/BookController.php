<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Models\User;
use App\Models\Villa;

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
        return redirect('/book/1');
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
            return view('book.index', ['name' => 'Villa 1', 'idvilla' => 1]);
        }
        if($id == 2){
            return view('book.index', ['name' => 'Villa 2', 'idvilla' => 2]);
        }
        if($id == 3){
            return view('book.index', ['name' => 'Villa 3', 'idvilla' => 3]);
        }
        if($id == 4){
            return view('book.index', ['name' => 'Villa 3', 'idvilla' => 3]);
        }
        else {
            return redirect('/book/1');
        }
    }


    public function secondStep(Request $request){
        // hanya user yang sudah login boleh akses 2nd step
        // dd('disini');
        if(!Auth::user()){
            return redirect('/login');
        }

        

        // validation
        $validate = $request->validate([
            'checkinDate'=>'required|date',
            'selectNight'=>'required',
            'checkoutDate'=>'required|date',
            'idvilla'=>'required',
        ]);

        $start = $request->checkinDate;
        $nights = $request->selectNight;
        $end = $request->checkoutDate;
        $idvilla = $request->idvilla;

        // cari tanggal tabrakan
        $booked = Book::whereBetween('start_date', [$start,$end])->count();
        dd($booked);


        // dd($idvilla);

        return view('book.secondstep',[
            // 'name' => 'Villa '.$id,
            'start' => $start,
            'end' => $end,
            'nights' => $nights,
            'idvilla' => $idvilla,
        ]);
    }

    public function finalStep(Request $request){
        if(!Auth::user()){
            return redirect('/login');
        }

        // dd(User::find(1)->books[0]->status);

        $start = date('Y-m-d',strtotime($request->checkinDate));
        $nights = explode(' ',$request->selectNight)[0];
        $end = date('Y-m-d',strtotime($request->checkoutDate));
        $idvilla = $request->idvilla;
        $iduser = Auth::user()->id;
        // dd($start,$end);
        // dd($request->idvilla);

        $book = new Book();
        $book->start_date = $start;
        $book->end_date = $end;
        $book->status = "Sent to admin";
        $book->status_detail = "Your order is being confirmed by admin. Please wait until admin contacted your number for confirmation";
        $book->user_id = $iduser;
        $book->villa_id = $idvilla;
        $book->nights = $nights;

        $book->save();



        return view('book.finalstep');
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
