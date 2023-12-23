<header
    class="flex justify-between py-6 px-16 max-md:px-10 max-sm:p-4 items-center fixed w-full bg-<?php echo $bgColor ?>">

    <div class="flex items-center justify-between w-full self-start z-10">
        <a href="index.php"><img src="img/logo.png" alt="" class="h-8 max-md:h-6"></a>
        <div class="flex gap-16 max-lg:gap-8 max-md:gap-6 max-sm:hidden">
            <a href="docs.php">Docs</a>
            <a href="editor.php">Éditeur d'image</a>
            <a href="https://github.com/jstm17/cropXtender" target="_blank">Github</a>
            <a href="contact.php">Contact</a>
        </div>
        <button class="burger-menu-icon max-sm:block hidden h-6" data-ic-class="button-trigger">
            <span class="burger-menu-button"></span>
        </button>
    </div>

    <div class="burger-menu flex items-center justify-center flex-col p-8 pt-20 fixed">
        <a href="docs.php" class="block pb-4">Docs</a>
        <a href="editor.php" class="block pb-4">Éditeur d'image</a>
        <a href="https://github.com/jstm17/cropXtender" target="_blank" class="block pb-4">Github</a>
        <a href="contact.php" class="block">Contact</a>
    </div>
</header>