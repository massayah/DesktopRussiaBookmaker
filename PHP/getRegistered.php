<?php
// Testing if the user clicked on the submit button
if (isset($_POST['register'])) { 
   // Testing if the variables exist and are not empty
   if ((isset($_POST['username']) && !empty($_POST['username'])) && (isset($_POST['password']) && !empty($_POST['password'])) 
   && (isset($_POST['confirmPassword']) && !empty($_POST['confirmPassword']))) { 
      // Testing if the confirmation of the password is the same text than the password
      if ($_POST['password'] != $_POST['confirmPassword']) { 
         $erreur = 'Erreur dans la confirmation du mot de passe'; 
      } 
      else { 
         // Checking if the username is already used or not
		 $usernametest = $bdd->prepare('SELECT username FROM russia_user WHERE username = ?');
		 $usernametest->execute(array($_POST['username']));
		 $usernametestdata = $usernametest->fetch();
		 // Creating the account of the user
		 if ($usernametestdata[0] == FALSE)
		 {
			$username = $bdd->prepare('INSERT INTO russia_user (username, password, isadmin, team) VALUES (:username, :password, :isadmin, :team)');
			$username->execute(array(':username' => $_POST['username'], ':password' => md5($_POST['password']), ':isadmin' => 0, ':team' => 1));
			$username->closeCursor();
            session_start(); 
            $_SESSION['username'] = htmlspecialchars($_POST['username']); 
            header('Location: index.php'); 
            exit();
		 }			
         else { 
            $erreur = 'Ce nom d\'utilisateur est déjà pris'; 
         }
		 $usernametest->closeCursor();
      } 
   } 
   else { 
      $erreur = 'Caractères ou Taille incorrects'; 
   }  
}  
?>
