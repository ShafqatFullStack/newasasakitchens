
<!doctype html>
<html>
<head>
    <title>Email Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!--[if !mso]><!-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--<![endif]-->

    <style>
        @import 'https://fonts.googleapis.com/css?family=Raleway:300,400,500,700';
        body{font-family: 'Raleway', sans-serif;}
    </style>
</head>

<body>
<table width="100%" cellspacing="50" cellpadding="50" border="0" bgcolor="#E7E7E7" class="wrapper">
    <tbody>
    <tr>
        <td>
            <table bgcolor="#ffffff" cellpadding="0" cellspacing="0" align="center" style="border:1px solid #acacac; border-radius:4px; padding:20px 50px 100px; width:632px;" >
                <tr>
                    <td>
                        <table>
                            <tr style="text-align:center">
                                <td><a href="https://netmatico.com/"><img src="{{ asset('uploads/') }}" width="250px" /></a></td>
                            </tr>

                            <tr>
                                <td style="text-align:left">
                                    <p style="font-size:18px; color:#2e2e2e; line-height:25px; margin:0px;
                                    padding-top:20px;">Hello Admin,</p>
                                    <p style="font-size:16px; color:#2e2e2e; line-height:25px; margin:0px; padding-top:20px;">
                                        You received a new  Email  .Below phone
                                        is details</p>
                                    <p style="font-size:16px; color:#2e2e2e; line-height:25px; margin:0px; padding-top:20px;">
                                        <span>Name : <strong>{{ $name }}</strong></span>
                                        <br>
										 <span>Phone : <strong>{{ $Phone }}</strong></span>
                                        <br>
										
                                        <span>positions : <strong>{{$positions}}</strong></span>
                                        <br>
										
                                        <span>Message : <strong>{{ $msg }}</strong></span>
                                    </p>

									
                                </td>
                            </tr>


                        </table>
                    </td>
                </tr>
            </table>
           
        </td>
    </tr>

    </tbody>
</table>
</body>
</html>


