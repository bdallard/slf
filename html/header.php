<div id="header">
    <center>
        <?php
            if (isset($isSubscribing) && $isSubscribing)
            {
                echo '<table style="margin-left:auto; margin-right:auto;width: 760px;">
                        <tr style="font-size: 1.7em;color: white;text-align: center;">
                            <td style="width: 25%;">1</td>
                            <td style="width: 25%;">2</td>
                            <td style="width: 25%;">3</td>
                            <td style="width: 25%;">4</td>
                        </tr>
                        <tr style="font-size: 1.4em;color: white;text-align: center;">
                            <td>Accueil</td>
                            <td>Coordonnées</td>
                            <td>Placement</td>
                            <td>Attribution</td>
                        </tr>
                    </table>';
            }
            else
            {
                echo '<p style="font-size: 1.9em;color:white;display: inline-block;margin-top: 20px;">Pôle Simon Le Franc</p>';
            }
        ?>
    </center>
</div>