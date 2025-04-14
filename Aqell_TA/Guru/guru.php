<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Form Data Guru</title>
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
            margin-left: 245px;
            padding: 20px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://i.ytimg.com/vi/Q4Snhs3B7_Q/maxresdefault.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .card-custom {
            background-color: rgba(255, 255, 255, 0.1);
            /* transparan */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            border-radius: 30px;
            padding: 10px;
            margin-bottom: 10px;
            color: white;
            /* supaya teksnya kelihatan di atas background gelap */
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

    <!-- Sidebar -->
    <div class="sidebar">
    <a href="dashboard.php">Beranda</a>
        <a href="guru.php">Daftar Guru</a>
        <a href="jadwal.php">Jadwal Konseling</a>
        <a href="tambahS.php">Tambah Soal</a>
        <a href="Bujian.php">Buat Ujian</a>
        <a href="kategori.php">Kategori</a>
        <a href="datsis.php">Data Siswa</a>
        <a href="laporanG.php">Laporan A</a>
    </div>

    <!-- Content -->
    <div class="content">
        <h2 class="text-center text-white mb-4">Form Data Guru</h2>

        <form action="proses_guru.php" method="post" enctype="multipart/form-data">
            <div class="row justify-content-center">

                <!-- Guru 1 -->
                <div class="col-md-4">
                    <div class="card-custom">
                        <h5 class="text-center">Guru 1</h5>
                        <img src="img/guru1.jpg" alt="Foto Guru 1" class="img-thumbnail rounded-circle mx-auto d-block mb-2" style="width: 150px; height: 150px; object-fit: cover;">
                        <p class="form-control mb-2 bg-light">Nama Guru 1</p>
                        <p class="form-control mb-2 bg-light">1234567890</p>
                        <p class="form-control mb-2 bg-light">Guru Matematika</p>
                    </div>
                </div>

                <!-- Guru 2 -->
                <div class="col-md-4">
                    <div class="card-custom">
                        <h5 class="text-center">Guru 2</h5>
                        <img src="img/guru1.jpg" alt="Foto Guru 2" class="img-thumbnail rounded-circle mx-auto d-block mb-2" style="width: 150px; height: 150px; object-fit: cover;">
                        <p class="form-control mb-2 bg-light">Nama Guru 1</p>
                        <p class="form-control mb-2 bg-light">1234567890</p>
                        <p class="form-control mb-2 bg-light">Guru Matematika</p>
                    </div>
                </div>

                <!-- Guru 3 -->
                <div class="col-md-4">
                    <div class="card-custom">
                        <h5 class="text-center">Guru 3</h5>
                        <img src="img/guru1.jpg" alt="Foto Guru 3" class="img-thumbnail rounded-circle mx-auto d-block mb-2" style="width: 150px; height: 150px; object-fit: cover;">
                        <p class="form-control mb-2 bg-light">Nama Guru 1</p>
                        <p class="form-control mb-2 bg-light">1234567890</p>
                        <p class="form-control mb-2 bg-light">Guru Matematika</p>
                    </div>
                </div>

                <!-- Kepala Sekolah -->
                <div class="col-md-6">
                    <div class="card-custom border-primary">
                        <h5 class="text-center text-primary">Kepala Sekolah</h5>
                        <img src="img/guru1.jpg" alt="Foto Kepsek" class="img-thumbnail rounded-circle mx-auto d-block mb-2" style="width: 150px; height: 150px; object-fit: cover;">
                        <p class="form-control mb-2 bg-light">Nama Guru 1</p>
                        <p class="form-control mb-2 bg-light">1234567890</p>
                        <p class="form-control mb-2 bg-light">Guru Matematika</p>
                    </div>
                </div>

                <!-- Guru 4 -->
                <div class="col-md-3">
                    <div class="card-custom">
                        <h5 class="text-center">Guru 4</h5>
                        <img src="img/guru1.jpg" alt="Foto Guru 4" class="img-thumbnail rounded-circle mx-auto d-block mb-2" style="width: 150px; height: 150px; object-fit: cover;">
                        <p class="form-control mb-2 bg-light">Nama Guru 1</p>
                        <p class="form-control mb-2 bg-light">1234567890</p>
                        <p class="form-control mb-2 bg-light">Guru Matematika</p>
                    </div>
                </div>

                <!-- Guru 5 -->
                <div class="col-md-3">
                    <div class="card-custom">
                        <h5 class="text-center">Guru 5</h5>
                        <img src="img/guru1.jpg" alt="Foto Guru 5" class="img-thumbnail rounded-circle mx-auto d-block mb-2" style="width: 150px; height: 150px; object-fit: cover;">
                        <p class="form-control mb-2 bg-light">Nama Guru 1</p>
                        <p class="form-control mb-2 bg-light">1234567890</p>
                        <p class="form-control mb-2 bg-light">Guru Matematika</p>
                    </div>
                </div>

            </div>
        </form>
    </div>

</body>

</html>