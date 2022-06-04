install:
	docker-compose build
	docker-compose run --rm php composer install

test:
	docker-compose run --rm php composer test

check-style:
	docker-compose run --rm php composer check-style

fix-style:
	docker-compose run --rm php composer fix-style
