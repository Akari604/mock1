#模擬案件フリマアプリ

##環境構築  
Dockerビルド  
1.git clone リンク  
2.docker-compose up -d --build

##laravel環境構築  
1.docker-compose exec php bash  
2.composer install  
3..env.exampleファイルから.envを作成し、環境変数を変更  
4.php artisan key:generate  
5.php artisan migrate  
6.php artisan storage:link

##使用技術  
Laravel Framework 8.83.8  
nginx 1.21.1  
MySQL 8.0.26

##ER図

![スクリーンショット 2025-01-26 204527](https://github.com/user-attachments/assets/6dc24b11-82b7-4a9f-8926-421902d1606d)


##URL  
開発環境　 
商品一覧画面　http://localhost/ 　
会員登録画面　http://localhost/register　
phpMyAdmin http://localhost:8080/

