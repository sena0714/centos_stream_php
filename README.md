# 初めに
## php-fpmの権限を変更する
下記コマンドを実行する
```
docker compose exec web chmod 766 /run/php-fpm/www.sock
```