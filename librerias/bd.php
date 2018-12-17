<?php

function errorMessage($e){
    if(!empty($e->errorInfo[1])){
        switch ($e->errorInfo[1]){
            case 1062:
                $mensaje = "Registro duplicado";
                break;
            case 1451:
                $mensaje = "Registro con elementos relacionados";
                break;
            case 123456:
                $mensaje = "Registro con elementos relacionados";
                break;
            default:
                $mensaje = $e->errorInfo[1] . ' - ' . $e->errorInfo[2];
                break;
        }
    }
    else{
        switch ($e->getCode()) {
            case 1044:
                $mensaje = "Usuario y/o password incorrecto";
                break;
            case 1049:
                $mensaje = "Base de datos desconectada";
                break;
            case 1044:
                $mensaje = "No se encuentra el servidor";
                break;
            default:
                $mensaje = $e->getCode() . ' - ' . $e->getMessage();
                break;
        }
    }
    return $mensaje;
}

function openBD(){
    /*
    $servername = "hostingmysql328.nominalia.com";
    $username = "daw2a03";
    $password = "Diesfrjox2";
    */

    $servername = "localhost:3307";
    $username = "root";
    $password = "root";

     try {
        $conn = new PDO("mysql:host=$servername;dbname=adventur3;cahrset=utf8", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully"; 
        }
     catch(PDOException $e)
        {
         echo "Connection failed: " . $e->getMessage();
        }    
    
    return $conn;
}

function closeBD(){

    return null;

}

function exeinsertUser($name, $email, $password, $repassword){
    $role = 0;
    try{
        if($name == "" ){
            throw new Exception('El campo "nombre" no puede estar vacio');
        }
        elseif( $email == ""){
            throw new Exception('El campo "email" no puede estar vacio');
        }
        elseif ($password == "") {
            throw new Exception('El campo "password" no puede estar vacio');
        }
        elseif ($repassword == "") {
            throw new Exception('El campo "re password" no puede estar vacio');
        }

        if($password !== $repassword){
            throw new Exception('Las contraseñas no coinciden');
        }

        //Encriptar contraseña en blowfish
        $password = encriptPassword($password);
        
        $conn = openBD();

        // prepare sql and bind parameters
        $sentencia = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (:name, :email, :password, :role)");
        $sentencia->bindParam(':name', $name);
        $sentencia->bindParam(':email', $email);
        $sentencia->bindParam(':password', $password);
        $sentencia->bindParam(':role', $role);
        $sentencia->execute();
    
    }
    catch(PDOException $e){
        $_SESSION['errorRegister'] = errorMessage($e);

        $login['name'] = $name;
        $login['email'] = $email;
        $login['password'] = $password;
        $login['repassword'] = $repassword;
        $_SESSION['login'] = $login;
    }
    catch (Exception $e) {
        $_SESSION['errorRegister'] = $e->getMessage();
        
        $login['name'] = $name;
        $login['email'] = $email;
        $login['password'] = $password;
        $login['repassword'] = $repassword;
        $_SESSION['login'] = $login;
    }
    
    $conn = closeBD();
   
}

function selectUsuarioByPassword($email, $password){
    try{
        if($email == "" ){
            throw new Exception('El campo "e-mail" no puede estar vacio');
        }
        elseif( $password == ""){
            throw new Exception('El campo "password" no puede estar vacio');
        }

        $password = encriptPassword($password);

        $conn = openBD();

        $sentencia = $conn->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
        $sentencia->bindParam(':email', $email);
        $sentencia->bindParam(':password', $password);
        $sentencia->execute();
        $result = $sentencia->fetch();
        
        $result2 = $sentencia->rowCount();

        if($result2 == 0){
            $_SESSION['userInfo'] = "Failed," . $email;
            throw new Exception('Usuario o password incorrecto');
        }
        elseif($result2 == 1){
            //guardar info usuario
            $_SESSION['userInfo'] = "Success," . $email;
            $_SESSION['userLoged'] = [
                "id" => $result['id'],
                "email" => $result['email'],
                "name" => $result['name'],
                "progress" => $result['progress'],
                "role" => $result['progress']
            ];
            //print_r($_SESSION['userInfo']);

        }       
    }
    catch(PDOException $e){
        $_SESSION['error'] = errorMessage($e);
    }
    catch (Exception $e) {
        $_SESSION['error'] = $e->getMessage();
    }
    $conn = closeBD();
}

function selectEnigmaByCode($enigmacode){
    try{
        $conn = openBD();

        $sentencia = $conn->prepare("SELECT * FROM enigma WHERE enigmacode = :enigmacode");
        $sentencia->bindParam(':enigmacode', $enigmacode);
        $sentencia->execute();
        $result = $sentencia->fetch();

        return  $result;
    }
    catch(PDOException $e){
        $_SESSION['error'] = errorMessage($e);
    }
    $conn = closeBD();
    
}

function encriptPassword($password){
    if (CRYPT_BLOWFISH == 1)
    {
        $password = crypt($password,'$2a$09$adventureneverforget$'); 
    }
    else
    {
        echo "Blowfish DES not supported.\n<br>";
    }

    return $password;
}

?>