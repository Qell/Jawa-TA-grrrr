<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
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
            margin-left: 250px;
            padding: 20px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://i.ytimg.com/vi/Q4Snhs3B7_Q/maxresdefault.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            color: white;
        }

        .table-custom {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }

        th {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
        }

        td {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .judul {
            text-align: center;
            margin-bottom: 30px;
            color: white;
        }

        .btn-print {
            margin-top: 20px;
        }

        @media print {
            .sidebar,
            .btn-print,
            .navbar-custom {
                display: none !important;
            }

            .content {
                margin: 0;
                padding: 0;
                background: none;
                color: black;
            }

            table,
            th,
            td {
                color: black !important;
                background: white !important;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bimbingan Konseling</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
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
        <div class="judul">
            <h2>Hasil Ujian Siswa</h2>
            <p>Tanggal Ujian: 12 April 2025</p>
        </div>

        <table class="table table-bordered table-custom">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Mata Pelajaran</th>
                    <th>Nilai</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Alya Putri</td>
                    <td>XI IPA 1</td>
                    <td>Matematika</td>
                    <td>88</td>
                    <td>Lulus</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Budi Santoso</td>
                    <td>XI IPA 1</td>
                    <td>Matematika</td>
                    <td>75</td>
                    <td>Lulus</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Citra Dewi</td>
                    <td>XI IPA 1</td>
                    <td>Matematika</td>
                    <td>62</td>
                    <td>Remedial</td>
                </tr>
            </tbody>
        </table>

        <div class="text-center btn-print">
            <button onclick="window.print()" class="btn btn-warning">Cetak ke PDF</button>
        </div>
    </div>

</body>

</html>
