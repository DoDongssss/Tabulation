<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../dist/output.css" rel="stylesheet">
    <link href="../css/judges.css" rel="stylesheet">
    <link href="../css/toastr.css" rel="stylesheet">

    <!-- jqeuery library -->
    <script src="../js/jquery/jquery.js"></script>
    <script src="../js/jquery/toastr.js"></script>
    <title>Production</title>
</head>
<body class="h-screen m-h-screen flex flex-col items-center justify-center">
    <div>
        <h5 class="font-[900] text-4xl tracking-wider text-gray-800">Fritz L. Tuazon</h5>
    </div>
    <div class="flex gap-12 mt-10 w-full">
        <div class="w-1/2 flex items-center justify-center">
            <div class="absolute w-[380px] rounded-md">
            <span class="absolute top-[-15px] left-[-15px] h-[45px] flex items-center font-[900] text-2xl justify-center w-[45px] rounded-full text-white bg-blue-400" id="candidateNumber"></span>
                <img src="" alt="" class="rounded-md shadow-xl" id="candidateImage">
            </div>
        </div>
        <div class="w-1/2 p-6 flex flex-col gap-3 px-12">
            <h1 class="text-center font-bold text-2xl bg-gray-300 py-2 rounded-md w-full text-gray-800 shadow-sm">PRODUCTION</h1>
           <form action="" class="w-full p-6 border border-gray-500/50 rounded-md flex flex-col gap-3 mt-6 shadow-md" id="submitProduction">
                <div class="h-[45px] flex gap-6">
                    <div class="flex items-center justify-between flex-1 text-md font-semibold text-2xl">
                        <p>Body figure & proportion</p>
                        <span>25%</span>
                    </div>
                    <input type="text" class="border border-gray-500 rounded-md px-6 w-[100px] font-bold text-xl" maxlength="2" id="score1" value="" required>
                </div>
                <div class="h-[45px] flex gap-6">
                    <div class="flex items-center justify-between flex-1 text-md font-semibold text-2xl">
                        <p>Body figure % proportion</p>
                        <span>25%</span>
                    </div>
                    <input type="text" class="border border-gray-500 rounded-md px-6 w-[100px] font-bold text-xl" maxlength="2" id="score2" value="" required>
                </div>
                <div class="h-[45px] flex gap-6">
                    <div class="flex items-center justify-between flex-1 text-md font-semibold text-2xl">
                        <p>Poise, bearing & confidence</p>
                        <span>25%</span>
                    </div>
                    <input type="text" class="border border-gray-500 rounded-md px-6 w-[100px] font-bold text-xl" maxlength="2" id="score3" value="" required>
                </div>
                <div class="h-[45px] flex gap-6">
                    <div class="flex items-center justify-between flex-1 text-md font-semibold text-2xl">
                        <p>Over all stage appeal</p>
                        <span>25%</span>
                    </div>
                    <input type="text" class="border border-gray-500 rounded-md px-6 w-[100px] font-bold text-xl" maxlength="2" id="score4" value="" required>
                </div>
                <div class="border-t border-gray-400 mt-6"></div>
                <div class="h-[45px] flex gap-6">
                    <div class="flex items-center justify-between flex-1 text-md font-semibold text-2xl">
                        <p>Total</p>
                        <span>100%</span>
                    </div>
                    <input type="number" class="border border-gray-500 rounded-md px-6 w-[100px] font-bold text-xl" maxlength="3" id="totalScore" disabled>
                </div>
                <div>
                    <button class="px-6 py-2 bg-blue-400 hover:bg-blue-500 rounded-md mt-10 font-semibold text-white float-right">Submit</button>
                </div>
           </form>
        </div>
    </div>
</body>

<script src="../js/judges/production.js"></script>

</html>