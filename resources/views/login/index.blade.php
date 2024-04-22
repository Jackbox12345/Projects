<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #000000;
            background-image: url('{{asset('pictures/a.jpg')}}');
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: rgba(51, 51, 51, 0.1); 
            color: #1a1a1a;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
            padding: 20px;
            width: 90%; /* Adjust width as needed */
            max-width: 400px; /* Set maximum width */
            transition: all 0.3s ease;
        }
        .login-container:hover{
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
            transform: translateY(-5px)
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: flex;
            font-weight: bold;
            margin-bottom: 5px;
            justify-content: center;
            align-self: center;
        }
        .form-group input[type="text"],
        .form-group input[type="password"] {
            display: flex;
            justify-content: center;
            align-self: center;
            width: 95%;
            padding: 10px;
            font-size: 18px;
            color: #1a1a1a;
            background: transparent;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            border: none; /* Remove the border */
            border-bottom: 1px solid #ccc; /* Add a bottom border */
            border-radius:5px; /* Remove any border-radius */
            transition: backgorund-color,box-shadow 0.3s ease;
}

        .form-group input[type="submit"] {
            width: 95%;
            padding: 10px;
            margin-left: 10px;
            font-size: 24px;
            border: none;
            border-radius: 25px;
            background-color: rgba(51, 51, 51, 0.3);
            
            
            cursor: pointer;
            transition: background-color, box-shadow 0.3s ease;
        }
        .form-group input[type="submit"]:hover {
            background-color: #a6a6a6;
            box-shadow: 0 0 10px rgba(128, 128, 128, 0.8);
        }
        .form-group input[type="text"]:hover{
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
         
        }
        .form-group input[type="password"]:hover{
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
            
        }

        .form-group button{
            width: 95%;
            border: none;
            cursor: pointer;
            margin-left: 10px;
            font-size: 24px;
            height: 47px;
            background-color: rgba(51, 51, 51, 0.3);
          
           
            border-radius: 25px;
            transition: background-color,box-shadow 0.3s ease;
        }
        .form-group button:hover{
            background-color: #a6a6a6;
            box-shadow: 0 0 10px rgba(128, 128, 128, 0.8);
      
        }






        
    </style>
</head>
<body>
<div class="login-container">
    <h2>Login</h2>
    <form action="{{route('logins')}}" method="POST">
 
        @csrf
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
        </div>
 
        <div class="form-group">
            <input type="submit" value="Login">
        </div>

    </form>
   
    <div class="form-group">

    <button onclick="window.location.href = '{{ route('portfolio') }}'">Portfolio</button>


    </div>

    @if (session('message'))
    <div class="alert alert-success" id="successMessage">
        {{ session('message') }}
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('successMessage').style.display = 'none';
        }, 2000); // Disappear after 2 seconds (2000 milliseconds)
    </script>
@endif
</div>


</body>
<script>
const passwordInput = document.getElementById('password');
const togglePassword = document.getElementById('togglePassword');

togglePassword.addEventListener('click', function() {
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        
    } else {
        passwordInput.type = 'password';
      
    }
});

</script>
</html>
