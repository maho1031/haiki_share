@include('layouts.head')
@extends('layouts.app')
@section('title', 'ログイン')
@section('content')
<main class="l-main">
    <div class="c-container p-auth__container">
        <div class="p-auth__header">
            <p class="p-auth__title">ログイン</p>
        </div>
        <div class="p-auth__inner">
            <form action="POST" class="p-auth__form">
                @csrf
                <div type="text" class="c-inputField u-mb30">
                    <label for="email" class="p-auth__text u-mb10">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="c-inputField__input @error('email') is-error @enderror" autocomplete="email" autofocus="autofocus" required>
                    <!-- @error('email')
                    <span class="p-form__errorMsg" role="alert">
                       
                    </span>
                    @enderror -->
                </div>

                <div type="text" class="c-inputField u-mb30">
                    <label for="password" class="p-auth__text u-mb10">パスワード</label>
                    <input type="password" name="password" id="password" class="c-inputField__input @error('password') is-error @enderror" autocomplete="current-password" autofocus="autofocus" required>
                    <span class="c-inputField__detail">半角英数字で8文字以上</span>
                    <!-- @error('password')
                    <span class="p-form__errorMsg" role="alert">
                        
                    </span>
                    @enderror -->
                </div>

                <div class="p-btnContainer">
                    <button type="submit" class="c-btn p-btnContainer__btn">ログイン</button>
                </div>

                @if (Route::has('password.request'))
                <p class="p-auth__passReset"><a href="{{ route('password.request') }}">パスワードをお忘れですか？</a></p>
                @endif

            </form>

            <div class="p-btnContainer">
                    <a href="" class="c-btn p-btnContainer__btn is-seller u-mt30">出品者ログインはこちら</a>
            </div>
            
        </div>
    </div>
</main>
@endsection
