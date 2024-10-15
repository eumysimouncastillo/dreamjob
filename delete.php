<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Astronaut</title>
</head>
<body>
    <h3>Are you sure you want to delete this astronaut?</h3>
    <form action="core/handleForms.php?astronaut_id=<?php echo $_GET['astronaut_id']; ?>" method="POST">
        <p><input type="submit" name="deleteAstronautBtn" value="Yes, Delete"></p>
    </form>
</body>
</html>
