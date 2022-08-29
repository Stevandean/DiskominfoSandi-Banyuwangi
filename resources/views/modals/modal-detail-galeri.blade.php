<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal</title>
</head>
<body>

<!-- Main modal -->
<div id="defaultModal" tabindex="-1" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex transition-all modal"  role="dialog">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex justify-between items-start p-4 rounded-t border-b border-gray-600 mx-5">
                <h3 class="text-xl font-semibold text-gray-900">
                    {{ $gallery -> title }}
                </h3>
                <h3 class="text-lg text-center font-semibold">
                {{ $gallery -> created_at }}
                </h3>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-3">
                <div class="flex flex-wrap">
                    <p class="text-base leading-relaxed font-semibold">
                        Preview :
                    </p>
                    <img src="/images/prev.png">
                </div>
                <div class="flex flex-wrap">
                    <p class="text-base  leading-relaxed font-semibold">
                        Description :
                    </p>
                    <p class="text-base leading-relaxed mx-2 break-all">
                        Sequi possimus commodi qui. Eos reprehenderit ut neque quod necessitatibus. Veniam nisi quia non voluptatem quis alias provident maxime......
                    </p>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 mx-5 space-x-2 rounded-b border-t border-gray-600">
                <button data-modal-toggle="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 close-modal">Close</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>