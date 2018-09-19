<!DOCTYPE html>
<html>
<form method="POST" action="#">
    <table border="1">
    <tr>
        <td><label><?php if (!isset($_POST['langue']) || $_POST['langue'] == 'fr') echo "Nom"; else echo "Name";?></label></td>
        <td><input type="text" name="Nom" /></td>
    </tr>
    <tr>
        <td><label><?php if (!isset($_POST['langue']) || $_POST['langue'] == 'fr') echo "Ville"; else echo "City";?></label></td>
        <td><input type="text" name="Ville" /></td>
    </tr>
    <tr>
        <td><label><?php if (!isset($_POST['langue']) || $_POST['langue'] == 'fr') echo "Pays"; else echo "Country";?></label></td>
        <td><input type="text" name="Pays" /></td>
    </tr>
    <tr>
        <td colspan="2">
        <label for="fr"><input type="radio" name="langue" value="fr" <?php if (!isset($_POST['langue']) || $_POST['langue'] == 'fr') echo "checked";?> />Français</label><br>
        <label for="en"><input type="radio" name="langue" value="en" <?php if (isset($_POST['langue']) && $_POST['langue'] == 'en') echo "checked";?> /></label>English<br>
        <input type="submit" value="OK" name="ok" />
        </td>
    </tr>
    </table>
</form>

</html>