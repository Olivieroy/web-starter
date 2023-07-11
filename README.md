# :open_file_folder: Projet Web Starter

## :bookmark_tabs: Table des matières

- [Structure du projet](#structure-du-projet)
- [Utilisation](#utilisation)
- [Fonctionnalités supplémentaires](#fonctionnalités-supplémentaires)
- [Contact](#contact)

## :file_folder: Structure du projet

```
web-starter/
│
├─ .github/
│   ├── dependabot.yml
│   └── FUNDING.yml
│
├─ dist/
│   ├── css/
│   │   └── master.css
│   ├── js/
│   │   └── main.js
│   └── img/
│
├─ layouts/
│   ├── footer.php
│   ├── header.php
│   └── grid.php
│
├─ source/
│   ├── assets/
│   │   ├── img/
│   │   └── pdf/
│   ├── js/
│   │   ├── grid.js
│   │   └── index.js
│   └── sass/
│       ├── components/
│       │   ├── _button.scss
│       │   ├── _cards.scss
│       │   ├── _cta.scss
│       │   ├── _grid.scss ⬅️ Vous pouvez changer l'affichage de la grid présente dans le fichier grid.php
│       │   ├── _index.scss
│       │   ├── _input.scss
│       │   └── _labels.scss
│       ├── global/
│       │   ├── _animation.scss
│       │   ├── _breakpoints.scss
│       │   ├── _colors.scss
│       │   ├── _fonts.scss
│       │   ├── _functions.scss
│       │   ├── _icons.scss
│       │   ├── _index.scss
│       │   └── _mixins.scss
│       ├── layouts/
│       │   ├── _footer.scss
│       │   ├── _form.scss
│       │   ├── _header.scss
│       │   ├── _index.scss
│       │   └── _main.scss
│       ├── libs/
│       │   ├── _index.scss
│       │   ├── _normalize.scss
│       │   └── _reset.scss
│       ├── pages/
│       │   ├── _home.scss
│       │   └── _index.scss
│       └── master.scss
│
├── .gitignore
├── gulpfile.js
├── index.php
├── LICENSE
├── package-lock.json
├── package.json
├── README.md
└── SECURITY.md
```


## :rocket: Utilisation

1. Clonez ce dépôt sur votre machine locale.
2. Installez [Node.js](https://nodejs.org/en/) sur votre machine avec la commande suivante dans votre terminal `npm init`.
3. Exécutez `npm install` pour installer toutes les dépendances du projet.
4. Aller dans le fichier package.json et modifier le nom du projet, la description, l'auteur, la licence, les mots-clés, etc.
5. Ajouter également dans le fichier package.json dans la partie scripts ` "test": "echo \"Error: no test specified\" && exit 1", "gulp": "gulp --gulpfile gulpfile.mjs"`.
6. Utilisez la commande `npm run gulp` pour exécuter les tâches Gulp (compilation, minification, etc.).
7. Modifiez les fichiers SCSS, JS, et PHP selon les besoins de votre projet.
8. Lorsque vous avez terminé, les fichiers compilés et minifiés seront disponibles dans le dossier "dist".

## Contact

Si vous rencontrez le moindre problème vous pouvez me contactez ici : [contact@olivieroy.fr](mailto:contact@olivieroy.fr) ✉️