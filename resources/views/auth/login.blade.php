<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('authenticate') }}">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            @error('email')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Login</button>

        <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
    </form>
</body>
</html>
