# Readme

El proyecto cuenta con sus pruebas unitarias para la api. Utilicé Laravel, vue 3, Typescript, y una plantilla que tenía en html con Tailwindcss, cabe resaltar que aunque usé una plantilla, la componetización y funcionamientos de dichos componentes los hice yo mismo.

# credenciales 
| correo | password |
|---|---|
|user@user.com|Test.123|
|admin@admin.com|Test.123| 
# Requerimientos

| | |
|---|---|
|php|^8.1|
|node|^18| 

# Insalación

Instalar el proyecto
```
composer install
```

 Duplicamos el `.env.example` y le cambiamos el nombre a `.env`. Configuramos la base de datos, migrar e implementar las semillas

```
php artisan migrate --seed
```

Instalar el front 

```
npm i
```

compilar
```
npm run build
```

Finalmente correr el sistema con
```
php artisan serv
```
# Docker
Alternativamente, el proyecto también cuenta con laravel sail, por lo cual puede crear su contenedor. Recuerda que antes de construir el contenedor se debe de tener preparado el  archivo `.env`

```
docker compose up -d
```

Para estar dentro del proyecto ejecutamos
```
docker compose exec laravel.test bash
```

finalmente abrimos nuestro navegador e introducimos
```
http://localhost
```

ya en este punto aplicamos los comandos antes mecionados.
Sí estás en windows, para éstos comandos recuerde tener instalado docker y el subsistema de linux en windows

------------------------
Cualquier duda, pregunta, o inconveniente por favor me comentan.  Marcos López (marcoslopez1895@gmail.com)
