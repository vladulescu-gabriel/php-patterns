start:
	docker-compose up -d
	docker-compose exec -it service-php bash -c "composer install"

stop:
	docker-compose down --remove-orphans