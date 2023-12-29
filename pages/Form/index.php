

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
            
            <input type='hidden' value='loginform' name='hiddeninp' /> 
            <table class="table1">
                <tr>
                    <td>
                        <fieldset class="fieldsetLogin">
                            <label for="userid">Enter username or number</label><br>
                            <input type="text" name="userid" id="userid" autocomplete autofocus oninput="validateUserField()" onfocusin="elemHighlight(this)" onfocusout="elemDeHighlight(this)"/>&nbsp;
                            <span id="userSpanid" ></span>
                            
                            <br><br>
                            <label for="passid">Enter password </label>
                            <a class='forgotPass' href="#">
                                Forgot Password?
                            </a>
                            <br>
                            <input type="password" name="passid" id="passid" oninput="validatePassField()" onfocusin="elemHighlight(this)" onfocusout="elemDeHighlight(this)"/>&nbsp;
                            <span id="passSpanid"></span>
                            <br><br>
                            <input type="submit" value='LogIn' name="btnid" id="btnid" onclick="onSubmitBtn()"  />

                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td>
                        <fieldset class="fieldsetSignup">
                            <a href = '/LearningPHP/pages/Form/signupForm.php'>
                                <input type="button" value='SignUp' name="signup" id="signupbtn" onclick="onSignupBtn()" />
                            </a>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td>
                        

                    </td>
                </tr>

            </table>

        </form>

    </main>

    <script src="/formProject/formscript.js"></script>
</body>
</html>