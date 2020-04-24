up: docker-up

docker-up:
	docker-compose up --build -d

frontend-install:
	docker-compose exec frontend-nodejs npm install

frontend-build:
	docker-compose exec frontend-nodejs npm run build

frontend-watch:
	docker-compose exec frontend-nodejs npm run build