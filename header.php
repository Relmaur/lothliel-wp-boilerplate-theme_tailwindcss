<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo() ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>

    <header class="container mx-auto flex justify-between items-center my-3">
        <div class="logo hover:cursor-pointer">
            <h2 class="font-sans font-black text-4xl">Logo</h2>
        </div>
        <nav class="mt-[3px]">
                
            <?php wp_nav_menu(array(
                'menu_class' => 'flex justify-center items-center gap-x-3 text-xs',
                'container' => 'ul',
                'walker' => new Walker_Nav_Primary_Lothliel(),
                'theme_location' => 'primary',
                'before' => '',
                'after' => ''
            )) ?>

            <?php /* Hardcoded Menu... */ ?>
            <!-- <ul class="flex justify-center items-center gap-x-3 text-xs">
                <li class="after:content-[''] after:block after:w-full after:h-[3px] after:bg-black hover:cursor-pointer">Home</li>
                <li class="hover:cursor-pointer after:content-[''] after:block after:w-0 after:h-[3px] after:bg-black hover:after:animate-grow">Services</li>
                <li class="hover:cursor-pointer after:content-[''] after:block after:w-0 after:h-[3px] after:bg-black hover:after:animate-grow">About</li>
                <li class="hover:cursor-pointer after:content-[''] after:block after:w-0 after:h-[3px] after:bg-black hover:after:animate-grow">Blog</li>
                <li class="hover:cursor-pointer after:content-[''] after:block after:w-0 after:h-[3px] after:bg-black hover:after:animate-grow">Contact</li>
            </ul> -->
        </nav>
    </header>