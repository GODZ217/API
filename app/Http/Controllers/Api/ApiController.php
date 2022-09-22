<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserLog;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function ambil_data (Request $user){
        try{
            if ($user->start_date || $user->end_date) {
                $start_date = Carbon::parse($user->start_date)->toDateTimeString();
                $end_date = Carbon::parse($user->end_date)->toDateTimeString();
                $get = UserLog::whereBetween('created_at', [$start_date, $end_date])->get(["access_url", "email", "name", "data", "created_at"]);
            } else {
                $get = UserLog::get(["access_url", "email", "name", "data", "created_at"]);
            }
            
            return response()->json([
                'status' => "sukses",
                'data' => $get
            ]);
        }catch(\Exception $e){  
            return [
                'status' => "error"
            ];
        }
    }    

       public function ambil_user(Request $user){

        try{
            $get = UserLog::get(["access_url", "email", "name", "data", "created_at"]);
            return response()->json([
                'status' => "sukses",
                'data' => $get
            ]);
        }catch(\Exception $e){  
            return [
                'status' => "error"
            ];
        }

       }

        //get(["access_url", "email", "name", "data", "created_at"]);
    }


