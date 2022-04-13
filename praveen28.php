<?php

?>
<html>
<body bgcolor="lightgreen">
<form action="newpage1.php" method="POST">
    Username:<input type="text" name="user"><br><br>
    Password:&nbsp;<input type="password" name="pass"><br><br>
    Gender : <input type="radio" name="r" value="Male"> Male
           : <input type="radio" name="r" value="female">Female<br><br>
    Language:1. <input type="checkbox" name="c1" value ="PHP">PHP
            : 2. <input type="checkbox" name="c2" value="PYTHON">PYTHON<br><br>
    Department:
    <select name="dept">
        <option value="Computer Dept">Computer Dept.</option>
        <option value="Civil Dept.">Civil Dept.</option>
        <option value="Mechanical Dept.">Mechanical Dept.</option>

</select>  <br><br> 
     
            <input type="submit" value="register">

</form>

</body>
</html>