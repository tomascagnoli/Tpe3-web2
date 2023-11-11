<?php

class model{

    private $db;
        
    function __construct() {
        $this->db = $db = new PDO('mysql:host=localhost;dbname=db_artistas;charset=utf8', 'root', '');
    }

    function getArtistas(){
        $consulta = $this->db->prepare ('SELECT * FROM artistas');
        $consulta->execute();
        $artistas = $consulta->fetchAll (PDO::FETCH_OBJ);
        return $artistas;
    }

    function getArtistasByColumnaOrden($columna, $orden){
        $consulta = $this->db->prepare ('SELECT * FROM artistas ORDER BY' . ' ' . $columna . ' ' . $orden);
        $consulta->execute();
        $artistas = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $artistas;
    }

    function getArtistasPaginar($pagina, $limite){
        $consulta = $this->db->prepare('SELECT * FROM artistas LIMIT ' . $limite . ' OFFSET ' . $pagina);
        $consulta->execute();
        $artistas= $consulta->fetchAll(PDO::FETCH_OBJ);
        return $artistas;
    }
    
    function getAlbumesByColumnaOrden($columna, $orden){
        $consulta = $this->db->prepare ('SELECT * FROM albumes ORDER BY' . ' ' . $columna . ' ' . $orden);
        $consulta->execute();
        $artistas = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $artistas;
    }

    function getAlbumesFiltered($columna, $logica, $parametro){
        $consulta = $this->db->prepare('SELECT * FROM albumes WHERE ' . $columna . ' ' . $logica . ' ' . $parametro);
        $consulta->execute();
        $albumes= $consulta->fetchAll(PDO::FETCH_OBJ);
        return $albumes;
    }

    function getAlbumesPaginar($pagina, $limite){
        $consulta = $this->db->prepare('SELECT * FROM albumes LIMIT ' . $limite . ' OFFSET ' . $pagina);
        $consulta->execute();
        $albumes= $consulta->fetchAll(PDO::FETCH_OBJ);
        return $albumes;
    }

    function getArtista($id_artista){
        $consulta = $this->db->prepare('SELECT * FROM artistas WHERE id_artista = ?');
        $consulta->execute([$id_artista]);
        $artista = $consulta->fetch(PDO::FETCH_OBJ);
        return $artista;
    }

    function addArtista($pais, $artista, $nro_albumes){
        $consulta = $this->db->prepare('INSERT INTO artistas(pais, artista, nro_albumes) VALUES (?, ?, ?)');
        $consulta->execute([$pais, $artista, $nro_albumes]);
        return $consulta->rowCount();
    }

    function updateArtista($artista, $nro_albumes, $pais, $id_artista){
        $consulta = $this->db->prepare('UPDATE artistas SET artista = ?, nro_albumes = ?, pais =? WHERE id_artista=?');
        $consulta->execute([$artista, $nro_albumes, $pais, $id_artista]);
        return $consulta->rowCount();
    }

    function deleteArtista($id_artista){
        $consulta = $this->db->prepare('DELETE FROM artistas WHERE id_artista=?'); 
        $consulta->execute([$id_artista]);
        return $consulta->rowCount();
    }

    function getAlbumes(){
        $consulta =  $this->db->prepare( 'SELECT * FROM albumes');
        $consulta->execute();
        return $albumes = $consulta->fetchAll(PDO::FETCH_OBJ);
    }
    
    function getAlbum($id_album){
        $consulta = $this->db->prepare('SELECT * FROM albumes WHERE id_album = ?');
        $consulta->execute([$id_album]);
        $album = $consulta->fetch(PDO::FETCH_OBJ);
        return $album;
    }

    function addAlbum($id_artista, $album, $nro_canciones, $fecha_publicacion){
        $consulta = $this->db->prepare('INSERT INTO albumes(id_artista, album, nro_canciones, fecha_publicacion) VALUES (?, ?, ?, ?)');
        $consulta->execute([$id_artista, $album, $nro_canciones, $fecha_publicacion]);
        return $consulta->rowCount();
    }

    function updateAlbum($id_artista, $album, $nro_canciones, $fecha_publicacion, $id_album){
        $consulta = $this->db->prepare('UPDATE albumes SET id_artista = ?, album = ?, nro_canciones = ?, fecha_publicacion = ? WHERE id_album = ?');
        $consulta->execute([$id_artista, $album, $nro_canciones, $fecha_publicacion, $id_album]);
        return $consulta->rowCount();
    }

    function deleteAlbum($id_album){
        $consulta = $this->db->prepare('DELETE FROM albumes WHERE id_album=?'); 
        $consulta->execute([$id_album]);
        return $consulta->rowCount();
    }
}