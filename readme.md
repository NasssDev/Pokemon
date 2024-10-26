## Pokemon MVC

# Installer ddev et docker
Aller sur les sites dédiés pour installer ces deux outils 

# Lancer ddev
`ddev start`

# Configurer la base de donnée local avec ddev
Ajouter cela à `.ddev/config.yaml` dans `web_environment:[ici...]`:
```sh
"DB_HOST=db",
"DB_USER=root",
"DB_PASSWORD=root",
"DB_NAME=db",
"DB_DRIVER=mysql",
"APP_ENV=local",
"APP_DEBUG=true"
```

Puis lancer : `ddev restart`

Puis importez le dump de la base de donnée :<br>
`ddev import-db --file="database/.db.sql"`