
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="index.css">


</head>
<body>

    <div class="container mt-3">
    <?php
            if(isset($_POST["Register"])){
                $LastName = $_POST["lastName"];
                $FirstName = $_POST["firstName"];
                $country = $_POST["country"];
                $state = $_POST["state"];
                $city = $_POST["city"];
                $barangay = $_POST["barangay"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $repeatPassword = $_POST["repeatPassword"];

                $contactnumber = $_POST["contactNumber"];
                
                $blklot = $_POST["lotBlk"];
                $street = $_POST["street"];
                $subd = $_POST["phaseSubdivision"];

                $passwordHash = password_hash($password, PASSWORD_DEFAULT); // NEW
                $errors = array();

                if (empty($LastName) OR empty($FirstName) OR empty($email) OR empty($password) OR empty($repeatPassword) OR empty($country) OR empty($state) OR empty($city) OR empty($barangay) OR empty($contactnumber) OR empty($blklot) OR empty($street) OR empty($subd)) {
                    array_push($errors, "All fields are required");
                }
                
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    array_push($errors, "Email is not valid");
                }

                if (strlen($password)<8) {
                    array_push($errors, "Password must be at least 8 characters long");
                }

                if ($password!= $repeatPassword) {
                    array_push($errors, "Password does not match");
                }

                require_once "database.php";
                $sql  = "SELECT * FROM re WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                $rowCount = mysqli_num_rows($result);
                if ($rowCount>0) {
                    array_push($errors, "Email Already Exist!");
                }

                if (count($errors)>0) {
                    foreach($errors as $error) {
                        echo"<div class='alert alert-danger'>$error</div>";
                        }
                } else {
                    require_once "database.php";
                    $sql  = "INSERT INTO re (lastName, firstName, Email, Password, lotBlk, street, phaseSubdivision, barangay, city, state, country, contactNumber) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    $preparestmt = mysqli_stmt_prepare($stmt, $sql);
                    if ($preparestmt) {
                        mysqli_stmt_bind_param($stmt, "ssssssssssss", $LastName, $FirstName, $email, $passwordHash, $blklot, $street, $subd, $barangay, $city, $state, $country, $contactnumber);
                        mysqli_stmt_execute($stmt);
                        echo "<div class = 'alert alert-success'>You are registered successfully! </div>";
                    } else {
                        die("Something went wrong.");
                    }
                }
            }   
            ?>



        <div class="feedbacks-container">
            <div class="transparent-box">
                <div class="container">
                    <form action="#" method="post">
                        <h2>Registration</h2>
                        <h3>Full Name</h3>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter Last Name" required>
                        </div>
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter First Name" required>
                        </div>

                        <h3>Address</h3>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <select class="form-control" id="country" name="country" required>
                                <option selected>Choose...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="state">State/Province</label>
                            <select class="form-control" id="state" name="state" required>
                                <option selected>Choose...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city">City/Municipality</label>
                            <select class="form-control" id="city" name="city" required>
                                <option selected>Choose...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lotBlk">Lot/Block</label>
                            <input type="text" class="form-control" id="lotBlk" name="lotBlk" placeholder="Enter Lot/Block" required>
                        </div>
                        <div class="form-group">
                            <label for="street">Street</label>
                            <input type="text" class="form-control" id="street" name="street" placeholder="Enter Street" required>
                        </div>
                        <div class="form-group">
                            <label for="phaseSubdivision">Phase/Subdivision</label>
                            <input type="text" class="form-control" id="phaseSubdivision" name="phaseSubdivision" placeholder="Enter Phase/Subdivision" required>
                        </div>
                        <div class="form-group">
                            <label for="barangay">Barangay</label>
                            <input type="text" class="form-control" id="barangay" name="barangay" placeholder="Enter Barangay" required>
                        </div>
                        <div class="form-group">
                            <label for="contactNumber">Contact Number</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="phoneCode" readonly>
                                <input type="text" class="form-control" id="contactNumber" name="contactNumber" placeholder="Enter Contact Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="repeatPassword">Repeat Password</label>
                            <input type="password" class="form-control" id="repeatPassword" name="repeatPassword" placeholder="Repeat Password">
                        </div>
                        
                        <div class="col-sm-12">
                    <p class="d-inline">Already registered? <a href="login.php"> Login here</a>
                </div> 

                <div class="col-sm-12 form-group mb-0">
                    <input type= "submit" class="btn btn-primary float-right" name="Register" placeholder="submit ">
                </div>
                    </form>
                    
                    <?php

                    if (isset($_SESSION['error'])) {
                        echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error'] . '</div>';
                        unset($_SESSION['error']);
                    }

                    ?>

                </div>
            </div>
        </div>


<script>

let data = [];

document.addEventListener('DOMContentLoaded', function() {
    fetch('https://raw.githubusercontent.com/dr5hn/countries-states-cities-database/master/countries%2Bstates%2Bcities.json')
        .then(response => response.json())
        .then(jsonData => {
            data = jsonData;
            const countries = data.map(country => country.name);
            populateDropdown('country', countries);
        })
        .catch(error => console.error('Error fetching countries:', error));
});

function populateDropdown(dropdownId, data) {
    const dropdown = document.getElementById(dropdownId);
    dropdown.innerHTML = '';
    data.forEach(item => {
        const option = document.createElement('option');
        option.value = item;
        option.text = item;
        dropdown.add(option);
    });
}

document.getElementById('country').addEventListener('change', function() {
    const selectedCountry = this.value;
    const countryData = data.find(country => country.name === selectedCountry);
    if (countryData && countryData.states) {
        const states = countryData.states.map(state => state.name);
        populateDropdown('state', states);
    }
    const phoneCode = countryData ? countryData.phone_code : '';
    document.getElementById('phoneCode').value = phoneCode;
});

document.getElementById('state').addEventListener('change', function() {
    const selectedState = this.value;
    const countryData = data.find(country => country.name === document.getElementById('country').value);
    if (countryData) {
        const stateData = countryData.states.find(state => state.name === selectedState);
        if (stateData && stateData.cities) {
            const cities = stateData.cities.map(city => city.name);
            populateDropdown('city', cities);
        } else {
            console.log('No cities found for state:', selectedState);
        }
    } else {
        console.log('Country data not found for state:', selectedState);
    }
});

</script>

</body>
</html>
