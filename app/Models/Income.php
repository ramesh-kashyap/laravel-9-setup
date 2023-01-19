<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;


 protected $fillable = [
    'user_id', 'user_id_fk', 'amt','comm','remarks','ttime','level','tleft','tright','rname','fullname','invest_id','updated_at','created_at','credit_type',
];


    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

        public static function count_level_bonus()
     {

        $data=Income::where('remarks','Level Income')->sum('comm');
         return ($data?$data:0);
    }
    public static function Count_roi_bonus()
    {

       $data=Income::where('remarks','Growth Bonus')->sum('comm');
       return ($data?$data:0);
   }

 public static function countReferal_bonus()
    {

       $data=Income::where('remarks','Royalty Income')->sum('comm');
       return ($data?$data:0);
   }
public static function countCommunity_bonus()
    {

       $data=Income::where('remarks','C.T.O Income')->sum('comm');
       return ($data?$data:0);
   }


public static function CountTotalIncome()
    {

       $data=Income::sum('comm');
       return ($data?$data:0);
   }
}
