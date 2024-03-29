<?php
$servername = "localhost";
$username = "root";
$password = "Mamatayakana08";
$dbname = "student health";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO Learners (name, age, height, weight, bmi, grade, section, sex, birthday, parents, contact_number, address, sports, vaccinated, vaccinatedDetails, fullyVaccinated, fullyVaccinatedDetails, skinAllergies, skinAllergiesDetails, disease, surgery, surgeryDetails, medical, confidentiality) 
    VALUES (:name, :age, :height, :weight, :bmi, :grade, :section, :sex, :birthday, :parents, :contact_number, :address, :sports, :vaccinated, :vaccinatedDetails, :fullyVaccinated, :fullyVaccinatedDetails, :skinAllergies, :skinAllergiesDetails, :disease, :surgery, :surgeryDetails, :medical, :confidentiality)");

    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':age', $_POST['age']);
    $stmt->bindParam(':height', $_POST['Height']);
    $stmt->bindParam(':weight', $_POST['Weight']);
    $stmt->bindParam(':bmi', $_POST['BMI']);
    $stmt->bindParam(':grade', $_POST['grade']);
    $stmt->bindParam(':section', $_POST['section']);
    $stmt->bindParam(':sex', $_POST['sex']);
    $stmt->bindParam(':birthday', $_POST['birthday']);
    $stmt->bindParam(':parents', $_POST['parents']);
    $stmt->bindParam(':contact_number', $_POST['contact-number']);
    $stmt->bindParam(':address', $_POST['address']);
    $stmt->bindParam(':sports', $_POST['sports:']);
    $stmt->bindParam(':vaccinated', $_POST['vaccinated']);
    $stmt->bindParam(':vaccinatedDetails', $_POST['vaccinatedDetails']);
    $stmt->bindParam(':fullyVaccinated', $_POST['fullyVaccinated']);
    $stmt->bindParam(':fullyVaccinatedDetails', $_POST['fullyVaccinatedDetails']);
    $stmt->bindParam(':skinAllergies', $_POST['skinAllergies']);
    $stmt->bindParam(':skinAllergiesDetails', $_POST['skinAllergiesDetails']);
    $stmt->bindParam(':disease', $_POST['disease']);
    $stmt->bindParam(':surgery', $_POST['surgery']);
    $stmt->bindParam(':surgeryDetails', $_POST['surgeryDetails']);
    $stmt->bindParam(':medical', $_POST['medical']);
    $stmt->bindParam(':confidentiality', $_POST['confidentiality']);

    $stmt->execute();

    echo "New record created successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>