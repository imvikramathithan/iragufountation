<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Email</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f7f5fa;
      font-family: 'Roboto', sans-serif;
    }
    .email-header {
      background-color: #969696;
      padding: 20px;
      text-align: center;
    }
    .email-header img {
      width: 150px;
    }
    .email-content {
      background-color: #ffffff;
      margin: 20px auto;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      max-width: 600px;
    }
    .email-content h1 {
      font-size: 24px;
      margin-bottom: 20px;
      color: #333;
    }
    .email-fields {
      margin: 20px auto;
      background-color: #f4f4f4;
      padding: 10px;
      border-radius: 8px;
      max-width: 600px;
    }
    .email-fields table {
      width: 100%;
    }
    .email-fields th, .email-fields td {
      padding: 10px;
      text-align: left;
      font-size: 16px;
    }
    .email-footer {
      text-align: center;
      margin-top: 20px;
    }
    .email-footer a {
      background-color: #969696;
      color: #ffffff;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 4px;
    }
    .email-disclaimer {
      margin-top: 20px;
      text-align: center;
      color: #666;
      font-size: 14px;
    }
    @media (max-width: 576px) {
      .email-content, .email-fields {
        padding: 15px;
      }
      .email-header img {
        width: 120px;
      }
      .email-content h1 {
        font-size: 20px;
      }
      .email-fields th, .email-fields td {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
  <div class="email-header">
    <a href="{{ route('home') }}">
      <img src="{{ asset('assets/img/logo.jpg') }}" alt="Logo">
    </a>
  </div>
  <div class="email-content text-center">
    <h1>{{ $title }}</h1>
  </div>
  <div class="email-fields">
    <table class="table table-striped">
      @foreach ($fields as $field => $value)
      <tr>
        <th>{{ $field }}</th>
        <td>{{ $value }}</td>
      </tr>
      @endforeach
    </table>
  </div>
  <div class="email-footer">
    <a href="https://iragufoundation.org" target="_blank">Visit Our Website</a>
  </div>
  <div class="email-disclaimer">
    <p>This email is from "<a href="https://iragufoundation.org" target="_blank">Iragu Foundation</a>".</p>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
</body>
</html>
