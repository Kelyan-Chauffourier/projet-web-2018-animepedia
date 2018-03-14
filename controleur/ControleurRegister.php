<?php
/**
 * Created by PhpStorm.
 * User: max77
 * Date: 13/02/2018
 * Time: 11:27
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/configuration.php';
require_once MODELEUTILISATEUR;
require_once UTILISATEURDAO;

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['buttonRegister'])) { //user registering

        try{
            $utilisateurDAO = new UtilisateurDAO();

            $username = $_POST['registerUsername'];
            $email = $_POST['registerEmail'];
            $password = password_hash($_POST['registerPassword'], PASSWORD_BCRYPT);

            $_SESSION['username'] = $_POST['registerUsername'];
            $_SESSION['email'] = $_POST['registerEmail'];

            $utilisateur = new Utilisateur(0, $username, $password, $email, 2,"../img/profil/base-profile.png","");

            if(!$utilisateurDAO->estExistant($utilisateur))
            {
                if($utilisateurDAO->ajouterUnUtilisateur($utilisateur))
                {
                    $_SESSION['logged_in'] = true; // So we know the user has logged in
                    $_SESSION['message'] = "";
                    header("location: " . SITE . "home");
                }
                else
                {
                    $_SESSION['message'] = "Une erreur c'est produite durant l'enregistrement";
                    header("location: " . SITE . "register");

                }
            }
            else
            {
                $_SESSION['message'] = 'Pseudo ou email deja utilisé';
                header("location: " . SITE . "register");
            }
        }
        catch(Throwable $e) {
            $trace = $e->getTrace();
            echo $e->getMessage().' in '.$e->getFile().' on line '.$e->getLine().' called from '.$trace[0]['file'].' on line '.$trace[0]['line'];
        }

    }
}

