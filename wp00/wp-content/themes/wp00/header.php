<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>
<body>
    <div class="body-container">
        <!-- 共通要素: ヘッダー -->
        <header class="header">
            <div class="header-nav d-flex jc-between">
                <!-- タイトル -->
                <h1 class="header-logo">
                    <a href="<?php echo home_url() ?>">
                        <img src="http://placehold.jp/ababab/ffffff/150x50.png?text=Logo" alt="Logo">
                    </a>
                </h1>
                <!-- ナビゲーション -->
                <nav class="nav">
                    <ul class="nav-list d-flex jc-between">
                        <li class="nav-item">
                            <a href="#">Nav-1</a>
                        </li>
                        <li>
                            <span> | </span>
                        </li>
                        <li class="nav-item">
                            <a href="#">Nav-2</a>
                        </li>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-menu menu">
                <!-- グローバルナビゲーション -->
                <ul class="menu-list d-flex jc-evenly">
                    <li class="menu-item">
                        <a href="<?php echo home_url() ?>">HOME</a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo home_url( '/product/' ); ?>">製品について</a>
                    </li>
                    <li class="menu-item">
                        <a href="#">商品一覧</a>
                    </li>
                    <li class="menu-item">
                        <a href="#">セミナー情報</a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo home_url( '/company/' ); ?>">会社概要</a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo home_url( '/contact/' ); ?>">お問い合わせ</a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo home_url( '/blog/' ); ?>">ブログ</a>
                    </li>
                </ul>
            </div>
        </header>