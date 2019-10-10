- Install de Docker, montrer la doc
- Montrer le lancement d'un MySQL en une ligne de commande
```docker run -p 3306:3306 \
  -e MYSQL_DATABASE=test \
  -e MYSQL_USER=test \
  -e MYSQL_PASSWORD=test \
  -e MYSQL_ROOT_PASSWORD=test \
  -d mysql:5
```
- Voir le ps et le log
- Connection à la DB classique, créer une table
- Couper la DB, relancer, voir la table, couper, supprimer le container, relancer, plus de table
- Install de Compose, montrer la doc
- Montrer un php qui communique avec mysql
- Traefik sur Docker avec Let's Encrypt
