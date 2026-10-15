# プロフィールアプリ

## 概要

Laravelを使用して、プロフィール情報を表示する
練習用アプリケーションです。

Controllerで名前・年齢・趣味のデータを用意し、
Bladeテンプレートで画面に表示します。

## 使用技術

- PHP 8.2
- Laravel 10
- Blade
- Docker
- Laravel Sail

## 起動方法

1. Docker Desktopを起動する
2. VS Codeでプロジェクトを開く
3. ターミナルで以下のコマンドを実行する

    ./vendor/bin/sail up -d

4. ブラウザで以下のURLにアクセスする

    http://localhost:8002/profile

## 停止方法

以下のコマンドを実行する

    ./vendor/bin/sail down