<!doctype html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Dijital Pano</title>
    	<link href="<?= site_url(
         "public/assets/css/panel.css",
     ) ?>" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div id="clock">
                <div id="time"></div>
            </div>
        </div>

        <script>
        (function () {
            function updateClock() {
                const now = new Date();
                const hours = String(now.getHours()).padStart(2, '0');
                const minutes = String(now.getMinutes()).padStart(2, '0');
                const seconds = String(now.getSeconds()).padStart(2, '0');
                document.getElementById("time").innerText = `${hours}:${minutes}:${seconds}`;
            }

            updateClock();
            setInterval(updateClock, 1000);
        })();
        </script>
    </body>
</html>
