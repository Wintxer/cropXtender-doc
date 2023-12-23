<?php $title='Contact'; include('head.php') ?>

<body>

    <?php include('header.php') ?>

    <main>
        <h1 class="text-center font-bold md:pt-32 pt-24 text-lg">Contactez-nous !</h1>

        <div class="flex justify-around px-16 md:mt-16 mt-8 items-center max-md:flex-col max-md: pb-16">
            <div class="flex flex-col items-center md:mr-20 max-md:mb-8">
                <div>
                    <div class="flex mb-4">
                        <img src="img/ic-email.svg" alt="" class="mr-3">
                        <p>cropxtender@gmail.com</p>
                    </div>
                    <div class="flex mb-4">
                        <div class=" w-[27px] mr-3"><img src="img/ic-phone.svg" alt="" class="m-auto"></div>
                        <p>06 77 88 99 00</p>
                    </div>
                    <div class="flex">
                        <div class=" w-[27px] mr-3"><img src="img/ic-adress.svg" alt="" class="m-auto"></div>
                        <p>47 Bd Pesaro, 92000 Nanterre</p>
                    </div>
                </div>

                <div class="w-[300px] h-px bg-white rounded my-4"></div>

                <div class="max-md:relative max-md:mb-4 right-0 flex items-end">
                    <a href=""><img src="img/ic-instagram.svg" alt="" class="h-6 mr-4"></a>
                    <a href=""><img src="img/ic-twitter.svg" alt="" class="w-6 mr-4"></a>
                    <a href=""><img src="img/ic-facebook.svg" alt="" class="h-6 mr-4"></a>
                    <a href=""><img src="img/ic-linkedin.svg" alt="" class="w-6"></a>
                </div>
            </div>

            <div>
                <form action="">
                    <div class="flex flex-col mb-3">
                        <label for="name" class="text-sm">Prénom NOM<span class="required">*</span></label>
                        <input type="text" name="name" class="h-8 rounded py-4 px-2 text-black w-[300px]" required>
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="email" class="text-sm">Adresse mail<span class="required">*</span></label>
                        <input type="email" name="email" class="h-8 rounded py-4 px-2 text-black w-[300px]" required>
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="object" class="text-sm">Objet<span class="required">*</span></label>
                        <input type="text" name="object" class="h-8 rounded py-4 px-2 text-black w-[300px]" required>
                    </div>
                    <div class="flex flex-col">
                        <label for="message" class="text-sm">Message<span class="required">*</span></label>
                        <textarea name="message" id="" cols="30" rows="10"
                            class="h-8 rounded py-4 px-2 text-black w-[300px] min-h-[150px]" required></textarea>
                    </div>

                    <button type="submit" class="btn m-auto mt-8">Envoyer</button>
                </form>
            </div>
        </div>
    </main>

    <?php include('scripts.php') ?>
</body>

</html>