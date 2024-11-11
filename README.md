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

##ER図

![スクリーンショット 2024-10-26 203812](https://github.com/user-attachments/assets/f74faa71-efa9-45cd-8904-6f03dfc674fa)
![スクリーンショット 2024-10-26 202213](https://github.com/user-attachments/assets/1e25e300-f032-4240-a2ae-bb4a06fac40c)


##URL  
開発環境　http://localhost/  
phpMyAdmin http://localhost:8080/
