document.getElementById("qrcodeButton").addEventListener("click", genkey);

const qrCode = new QRCodeStyling({
    width: 200,
    height: 200
});


function genkey() {

    function makeKey() {
        var result = "https://abd7b2ce69d2.ngrok.io/project/customer1.php";
       
        return result;
    }

    console.log(makeKey());

    qrData = makeKey();
    newQrData = qrData;
    qrCode.update({
        data: newQrData
    });

    qrCode.append(document.getElementById('canvas'));
};