<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Email</title>
 <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
 <style>
/* General styles for email */
body, table, td, a {
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    text-align: center;
}
table, td {
    mso-table-lspace: 0pt;
    mso-table-rspace: 0pt;
}
img {
    -ms-interpolation-mode: bicubic;
    border: 0;
    height: auto;
    line-height: 100%;
    outline: none;
    text-decoration: none;
}
table {
    border-collapse: collapse !important;
}
body {
    margin: 0 !important;
    padding: 0 !important;
    width: 100% !important;
    background-color: #f7f5fa;
}
.email-header {
    background-color: #969696;
    padding: 40px 10px;
    text-align: center;
}
.email-header img {
    width: 100%;
    max-width: 250px;
    height: auto;
}
.email-container {
    background-color: #969696;
    padding: 0 10px;
}
.email-content {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 4px 4px 0 0;
    color: #111111;
    font-family: Helvetica, Arial, sans-serif;
    margin: 0 auto;
    max-width: 600px;
}
.email-content h1 {
    font-size: 32px;
    font-weight: 400;
    margin: 0;
}
.email-fields {
    background-color: #f4f4f4;
    padding: 0 10px;
}
.email-fields table {
    width: 100%;
    margin: 0 auto;
    max-width: 600px;
}
.email-fields th,
.email-fields td {
    padding: 10px 30px;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 18px;
    font-weight: 400;
    line-height: 25px;
}
.email-footer {
    background-color: #ffffff;
    padding: 30px;
    border-top: 1px solid #dddddd;
    text-align: center;
}
.email-footer a {
    font-size: 20px;
    font-family: Helvetica, Arial, sans-serif;
    color: #ffffff;
    text-decoration: none;
    padding: 11px 22px;
    border-radius: 2px;
    border: 1px solid #969696;
    background-color: #969696;
    display: inline-block;
}
.email-disclaimer {
    background-color: #f4f4f4;
    padding: 30px;
    color: #666666;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 14px;
    font-weight: 400;
    line-height: 18px;
    text-align: center;
}
.email-disclaimer a {
    color: #111111;
    font-weight: 700;
}
@media screen and (max-width: 600px) {
    .email-content, .email-fields table {
        width: 100% !important;
    }
    .email-header, .email-container, .email-footer, .email-disclaimer {
        padding: 20px 10px !important;
    }
    .email-content h1 {
        font-size: 24px !important;
    }
    .email-fields th, .email-fields td {
        padding: 10px 20px !important;
        font-size: 16px !important;
    }
    .email-footer a {
        padding: 10px 20px !important;
        font-size: 18px !important;
    }
    .email-disclaimer {
        padding: 20px 10px !important;
    }
}
</style>
</head>
<body>
  <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td class="email-header">
               <a href="{{route('home')}}"><img src="{{asset('assets/img/logo.jpg')}}" alt="logo" class="logo"></a>
            </td>
        </tr>
        <tr>
            <td class="email-container">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td class="email-content">
                            <h1>{{ $title }}</h1>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td class="email-fields">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                @foreach ($fields as $field => $value)
                                <tr>
                                    <th>{{ $field }}</th>
                                    <td>{{ $value }}</td>
                                </tr>
                                @endforeach
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td class="email-disclaimer">
                <p>This email is from "<a href="https://iragufoundation.org" target="_blank">Iragu Foundation</a>".</p>
            </td>
        </tr>
    </table>
</body>
</html>
