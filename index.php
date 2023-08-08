<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="min-h-screen h-screen bg-cover" style="background-image: url('images/login.jpg');">
     <div class="flex w-[100%] h-[100%] flex-col justify-center items-center">
        <div class="container h-[50%] w-[50%]  flex flex-col justify-center items-center">
                <h1 class="font-semibold text-white text-2xl mb-5">Login</h1>
                <svg class="absolute top-[305px] left-[583px]" xmlns="http://www.w3.org/2000/svg" height="1.8em" viewBox="0 0 448 512">
                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <style>svg{fill:#ffffff}</style>
                    <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                </svg>
                <input class="relative w-[50%] h-[50px] border-none mb-5 bg-white text-white bg-opacity-50 placeholder-white" style="padding-left:45px;"  type="text" placeholder="Username">
                <svg class="absolute top-[375px] left-[583px]"  xmlns="http://www.w3.org/2000/svg" height="1.8em" viewBox="0 0 448 512">
                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <style>svg{fill:#ffffff}</style><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/>
                </svg>
                <input class="relative w-[50%] h-[50px] border-none  bg-white text-white bg-opacity-50 placeholder-white mb-10" style="padding-left:45px;"   type="password" placeholder="Password"> 
                <button class="bg-white w-[50%] h-[50px] rounded-full text-grey-600 bg-opacity-50 text-white"><span>Login</span></button>            
        </div>
     </div>
  
</body>
</html>