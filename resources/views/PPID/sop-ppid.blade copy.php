<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    <title>PPID</title>
</head>
<body>
    @include('partials.navbar')
    <div class="grid grid-cols-1 md:grid-cols-12 gap-4 overflow-hidden">
        <div class="lg:col-span-4 md:col-span-6">
            @include ('partials.side-bar-ppid')
        </div>
        <div class="lg:col-span-8 md:col-span-6 px-4">
            <div class="underline underline-offset-8 decoration-2 decoration-[#f6ca29] text-3xl font-bold pt-10 ">
                Dasar Hukum Pembentukan PPID
            </div>   

            <!-- CARD A1 -->
            <div class="pt-10">
                <div class=" max-w-3xl rounded-lg overflow-hidden shadow-lg">
                    <div class="px-8 py-4">
                        <p class="text-xl font-bold mb-5 ">
                            SOP Permohonan Informasi 
                        </p>
                        <div class="img-sop" style="background-image:url(/images/a1.jpeg)"></div>
                    </div>
                </div>
            </div>

            <!-- CARD A2 -->
            <div class="pt-10">
                <div class=" max-w-3xl rounded-lg overflow-hidden shadow-lg">
                    <div class="px-8 py-4">
                        <p class="text-xl font-bold mb-5 ">
                            SOP Permohonan Informasi 
                        </p>
                        <div class="img-sop" style="background-image:url('/images/a2.jpeg')"></div>
                    </div>
                </div>
            </div>

            <!-- CARD B1 -->
            <div class="pt-10">
                <div class=" max-w-3xl rounded-lg overflow-hidden shadow-lg">
                    <div class="px-8 py-4">
                        <p class="text-xl font-bold mb-5 ">
                            SOP Keberatan Atas Pemberian Informasi publik
                        </p>
                        <div class="img-sop" style="background-image:url('/images/b1.jpeg')"></div>
                    </div>
                </div>
            </div>

            <!-- CARD B2 -->
            <div class="pt-10">
                <div class=" max-w-3xl rounded-lg overflow-hidden shadow-lg">
                    <div class="px-8 py-4">
                        <p class="text-xl font-bold mb-5 ">
                            SOP Keberatan Atas Pemberian Informasi publik
                        </p>
                        <div class="img-sop" style="background-image:url('/images/b2.jpeg')"></div>
                    </div>
                </div>
            </div>
    </div>

</body>
</html>