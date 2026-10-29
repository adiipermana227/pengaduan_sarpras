<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Pengaduan Prasarana</title>

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
        }

        .login-container {
            width: 900px;
            max-width: 95%;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .left-side {
            background: #0d6efd;
            color: white;
            min-height: 550px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
            text-align: center;
        }

        .left-side .icon {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background: white;
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

        .right-side {
            padding: 55px 45px;
        }

        .right-side h3 {
            font-weight: bold;
            color: #222;
        }

        .subtitle {
            color: #777;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: 600;
        }

        .form-control {
            height: 50px;
            border-radius: 10px;
        }

        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15);
        }

        .btn-login {
            width: 100%;
            height: 50px;
            border: none;
            border-radius: 10px;
            background: #0d6efd;
            color: white;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-login:hover {
            background: #0b5ed7;
            transform: translateY(-2px);
        }

        .forgot {
            text-decoration: none;
            color: #0d6efd;
            font-size: 14px;
        }

        .register {
            text-align: center;
            margin-top: 25px;
            color: #777;
        }

        .register a {
            color: #0d6efd;
            text-decoration: none;
            font-weight: bold;
        }

        .input-group-text {
            background: white;
            border-radius: 10px 0 0 10px;
        }

        @media (max-width: 768px) {

            .left-side {
                min-height: auto;
                padding: 30px 20px;
            }

            .left-side .icon {
                width: 80px;
                height: 80px;
                font-size: 40px;
            }

            .right-side {
                padding: 35px 25px;
            }
        }

    </style>

</head>

<body>

<div class="login-container">

    <div class="row g-0">

        <!-- BAGIAN KIRI -->
        <div class="col-md-6 left-side">

            <div class="icon">
                🏫
            </div>

            <h2>
                Pengaduan Prasarana
            </h2>

            <p>
                Sistem pengaduan prasarana sekolah untuk membantu
                siswa melaporkan kerusakan atau masalah fasilitas
                sekolah dengan mudah dan cepat.
            </p>

        </div>


        <!-- BAGIAN KANAN -->
        <div class="col-md-6 right-side">

            <h3>
                Selamat Datang 👋
            </h3>

            <p class="subtitle">
                Silakan login untuk melanjutkan
            </p>


            <!-- FORM LOGIN -->
            <form action="proses_login.php" method="POST">

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


                <!-- PASSWORD -->
                <div class="mb-3">

                    <label class="form-label">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Masukkan password"
                        required
                    >

                </div>


                <!-- INGAT SAYA -->
                <div class="d-flex justify-content-between align-items-center mb-4">

                    <div class="form-check">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            id="remember"
                        >

                        <label
                            class="form-check-label"
                            for="remember"
                        >
                            Ingat saya
                        </label>

                    </div>

                    <a href="#" class="forgot">
                        Lupa password?
                    </a>

                </div>


                <!-- BUTTON -->
                <button
                    type="submit"
                    class="btn-login"
                >
                    🔐 Login
                </button>

            </form>


            <!-- REGISTER -->
            <div class="register">

                Belum memiliki akun?

                <a href="register.php">
                    Daftar sekarang
                </a>

            </div>

        </div>

    </div>

</div>

</body>

</html>