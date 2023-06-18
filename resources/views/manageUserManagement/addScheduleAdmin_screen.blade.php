@extends('layout')
@section('content')
<section>
<!DOCTYPE html>
<html>
<head>
    <title>User Information</title>
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

        .popup-form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .popup-form input[type="text"] {
            padding: 5px;
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
        <h1>User Management</h1>

        <button onclick="showPopup()">Add User</button>

        <!-- Pop-up -->
        <div class="popup-overlay" id="popupOverlay">
            <div class="popup">
                <h2>Add User</h2>
                <form class="popup-form" onsubmit="submitForm(event)">
                    <input type="text" id="nameInput" placeholder="Name" required>
                    <input type="text" id="studentIdInput" placeholder="Student ID" required>
                    <div class="popup-buttons">
                        <button type="submit">Submit</button>
                        <button type="button" onclick="closePopup()">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function showPopup() {
            document.getElementById('popupOverlay').style.display = 'flex';
        }

        function closePopup() {
            document.getElementById('popupOverlay').style.display = 'none';
        }

        function submitForm(event) {
            event.preventDefault();

            // Get the input values
            var name = document.getElementById('nameInput').value;
            var studentId = document.getElementById('studentIdInput').value;

            // You can perform further processing with the name and studentId
            console.log('Name:', name);
            console.log('Student ID:', studentId);

            // Close the pop-up
            closePopup();
        }
    </script>
</body>
</html>
</section>
@endsection 