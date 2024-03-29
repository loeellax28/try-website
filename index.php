<!DOCTYPE html>
<html>
<head>
  <title>Health Declaration Form for Learners</title>
  <form action="connection.php" method="post"></form>
  <style>
    img {
      display: block;
      margin: 0 auto;
      width: 150px;
    }

    h1 {
      text-align: center;
      border: 5px solid #0f0f0ffa;
      background-color: #ffc800c3;
      padding: 20px;
      margin-top: 0;
    }

    form {
      max-width: 600px;
      margin: 0.5 auto;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="number"],
    textarea,
    select {
      width: 50%;
      padding: 8px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      padding: 10px 20px;
      border-radius: 5px;
      background-color: #4CAF50;
      color: none;
      border: none;
      cursor: pointer;
    }

    footer {
      position: fixed;
      bottom: 0;
      right: 0;
      background-color: rgba(255, 255, 255, 0.8); 
      padding: 10px;
      text-align: right; 
      font-size: 12px;
    }
    footer ul {
      list-style-type: none; 
      padding: 0;
      font-size: 3px;
    }
    footer ul li {
      margin-bottom: 3px;
      font-size: 3px;
    }
    .link {
      font-size: 30px; /* Adjusted font size */
      background: yellow;
      color: Blue;
      text-decoration: none;
    }
    .watermark {
     position: fixed;
     bottom: 5px;
     left: 50%;
     transform: translate(-50%);
     font-size: 10px;
     color: #999;
     }
     #bmiResult {
      text-align: center;
      margin-top: 20px;
      font-weight: bold;
    }
    .link {
  font-size: 12px;
  background-color: white;
  color: blue;
  text-decoration: none;
}
  </style>
</head>
<body>
  <img src='https://th.bing.com/th/id/OIP.-KcdGOr7dVvgXaOWIbarvAHaHa?rs=1&pid=ImgDetMain' alt='Background Image'>
  <h1>Health Declaration Form for Learners</h1>
  <form id="survey-form" action="connection.php" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter" required>
    </div>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="number" id="age" name="age" placeholder="Ex. 16" required>
    </div>
    <div class="form-group">
        <label for="Height">Height:</label>
        <input type="number" id="Height" name="Height" placeholder="Ex. 162" required>
      </div>
      <div class="form-group">
        <label for="Weight">Weight:</label>
        <input type="number" id="Weight" name="Weight" placeholder="Ex. 17" required>
      </div>
      <div class="form-group">
        <label for="BMI">BMI:</label>
        <input type="number" id="BMI" name="BMI" placeholder="Ex. 24" required>
      </div>
    <div class="form-group">
      <label for="grade">Grade Level:</label>
      <select id="grade" name="grade" required>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select>
    </div>
    <div class="form-group">
      <label for="section">Section:</label>
      <input type="text" id="section" name="section" placeholder="Ex. SP ICT ZOOM" required>
    </div>
    <div class="form-group">
      <h3>Select your sex:</h3>
      <label><input type="radio" name="sex" value="female"> Female</label><br>
      <label><input type="radio" name="sex" value="male"> Male</label><br>
    </div>
    <div class="form-group">
      <label for="birthday">Birthday:</label>
      <input type="date" id="birthday" name="birthday" required>
    </div>
    <div class="form-group">
      <label for="parents">Parents/Guardian:</label>
      <input type="text" id="parents" name="parents" placeholder="Enter" required>
    </div>
    <div class="form-group">
      <label for="contact-number">Contact Number:</label>
      <input type="text" id="contact-number" name="contact-number" placeholder="Ex. 094******89" required>
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" id="address" name="address" placeholder="Ex. Brgy. Di Masaraksarakan" required>
    </div>
    <div class="form-group">
      <label for="sports:">Sports:</label>
      <input type="text" id="sports:" name="sports:" placeholder="Ex. Basketball">
</div>
      <h2> Health Information </h2>
      <div class="form-group"><h3>Have you been vaccinated against COVID-19? </h3>
    <label><input type="radio" name="vaccinated" value="Yes"> Yes</label>
    <label><input type="radio" name="vaccinated" value="No"> No</label>
  </div>

  <!-- Placeholder for skin allergies details -->
  <div class="form-group" id="vaccinatedDetails" style="display: none;">
    <label for="vaccinatedDetails">If yes, what kind of vaccine?</label>
    <input type="text" id="vaccinatedDetails" name="vaccinatedDetails" placeholder="Please Specify">
  </div>

<div class="form-group"><h3>Are you fully vaccinated? </h3>
    <label><input type="radio" name="fullyVaccinated" value="Yes"> Yes</label>
    <label><input type="radio" name="fullyVaccinated" value="No"> No</label>
  </div>

  <!-- Placeholder for skin allergies details -->
  <div class="form-group" id="fullyVaccinatedDetails" style="display: none;">
    <label for="fullyVaccinatedDetails">If yes, when did you take your first and last vaccine?</label>
    <input type="text" id="fullyVaccinatedDetails" name="fullyVaccinatedDetails" placeholder="Please Specify">
  </div>

    <h3>Do you have skin allergies?</h3>
    <label><input type="radio" name="skinAllergies" value="Yes"> Yes</label>
    <label><input type="radio" name="skinAllergies" value="No"> No</label>
  </div>

  <!-- Placeholder for skin allergies details -->
  <div class="form-group" id="skinAllergiesDetails" style="display: none;">
    <label for="skinAllergiesDetails">If yes, please specify:</label>
    <input type="text" id="skinAllergiesDetails" name="skinAllergiesDetails" placeholder="Please Specify">
  </div>
<div class="form-group">
        <label for="Health Condition">Health Condition:</label>
        <input type="text" id="disease" name="disease" placeholder="Please Specify" required>
      </div>
<h3>Did you undergo minor/major surgery?</h3>
    <label><input type="radio" name="surgery" value="Yes"> Yes</label>
    <label><input type="radio" name="surgery" value="No"> No</label>
  </div>

    <!-- Placeholder for minor/major surgery details -->
  <div class="form-group" id="surgeryDetails" style="display: none;">
  <label for="surgeryDetails">If yes, please specify:</label>
  <input type="text" id="surgeryDetails" name="surgeryDetails" placeholder="Please Specify">
</div>
<div class="form-group">
        <label for="medical">Medical History:</label>
        <input type="text" id="medical" name="medical" placeholder="Please Specify" required>
      </div>
    <br>
        <label><input type="checkbox" name=" confidentiality" 
">I hereby certify that all my answers and data contain true information beyond my knowledge. I understand the confidentiality of the health declaration information. </label><br>
  </div>
  <label><input=" 
PLEASE BE HONEST!

Republic Act 11332

"Mandatory Reporting of Notifiable Diseases and Health Events of Public Health Concern Act".

YOU ARE REQUIRED TO PROVIDE TRUTHFUL INFORMATION ABOUT YOUR HEALTH CONDITION AND POSSIBLE EXPOSURE.)"> 
PLEASE BE HONEST!

Republic Act 11332

"Mandatory Reporting of Notifiable Diseases and Health Events of Public Health Concern Act".

YOU ARE REQUIRED TO PROVIDE TRUTHFUL INFORMATION ABOUT YOUR HEALTH CONDITION AND POSSIBLE EXPOSURE.</label><br>
</div>
<div id="output"></div>
    <button type="submit" onclick="submit">Submit</button>
<button type="button" onclick="window.print()">Print</button>
<button type="button" onclick="clearForm()">Clear</button>
<script>
  function clearForm() {
    document.getElementById('survey-form').reset();
  }
  </script>
  </form>
<script>
  // Watermark creation
  var watermark = document.createElement('div');
  watermark.className = 'watermark';
  watermark.innerText = 'Group 1: P. Gabriel, S. Rosel, A. Singit, J. Trinidad, J. Batugal, Adviser L. Macatlang';
  document.body.appendChild(watermark);
</script>
<script>
  document.querySelectorAll('input[name="fullyVaccinated"]').forEach(function (radio) {
    radio.addEventListener('change', function () {
      var fullyVaccinatedDetails = document.getElementById('fullyVaccinatedDetails');
      if (this.value === 'Yes') {
        fullyVaccinatedDetails.style.display = 'block';
      } else {
        fullyVaccinatedDetails.style.display = 'none';
      }
    });
  });
</script>
<script>
  document.querySelectorAll('input[name="vaccinated"]').forEach(function (radio) {
    radio.addEventListener('change', function () {
      var vaccinatedDetails = document.getElementById('vaccinatedDetails');
      if (this.value === 'Yes') {
        vaccinatedDetails.style.display = 'block';
      } else {
        vaccinatedDetails.style.display = 'none';
      }
    });
  });
</script>
<script>
  document.querySelectorAll('input[name="skinAllergies"]').forEach(function (radio) {
    radio.addEventListener('change', function () {
      var skinAllergiesDetails = document.getElementById('skinAllergiesDetails');
      if (this.value === 'Yes') {
        skinAllergiesDetails.style.display = 'block';
      } else {
        skinAllergiesDetails.style.display = 'none';
      }
    });
  });
</script>
<script>
  document.querySelectorAll('input[name="surgery"]').forEach(function (radio) {
    radio.addEventListener('change', function () {
      var surgeryDetails = document.getElementById('surgeryDetails');
      if (this.value === 'Yes') {
        surgeryDetails.style.display = 'block';
      } else {
        surgeryDetails.style.display = 'none';
      }
    });
  });
</script>

<footer>
  <ul>
    <li><a href="manual.php" class="link" style="font-size: 25px;">Help</a></li>
  </ul>
</footer>
    </script>
  </body>
  </html>
