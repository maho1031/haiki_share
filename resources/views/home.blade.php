@extends('layouts.app')
@section('title', 'Haiki Share | コンビニ廃棄購入サービス')
@section('description', 'Haiki Shareは、コンビニで廃棄された商品をリーズナブルなお値段で購入できるサイトです。')
@section('keywords', 'コンビニ,廃棄商品,お買い得')



@section('content')
<main class="l-main">

        <seciton class="p-top">
            <div class="p-top__left">
                <div class="p-top__leftInner">
                    <p class="p-top__title">おトクにフードシェアリングしよう</p>
                    <p class="p-top__sentence">Haiki Shareはコンビニの廃棄食品をおトクに購入予約できるサービスです。</p>
                    <p class="p-top__sentence"></p>
                </div>
            </div>

            <div class="p-top__right">
                <div class="p-top__rightInner">
                    <div class="p-top__rightImage">
                        <img src="{{asset('img/top2.png')}}" alt="">
                    </div>
                    <div class="p-top__rightImage">
                    <img src="{{asset('img/top.png')}}" alt="">
                    </div>
                </div>
            </div>
        </seciton>

        <!-- about -->
        <section class="p-about c-container" id="about">
            <div class="p-aboutContainer">
                <div class="p-about__header">
                    <p class="c-title">Haiki Shareとは？</p>
                </div>
                <div class="p-about__inner">
                    <p class="p-about__title">Haiki Shareはコンビニエンスストアの廃棄食品をおトクな金額で購入予約できるサービスです。</p>
                    <p class="p-about__sentence">
                        コンビニエンスストアでは毎日大量の商品が廃棄されています。「食品ロス/フードロス」は日本にとっても大きな問題であり、
                        私たち1人1人が考えていかなければなりません。
                        Haiki Shareでは品質に問題はないのに廃棄されてしまう食品をおトクな金額で販売し、利用者の皆様、そして出品者の皆様を結ぶ
                        フードシェアリングプラットホームを目指しています。
                    </p>
                    <p class="p-about__sentence"></p>
                    <p class="p-about__sentence"></p>
                </div>
            </div>
        </section>

        <!-- flow -->
        <section class="c-container p-flow">
            <div class="p-flowContainer">
                <div class="p-flow__header">
                    <p class="c-title">ご利用のフロー</p>
                </div>
                <div class="p-flow__cardList">
                    <div class="p-flow__cardItem">
                        <div class="p-flow__cardInner">
                            <div class="p-flow__cardTriangle">
                                <div class="p-flow__cardNumber">
                                    01
                                </div>
                            </div>
                            <div class="p-flow__cardBody">
                                <div class="p-flow__cardImg">
                                    <img src="{{asset('img/flow1.png')}}" alt="">
                                </div>
                                <div class="p-flow__cardDescription">
                                    当サイトにて商品を検索&購入予約ボタンをクリック
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="p-flow__cardItem">
                        <div class="p-flow__cardInner">
                            <div class="p-flow__cardTriangle">
                                <div class="p-flow__cardNumber">
                                    02
                                </div>
                            </div>
                            <div class="p-flow__cardBody">
                                <div class="p-flow__cardImg">
                                    <img src="{{asset('img/flow2.png')}}" alt="">
                                </div>
                                <div class="p-flow__cardDescription">
                                    購入した商品のある店舗へGO!!
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-flow__cardItem">
                        <div class="p-flow__cardInner">
                            <div class="p-flow__cardTriangle">
                                <div class="p-flow__cardNumber">
                                    03
                                </div>
                            </div>
                            <div class="p-flow__cardBody">
                                <div class="p-flow__cardImg">
                                    <img src="{{asset('img/flow3.png')}}" alt="">
                                </div>
                                <div class="p-flow__cardDescription">
                                    レジにて購入予約時に送信されたメールを確認し、
                                    商品代金を支払い
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- productList -->
        <section class="c-container p-product">
            <div class="p-productContainer">
                <div class="p-product__header">
                    <p class="c-title">商品一覧</p>
                </div>
                <div class="p-product__list">
                    @foreach($products as $product)
                    <div class="p-product__item u-mt16">
                        <span class="c-tag">{{$product->category->name}}</span>
                        <a href="{{route('products.show', ['product_id' => $product->id])}}">
                            <div class="p-product__image">
                                @include('thumbnail')
                                @if($product->sold_flg === 1)
                                <div class="p-product__soldOutBadge">
                                    <span class="p-product__soldOutBadgeText">SOLD</span>
                                </div>
                                @endif
                            </div>
                        </a>                           
                        <div class="p-product__data">
                                <ul class="p-product__name">
                                    <li class="p-product__infomations u-mb2">
                                        <span class="p-product__sentense-name">{{$product->name}}</span>
                                    </li>
                                    <li class="p-product__infomations">
                                        <span class="p-product__sentense">{{$product->price}}円(税込)</span>
                                    </li>
                                    <li class="p-product__infomations">
                                        <span class="p-product__sentense">{{$product->shop->conveni->name}}</span>
                                    </li>
                                    <li class="p-product__infomations">
                                        <span class="p-product__sentense">{{$product->shop->name}}支店</span>
                                    </li>
                                    <li class="p-product__infomations">
                                        <span class="p-product__sentense">賞味期限：{{$product->exp_date->format('Y/m/d')}}</span>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="p-btnContainer">
                    <ul class="p-btnContainer__list">
                        <li class="p-btnContainer__item">
                            <a href="{{route('products.index')}}" class="c-btn p-btnContainer__btn">もっと見る</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- question -->
        <section class="c-container p-question">
            <div class="p-questionContainer">
                <div class="p-question__header">
                    <p class="c-title">よくあるご質問</p>
                </div>

                <div class="p-question__list">
                <div class="p-question__item">
                    <p class="p-question__q">Q.利用料金はかかりますか？</p>
                    <p class="p-question__a">A.全て無料となっております。</p>
                </div>

                <div class="p-question__item">
                    <p class="p-question__q">Q.商品の出品をしたいのですが、どうすればよいでしょうか？</p>
                    <p class="p-question__a">A.<a href="{{route('shop.register')}}">こちら</a>より新規会員登録の上、商品をご登録ください。登録された商品が購入予約されましたらメールが届きます。そちらをご確認の上、商品のご用意をお願いします。</p>
                </div>

                <div class="p-question__item">
                    <p class="p-question__q">Q.ログインするためのパスワードを忘れてしまいました。</p>
                    <p class="p-question__a">A.<a href="{{route('password.request')}}">こちら</a>よりパスワードの再設定が行えます。</p>
                </div>
            </div>
        </section>

        <section class="c-container">
            <div class="p-btnContainer">
                    <ul class="p-btnContainer__list">
                        <li class="p-btnContainer__item">
                            <a href="{{route('register')}}" class="c-btn p-btnContainer__btn is-stand u-mb16">会員登録はこちら</a>
                        </li>
                        <li class="p-btnContainer__item">
                            <a href="{{route('shop.register')}}" class="c-btn p-btnContainer__btn is-stand">出品者会員登録はこちら</a>
                        </li>
                    </ul>
            </div>
        </section>
</main>
@endsection