<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <p></p>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="POST">
    {{@csrf_field()}}

        <label for="firstname">First name:</label>
        <p></p>
        <input type="text" id="firstname" name="firstname">
        <p></p>

        <label for="lastname">Last name:</label>
        <p></p>
        <input type="text" id="lastname" name="lastname">
        <p></p>

        <label for="gender">Gender:</label>
        <p></p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>

        <p></p>
        <label for="nationality">Nationality:</label>
        <p></p>
        <select name="nationality" id="nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Thailand">Thailand</option>
            <option value="Vietnam">Vietnam</option>
        </select>
        <p></p>

        <label for="languange">Languange Spoken</label>
        <p></p>
        <input type="checkbox">
        <label for="bahasaIndoneisa">Bahasa Indonesia</label><p></p>
        <input type="checkbox">
        <label for="english">English</label><p></p>
        <input type="checkbox">
        <label for="other">Other</label><p></p>
        <p></p>

        <label for="bio">Bio :</label>
        <p></p>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
        <p></p>

        <input  type="submit" value="Submit"> 
    </form>
    
    

</body>
</html>