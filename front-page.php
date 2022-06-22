<?php get_header(); ?>


<section class="hero w-full border-b border-black pb-20 md:pb-40">
    <div class="container mx-auto py-[20%] sm:py-[10%] max-w-[1200px] flex flex-col items-center justify-between gap-y-6 sm:flex-row sm:justify-center sm:items-center sm:px-20">

        <div class="w-[80%] md:w-1/2 text-center px-10 flex flex-col items-center gap-y-8 sm:text-start sm:pr-12">
            <h2 class="flex justify-center text-4xl md:text-6xl font-black text-black">Awesome Copy.<br> Awesome</h2>
            <p class="text-black -mt-6 py-8">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat, ullam.</p>
            <a href="" class="button py-2 px-6 bg-transparent border border-black text-black hover:bg-black hover:text-white">Click Me</a>
        </div>

        <div class="hero-picture w-[80%] sm:w-1/2 h-[500px] bg-gradient-to-r from-[#4C3A51] to-[#774360] border border-black shadow-md">
        </div>

    </div>
</section>


<section class="cards w-full flex border-b border-black flex-col justify-center items-center py-20 mb:py-40">

    <h2 class="text-4xl font-bold pb-8">Lorem Ipsum</h2>

    <div class="container mx-auto flex flex-col justify-center items-center gap-x-8 gap-y-4 max-w-[1200px] md:flex-row">
        <div class="w-[80%] sm:w-[60%] md:w-1/3 border border-black p-10 flex flex-col items-center">
            <div class="image">
                <img src="https://picsum.photos/seed/pic1/400/300" alt="">
            </div>
            <div class="content">
                <h2 class="text-2xl text-center font-bold mt-5">Lorem Ipsum</h2>
                <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores molestias laboriosam quidem dolorem aperiam, architecto blanditiis nobis libero! Vel, explicabo.</p>
            </div>
        </div>
        <div class="w-[80%] sm:w-[60%] md:w-1/3 border border-black p-10 flex flex-col items-center">
            <div class="image">
                <img src="https://picsum.photos/seed/pic1/400/300" alt="">
            </div>
            <div class="content">
                <h2 class="text-2xl text-center font-bold mt-5">Lorem Ipsum</h2>
                <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores molestias laboriosam quidem dolorem aperiam, architecto blanditiis nobis libero! Vel, explicabo.</p>
            </div>
        </div>
        <div class="w-[80%] sm:w-[60%] md:w-1/3 border border-black p-10 flex flex-col items-center">
            <div class="image">
                <img src="https://picsum.photos/seed/pic1/400/300" alt="">
            </div>
            <div class="content">
                <h2 class="text-2xl text-center font-bold mt-5">Lorem Ipsum</h2>
                <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores molestias laboriosam quidem dolorem aperiam, architecto blanditiis nobis libero! Vel, explicabo.</p>
            </div>
        </div>
    </div>

</section>

<section class="form w-full border-b border-black text-black py-20 mb:py-40">
    <div class="container w-[80%] max-w-[1200px] mx-auto flex flex-col justify-center items-center gap-y-3 ">
        <h2 class="text-4xl font-bold text-center pb-8">Let's get in touch!</h2>
        <form action="" class="flex flex-col sm:flex-row gap-5">
            <input type="text" placeholder="Hello, fucker" class="border border-black py-2 px-6">
            <input type="submit" class="button py-2 px-6 bg-transparent border border-black text-black hover:bg-black hover:text-white hover:cursor-pointer" value="Send">
        </form>
    </div>
</section>

<section class="grid w-full border-b border-black text-black py-20 mb:py-40">

    <div class="container mx-auto flex flex-col justify-between items-center md:flex-row gap-10 text-left text-2xl font-bold max-w-[1200px]">

        <div class="w-[80%] md:w-1/2 mason-gallery grid grid-cols-3 gap-2 order-2 md:order-1">
            <div class="box-1 border border-black hover:cursor-pointer hover:scale-110 transition-all">
                <img src="https://picsum.photos/seed/pic1/300/300" alt="">
            </div>
            <div class="box-2 border border-black hover:cursor-pointer hover:scale-110 transition-all">
                <img src="https://picsum.photos/seed/pic2/300/300" alt="">
            </div>
            <div class="box-3 border border-black hover:cursor-pointer hover:scale-110 transition-all">
                <img src="https://picsum.photos/seed/pic3/300/300" alt="">
            </div>
            <div class="box-4 border border-black hover:cursor-pointer hover:scale-110 transition-all">
                <img src="https://picsum.photos/seed/pic4/300/300" alt="">
            </div>
            <div class="box-5 border border-black hover:cursor-pointer hover:scale-110 transition-all">
                <img src="https://picsum.photos/seed/pic5/300/300" alt="">
            </div>
            <div class="box-6 border border-black hover:cursor-pointer hover:scale-110 transition-all">
                <img src="https://picsum.photos/seed/pic6/300/300" alt="">
            </div>
            <div class="box-7 border border-black hover:cursor-pointer hover:scale-110 transition-all">
                <img src="https://picsum.photos/seed/pic7/300/300" alt="">
            </div>
            <div class="box-8 border border-black hover:cursor-pointer hover:scale-110 transition-all">
                <img src="https://picsum.photos/seed/pic8/300/300" alt="">
            </div>
            <div class="box-9 border border-black hover:cursor-pointer hover:scale-110 transition-all">
                <img src="https://picsum.photos/seed/pic9/300/300" alt="">
            </div>
        </div>

        <div class="w-[80%] md:-1/2 order-1 text-center md:text-start md:order-2">
            <h2 class="text-4xl pb-8">Lorem ipsum dolor sit amet.</h2>
            <p class="font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde numquam delectus reprehenderit eligendi nostrum sapiente quia voluptas mollitia perspiciatis temporibus?</p>
        </div>

    </div>
</section>

<?php get_footer(); ?>