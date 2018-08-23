@extends('layouts.master')

@section('content')
<div class="fullpage-wrapper">
	<section id="target" class="section section-home section-banner">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12 col-md-11 col-lg-10 col-xl-9">

					<div class="row justify-content-between align-items-start">
						<div class="col-12 col-md-8 p-0 pb-4 tl2-fadeInLeft">
							<div class="h-title color-blue font-light">
								ยอดเงินบริจาค
								<div class="d-inline">
									<img src="{{ url('/images/logo_sup-1.png') }}" />
								</div>
							</div>
							<div class="box tl-fadeInUp-2 color-yellow">
								<h1 id="blance_total">
									<b class="show_balance">0</b>
									<b>.</b>
									<b class="show_balance_decimal">00</b> 
									<span class="color-yellow">บาท</span>
								</h1>
							</div>
							<div class="desc pb-3">
								เพื่อจัดซื้ออุปกรณ์ทางการแพทย์<br />
								ให้แก่อาคารนวมินทรบพิตร ๘๔ พรรษา<br />
								คณะแพทยศาสตร์ศิริราชพยาบาล มหาวิทยาลัยมหิดล
							</div>
							<div class="pb-5 pt-5 mt-5 mb-5 w-100"></div>
							<div class="pb-5 pt-5 mt-5 mb-5 w-100"></div>
						</div>
						<div class="col-12 col-md-4 pt-5 tl2-fadeInRight align-self-end">
							<img class="mt-5 tl-fadeInUp" src="{{ url('/images/home/p_toon_banner.png') }}" />
						</div>
					</div>

					<div class="row row-bottom justify-content-end">
						<div class="col-auto">
							<a class="btn-icon-circle btn-share-deposit" href="javascript:;"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="right-box sidebanner active slideLeft pb-15 pr-10 pl-30">
			<a class="btn show-section">
				<span><span class="hidden-xs">วิธี</span>บริจาค</span><img class="hidden-xs" src="{{ url('/images/banner/icon_donate.png') }}" />
			</a>
			<div class="icon-list">
				<div class="col">
					<div class="item">
						<a class="btn-icon" href="{{ url('/howto/?step=sms') }}"><img src="{{ url('/images/icon/icon_donate_SMS.png') }}" /></a>
					</div>
				</div>
				<div class="col">
					<div class="item">
						<a class="btn-icon" href="{{ url('/howto/?step=bookbank') }}"><img src="{{ url('/images/icon/icon_donate_book.png') }}" /></a>
					</div>
				</div>
				<div class="col">
					<div class="item">
						<a class="btn-icon" href="{{ url('/howto/?step=promtpay') }}"><img src="{{ url('/images/icon/icon_donate_prompt_pay.png') }}" /></a>
					</div>
				</div>
				<div class="col">
					<div class="item">
						<a class="btn-icon" href="{{ url('/howto/?step=atm') }}"><img src="{{ url('/images/icon/icon_donate_ATM.png') }}" /></a>
					</div>
				</div>
				<div class="col">
					<div class="item">
						<a class="btn-icon" href="{{ url('/howto/?step=easynet') }}"><img src="{{ url('/images/icon/icon_donate_Easy_Net.png') }}" /></a>
					</div>
				</div>
				<div class="col">
					<div class="item">
						<a class="btn-icon" href="{{ url('/howto/?step=easyapp') }}"><img src="{{ url('/images/icon/icon_donate_easy_app.png') }}" /></a>
					</div>
				</div>
				<div class="col">
					<div class="item">
						<a class="btn-icon" href="{{ url('/howto/?step=other') }}"><img src="{{ url('/images/icon/icon_box.png') }}" /></a>
					</div>
				</div>
			</div>
		</div>

	</section>
	<div class="trigger3"></div>

	<section id="section2" class="section section-home section-video">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12 col-md-11 col-lg-10 col-xl-9">

					<div class="h-title text-right text-italic color-navy mb-2">ตัวอย่างภาพยนตร์</div>
					<div class="row justify-content-center justify-content-md-end">
						<div class="col-12 col-md-9 p-0 tl2-fadeInRight">
							<div class="iframe-wrapper" id="iframe-wrapper">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/xUssbTpky7o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<section id="section3" class="section section-home section-detail pb-0">
		<div class="bg-top"></div>
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12 col-md-11 col-lg-10 col-xl-9">

					<div class="row justify-content-center align-items-end">
						<div class="col-12 col-md-5 p-0 tl2-fadeInLeft">
							<img class="w-100" src="{{ url('/images/home/p_toon.png') }}" />
						</div>
						<div class="col-12 col-md-7 p-0 pb-4 tl2-fadeInRight">
							<div class="desc text-right">
								<div class="mb-3 text-italic color-navy">
									<div class="text-extra-large font-reg mb-2">ภาพยนตร์ “2,215 เชื่อ บ้า กล้า ก้าว”</div>
									<div class="text-medium mb-3">ตลอด 55 วันของ "ก้าวคนละก้าว" ทุกเหตุการณ์ ทุกแง่มุม ทุกดราม่า<br />
									น่าจะถูกเล่าออกสื่อไปหมดแล้ว.. ยกเว้นเรื่องราวจากกล้องตัวนี้</div>
									<div class="mb-3">
									นี่คือภาพยนตร์คลุกวงใน ที่จะพาคุณฝ่าฝูงชนไปค้นลึกถึงเบื้องหลัง<br />
									แรงขับของนักร้องน่องเหล็กพี่ตูน-บอดี้สแลม ผู้แบกฝัน ฝ่าแดด ลุยฝน<br />
									ไล่ตามความเชื่อไปจนถึงแสงสุดท้ายโดยทีมงานทีมเดียวที่ตามติดถ่ายทำ<br />
									เข้านอกออกในแบบไม่เคาะประตู (ยกเว้นตอนเข้าห้องน้ำ)
									</div>
									<span class="text-medium">บนเส้นทางจากเบตงถึงแม่สาย<br />
									มาค้นพบแรงบันดาลใจไปพร้อมกัน</span> 
									<span class="text-large font-reg"> ทีละก้าว</span>
								</div>
								<div class="align-self-center ">
									<span class="text-italic">ชมฟรี วันที่ 6-16 ก.ย. 61</span>
									<a class="ml-3 btn d-inline-block" href="#">วิธีรับตั๋วชมภาพยนตร์</a>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</section>
	<section id="section4" class="section section-home section-howto pb-3">
		<div class="container main pt-2 pb-2 pt-md-4 pb-md-4">
			<div class="h-title text-center text-italic mb-30">วิธีบริจาค</div>
			<div class="trigger4"></div>
			<div class="row justify-content-center">
				<div class="col-12 col-md-11 col-lg-10 col-xl-9">
					
					<div class="row justify-content-center icon-list">
						<div class="col-6 col-md-3 pl-3 pr-3 pl-md-4 pr-md-4 mb-2 tl3-fadeInUp">
							<div class="item">
								<a class="btn-icon" href="{{ url('/howto/?step=sms') }}"><img src="{{ url('/images/icon/icon_donate_SMS.png') }}" /></a>
							</div>
							<div class="text">SMS<br /><br /></div>
						</div>
						<div class="col-6 col-md-3 pl-3 pr-3 pl-md-4 pr-md-4 mb-2 tl3-fadeInUp">
							<div class="item">
								<a class="btn-icon" href="{{ url('/howto/?step=bookbank') }}"><img src="{{ url('/images/icon/icon_donate_book.png') }}" /></a>
							</div>
							<div class="text">บัญชีธนาคาร<br /><br /></div>
						</div>
						<div class="col-6 col-md-3 pl-3 pr-3 pl-md-4 pr-md-4 mb-2 tl3-fadeInUp">
							<div class="item">
								<a class="btn-icon" href="{{ url('/howto/?step=promtpay') }}"><img src="{{ url('/images/icon/icon_donate_prompt_pay.png') }}" /></a>
							</div>
							<div class="text">QR Code<br />Promptpay</div>
						</div>
						<div class="col-6 col-md-3 pl-3 pr-3 pl-md-4 pr-md-4 mb-2 tl3-fadeInUp">
							<div class="item">
								<a class="btn-icon" href="{{ url('/howto/?step=atm') }}"><img src="{{ url('/images/icon/icon_donate_ATM.png') }}" /></a>
							</div>
							<div class="text">SCB ATM<br /><br /></div>
						</div>
						<div class="col-6 col-md-3 pl-3 pr-3 pl-md-4 pr-md-4 mb-2 tl3-fadeInUp">
							<div class="item">
								<a class="btn-icon" href="{{ url('/howto/?step=easynet') }}"><img src="{{ url('/images/icon/icon_donate_Easy_Net.png') }}" /></a>
							</div>
							<div class="text">SCB EASY NET<br /><br /></div>
						</div>
						<div class="col-6 col-md-3 pl-3 pr-3 pl-md-4 pr-md-4 mb-2 tl3-fadeInUp">
							<div class="item">
								<a class="btn-icon" href="{{ url('/howto/?step=easyapp') }}"><img src="{{ url('/images/icon/icon_donate_easy_app.png') }}" /></a>
							</div>
							<div class="text">SCB EASY APP<br /><br /></div>
						</div>
						<div class="col-6 col-md-3 pl-3 pr-3 pl-md-4 pr-md-4 mb-2 tl3-fadeInUp">
							<div class="item">
								<a class="btn-icon" href="{{ url('/howto/?step=other') }}"><img src="{{ url('/images/icon/icon_box.png') }}" /></a>
							</div>
							<div class="text">ช่องทางอื่น<br /><br /></div>
						</div>
					</div>
					<div class="mt-3 text-center">
						<a class="ml-3 btn d-inline-block pt-3 pb-3 pl-4 pr-4" href="javascript:;" data-toggle="modal" data-target="#popup-receipt">การขอใบเสร็จรับเงิน</a>
					</div>

				</div>
			</div>

		</div>
	</section>
</div>

<div class="modal fade" id="popup-banner" tabindex="-1">
    <div class="modal-dialog modal-lg centered" role="document">
        <div class="modal-content">
    		<span aria-hidden="true" class="close" data-dismiss="modal">&times;</span>
            <div class="modal-body">
                
            	<div class="row justify-content-center align-items-center m-0">
            		<div class="col-12 p-0">
            			<img class="w-100" src="{{ url('/images/home/QR-banner.png') }}" />
            		</div>
            	</div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="popup-receipt" tabindex="-1">
    <div class="modal-dialog modal-lg centered" role="document">
        <div class="modal-content">
    		<span aria-hidden="true" class="close" data-dismiss="modal">&times;</span>
            <div class="modal-body p-30">
                <div class="head-title text-center mb-2">
                    <h1>วิธีการขอใบเสร็จรับเงิน</h1>
                </div>
                <div class="detail">
                	เมื่อบริจาค 200 บาทขึ้นไป  หากท่านต้องการใบเสร็จรับเงิน
					กรุณาส่งหลักฐานการบริจาคเงินและแจ้งรายละเอียดสำหรับออกใบเสร็จรับเงิน มาที่
					งานการเงิน ฝ่ายการคลัง คณะแพทยศาสตร์ศิริราชพยาบาล ตึกชัยนาทนเรนทรานุสรณ์ ชั้น 2
					<div class="mt-10 mb-10 bg-lightblue p-2 text-small">
						1. ชื่อ - นามสกุล และที่อยู่สำหรับออกใบเสร็จรับเงิน<br />
						2. กรณี บริษัท โปรดแจ้งเลขประจำตัวผู้เสียภาษี และสาขา<br />
						3. วัน/เดือน/ปีเกิด หมายเลขโทรศัพท์<br />
						4. ชื่อ - นามสกุล และที่อยู่สำหรับจัดส่งใบเสร็จรับเงิน ( กรณีที่ไม่ตรงกับข้อ 1 )
					</div>
					<div class="text-small">
						ในวันเวลาราชการ วันจันทร์ - ศุกร์ ( ยกเว้นวันหยุดราชการ และนักขัตฤกษ์ )  เวลา : 08.30 - 15.30 น.<br />
						โทรศัพท์ : 02-419-7184 ต่อ 543<br />
						โทรสาร : 02-419-9440 ( ระบุ โครงการ ก้าวคนละก้าว )<br />
						E-mail : sicashier@mahidol.ac.th
					</div>
                </div>
            </div>
        </div>
    </div>
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