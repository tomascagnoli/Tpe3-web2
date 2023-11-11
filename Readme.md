# API de Música

Esta API proporciona endpoints para gestionar información sobre artistas y álbumes musicales.

## Documentación de Endpoints

### Obtener Lista de Artistas

Obtiene la lista de artistas.

- **Endpoint:** `/artistas`
- **Método:** `GET`
- **Uso:** `http://biblioteca_musical.com/api/artistas`
- **Ejemplo de Respuesta (JSON):**
  
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

**1. Obtener Artista por ID:** 
   - **Endpoint:** `/artistas/:ID`
   - **Método:** `GET`
   - **Uso:** `http://biblioteca_musical/api/artistas/1`
   - **Ejemplo de Respuesta (JSON):**

     { 
       "id_artista": 1, 
       "artista": "NombreArtista1", 
       "nro_albumes": 5, 
       "pais": "País1" 
     }

**2. Añadir Nuevo Artista:**
   - **Endpoint:** `/artistas`
   - **Método:** `POST`
   - **Uso:** `http://biblioteca_musical/api/artistas`
   - **Ejemplo de Datos del Cuerpo(JSON):**
    
     { 
       "token": 1234, 
       "artista": "NuevoArtista", 
       "nro_albumes": 2, 
       "pais": "NuevoPaís" 
     }
   

**3. Actualizar Artista por ID:**
   - **Endpoint:** `/artistas/:ID`
   - **Método:** `PUT`
   - **Uso:** `http://biblioteca_musical/api/artistas/1`
   - **Ejemplo de Datos del Cuerpo(JSON):**
    
     { 
       "token": 1234, 
       "artista": "NuevoNombreArtista", 
       "nro_albumes": 3, 
       "pais": "NuevoPaís" 
     }
    
**4. Eliminar Artista por ID:**
   - **Endpoint:** `/artistas/:ID`
   - **Método:** `DELETE`
   - **Uso:** `http://biblioteca_musical/api/artistas/1`
   - **Ejemplo de Datos del Cuerpo(JSON):**
  
     { 
       "token": 1234 
     }
  
**5. Obtener Lista de Álbumes:**
   - **Endpoint:** `/albumes`
   - **Método:** `GET`
   - **Uso:** `http://biblioteca_musical.com/api/albumes`
   - **Ejemplo de Respuesta (JSON):**
   
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

**6. Obtener Álbum por ID:**
   - **Endpoint:** `/albumes/:ID`
   - **Método:** `GET`
   - **Uso:** `http://biblioteca_musical/api/albumes/1`
   - **Ejemplo de Respuesta (JSON):**
     
     { 
       "id_album": 1, 
       "id_artista": 1, 
       "album": "Album1", 
       "nro_canciones": 10, 
       "fecha_publicacion": "2023-01-01" 
     }

*PD: Asegúresee de tener instaladas las dependencias necesarias y de ajustar la configuración según las necesidades específicas de su proyecto.