<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <link href="../css/judges.css" rel="stylesheet">

    <!-- jqeuery library -->
    <script src="../js/jquery/jquery.js"></script>
    <title>contestant</title>
</head>

<body class="relative min-h-screen h-screen flex flex-col items-center justify-center p-12" id="body">
    <video autoplay loop muted class="absolute object-cover z-0 h-full w-full">
        <source src="../videos/background.mp4" type="video/mp4">
    </video>
    <div id="contestantList" class="flex flex-wrap gap-6 items-center justify-center">

    </div>
    <button class="z-10 px-4 py-2 tracking-widerz bg-blue-300 rounded-md cursor-pointer mt-[5rem] font-semibold text-xl text-white hover:bg-blue-400">
        <a href="production.php">Proceed</a>
    </button>
</body>

<script src="../js/judges/index.js"></script>

</html>

<!-- <div class="relative h-[280px] w-[280px] ">
    <span class="absolute top-[-15px] left-[-15px] h-[50px] flex items-center font-[900] text-2xl justify-center w-[50px] rounded-full text-white bg-green-400/90">1</span>
    <img src="../images/sample.jpg" alt="" class="rounded-md shadow-md h-[225px]">
    <p class="text-center mt-3 font-semibold italic text-xl">Jeschelle Tuazon</p>
</div> -->