<?php
require_once 'model.php';
require_once("APIView.php");

class controller {
    private $model;
    private $APIView;
    private $data;

    public function __construct() {
        $this->model = new model();
        $this->view = new APIView();
        $this->data = file_get_contents("php://input"); 
    }

    function getData(){ 
        return json_decode($this->data); 
    }  
    
    function getArtistas($params = []) {
        if(empty($params)){
            $artistas = $this->model->getArtistas();
            $this->view->response($artistas,200);
        }elseif($params[":COLUMNA"] && $params[":ORDEN"]){
            $artistas = $this->model->getArtistasByColumnaOrden($params[":COLUMNA"], $params[":ORDEN"]);
            if(!empty($artistas)) {
                $this->view->response($artistas,200);
            }else{
                $this->view->response($artistas,404);
            } 
            $this->view->response($artistas,200);
        }else{
            $artista = $this->model->getArtista($params[":ID"]);
            if(!empty($artista)) {
                $this->view->response($artista,200);
            }else{
                $this->view->response($artista,404);
            } 
        }
    }

    function getArtistasPaginar($params){
        if(!isset($params[":PAGINA"]) && !isset($params[":LIMITE"])){
            $this->view->response("Campos vacios", 404);
        } else{
            $artistas= $this->model->getArtistasPaginar($params[":PAGINA"], $params[":LIMITE"]);
            if(!empty($artistas)) {
                $this->view->response($artistas,200);
            }else{
                $this->view->response($artistas,404);
            } 
        }  
    }

    function getArtista($params) {
        $artista = $this->model->getArtista($params[":ID"]);
        if(!empty($artista)) {
            $this->view->response($artista,200);
        }else{
            $this->view->response($artista,404);
        } 
    }

    function addArtista() {
        $body = $this->getData();
        if(!isset($body->token, $body->artista, $body->nro_albumes, $body->pais)){
            $this->view->response("Campos vacios",404);
        }
        else{
            if($body->token==1234){
                $artista = $body->artista;
                $nro_albumes = $body->nro_albumes;
                $pais = $body->pais;
                $creada = $this->model->addArtista($artista, $nro_albumes, $pais);
                if($creada == '1'){
                    $this->view->response("Artista fue creado con éxito", 200);
                }else{
                    $this->view->response("Artista no fue creado con exito", 404);
                } 
            }else{
                $this->view->response("Token erróneo", 404);
            }      
        }
    }

    function updateArtista($params) {
        $body = $this->getData();
        if(!isset($body->token, $body->artista, $body->nro_albumes, $body->pais, $params[":ID"])){
            $this->view->response("Campos vacios", 404);
        }
        else{
            if($body->token==1234){
                $artista = $body->artista;
                $nro_albumes = $body->nro_albumes;
                $pais = $body->pais;
                $actualizado = $this->model->updateArtista($artista, $nro_albumes, $pais, $params[":ID"]);
                if($actualizado == '1'){
                $this->view->response("Artista fue actualizado con éxito", 200);
                }else{
                    $this->view->response("Artista no fue actualizado con exito", 404);
                }
            }else{
                $this->view->response("Token erróneo", 404);
            }
        }
    }

    public function deleteArtista($params) {
        $body = $this->Getdata();
        if(!isset($body->token)){
            $this->view->response("Campos vacios",404);
        }else{
            if($body->token==1234){
                $borrado = $this->model->deleteArtista($params[":ID"]);
                if($borrado == '1'){
                    $this->view->response("Artista id= " . $params[":ID"] . " eliminado con éxito", 200);
                }else{
                    $this->view->response("Artista id= " . $params[":ID"] . " not found", 404);
                }
            }else{
                $this->view->response("Token erróneo",404);
            }
        }
    }

    function getAlbumes($params = []) {
        if(!isset($params[":COLUMNA"]) && !isset($params[":ORDEN"])){
            if($params[":ID"]){
                $album = $this->model->getAlbum($params[":ID"]);
                if(!empty($album)) {
                    $this->view->response($album,200);
                }else{
                    $this->view->response($album,404);
                }
            }else{
                $albumes = $this->model->getAlbumes();
                $this->view->response($albumes,200);
            }
        }else{
            $albumes = $this->model->getAlbumesByColumnaOrden($params[":COLUMNA"], $params[":ORDEN"]);
            if(!empty($albumes)) {
                $this->view->response($albumes,200);
            }else{
                $this->view->response($albumes,404);
            }
        }
    }
    
    function getAlbumesFiltro($params){
        if(!isset($params[":COLUMNA"]) && !isset($params[":LOGICA"]) && !isset($params[":PARAMETRO"])){
            $this->view->response("Campos vacios", 404);
        } else{
            $albumes= $this->model->getAlbumesFiltered($params[":COLUMNA"], $params[":LOGICA"], $params[":PARAMETRO"]);
            if(!empty($albumes)) {
                $this->view->response($albumes,200);
            }else{
                $this->view->response($albumes,404);
            } 
        }  
    }

    function getAlbumesPaginar($params){
        if(!isset($params[":PAGINA"]) && !isset($params[":LIMITE"])){
            $this->view->response("Campos vacios", 404);
        } else{
            $albumes= $this->model->getAlbumesPaginar($params[":PAGINA"], $params[":LIMITE"]);
            if(!empty($albumes)) {
                $this->view->response($albumes,200);
            }else{
                $this->view->response($albumes,404);
            } 
        }  
    }

    function addAlbum() {
        $body = $this->getData();
        if(!isset($body->token, $body->id_artista, $body->album, $body->nro_canciones, $body->fecha_publicacion)){
            $this->view->response("Campos vacios", 404);
        }else{
            if($body->token==1234){
                $id_artista = $body->id_artista;
                $album = $body->album;
                $nro_canciones = $body->nro_canciones;
                $fecha_publicacion = '2023';
                $añadido = $this->model->addAlbum($id_artista, $album, $nro_canciones, $fecha_publicacion);
                if($añadido == '1'){
                    $this->view->response("Album fue añadido con éxito", 200);
                }else{
                    $this->view->response("Album no fue añadido con exito", 404);
                }
            }else{
                $this->view->response("Token erróneo",404);
            } 
        }
    }

    function updateAlbum($params) {
        $body = $this->getData();
        if(!isset($body->token, $body->id_artista, $body->album, $body->nro_canciones, $body->fecha_publicacion, $params[":ID"])){
            $this->view->response("Campos vacios", 404);
        }
        else{
            if($body->token==1234){
                $id_artista = $body->id_artista;
                $album = $body->album;
                $nro_canciones = $body->nro_canciones;
                $fecha_publicacion = $body->fecha_publicacion;
                $actualizado = $this->model->updateAlbum($id_artista, $album, $nro_canciones, $fecha_publicacion, $params[":ID"]);
                if($actualizado == '1'){
                    $this->view->response("Album fue actualizado con éxito", 200);
                }else{
                    $this->view->response("Album no fue actualizado con exito", 404);
                }
            }
            else{
                    $this->view->response("Token erróneo", 404);  
            }  
        }
    }

    public function deleteAlbum($params) {
        $body = $this->getData();
        if(!isset($body->token)){
            $this->view->response("Campos vacios", 404);
        }else{
            if($body->token==1234){
                $borrado = $this->model->deleteAlbum($params[":ID"]);
                if($borrado == '1'){
                    $this->view->response("Album id = " . $params[":ID"] . " eliminado con éxito", 200);
                }else{
                    $this->view->response("Album id= " . $params[":ID"] . " not found", 404);
                }
            }else{
                $this->view->response("Token erróneo",404);
            }
        } 
    }
}