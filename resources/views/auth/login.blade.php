<form method="POST" action="{{ route('auth.login') }}">
    @csrf

    <div>
        <label for="username">Username</label>
        <input id="username" type="text" name="username" required autofocus>
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <button type="submit">Login</button>
    </div>

    @if ($errors->has('login_error'))
        <span>{{ $errors->first('login_error') }}</span>
    @endif
</form>
