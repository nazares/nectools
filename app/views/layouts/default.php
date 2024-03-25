<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/favicon.ico" sizes="any"><!-- 32×32 -->
    <link rel="icon" href="/public/icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/public/apple-touch-icon.png"><!-- 180×180 -->
    <link rel="manifest" href="/public/manifest.webmanifest">
    <link rel="stylesheet" href="/public/css/main.css">
    <title><?php echo $title; ?></title>
</head>

<body>
    <header>
        <div class="logo">
            <!-- &Nopf;&Eopf;&Copf; -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <style>
                    @media (prefers-color-scheme: dark) {
                        .a {
                            fill: #f0f0f0
                        }
                    }
                </style>
                <path class="a" fill="#1414a0" d="m1.08e-6 192h41.2c9.43 0 20.5 8.8 25.5 13.6l72.3 80.2v-93.8h24.6v128
                h-43c-7.66-0.258-15.2-1.83-23.9-10.4l-72.2-80.3v90.7h-24.4zm512 129c-29.4 4.01-59.2 4.41-89
                1.9-17.5-1.54-34.6-5.13-50.2-13.3-19.8-10.3-26.1-33.3-25.8-54.2 0.218-19.3 5.95-39.9 23.2-51.1 11.3-7.4
                23.3-9.83 36.1-12.1 34.9-6.16 69.9-4.77 104-1.03v18.3c-40.2-7.81-82.7-5.87-97.1 12.6-9.01 11.5-10.3
                22.9-10.3 32.5 0 17.3 5.93 43.7 41.2 48.8 23 3.37 45.8 0.814 67.9-3.23v20.9zm-252-19.9h77.9v19.1c-38.3
                1.47-75.1 2.12-114 0.509-32.8-1.36-38.5-17.9-39.1-33.7v-94.9h151v18.2h-97.7v32.6h89.1v17.8h-89.1c0 9.62
                0.317 20.5 0.41 22.5 0.522 12.4 6.28 17 21.3 17.9" />
            </svg>
        </div>
        <nav>
            <ul>
                <li><a href="/">Converter</a></li>
                <li><a href="/forward">Call Forward</a></li>
            </ul>
        </nav>
    </header>
    <div class="content">
        <?php echo $content; ?>
    </div>
    <footer>
        <p>created with &hearts; by &lt;/&gt;_nazares @2022</p>
    </footer>
</body>

</html>