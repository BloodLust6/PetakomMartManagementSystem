@extends('layout')
@section('content')
<section>
<!DOCTYPE html>
<html>
<head>
    <title>Pop-up with Buttons</title>
    <style>
        body {
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .popup {
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
        }

        .popup-buttons {
            margin-top: 20px;
        }

        .popup-buttons button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pop-up with Buttons</h1>
        <button onclick="showPopup()">Open Pop-up</button>
    </div>

    <div class="popup-overlay" id="popupOverlay">
        <div class="popup">
            <h2>Pop-up Content</h2>
            <p>This is the content of the pop-up.</p>

            <div class="popup-buttons">
                <button onclick="handleAdd()">Add</button>
                <button onclick="handleEdit()">Edit</button>
                <button onclick="handleDelete()">Delete</button>
            </div>
        </div>
    </div>

    <script>
        function showPopup() {
            var popupOverlay = document.getElementById("popupOverlay");
            popupOverlay.style.display = "flex";
        }

        function handleAdd() {
            console.log("Add button clicked");
            // Add your logic here for the add action
            closePopup();
        }

        function handleEdit() {
            console.log("Edit button clicked");
            // Add your logic here for the edit action
            closePopup();
        }

        function handleDelete() {
            console.log("Delete button clicked");
            // Add your logic here for the delete action
            closePopup();
        }

        function closePopup() {
            var popupOverlay = document.getElementById("popupOverlay");
            popupOverlay.style.display = "none";
        }
    </script>
</body>
</html>
</section>
@endsection 