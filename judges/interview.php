<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../dist/output.css" rel="stylesheet">
    <link href="../css/judges.css" rel="stylesheet">

    <!-- jqeuery library -->
    <script src="../js/jquery/jquery.js"></script>
    <title>Production</title>
</head>
<body class="h-screen m-h-screen flex flex-col items-center justify-center">
    <div>
        <h5 class="font-[900] text-4xl tracking-wider text-gray-800">Ice L. Tuazon</h5>
    </div>
    <div class="flex gap-12 mt-10 w-full">
        <div class="w-1/2 flex items-center justify-center">
            <div class="w-[380px] rounded-md">
                <img src="../images/candidates/1.jpg" alt="" class="rounded-md shadow-xl">
            </div>
        </div>
        <div class="w-1/2 p-6 flex flex-col gap-3 px-12">
            <h1 class="text-center font-bold text-2xl bg-gray-300 py-2 rounded-md w-full text-gray-800 shadow-sm">PRODUCTION</h1>
           <form action="" class="w-full p-6 border border-gray-500/50 rounded-md flex flex-col gap-3 mt-6 shadow-md" >
                <div class="h-[45px] flex gap-6">
                    <div class="flex items-center justify-between flex-1 text-md font-semibold text-2xl">
                        <p>Content/substance</p>
                        <span>50%</span>
                    </div>
                    <input type="number" class="border border-gray-500 rounded-md px-6 w-[100px] font-bold text-xl" maxlength="3">
                </div>
                <div class="h-[45px] flex gap-6">
                    <div class="flex items-center justify-between flex-1 text-md font-semibold text-2xl">
                        <p>Delivery and proficiency</p>
                        <span>30%</span>
                    </div>
                    <input type="number" class="border border-gray-500 rounded-md px-6 w-[100px] font-bold text-xl" maxlength="3">
                </div>
                <div class="h-[45px] flex gap-6">
                    <div class="flex items-center justify-between flex-1 text-md font-semibold text-2xl">
                        <p>Over all confidence & impact</p>
                        <span>20%</span>
                    </div>
                    <input type="number" class="border border-gray-500 rounded-md px-6 w-[100px] font-bold text-xl" maxlength="3">
                </div>
                <div class="border-t border-gray-400 mt-6"></div>
                <div class="h-[45px] flex gap-6">
                    <div class="flex items-center justify-between flex-1 text-md font-semibold text-2xl">
                        <p>Total</p>
                        <span>25%</span>
                    </div>
                    <input type="number" class="border border-gray-500 rounded-md px-6 w-[100px] font-bold text-xl" maxlength="3" disabled>
                </div>
                <div>
                    <button class="px-6 py-2 bg-blue-400 hover:bg-blue-500 rounded-md mt-10 font-semibold text-white float-right">Submit</button>
                </div>
           </form>
        </div>
    </div>
</body>

<!-- <script src="../js/judges/index.js"></script> -->

</html>