<?php $title="Éditeur d'image"; include('head.php') ?>

<body>

    <?php include('header.php') ?>

    <main class="flex justify-center items-center h-[100vh]">
        <div
            class="border h-[400px] w-10/12 max-w-[800px] border-dashed border-primary_2 relative flex flex-col justify-center items-center rounded-xl">
            <input type="file" class="opacity-0 absolute inset-x-0  inset-y-0" size="60" placeholder="Oui" id="file" />
            <img src="img/ic-drop-image.svg" alt="">
            <p class="mt-6 mb-5">Déposer l'image ici</p>
            <p class="text-primary_2">PNG, JPG, WEBP</p>
            <div class="flex items-center my-5">
                <div class="w-20 h-px rounded bg-white"></div>
                <p class="text-xs mx-2">OU</p>
                <div class="w-20 h-px rounded bg-white"></div>
            </div>
            <label class="cursor-pointer btn z-10" for="file">
                Choisir une image
            </label>
        </div>
    </main>

    <?php include('scripts.php') ?>
</body>

</html>