@extends('layouts.manuals_layout')

@section('content')
<div class="container auth-container">
    <h2>ログイン</h2>
    <p class="login-description">メールアドレスとパスワードで<br>ログインしてください</p>
    <div class="auth-login">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email" class="input-title">メールアドレス</label>
            <input id="email" type="email" class="auth-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            {{-- エラー処理 --}}
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="password" class="input-title">パスワード</label>
            <input id="password" type="password" class="auth-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            {{-- エラー処理 --}}
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            {{--
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    ログイン状態を保持する
                </label>
            </div>
            --}}

            <div class="col-md-8 offset-md-4">
                <button type="submit" class="login-button">ログイン</button>
                {{--
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        パスワードをお忘れですか？
                    </a>
                @endif
                --}}
            </div>
        </form>
    </div>
</div>
@endsection
