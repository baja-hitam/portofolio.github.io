<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <style>
        *{
            scroll-behavior: smooth;
        }
        .point::after{
            content: '';
            position: absolute;
            width: 100%;
            height: 4px;
            background-color: rgb(30,64,175);
            bottom: -8px;
            left: 0;
            border-radius: 2px;
        }
    </style>
</head>
<body class="overflow-x-hidden">
    <div class="w-full h-12 p-1 pl-4 box-border flex items-center">
        <p class="mr-10 text-lg italic lg:text-3xl sm:text-xl md:text-2xl"><span class="text-teal-500 font-bold">R</span>akha</p>
        <ul class="flex w-full justify-end">
            <li class="mx-2 transition-all hover:text-slate-600 lg:text-lg"><a href="#about">About</a></li>
            <li class="mx-2 transition-all hover:text-slate-600 lg:text-lg"><a href="#expertise">Expertise</a></li>
            <li class="mx-2 transition-all hover:text-slate-600 lg:text-lg"><a href="#contact">Contact</a></li>
        </ul>
    </div>
    <div class="w-full flex flex-col mt-7 md:flex-row-reverse md:justify-between md:px-8">
        <div class="w-52 h-52 mx-auto rounded-full shadow-lg shadow-black/30 bg-cover bg-center bg-black md:w-54 md:h-54 md:m-0 lg:w-60 lg:h-60 lg:mr-16" style="background-image: url(img/rakha.jpeg);">

        </div>
        <div class="w-auto mx-auto box-border p-3 mt-5 text-center md:w-2/5 md:m-4 md:text-justify lg:ml-14">
            <h1 class="font-semibold italic text-slate-800">Hello</h1>
            <h1 class="text-3xl font-semibold text-slate-800 md:text-5xl">I'm Rakha</h1>
            <p class="text-xs text-slate-500">Freelance Front Ent Developer, also passionate making beautiful illustrations and icons</p>
        </div>
    </div>
        <section id="about">
            <div class="w-10/12 h-auto my-4 mx-auto md:flex">
                <div class="w-10/12 mx-auto h-52 bg-cover rounded-md shadow-lg shadow-slate-800/40 bg-black sm:h-64 md:w-1/2 lg:h-72 xl:h-80" style="background-image: url(img/unsplash.jpg);">

                </div>
                <div class="md:flex md:flex-col md:w-2/4 md:px-2">
                        <div class="mt-4 text-center">
                        <h1 class="text-2xl font-semibold  text-slate-800">About Me</h1>
                        <ul class="flex flex-row justify-center mt-3 nav">
                            <li class="mr-3 relative after:transition-all after:absolute after:w-0 after:h-1 after:bg-blue-800 after:bottom-[-6px] after:left-0 after:rounded-sm after:hover:w-full"><a class="inline_block relative h-1 hover:cursor-pointer klik_menu" id="life">Life</a></li>
                            <li class="relative after:transition-all after:absolute after:w-0 after:h-1 after:bg-blue-800 after:bottom-[-6px] after:left-0 after:rounded-sm after:hover:w-full"><a class="inline_block relative h-1 hover:cursor-pointer klik_menu point" id="education">Education</a></li>
                            <li class="ml-3 relative after:transition-all after:absolute after:w-0 after:h-1 after:bg-blue-800 after:bottom-[-6px] after:left-0 after:rounded-sm after:hover:w-full"><a class="inline_block relative h-1 hover:cursor-pointer klik_menu" id="experience">Experience</a></li>
                        </ul>
                    </div>
                    <div class="w-full p-3 flex flex-col text-justify badan">
                    </div>
                </div>
            </div>
        </section>
        <section id="expertise">
            <div class="w-11/12 flex flex-col items-center mx-auto">
                <span>
                    <h1 class="text-2xl font-semibold text-slate-800">Expertise</h1>    
                </span>
                    <p class="text-center text-xs text-slate-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni, ut.</p>
                <div class="w-full flex flex-col items-center md:flex md:flex-row relative lg:justify-around">
                    <div class="w-4/5 flex relative flex-col items-center mt-7 bg-white px-2 py-8 transition-all shadow-xl rounded-2xl md:hover:w-10/12 md:hover:z-10 md:hover:left-0 md:hover:relative md:hover:top-[-30px] lg:w-[30%] lg:hover:w-[32%]">
                        <img src="img/coding.png" style="width: 50px; height: 50px;">
                        <h1 class="text-xl font-medium text-slate-800 my-3">Coding</h1>
                        <p class="text-center text-sm text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptates in ipsam esse incidunt voluptatibus porro odio facilis officiis exercitationem?</p>
                    </div>
                    <div class="w-4/5 flex relative flex-col items-center mt-7 bg-white px-2 py-8 transition-all shadow-xl rounded-2xl md:hover:w-10/12 md:hover:z-10 md:hover:left-0 md:hover:relative md:hover:top-[-30px] lg:w-[30%] lg:hover:w-[32%]">
                        <img src="img/internet.png" style="width: 50px; height: 50px;">
                        <h1 class="text-xl font-medium text-slate-800 my-3">Online</h1>
                        <p class="text-center text-sm text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptates in ipsam esse incidunt voluptatibus porro odio facilis officiis exercitationem?</p>
                    </div>
                    <div class="w-4/5 flex relative flex-col items-center mt-7 bg-white px-2 py-8 transition-all shadow-xl rounded-2xl md:hover:w-10/12 md:hover:z-10 md:hover:left-0 md:hover:relative md:hover:top-[-30px] lg:w-[30%] lg:hover:w-[32%]">
                        <img src="img/video-marketing.png" style="width: 50px; height: 50px;">
                        <h1 class="text-xl font-medium text-slate-800 my-3">Responsive Design</h1>
                        <p class="text-center text-sm text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptates in ipsam esse incidunt voluptatibus porro odio facilis officiis exercitationem?</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div id="footer" class="w-full h-20 flex flex-col items-center bg-blue-500 mt-9">
                <span class="text-white text-lg font-medium">Contact</span>
                <div>
                    <a href="https://www.instagram.com/raka_ryzen/" class="inline-block w-6 h-6 bg-cover mx-2" style="background-image: url(img/instagram.jpg);"></a>
                    <a href="https://api.whatsapp.com/send?phone=6285714136293" class="inline-block w-6 h-6 bg-cover mx-2" style="background-image: url(img/whatsapp.jpg);"></a>
                    <a href="#" class="inline-block w-6 h-6 bg-cover mx-2" style="background-image: url(img/twitter.jpg);"></a>
                </div>
                <span class="text-white text-xs italic">Copyright By Rakha Ahmad ~ Tailwind CSS</span>
            </div>
        </section>
</body>
<script type="text/javascript">
$(document).ready(function(){
$('.klik_menu').click(function(){
var menu = $(this).attr('id');
if(menu == "education"){
$('.badan').load('education.php');						
}else if(menu == "life"){
$('.badan').load('life.php');						
}else if(menu == "experience"){
$('.badan').load('experience.php');						
}   
});
// halaman yang di load default pertama kali
$('.badan').load('education.php');						
});

$(document).ready(function(){
    $('.nav li a').click(function(){
        $('li a').removeClass("point");
        $(this).addClass("point");
    });
});
</script>
</html>