<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <script>
        function updateCheckboxValue() {
            const checkbox = document.getElementById('is_doctor');
            checkbox.value = checkbox.checked ? 1 : 0;
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="{{ asset('img/logpagepic.jpg') }}" alt="Login Page Picture">
        </div>
        <div class="right">
            <div class="login-box">
                <form action="/register" method="post" onsubmit="updateCheckboxValue()">
                    @csrf
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name">
                        @error('name')
                            <span class="text-danger" style="color: red">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" >
                        @error('email')
                            <span class="text-danger" style="color: red">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" >
                        @error('password')
                            <span class="text-danger" style="color: red">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="password_confirmation">Confirm Password:</label>
                        <input type="password" id="password_confirmation" name="password_confirmation">
                        @error('password_confirmation')
                            <span class="text-danger" style="color: red">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="is_doctor">Register as Doctor:</label>
                        <input type="checkbox" id="is_doctor" name="is_doctor" value="0" onclick="updateCheckboxValue()">
                    </div>
                    <div class="btn">
                        <button type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

