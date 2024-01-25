<main class="form-signin">
    <h1>Register Page</h1>
    <form action="/register-act" method="POST">
        @csrf
        <div class="form-input">
            <input type="text" name="name" id="" placeholder="Name" autofocus>
            @error('Name')
                {{ $message }}
            @enderror
        </div>

        <div class="form-input">
            <input type="text" name="username" id="" placeholder="Username">
            @error('username')
                {{ $message }}
            @enderror
        </div>

        <div class="form-input">
            <input type="email" name="email" id="" placeholder="example@gmail.com">
            @error('email')
                {{ $message }}
            @enderror
        </div>
        
        <div class="form-input">
            <select name="prodi" id="">
                <option disabled selected>--Pilih Prodi--</option>
                @foreach ($prodi as $item)
                    <option value="{{ $item->name_prodi }}">{{ $item->name_prodi }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-input">
            <select name="dept" id="">
                <option disabled selected>--Pilih Departemen--</option>
                @foreach ($dept as $item)
                    <option value="{{ $item->name_dept }}">{{ $item->name_dept }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-input">
            <input type="password" name="password" id="" placeholder="Password">
            @error('password')
                {{ $message }}
            @enderror
        </div>

        <div class="form-input">
            <input type="text" name="no_hp" id="" placeholder="Nomor Telepon">
            @error('no_hp')
                {{ $message }}
            @enderror
        </div>

        <button type="submit" class="btn-primary">Register</button>
    </form>
    <small>Already Registered? <a href="/login">Login</a></small>
</main>