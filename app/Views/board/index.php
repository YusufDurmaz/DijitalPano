<!doctype html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Dijital Pano</title>
    	<link href="<?= site_url(
         "public/assets/css/board.css",
     ) ?>" rel="stylesheet">
    </head>
    <body>
        <div class="dashboard">
            <div class="logo-container">
                <img src="<?= site_url(
                    "public/uploads/logo.png",
                ) ?>" alt="Logo" class="logo">
            </div>

            <div class="container">
                <div id="clock">
                    <div id="time"></div>
                    <div id="date"></div>
                </div>
            </div>

            <div class="announcement-bar">
                <div class="announcement-content">
                    <span class="announcement-text"></span>
                </div>
            </div>
        </div>

        <script>
        (function () {
            const locale = '<?= $js_locale ?>';

            function updateClock() {
                const now = new Date();

                const hours = String(now.getHours()).padStart(2, '0');
                const minutes = String(now.getMinutes()).padStart(2, '0');
                const seconds = String(now.getSeconds()).padStart(2, '0');
                document.getElementById("time").innerText = `${hours}:${minutes}:${seconds}`;

                const options = {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                };

                document.getElementById("date").innerText = now.toLocaleDateString(locale, options);
            }

            updateClock();
            setInterval(updateClock, 1000);
        })();
        </script>
    </body>
</html>
