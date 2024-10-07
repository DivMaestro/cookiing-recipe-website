
    <?php include 'components/header.php'; ?>
    <h1>Sign In</h1>
    <form action="processes/handleLogin.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter your email" required />

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter your password" required />
    
    <input type="checkbox" id="remember-password" name="remember-password">
    <label for="remember-password">Remember Password</label>
    <input type="submit" value="Log In">
    </form>
    <?php include 'components/footer.php'; ?>