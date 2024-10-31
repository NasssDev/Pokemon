# Pokemon MVC

Voici les instructions d'installation du projet localement.

## Vous pouvez utiliser : 
- Notre configuration prête à l'emploi avec `ddev` (un wrapper de docker) (recommandé)
- Votre propre outil comme MAMP, XAMPP, Laragon ... 
- Votre propre configuration docker

## Installation avec ddev (recommandé)

### Installer ddev et docker

> <br>**Aller sur les sites dédiés pour installer ces deux outils** <br><br>
> [voir le site d'installation de ddev](https://ddev.readthedocs.io/en/stable/)<br>
> [voir le site d'installation de docker](https://www.docker.com/)

### Lancer ddev avec les commandes suivantes une à une :
1. `ddev start`<br>
2. `ddev npm i`<br>
3. `ddev npm run dev`<br>
4. *Sur un autre terminal*:<br>
    ```sh
    ddev exec npx tailwindcss -i ./src/assets/style.css -o ./src/assets/output.css --watch
    ```
4. *Sur un autre terminal (ouvre une fenêtre pop up):*
`ddev launch`<br>

### (Si besoin) - Configurer la base de donnée local avec ddev

*Si elle n'est pas déjà configurée, voici la marche à suivre:*

Ajouter les variable d'environnement ci-dessous à `.ddev/config.yaml` dans <br>`web_environment:[ici...]`:
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
```bash
ddev import-db --file="database/.db.sql"
```
<br>

*Si besoin, pour avoir accés à phpmyadmin:* <br>
`ddev get ddev/ddev-phpmyadmin`

**Puis démarrer à nouveau vite js (avec npm)**
1. `ddev npm install`
2. `ddev npm run dev`
<br>

### (Si besoin) ddev et composer
Pour installer les dépendances si elles ne le sont pas déjà : 
`ddev composer install`

En cas de besoin de (re)générer l'autoload (php): `ddev composer dump-autoload`

## Si vous utilisez votre configuration personnelle locale (avec ou sans docker) :
- Le dump de la bdd mysql est dans `database/db.sql`
- Le projet est configuré avec vite js, npm, composer avec l'autoload <br>
`composer install` - `composer dump-autoload` | `npm install` - `npm run dev`
- Le point d'entrée du js et du css (tailwind) se trouve dans `src/assets/main.js`
- Attention : pour utiliser vite js, vous devez bien ajouter dans un `.env` à la racine:<br> 
```
HOST_URL="https://-votre-url-de-base" 
(ex: https://local.pokemon.com ou http://localhost)
````

> Si il y a un blocage, retrouvez l'appel des scripts de vite dans `views/templates/template.php` dans le `<head>` avec les variables `$viteEntry` et `$viteClient` => **là vous pouvez y ajouter votre propre chemin d'accés de vite js**

NB: Si besoin vous pouvez supprimer ddev en cas de conflits (ils ne devraient pas y en avoir si vous ne le démarrez pas)<br> 
=> à la racine du projet en bash: `rm -r .ddev`

Aussi vous pouvez configurer votre propre dockerfile / docker compose. Mais si vous voulez, nous avons préparer ddev afin de faciliter ces tâche, il faut juste l'installer en plus de docker que vous avez peut-être déjà.
