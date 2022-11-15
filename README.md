<div align="center">
    <h1> Web-starter </h1>
    <p> A starter template for web development </p>
    <img src="https://cdn.discordapp.com/attachments/954117377593868331/1029864040882786324/iMac_-_1.png">
</div>

## Table of Contents 👨🏻‍🏫

1. [Table of Contents](#table-of-contents-👨🏻‍🏫)
2. [Browser Support](#browser-support-🌐)
3. [Installation](#installation-📦)
4. [Usage](#usage)
5. [Structure](#structure-🔨)
6. [License](#license-📜)
7. [Autor](#autor)


## Browser Support 🌐
- Chrome
- Firefox
- Safari
- Edge
- Opera

## Installation 📦
First step : clone the repository

```sh
$ git clone https://github.com/Olivieroy/web-starter.git
```

Second step : install the dependencies with npm

```sh
$ npm install sass
```

Third step : run the project.
Good Luck ! 🍀

## Structure 🔨

### Forlder structure

```
├── elements 📁
   ├──header.php 📄              # Header
   ├──footer.php 📄               # Footer
├── source 📁                    # Source folders
    ├── css 📁                             # CSS folder
        ├── master.css 📄                 #CSS file for the project 
        ├── master.css.map 📄       # CSS map file for browser support
    ├── img 📁                    # Images folder
    ├── js 📁                         # JS folder
        ├── master.js 📄                   # JS file for the project 
   ├── sass 📁                    # SASS folder
        ├── components 📁              # Components folder
            ├── _button.scss 📄        # Button component
            ├── _card.scss 📄          # Card component
            ├── _cta.scss 📄        # Cta component
            ├── _index.scss 📄        # Index file for components
            ├── _inputs.scss 📄          # Inputs component
            ├── _labels.scss 📄        # Labels component          
        ├── global 📁              # Global folder
            ├── _animations.scss 📄        # Animations file
            ├── _breakpoints.scss 📄        # Breakpoints file
            ├── _colors.scss 📄        # Colors file
            ├── _fonts.scss 📄        # Fonts file
            ├── _functions.scss 📄        # Functions file
            ├── _icons.scss 📄        # Icons file
            ├── _index.scss 📄        # Index file for global
            ├── _mixins.scss 📄        # Mixins file
        ├── layouts 📁              # Layouts folder
            ├── _footer.scss 📄        # Footer file
            ├── _form.scss 📄        # Form file
            ├── _header.scss 📄        # Header file
            ├── _index.scss 📄        # Index file for layouts
            ├── _main.scss 📄        # Functions file
       ├── libs 📁              # Libs folder
            ├── _index.scss 📄        # Index file for libs
            ├── _normalize.scss 📄        # Normalize file
            ├── _reset.scss 📄        # Reset file
       ├── pages 📁              # Pages folder
            ├── _home.scss 📄        # Home file
            ├── _index.scss 📄        # Index file for pages
       ├── master 📄              # SCSS file for the project to compiled 
├── index.php 📄              # Index file for the project
├── package-lock.json 🛠                   # JSON file 
├── package.json 🛠                   # JSON file
├── .gitignore 📄              # Git ignore file
├── README.md 📄              # Readme file
├── LICENSE 📄              # License file


```


## Usage
- `npm run sass` : compile sass to css 
<p> You can create another "npm run" command in the package.json file 😎 </p>

## License
[MIT](https://github.com/Olivieroy/web-starter/LICENSE.) 

## Author
[Olivieroy](https://olivieroy.fr) 🧢
