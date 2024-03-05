<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .registration-form {
            background-color: rgba(128, 128, 128, 0.2);
            
            box-shadow: 0 0 20px rgba(128, 128, 128, 0.4), 0 0 40px rgba(128, 128, 128, 0.3), 0 0 80px rgba(128, 128, 128, 0.2);
            border-radius: 15px;
            padding: 20px;
            width: 300px;
        }
        .registration-form h2 {
            color: #fff;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
            
        }
        .form-group label {
            color: #fff;
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input[type="text"],
        .form-group input[type="password"],
        .form-group input[type="email"]{
            background-color: rgba(128, 128, 128, 0.1);
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .form-group select {
            width: 97%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .form-group input[type="submit"] {
            width: 97%;
            padding: 10px;
            font-size: large;
            font-weight: 500;
            border: none;
            border-radius: 5px;
            background-color: #00b36b;
            color: #333333;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-group a {
            display: flex;
            width: 83%;
            height: 15px;
            font-size: large;
            font-weight: 500;
            justify-content: center; /* Center items horizontally */
            align-items: center;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group input[type="submit"]:hover {
            background-color: #59d98e ;
            box-shadow: 0 0 20px rgba(128, 128, 128, 0.4), 0 0 40px rgba(128, 128, 128, 0.3), 0 0 80px rgba(128, 128, 128, 0.2);
        }
        .form-group a:hover {
            background-color: #00ccff;
            box-shadow: 0 0 20px rgba(128, 128, 128, 0.4), 0 0 40px rgba(128, 128, 128, 0.3), 0 0 80px rgba(128, 128, 128, 0.2);
        }
    </style>
</head>
<body>

<div class="registration-form">
    <h2>User Registration</h2>
    <form action="{{ route('storeRegister') }}" method="POST">
        @csrf <!-- CSRF token -->
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="fname">Full Name:</label>
            <input type="text" id="fname" name="name" required>
        </div>
        <div class="form-group">
            <label for="lname">Email:</label>
            <input type="email" id="lname" name="email" required>
        </div>
        <div class="form-group">
            <label for="status">Account Status:</label>
            <select id="status" name="status" required>
                <option value="1">admin</option>
                <option value="0">guest</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" value="Register">
        </div>
        <div class="form-group">
            <a href="{{ route('dashboard') }}">Back</a>
        </div>
    </form>

</div>

</body>
</html>
