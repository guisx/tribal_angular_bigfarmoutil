<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
<script src="js/jquery-ui.min.js"></script>
<script src="js/mapper.js"></script>
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Mapper</h1>
        </div>        
    </div>
    <div class="row">

        <div class="list" id="list">
            <img src="http://placehold.it/63x84" class="item" id="i1" />
            <img src="http://placehold.it/84x63" class="item" id="i2" />
            <img src="http://placehold.it/84x84" class="item" id="i3" /> 
            <img src="http://placehold.it/84x105" class="item" id="i4" /> 
            <img src="http://placehold.it/105x84" class="item" id="i5" /> 
            <img src="http://placehold.it/105x105" class="item" id="i5" /> 
            <img src="img/trash.png" alt="trash" width="100" height="100" id="trash" />
        </div>
        <?php
            $passage_ligne = "\n";
            $nlignes = 50;
            $ncolonnes = 50;
            echo '<table class="depot" id="depot" width="1000" height="1000" border="1" cellspacing="0" cellpadding="0" align="center">'.$passage_ligne;
            for ($ligne = 1; $ligne < $nlignes; $ligne++) {
                echo $passage_ligne.'<tr>'.$passage_ligne;
                for ($colonne=1; $colonne < $ncolonnes; $colonne++) {
                    if($colonne == 10 || $colonne == 20 || $colonne == 30 || $colonne == 40) $bdr = 'border-right-color:red;'; else $bdr = '';
                    if($ligne == 10 || $ligne == 20 || $ligne == 30 || $ligne == 40) $bdb = 'border-bottom-color:red;'; else $bdb = '';
                    echo '<td class="cellule" style="'.$bdr.''.$bdb.'" rel="'.$colonne.'-'.$ligne.'">&nbsp;</td>';
                }
                echo $passage_ligne.'</tr>'.$passage_ligne;
            }
            echo '</table>'.$passage_ligne;
        ?>  

    </div>
</div>