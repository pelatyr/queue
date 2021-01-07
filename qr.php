<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qr Code</title>
    <script type="text/javascript" src="https://unpkg.com/qr-code-styling/lib/qr-code-styling.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">


</head>

<body>

    <h1 class="text-center mt-5 mx-auto">QR Generator</h1>

    <div class="container mt-5">
        <div class="card text-center mx-auto" style="width: 16rem;">
            <div class="card-body">
                <button id="qrcodeButton" class="btn btn-info text-white mb-5">Click</button>
                <div id="canvas"></div>
            </div>
        </div>


        </section>

        <!-- <script type="text/javascript" src="qr.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
            integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
            crossorigin="anonymous"></script>
</body>

</html>

<script>
    document.getElementById("qrcodeButton").addEventListener("click", genkey);
    const qrCode = new QRCodeStyling({
        width: 200,
        height: 200
    });
    function genkey() {
        qrData = "https://abd7b2ce69d2.ngrok.io/project/customer1.php";
        newQrData = qrData;
        qrCode.update({
            data: newQrData
        });
        qrCode.append(document.getElementById('canvas'));
    };
</script>