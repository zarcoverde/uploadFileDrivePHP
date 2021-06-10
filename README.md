# UploadFileDrivePHP

_Ejemplo para cargar archivos en google drive con PHP_

## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._

<h4>Instalación en windows (servidor local xampp)</h4>
<hr>
<ol>
<li>Clonar el repositorio en la carpeta c:\xampp\htdocs para esto abra una terminal y ejecute el siguiente comando git: git clone "URL que acabas de copiar, al final tendras una carpeta llamada <strong>“uploadFileDrivePHP”</strong>, a la cual podrás acceder desde el navegador como: http://localhost/uploadFileDrivePHP/</li>
<li>Vista web: http://localhost/uploadFileDrivePHP/index.php</li>
</ol>

### Pre-requisitos 📋

_PHP 7.4+_
_Apache 2.4+_
_google-api-php-client_
_Cuenta google drive_
_Certificado de seguridad web_

### Instalación 🔧

_Configuración requerida_

_Imgresa a <li>Sitio web: http://console.cloud.google.com</li> crear proyecto que nos permita acceder a los archivos de google drive_
_Selecionar proyecto, en el menu selecionar Api y Servicios -> panel -> biblioteca (Selecionamos Google Drive API)_
_Habilitar api_
_Selecionar Credenciales y damos click en CREAR CREDENCIALES, selecionamos cuenta de servicio y creamos una cuenta para aceder desde php_
_Selecionar cuenta creada para agregar clave, indicamos que sera de tipo JSON la cual sera la clave privada para usar en php y subir los archivos a google drive_
_Habilitar con la misma cuenta que tenemos en google drive (Crear carpeta)_

## Construido con 🛠️

* [PHP](https://www.php.net/) - El lenguaje de programación usado
* [Apache](https://apache.org/) - Servidor web
* [CURL](https://curl.se/docs/caextract.html) - Usado para generar certificado de seguridad web

## Autores ✒️

* **John Fredy Urrego Urrego** - [zarcoverde](https://github.com/zarcoverde)

## Licencia 📄

Este proyecto está bajo la Licencia (MIT) - mira el archivo <code>LICENSE</code> para más detalles
---
⌨️ con ❤️ por [zarcoverde](https://github.com/zarcoverde) 😊
