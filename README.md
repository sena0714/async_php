# 初回起動後にやること
```
docker compose exec web systemctl restart php-fpm
```

## 起動後に毎回実行する
```
docker compose exec web chown apache:apache /run/php-fpm/www.sock
```# async_php
