<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap&family=Space+Mono&display=swap" rel="stylesheet">
</head>

<body class="overflow-hidden">

    <?php include('header.php') ?>

    <main class="">
        <div class="flex gap-12">
            <div id="doc-menu" class="flex flex-col bg-gray w-fit p-4 rounded z-[200] h-[calc(100vh-80px)] mt-[80px] min-w-fit overflow-auto transition max-md:translate-x-[-250px] max-md:absolute">

                <div id="doc-menu-arrow" class="md:hidden p-2 bg-gray-2 rounded w-fit hover:bg-gray_3 cursor-pointer mb-2" onclick="closeDocMenu()">
                    <img src="img/ic-menu-arrow.svg" alt="" class="h-6 w-6">
                </div>

                <p id="link1" class="doc-link font-semibold px-7 p-1  hover:bg-gray_2 w-full rounded cursor-pointer">Fonctionnalités</p>
                <p id="link2" class="doc-link font-semibold px-7 p-1  hover:bg-gray_2 w-full rounded cursor-pointer">
                    <nobr>Fichiers principaux</nobr>
                </p>

                <div class="flex w-3 hover:bg-gray_2 w-full rounded">
                    <div class="doc-arrow cursor-pointer w-5 hover:bg-gray_3 rounded-tl rounded-bl px-1.5 flex">
                        <img src="img/ic-arrow.svg" alt="" class="transition">
                    </div>
                    <p id="link3" href="" class="doc-link font-semibold p-1 pl-2 cursor-pointer">Commencer</p>
                </div>
                <div class="flex mb-2 hidden">
                    <div class="h-auto w-0.5 ml-[9px] rounded bg-primary"></div>
                    <div class="flex flex-col w-full">
                        <p id="link3-1" class="doc-link hover:bg-gray_2 p-1 pl-6 rounded cursor-pointer">Installation</p>
                        <p id="link3-2" class="doc-link hover:bg-gray_2 p-1 pl-6 rounded cursor-pointer">Utilisation</p>
                    </div>
                </div>

                <div class="flex w-3 hover:bg-gray_2 w-full rounded">
                    <div class="doc-arrow cursor-pointer w-5 hover:bg-gray_3 rounded-tl rounded-bl px-1.5 flex">
                        <img src="img/ic-arrow.svg" alt="" class="transition">
                    </div>
                    <p id="link4" href="" class="doc-link font-semibold p-1 pl-2 cursor-pointer">Options</p>
                </div>
                <div class="flex mb-2 hidden">
                    <div class="h-auto w-0.5 ml-[9px] rounded bg-primary"></div>
                    <div class="flex flex-col w-full">
                        <p id="link4-1" class="doc-link hover:bg-gray_2 p-1 pl-6 rounded cursor-pointer">Options 1</p>
                        <p id="link4-2" class="doc-link hover:bg-gray_2 p-1 pl-6 rounded cursor-pointer">Options 2</p>
                        <p id="link4-2" class="doc-link hover:bg-gray_2 p-1 pl-6 rounded cursor-pointer">Options 3</p>
                    </div>
                </div>

                <div class="flex w-3 hover:bg-gray_2 w-full rounded">
                    <div class="doc-arrow cursor-pointer w-5 hover:bg-gray_3 rounded-tl rounded-bl px-1.5 flex">
                        <img src="img/ic-arrow.svg" alt="" class="transition">
                    </div>
                    <p id="link5" href="" class="doc-link font-semibold p-1 pl-2 cursor-pointer">Méthodes</p>
                </div>
                <div class="flex mb-2 hidden">
                    <div class="h-auto w-0.5 ml-[9px] rounded bg-primary"></div>
                    <div class="flex flex-col w-full">
                        <p id="link5-1" class="doc-link hover:bg-gray_2 p-1 pl-6 rounded cursor-pointer">Méthode 1</p>
                        <p id="link5-2" class="doc-link hover:bg-gray_2 p-1 pl-6 rounded cursor-pointer">Méthode 2</p>
                        <p id="link5-2" class="doc-link hover:bg-gray_2 p-1 pl-6 rounded cursor-pointer">Méthode 3</p>
                    </div>
                </div>

                <p id="link6" class="doc-link font-semibold px-7 p-1  hover:bg-gray_2 w-full rounded cursor-pointer">Image support</p>
                <p id="link7" class="doc-link font-semibold px-7 p-1  hover:bg-gray_2 w-full rounded cursor-pointer">Browser support</p>

            </div>

            <div class="mt-[80px] max-md:pl-10 max-sm:pl-4">
                <div id="doc-list-icon" class="md:hidden p-2 bg-gray rounded w-fit hover:bg-gray_2 cursor-pointer mb-4">
                    <img src="img/ic-list.svg" alt="" class="h-6 w-6">
                </div>
                <div class="doc-text overflow-auto h-[100vh] pr-16 max-md:pr-10 max-sm:pr-4 pb-32" onclick="closeDocMenu()">
                    <h1 id="link1-text" class="text-xl font-bold mb-1 mt-5">Fonctionnalités</h1>
                    <div class="h-px w-full bg-primary mb-4 rounded"></div>
                    <div class="doc-code">
                        <code>$ </code><code id="copy-text">npm install</code>
                        <div id="copy-btn" data-target="#copy-text" class="copy-btn">
                            <img src="img/ic-copy.svg" alt="">
                        </div>
                    </div>
                    <p>Lorem ipsuLorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed eveniet debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet. Eos, laboriosam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed eveniet debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet. Eos, laboriosam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed eveniet debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet. Eos, laboriosam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed eveniet debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet. Eos, laboriosam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed eveniet debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet. Eos, laboriosam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed eveniet debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet. Eos, laboriosam.m dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed eveniet debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet. Eos, laboriosam.</p>
                    <h1 id="link2-text" class="text-xl font-bold mb-1 mt-8">Fichiers principaux</h1>
                    <div class="h-px w-full bg-primary mb-4 rounded"></div>
                    <p>Lorem ipsuLorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed eveniet debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet. Eos, laboriosam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed eveniet debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet. Eos, laboriosam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed eveniet debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet. Eos, laboriosam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed eveniet debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet. Eos, laboriosam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed eveniet debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet. Eos, laboriosam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed eveniet debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet. Eos, laboriosam.m dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed eveniet debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet. Eos, laboriosam.</p>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="app.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/409445/animateAnything.js" defer></script>
</body>

</html>