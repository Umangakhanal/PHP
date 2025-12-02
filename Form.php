<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form</title>
</head>
<body>

    <h2>Registration Form</h2>

    <form  action="abc.php" method="post">

        <label for="name">Full Name:</label><br>
        <input type="text" id="name" name="name" ><br><br>
        <label  for ="password">Password:</label><br>
        <input type="password" id="password" name="password" ><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" ><br><br>

        <label for="contact">Contact Number:</label><br>
        <input type="tel" id="contact" name="contact" placeholder="98XXXXXXXX" ><br><br>

        <label>Gender:</label><br>
        <input type="radio" id="male" name="gender" value="Male" >
        <label for="male">Male</label><br>

        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label><br>

        <input type="radio" id="other" name="gender" value="Other">
        <label for="other">Other</label><br><br>

        <label>Hobbies:</label><br>
        <input type="checkbox" id="reading" name="hobbies" value="Reading">
        <label for="reading">Reading</label><br>

        <input type="checkbox" id="sports" name="hobbies" value="Sports">
        <label for="sports">Sports</label><br>

        <input type="checkbox" id="music" name="hobbies" value="Music">
        <label for="music">Music</label><br><br>

        <label for="country">Country:</label><br>
        <select id="country" name="country" >
            <option value="">-- Select Country --</option>
            <option value="Nepal">Nepal</option>
            <option value="India">India</option>
            <option value="China">China</option>
            <option value="Bhutan">Bhutan</option>
        </select>
        <br><br>

    <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4"></textarea><br><br>

        
        <button type="submit">Submit</button>

    </form>

</body>
</html>
