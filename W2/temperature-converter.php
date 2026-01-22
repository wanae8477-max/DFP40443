<DOCTYPE html>
<html>
    <head>
        </head>
        <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>From</label>
        <select name="form">
        <option value = "Select">Select</option>
        <option value = "celsious">Celsious (C)</option>
</select>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>From</label>
        <select name="form">
        <option value = "Select">Select</option>
        <option value = "fahtenheit">Fahtenheit (F)</option>
</select>
            

        <label>Value to Convert</label>
        <input name="convertVal">
        <input type="submit" value="Calculate"> 

    </form>
</body>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $convert = $_POST['convertVal'];

    $Result = $convert * (9/5) + 32 ;
}
?>

<?php
echo $Result;
?>
</html>