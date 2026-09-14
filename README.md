# middleware-app-practice

## 概要
COACHTECH 教材 Tutorial 10-2「ミドルウェア ハンズオン演習」で作成した成果物です。
ミドルウェア学習用アプリ　管理者と一般ユーザーを登録しておき、管理者ではログイン可能であるが一般ユーザーでログインできない設定。

## 使用技術
- PHP 8.x
- Laravel 10.x
- カスタムミドルウェア
- Laravel Fortify（認証）


## 学んだこと
- sail artisan make:middlewareでミドルウェアを作成し、ミドルウェアを記述する。
- Kernelへのミドルウェアの登録方法。
- 

## 動作確認

ログイン後、http://localhost/admin にアクセス
管理者: admin@example.com / password
一般: user@example.com / password

## 詰まったポイントと解決方法
- RoutingでのMiddlewareの登録方法
  ```
  middleware(['auth', 'checkAdmin'])
  ```
  Middlewareは配列で複数を登録することが可能。


## 開発の工夫
- 教材の内容に加え複数のmiddlewareを登録。
- 今回はmiddleware内でis_adminを真偽値として扱っているためModelでキャストし値の型を指定。

## 動作確認のスクリーンショット
![alt text](docs/image.png)
![alt text](docs/image-1.png)