<div align="center">

# Products service

[![CI](https://github.com/soulaimaneyahya/x2microservices-products-service/actions/workflows/ci.yaml/badge.svg)](https://github.com/soulaimaneyahya/x2microservices-products-service/actions/workflows/ci.yaml)
[![CI-CD](https://github.com/soulaimaneyahya/x2microservices-products-service/actions/workflows/ci-cd.yaml/badge.svg)](https://github.com/soulaimaneyahya/x2microservices-products-service/actions/workflows/ci-cd.yaml)

</div>

- [Infra](https://github.com/soulaimaneyahya/x2microservices-infra)
- [Seller service / API Gateway](https://github.com/soulaimaneyahya/x2microservices-seller-service)
- [Categories service](https://github.com/soulaimaneyahya/x2microservices-categories-service)
- [Products service](https://github.com/soulaimaneyahya/x2microservices-products-service)

docker hub images;

- https://hub.docker.com/repository/docker/soulaimaneyhcodpartner/products_service_mysql
- https://hub.docker.com/repository/docker/soulaimaneyhcodpartner/products_service_nginx
- https://hub.docker.com/repository/docker/soulaimaneyhcodpartner/products_service_php

```sh
composer install
cp .env.example .env
```

Generate key
```sh
php -r "echo 'base64:' . base64_encode(random_bytes(32)) . PHP_EOL;"
```

Set Permissions
```sh
sudo chmod -R 775 storage
```

Run Service
```sh
php -S localhost:8001 -t public
```

DB Seed
```sh
php artisan migrate:fresh
php artisan db:seed
```

