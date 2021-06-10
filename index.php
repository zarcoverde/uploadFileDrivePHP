<?php
/* =============================================
Developer: John Fredy Urrego Urrego
Created: Created: 10-06-2021
Author: <a href='http://www.divergente.net.co'/> Divergente Soluciones Informaticas s.a.s </a>
Copyright (c) 2020 Divergente Soluciones Informaticas S.A.S
============================================== */

/* === Referencia Api Gloogle Drive === */
include './api-google/vendor/autoload.php';
/* === Referenciamos credenciales generadas en https://console.cloud.google.com/ === */
putenv('GOOGLE_APPLICATION_CREDENTIALS=uploadfiledrive-316414-8f2589b72f5e.json');
/* === Creamos un objeto de la clase Google_Client que fue instanciada === */
$obj_client = new Google_Client();
/* === Definimos el tipo de crendenciales que vamos a usar === */
$obj_client->useApplicationDefaultCredentials();
/* === Indicamos que vamos a ingresar a la dirección de autenticación === */
$obj_client->setScopes(['https://www.googleapis.com/auth/drive.file']);
try {
    /* === Creamos un objeto de la clase Google_Service_Drive para indicar donde nos estamos autenticando === */
    $obj_service = new Google_Service_Drive($obj_client);
    /* === Imagen que vamos a cargar === */
    $file_path = "bullterrier-2.jpg";
    /* === Detalles archivo === */
    $obj_file = new Google_Service_Drive_DriveFile();
    /* === Nombre con el que vamos a guardar el archivo === */
    $obj_file->setName($file_path);
    /* === Indicar donde lo vamos a guardar === */
    $obj_file->setParents(["1mpsxpzowkzzZ3Cfos0NlLgy3AgnklhzV"]);
    /* === Descripción archivo === */
    $obj_file->setDescription('Archivo cargado desde PHP');
    /* === Tipo de archivo === */
    $obj_file->setMimeType('image/png');
    /* === Enviar archivo === */
    $result = $obj_service->files->create(
        $obj_file,
        [
            'data' => file_get_contents($file_path),
            'mimeType' => 'image/png',
            'uploadType' => 'media'
        ]
    );
    /* === Imprime resultado === */
    echo '<a href="https://drive.google.com/open?id=' . $result->id . '" target="_blank">' . $result->name . '</a>';
} catch (Google_Service_Exception $gs) {
    /* === Capturamos error api google === */
    $mensaje = json_decode($gs->getMessage());
    echo $mensaje->error->message();
} catch (Exception $e) {
    /* === Capturamos error general de PHP === */
    echo $e->getMessage();
}
