<?php $title = 'Documentation';
include('head.php') ?>

<body class="overflow-hidden">

    <?php include('header.php') ?>

    <main class="pt-14 sm:pt-[72px] md:pt-20">
        <div class="flex gap-12">

            <!-- Menu -->
            <div id="doc-menu" class="flex flex-col border-r border-gray_3 w-fit pt-4 px-4 bg-bg z-10 md:h-[calc(100vh-80px)] sm:h-[calc(100vh-72px)] h-[calc(100vh-56px)] min-w-fit transition max-md:translate-x-[-250px] max-md:absolute">

                <div id="doc-menu-arrow" class="md:hidden p-1 bg-gray rounded w-fit hover:bg-gray_2 cursor-pointer mb-4" onclick="closeDocMenu()">
                    <img src="img/ic-menu-arrow.svg" alt="" class="h-6 w-6">
                </div>

                <div class="overflow-auto max-md:border-t-gray_3 max-md:border-t max-md:pt-2">
                    <?php $link = 'Fonctionnalités';
                    include('components/doc-menu-link.php') ?>
                    <?php $link = 'Fichiers principaux';
                    include('components/doc-menu-link.php') ?>
                    <?php $link = 'Commencer';
                    $sublinks = ['Installation', 'Utilisation'];
                    include('components/doc-menu-link.php') ?>
                    <?php $link = 'Options';
                    $sublinks = ['maxSize', 'minSize', 'saveButtonText', 'closeButtonText', 'saveButtonStyle', 'closeButtonStyle', 'modalStyle', 'croppingAspectRatio', 'resize', 'cropping', 'rotating', 'flipping', 'zooming', 'filtering', 'iaGenerating', 'croppingButtonText', 'rotatingButtonText', 'flippingButtonText', 'zoomingButtonText', 'filteringButtonText', 'iaGeneratingButtonText', 'optionButtonStyle', 'optionButtonContainerStyle', 'saveFunction', 'closeFunction', 'jqueryUiImport', 'cssImport'];
                    include('components/doc-menu-link.php') ?>
                    <?php $link = 'Images supportées';
                    $sublinks = false;
                    include('components/doc-menu-link.php') ?>
                    <?php $link = 'Navigateurs supportés';
                    $sublinks = false;
                    include('components/doc-menu-link.php') ?>
                </div>

            </div>

            <!-- Text -->
            <div class="w-full">
                <div id="doc-list-icon" class="md:hidden p-1 bg-gray rounded w-fit hover:bg-gray_2 cursor-pointer my-4 max-md:ml-10 max-sm:ml-4">
                    <img src="img/ic-list.svg" alt="" class="h-6 w-6">
                </div>
                <div class="doc-text overflow-auto h-[100vh] pr-16 max-md:px-10 max-sm:px-4 pb-32 max-md:border-t max-md:border-t-gray_3" onclick="closeDocMenu()">

                    <div>
                        <?php $title = 'Fonctionnalités';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-1">Cropxtender permet d'effectuer diverses opérations sur une image, telles que : </p>
                        <p class="mb-1">● Recadrage</p>
                        <p class="mb-1">● Rotation</p>
                        <p class="mb-1">● Retournement</p>
                        <p class="mb-1">● Zoom</p>
                        <p class="mb-1">● Filtres et effets photo</p>
                        <p class="mb-1">● Génération d'image avec l'IA (WIP)</p>
                    </div>

                    <div>
                        <?php $title = 'Fichiers principaux';
                        include('components/doc-text-title.php') ?>
                        <?php
                        $symbol = false;
                        $language = 'bash';
                        $text = 'src/ <br>
└── cropxtender.js <br><br>
examples/ <br>
├── example-basic/
    ├── cropxtender.js <br>
    ├── image.jpg <br>
    ├── index.html <br>
    ├── style.css <br>
    └── img/ <br>
└── example-editor/
    ├── cropxtender.js <br>
    ├── image.jpg <br>
    ├── index.html <br>
    ├── style.css <br>
    ├── tailwind.js <br>
    └── img/ <br>
';
                        include('components/code.php') ?>
                    </div>

                    <div>
                        <?php $title = 'Commencer';
                        include('components/doc-text-title.php') ?>
                        <?php $title = false;
                        $subtitle = 'Installation';
                        include('components/doc-text-title.php') ?>
                        <?php
                        $symbol = true;
                        $language = 'js';
                        $text = 'npm install cropxtender';
                        include('components/code.php') ?>

                        <p class="pt-4 pb-2">Dans le navigateur:</p>
                        <?php
                        $symbol = false;
                        $text = '&lt;script src="/path/to/cropxtender.js"&gt;&lt;/script&gt; <br>
&lt;script src="https://code.jquery.com/jquery-3.6.4.min.js"&gt;&lt;/script&gt;';
                        include('components/code.php') ?>

                        <?php $title = false;
                        $language = 'js';
                        $subtitle = 'Utilisation';
                        include('components/doc-text-title.php')
                        ?>
                        <p class="pt-4 pb-2">Syntaxe</p>
                        <?php
                        $symbol = false;
                        $text = '$("input").cropxtender({options})';
                        include('components/code.php') ?>

                        <ul class="mt-4">
                            <li>
                                <p class="font-semibold">● input</p>
                                <p class="ml-2">L'input cible permettant de choisir une image à traiter.</p>
                            </li>
                            <li class="mt-2">
                                <p class="font-semibold">● options</p>
                                <p class="ml-2">Les options de modification.</p>
                            </li>
                        </ul>

                        <p class="pt-6 pb-2">Exemple</p>
                        <?php
                        $symbol = false;
                        $language = 'html';
                        $text = '&lt;input type="file" name="image" id="cropxtender-input"&gt;';
                        include('components/code.php') ?> <br>

                        <?php
                        $symbol = false;
                        $language = 'js';
                        $text = '&lt;script src="https://code.jquery.com/jquery-3.6.4.min.js"&gt;&lt;/script&gt; 
&lt;script src="/path/to/cropxtender.js"&gt;&lt;/script&gt;  
&lt;script&gt; 
$("document").ready(function(){ 
    $("#cropxtender-input").cropxtender({ 
        saveButtonText: "Oui",
        closeButtonText: "Non",
        saveButtonStyle: {
            "width": "20px",
            "padding": "2rem",
        },
        closeButtonStyle: {
            "width": "20px",
            "padding": "2rem",
        }
    });
});';
        include('components/code.php') ?>

</div>
<div>
    
    <?php $title = 'Options';
                        include('components/doc-text-title.php') ?>
                        <p class="mt-4">Vous pouvez définir les options de modification avec <code class="bg-bg_code p-1 rounded text-sm">$("input").cropxtender([options])</code>.</p>
                        
                        <?php $title = false;
                        $subtitle = 'saveFunction';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Fonction de sauvegarde personnalisée.</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">Function</code></li>
                            <li>● Défaut : remplace l'image de l'input par l'image traitée</li>
                            <li>● Exemple : <code class="bg-bg_code p-1 rounded text-sm">saveFunction: function (image) {
                                console.log(image);
                                }</code></li>
                        </ul>
                        
                        <?php $title = false;
                        $subtitle = 'closeFunction';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Fonction de fermeture personnalisée.</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">Function</code></li>
                            <li>● Défaut : supprime l'élément cropxtender</li>
                            <li>● Exemple : <code class="bg-bg_code p-1 rounded text-sm">closeFunction: function () {
                                console.log("Hello World !");
                                }</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'saveButtonText';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Définir le texte du bouton de sauvegarde (HTML accepté).</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">String</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">"Valider"</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'closeButtonText';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Définir le texte du bouton de fermeture (HTML accepté).</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">String</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">"Annuler"</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'saveButtonStyle';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Définir le style CSS du bouton de sauvegarde.</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">Object</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">null</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'closeButtonStyle';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Définir le style CSS du bouton de fermeture.</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">Object</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">null</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'modalStyle';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Définir le style CSS pour la modal.</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">Object</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">null</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'resize';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Activer le redimensionnement de l'image. Avec le curseur, saisissez la bordure droite ou inférieure et faites-la glisser jusqu'à la largeur ou la hauteur souhaitée.</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">Boolean</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">true</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'resizeButtonText';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Définir le texte du bouton de redimensionnement (HTML accepté).</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">String</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">"resize"</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'cropping';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Activer le recadrage de l'image.</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">Boolean</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">true</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'croppingAspectRatio';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Conserver le rapport hauteur/largeur existant ou en définir un nouveau pour limiter les proportions lors du redimensionnement (par exemple <code class="bg-bg_code p-1 rounded text-sm">{x: 0.6, y: 1})</code>.</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">Object</code></li>
                            <li class="mb-2">● Défaut : <code class="bg-bg_code p-1 rounded text-sm">null</code></li>
                            <li>● Options : <br>
                                <p class="ml-4 mb-1">• <code class="bg-bg_code p-1 rounded text-sm">x</code> : axe  horizontale</p>
                                <p class="ml-4">• <code class="bg-bg_code p-1 rounded text-sm">y</code> : axe verticale</p>
                            </li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'croppingButtonText';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Définir le texte du bouton de recadrage (HTML accepté).</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">String</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">"Crop"</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'rotating';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Activer la rotation de l'image.</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">Boolean</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">false</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'rotatingButtonText';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Définir le texte du bouton de rotation (HTML accepté).</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">String</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">"Rotate"</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'flippingX';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Acitver le retournement de l'image sur l'axe horizontal.</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">Boolean</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">false</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'flippingXButtonText';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Définir le texte du bouton de retournement sur l'axe horizontal (HTML accepté).</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">String</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">"Flip X"</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'flipping Y';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Acitver le retournement de l'image sur l'axe vertical.</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">Boolean</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">false</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'flippingYButtonText';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Définir le texte du bouton de retournement sur l'axe vertical (HTML accepté).</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">String</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">"Flip Y"</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'zooming';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Activer le zoom/dézoom sur l'image.</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">Boolean</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">false</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'zoomingButtonText';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Définir le texte du bouton du zoom (HTML accepté).</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">String</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">"Zoom"</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'defaultZoom';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Mettre une valeur de zoom/dézoom par défaut (min: 1, max: 200).</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">Int</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">null</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'filtering';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Activer les filtres sur l'image.</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">Boolean</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">false</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'filteringButtonText';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Définir le texte du bouton des filtres (HTML accepté).</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">String</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">"Filtres"</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'defaultFilter';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Mettre une valeur de filtres sur l'image par défaut.</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">Object</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">null</code></li>
                            <li>● Exemple : 
                            <?php
                        $symbol = false;
                        $text = 'defaultFilter: {
    brightness: 200,    // (default: 100, min: 0, max: 200)
    contrast: 200,      // (default: 100, min: 0, max: 200)
    grayscale: 100,     // (default: 0, min: 0, max: 100)
    opacity: 50,        // (default: 100, min: 0, max: 100)
    saturate: 200,      // (default: 100, min: 0, max: 200)
    sepia: 200          // (default: 100, min: 0, max: 200)
}
';
                        include('components/code.php') ?>
</li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'iaGenerating';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Activer le Generated Fill sur l'image (WIP).</p>

                        <?php $title = false;
                        $subtitle = 'iaGeneratingButtonText';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Définir le texte du bouton de Generated Fill (HTML accepté).</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">String</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">"Generated Fill"</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'optionButtonStyle';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Définir le style CSS pour les boutons d'options.</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">Objet</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">null</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'optionButtonContainerStyle';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Définir le style CSS pour le conteneur des boutons d'options.</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">Objet</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">null</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'optionSliderStyle';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Définir le style CSS pour les sliders des options <code class="bg-bg_code p-1 rounded text-sm">zooming</code> et <code class="bg-bg_code p-1 rounded text-sm">filtering</code>.</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">String (CSS)</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">null</code></li>
                        </ul>


                        <?php $title = false;
                        $subtitle = 'jqueryUiImport';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Importation de jQuery UI.</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">Boolean</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">true</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'cssImport';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Importation du CSS de jQuery UI.</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">Boolean</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">true</code></li>
                        </ul>

                        <?php $title = false;
                        $subtitle = 'forceDisableCSS';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-2">Forcer la désactivation du CSS d'origine.</p>
                        <ul>
                            <li class="mb-2">● Type : <code class="bg-bg_code p-1 rounded text-sm">Boolean</code></li>
                            <li>● Défaut : <code class="bg-bg_code p-1 rounded text-sm">false</code></li>
                        </ul>
                    </div>

                    <div>
                        <?php $title = 'Images supportées';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-1">● PNG </p>
                        <p class="mb-1">● JPG/JPEG</p>
                        <p class="mb-1">● WEBP</p>
                        <p class="mb-1">● GIF</p>
                        <p class="mb-1">● BMP</p>
                    </div>

                    <div>
                        <?php $title = 'Navigateurs supportés';
                        include('components/doc-text-title.php') ?>
                        <p class="mb-1">● Chrome (dernier) </p>
                        <p class="mb-1">● Firefox (dernier)</p>
                        <p class="mb-1">● Safari (dernier)</p>
                        <p class="mb-1">● Opéra (dernier)</p>
                        <p class="mb-1">● Bord (dernier)</p>
                        <p class="mb-1">● Internet Explorer 9+</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include('scripts.php') ?>
</body>

</html>