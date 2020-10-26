<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel=stylesheet type="text/css" href="css/format.css">
<title>PHP Test Page</title>
</head>

<?php include "textauswertung.php";  ?>

<body>


<form method="post" name="textform" action="index.php">

<textarea name="inputtext" cols="50" rows="10">

<?php

if (isset($_POST['inputtext']))
    {
       echo $_POST['inputtext'];
    }
    else
    {
      echo"Besonders im Hotel- und Gastst�ttengewerbe ist man auf die Politik nicht mehr gut zu sprechen. �Nach dem Regelungschaos und dem Frust bei Hoteliers wie G�sten ist es v�llig inakzeptabel und nicht nachvollziehbar, dass sich die Bundesl�nder nicht darauf einigen konnten, die Beherbergungsverbote auszusetzen�, sagte Guido Z�llick, Pr�sident des Deutschen Hotel- und Gastst�ttenverbandes (Dehoga). Die Landesregierungen des Saarlands und Sachsens, sowie Gerichte in Baden-W�rttemberg und Niedersachsen hoben das Beherbergungsverbot innerhalb der Landesgrenzen mittlerweile auf. In Schleswig-Holstein wurde ein entsprechender Eilantrag dagegen vom Oberverwaltungsgericht abgelehnt.

Auch die Sperrstunden und Kontaktbeschr�nkungen bei Erreichen bestimmter Schwellenwerte treffen die Branche. Bayerns Ministerpr�sident S�der beispielsweise hatte erkl�rt, dass die Sperrstunde von 23 auf 22 Uhr vorverlegt werde, wenn die Zahl der Neuinfektionen in Regionen auf mehr als 50 pro 100.000 Einwohner in einer Woche steige. �Die Ma�nahmen sind existenzgef�hrdend�, sagte Z�llick. Er forderte im Gegenzug deutlich mehr �berbr�ckungshilfen: �Umso wichtiger ist jetzt, dass die Hilfen f�r das Gastgewerbe verl�ngert, ausgeweitet und nachhaltig verbessert werden";
    };

?>


</textarea>
<br>


<!-- ------------------------------------------------------------------------------ -->
<textarea name="inputtext2" cols="50" rows="10">
<?php
if (isset($_POST['inputtext2']))
    {
       echo $_POST['inputtext2'];
    }
    else
    {
      echo"";
    };
?>
</textarea>
<br>
<input type="submit" value="Nachricht absenden">
</form>
<?php
  if (isset($_POST['inputtext'])) { ShowStatisticTable($_POST['inputtext']);}
  if (isset($_POST['inputtext2'])) {ShowStatisticTable($_POST['inputtext2']);}

?>

</body>
</html>
