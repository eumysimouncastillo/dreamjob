<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astronaut Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #000000;
        }
        form {
            margin-bottom: 20px;
        }
        label, input, textarea {
            display: block;
            width: 100%;
            margin-bottom: 5px;
        }
        input, textarea {
            padding: 5px;
            border: 1px solid #000000;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border: none;
            padding: 10px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #000000;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
        }
        td a {
            color: #007bff;
            text-decoration: none;
        }
        td a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>Astronaut Management System</h2>

    <h3>Register an Astronaut</h3>
    <form action="core/handleForms.php" method="POST">
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" required>

        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" required>

        <label for="gender">Gender</label>
        <input type="text" name="gender" required>

        <label for="experienceYears">Experience (Years)</label>
        <input type="text" name="experienceYears" required>

        <label for="missions">Missions</label>
        <textarea name="missions" rows="3" required></textarea>

        <label for="certifications">Certifications</label>
        <textarea name="certifications" rows="3" required></textarea>

        <label for="preferredSpacecraft">Preferred Spacecraft</label>
        <input type="text" name="preferredSpacecraft" required>

        <input type="submit" name="insertNewAstronautBtn" value="Register Astronaut">
    </form>

    <h3>Astronaut Records</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Experience (Years)</th>
                <th>Missions</th>
                <th>Certifications</th>
                <th>Preferred Spacecraft</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $allAstronauts = seeAllAstronauts($pdo); ?>
            <?php foreach ($allAstronauts as $row) { ?>
                <tr>
                    <td><?php echo $row['astronaut_id']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['experience_years']; ?></td>
                    <td><?php echo $row['missions']; ?></td>
                    <td><?php echo $row['certifications']; ?></td>
                    <td><?php echo $row['preferred_spacecraft']; ?></td>
                    <td>
                        <a href="edit.php?astronaut_id=<?php echo $row['astronaut_id']; ?>">Edit</a> |
                        <a href="delete.php?astronaut_id=<?php echo $row['astronaut_id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
