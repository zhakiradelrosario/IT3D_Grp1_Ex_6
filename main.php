<?php

$shouldRedirect = true;
if ($shouldRedirect) {
    header('Location: http://localhost:8080/Ex6/form.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect Example</title>
</head>
<body>
    <main>
        <h2>This is the Main</h2>
        <p>If you're not redirected, this will display.</p>
    </main>
</body>
</html>
