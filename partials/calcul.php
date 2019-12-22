<div class="container">
    <div class="page-header">
        <h1>Calculatrice du prix de revient des produits</h1>
    </div>
	<table ng-controller="ProdCtrl" align="center" style="border: 1px solid #57230f;" cellspacing="0" cellpadding="0">
		<tr>			
			<td colspan="6" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;" bgcolor="#57230f" height="80">
				<h4>{{"TOTAL : " + (fleurs * 1 + choux * 5 + orge * 5 + mais * 6 + cochons * 9 + pissenlit * 12 + mache * 18 + ane * 19 + oeufs * 20 + ble * 30 + lait * 35 + cire * 52 + huile_olive * 53 + pommes * 56 + essence_jasmin * 60 + essence_lavande * 63 + jasmin * 65 + agrumes * 66 + vanille * 75 + aloevera * 85 + miel * 85 + amandes * 90 + olives * 90 + peches * 100 + fsauvages * 138 + estival * 185 + lavande * 200 + cerises * 207 + panier * 220 + gel * 270 + chaussons * 280 + muffins * 300 + tarte * 460 + romentique * 525 + gateau * 680 + parfum * 1000 + huile * 1251 + creme * 2000 + savons * 2500) }} Dollars</h4>
			</td>
			<td colspan="2" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;" height="80">
				<a href="#calcul" ng-click="reload()" title="Faire un nouveau calcul" class="btn">Faire un nouveau calcul</a>
			</td>			
		</tr>
		<tr>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/agrumes.jpg" width="45" height="45" alt="agrumes"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="agrumes"><strong>Agrumes</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="agrumes" name="agrumes" id="agrumes" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>66</strong> pièce</i></td>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/aloevera.jpg" width="45" height="45" alt="aloevera"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="aloevera"><strong>Aloe Vera</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="aloevera" name="aloevera" id="aloevera" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>85</strong> pièce</i></td>
		</tr>
		<tr>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/amandes.jpg" width="45" height="45" alt="amandes"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="amandes"><strong>Amandes</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="amandes" name="amandes" id="amandes" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>90</strong> pièce</i></td>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/ane.jpg" width="45" height="45" alt="ane"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="ane"><strong>Ane</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="ane" name="ane" id="ane" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>19</strong> pièce</i></td>
		</tr>
		<tr>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/ble.jpg" width="45" height="45" alt="ble"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="ble"><strong>Blé</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="ble" name="ble" id="ble" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>30</strong> pièce</i></td>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/savons.jpg" width="45" height="45" alt="savons"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="savons"><strong>Boîte de savons</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="savons" name="savons" id="savons" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>2500</strong> pièce</i></td>
		</tr>
		<tr>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/estival.jpg" width="45" height="45" alt="estival"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="estival"><strong>Bouquet estival</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="estival" name="estival" id="estival" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>185</strong> pièce</i></td>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/romentique.jpg" width="45" height="45" alt="romentique"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="romentique"><strong>Bouquet romentique</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="romentique" name="romentique" id="romentique" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>525</strong> pièce</i></td>
		</tr>
		<tr>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/cerises.jpg" width="45" height="45" alt="cerises"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="cerises"><strong>Cerises</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="cerises" name="cerises" id="cerises" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>207</strong> pièce</i></td>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/chaussons.jpg" width="45" height="45" alt="chaussons"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="chaussons"><strong>Chaussons</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="chaussons" name="chaussons" id="chaussons" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>280</strong> pièce</i></td>
		</tr>
		<tr>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/choux.jpg" width="45" height="45" alt="choux"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="choux"><strong>Choux</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="choux" name="choux" id="choux" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>5</strong> pièce</i></td>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/cire.jpg" width="45" height="45" alt="cire"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="cire"><strong>Cire</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="cire" name="cire" id="cire" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>52</strong> pièce</i></td>
		</tr>
		<tr>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/cochons.jpg" width="45" height="45" alt="cochons"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="cochons"><strong>Cochons</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="cochons" name="cochons" id="cochons" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>9</strong> pièce</i></td>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/creme.jpg" width="45" height="45" alt="creme"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="creme"><strong>Crème de miel</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="creme" name="creme" id="creme" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>2000</strong> pièce</i></td>
		</tr>
		<tr>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/essence_jasmin.jpg" width="45" height="45" alt="essence_jasmin"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="essence_jasmin"><strong>Essence de jasmin</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="essence_jasmin" name="essence_jasmin" id="essence_jasmin" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>60</strong> pièce</i></td>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/essence_lavande.jpg" width="45" height="45" alt="essence_lavande"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="essence_lavande"><strong>Essence de lavande</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="essence_lavande" name="essence_lavande" id="essence_lavande" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>63</strong> pièce</i></td>
		</tr>
		<tr>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/fleurs.jpg" width="45" height="45" alt="fleurs"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="fleurs"><strong>Fleurs sauvages</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="fleurs" name="fleurs" id="fleurs" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>1</strong> pièce</i></td>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/fsauvages.jpg" width="45" height="45" alt="fsauvages"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="fsauvages"><strong>Fleurs sauvages</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="fsauvages" name="fsauvages" id="fsauvages" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>138</strong> pièce</i></td>
		</tr>
		<tr>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/gateau.jpg" width="45" height="45" alt="gateau"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="gateau"><strong>Gâteau aux fruits</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="gateau" name="gateau" id="gateau" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>680</strong> pièce</i></td>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/gel.jpg" width="45" height="45" alt="gel"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="gel"><strong>Gel à l'aloe vera</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="gel" name="gel" id="gel" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>270</strong> pièce</i></td>
		</tr>
		<tr>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/huile_olive.jpg" width="45" height="45" alt="huile_olive"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="huile_olive"><strong>Huile d'olive</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="huile_olive" name="huile_olive" id="huile_olive" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>53</strong> pièce</i></td>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/huile.jpg" width="45" height="45" alt="huile"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="huile"><strong>Huile parfumée</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="huile" name="huile" id="huile" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>1251</strong> pièce</i></td>
		</tr>
		<tr>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/jasmin.jpg" width="45" height="45" alt="jasmin"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="jasmin"><strong>Jasmin</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="jasmin" name="jasmin" id="jasmin" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>65</strong> pièce</i></td>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/lait.jpg" width="45" height="45" alt="lait"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="lait"><strong>Lait</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="lait" name="lait" id="lait" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>35</strong> pièce</i></td>
		</tr>
		<tr>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/lavande.jpg" width="45" height="45" alt="lavande"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="lavande"><strong>Lavande</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="lavande" name="lavande" id="lavande" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>200</strong> pièce</i></td>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/mache.jpg" width="45" height="45" alt="mache"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="mache"><strong>Mâche</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="mache" name="mache" id="mache" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>18</strong> pièce</i></td>
		</tr>
		<tr>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/mais.jpg" width="45" height="45" alt="mais"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="mais"><strong>Mais</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="mais" name="mais" id="mais" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>6</strong> pièce</i></td>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/miel.jpg" width="45" height="45" alt="miel"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="miel"><strong>Miel</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="miel" name="miel" id="miel" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>85</strong> pièce</i></td>
		</tr>
		<tr>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/muffins.jpg" width="45" height="45" alt="muffins"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="muffins"><strong>Muffins</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="muffins" name="muffins" id="muffins" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>300</strong> pièce</i></td>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/oeufs.jpg" width="45" height="45" alt="oeufs"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="oeufs"><strong>Oeufs</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="oeufs" name="oeufs" id="oeufs" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>20</strong> pièce</i></td>
		</tr>
		<tr>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/olives.jpg" width="45" height="45" alt="olives"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="olives"><strong>Olives</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="olives" name="olives" id="olives" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>90</strong> pièce</i></td>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/orge.jpg" width="45" height="45" alt="orge"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="orge"><strong>Orge</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="orge" name="orge" id="orge" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>5</strong> pièce</i></td>
		</tr>
		<tr>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/panier.jpg" width="45" height="45" alt="panier"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="panier"><strong>Panier garnie</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="panier" name="panier" id="panier" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>220</strong> pièce</i></td>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/parfum.jpg" width="45" height="45" alt="parfum"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="parfum"><strong>Parfum floral</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="parfum" name="parfum" id="parfum" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>1000</strong> pièce</i></td>
		</tr>
		<tr>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/peches.jpg" width="45" height="45" alt="peches"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="peches"><strong>Pêches</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="peches" name="peches" id="peches" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>100</strong> pièce</i></td>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/pissenlit.jpg" width="45" height="45" alt="pissenlit"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="pissenlit"><strong>Pissenlit</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="pissenlit" name="pissenlit" id="pissenlit" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>12</strong> pièce</i></td>
		</tr>
		<tr>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/pommes.jpg" width="45" height="45" alt="pommes"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="pommes"><strong>Pommes</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="pommes" name="pommes" id="pommes" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>56</strong> pièce</i></td>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/tarte.jpg" width="45" height="45" alt="tarte"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="tarte"><strong>Tarte</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="tarte" name="tarte" id="tarte" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>460</strong> pièce</i></td>
		</tr>
		<tr>
			<td width="45" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><img src="img/vanille.jpg" width="45" height="45" alt="vanille"></td>
			<td width="175" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><label for="vanille"><strong>Vanille</strong></label></td>
			<td width="260" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><input type="number" ng-model="vanille" name="vanille" id="vanille" ng-minlength="1" ng-maxlength="4"></td>
			<td width="160" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;"><i><strong>75</strong> pièce</i></td>
			<td colspan="4" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;" valign="middle"><a href="#calcul" ng-click="reload()" title="Faire un nouveau calcul" class="btn" width="100%">Faire un nouveau calcul</a></td>
		</tr>
		<tr>
			<td colspan="8" align="center" style="border-right: 1px solid #57230f;border-bottom: 1px solid #57230f;border-top: 1px solid #57230f;" bgcolor="#57230f" height="80">
				<h4>{{"TOTAL : " + (fleurs * 1 + choux * 5 + orge * 5 + mais * 6 + cochons * 9 + pissenlit * 12 + mache * 18 + ane * 19 + oeufs * 20 + ble * 30 + lait * 35 + cire * 52 + huile_olive * 53 + pommes * 56 + essence_jasmin * 60 + essence_lavande * 63 + jasmin * 65 + agrumes * 66 + vanille * 75 + aloevera * 85 + miel * 85 + amandes * 90 + olives * 90 + peches * 100 + fsauvages * 138 + estival * 185 + lavande * 200 + cerises * 207 + panier * 220 + gel * 270 + chaussons * 280 + muffins * 300 + tarte * 460 + romentique * 525 + gateau * 680 + parfum * 1000 + huile * 1251 + creme * 2000 + savons * 2500)  }} Dollars</h4>
			</td>			
		</tr>
	</table>		
</div>