<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap"
        rel="stylesheet">
</head>

<body>

    <?php include('header.php') ?>

    <main class="">
        <div class="bg-home w-full max-sm:min-h-[550px]">
            <div class="bg-home-animation w-full max-sm:min-h-[550px]">
                <div class="mt-0 text-transparent">d</div>
                <img src="img/logo.svg" alt="" class="h-28 max-md:h-20 max-sm:h-14 m-auto max-md:mt-20 mt-28">
                <div
                    class="max-sm:mt-12 max-lg:mt-20 mt-28 max-md:w-auto max-lg:w-[45%] w-[35%] max-lg:ml-16 mx-[10%] max-sm:mx-4 text-center ">
                    <p>Explorez le potentiel infini de vos images avec CropXtender, une librairie JavaScript de
                        traitement d'images propulsée par l'intelligence artificielle.</p><br>
                    <p>Libérez votre créativité et transformez chaque instant capturé en une œuvre d'art visuelle.</p>
                    <div class="flex justify-center m-auto mt-12">
                        <a href="docs.html" class="btn mr-8 bg-[#4E5558]">Documentation</a>
                        <a href="" class="btn">Essayer</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="py-14">
            <p class="text-center font-bold mb-14">NOS FONCTIONNALITÉS</p>
            <div
                class="grid grid-cols-3 max-lg:grid-cols-2  max-sm:grid-cols-1 gap-12 w-[850px] max-lg:w-[550px] max-sm:w-full m-auto">
                <div
                    class="card bg-gray w-[250px] rounded-tr-md rounded-bl-md p-4 flex items-center justify-center flex-col min-h-[160px] m-auto cursor-pointer relative">
                    <div id="card-front" class="flex items-center justify-center flex-col absolute">
                        <p class="text-center mt-2 mb-6">Recadrage</p>
                        <img src="img/ic-recradrage.svg" alt="" class="m-auto">
                    </div>
                    <div id="card-back"
                        class="flex items-center justify-center flex-col opacity absolute p-4 w-full  text-center">
                        <img src="img/ic-info.svg" alt="" class="m-auto h-6 mb-1">
                        <p>Redéfinissez vos images avec un recadrage personnalisé ou parmi une variété de format.</p>
                    </div>

                    <div class="h-10 bg-white w-0.5 absolute -left-[2px] -top-[2px]"></div>
                    <div class="h-0.5 bg-white w-10 absolute -left-[2px] -top-[2px]"></div>

                    <div class="h-10 bg-white w-0.5 absolute -right-[2px] -bottom-[2px]"></div>
                    <div class="h-0.5 bg-white w-10 absolute -right-[2px] -bottom-[2px]"></div>
                </div>
                <div
                    class="card bg-gray w-[250px] rounded-tr-md rounded-bl-md p-4 flex items-center justify-center flex-col min-h-[160px] m-auto cursor-pointer relative">
                    <div id="card-front" class="flex items-center justify-center flex-col absolute">
                        <p class="text-center mt-2 mb-6">Rotation</p>
                        <img src="img/ic-rotation.svg" alt="" class="m-auto">
                    </div>
                    <div id="card-back"
                        class="flex items-center justify-center flex-col opacity absolute p-4 w-full  text-center">
                        <img src="img/ic-info.svg" alt="" class="m-auto h-6 mb-1">
                        <p>Explorez de nouveaux angles et perspectives en pivotant vos images.</p>
                    </div>

                    <div class="h-10 bg-white w-0.5 absolute -left-[2px] -top-[2px]"></div>
                    <div class="h-0.5 bg-white w-10 absolute -left-[2px] -top-[2px]"></div>

                    <div class="h-10 bg-white w-0.5 absolute -right-[2px] -bottom-[2px]"></div>
                    <div class="h-0.5 bg-white w-10 absolute -right-[2px] -bottom-[2px]"></div>
                </div>
                <div
                    class="card bg-gray w-[250px] rounded-tr-md rounded-bl-md p-4 flex items-center justify-center flex-col min-h-[160px] m-auto cursor-pointer relative">
                    <div id="card-front" class="flex items-center justify-center flex-col absolute">
                        <p class="text-center mt-2 mb-6">Retournement</p>
                        <img src="img/ic-retournement.svg" alt="" class="m-auto">
                    </div>
                    <div id="card-back"
                        class="flex items-center justify-center flex-col opacity absolute p-4 w-full  text-center">
                        <img src="img/ic-info.svg" alt="" class="m-auto h-6 mb-1">
                        <p>Retournez vos images verticalement et/ou horizontalement.</p>
                    </div>

                    <div class="h-10 bg-white w-0.5 absolute -left-[2px] -top-[2px]"></div>
                    <div class="h-0.5 bg-white w-10 absolute -left-[2px] -top-[2px]"></div>

                    <div class="h-10 bg-white w-0.5 absolute -right-[2px] -bottom-[2px]"></div>
                    <div class="h-0.5 bg-white w-10 absolute -right-[2px] -bottom-[2px]"></div>
                </div>
                <div
                    class="card bg-gray w-[250px] rounded-tr-md rounded-bl-md p-4 flex items-center justify-center flex-col min-h-[160px] m-auto cursor-pointer relative">
                    <div id="card-front" class="flex items-center justify-center flex-col absolute">
                        <p class="text-center mt-2 mb-6">Zoom</p>
                        <img src="img/ic-zoom.svg" alt="" class="m-auto">
                    </div>
                    <div id="card-back"
                        class="flex items-center justify-center flex-col opacity absolute p-4 w-full  text-center">
                        <img src="img/ic-info.svg" alt="" class="m-auto h-6 mb-1">
                        <p>Explorez les détails les plus subtils de vos photos avec un zoom fluide.</p>
                    </div>

                    <div class="h-10 bg-white w-0.5 absolute -left-[2px] -top-[2px]"></div>
                    <div class="h-0.5 bg-white w-10 absolute -left-[2px] -top-[2px]"></div>

                    <div class="h-10 bg-white w-0.5 absolute -right-[2px] -bottom-[2px]"></div>
                    <div class="h-0.5 bg-white w-10 absolute -right-[2px] -bottom-[2px]"></div>
                </div>
                <div
                    class="card bg-gray w-[250px] rounded-tr-md rounded-bl-md p-4 flex items-center justify-center flex-col min-h-[160px] m-auto cursor-pointer relative">
                    <div id="card-front" class="flex items-center justify-center flex-col absolute">
                        <p class="text-center mb-2">Génération d’image <br> avec de l’IA</p>
                        <img src="img/ic-generation.svg" alt="" class="m-auto">
                    </div>
                    <div id="card-back"
                        class="flex items-center justify-center flex-col opacity absolute p-4 w-full  text-center">
                        <img src="img/ic-info.svg" alt="" class="m-auto h-6 mb-1">
                        <p>Laissez notre IA générer des décors captivants pour étendre naturellement votre image.</p>
                    </div>

                    <div class="h-10 bg-white w-0.5 absolute -left-[2px] -top-[2px]"></div>
                    <div class="h-0.5 bg-white w-10 absolute -left-[2px] -top-[2px]"></div>

                    <div class="h-10 bg-white w-0.5 absolute -right-[2px] -bottom-[2px]"></div>
                    <div class="h-0.5 bg-white w-10 absolute -right-[2px] -bottom-[2px]"></div>
                </div>
                <div
                    class="card bg-gray w-[250px] rounded-tr-md rounded-bl-md p-4 flex items-center justify-center flex-col min-h-[160px] m-auto cursor-pointer relative">
                    <div id="card-front" class="flex items-center justify-center flex-col absolute">
                        <p class="text-center mt-2 mb-6">Filtres et effets photo</p>
                        <img src="img/ic-filtre.svg" alt="" class="m-auto">
                    </div>
                    <div id="card-back"
                        class="flex items-center justify-center flex-col opacity absolute p-4 w-full  text-center">
                        <img src="img/ic-info.svg" alt="" class="m-auto h-6 mb-1">
                        <p>Transformez l'ambiance de vos images avec notre collection de filtres artistiques.</p>
                    </div>

                    <div class="h-10 bg-white w-0.5 absolute -left-[2px] -top-[2px]"></div>
                    <div class="h-0.5 bg-white w-10 absolute -left-[2px] -top-[2px]"></div>

                    <div class="h-10 bg-white w-0.5 absolute -right-[2px] -bottom-[2px]"></div>
                    <div class="h-0.5 bg-white w-10 absolute -right-[2px] -bottom-[2px]"></div>
                </div>
            </div>
        </div>
    </main>

    <?php include('footer.php') ?>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="app.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/409445/animateAnything.js"></script>
</body>

</html>