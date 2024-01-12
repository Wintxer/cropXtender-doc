<?php 

if($title) {
    echo '
    <h1 id="" class="doc-text-title text-xl font-bold mb-1 mt-10">'.$title.'</h1>
    <div class="h-px w-full bg-primary mb-4 rounded"></div>';
} else if($subtitle) {
    echo '
    <h1 id="" subtitles class="doc-text-title text-lg font-semibold mb-2 mt-8">'.$subtitle.'</h1>';
}

?>