<?php

namespace App\Http\Controllers;

use App\Mail\SignupVerification;
use App\Mail\USPDebtProfile;
use App\Mail\ClassDefenceForm;
use App\Mail\USPForm;
use App\Mail\SignContract;
use App\Mail\SignContractNotification;
use App\Mail\NewClientSignupNotification;
use App\Mail\PaymentsComplete;
use App\Mail\ForgetPassword;
use App\Mail\PaymentsCompleteThankYou;

use App\Mail\USPSignedMail;



use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use App\Models\USP_Program;

// use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
// use Illuminate\Http\Response;


class ApiController extends Controller
{


    public function testApp(){

        echo "Url is working";

    }


    public function sendMailSys(Request $request){

        return var_dump($request['FName']);

    }







}
