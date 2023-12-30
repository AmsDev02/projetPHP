<?php
session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $email = $_POST["email"];
        $password = $_POST["password"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $matricule =$_POST["matricule"];
        
        $servername = "localhost";
        $username = "root";
        $password_db = ""; 
        $dbname = "creation_compte";

        $conn = new mysqli($servername, $username, $password_db, $dbname);

      
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

    
        $sql = "SELECT * FROM user WHERE email = '$email'  password = '$password' nom = '$nom' prenom = '$prenom' matricule ='$matricule'";
        $result = $conn->query($sql);

        
        if ($result->num_rows > 0) {
            
            $_SESSION['email']=$email;
            $_SESSION['nom']=$nom;
            $_SESSION['prenom']=$prenom;
            $_SESSION['matricule']=$matricule;
            $_SESSION['password']=$password;
            $_SESSION['connected']= True;
            header('Location:accueil.php');
            
        } else {
            
            echo "<script>alert('Identifiants incorrects');</script>";
        }

        $conn->close();
    }
?>
