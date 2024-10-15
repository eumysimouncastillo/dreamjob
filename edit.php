<?php require_once 'core/models.php'; ?>
<?php $astronaut = getAstronautByID($pdo, $_GET['astronaut_id']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Astronaut</title>
</head>
<body>
    <h3>Edit Astronaut</h3>
    <form action="core/handleForms.php?astronaut_id=<?php echo $_GET['astronaut_id']; ?>" method="POST">
        <p><label for="firstName">First Name</label> <input type="text" name="firstName" value="<?php echo $astronaut['first_name']; ?>"></p>
        <p><label for="lastName">Last Name</label> <input type="text" name="lastName" value="<?php echo $astronaut['last_name']; ?>"></p>
        <p><label for="gender">Gender</label> <input type="text" name="gender" value="<?php echo $astronaut['gender']; ?>"></p>
        <p><label for="experienceYears">Experience (Years)</label> <input type="text" name="experienceYears" value="<?php echo $astronaut['experience_years']; ?>"></p>
        <p><label for="missions">Missions</label> <textarea name="missions"><?php echo $astronaut['missions']; ?></textarea></p>
        <p><label for="certifications">Certifications</label> <textarea name="certifications"><?php echo $astronaut['certifications']; ?></textarea></p>
        <p><label for="preferredSpacecraft">Preferred Spacecraft</label> <input type="text" name="preferredSpacecraft" value="<?php echo $astronaut['preferred_spacecraft']; ?>"></p>
        <p><input type="submit" name="editAstronautBtn"></p>
    </form>
</body>
</html>
