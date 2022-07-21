@extends('layouts.main')

@section('container')
    <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
        <div class="lg:col-span-4 md:col-span-6">
            @include ('partials.side-bar-ppid')
        </div>
        <div class="lg:col-span-8 md:col-span-6 px-4">
            <div class="underline underline-offset-8 decoration-2 decoration-[#f6ca29] text-3xl font-bold pt-10 ">
                Latar Belakang PPID
            </div>
            <div class="pt-7">
                <div class=" max-w-4xl rounded-lg overflow-hidden shadow-lg">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Latar Belakang</div>
                        <p class="text-gray-700 text-base">
                            Reformasi yang bergulir pada tahun 1998 yang ditandai dengan 3(tiga) tuntutan yaitu; demokratisasi, tranparasi dan supremasi hukum & HAM, telah membawa perubahan mendasar dalam kehidupan bermasyarakat, berbangsa dan benegara. Konsekuensi dari tuntutan reformasi tersebut salah satu diantaranya adalah ditetapkannya UU N0.14 tahun 2008 tentang Keterbukaan Informasi Publik yang bertujuan untuk mewujudkan tata kelola pemerintahan yang baik dan bertanggungjawab (good governance) melalui penerapan prinsip-prinsip akuntabilitas, transparansi dan supremasi hukum serta melibatkan partisipasi masyarakat dalam setiap proses kebijakan publik.
                        </p>
                    </div>
                </div>
            </div>
            <div class="pt-7">
                <div class=" max-w-4xl rounded-lg overflow-hidden shadow-lg">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Maksud PPID</div>
                        <p class="text-gray-700 text-base">
                            Pedoman pengelolaan Informasi dan Dokumentasi di lingkungan Kementerian Komunikasi dan Informatika dimaksudkan sebagai acuan bagi setiap Satuan Kerja dalam penyediaan, pengumpulan, pendokumentasian dan pelayanan, serta penetapan Pejabat Pengelola Informasi dan Dokumentasi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="pt-7 pb-10">
                <div class=" max-w-4xl rounded-lg overflow-hidden shadow-lg">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Tujuan PPID</div>
                        <p class="text-gray-700 text-base pb-2">
                            A. Masing-masing Satuan Kerja mampu menyediakan, mengumpulkan, mendokumentasikan dan menyampaikan informasi tentang kegiatan dan produk unit kerjanya secara akurat dan tidak menyesatkan.
                        </p>
                        <p class="text-gray-700 text-base pb-2">
                            B. Satuan Kerja mampu menyediakan, mengumpulkan, mendokumentasikan dan menyampaikan bahan dan produk informasi secara cepat dan tepat waktu.
                        </p>
                        <p class="text-gray-700 text-base">
                            C. Pejabat Pengelola Informasi dan Dokumentasi mampu memberikan pelayanan informasi secara cepat dan tepat waktu dengan biaya ringan dan cara sederhana.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
