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

					<div class="row justify-content-center align-items-center mt-5 mb-3">
						<div class="col-12 desc text-center mt-3">
							<div class="mb-3 color-navy text-medium font-reg">
								ทุกๆ ท่านสามารถดู “2,215 เชื่อ บ้า กล้า ก้าว” <br class="d-block c-md-none" />ได้ทั่วประเทศไทย ผ่าน 3 ช่องทาง ดังนี้ :
							</div>
						</div>
					</div>

					<div class="row justify-content-center align-items-center mb-4 box ml-xs-0 mr-xs-0">
						<div class="col-12 col-sm-3 col-md-2 pr-30 text-center">
							<img class="w-xs-auto w-100 mb-sm-30" src="{{ url('/images/ticket/icon1.png') }}" />
						</div>
						<div class="col-12 col-sm-9 col-md-10 text-center text-sm-left">
							<div class="text-medium">
								1. ชมฟรี ในโรงภาพยนตร์เครือ Major Cineplex  และ SF วันที่ 6 - 16 กันยายน 
							</div>
							<div class="text-small">
								เช็ครอบฉายของโรงภาพยนตร์ในเครือ Major Cineplex  และ SF ที่คุณต้องการชม ผ่าน www.majorcineplex.com หรือ Application Major group และ www.sfcinemacity.com หรือ Application Sf Cinema<br />
								จันทร์-ศุกร์ กรุงเทพและปริมณฑล รอบเวลา 19.00น. / ต่างจังหวัด รอบเวลา 18.00น. <br />
								เสาร์-อาทิตย์ วันละ 2 รอบ 13.00น. และ 15.00น. ทั่วประเทศ<br />
								รับบัตรได้ที่โต๊ะลงทะเบียนบริเวณหน้าโรงภาพยนตร์ 1 ชั่วโมงก่อนการรอบฉาย
								1 ท่าน ต่อ 1 ที่นั่งเท่านั้น<br />
								First come First Serve สำหรับท่านที่มาถึงก่อน จะได้รับบัตรที่นั่งแถวด้านบนก่อน
								ที่นั่งในแต่ละสาขามีจำนวนจำกัด
								</div>
						</div>
					</div>
					<div class="row justify-content-center align-items-center mb-4 box ml-xs-0 mr-xs-0">
						<div class="col-12 col-sm-3 col-md-2 pr-30 text-center">
							<img class="w-xs-auto w-100 mb-sm-30" src="{{ url('/images/ticket/icon2.png') }}" />
						</div>
						<div class="col-12 col-sm-9 col-md-10 text-center text-sm-left">
							<div class="text-medium">
								2. ซื้อบัตรชมในราคาต้นทุนโรงภาพยนตร์ 50 - 90 บาท ในเครือ Major Cineplex  และ SF ตั้งแต่ 6 กันยายนเป็นต้นไป
							</div>
							<div class="text-small">
								เช็ครอบฉายและราคาบัตรของโรงภาพยนตร์ในเครือ Major Cineplex  และ SF  ที่คุณต้องการชม<br class="d-none d-lg-block" />
								สามารถซื้อตั๋วล่วงหน้าผ่านเว็บและแอปของ Major Cineplex  และ SF
							</div>
						</div>
					</div>
					<div class="row justify-content-center align-items-center mb-5 box ml-xs-0 mr-xs-0">
						<div class="col-12 col-sm-3 col-md-2 pr-30 text-center">
							<img class="w-xs-auto w-100 mb-sm-30" src="{{ url('/images/ticket/icon3.png') }}" />
						</div>
						<div class="col-12 col-sm-9 col-md-10 text-center text-sm-left">
							<div class="text-medium">
								3. กิจกรรมพิเศษ ดูหนังฟรี 14 – 16 กันยายนนี้ สนับสนุนโดย คิง เพาเวอร์
							</div>
							<div class="text-small">
								ที่สนามกีฬาแห่งชาติ อาคารกีฬานิมิบุตร โดย King Power Thai Power พลังคนไทย วันละ 4 รอบ ได้แก่ <br class="d-none d-lg-block" />
								12.00 น./14.30 น. /17.00 น./19.30 น. (ลงทะเบียนรับบัตรก่อนรับชมภาพยนตร์ 1 ชม.) <br class="d-none d-lg-block" />
								รวมเป็น 12 รอบ รวมที่นั่งฟรีทั้งหมดกว่า 30,000  ที่นั่ง
							</div>
						</div>
					</div>

					<div class="row justify-content-center align-items-center mt-5 mb-5">
						<div class="col-12 desc text-center mt-3">
							<div class="mb-3 color-navy text-large font-reg">
								แล้วมาส่งต่อกำลังใจดีๆ ผ่านภาพยนตร์ <br class="d-block c-md-none" /><span class="font-reg pl-2 pr-2 bg-gray">“2,215 เชื่อ บ้า กล้า ก้าว”</span><br />
								6 กันยายนนี้เป็นต้นไป <br class="d-block c-md-none" />ในโรงภาพยนตร์เครือ Major Cineplex  และ SF
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