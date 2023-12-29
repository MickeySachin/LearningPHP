


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/formProject/formstyles.css" rel="stylesheet" />
</head>
<body>
    
    <main>

        <form class='form1' action='formAction.php' method='post'>
            
            <input type='hidden' value='signupform' name='hiddeninp' /> 
            
            <table class="table1">
                <tr>
                    <td>
                        <fieldset class="fieldsetLogin">
                            <label for="userid">Enter username</label><br>
                            <input type="text" name="userid" id="userid" autocomplete autofocus oninput="validateUserField()" onfocusin="elemHighlight(this)" onfocusout="elemDeHighlight(this)"/>&nbsp;
                            <span id="userSpanid" ></span>
                            
                            <br><br>
                            <label for="passid">Enter password </label>
                            <br>
                            <input type="password" name="passid" id="passid" oninput="validatePassField()" onfocusin="elemHighlight(this)" onfocusout="elemDeHighlight(this)"/>&nbsp;
                            <span id="passSpanid"></span>
                            <br><br>

                            <label for="passid">Confirm password </label>
                            <br>
                            <input type="password" name="cpassid" id="cpassid" oninput="validatePassField()" onfocusin="elemHighlight(this)" onfocusout="elemDeHighlight(this)"/>&nbsp;
                            <br><br>
                            
                            <input type="submit" value='SignUp' name="signup" id="signupbtn" onclick="onSignupBtn()" />
                        </fieldset>
                    </td>
                </tr>

            </table>

        </form>

    </main>

    <script src="/formProject/formscript.js"></script>

</body>
</html>

