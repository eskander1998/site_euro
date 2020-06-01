
<?php

include('db.php');

if (isset($_POST['facture'])) {


  $reservation =  $_POST['reservation'];
  $nom_client = $_POST['nom_client'];
  $agent = $_POST['agent'];
  $date = $_POST['date_facture'];
  $lieu = $_POST['lieu'];
  
  
  $query = "INSERT INTO facture(id_reservation,nom_client,agent, date_facture,lieu) VALUES ('$reservation','$nom_client','$agent','$date','$lieu')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    echo "<script type = \"text/javascript\">
                     alert(\"Erreur\");
                     window.location = (\"gestionfacture.php\")
                      </script>";
  } else
  {
    echo "<script type = \"text/javascript\">
                     alert(\"Facture ajouté avec succés au nom de '$nom_client' pour la réservation n° $reservation\");
                     window.location = (\"gestionfacture.php\")
                      </script>";
  }

  $_SESSION['message'] = 'Facture ajouté avec succés ';
  $_SESSION['message_type'] = 'success';

}

?>
