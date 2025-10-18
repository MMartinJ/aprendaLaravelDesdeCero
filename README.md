# 🚀 Ejercicios del libro Laravel desde cero

Repositorio sobre los ejercicios del libro "aprenda desarrollo web con laravel desde cero".

## 📖 Tabla de Contenidos
- [Instalación](#Guía-de-Instalación)
- [Uso](#Acceso-en-el-navegador)
- [Estructura](#Estructura-del-proyecto)


## 🛠️ Guía de Instalación

## Instalación

Sigue estos pasos para configurar y ejecutar el proyecto en tu entorno local, todo desde cero y sin perderte.

## Requisitos previos
- **Laravel 10**
- **PHP 8** y **Composer** instalados.
- **Node.js** y **npm** instalados.
- Acceso a configurar variables en el archivo **.env** (base de datos y claves).

## Configuración del entorno
- **Copiar y preparar el entorno:** Duplica el archivo de ejemplo con `cp .env.example .env`.
- **Editar variables:** Abre `.env` y ajusta la conexión a la base de datos (por ejemplo: `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`). Revisa también claves de aplicación si aplica.

## Instalar dependencias
- **PHP:** Ejecuta `php composer update` para instalar/actualizar dependencias de Composer.
- **JavaScript (Vite):** Ejecuta `npm install` para instalar las dependencias del frontend.

## Arranque del proyecto
- **Compilación y servidor de Vite:** Inicia `npm run dev` para compilar y servir los assets en modo desarrollo.
- **Servidor de Laravel:** Inicia `php artisan serve` para levantar el servidor de la aplicación.

## Acceso en el navegador
- Por defecto, abre `http://localhost:8000`.
- Nota: Dependiendo de tu configuración en `.env` (por ejemplo, rutas o puertos) y de Vite, la URL final puede variar.

## Troubleshooting rápido
- **Variables no cargan:** Verifica que `.env` exista y que no haya caché de configuración; si es necesario, corre `php artisan config:clear`.
- **Assets no cargan:** Asegúrate de que `npm run dev` está corriendo y que la ruta de Vite esté correctamente configurada.
- **Errores de conexión a DB:** Revisa host, puerto, credenciales y que el servicio de base de datos esté activo.

## Resumen
1. `cp .env.example .env` y configurar variables.
2. `php composer update`.
3. `npm install`.
4. `npm run dev` y `php artisan serve`.
5. Abrir `http://localhost:8000`.

## Estructura del proyecto

* Cursos
  Éste es el primer proyecto que enseña los pasos básicos para crear un proyecto en laravel. (en el libro se llama Escuela)

* Bootstrap
  Ejemplo de utilización de bootstrap en un proyecto Laravel.
* Breeze
  Ejemplo de utilización de la libreria Breeze en un proyecto Laravel.
* Jetstrem
  Ejemplo de utilizacion de Jetstream en un proyecto Laravel. Se enseña el diseño de una base de datos en mySQL Workbench.
* Blog
  Proyecto final de creación de un blog desde cero.

