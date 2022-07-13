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
            @include ('partials.side-bar-ppid')
        </div>
        <div class="lg:col-span-8 md:col-span-6 px-4">
            <div class="underline underline-offset-8 decoration-2 decoration-[#f6ca29] text-4xl font-bold pt-10 ">
                Pedoman PPID
            </div>
            <div class="max-w-4xl">
                <p class="text-xl font-bold pt-10 text-center ">
                    BUPATI BANYUWANGI
                </p>
                <p class="text-xl font-bold pt-7 text-center ">
                    PERATURAN BUPATI BANYUWANGI
                    NOMOR 19 TAHUN 2012
                </p>
                <p class="text-xl font-bold pt-7 text-center ">
                    TENTANG
                </p>
                <p class="text-lg font-bold pt-1 text-center">
                    PEDOMAN PELAYANAN INFORMASI DAN DOKUMENTASI
                    DI LINGKUNGAN PEMERINTAH KABUPATEN BANYUWANGI
                    DENGAN RAHMAT TUHAN YANG MAHA ESA
                    BUPATI BANYUWANGI
                </p>
            </div>
            <!-- <div>
                <iframe class="m-auto h-3/4 w-3/4" src="pdf/PERBUP_NO_19_Pedoman_PPID.pdf" frameBorder="0" scrolling="auto"></iframe>
            </div> -->
            <div class="p-10">
                <iframe class="m-auto" src="pdf/PERBUP_NO_19_Pedoman_PPID.pdf" frameBorder="0" scrolling="auto" height="550px" width="700px" ></iframe>
            </div>
        </div>
    </div>
</body>
</html>