<?php
$link = 'http://'.$_SERVER['HTTP_HOST'] . dirname($_SERVER["REQUEST_URI"]);
$link = str_replace("\\", "/", $link);
$link_sub = $link . '/files/inscription_sheet.docx';
$link_planning = $link . '/files/planning_adult_year.pdf';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        
        <?php include("html/meta.html"); ?>

        <title>Inscription aux ateliers du Pôle Simon Le Franc</title>
    </head>

    <body>

        <?php include("html/header.php"); ?>

        <div id="container">

            <div id="corps">

                <table style="width: 100%;">
                    <tr>
                        <td style="width: 50%;"><img style="width: 200px; margin-top: 10px; margin-left: -3px; margin-bottom: 10px;" src="resources/mairiedeparis.jpg" alt="Mairie de Paris" /></td>
                        <td style="width: 50%; margin-top: 15px;"><p style="padding: 0;float: right;margin-right: 10px;">Étape 4/4</p></td>
                    </tr>
                </table>
                <h1>Attribution</h1>
                <p>Prenez le temps d’aller plus loin pour permettre de faciliter votre inscription / vos inscriptions :</p>
                <ul>
                    <li>Je remplis ma <a href="<?php echo $link_sub; ?>" target="_blank">fiche d’inscription en ligne</a> (<b>une fiche d’inscription par personne</b>)</li>
                    <li>Je calcule mon Quotient Familial (<b>Vous devez absolument apporter votre justificatif le jour de l’inscription</b>)</li>
                    <li>Je télécharge le <a href="<?php echo $link_planning; ?>" target="_blank">planning des ateliers</a></li>
                </ul>
                <center><p style="font-size: 1.2em; font-weight: bold;">Toute l’équipe vous remercie et vous accueillera avec plaisir pour cette nouvelle saison </p></center>
            </div>

            <?php include("html/footer.html"); ?>

        </div>

    </body>

</html>