<?php
if (isset($sublinks)) {
    echo '
    <div class="flex w-3 hover:bg-gray_2 w-full rounded">
        <div class="doc-arrow min-w-5 cursor-pointer w-5 hover:bg-gray_3 rounded-tl rounded-bl px-1.5 flex">
            <img src="img/ic-arrow.svg" alt="" class="transition">
        </div>
        <p id="" sublinks class="doc-link w-full font-semibold p-2 pl-2 cursor-pointer"><nobr>'.$link.'</nobr></p>
    </div>
    <div class="flex mb-2 hidden">
        <div class="h-auto w-0.5 ml-[9px] rounded bg-primary"></div>
        <div class="flex flex-col w-full">';
            // $arr = array(1, 2, 3, 4);
                foreach ($sublinks as &$sublink) {
                echo '<p id="" class="doc-sublink hover:bg-gray_2 p-2 pl-6 rounded cursor-pointer">'.$sublink.'</p>';
            }
    echo '</div>
    </div>';

} else {
    echo '<p id="" class="doc-link font-semibold px-7 p-2  hover:bg-gray_2 w-full rounded cursor-pointer"><nobr>'.$link.'</nobr></p>';
}
?>