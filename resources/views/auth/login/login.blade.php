<main class="form-signin">
    <h1>Login Page</h1>
    <form action="#">
        @csrf
        <div class="form-input">
            <input type="text" name="username" id="" placeholder="Username">
            @error('username')
                {{ $message }}
            @enderror
        </div>

        <div class="form-input">
            <input type="password" name="password" id="" placeholder="Password">
            @error('password')
                {{ $message }}
            @enderror
        </div>

        <button type="submit" class="btn-primary">Login</button>
    </form>
    <small>Not Registered? <a href="/register">Registered Now!</a></small>
</main>