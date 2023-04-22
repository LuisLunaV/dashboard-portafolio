# Panel de control para portafolio personal

Este proyecto consiste en un panel de control desarrollado en PHP para administrar mi portafolio web personal. Este panel de control me permite subir nuevos proyectos, agregar tecnologías dominadas, modificar mi descripción personal y añadir nuevas redes sociales, todo desde una única interfaz fácil de usar.

# Funcionalidades
- Subir nuevos proyectos: puedo agregar nuevos proyectos a mi portafolio, incluyendo información detallada sobre cada uno, como el nombre, descripción, tecnologías utilizadas y capturas de pantalla.

- Agregar tecnologías dominadas: puedo mostrar mi experiencia en diferentes tecnologías, agregando una lista de las tecnologías que domino y las que estoy aprendiendo.

- Modificar mi descripción personal: puedo cambiar la descripción que aparece en mi portafolio, proporcionando información sobre mí, mis habilidades y experiencia.

- Añadir nuevas redes sociales: puedo agregar enlaces a mis perfiles de redes sociales, lo que me permite ampliar mi presencia en línea y llegar a más personas interesadas en mis servicios.

## Requisitos previos

Antes de utilizar este proyecto, asegúrate de tener instalado lo siguiente:
- PHP 8.2.1 
- MySql
- XAMPP

## Tecnologías utilizadas

- PHP
- HTML
- Bootstrap
- JavaScript
- Mysql

## Estructura de directorios
```console
.
├── assets
│   ├── css
│   ├── fonts
│   ├── img
│   ├── js
│   └── README.md
├── controllers
│   ├── forms-login
│   │   ├── form-controller.php
│   │   ├── form.js
│   │   ├── form-style.css
│   │   └── README.md
│   ├── forms-portafolio
│   │   └── portafolioController.php
│   └── tabla-proyectos
│       └── mostrar-proyectos.php
├── database
│   ├── configdb.php
│   ├── sentencias.php
│   └── users.json
├── helpers
│   ├── validar-sesion.php
│   └── validar-users.php
├── includes
│   ├── footer.php
│   ├── header.php
│   └── menu.php
├── index.php
├── pages
│   ├── cerrar.php
│   ├── login.php
│   ├── portafolio.php
│   └── ver-registros.php
├── partials
│   ├── login-form.php
│   ├── portafolio-form.php
│   └── tabla-proyectos.php
├── README.md
└── services
    └── api-post.php

```


## Instalación

1. Clona este repositorio en tu máquina local:

```console
git clone ttps://github.com/LuisLunaV/dashboard-portafolio.git
```

2. Navega hasta la carpeta del proyecto:
```console
cd tu-proyecto
```
- Abrir archivo index.php en tu VScode, click derecho dentro del archivo, seleccionar PHP Server: Server project

## Contacto

Si tiene alguna pregunta o comentario sobre el proyecto, puede contactarme a través de:

- LinkedIn: https://www.linkedin.com/in/luis-alfredo-luna-villa-411708219/
- Twitter https://twitter.com/LuisLunaVilla2
- Facebook