
<?php

$nlignes = 50;
$ncolonnes = 50;
echo '<table width="1050" height="1050" border="1" cellspacing="0" cellpadding="0" align="center">';
for ($ligne = 1; $ligne < $nlignes; $ligne++) {
echo '<tr>';
   for ($colonne=1; $colonne < $ncolonnes; $colonne++) {
      echo '<td style="width:20px;height:20px;padding:0;" rel="'.$colonne.'-'.$ligne.'">&nbsp;</td>';
   }
echo '</tr>';
}
echo '</table>';
?>  