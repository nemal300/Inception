up:
	docker-compose -f srcs/docker-compose.yaml up
down:
	docker-compose -f srcs/docker-compose.yaml down
re:
	docker-compose -f srcs/docker-compose.yaml up --build
clean:
	docker stop $$(docker ps -qa);\
	docker rm $$(docker ps -qa);\
	docker rmi $$(docker images -qa);\
	docker volume rm $$(docker volume ls -q);\
	sudo rm -rf ~/data/*
	docker network rm $$(docker network ls -q)
