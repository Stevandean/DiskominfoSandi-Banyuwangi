<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Visi - Misi</title>
</head>
<body>
    @include('partials.navbar')
    <div class="text-center underline underline-offset-8 decoration-2 decoration-[#f6ca29] text-5xl font-bold pt-10 pb-5 ">
        Visi - Misi
    </div>
    <div class="pt-7 pr-9 grid grid-cols-4">
        <div></div>
        <div class=" m-auto rounded-lg overflow-hidden shadow-lg col-span-3">
            <div class="px-6 py-4">
                <div class="underline underline-offset-4 decoration-2 decoration-[#f6ca29] text-3xl font-bold pb-2">
                    Visi
                </div>
                <p class="text-gray-700 text-base py-2">
                    Terwujudnya masyarakat Banyuwangi yang semakin sejahtera, mandiri, dan berakhlak mulia melalui peningkatan perokonomian dan kualitas sumber daya manusia
                </p>
            </div>
        </div>
    </div>
    <div class="pt-7 pl-7 grid grid-cols-4">
        <div class=" m-auto rounded-lg overflow-hidden shadow-lg col-span-3">
            <div class="px-6 py-4">
                <div class="underline underline-offset-4 decoration-2 decoration-[#f6ca29] text-3xl font-bold pb-2">
                    Misi
                </div>
                <p class="text-gray-700 text-base py-2">
                    Mewujudkan tata pemerintahan yang baik dan bersih (Good and clean governance) serta layanan publik yang berkualitas berbasis teknologi informasi.
                </p>
            </div>
        </div>
    </div>
</body>
</html>