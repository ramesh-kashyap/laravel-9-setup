<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function countAlluser()
    {
       $data=User::count();
       return ($data?$data:0);
   }

   public static function countActiveuser()
   {
      $data=User::where('active_status','Active')->count();
      return ($data?$data:0);
  }
  public static function countPendinguser()
  {
     $data=User::where('active_status','Pending')->count();
     return ($data?$data:0);
 }

 public static function countTodaysuser()
 {

    $data=User::where('jdate',Carbon::now()->format('Y-m-d'))->count();
    return ($data?$data:0);
}

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'sponsor');
    }


    public function sponsor_detail()
    {
        return $this->belongsTo('App\Models\User', 'sponsor');
    }


    public function FundBalance()
    {
    $balance = (Auth::user()->buy_fundAmt->sum('amount'))?Auth::user()->buy_fundAmt->sum('amount'):0 - (Auth::user()->buy_packageAmt());
    return $balance;
    }

    public function buy_fundAmt(){
        return $this->hasMany('App\Models\BuyFund','user_id','id')->where('status','Approved');
    }

    public function buy_packageAmt(){
        $amt= Investment::where('active_from',Auth::user()->username)->where('walletType',1)->sum('amount');
        return $amt;
    }

    public function available_balance()
        {
        $balance = (Auth::user()->users_incomes()) - (Auth::user()->withdraw());
        return $balance;
        }

    public function users_incomes()
    {
        return  Income::where('user_id',Auth::user()->id)->sum('comm');
    }


    public function withdraw()
    {
        return  Withdraw::where('user_id',Auth::user()->id)->where('status','!=','Failed')->sum('amount');
    }


}
