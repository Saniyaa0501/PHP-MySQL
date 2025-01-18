<!DOCTYPE html>
<html>
<head>
    <title>User Feedback</title>
</head>
<body>
    <form action="display_feedback.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="mobile">Mobile Number:</label>
        <input type="text" id="mobile" name="mobile" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea><br><br>
        
        <button type="submit">Submit</button>
    </form>

    <h1>Feedback Submitted</h1>
    <p><strong>Name:</strong> <?php echo htmlspecialchars($_POST['name']); ?></p>
    <p><strong>Mobile Number:</strong> <?php echo htmlspecialchars($_POST['mobile']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
    <p><strong>Message:</strong> <?php echo nl2br(htmlspecialchars($_POST['message'])); ?></p>

</body>
</html>