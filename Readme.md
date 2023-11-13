# API de Música

*Esta API proporciona endpoints para gestionar información sobre artistas y álbumes musicales.*

## Documentación de Endpoints

### 1. Obtener Lista de Artistas

**Endpoint:** `/ubicacion/api/artistas`

**Método:** `GET`

**Uso:** `http://ubicacionDelArchivo/api/artistas`

**Ejemplo de Respuesta (JSON):**

```json
  {
    "id_artista": 1,
    "artista": "NombreArtista1",
    "nro_albumes": 5,
    "pais": "País1"
  },
  {
    "id_artista": 2,
    "artista": "NombreArtista2",
    "nro_albumes": 3,
    "pais": "País2"
  }
```
### 2. Obtener Artista por ID

**Endpoint:** `/ubicacion/api/artistas/:ID`

**Método:** `GET`

**Uso:** `http://ubicacionDelArchivo/api/artistas/1`

**Ejemplo de Respuesta (JSON):**

```json
{ 
  "id_artista": 1, 
  "artista": "NombreArtista1", 
  "nro_albumes": 5, 
  "pais": "País1" 
}
```
### 3. Añadir Nuevo Artista:

**Endpoint:** `/ubicacion/api/artistas`

**Método:** `POST`

**Uso:** `http://ubicacionDelArchivo/api/artistas`

**Ejemplo de Datos del Cuerpo (JSON):**

```json
{ 
  "token": 1234, 
  "artista": "NuevoArtista", 
  "nro_albumes": 2, 
  "pais": "NuevoPaís" 
}
```
### 4. Actualizar Artista por ID:

**Endpoint:** `/ubicacion/api/artistas/:ID`

**Método:** `PUT`

**Uso:**  `http://ubicacionDelArchivo/api/artistas/1`

**Ejemplo de Datos del Cuerpo (JSON):**

```json
{ 
  "token": 1234, 
  "artista": "NuevoNombreArtista", 
  "nro_albumes": 3, 
  "pais": "NuevoPaís" 
}
```
### 5. Eliminar Artista por ID:

**Endpoint:** `/ubicacion/api/artistas/:ID`

**Método:** `DELETE`

**Uso:** `http://ubicacionDelArchivo/api/artistas/1`

**Ejemplo de Datos del Cuerpo (JSON):**

```json
{ 
  "token": 1234 
}
```

### 6. Obtener Artistas por columna y orden:

**Endpoint:** `/ubicacion/api/artistas/:COLUMNA/:ORDEN`

**Método:** `GET`

**Uso:** `http://ubicacionDelArchivo/api/artistas/nro_albumes/DESC`

**Ejemplo de Datos del Cuerpo (JSON):**

```json
{
    "id_artista": 8,
    "artista": "Los piojos",
    "nro_albumes": 28,
    "pais": "Argentina"
},
{
    "id_artista": 2,
    "artista": "Ricardo Arjona",
    "nro_albumes": 25,
    "pais": "Guatemala"
},
{
    "id_artista": 4,
    "artista": "No te va a gustar",
    "nro_albumes": 17,
    "pais": "Uruguay"
},
{
    "id_artista": 5,
    "artista": "Soda Stereo",
    "nro_albumes": 17,
    "pais": "Argentina"
},
{
    "id_artista": 6,
    "artista": "Anuel AA",
    "nro_albumes": 12,
    "pais": "PuertoRico"
},
{
    "id_artista": 3,
    "artista": "Emanuel San Roman",
    "nro_albumes": 1,
    "pais": "Argentina"
}

{
    "id_artista": 8,
    "artista": "Los piojos",
    "nro_albumes": 28,
    "pais": "Argentina"
},
{
    "id_artista": 2,
    "artista": "Ricardo Arjona",
    "nro_albumes": 25,
    "pais": "Guatemala"
},
{
    "id_artista": 4,
    "artista": "No te va a gustar",
    "nro_albumes": 17,
    "pais": "Uruguay"
},
{
    "id_artista": 5,
    "artista": "Soda Stereo",
    "nro_albumes": 17,
    "pais": "Argentina"
},
{
    "id_artista": 6,
    "artista": "Anuel AA",
    "nro_albumes": 12,
    "pais": "PuertoRico"
},
{
    "id_artista": 3,
    "artista": "Emanuel San Roman",
    "nro_albumes": 1,
    "pais": "Argentina"
}
```

### 7. Obtener Lista de Álbumes:

**Endpoint:** `/ubicacion/api/albumes`

**Método:** `GET`

**Uso:** `http://ubicacionDelArchivo/api/albumes`

**Ejemplo de Respuesta (JSON):**

```json
{ 
  "id_album": 1, 
  "id_artista": 1, 
  "album": "Album1", 
  "nro_canciones": 10, 
  "fecha_publicacion": "2023-01-01" 
},
{ 
  "id_album": 2, 
  "id_artista": 2, 
  "album": "Album2", 
  "nro_canciones": 8, 
  "fecha_publicacion": "2023-02-01" 
}
```
### 8. Obtener Álbum por ID:

**Endpoint:** `/ubicacion/api/albumes/:ID`

**Método:** `GET`

**Uso:** `http://ubicacionDelArchivo/api/albumes/1` 

**Ejemplo de Respuesta (JSON):**

```json
{ 
  "id_album": 1, 
  "id_artista": 1, 
  "album": "Album1", 
  "nro_canciones": 10, 
  "fecha_publicacion": "2023-01-01" 
}
```
### 9. Eliminar Álbum por ID:

**Endpoint:** `/ubicacion/api/albumes/:ID`

**Método:** `DELETE`

**Uso:** `http://ubicacionDelArchivo/api/albumes/1`

**Ejemplo de Respuesta (JSON):**

```json
{ 
  "id_album": 1, 
  "id_artista": 1, 
  "album": "Album1", 
  "nro_canciones": 10, 
  "fecha_publicacion": "2023-01-01" 
}
```

### 10. Obtener albumes por columna y orden:

**Endpoint:** `/ubicacion/api/albumes/:COLUMNA/:ORDEN`

**Método:** `GET`

**Uso:** `http://ubicacionDelArchivo/api/albumes/nro_canciones/ASC`

**Ejemplo de Respuesta (JSON):**

```json
{
    "id_album": 8,
    "id_artista": 4,
    "album": "Despedazado por mil partes",
    "nro_canciones": 11,
    "fecha_publicacion": 2016
},
{
    "id_album": 3,
    "id_artista": 4,
    "album": "Por lo menos hoy",
    "nro_canciones": 12,
    "fecha_publicacion": 2014
},
{
    "id_album": 5,
    "id_artista": 5,
    "album": "Ver más Nada Personal ",
    "nro_canciones": 12,
    "fecha_publicacion": 2014
},
{
    "id_album": 6,
    "id_artista": 3,
    "album": " Mi sangre",
    "nro_canciones": 14,
    "fecha_publicacion": 2018
},
{
    "id_album": 7,
    "id_artista": 2,
    "album": "Escuchar el viento",
    "nro_canciones": 14,
    "fecha_publicacion": 2019
},
{
    "id_album": 10,
    "id_artista": 6,
    "album": "Emmanuel",
    "nro_canciones": 666,
    "fecha_publicacion": 2018
}
```

## Información Adicional: Paginación de Artistas
### Endpoint

- `GET /ubicacion/api/artistas/paginar/:PAGINA/:LIMITE`

### Descripción
* Este endpoint proporciona la funcionalidad de paginación para obtener una página específica de artistas con el número de resultados especificado.


### Parámetros

- **PAGINA (obligatorio):** `Número desde donde se desea obtener resultados`.
- **LIMITE (obligatorio):** `Número de resultados por página`.

### Ejemplo de Uso

- `GET http://ubicacionDelArchivo.com/artistas/paginar/1/10`

**Ejemplo de Respuesta (JSON):**

```json
[
  {"id_artista": 1, "artista": "NombreArtista1", ...},
  {"id_artista": 2, "artista": "NombreArtista2", ...},
  ...
]
```

* Este endpoint devuelve una página específica de artistas con el número de resultados especificado.


## Configuración
* Asegúrese de tener instaladas las dependencias necesarias y de ajustar la configuración según las necesidades específicas de su proyecto, ademas de importar nuesta DB.

### Requisitos
- PHP 7.0 o superior
- MySQL



