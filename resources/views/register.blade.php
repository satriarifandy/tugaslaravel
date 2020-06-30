
<html>
    <title>Form</title>
    <body>
        <h1>Buat Account Baru!</h1>
        <h4>Sign Up Form</h4>
        <form action="/welcome" method="post">

            <label for="fname">First name:</label><br>
            <br><input type="text" id="fname" name="fname"><br>

            <br><label for="lname">Last name:</label><br>
            <br><input type="text" id="lname" name="lname"><br>

            <br><label for="gender">Gender:</label><br>
            <br><input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br>

            <br><label for="nationality">Nationality:</label><br>
            <br><select id="nationality" name="nationality"><br>
                <option>Indonesian</option>
                <option>Singaporean</option>
                <option>Malaysian</option>
                <option>Australian</option>
            </select>

            <br><br><label for="bahasa">Languange Spoken:</label><br>
            <br><input type="checkbox" id="bahasa1" name="bahasa1" value="Indonesia">
            <label for="bahasa1">Bahasa Indonesia</label><br>
            <input type="checkbox" id="bahasa2" name="bahasa2" value="English">
            <label for="bahasa2">English</label><br>
            <input type="checkbox" id="other" name="other" value="Other">
            <label for="other">Other</label><br><br>

            <label for="bio">Bio:</label><br>
            <br><textarea name="bio" id="bio" cols="40" rows="10"></textarea><br><br>

            <input type="submit" value="Sign Up">
          </form>
    </body>
</html>