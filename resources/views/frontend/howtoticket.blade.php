@extends('layouts.master')

@section('content')
<div class="fullpage-wrapper">
	<section class="section page-ticket section-banner p-0">
		<img class="w-100" src="{{ url('/images/ticket/banner.jpg') }}" />
	</section>

	<section id="section3" class="section page-ticket section-detail pb-0">
		<div class="bg-top"></div>
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12 col-md-11 col-lg-10 col-xl-9">

					<div class="row justify-content-center align-items-center mb-5">
						<div class="col-12 col-md-6">
							<div class="desc text-center text-md-left">
								<div class="mb-3 color-navy">
									<div class="text-large font-reg mb-2">วิธีการรับตั๋วชมภาพยนตร์</div>
									<span class="text-large">2,215</span><span class="text-medium"> เชื่อ บ้า กล้า ก้าว</span> 
									<span class="text-extra-large font-reg pl-2 pr-2 bg-gray">ฟรี</span>
								</div>
								<div class="col-8 col-md-9 m-auto m-md-0">
									<img class="w-100 mt-3 mb-4 mt-md-0 mb-md-0" src="{{ url('/images/ticket/logo.png') }}" />
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<img class="w-100" src="{{ url('/images/ticket/poster.png') }}" />
						</div>
					</div>

					<div class="row justify-content-center align-items-center mb-4 box ml-xs-0 mr-xs-0">
						<div class="col-12 col-sm-3 col-md-2 pr-30 text-center">
							<img class="w-sm-100 mb-sm-30" src="{{ url('/images/ticket/icon1.png') }}" />
						</div>
						<div class="col-12 col-sm-9 col-md-10 text-center text-sm-left">
							<div class="text-medium">
								ภาพยนตร์จะเข้าฉายตั้งแต่วันที่ 6 – 16 กันยายน 2561 <br class="d-none d-lg-block" />
								ที่โรงภาพยนตร์ในเครือเมเจอร์ ซีนีเพล็กซ์ และ เอส เอฟ ทั่วประเทศ
							</div>
						</div>
					</div>
					<div class="row justify-content-center align-items-center mb-4 box ml-xs-0 mr-xs-0">
						<div class="col-12 col-sm-3 col-md-2 pr-30 text-center">
							<img class="w-sm-100 mb-sm-30" src="{{ url('/images/ticket/icon2.png') }}" />
						</div>
						<div class="col-12 col-sm-9 col-md-10 text-center text-sm-left">
							<div class="text-medium">
								วันจันทร์-ศุกร์ ฉายให้ชม 1 รอบ<br />
								และเสาร์-อาทิตย์ ฉายให้ชม 2 รอบ
							</div>
						</div>
					</div>
					<div class="row justify-content-center align-items-center mb-5 box ml-xs-0 mr-xs-0">
						<div class="col-12 col-sm-3 col-md-2 pr-30 text-center">
							<img class="w-sm-100 mb-sm-30" src="{{ url('/images/ticket/icon3.png') }}" />
						</div>
						<div class="col-12 col-sm-9 col-md-10 text-center text-sm-left">
							<div class="text-medium">
								สามารถเข้าคิวรับบัตรชมภาพยนตร์ได้ฟรี ที่บริเวณหน้าโรง <br class="d-none d-lg-block" />
								โดยสามารถเช็ครอบและโรงได้ที่เว็บไซด์และ Application <br class="d-none d-lg-block" />
								โรงภาพยนตร์ทั้งเมเจอร์ ซีนีเพล็กซ์ และ เอส เอฟ
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

</div>
@endsection

@section('script')

<script type="text/javascript">
// $(document).ready(function() {
// 	alert();
// 	var img = document.createElement('img');
//         img.src = "http://fullahead.org/work/stackoverflow/animated.gif?p" + new Date().getTime();
//         $div.text('Loading...');
        
//         $(img).load(function(){
//             $div.css({backgroundImage: "url("+img.src+")"});
//             $div.text('Stop');
//         });
// });
</script>

@endsection