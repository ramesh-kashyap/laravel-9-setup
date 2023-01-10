<?php 
use App\Models\GeneralSetting;
use App\Models\User;
use App\Models\Income;
use App\Models\Investment;


function siteName()
{
    $general = GeneralSetting::first();
    return $general->sitename;
}

function currency()
{
    $general = GeneralSetting::first();
    return $general->cur_sym;
}



function add_direct_income($id,$amt)
{

  //$user_id =$this->session->userdata('user_id_session')
$data = User::where('id',$id)->orderBy('id','desc')->first();

$user_id = $data->username;
$fullname=$data->name;

$rname = $data->username;
$user_mid = $data->id;
  

      $cnt = 1;

              
      
        
        
              $Sposnor_id = User::where('id',$user_mid)->orderBy('id','desc')->first();
              $sponsor=$Sposnor_id->sponsor;
              if (!empty($sponsor))
               {
                $Sposnor_status = User::where('id',$sponsor)->orderBy('id','desc')->first();
                $Sposnor_cnt = User::where('sponsor',$sponsor)->where('active_status','Active')->orderBy('id','desc')->count('*');
              $sp_status=$Sposnor_status->active_status;
              }
              else
              {
                $Sposnor_status =array();
                $sp_status="Pending";
                $Sposnor_cnt=0;
           
              }
                 $percent=0;
              
              $amount = $amt/100;
            
             if($sp_status=="Active")
               {  
            
                $pp = $amount*5;
                      
              
              }else
              {
                $pp=0;
              }               
             
              
              $user_mid = @$Sposnor_status->id;
              //echo $user_id;
             //die;
              $idate = date("Y-m-d"); 
              $spid = @$Sposnor_status->id;
              $user_id_fk=$sponsor;
              //print_r($user_id_fk);die;
             // echo $cnt." ".$spid." ".$pp."<br>";
              if($spid>0 && $pp>0){
                 
                 $data = [
                'user_id' => $user_mid,
                'user_id_fk' =>$Sposnor_status->username,
                'amt' => $amt,
                'comm' => $pp,
                'remarks' => 'Direct Bonus',
                'level' => $cnt,
                'rname' => $rname,
                'fullname' => $fullname,
                'ttime' => Date("Y-m-d"),
                
            ];
            $user_data =  Income::firstOrCreate(['remarks' => 'Direct Bonus','rname'=>$rname,'amt'=>$amt],$data);
              
       }

return true;
}



?>