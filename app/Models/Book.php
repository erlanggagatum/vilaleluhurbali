<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Villa;
use Illuminate\Support\Facades\Auth;

class Book extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'start_date',
        'end_date',
        'status',
        'status_detail',
        'user_id',
        'villa_id',
        'nights',
        'booking_number'
    ];

    /**
     * Get the post that owns the comment.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function villa() {
        return $this->belongsTo(Villa::class);
    }

    public function getUser() {
        return User::findOrFail($this->user_id);
    }
    public function getVilla() {
        // dd();
        return Villa::findOrFail($this->villa_id);
    }

    public static function numberOfBook($startDate, $endDate, $nights, $idVilla, $idUser=null){
        $num_booked = 0;

        // change year format to Y-m-d
        $start_ymd = date('Y-m-d',strtotime($startDate));
        $end_ymd = date('Y-m-d',strtotime($endDate));

        // calculate below and upper boundaries of the book (max 7 days)
        $below = date('Y-m-d', strtotime($start_ymd." - 6 days"));
        $upper = date('Y-m-d', strtotime($end_ymd." + 6 days"));
        
        // finding intersect date
        $num_booked = Book::where('status','!=','Completed')
            ->whereBetween('start_date',[$below,$upper])->get()
            ->where('villa_id', '=', $idVilla)
            ->where('end_date', '>', $start_ymd)
            ->where('start_date', '<', $end_ymd);//->count();

        if($idUser != null){
            $num_booked->where('user_id','==',$idUser);
        }

        return $num_booked->count();


        
        /* Old
        $start_ymd = date('Y-m-d',strtotime($start));
        $end_ymd = date('Y-m-d',strtotime($end));

        // date range validation
        // format batasan untuk tanggal (7 hari dari tanggal booking)
        $below = date('Y-m-d',strtotime($start_ymd. " - 6 days"));
        $upper = date('Y-m-d',strtotime($end_ymd. " + 6 days"));

        // cari tanggal tabrakan
        $num_booked = Book::where('status','!=','Completed')
            ->whereBetween('start_date',[$below,$upper])->get()
            ->where('villa_id', '==', $idvilla)
            ->where('end_date', '>', $start_ymd)
            ->where('start_date', '<', $end_ymd)->count(); */
    }

    public static function generateBookingNumber(){
        $booking_number = 'AAAAAAAAAAAA';
        
        $user = Auth::user();

        // dd($user);

        // first code
        $startbooknum = strtoupper(substr(md5(microtime()),rand(0,26),3));

        // middle code
        $namelength = strlen($user->first_name);
        if(($namelength/2) >= 3){
            $subname = substr($user->first_name, 0, 3);
        }
        else {
            $subname = (substr($user->first_name, 0, strlen($user->first_name)/2));
        }
        
        // end code
        $endbooknum = date('ymd').strtoupper(substr(md5(microtime()),rand(0,26),3));

        // combined booking code
        $booking_number = strtoupper($startbooknum.$subname.$endbooknum);
     
        return $booking_number;
    }
}
