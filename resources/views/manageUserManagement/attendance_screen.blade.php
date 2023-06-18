@extends('layout')
@section('content')
<section>
<!DOCTYPE html>
<html>
<head>
    <title>Attendance List</title>
    <style>
        body {
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Attendance List</h1>
        
        <table>
            <tr>
                <th>Date</th>
                <th>Image</th>
            </tr>
            @foreach($attendance as $attendances)
            <tr>
                <td><link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
                <script type="text/javascript" src="{{ mix('js/app.js') }}"></script></td>
                <td>{{$attendances['image']}}<img  alt="Attendance Image" width="100"></td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
</section>
@endsection 