<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Form Jadwal Konseling</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body, html {
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
            margin-left: 240px;
            padding: 20px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://i.ytimg.com/vi/Q4Snhs3B7_Q/maxresdefault.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .card-custom {
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
        }

        .card-custom h4 {
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
    <a href="aqell_dashboard.php">Beranda</a>
        <a href="aqell_guru.php">Daftar Guru</a>
        <a href="aqell_jadwal.php">Jadwal Konseling</a>
        <a href="aqell_tambahS.php">Tambah Soal</a>
        <a href="aqell_Bujian.php">Buat Ujian</a>
        <a href="aqell_kategori.php">Kategori</a>
        <a href="aqell_datsis.php">Data Siswa</a>
        <a href="aqell_laporanG.php">Laporan A</a>
    </div>

    <!-- Content -->
    <div class="content">
        <h2 class="text-center text-white mb-4">Form Jadwal Konseling</h2>

        <div class="card-custom col-md-8 mx-auto">
            <form action="proses_jadwal.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Nama Siswa</label>
                    <input type="text" name="nama_siswa" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <input type="text" name="kelas" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Hari</label>
                    <select name="hari" class="form-select" required>
                        <option value="">Pilih Hari</option>
                        <option>Senin</option>
                        <option>Selasa</option>
                        <option>Rabu</option>
                        <option>Kamis</option>
                        <option>Jumat</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jam</label>
                    <input type="time" name="jam" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Konseling</label>
                    <select name="jenis_konseling" class="form-select" required>
                        <option value="">Pilih Jenis Konseling</option>
                        <option>Pribadi</option>
                        <option>Sosial</option>
                        <option>Belajar</option>
                        <option>Karir</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Catatan Tambahan</label>
                    <textarea name="catatan" class="form-control" rows="3"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-warning">Simpan Jadwal</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
