<?php 
require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewAstronautBtn'])) {
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $gender = trim($_POST['gender']);
    $experienceYears = trim($_POST['experienceYears']);
    $missions = trim($_POST['missions']);
    $certifications = trim($_POST['certifications']);
    $preferredSpacecraft = trim($_POST['preferredSpacecraft']);

    if (!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($experienceYears) && !empty($missions) && !empty($certifications) && !empty($preferredSpacecraft)) {
        $query = insertIntoAstronautRecords($pdo, $firstName, $lastName, $gender, $experienceYears, $missions, $certifications, $preferredSpacecraft);
        if ($query) {
            header("Location: ../index.php");
        } else {
            echo "Insertion failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}

if (isset($_POST['editAstronautBtn'])) {
    $astronaut_id = $_GET['astronaut_id'];
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $gender = trim($_POST['gender']);
    $experienceYears = trim($_POST['experienceYears']);
    $missions = trim($_POST['missions']);
    $certifications = trim($_POST['certifications']);
    $preferredSpacecraft = trim($_POST['preferredSpacecraft']);

    if (!empty($astronaut_id) && !empty($firstName) && !empty($lastName) && !empty($gender) && !empty($experienceYears) && !empty($missions) && !empty($certifications) && !empty($preferredSpacecraft)) {
        $query = updateAstronautRecord($pdo, $astronaut_id, $firstName, $lastName, $gender, $experienceYears, $missions, $certifications, $preferredSpacecraft);
        if ($query) {
            header("Location: ../index.php");
        } else {
            echo "Update failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}

if (isset($_POST['deleteAstronautBtn'])) {
    $query = deleteAstronautRecord($pdo, $_GET['astronaut_id']);
    if ($query) {
        header("Location: ../index.php");
    } else {
        echo "Deletion failed";
    }
}
?>
