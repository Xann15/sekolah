<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>

    <form method="POST" action="{{ route('store') }}">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            @error('name')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

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

        <div>
            <label for="confirm-password">Confirm Password:</label>
            <input type="password" name="confirm-password" id="confirm-password" required>
            @error('confirm-password')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Register</button>

        <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
    </form>
</body>
</html>
