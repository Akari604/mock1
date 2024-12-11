<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品詳細画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}" />
    <script src="https://kit.fontawesome.com/eea364082e.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div class="header-ttl">
                <img src="{{ asset('storage/images/logo.png') }}" alt="COACHTECH" width="300px">
            </div>
            <form class="header-search_form">
                <input type="search" id="site-search" name="search" value="なにをお探しですか？">
            </form>
            <div class="header-button">
                @if (Auth::check())
                <form class="top_button" action="/logout" method="post">
                    @csrf
                    <button class="top_button">ログアウト</button>
                </form>
                <a href="/login" class="top_button">
                    ログイン
                </a>
                @endif
                <a href="/mylist" class="top_button">
                    マイリスト
                </a>
                <a href="/exhibit" class="product_exhibit">
                    出品
                </a>
            </div>
        </div>
    </header>
    <main>
        <form>
            <div class="main-content_detail">
                <div class="main-content_img">
                    <img src="{{ asset($item->img_url) }}" alt="商品画像" class="img-content">
                </div>
                <div class="main-content_text">
                    <div class="product_content">
                        <h2>{{ $item->product_name }}</h2>
                        <p class="brand_name">ブランド名</p>
                        <p class="item_price"><span>￥</span>{{ $item->price }}<span>(税込)</span></p>
                    </div>
                    <div class="tap_button">
                        @auth
                            <!-- Review.phpに作ったisLikedByメソッドをここで使用 -->
                            @if (!$item->isLikedBy(Auth::user()))
                                <span class="favorites">
                                    <i class="fa-light fa-star like-toggle" data-item-id="{{ $item->id }}"></i>
                                <span class="like-counter">{{$item->likes_count}}</span>
                                </span><!-- /.likes -->
                            @else
                                <span class="favorites">
                                    <i class="fa-light fa-star like-toggle liked" class="star-regular" data-item-id="{{ $item->id }}"></i>
                                <span class="like-counter">{{$item->likes_count}}</span>
                                </span><!-- /.likes -->
                            @endif
                        @endauth
                        <div class="like-count" id="likeCount">0</div>
                        <button type="button" class="comment-btn" id="commentButton">
                            <img src="{{ asset('/storage/images/comment-regular.png') }}" class="comment-regular">
                        </button>
                        <div class="comment-count" id="commentCount">0</div>
                    </div>
                    <div class="main-content_btn">
                        <a href="/purchase/{{ $item->id }}" class="purchase-btn">購入手続きへ</a>
                    </div>
                    <div class="product_detail">
                        <h3>商品説明</h3>
                        <p class="product_description">{{ $item->description }}</p>
                    </div>
                    <div class="product_information">
                        <h3>商品の情報</h3>
                        <div class="product_information-content">
                            <p class="product_category">カテゴリー<span></span></p>
                            <p class="product_condition">商品の状態<span></span></p>
                        </div>
                    </div>
                    <div class="product_comment">
                        <p class="comment">コメント<span>()</span></p>
                        <div class="user-display">
                            <div class="user_img">
                                <img src="" alt="ユーザー画像" class="img-user">
                            </div>
                            <div class="user_name">
                                <p class="name"></p>
                            </div>
                        </div>
                        <div class="user_comment">
                            <P class="text_comment"></p>
                        </div>
                        <div class="product_message">
                            <textarea cols="20" rows="5" name="message_comment" class="message-comment"></textarea>
                        </div>
                        <div class="button-content">
                            <button type="submit" class="submit-button">コメントを送信する</button>
                        </div>
                    </div>
                </div>
            </div>
        </form> 
    </main>  
    <script>
    $(function () {
        let favorite = $('.like-toggle'); //like-toggleのついたiタグを取得し代入。
        let favoriteItemId; //変数を宣言（なんでここで？）
        favorite.on('click', function () { //onはイベントハンドラー
            let $this = $(this); //this=イベントの発火した要素＝iタグを代入
            favoriteItemId = $this.data('item-id'); //iタグに仕込んだdata-review-idの値を取得
            //ajax処理スタート
            $.ajax({
            headers: { //HTTPヘッダ情報をヘッダ名と値のマップで記述
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            },  //↑name属性がcsrf-tokenのmetaタグのcontent属性の値を取得
            url: '/item/{item_id}/like', //通信先アドレスで、このURLをあとでルートで設定します
            method: 'POST', //HTTPメソッドの種別を指定します。1.9.0以前の場合はtype:を使用。
            data: { //サーバーに送信するデータ
                'item_id': favoriteItemId //いいねされた投稿のidを送る
            },
            })
            //通信成功した時の処理
            .done(function (data) {
            $this.toggleClass('liked'); //likedクラスのON/OFF切り替え。
            $this.next('.like-counter').html(data.item_likes_count);
            })
            //通信失敗した時の処理
            .fail(function () {
            console.log('fail'); 
            });
        });
    });  
    </script>           
</body>
</html>