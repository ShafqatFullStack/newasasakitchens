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
                                <td><a href="https://netmatico.com/"><img src="{{ asset('uploads/'.$logo) }}" width="250px" /></a></td>
                            </tr>

                            <tr>
                                <td style="text-align:left">
                                    <p style="font-size:18px; color:#2e2e2e; line-height:25px; margin:0px;
                                    padding-top:20px;">Hello Admin,</p>
                                    <p style="font-size:16px; color:#2e2e2e; line-height:25px; margin:0px; padding-top:20px;">
                                        You received a new  Email  .Below
                                        is details</p>
                                    <p style="font-size:16px; color:#2e2e2e; line-height:25px; margin:0px; padding-top:20px;">
                                        <span>First Name : <strong>{{ $firstname }}</strong></span>
										<br>
										<span>last Name : <strong>{{ $lastname }}</strong></span>
										<br>
                                        <span>Email : <strong>{{  $email }}</strong></span>
                                        <br>
                                        <span>Phone : <strong>{{ $phone }}</strong></span>
                                         <br>
										<span>City : <strong>{{ $city }}</strong></span>
										
                                        <br>
										<span>State : <strong>{{ $state }}</strong></span>
                                        <br>
										<span>Address : <strong>{{ $address }}</strong></span>
                                        <br>
                                        <span>Postalcode : <strong>{{ $postal }}</strong></span>
										<br>
								<span>Applied Post : <strong>{{ $post }}</strong></span>	
                                    </p>


                                </td>
                            </tr>


                        </table>
                    </td>
                </tr>
            </table>
            {{--<p style="text-align:center; margin:35px auto 0px; font-size:14px; color:#5d5d5d; width:500px; line-height:25px;" >This email was intended for www.webexert.com admininistrator.--}}
            {{--© {{ date('Y') }} www.webexert.com</p>--}}
        </td>
    </tr>

    </tbody>
</table>
</body>
</html>
