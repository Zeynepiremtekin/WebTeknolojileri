<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Zeynep İrem Tekin</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Zeynep İrem Tekin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="hakkimda.html">Hakkımda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sehrim.html">Şehrim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iletisim.html">İletişim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="giris.html">Giriş Yap</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="p-5 text-center main">
        <div class="container  mt-5 mb-0">
            <table class="text-center table fw-bold">
                <tr>
                    <th>İsim: </th>
                    <td><?php echo $_POST["isim"]; ?></td>
                </tr>
                <tr>
                    <th>Soyisim: </th>
                    <td><?php echo $_POST["soyisim"]; ?></td>
                </tr>
                <tr>
                    <th>E-Mail: </th>
                    <td><?php echo $_POST["email"]; ?></td>
                </tr>
                <tr>
                    <th>Cinsiyet: </th>
                    <td>
                        <?php
                        if (isset($_POST["cinsiyet"])) {
                            echo $_POST["cinsiyet"];
                        } else {
                            echo "N/A";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Mesaj: </th>
                    <td><?php echo $_POST["mesaj"]; ?></td>
                </tr>
            </table>
        </div>
    </section>
</body>

</html>