
<?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top.php';
?>
<div class="content">
<h3>Prosty kalkulator</h2>

<form action="<?php print(_APP_ROOT); ?>/app/calcw.php" method="post">
	<table>
	<tr>
	<td><label for="id_x">Kwota: </label></td>
	<td><input id="id_x" type="text" name="kwota" value="<?php out($form['kwota']); ?>" /></td>
	</tr><tr>
	<td><label for="id_y">Na ile lat: </label></td>
	<td><input id="id_y" type="text" name="czas" value="<?php out($form['czas']); ?>" /></td>
	</tr><tr>	
	<td><label for="id_op">Oprocentowanie: </label></td>
	<td><input id="id_op" type="text" name="oprocentowanie" value="<?php out($form['oprocentowanie']); ?>" /></td>
	</tr>
	<td><input type="submit" value="Oblicz" /></td>
	</table>
</form>

<div class="messages">

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
	echo '<h4>Wystąpiły błędy: </h4>';
	echo '<ol class="err">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php
//wyświeltenie listy informacji, jeśli istnieją
if (isset($infos)) {
	if (count ( $infos ) > 0) {
	echo '<h4>Informacje: </h4>';
	echo '<ol class="inf">';
		foreach ( $infos as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
	<h4>Wynik</h4>
	<p class="res">
<?php print($result); ?>
	</p>
<?php } ?>

</div>

</div> <!--KONIEC KONTENTU-->
<?php //dół strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>
