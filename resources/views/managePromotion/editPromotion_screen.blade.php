@extends('layout')
@section('content')
<section>
<!DOCTYPE html>
<html>
<head>
    <title>Add Promotion</title>
    <style>
        body {
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: left;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input {
            padding: 5px;
            width: 300px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Promotion</h1>

        <form action="/promotion/{{$promotion->id}}/update" method="POST">
        {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="{{$promotion->title}}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" id="description" name="description" value="{{$promotion->description}}" required>
            </div>
            <div class="form-group">
                <label for="time_start">Time Start:</label>
                <input type="text" id="time_start" name="time_start" value="{{$promotion->time_start}}" required>
            </div>
            <div class="form-group">
                <label for="time_end">Time End:</label>
                <input type="text" id="time_end" name="time_end" value="{{$promotion->time_end}}" required>
            </div>

            <button class="button" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
</section>
@endsection 