<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Bimbingan Konseling</title>

    <!-- Menyertakan CDN Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://i.ytimg.com/vi/Q4Snhs3B7_Q/maxresdefault.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .navbar-custom {
            background-color: #343a40;
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: white;
        }

        .sidebar {
            height: 100vh;
            background-color: #343a40;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            padding-top: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 15px;
            display: block;
            font-size: 1.1rem;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: #f39c12;
            color: white;
        }

        .content {
            margin-left: 270px;
            padding: 20px;
        }

        .card-custom {
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
        }

        .card-custom h5 {
            color: #333;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .content {
                margin-left: 0;
            }
        }

        @media (max-width: 576px) {
            .sidebar {
                width: 100%;
                position: relative;
            }

            .content {
                margin-left: 0;
            }
        }

        .colortxt {
            color: white;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bimbingan Konseling</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profil.php">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
    <a href="aqell_dashboard.php">Beranda</a>
        <a href="aqell_guruM.php">Daftar Guru</a>
        <a href="aqell_ujian.php">Ujian</a>
        <a href="aqell_pilihK.php">Pilih Kategori</a>
        <a href="aqell_hasil.php">Hasil</a>
    </div>

<!-- Content -->
<div class="content">
    <h2 class="text-white mb-4">Ujian yang Sudah Dijadwalkan</h2>

    <div class="row">
        <!-- Contoh Ujian 1 -->
        <div class="col-md-6 mb-4">
            <div class="card-custom">
                <h5>Matematika - Kelas XI IPA</h5>
                <p><strong>Jadwal:</strong> 15 April 2025 - Pukul 10:00 WIB</p>
                <p><strong>Durasi:</strong> 60 menit</p>
                <a href="mulai_ujian.php?id=1" class="btn btn-success">Ikuti Ujian</a>
            </div>
        </div>

        <!-- Contoh Ujian 2 -->
        <div class="col-md-6 mb-4">
            <div class="card-custom">
                <h5>Bahasa Indonesia - Kelas XI IPS</h5>
                <p><strong>Jadwal:</strong> 16 April 2025 - Pukul 08:00 WIB</p>
                <p><strong>Durasi:</strong> 45 menit</p>
                <a href="mulai_ujian.php?id=2" class="btn btn-success">Ikuti Ujian</a>
            </div>
        </div>
    </div>
</div>


    <!-- Menyertakan CDN Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>