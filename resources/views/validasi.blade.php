<html lang="en">

<head>
    <title>Javascript</title>
    <link rel="stylesheet" href="LayoutWeb.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;500;600;800&display=swap" rel="stylesheet">
    <script src="myscript.js"></script>

    <script>
        function validateForm(){
            var nrp = document.getElementById("nrp");
            var msg = document.getElementById("msg");

            //Cek hanya yang tidak diisi
            if (nrp.value == "") {
                nrp.focus();
                nrp.placeholder = "contoh: 5001000100"; //place holder = saran
                alert("NRP harus diisi");
                return false;
            }

            if (isNaN(nrp.value) == true){
                msg.innerHTML = ("NRP hanya boleh diisi angka");
                return false;
            }

            if (nrp.value.length != 10){
                msg.innerHTML = ("NRP harus 10 digit, anda memasukkan " + nrp.value.length);
                return false;
            }
        }
    </script>

</head>

<body>
    <div class="container">
        <div class="jumbotron">Form Validation is prevent false data delivery to server if invalid or not (sesuai constrain database)</div>
        <script>
            function validate(){
                //default return true.
                // console.log("baris 24"); //Hannya memberitahu (print)
                // return true;
            }
        </script>
        <form action="https://google.com" method="get" onsubmit="return validateForm();"> <!--action untuk dilempar ke situs seseuatu-->
            <div class="form-group">
                <label for="nrp">NRP: </label>
                <input type="text" class="form-control" id="nrp"> <div id="msg" class="text-danger"></div>
            </div>
            <input type="submit" value="DAFTAR" class="btn btn-primary">
            <input type="reset" value="ULANGI" class="btn btn-warning">
        </form>
    </div>

</body>

</html>
<!--Lihat bad website untuk komparasi-->
<!--Pilih layout untuk dimodifikasi-->
