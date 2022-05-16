<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="Zona Privada"');
    header('HTTP/1.0 401 Unauthorized');
    print 'Lo Siento, credenciales incorrectas.';
    exit;
} else {

if (isset($_SERVER['PHP_AUTH_USER'])=='root_urian' && ($_SERVER["PHP_AUTH_PW"] =='Desarrollo2022.*')) {

    include 'conexion.php';
    $pdo = new Conexion();

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['id']))
    {

        $sql = $pdo->prepare("SELECT id, cod_vcard, nombre, empresa FROM myclientes WHERE id=:id");
        $sql->bindValue(':id', $_GET['id']);
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        header("HTTP/1.1 200 OK");
        echo json_encode($sql->fetchAll());
        exit;

    }else{
        $sql = $pdo->prepare("SELECT id, cod_vcard, nombre, empresa FROM myclientes");
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        header("HTTP/1.1 200 OK");
        echo json_encode($sql->fetchAll());
        exit;
    }
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
}

if($_SERVER['REQUEST_METHOD'] == 'PUT'){
    
}

if($_SERVER['REQUEST_METHOD'] == 'DELETE'){

    $sql = "DELETE FROM myclientes WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
    header("HTTP/1.1 200 OK");
    exit;
}   

header("HTTP/1.1 400 Bad Request");


}else{
    header('WWW-Authenticate: Basic realm="Zona Privada"');
    header('HTTP/1.0 401 Unauthorized');
    print 'Lo Siento, credenciales incorrectas.';
    exit;
}

}
?>