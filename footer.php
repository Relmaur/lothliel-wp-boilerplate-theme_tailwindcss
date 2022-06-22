<footer>
    <section class="border-b border-black text-black py-20 mb:py-40">
        <div class="container mx-auto flex flex-col gap-x-3 justify-center items-center">
            <div class="logo hover:cursor-pointer">
                <h2 class="font-sans font-black text-4xl"><a href="<?php echo get_home_url() ?>">Logo</a></h2>
            </div>
            <div class="socialnetworks pt-5 flex gap-x-3 text-xl">

                <?php if (get_theme_mod('loth-themeinfo-display-facebook') == 'Yes') : ?>
                    <a href="#">
                        <i class="fa-brands fa-facebook text-black  hover:cursor-pointer"></i>
                    </a>
                <?php endif; ?>
                <?php if (get_theme_mod('loth-themeinfo-display-twitter') == 'Yes') : ?>
                    <a href="#">
                        <i class="fa-brands fa-twitter text-black  hover:cursor-pointer"></i>
                    </a>
                <?php endif; ?>
                <?php if (get_theme_mod('loth-themeinfo-display-instagram') == 'Yes') : ?>
                    <a href="#">
                        <i class="fa-brands fa-instagram text-black  hover:cursor-pointer"></i>
                    </a>
                <?php endif; ?>
                <?php if (get_theme_mod('loth-themeinfo-display-linkedin') == 'Yes') : ?>
                    <a href="#">
                        <i class="fa-brands fa-linkedin text-black  hover:cursor-pointer"></i>
                    </a>
                <?php endif; ?>

                <?php /* Hardcoded socmed... */ ?>
                <!-- <i class="fa-brands fa-facebook text-black  hover:cursor-pointer"></i>
                <i class="fa-brands fa-twitter text-black  hover:cursor-pointer"></i>
                <i class="fa-brands fa-instagram text-black  hover:cursor-pointer"></i>
                <i class="fa-brands fa-linkedin text-black  hover:cursor-pointer"></i> -->
                
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>
</body>

</html>