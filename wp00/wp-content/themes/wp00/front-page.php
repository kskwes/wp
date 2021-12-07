<?php get_header(); ?>

<!-- KV -->
<div class="hero text-center">
    <img src="http://placehold.jp/ababab/ffffff/960x300.png?text=KV" alt="hero">
</div>

<!-- コンテンツ -->
<main>
    <!-- おすすめ記事 -->
    <section class="section recommends d-flex jc-between">
        <a href="#" class="recommends-article">
            <h2 class="recommends-title">Recommend-01</h2>
            <span class="recommends-date">2021-12-02</span>
        </a>
        <a href="#" class="recommends-article">
            <h2 class="recommends-title">Recommend-02</h2>
            <span class="recommends-date">2021-12-02</span>
        </a>
        <a href="#" class="recommends-article">
            <h2 class="recommends-title">Recommend-03</h2>
            <span class="recommends-date">2021-12-02</span>
        </a>
    </section>
    <!-- 商品情報新着4件 -->
    <section class="section items d-flex jc-between">
        <div class="items-item">
            <a href="#">
                <div class="items-thumb">
                    <img src="http://placehold.jp/ababab/ffffff/200x200.png?text=Item01" alt="Item-name-01">
                </div>
                <div class="items-name">
                    <span>Item-name-01</span>
                </div>
            </a>
        </div>
        <div class="items-item">
            <a href="#">
                <div class="items-thumb">
                    <img src="http://placehold.jp/ababab/ffffff/200x200.png?text=Item02" alt="Item-name-02">
                </div>
                <div class="items-name">
                    <span>Item-name-02</span>
                </div>
            </a>
        </div>
        <div class="items-item">
            <a href="#">
                <div class="items-thumb">
                    <img src="http://placehold.jp/ababab/ffffff/200x200.png?text=Item03" alt="Item-name-03">
                </div>
                <div class="items-name">
                    <span>Item-name-03</span>
                </div>
            </a>
        </div>
        <div class="items-item">
            <a href="#">
                <div class="items-thumb">
                    <img src="http://placehold.jp/ababab/ffffff/200x200.png?text=Item04" alt="Item-name-04">
                </div>
                <div class="items-name">
                    <span>Item-name-04</span>
                </div>
            </a>
        </div>
    </section>
    <section class="section info d-flex jc-between">
        <!-- セミナー情報（分類）新着4件 -->
        <div class="seminar info-single">
            <ul class="info-list">
                <li class="info-item">
                    <a href="#">
                        <span class="info-item-title">Seminar-01</span>
                        <span class="info-item-date">2021-12-02</span>
                    </a>
                </li>
                <li class="info-item">
                    <a href="#">
                        <span class="info-item-title">Seminar-02</span>
                        <span class="info-item-date">2021-12-02</span>
                    </a>
                </li>
                <li class="info-item">
                    <a href="#">
                        <span class="info-item-title">Seminar-03</span>
                        <span class="info-item-date">2021-12-02</span>
                    </a>
                </li>
                <li class="info-item">
                    <a href="#">
                        <span class="info-item-title">Seminar-04</span>
                        <span class="info-item-date">2021-12-02</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="info-pile">
            <!-- お知らせ新着2件 -->
            <div class="news">
                <ul class="info-list">
                    <li class="info-item">
                        <a href="#">
                            <span class="info-item-title">News-01</span>
                            <span class="info-item-date">2021-12-02</span>
                        </a>
                    </li>
                    <li class="info-item">
                        <a href="#">
                            <span class="info-item-title">News-02</span>
                            <span class="info-item-date">2021-12-02</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- ブログ新着記事2件 -->
            <div class="blog">
                <ul class="info-list">
                    <li class="info-item">
                        <a href="#">
                            <span class="info-item-title">Blog-01</span>
                            <span class="info-item-date">2021-12-02</span>
                        </a>
                    </li>
                    <li class="info-item">
                        <a href="#">
                            <span class="info-item-title">Blog-02</span>
                            <span class="info-item-date">2021-12-02</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>