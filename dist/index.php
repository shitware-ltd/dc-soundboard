<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>Soundboard</title>
    <style>
        @font-face {
            font-family: 'Commodore-64-Pixelized';
            src:  url('Commodore-64-Pixelized.ttf.woff') format('woff'),
            url('Commodore-64-Pixelized.ttf.svg#Commodore-64-Pixelized') format('svg'),
            url('Commodore-64-Pixelized.ttf.eot'),
            url('Commodore-64-Pixelized.eot?#iefix') format('embedded-opentype'); 
            font-weight: normal;
            font-style: normal;
        }

        * { font-family: 'Commodore-64-Pixelized'; text-transform: uppercase !important; }
    </style>
    <style>.color-primary { color:#AAA9FF; }</style>
</head>
<body class="h-screen p-12 text-uppercase flex justify-between flex-col" style="background:#4B49E4;border:20px solid #AAA9FF;">
    <h1 class="text-center text-4xl color-primary">*** DC SOUNDBOARD ***</h1>

    <div class="flex flex-wrap gap-2">
        <?php
            $files = [
                '????????' => 'what.mp3',
                'fucking idiot' => 'fucking-idiot.mp3',
                'what we doin' => 'wwd.mp3',
                'a little typo' => 'typo.mp3',
                'ill just smash his head in' => 'smash.mp3',
                'smash 2' => 'smash2.mp3',
            ];

            $i = 0;
            foreach ($files as $label => $file):
                $i++;
        ?>
        <audio preload="auto" id="sound-<?php echo $i; ?>">
            <source src="audio/<?php echo $file; ?>" type="audio/mpeg">
        </audio>
        <button onclick="document.getElementById('sound-<?php echo $i; ?>').play()" 
        class=" bg-[#AAA9FF] flex-shrink-0 py-4 px-8 text-white text-xl hover:bg-white hover:text-[#4B49E4]"><?php echo $label; ?></button>
        <?php endforeach; ?>
    </div>
    <footer class="text-center text-4xl color-primary">
        * SHITWARE * LTD *
    </footer>
</body>
</html>