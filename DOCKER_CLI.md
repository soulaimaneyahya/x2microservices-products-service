docker-compose cli

```sh
docker-compose down --rmi all -v
docker-compose up -d
```

docker cli
```sh
docker logs products_service_mysql_container

docker network inspect products_service_network

docker exec -it products_service_php_container /bin/sh
docker exec -it products_service_nginx_container /bin/sh

docker exec -it products_service_mysql_container /bin/sh
docker exec -it products_service_mysql_container mysql -u user -p
```
