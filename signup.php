<?php include 'components/header.php'; ?>
<h1>Sign Up</h1>
<form action="processes/handleRegister.php" method="POST">
    <label for="first-name">First Name:</label>
    <input type="text" id="first-name" name="first-name" placeholder="Enter your first name" required />

    <label for="last-name">Last Name:</label>
    <input type="text" id="last-name" name="last-name" placeholder="Enter your last name" required />

    <label>Gender:</label>
    <input type="radio" id="male" name="gender" value="Male">
    <label for="male">Male</label>

    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">Female</label>

    <input type="radio" id="other" name="gender" value="Other">
    <label for="other">Other</label>

    <label for="birthday">Birthday:</label>
    <input type="date" id="birthday" name="birthday" placeholder="Select your birthdate" required />

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter your email" required />

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter your password" required />

    <label for="confirm-password">Confirm Password:</label>
    <input type="password" id="confirm-password" name="confirm-password" placeholder="Re-enter your password" required />

    <input type="submit" value="Register">
</form>
<?php include 'components/footer.php'; ?>