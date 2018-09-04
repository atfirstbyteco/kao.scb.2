<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Account;
use App\Models\Sponsor;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index(Request $request)
    {
        // $accounts_balance = Account::select(DB::raw('(SUM(account_adjust)+SUM(account_offset)+SUM(account_balance)) as total_donate'))->where([
        //     'active' => 1
        // ])->pluck('total_donate');
        $totalamount = (float) Redis::get('balance_display');
        if($totalamount < 1){
            $totalamount = (float) Redis::get('balance');
        }
        $sponsor = Sponsor::where([
	        'sponsor_status' => 'active',
        ])->orderBy('sponsor_seq','asc')->get();

        // $sponsor_row = $sponsor->chunk(20);

        // dd($sponsor_row);

        // $totalamount = 0;
        // foreach($accounts_balance as $account_balance){
        //     $totalamount += (float) $account_balance;
        // }
        $totalamount_num = number_format($totalamount,2,'.','');
        $totalamount = number_format($totalamount,2);
        $totalamounts = str_split($totalamount);
        $totalamount_string = "";
        $decimal=false;
        foreach($totalamounts as $s){
            switch($s){
                case ".":
                $decimal=true;
                $totalamount_string .= '<b>'.$s.'</b>';
                break;
                case ",":
                $totalamount_string .= '<b>'.$s.'</b>';
                break;
                default :
                if($decimal){
                    $totalamount_string .= '<b class="show_balance_decimal tl-flipX">'.$s.'</b>';
                }else{
                    $totalamount_string .= '<b class="show_balance tl-flipX">'.$s.'</b>';
                }

                break;
            }
        }
        return view('frontend.home',compact('totalamount','totalamount_string','totalamount_num','sponsor'));
    }
}
