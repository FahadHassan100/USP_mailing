<?php

    //echo $Client_Details[0]->Number_DGC;
    // $Client_Name = $Client_Details[0]->getClientDetails->First_Name.' '.$Client_Details[0]->getClientDetails->Last_Name;
    // $Affilite_name = $Client_Details[0]->getAffiliates->First_Name.' '.$Client_Details[0]->getAffiliates->Last_Name;
    // $DGC_amount = "$".number_format($Client_Details[0]->Number_DGC);
    // $PPI_amount = "$".number_format($Client_Details[0]->Initial_Deposit);
    // $Gift_Voucher = "$".number_format($Client_Details[0]->Gift_Voucher);
    // $finalPPIAmount = "";
    // $Charity_amount = "$".number_format($Client_Details[0]->Cash_Donation_Amount);
    // $PGC_amount = "$".number_format($Client_Details[0]->Membership_PGC_Amount);
    // $Total_amount = "$".number_format($Client_Details[0]->Order_Price);

    
    // if($Client_Details[0]->Gift_Voucher > $Client_Details[0]->Initial_Deposit){
    //     $finalPPIAmount = 0;
    // }else{
    //     $finalPPIAmount = "$".number_format($Client_Details[0]->Initial_Deposit-$Client_Details[0]->Gift_Voucher);
    // }
    
    

?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">


    <style>


        html,
        body {margin: 0 auto !important; padding: 0 !important;height: 100% !important;width: 100% !important;background: #f1f1f1;
        }
        * {-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;}
        div[style*="margin: 16px 0"] {margin: 0 !important;}
        table,
        td {mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;}
        table {border-spacing: 0 !important;border-collapse: collapse !important;table-layout: fixed !important;margin: 0 auto !important;}
        img {-ms-interpolation-mode:bicubic;}
        a {text-decoration: none;}
        img.g-img + div {display: none !important;}
        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u ~ div .email-container {
                min-width: 320px !important;
            }
        }
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u ~ div .email-container {
                min-width: 375px !important;
            }
        }
        @media only screen and (min-device-width: 414px) {
            u ~ div .email-container {
                min-width: 414px !important;
            }
        }

    </style>

    <style>

        .bg_white{
            background: #ffffff;
        }

        h1,h2,h3,h4,h5,h6{
            font-family: "Lato", sans-serif;
            color: #000000;
            margin-top: 0;
            font-weight: 400;
        }

        body{
            font-family: "Lato", sans-serif;
            font-weight: 400;
            font-size: 15px;
            line-height: 1.8;
            color: rgba(0,0,0,.4);
        }

        a{
            color: #30e3ca;
        }

        table{
        }


        .hero .text h2{
            color: #000;
            font-size: 40px;
            margin-bottom: 0;
            font-weight: 400;
            line-height: 1.4;
        }
        .hero .text h3{
            font-size: 24px;
            font-weight: 300;
        }


        .redirectBtn{border-radius: 5px;
            background: #1a9ed8;
            color: #ffffff !important;
            padding: 16px;}

        .buttonSub{
            margin-top: 55px;
        }

        @media screen and (max-width: 500px) {
        }
    </style>


</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
<center style="width: 100%; background-color: #f1f1f1;">
    
    <div style="max-width: 600px; margin: 0 auto;" class="email-container">

        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
            <tr>
                <td valign="top" class="bg_white" style="padding: 1em 2.5em 0 2.5em;">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td class="logo" style="text-align: center;">
                                <img src="{{ asset('images/logo.png   ') }}" alt="" style="width: 300px; max-width: 600px; height: auto; margin: auto; display: block;">
                            </td>
                        </tr>
                        <tr>
                            <td class="logo" style="text-align: center;">
                                <h1><a href="#">Email Verification</a></h1>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><p>Kindly <a href="https://newphilanthropy.ca/email_verification.php?v_code=<?=$verification_code?>" target="_blank">CLICK HERE</a> to verify your email</p></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

    </div>
</center>
</body>
</html>