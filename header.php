<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo() ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6c639c9033.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body>

    <header class="container relative mx-auto flex justify-between items-center my-3 px-5 sm:px-0">
        <div class="logo hover:cursor-pointer">
            <h2 class="font-sans font-black text-4xl"><a href="<?php echo get_home_url() ?>">Logo</a></h2>
        </div>
        <nav class="mt-[3px] flex flex-col justify-center items-center md:flex-row">

            <i class="fas fa-bars md:hidden hover:cursor-pointer"></i>

            <?php wp_nav_menu(array(
                'menu_class' => 'hidden absolute z-20 top-full p-5 left-[calc(100%+120px)] min-w-[200px] transition-all duration-200 flex flex-col gap-y-3 bg-white border-black border-[0.5px] md:p-0 md:flex md:flex-row md:justify-center md:items-center md:gap-x-3 md:static md:text-sm md:border-0',
                'container' => 'ul',
                'walker' => new Walker_Nav_Primary_Lothliel(),
                'theme_location' => 'primary',
                'before' => '',
                'after' => ''
            )) ?>

            <?php /* Hardcoded Menu... */ ?>
            <!-- <ul class="relative flex justify-center items-center gap-x-3 text-xs">
                <li class="after:content-[''] after:block after:w-full after:h-[3px] after:bg-black hover:cursor-pointer first:hidden">Home</li>
                <li class="hover:cursor-pointer after:content-[''] after:block after:w-0 after:h-[3px] after:bg-black hover:after:animate-grow">Services</li>
                <li class="hover:cursor-pointer after:content-[''] after:block after:w-0 after:h-[3px] after:bg-black hover:after:animate-grow">About</li>
                <li class="hover:cursor-pointer after:content-[''] after:block after:w-0 after:h-[3px] after:bg-black hover:after:animate-grow">Blog</li>
                <li class="hover:cursor-pointer after:content-[''] after:block after:w-0 after:h-[3px] after:bg-black hover:after:animate-grow">Contact</li>
            </ul> -->
        </nav>
    </header>