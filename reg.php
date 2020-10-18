<!DOCTYPE html>
<html>
<body>

<form action="loginaction/result.php" method="post">  
    <fieldset>			
			<legend align="left"><b> REGISTRATION</b></legend>
<table style="width:100 ">

			
    <tr>
    <td><label for='fram'>First Name: </label></td>
    <td><input type='text' id='textbox' ></td>    
    </tr> 
   </table>
   <hr>
    <tr>
    <td><label for='fram'>Email: </label></td>
    <td><input type='text' id='textbox1' required></td>    
    </tr>
    <hr>
    <tr>
    <td><label for='fram'>User Name: </label></td>
    <td><input type='text' id='textbox2'></td>    
    </tr>
    <hr>
    <tr>
    <td><label for='fram'>Password: </label></td>
    <td><input type='password' id='textbox3'></td>    
    </tr>
    <hr>

    <tr>
    <td><label for='fram'>Confirm Password: </label></td>
    <td><input type='password' id='textbox4'></td>    
    </tr>
    <hr>

    <fieldset>
    <legend align="left"> Gender </legend>
    <table style="width:100 ">
    <tr>
    <td><input type='radio' id='Male' name="Gender" valu='Male'>Male</td>
    <td><input type='radio' id='Female' name="Gender" valu='Female'>Female</td>
    <td><input type='radio' id='Others' name="Gender" valu='Others'>Others</td>
    </fieldset>
    </tr>
    </table>
    </fieldset>
<br>

    <fieldset>
    <legend align="left"> Date Of Birth </legend>
    <table style="width:100 ">
    <tr>
    <td><input type="date"><br></td>
    </fieldset>
    </tr>
</table>
</fieldset>
<hr>
    <tr>
    <td><input type='submit' ></td>
    <td><input type='reset' ></td>    
    </tr>
</table>
    </fieldset>
</body>
</html>