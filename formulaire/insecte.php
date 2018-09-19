<!DOCTYPE html>
<?php
extract($_POST);
if (isset($fourmi_x))
    echo substr(array_keys($_POST)[0], 0, strlen(array_keys($_POST)[0]) - 2);
if (isset($mouche_x))
    echo substr(array_keys($_POST)[0], 0, strlen(array_keys($_POST)[0]) - 2);
if (isset($papillon_x))
    echo substr(array_keys($_POST)[0], 0, strlen(array_keys($_POST)[0]) - 2);
?>
<form method="POST" action="#">
<input type="image" name="fourmi" src="images/fourmi.ico" onclick="form.submit()" />
<input type="image" name="mouche" src="images/mouche.ico" onclick="form.submit()" />
<input type="image" name="papillon" src="images/papillon.ico" onclick="form.submit()" />
</form>