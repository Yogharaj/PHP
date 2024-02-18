<form method="post" action="">
        Username: <input type="text" name="username" required><br>
        Email: <input type="email" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username_pattern = "/^[a-zA-Z0-9]+$/";
    $email_pattern = "/^\S+@\S+\.\S+$/";
    if (!preg_match($username_pattern, $username)) {
        echo "Invalid username. Username can only contain letters and numbers.";
    } elseif (!preg_match($email_pattern, $email)) {
        echo "Invalid email address.";
    } else {
        echo "Form submitted successfully!";
    }
}
?>