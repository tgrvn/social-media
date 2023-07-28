.PHONY: up stop bash logs ps build down
up:
	docker-compose up -d
ps:
	docker-compose ps
stop:
	docker-compose stop
build:
	docker-compose build
down:
	docker-compose down
bash:
	docker-compose exec php bash
logs:
	docker-compose logs -f