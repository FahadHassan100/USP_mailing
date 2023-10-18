<?php 

//var_dump($FromData);

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
                                <img src="https://newphilanthropy.ca/Client_Portal/images/login-logo.png">
                            </td>
                        </tr>
                        <tr>
                            <td class="logo" style="text-align: center;">
                                <h1>Payment Completed</h1>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td valign="middle" class="hero bg_white" style="padding: 2em 0 4em 0;">
                    <table>
                        <tr>
                            <td>
                                <div class="text" style="padding: 0 2.5em; text-align: center;">
                                    
                                    <div style="text-align: left; width: 350px;margin: 0 auto" >
                                        <p><b>Client name:&nbsp;</b><?php echo $FromData['Client_name'] ?></p>
                                        <p><b>Seller name:&nbsp;</b><?php echo $FromData['Seller_name'] ?></p>
                                        <p><b>DGC amount:&nbsp;</b><?php echo $FromData['DGC'] ?></p>
                                        <p><b>Charity amount:&nbsp;</b><?php echo $FromData['Charity'] ?></p>
                                        <p><b>PPI amount:&nbsp;</b><?php echo $FromData['PPI'] ?></p>
                                        <p><b>Gift Voucher:&nbsp;</b><?php echo $FromData['Gift'] ?></p>
                                        <p><b>Final PPI Amount:&nbsp;</b><?php echo $FromData['FinalPPI'] ?></p>
                                        <p><b>PGC amount:&nbsp;</b><?php echo $FromData['PGC'] ?></p>
                                        <p><b>Total Amount:&nbsp;</b><?php echo $FromData['TotalAmount'] ?></p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

    </div>
</center>
</body>
</html>