@extends('guest.layouts.main')

@push('additional-css')
	<link rel="stylesheet" href="css/galery.css">
	
@endpush

@section('container')
	<section class="section-galeri">
		<div class="body-galeri">
			<div class="container-galeri">
				<div class="card">
					<div class="content">
						<div class="imgLayanan">
							<img src="/images/helpdesk.png" width="50px" height="50px">
						</div>
						<div class="contentBx">
							<h3 class="h3-galeri">Helpdesk</h3>
						</div>
					</div>
					<ul class="sci">
						<li>
							<a>IT Help Desk merupakan sebuah center point dimana masalah atau issue dilaporkan dan diatur secara terurut dan diorganisasikan. IT Help Desk merupakan bagian pelengkap dari sebuah fungsi pelayanan, dan bertanggung jawab sebagai sumber dari pemecahan masalah atau issue lainnya.</a>
						</li>
					</ul>
				</div>
				<div class="card">
					<div class="content">
						<div class="imgLayanan">
							<img src="/images/pengaduan.png" width="50px" height="50px">
						</div>
						<div class="contentBx">
							<h3 class="h3-galeri">Pengaduan</h3>
						</div>
					</div>
					<ul class="sci">
						<li>
							<a>IT Help Desk merupakan sebuah center point dimana masalah atau issue dilaporkan dan diatur secara terurut dan diorganisasikan. IT Help Desk merupakan bagian pelengkap dari sebuah fungsi pelayanan, dan bertanggung jawab sebagai sumber dari pemecahan masalah atau issue lainnya.</a>
						</li>
					</ul>
				</div>
				<div class="card">
					<div class="content">
						<div class="imgLayanan">
							<img class="img-cctv" src="/images/cctv.png">
						</div>
						<div class="contentBx">
							<h3 class="h3-galeri">CCTV</h3>
						</div>
					</div>
					<ul class="sci">
						<li>
							<a>IT Help Desk merupakan sebuah center point dimana masalah atau issue dilaporkan dan diatur secara terurut dan diorganisasikan. IT Help Desk merupakan bagian pelengkap dari sebuah fungsi pelayanan, dan bertanggung jawab sebagai sumber dari pemecahan masalah atau issue lainnya.</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<div class="circle"></div>
	
@endsection
