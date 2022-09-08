#  Presentasi 
`ini adalah markdown untuk membuat presentasi nantinya
markdown ini hanya untuk kasaran dan bahan untuk presiapan presentasi
juga untuk membuat alur dan struktur timeline presentasi`

### Alur
+ Alur A (`idealnya`)
	+ dimulai dari halaman beranda home [letak error]
	+ disertai penjelasan mengenai fitur-fitur ataupun partial umum 
		+ (seperti navbar, up toggle, card dll)
	+ untuk ulasan setiap halaman akan dibuatkan dalam file ppt tersendiri untuk ulasan struktur dan fiturnya (`dibuat nanti`)
	+   ketika menjelaskan setiap fitur dan struktur halaman, disertakan pula bagaimana preview halaman itu ketika dalam berbagai ukuran layar.
	+ selesai satu halaman maka lanjut halaman berikutnya hingga seluruh halaman guest sudah di presentasikan
	+ ketika beralih ke halaman admin, disini ketika login dijelaskan pula bagaimana dan apa sistem keamanan yang digunakan (`sistem autentikasi, authorisasi, session dan lain-lain`)
	+ jangan lupa pula, disini jelaskan pula struktur tabel yang digunakan dalam aplikasi ini, terutama tabel user, karena disini hanya diperlukan ada 1 orang admin, maka operasi CREATE, READ, UPDATE, DELETE`"CRUD"` yang menyangkut dengan user tidak disertakan dalam aplikasi.
	+ jadi untuk menambahkan user baru, datanya langsung di inject ke database.
	+ selanjutnya barulah melanjutkan penjelasan dan deskripsi masing-masing halaman admin sampai akhir
	+ ketika menjelaskan setiap halaman, jelasakan pula bagaimana validasi setiap data dalam operasi CRUD
	+ selesai

+ Alur B (`versi singkat`)
	+ ketika halaman `A` maka bilang "jadi seperti ini tampilan dan struktur halaman `A`.
	+ lanjut hingga halaman selesai
	+ khusus untuk beranda guest, sampaikan secara singkat errornya
	+ selesai
+ Alur C (` mungkin `)
	+ gk perlu presentasi


### Error
+ Pada halaman beranda, resource yang didapat dari berita Banyuwangikab.go.id melalui scrapping tidak dapat ditampilkan.
+ setelah dilakuakan sedikit pencarian digoogle didapati bahwa error itu disebab kan oleh adanya bagian sertifikan ssl di Banyuwangikab.go.id yg tidak sesuai.
+ error ini masih dalam tahap penyelesaian dan akan dicoba untuk di diskusikan kembali


### Rawan Celah Keamanan
|Celah| bagian  | deskripsi |
|--|--|--|
|rawan MITM 1 | HomeController.php ::  baris 42  | karena serifikat ssl bermasalah, maka setiap request tidak dapat diverivikasi pemiliknya
|rawan MITM 2| guest\home.blade.php | karena mengambil data resource yg sertifikatnya sedang bermasalah
|rawan XSS 1| setiap component yg mendapat data dari class| karena membutuhkan data yang tidak di escape karakternya maka digunakan sintaks ini `{!!  $data  !!}`, data dibutuhkan untuk menginisialisasi component


