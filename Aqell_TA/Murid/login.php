<?php

// include('db_connection.php');

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $user = $_POST['username'];
//     $pass = $_POST['password'];

//     $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
//     $result = $conn->query($sql);

//     if ($result->num_rows > 0) {
//         header("Location: dashboard.php");
//         exit();
//     } else {
//         echo "<p style='color: red;'>Username atau Password salah!</p>";
//     }
// }

// $conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Bimbingan Konseling</title>

    <!-- Menyertakan CDN Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Menyertakan Font Awesome (untuk ikon) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            background-image: url('https://i.ytimg.com/vi/Q4Snhs3B7_Q/maxresdefault.jpg'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.4)); /* Gradient dark background */
            border-radius: 15px;
            width: 100%;
            max-width: 400px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            font-size: 2rem;
            color: #fff;
            font-weight: 600;
            text-align: center;
            margin-bottom: 25px;
        }

        .form-control {
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 1rem;
        }

        .btn-login {
            background-color: #FFAB5B;
            border-radius: 30px;
            padding: 10px 20px;
            width: 100%;
            font-size: 1.1rem;
            color: black;
            transition: background-color 0.3s ease;
        }

        .btn-login:hover {
            background-color: #A27B5C;
            color: white;
        }

        .text-center p {
            color: white;
            font-size: 1rem;
            margin-top: 15px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .card {
                width: 90%;
                padding: 20px;
            }

            .card-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="card">
            <h2 class="card-title">Login</h2>

            <form action="login.php" method="POST">
                <!-- Username Input -->
                <div class="form-group">
                    <label for="username" class="text-white">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required placeholder="Masukkan Username">
                </div>

                <!-- Password Input -->
                <div class="form-group">
                    <label for="password" class="text-white">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan Password">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-login">Login</button>
            </form>

            <div class="text-center">
                <p>Silakan login untuk mengakses layanan bimbingan konseling.</p>
            </div>
        </div>
    </div>

    <!-- Menyertakan CDN Bootstrap JS dan jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
