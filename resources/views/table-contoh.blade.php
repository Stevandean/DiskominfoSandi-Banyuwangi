<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    @include ('partials.navbar')
    <div class="min-h-screen bg-blue-300 py-5">
        <div class='overflow-x-auto w-full'>
            <table class='mx-auto max-w-6xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
                <thead class="bg-gray-900">
                    <tr class="text-white text-left">
                        <th></th>
                        <th class="font-semibold text-sm uppercase px-6 py-4"> Acara </th>
                        <th class="font-semibold text-sm uppercase text-center px-6 py-4"> </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div class="inline-flex w-60 h-50 mx-auto"> 
                                    <img class='object-cover rounded-xl' src='https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg'/> 
                                </div>
                            </div>
                        </td>
                    
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div>
                                    <p> Kunjungan ke panti asuhan sukorejo </p>
                                    <p class="text-gray-500 text-sm font-semibold tracking-wide"> 12 - juni - 2020 </p>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 text-center"> <span class="text-white text-sm w-1/3 pb-1 bg-blue-600 font-semibold px-2 rounded-full"> Details </span> </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div class="inline-flex w-60 h-50 mx-auto"> 
                                    <img class='object-cover rounded-xl' src='https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg'/> 
                                </div>
                            </div>
                        </td>
                    
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div>
                                    <p> Kunjungan ke panti asuhan sukorejo </p>
                                    <p class="text-gray-500 text-sm font-semibold tracking-wide"> 12 - juni - 2020 </p>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 text-center"> <span class="text-white text-sm w-1/3 pb-1 bg-blue-600 font-semibold px-2 rounded-full"> Details </span> </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div class="inline-flex w-60 h-50 mx-auto"> 
                                    <img class='object-cover rounded-xl' src='https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg'/> 
                                </div>
                            </div>
                        </td>
                    
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div>
                                    <p> Kunjungan ke panti asuhan sukorejo </p>
                                    <p class="text-gray-500 text-sm font-semibold tracking-wide"> 12 - juni - 2020 </p>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 text-center"> <span class="text-white text-sm w-1/3 pb-1 bg-blue-600 font-semibold px-2 rounded-full"> Details </span> </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>