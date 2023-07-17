<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Models\Villa;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendInvoice($booking_number = 'EE1GA220106BCA'){
        $user = Auth::user();
        $book = Book::where('booking_number','=',$booking_number)->get()[0];
        // dd($book);

        $to_name = $user->first_name." ".$user->last_name;
        $to_email = $user->email;

        $to_admin_name = 'Made Bayu';
        $to_admin_email = 'bayuperbakin003@gmail.com';

        $villa_price = $book->calculateGrandTotal();
        // dd($book->villa->price, $book->nights, $villa_price);
        $data = array(
            'customer_name' => $user->first_name." ".$user->last_name,
            'customer_email' => $to_email,
            'customer_mobile' => $user->phone_number,
            'booking_number' => $booking_number,
            'num_nights' => $book->nights,
            'villa_name' => $book->villa->name,
            'villa_location' => $book->villa->location != null ? $book->villa->location : 'not available',
            'villa_price' => (int) $book->villa->price,
            'villa_grand_total' => $villa_price,
            'start_date' => $book->start_date,
            'end_date' => $book->end_date,
            'created_at' => $book->created_at->format('M d, Y')." | ".$book->created_at->format('H:i:s'),
            // 'user' =>
        );


        // return view('email.invoice', $data);
        // dd($data);

        // return $data;

        // send to customer
        $send = Mail::send('email.invoice', $data, function($message)
            use($to_name, $to_email, $to_admin_name, $to_admin_email){
            $message->to($to_email, $to_name)
                ->subject('Invoice Test Mail');
                // untuk title
                //->from('ergatumwork@gmail.com','Gatum Erlangga Test Mail Laravel');
        });


        // send to admin
        $data['admin'] = true;
        $data['booking_id'] = $book->id;

        $send = Mail::send('email.invoice', $data, function($message)
            use($to_name, $to_admin_name, $to_admin_email){
                $message->to($to_admin_email, $to_admin_name)
                ->subject('New Book Detected from ['.$to_name.']! Please take an action!');

        });

        // dd(Mail::failures());
        // dd($send);
        if(Mail::failures()){
            return false;
        }
        return true;

    }
}
