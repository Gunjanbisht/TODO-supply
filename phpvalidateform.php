<html>
    <head></head>
    <body>
        <form name="myform" action="user_form.php" method="post" onsubmit="return validate();">
            <table>
            <tr>
            <th>name</th>
            <td><input type="text" name="name" required pattern="[a-zA-Z]{3,15}$"></td>
            </tr>
            <tr>
                <th>gender:</th>
                <td><input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female</td>
            </tr>
            <tr>
                <th>birthDate</th>
                <td><input type="date" name="birthDate"></td>
            </tr>
            <tr>
                <th>mobileNo</th>
                <td><input type="number" name="mobileNo" required pattern="[0-9]{10}"></td>
            </tr>
            <tr>
                <th>emailId</th>
                <td><input type="emailId" name="emailId" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"></td>
            </tr>
            <tr>
                <th>password</th>
                <td><input type="password" name="password" required=""></td>
            </tr>
            <tr>
            <th>Confirm Password</th>
            <td><input type="password" name="cnfrmPass"></td>
            
            </tr>
            </table>  <input type="submit" name="submit" value="submit">
        </form>      
    </body>
</html>

    </body>
</html>