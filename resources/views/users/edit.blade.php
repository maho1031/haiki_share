@extends('layouts.app')
@section('title', 'アカウント情報編集')
@section('content')

    <main class="l-main">
    <div class="c-container p-auth__container">
        <div class="p-auth__header">
            <p class="p-auth__title">プロフィール編集</p>
        </div>
        <div class="p-auth__inner">
            @include('error')
            <form method="POST" action="{{ route('users.update') }}" class="p-auth__form">
                @csrf
                <input type="hidden" name="id" value="{{auth()->user()->id}}">

                <div class="c-inputField u-mb30">
                    <label for="name" class="p-auth__text u-mb10">お名前</label>
                    <input type="text" name="name" value="{{ old('name',auth()->user()->name) }}" class="c-inputField__input @error('name') is-error @enderror" autocomplete="name" autofocus="autofocus" required>
                </div>
                
                <div class="c-inputField u-mb30">
                    <label for="email" class="p-auth__text u-mb10">Email</label>
                    <input type="email" name="email" value="{{ old('email',auth()->user()->email) }}" class="c-inputField__input @error('email') is-error @enderror" autocomplete="email" autofocus="autofocus" required>
                </div>

                <div class="c-inputField u-mb30">
                    <label for="password" class="p-auth__text u-mb10">パスワード</label>
                    <input type="password" name="password" value="{{ old('password', auth()->user()->password) }}" class="c-inputField__input @error('password') is-error @enderror" autocomplete="current-password" autofocus="autofocus" required>
                    <span class="c-inputField__detail">半角英数字で8文字以上</span>
                </div>

                <div class="c-inputField u-mb30">
                    <label for="password" class="p-auth__text u-mb10">パスワード(確認)</label>
                    <input type="password" name="password_confirmation" value="{{ old('password', auth()->user()->password) }}" class="c-inputField__input @error('password') is-error @enderror" autocomplete="new-password" autofocus="autofocus" required>
                </div>

                <div class="p-btnContainer">
                    <button type="submit" class="c-btn p-btnContainer__btn">変更する</button>
                </div>
            
            <p class="p-productForm__txt"><a href="{{route('users.show')}}" class="p-productForm__txt-link">マイページへ戻る</a></p>
        </form>
    </div>
 
</main>
@endsection