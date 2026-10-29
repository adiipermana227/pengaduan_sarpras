
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register - Pengaduan Prasarana</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #0d6efd, #4dabf7);

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 30px 15px;
        }

        .register-container {
            width: 950px;
            max-width: 100%;

            background: white;

            border-radius: 20px;

            overflow: hidden;

            box-shadow:
                0 15px 40px rgba(0, 0, 0, 0.20);
        }

        /* =========================
           BAGIAN KIRI
        ========================= */

        .left-side {
            background: #0d6efd;

            color: white;

            min-height: 650px;

            display: flex;
            flex-direction: column;

            justify-content: center;
            align-items: center;

            padding: 40px;

            text-align: center;
        }

        .icon {
            width: 110px;
            height: 110px;

            background: white;

            border-radius: 50%;

            display: flex;
            justify-content: center;
            align-items: center;

            font-size: 55px;

            margin-bottom: 25px;
        }

        .left-side h2 {
            font-weight: bold;

            margin-bottom: 15px;
        }

        .left-side p {
            line-height: 1.7;

            opacity: 0.9;
        }

        .info-box {
            margin-top: 25px;

            padding: 15px 20px;

            background: rgba(255,255,255,0.15);

            border-radius: 10px;

            font-size: 14px;
        }


        /* =========================
           BAGIAN KANAN
        ========================= */

        .right-side {
            padding: 45px;
        }

        .right-side h3 {
            font-weight: bold;

            color: #222;
        }

        .subtitle {
            color: #777;

            margin-bottom: 25px;
        }

        .form-label {
            font-weight: 600;
        }

        .form-control,
        .form-select {
            height: 48px;

            border-radius: 10px;
        }

        .form-control:focus,
        .form-select:focus {

            border-color: #0d6efd;

            box-shadow:
                0 0 0 0.2rem rgba(13,110,253,0.15);
        }

        .btn-register {

            width: 100%;

            height: 50px;

            border: none;

            border-radius: 10px;

            background: #0d6efd;

            color: white;

            font-weight: bold;

            transition: 0.3s;
        }

        .btn-register:hover {

            background: #0b5ed7;

            transform: translateY(-2px);
        }

        .login-link {

            text-align: center;

            margin-top: 20px;

            color: #777;
        }

        .login-link a {

            color: #0d6efd;

            text-decoration: none;

            font-weight: bold;
        }

        .password-info {

            font-size: 12px;

            color: #888;

            margin-top: 5px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 768px) {

            .left-side {

                min-height: auto;

                padding: 30px 20px;
            }

            .icon {

                width: 80px;
                height: 80px;

                font-size: 40px;
            }

            .right-side {

                padding: 30px 25px;
            }
        }

    </style>

</head>


<body>


<div class="register-container">

    <div class="row g-0">


        <!-- =========================
             BAGIAN KIRI
        ========================= -->

        <div class="col-md-5 left-side">

            <div class="icon">
                🏫
            </div>

            <h2>
                Pengaduan Prasarana
            </h2>

            <p>
                Buat akun siswa untuk melaporkan
                kerusakan atau masalah fasilitas
                sekolah dengan mudah.
            </p>

            <div class="info-box">

                📢 Sampaikan pengaduan dengan
                informasi yang jelas agar dapat
                segera ditindaklanjuti.

            </div>

        </div>



        <!-- =========================
             BAGIAN REGISTER
        ========================= -->

        <div class="col-md-7 right-side">

            <h3>
                Buat Akun Siswa 📝
            </h3>

            <p class="subtitle">
                Silakan lengkapi data berikut untuk membuat akun.
            </p>


            <!-- FORM REGISTER -->

            <form
                action="proses_register.php"
                method="POST"
            >


                <!-- NAMA -->

                <div class="mb-3">

                    <label class="form-label">
                        Nama Lengkap
                    </label>

                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        placeholder="Masukkan nama lengkap"
                        required
                    >

                </div>



                <!-- NIS -->

                <div class="mb-3">

                    <label class="form-label">
                        NIS
                    </label>

                    <input
                        type="text"
                        name="nis"
                        class="form-control"
                        placeholder="Masukkan NIS"
                        required
                    >

                </div>



                <!-- KELAS -->

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Kelas
                        </label>

                        <select
                            name="kelas"
                            class="form-select"
                            required
                        >

                            <option value="">
                                -- Pilih Kelas --
                            </option>

                            <option value="X">
                                X
                            </option>

                            <option value="XI">
                                XI
                            </option>

                            <option value="XII">
                                XII
                            </option>

                        </select>

                    </div>



                    <!-- JURUSAN -->

                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Jurusan
                        </label>

                        <select
                            name="jurusan"
                            class="form-select"
                            required
                        >

                            <option value="">
                                -- Pilih Jurusan --
                            </option>

                            <option value="RPL">
                                RPL
                            </option>

                            <option value="TKJ">
                                TKJ
                            </option>

                            <option value="TBSM">
                                TBSM
                            </option>

                            <option value="AKL">
                                AKL
                            </option>

                        </select>

                    </div>

                </div>



                <!-- EMAIL -->

                <div class="mb-3">

                    <label class="form-label">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="contoh@email.com"
                        required
                    >

                </div>



                <!-- PASSWORD -->

                <div class="mb-3">

                    <label class="form-label">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control"
                        placeholder="Masukkan password"
                        minlength="6"
                        required
                    >

                    <div class="password-info">
                        Password minimal 6 karakter.
                    </div>

                </div>



                <!-- KONFIRMASI PASSWORD -->

                <div class="mb-3">

                    <label class="form-label">
                        Konfirmasi Password
                    </label>

                    <input
                        type="password"
                        name="konfirmasi_password"
                        id="konfirmasi_password"
                        class="form-control"
                        placeholder="Masukkan kembali password"
                        required
                    >

                </div>



                <!-- PERSETUJUAN -->

                <div class="form-check mb-4">

                    <input
                        class="form-check-input"
                        type="checkbox"
                        id="setuju"
                        required
                    >

                    <label
                        class="form-check-label"
                        for="setuju"
                    >

                        Saya menyetujui penggunaan sistem
                        pengaduan prasarana sekolah.

                    </label>

                </div>



                <!-- BUTTON REGISTER -->

                <button
                    type="submit"
                    class="btn-register"
                >

                    📝 Daftar Akun

                </button>


            </form>



            <!-- LINK LOGIN -->

            <div class="login-link">

                Sudah memiliki akun?

                <a href="login.php">
                    Login di sini
                </a>

            </div>

        </div>

    </div>

</div>



<!-- Bootstrap JS -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


</body>

</html>
```
