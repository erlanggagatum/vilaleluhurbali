<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Models\User;
use App\Models\Villa;
use Carbon\Carbon;

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
        // $dt = $this->sendEmail();
        // dd($dt);

        // return view('email.invoice', $dt);
        // dd(Book::generateBookingNumber());
        // return view('book.index', ['name' => 'Samantha']);
        //
        // dd($this->sendEmail());

        // return view('email.invoice',$this->sendInvoice());

        $view = 'book.index';
        $villa_data = array();

        // fixed number of villa
        if(in_array($id, [1,2,3,4])){
            $villa_data = ['name' => `Villa $id`, 'idvilla' => $id];
            $selected_villa_id = $id;
        }
        else {
            $villa_data = ['name' => `Villa 1`, 'idvilla' => 1];
            $selected_villa_id = $id;
        }

        $villa = Villa::findOrFail($selected_villa_id);

        $booked_date = Book::getBookedDate($selected_villa_id);

        $villa_data['booked_date'] = $booked_date;
        $villa_data['price'] = $villa->price;
        // dd();    

        // dd($booked_date);

        // dd($villa_data);
        // dd($villa_data);
        // dd($villa_data);
        return view($view, $villa_data);
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
            'idvilla'=>'required|in:1,2,3,4',
        ]);

        $start = $request->checkinDate;
        $nights = $request->selectNight;
        $end = $request->checkoutDate;
        $idvilla = $request->idvilla;
        


        $num_booked = Book::numberOfBook($start, $end, $nights, $idvilla);
        if($num_booked != 0){
            return redirect("/book/".$idvilla)->with(
                'warning', 'Cannot book Villa '.$idvilla.' from '.$start.' to '.$end.'. The date already booked.'
            );
        }

        $price = 2000000;
        if($villa = Villa::findOrFail($request->idvilla)){
            $price = $villa->price;
        }

        return view('book.secondstep',[
            // 'name' => 'Villa '.$id,
            'start' => $start,
            'end' => $end,
            'nights' => $nights,
            'idvilla' => $idvilla,
            'price' => $price
        ]);
    }

    public function finalStep(Request $request){
        if(!Auth::user()){
            return redirect('/login');
        }

        // $email_status = $this->sendInvoice();
        // // check
        // return view('email.invoice',$email_status);
        
        $validate = $request->validate([
            'checkinDate'=>'required|date',
            'selectNight'=>'required',
            'checkoutDate'=>'required|date',
            'idvilla'=>'required|in:1,2,3,4',
            'g-recaptcha-response' => 'recaptcha|required',
        ]);

        $start = $request->checkinDate;
        $end = $request->checkoutDate;
        $nights = explode(' ',$request->selectNight)[0];
        $idvilla = $request->idvilla;
        $iduser = Auth::user()->id;
        // dd($iduser);

        // check weather the date is already booked
        if(Book::numberOfBook($start, $end, $nights, $idvilla) > 0){
            if (Book::numberOfBook($start, $end, $nights, $idvilla, $iduser) > 0){
                $last_book = Book::where('user_id','=', $iduser)//->get();
                    ->orderBy('created_at','desc')->limit(1)->get();
                // dd($last_book[0]);
                return view('book.finalstep', [
                    'booking_number' => $last_book[0]->booking_number,
                    'idvilla' => $idvilla
                ]);
            }
            else {
                // dd('sudah di book org lain');
                return redirect(`/book/$idvilla`)->with(
                    'warning', 'Cannot book Villa '.$idvilla.' from '.$start.' to '.$end.'. The date already booked by other person.'
                );
            }
        }

        
        // preparing variable
        $start = date('Y-m-d',strtotime($request->checkinDate));
        $nights = explode(' ',$request->selectNight)[0];
        $end = date('Y-m-d',strtotime($request->checkoutDate));
        $idvilla = $request->idvilla;
        $iduser = Auth::user()->id;
        // generate booking id
        $booking_number = Book::generateBookingNumber();
        
        // input data
        $book = new Book();
        $book->booking_number = $booking_number;
        $book->start_date = $start;
        $book->end_date = $end;
        $book->status = "Sent to admin";
        $book->status_detail = "Your order is being confirmed by admin. Please wait until admin contacted your number for confirmation";
        $book->user_id = $iduser;
        $book->villa_id = $idvilla;
        $book->nights = $nights;

        if(!$book->save()){
            return redirect(`/book/$idvilla`)->with(
                'warning', 'Cannot book Villa '.$idvilla.' from '.$start.' to '.$end.'. There is an error while processing your book.'
            );
        }

        $email_status = $this->sendInvoice($book->booking_number);

        return view('book.finalstep', [
            'booking_number' => $book->booking_number,
            'idvilla' => $idvilla,
            'email_status' => $email_status == true ? 'Invoice has been sent to your email!' : 'System failed to sent an Invoice email to you, please contact admin for future assistance'
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
