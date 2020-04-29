up: docker-up

docker-restart: docker-down docker-up

docker-up:
	docker-compose up --build -d

docker-down:
	docker-compose down

frontend-install:
	docker-compose exec frontend-nodejs npm install

frontend-build:
	docker-compose exec frontend-nodejs npm run build

frontend-watch:
	docker-compose exec frontend-nodejs npm run build