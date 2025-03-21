<?php
function generateSlides($dir)
{
    $bannerData = json_decode(file_get_contents("data/banners.json"), true);
    foreach (glob($dir . "/*.jpg") as $imageFile) {
        $fileName = basename($imageFile, ".jpg");
        $slideData = $bannerData[$fileName] ?? [];
        if (!empty($slideData)) {
            echo '<a href="' . ($slideData['url'] ?? '#') . '">
                    <div class="slide fade">
                        <img src="img/' . ($slideData['file'] ?? '') . '">
                        <div class="slide-text">' . ($slideData['text'] ?? '') . '</div>
                    </div>
                  </a>';
        }
    }
}
?>