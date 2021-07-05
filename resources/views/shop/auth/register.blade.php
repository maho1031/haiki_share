@extends('layouts.app')
@section('title', '店舗新規登録')
@section('content')

<main class="l-main">
<div class="c-container p-auth__container">
        <div class="p-auth__header">
            <p class="p-auth__title">店舗新規登録</p>
            @include('error')
        </div>
        <div class="p-auth__inner">
            <form method="POST" action="{{ route('shop.register') }}" class="p-auth__form">
                @csrf
                <div class="c-inputField u-mb30">
                    <label for="email" class="p-auth__text u-mb10">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="c-inputField__input @error('email') is-error @enderror" autocomplete="email" autofocus="autofocus" required>
                    @if ($errors->has('email'))
                                    <span class="c-inputField__errorMsg" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                     @endif
                </div>

                <div  class="c-inputField u-mb30">
                    <label for="password" class="p-auth__text u-mb10">パスワード</label>
                    <input type="password" name="password" id="password" class="c-inputField__input @error('password') is-error @enderror" autocomplete="current-password" autofocus="autofocus" required>
                    <span class="c-inputField__detail">半角英数字で8文字以上</span>
                    @if ($errors->has('password'))
                                    <span class="c-inputField__errorMsg" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>

                <div class="c-inputField u-mb30">
                    <label for="password" class="p-auth__text u-mb10">パスワード(確認)</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="c-inputField__input @error('password') is-error @enderror" autocomplete="new-password" autofocus="autofocus" required>
                            @if ($errors->has('email'))
                                    <span class="c-inputField__errorMsg" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                </div>

                <div class="c-inputField u-mb30">
                    <label for="conveni_id" class="p-auth__text u-mb10">コンビニ名</label>
                    <select type="text" name="conveni_id" class="c-inputField__input">
                    @foreach(config('conveni') as $key => $score)
                        <option value="{{ $key }}">{{ $score }}</option>
                    @endforeach
                    </select>
                    @if ($errors->has('conveni_id'))
                                    <span class="c-inputField__errorMsg" role="alert">
                                        <strong>{{ $errors->first('conveni_id') }}</strong>
                                    </span>
                     @endif
                </div>

                <div class="c-inputField u-mb30">
                    <label for="name" class="p-auth__text u-mb10">支店名</label>
                    <input type="text" name="name" id="name" class="c-inputField__input @error('name') is-error @enderror" autocomplete="name" autofocus="autofocus" required placeholder="例：中目黒店">
                    @if ($errors->has('name'))
                                <span class="c-inputField__errorMsg" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                     @endif
                </div>

                <div  class="c-inputField u-mb30">
                    <label for="prefectures" class="p-auth__text u-mb10">都道府県</label>
                    <select name="prefecture_id" class="c-inputField__input">
                        @foreach(config('prefecture') as $key => $score)
                            <option value="{{ $key }}">{{ $score }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('prefecture_id'))
                                <span class="c-inputField__errorMsg" role="alert">
                                    <strong>{{ $errors->first('prefecture_id') }}</strong>
                                </span>
                     @endif
                </div>

                <div type="text" class="c-inputField u-mb30">
                    <label for="address" class="p-auth__text u-mb10">住所</label>
                    <input type="text" name="address" id="address" class="c-inputField__input @error('address') is-error @enderror" autocomplete="new-password" autofocus="autofocus" required placeholder="例：目黒区中目黒0-0-0">
                    @if ($errors->has('address'))
                                <span class="c-inputField__errorMsg" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                     @endif
                </div>

                <div class="p-btnContainer u-mt20">
                    <button type="submit" class="c-btn p-btnContainer__btn">店舗新規登録</button>
                </div>




            </form>

            <div class="p-btnContainer">
                    <a href="{{route('login')}}" class="c-btn p-btnContainer__btn is-seller u-mt30">買い手新規登録はこちら</a>
            </div>
            
        </div>
    </div>
</main>

@endsection