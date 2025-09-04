<div>
    <h1>Login</h1>    

    <div>
        <form action="/login" method="POST">
            @csrf

            <input type="text" name="email" placeholder="Email" value="{{ old('email') }}" required>

            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</div>