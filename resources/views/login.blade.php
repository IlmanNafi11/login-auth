@extends('components.layout.layout')

@section('title', 'Login')

@section('content')
    <form class="login-form size-1/2 bg-slate-300 flex flex-col p-4 gap-3">
        <h3 class="text-center">Login</h3>
        <x-input-text type="email" name="email" autocomplete="email" label="Email" id="email" className="w-full"></x-input-text>
        <x-input-text type="password" name="password" autocomplete="current-password" label="Password"
            id="password" className="w-full"></x-input-text>
        <button type="button" id="btn-login"
            class="btn w-auto h-auto p-2 bg-blue-400 text-white rounded-md hover:bg-slate-500">Login</button>
    </form>
    <script>
        document.getElementById('btn-login').addEventListener('click', (e) => {
            e.preventDefault;
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;
            window.axios.post('/login', {
                    email: email,
                    password: password,
                })
                .then(response => {
                    console.log(response);
                    let uri = response.data.redirect;
                    window.location.href = uri;
                })
                .catch(error => {
                    console.log(error)
                })
        });
    </script>
@endsection
