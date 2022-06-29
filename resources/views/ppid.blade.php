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
    <title>PPID</title>
</head>
<body>
    @include('partials.navbar')
    <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
        <div class="lg:col-span-4 md:col-span-6">
            <div class="wrapper pt-10 lg:px-10">
                <div class="
                    box-border
                    w-80
                    top-100px
                    border-2
                    rounded-t-xl
                    text-center
                    p-3
                    text-[#f6ca29]
                    font-bold
                    text-3xl
                    mx-auto
                ">
                    <h1>PPID</h1>
                </div>
                <div class="grid grid-cols-1 divide-y divide-black w-80 mx-auto pt-3" >
                    <div class="py-2">01</div>
                    <div class="py-2">02</div>
                    <div class="py-2">03</div>
                </div>
            </div>
        </div>
        <div class="lg:col-span-8 md:col-span-6 px-4">
            <div class="underline underline-offset-8 decoration-2 decoration-[#f6ca29] text-3xl font-bold pt-10 ">
                PPID (Pejabat Pengelola Informasi dan Dokumentasi)
            </div>
            <!-- <div class="w-10/12  mt-7 bg-cover" style="background-image:url(https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg); height: 500px"></div> -->
            <div class="img-ppid" style="background-image:url(https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg)"></div>
            <!-- <img class="w-10/12 h-28 pt-7 " src="https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg" /> -->
        </div>
    </div>

</body>
</html>