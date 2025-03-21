<?php
function generateSlides($dir)
{
    $files = glob($dir . "/*.jpg");
    $data = json_decode(file_get_contents("data/banners.json"), true);

    foreach ($files as $file) {
        $fileData = $data[explode(".", basename($file))[0]];
        echo '<a href="' . $fileData["url"] . '">
        <div class="slide fade">
          <img src="img/' . $fileData["file"] . '">
          <div class="slide-text">' .
            $fileData["text"] . '
          </div>
        </div>
        </a>';
    }
}

?>