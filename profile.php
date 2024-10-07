<?php // Check if the user is logged in, otherwise redirect to login page

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}
require 'processes/connection.php';
$sql = "SELECT * FROM accounts WHERE id = ?";
// You can access user data from the session
$user_id = $_SESSION['user_id'];
$first_name = $_SESSION['first_name'];

?>
<?php include 'components/header.php'; ?>

<h1>Welcome, <?php echo htmlspecialchars($first_name); ?>!</h1>
    <p>This is your profile page.</p>

<?php include 'components/footer.php'; ?> 