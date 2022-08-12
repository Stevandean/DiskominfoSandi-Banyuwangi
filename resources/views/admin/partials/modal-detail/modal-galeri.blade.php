<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Modal</title>
</head>
<body>

<!-- Modal toggle -->
<button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center show-modal" type="button" data-modal-toggle="defaultModal">
   Modal Galeri
</button>

<!-- Main modal -->
<div id="defaultModal" tabindex="-1" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex transition-all modal hidden" aria-modal="true" role="dialog">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex justify-between items-start p-4 rounded-t border-b border-gray-600 mx-5">
                <h3 class="text-xl font-semibold text-gray-900">
                    Galery Terbaru
                </h3>
                <h3 class="text-lg text-center font-semibold">
                    19 - July - 2022
                </h3>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-3">
                <div class="flex">
                    <p class="text-base leading-relaxed font-semibold">
                        Judul :
                    </p>
                    <p class="text-base leading-relaxed mx-2">
                        dicta voluptatibus explicabo libero
                    </p>
                </div>
                <div class="flex">
                    <p class="text-base leading-relaxed font-semibold">
                        File :
                    </p>
                    <p class="text-base leading-relaxed mx-2">
                        afdadasdkajsdnaknf.jpg
                    </p>
                </div>
                <div class="flex flex-wrap">
                    <p class="text-base leading-relaxed font-semibold">
                        Preview :
                    </p>
                    <img src="/images/prev.png">
                </div>
                <div class="flex">
                    <p class="text-base leading-relaxed font-semibold">
                        Type :
                    </p>
                    <p class="text-base  leading-relaxed bg-[#71FF40] rounded-full px-3 mx-2">
                        Image
                    </p>
                </div>
                <div class="flex flex-wrap">
                    <p class="text-base  leading-relaxed font-semibold">
                        Body :
                    </p>
                    <p class="text-base leading-relaxed mx-2 break-all">
                        Sequi possimus commodi qui. Eos reprehenderit ut neque quod necessitatibus. Veniam nisi quia non voluptatem quis alias provident maxime......
                    </p>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 mx-5 space-x-2 rounded-b border-t border-gray-600">
                <button data-modal-toggle="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Save</button>
                <button data-modal-toggle="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 close-modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    const modal = document.querySelector('.modal')
    const showModal = document.querySelector ('.show-modal')
    const closeModal = document.querySelectorAll('.close-modal')

    showModal.addEventListener ('click', function () {
        modal.classList.remove ('hidden')
    });

    closeModal.forEach(el => {
        el.addEventListener ('click', function () {
            modal.classList.add ('hidden')
        });
    })
</script>
</body>
</html>