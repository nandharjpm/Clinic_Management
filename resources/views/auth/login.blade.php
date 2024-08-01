<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="container">
        <div class="login-box">
            <form action="{{ url('/login') }}" method="post">
                @csrf
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                    @error('email')
                        <span class="text-danger" style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                    @error('password')
                        <span class="text-danger" style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="btn">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
