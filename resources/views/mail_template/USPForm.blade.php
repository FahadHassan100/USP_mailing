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

        
        .debtProfileSection tr th,.debtProfileSection tr td{
            padding:0 50px 0 50px;
        }
        .debtProfileSection tr th:first-child,.debtProfileSection tr td:first-child{
            padding:0 10px 0 10px;
        }
    </style>


</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
<center style="width: 100%; background-color: #f1f1f1;">
    
    <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff;" class="email-container">

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
                                <h1>USP Form - Submit</h1>
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
                                    {{-- <h2>Payment Confirm</h2> --}}

                                    {{-- <div style="text-align: left; width: 350px;margin: 0 auto" >
                                        <p><b>First Name:&nbsp;</b><?php //echo $FromData['FName'] ?></p>
                                        <p><b>Last name:&nbsp;</b><?php //echo $FromData['LName'] ?></p>
                                        <p><b>Email:&nbsp;</b><?php //echo $FromData['Email'] ?></p>
                                        <p><b>Reason for Default:&nbsp;</b><?php //echo $FromData['RFD'] ?></p>
                                        <p><b>Comments:&nbsp;</b><?php //echo $FromData['comments'] ?></p>
                                    </div> --}}
                                    <div style="text-align: left; width: 350px;margin: 0 auto" >
                                        <p><b>First Name:&nbsp;</b><?php echo $FromData['first_name'] ?></p>
                                        <p><b>Last name:&nbsp;</b><?php echo $FromData['last_name'] ?></p>
                                        <p><b>Email:&nbsp;</b><?php echo $FromData['email_address'] ?></p>
                                        <p><b>Phone:&nbsp;</b><?php echo $FromData['phone'] ?></p>
                                        <p><b>Province:&nbsp;</b><?php echo $FromData['province'] ?></p>
                                        <p><b>City:&nbsp;</b><?php echo $FromData['city'] ?></p>
                                        <p><b>Address:&nbsp;</b><?php echo $FromData['address'] ?></p>
                                        <p><b>Tax in dispute:&nbsp;</b><?php echo $FromData['tax_dispute'] ?></p>
                                        <p><b>Notes:&nbsp;</b><?php echo $FromData['notes'] ?></p>
                                        <p><b>Source:&nbsp;</b><?php echo $FromData['source'] ?></p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <table class="debtProfileSection">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Program</th>
                            <th>Year</th>
                            <th>Loan Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><?php echo $FromData['program1'] ?></td>
                            <td><?php echo $FromData['year1'] ?></td>
                            <td><?php echo $FromData['amount1'] ?></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><?php echo $FromData['program2'] ?></td>
                            <td><?php echo $FromData['year2'] ?></td>
                            <td><?php echo $FromData['amount2'] ?></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><?php echo $FromData['program3'] ?></td>
                            <td><?php echo $FromData['year3'] ?></td>
                            <td><?php echo $FromData['amount3'] ?></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><?php echo $FromData['program4'] ?></td>
                            <td><?php echo $FromData['year4'] ?></td>
                            <td><?php echo $FromData['amount4'] ?></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><?php echo $FromData['program5'] ?></td>
                            <td><?php echo $FromData['year5'] ?></td>
                            <td><?php echo $FromData['amount5'] ?></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><?php echo $FromData['program6'] ?></td>
                            <td><?php echo $FromData['year6'] ?></td>
                            <td><?php echo $FromData['amount6'] ?></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><?php echo $FromData['program7'] ?></td>
                            <td><?php echo $FromData['year7'] ?></td>
                            <td><?php echo $FromData['amount7'] ?></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><?php echo $FromData['program8'] ?></td>
                            <td><?php echo $FromData['year8'] ?></td>
                            <td><?php echo $FromData['amount8'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </tr>
        </table>
        <br>
    </div>
</center>
</body>
</html>