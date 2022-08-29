<!DOCTYPE html>
<html style="background-color: #000;">
<head>
    <title>Sleep</title>
    <style>
        body {
            display:block;
            height: 100%;
            margin: 0px;
        }
        h1 {
            font-family: arial;
            font-size: 100%;
        }
        iframe {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <iframe id="iframe" src="sleep.php" style="position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999; visibility:hidden;" onload="this.style.visibility='visible';"></iframe>
    <script>
        window.setInterval(function() {
            reloadIFrame()
        }, 60000);

        function reloadIFrame() {
            console.log('reloading..');
            document.getElementById('iframe').contentWindow.location.reload();
        }
    </script>
</body>
</html>
