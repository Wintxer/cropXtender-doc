<?php $title='Documentation'; include('head.php') ?>

<body class="overflow-hidden">

    <?php include('header.php') ?>

    <main class="pt-14 sm:pt-[72px] md:pt-20">
        <div class="flex gap-12">

            <!-- Menu -->
            <div id="doc-menu"
                class="flex flex-col border-r border-gray_3 w-fit pt-4 px-4 bg-bg z-10 md:h-[calc(100vh-80px)] sm:h-[calc(100vh-72px)] h-[calc(100vh-56px)] min-w-fit transition max-md:translate-x-[-250px] max-md:absolute">

                <div id="doc-menu-arrow" class="md:hidden p-1 bg-gray rounded w-fit hover:bg-gray_2 cursor-pointer mb-4"
                    onclick="closeDocMenu()">
                    <img src="img/ic-menu-arrow.svg" alt="" class="h-6 w-6">
                </div>

                <div class="overflow-auto max-md:border-t-gray_3 max-md:border-t max-md:pt-2">
                    <?php $link='Fonctionnalités'; include('components/doc-menu-link.php') ?>
                    <?php $link='Fichiers principaux'; include('components/doc-menu-link.php') ?>
                    <?php $link='Commencer'; $sublinks=['Installation', 'Utilisation']; include('components/doc-menu-link.php') ?>
                    <?php $link='Options'; $sublinks=['Options 1', 'Options 2', 'Options 3']; include('components/doc-menu-link.php') ?>
                    <?php $link='Méthodes'; $sublinks=['Méthode 1', 'Méthode 2', 'Méthode 3']; include('components/doc-menu-link.php') ?>
                    <?php $link='Image support'; $sublinks=false; include('components/doc-menu-link.php') ?>
                    <?php $link='Browser support'; $sublinks=false; include('components/doc-menu-link.php') ?>
                </div>

            </div>

            <!-- Text -->
            <div class="">
                <div id="doc-list-icon"
                    class="md:hidden p-1 bg-gray rounded w-fit hover:bg-gray_2 cursor-pointer my-4 max-md:ml-10 max-sm:ml-4">
                    <img src="img/ic-list.svg" alt="" class="h-6 w-6">
                </div>
                <div class="doc-text overflow-auto h-[100vh] pr-16 max-md:px-10 max-sm:px-4 pb-32 max-md:border-t max-md:border-t-gray_3"
                    onclick="closeDocMenu()">

                    <div>
                        <?php $title='Fonctionnalités'; include('components/doc-text-title.php') ?>

                        <p>Lorem ipsuLorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed
                            eveniet debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae
                            sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur
                            sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque
                            veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet.
                            veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet.
                            Eos, laboriosam.m dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed eveniet
                            debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae sapiente
                            recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque veniam
                            repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet. Eos,
                            laboriosam.</p>
                    </div>

                    <div>
                        <?php $title='Fichiers principaux'; include('components/doc-text-title.php') ?>
                        <?php
                        $symbol = true;
                        $text = 'dist/ <br>
                                ├── cropper.css <br>
                                ├── cropper.min.css (compressed) <br>
                                ├── cropper.js (UMD) <br>
                                ├── cropper.min.js (UMD, compressed) <br>
                                ├── cropper.common.js (CommonJS, default) <br>
                                └── cropper.esm.js (ES Module) <br>';
                        include('components/code.php') ?>
                    </div>

                    <div>
                        <?php $title='Commencer'; include('components/doc-text-title.php') ?>
                        <?php $title=false; $subtitle='Installation'; include('components/doc-text-title.php') ?>
                        <?php
                        $symbol = true;
                        $text = 'npm install';
                        include('components/code.php') ?>
                        <?php $title=false; $subtitle='Utilisation'; include('components/doc-text-title.php') ?>
                        <p>Lorem ipsuLorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed
                            eveniet debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae
                            sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur
                            sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque
                            veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet.
                            veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet.
                            Eos, laboriosam.m dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed eveniet
                            debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae sapiente
                            recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque veniam
                            repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet. Eos,
                            laboriosam.</p>
                    </div>
                    <div>
                        <?php $title='Options'; include('components/doc-text-title.php') ?>
                        <?php $title=false; $subtitle='Option 1'; include('components/doc-text-title.php') ?>
                        <p>Lorem ipsuLorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed
                            eveniet debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae
                            sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur
                            sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque
                            veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet.
                            veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet.
                            Eos, laboriosam.m dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed eveniet
                            debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae sapiente
                            recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque veniam
                            repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet. Eos,
                            laboriosam.</p>
                        <?php $title=false; $subtitle='Option 2'; include('components/doc-text-title.php') ?>
                        <p>Lorem ipsuLorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed
                            eveniet debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae
                            sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur
                            sapiente recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque
                            veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet.
                            veniam repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet.
                            Eos, laboriosam.m dolor sit amet, consectetur adipisicing elit. Ratione qui eius sed eveniet
                            debitis vel maiores, cumque vero dolor porro corporis unde minima animi vitae sapiente
                            recusandae earum quibusdam. Possimus! Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Omnis sit corporis numquam sapiente ipsam error perferendis doloremque veniam
                            repudiandae, obcaecati ducimus quibusdam modi at facere. At, necessitatibus amet. Eos,
                            laboriosam.</p>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include('scripts.php') ?>
</body>

</html>