# API de Música

*Esta API proporciona endpoints para gestionar información sobre artistas y álbumes musicales.*

## Documentación de Endpoints

### 1. Obtener Lista de Artistas

**Endpoint:** `/artistas`

**Método:** `GET`

**Uso:** `http://ubicacionDelArchivo/api/artistas`

**Ejemplo de Respuesta (JSON):**
```json
[
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
]
```
### 2. Obtener Artista por ID

**Endpoint:** `/artistas/:ID`

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

**Endpoint:** `/artistas`

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

**Endpoint:** `/artistas/:ID`

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

**Endpoint:** `/artistas/:ID`

**Método:** `DELETE`

**Uso:** `http://ubicacionDelArchivo/api/artistas/1`

**Ejemplo de Datos del Cuerpo (JSON):**

```json
{ 
  "token": 1234 
}
```
### 6. Obtener Lista de Álbumes:

**Endpoint:** `/albumes`

**Método:** `GET`

**Uso:** `http://ubicacionDelArchivo/api/albumes`

**Ejemplo de Respuesta (JSON):**

```json

[
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
]
```
### 7. Obtener Álbum por ID:

**Endpoint:** `/albumes/:ID`

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
### 8. Eliminar Álbum por ID:

**Endpoint:** `/albumes/:ID`

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

## Información Adicional: Paginación de Artistas
### Endpoint

- `GET /artistas/paginar/:PAGINA/:LIMITE`

### Descripción
* Este endpoint proporciona la funcionalidad de paginación para obtener una página específica de artistas con el número de resultados especificado.


### Parámetros

- **PAGINA (obligatorio):** `Número de la página que se desea obtener`.
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
* Asegúrese de tener instaladas las dependencias necesarias y de ajustar la configuración según las necesidades específicas de su proyecto.

### Requisitos
- PHP 7.0 o superior
- MySQL



