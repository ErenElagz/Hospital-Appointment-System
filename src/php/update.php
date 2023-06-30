<?php
include "dbcon.php";

$id = $_GET["updateid"];
$sql = "Select * from `appointment`where id=$id";
$result = mysqli_query($dbcon, $sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$surname = $row['surname'];
$id_number = $row['id_number'];
$city = $row['city'];
$department = $row['department'];
$date = $row['date'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $id_number = $_POST['id_number'];
    $city = $_POST['city'];
    $department = $_POST['department'];
    $date = $_POST['date'];
    mysqli_query($dbcon, "update `appointment` set id=$id,name='$name',surname='$surname',id_number='$id_number',city='$city',department='$department' where id='$id'");
    header('location:home.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Appointment</title>
    <link rel="icon" type="image/x-icon" href="./src/img/favicon.ico" />

    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body data-bs-theme="dark" class="my-4">

    <!--Header-->
    <header class="container bg-warning bg-gradient rounded-2 p-1">
        <h1 class="h2 text-center text-dark">Hospital Appointment System</h1>
    </header>

    <!--Appointment-->
    <section class="container rounded-2 mt-3">
        <div class="row">

            <!--Input-->
            <form method="post" class="col col-md-6 d-flex flex-column align-items-center justify-content-center gap-3">
                <h2 class="mt-2">Update the Appointment</h2>
                <div class="w-100 bg-black bg-opacity-25 rounded-2 p-4">
                    <h4>Personal Information</h4>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Name</div>
                        </div>
                        <input type="text" class="form-control" id="NameInput" name="name" required value=<?php echo $name; ?> />
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">SurName</div>
                        </div>
                        <input type="text" class="form-control" id="SurnameInput" name="surname" required value=<?php echo $surname; ?> />
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">ID Number</div>
                        </div>
                        <input type="text" class="form-control" id="IdInput" name="id_number" required value=<?php echo $id_number; ?> />
                    </div>
                </div>

                <div class="w-100 bg-black bg-opacity-25 rounded-2 p-4">
                    <h4>Appointment Information</h4>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">City</div>
                        </div>
                        <select class="form-control" id="CityInput" name="city" required>
                            <option>
                                <?php echo $city; ?>
                            </option>
                            <option>Antalya</option>
                            <option>Izmir</option>
                            <option>Tekirdag</option>
                            <option>Istanbul</option>
                            <option>Ankara</option>
                        </select>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Department</div>
                        </div>
                        <select class="form-control" id="DepartmentInput" name="department" placeholder="Choose City"
                            required>
                            <option>
                                <?php echo $department ?>
                            </option>
                            <option>Oral and Dental Diseases</option>
                            <option>Eye Diesases</option>
                            <option>Ear, Nose and Throat Diseases</option>
                            <option>General Surgery</option>
                            <option>Plastic Surgery</option>
                        </select>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Date</div>
                        </div>
                        <input type="date" class="form-control" id="DateInput" name="date" required value=<?php echo $date; ?> />
                    </div>
                </div>

                <!--Button-->
                <div class="container d-flex gap-2">
                    <button class="btn btn-outline-secondary w-100 rounded-2 text-light" type="button">
                        <a href="./index.php" class="link">Back to the MainPage</a> </button>
                    <button class="btn btn-success w-100 rounded-2 text-light" id="BtnSubmit" name="submit"
                        type="submit">
                        Update the Appointment
                    </button>
                </div>
            </form>

            <!--Animation-->
            <div class="col col-md-6 d-flex align-items-center justify-content-center">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_x1gjdldd.json" mode="bounce"
                    background="transparent" speed="0.6" style="width: fit-content; height: fit-content" loop
                    autoplay></lottie-player>
            </div>
        </div>
    </section>

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/script.js"></script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>