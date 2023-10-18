<?php

namespace App\Http\Controllers;

use App\Mail\SignupVerification;
use App\Mail\USPDebtProfile;
use Illuminate\Mail\Mailable;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use App\Models\USP_Program;

// use Illuminate\Support\Facades\Http;
// use Illuminate\Http\Request;
// use Illuminate\Http\Response;


class ApiController extends Controller
{
    public function testEmail(){

        // echo "checking mail";
        // exit();

        
        $check = "";

        
        $result=Mail::to("dev03228109702@gmail.com")->send(new SignupVerification($check));
        
        echo "Email send";


    }

    

}
