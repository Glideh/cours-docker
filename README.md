* Run a MySQL with a command

```docker run -p 3306:3306 \
  -e MYSQL_DATABASE=test \
  -e MYSQL_USER=test \
  -e MYSQL_PASSWORD=test \
  -e MYSQL_ROOT_PASSWORD=test \
  -d mariadb:10
```

* Lancer la composition

```
docker-compose up
```
