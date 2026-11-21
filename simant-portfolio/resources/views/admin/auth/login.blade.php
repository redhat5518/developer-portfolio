<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Simant Kumar</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>
    <main class="admin-login">
        <div class="admin-login-card">
            <h1>Admin Login</h1>
            <p>Sign in to manage your blog.</p>

            @if ($errors->any())
                <div class="admin-error">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf

                <label for="email">Email address</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="username"
                >

                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    autocomplete="current-password"
                >

                <button type="submit">Sign in</button>
            </form>
        </div>
    </main>
</body>
</html>
