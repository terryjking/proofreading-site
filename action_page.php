<form method= "GET">
    <input type="file" name="document_upload">

    //The Nane Attribute will be placed in _GET inside PHP

    <input type="submit" value ="submit">
</form>

<?php
$var = $_GET("TestCustomer1");
echo ($var); 

?>

