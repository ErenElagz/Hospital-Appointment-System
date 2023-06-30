<?php
include "../php/dbcon.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $id_number = $_POST['id_number'];
    $city = $_POST['city'];
    $department = $_POST['department'];
    $date = $_POST['date'];
    mysqli_query($dbcon, "insert into `appointment` (name,surname,id_number,city,department,date) values('$name','$surname','$id_number','$city','$department','$date')");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hospital Appointment Database</title>
    <link rel="icon" type="image/x-icon" href="../../src/img/favicon.ico" />

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
            <form method="post" class="col-sm-6 col d-flex flex-column align-items-center justify-content-center gap-3">
                <!--Personal-->
                <div class="w-100 bg-black bg-opacity-25 rounded-2 p-4">
                    <h4>Personal Information</h4>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Name</div>
                        </div>
                        <input type="text" class="form-control" id="NameInput" name="name" required />
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">surname</div>
                        </div>
                        <input type="text" class="form-control" id="SurnameInput" name="surname" required />
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">ID Number</div>
                        </div>
                        <input type="text" class="form-control" id="IdInput" name="id_number" required />
                    </div>
                </div>

                <!--Appointment-->
                <div class="w-100 bg-black bg-opacity-25 rounded-2 p-4">
                    <h4>Appointment Information</h4>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">City</div>
                        </div>
                        <select class="form-control" id="CityInput" name="city" required>
                            <option disabled selected hidden></option>
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
                            <option disabled selected hidden></option>
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
                        <input type="date" class="form-control" id="DateInput" name="date" required />
                    </div>
                </div>

                <!--Button-->
                <div class="container d-flex gap-2">
                    <button class="btn btn-outline-danger w-100 rounded-2 text-light" type="reset">Clear the Form</button>
                    <button class="btn btn-success w-100 rounded-2 text-light" name="submit" type="submit">Save the Appointment
                    </button>
                </div>
            </form>

            <!--Animation-->
            <div class="col-sm-6 col d-flex align-items-center justify-content-center">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_x1gjdldd.json" mode="bounce"
                    background="transparent" speed="0.6" style="width: fit-content; height: fit-content" loop autoplay>
                </lottie-player>
            </div>
        </div>
    </section>

    <!--Table-->
    <section class="container bg-black bg-opacity-25 rounded-2 p-4 mt-3">
        <h4>All Appointments</h4>
        <table class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">ID Number</th>
                    <th scope="col">City</th>
                    <th scope="col">Department</th>
                    <th scope="col">Date</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $result = mysqli_query($dbcon, "Select * from `appointment` ");
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $surname = $row['surname'];
                        $id_number = $row['id_number'];
                        $city = $row['city'];
                        $department = $row['department'];
                        $date = $row['date'];
                        echo '<tr>
                                    <td scope="row" class="fw-bold">' . $id . '</td>
                                    <td>' . $name . '</td>
                                    <td>' . $surname . '</td>
                                    <td>' . $id_number . '</td>
                                    <td>' . $city . '</td>
                                    <td>' . $department . '</td>
                                    <td>' . $date . '</td>                                
                                    <td><button class="btn btn-outline-primary w-100"><a class="link" href="./update.php?updateid=' . $id . '">Update</a> </button></td>
                                    <td><button class="btn btn-outline-danger w-100" ><a class="link" href="./delete.php?deleteid=' . $id . '">Delete</a> </button></td>
                                    </tr>';
                    }
                } ?>
            </tbody>
        </table>
    </section>

    <!--LogOut-->
    <div class="container my-4">
        <a class="link" href="logout.php">
            <button class="btn btn-outline-primary w-100 rounded-2 text-light" type="button">LogOut!</button>
        </a>
    </div>

    <!--Credit-->
    <footer class="container bg-black bg-opacity-25 rounded-2 mt-4 p-3 text-center">
        <h4>Developer</h4>
        <div class="d-flex align-items-center justify-content-evenly mt-3">
            <button class="btn btn-outline-warning">ErenElagz</button>
        </div>
    </footer>

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