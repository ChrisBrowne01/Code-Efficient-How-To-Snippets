<!DOCTYPE html>
<html>
    <body>
        <h1>Submitted Form Data</h1>
        <h2>Your input was received as:</h2>
        <div class="output"><?php echo "subject=" . $_POST["subject"] . "&topic=" . $_POST["topic"] . "&chapter=" . $_POST["chapter"] ?></div>
        <p>The server has processed your input and returned this answer.</p>
