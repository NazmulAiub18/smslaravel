<!DOCTYPE html>

<html>
<head>
    <title>Registration</title>
</head>
<body>
    
<table width="80%" align="center" cellspacing="0" cellpadding="10" border="1">
    <tr>
        <td valign="middle" align="center" height="70">  
                
            <img height="48" align="centre" src="image/logo.png">
                    
        </td>
    </tr>
    <tr>
        <td align="center">

<form method="post" align="left" action="registration">
<fieldset align="middle" class="field_set">
            <legend>REGISTRATION</legend>
            
        <br>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Full Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :

        <input type="text" name="name" placeholder="Enter your name"><br><br>

        Father's name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :

        <input type="text" name="fathername" placeholder="Enter your father's name"><br><br>

        Mother's name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :

        <input type="text" name="mothername" placeholder="Enter your mother's name"><br><br>

        Password    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:

        <input type="password" name="password" placeholder="Enter a password"><br><br>

        Confirm Password &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:
        <input type="password" name="cpassword" placeholder="Confirm password"><br><br>

        Email   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:

        <input type="text" name="email" placeholder="Enter a mail address"><br><br>
        Date of Birth &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :

        <input type="text" name="dob" placeholder="dd-mm-yyyy"><br><br>


        Address          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:

        <input type="text" name="address" placeholder="Enter Your address"><br><br>

        Select Type :&nbsp&nbsp&nbsp&nbsp&nbsp

                <select name="type">

                        <option value="teacher">Teacher</option>
                        <option value="student">Student</option>

                </select>

        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp



        Select class: &nbsp&nbsp&nbsp&nbsp&nbsp
                     <select name="class">
                        <option value="None">None</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>

                </select><br><br>
                   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 

                   Select your Image:
                   <input type="file" name="image"><br><br>


         Gender &nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp 

                 <input type="radio" name="gender" value="male">Male &nbsp &nbsp
                 <input type="radio" name="gender" value="female">Female &nbsp &nbsp 
                 <input type="radio" name="gender" value="other">Other <br><br>

                 
        
        <input type="submit" name="submit" align="left" value="Register"><br><br> Already have an account?<a href="login">Login</a>

        
        </fieldset>
    </form>
    </td>
    </tr>
    <tr>
        <td align="center">
            Copyright &copy; 2019 (Nazmul | Raju | Mustafijur)
        </td>
    </tr>
</table>
</body>
</html>