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
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            background: #f1f1f1;
        }


        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }


        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }


        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }


        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }


        img {
            -ms-interpolation-mode:bicubic;
        }


        a {
            text-decoration: none;
        }


        *[x-apple-data-detectors],  /* iOS */
        .unstyle-auto-detected-links *,


        img.g-img + div {
            display: none !important;
        }




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
    <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
        &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    </div>
    <div style="max-width: 600px; margin: 0 auto;" class="email-container">

        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
            <tr>
                <td valign="top" class="bg_white" style="padding: 1em 2.5em 0 2.5em;">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td class="logo" style="text-align: center;">
                                <img src="images/logo.png" alt="" style="width: 300px; max-width: 600px; height: auto; margin: auto; display: block;">
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
                                <div class="text" style="padding: 0 2.5em;">
                                    <p>Dear <?=$FromData['first_name']?>,</p>
                                    <p>Thank-you very much for your interest in the New Philanthropy registered Tax Shelter program (TS095463). Justice Trading Ltd. is proud to be the chosen vendor for this exciting gifting arrangement in its 5th year of operation. As requested, we are referring herein an Online Donor Application Package with a pre-populated donation amount of $<?=$FromData['number_of_dgc']?>, based on the information you have provided. Since we are presently facing extreme time constraints, we need you to process this Application immediately by reviewing and signing online. Once you submit the agreement, you will be followed to the payment instructions page which you will need to process the payments immediately and report back to the system the payment method you used. Finally, after completing all steps, you will be receiving an email with your credentials to the Client Portal which will allow you to to track and trace your order in real time, view and download all supporting and executed documents related to your donation.</p>
                                    <p>Thank-you once again for your interest in acquiring Justice Trading DGCs for donation through the New Philanthropy gifting arrangement program.</p>
                                    <p>To review the agreement, please click the button below:</p>
                                    <p style="text-align: center;" class="buttonSub"><a href="https://newphilanthropy.ca/sign_contract/<?=$FromData['url_code']?>" target="_blank" class="redirectBtn">Review My Application</a></p>
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