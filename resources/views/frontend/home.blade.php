@extends('layouts.master')

@section('content')
<!-- <div class="loading">Loading&#8230;</div> -->
<div class="fullpage-wrapper page">
	<section id="target" class="section section-home section-banner tl-fadeIn">
		<div id="bg1" class="bg1 tl-fadeIn d-none d-md-block">
			<img realsrc="" src="{{ url('/images/home/animate-banner.gif') }}" />
		</div>
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12 text-center text-md-left col-md-11 col-lg-10 col-xl-9">

					<div class="row justify-content-between align-items-start">
						<div class="col-12 col-md-8 p-0 pb-1 pb-md-4">
							<div class="h-title color-blue font-light tl-fadeInUp">
								ยอดเงินบริจาค
								<div class="d-inline">
									<img src="{{ url('/images/logo_sup-1.png') }}" />
								</div>
							</div>
							<div class="box color-yellow tl-fadeInUp">
								<h1 id="blance_total">
									<b class="show_balance tl-flipX">0</b>
									<b class="show_balance tl-flipX">0</b>
									<b class="show_balance tl-flipX">0</b>
									<b class="show_balance tl-flipX">0</b>
									<b>.</b>
									<b class="show_balance_decimal tl-flipX">0</b> 
									<b class="show_balance_decimal tl-flipX">0</b> 
									<span class="color-yellow">บาท</span>
								</h1>
							</div>
							<div class="desc pb-3 tl-fadeInUp">
								เพื่อจัดซื้ออุปกรณ์ทางการแพทย์<br />
								ให้แก่อาคารนวมินทรบพิตร ๘๔ พรรษา<br />
								คณะแพทยศาสตร์ศิริราชพยาบาล มหาวิทยาลัยมหิดล
							</div>
							<div class="d-none d-md-block pb-md-5 pt-md-5 mt-md-5 mb-md-5 w-100"></div>
							<div class="d-none d-md-block pb-md-5 pt-md-5 mt-md-5 mb-md-5 w-100"></div>
						</div>
						<div class="col-12 col-md-4 pt-md-5 align-self-end p-xs-0 p-sm-0">
							<img class="mt-5 tl-fadeIn d-none d-md-block" src="{{ url('/images/home/p_toon_banner.png') }}" />
							<img class="d-block d-md-none w-100" realsrc="" src="{{ url('/images/home/animate-banner-mb.gif') }}" />
						</div>
					</div>

					<div class="row row-bottom justify-content-end-md ml-0 mr-0">
						<div class="col-auto">
							<a class="btn-icon-circle ani btn-share-deposit" href="javascript:;"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="right-box sidebanner active slideLeft pb-15 pr-10 pl-30">
			<a class="btn show-section">
				<span><span class="hidden-xs">วิธี</span>บริจาค</span><img class="d-none d-md-block" src="{{ url('/images/banner/icon_donate.png') }}" />
			</a>
			<div class="row justify-content-start icon-list ml-0 mr-0">
				<div class="col col-6">
					<div class="item">
						<a class="btn-icon" href="{{ url('/howto/?step=sms') }}"><img src="{{ url('/images/icon/icon_donate_SMS.png') }}" /></a>
					</div>
				</div>
				<div class="col col-6">
					<div class="item">
						<a class="btn-icon" href="{{ url('/howto/?step=bookbank') }}"><img src="{{ url('/images/icon/icon_donate_book.png') }}" /></a>
					</div>
				</div>
				<div class="col col-6">
					<div class="item">
						<a class="btn-icon" href="{{ url('/howto/?step=promtpay') }}"><img src="{{ url('/images/icon/icon_donate_prompt_pay.png') }}" /></a>
					</div>
				</div>
				<div class="col col-6">
					<div class="item">
						<a class="btn-icon" href="{{ url('/howto/?step=atm') }}"><img src="{{ url('/images/icon/icon_donate_ATM.png') }}" /></a>
					</div>
				</div>
				<div class="col col-6">
					<div class="item">
						<a class="btn-icon" href="{{ url('/howto/?step=easynet') }}"><img src="{{ url('/images/icon/icon_donate_Easy_Net.png') }}" /></a>
					</div>
				</div>
				<div class="col col-6">
					<div class="item">
						<a class="btn-icon" href="{{ url('/howto/?step=easyapp') }}"><img src="{{ url('/images/icon/icon_donate_easy_app.png') }}" /></a>
					</div>
				</div>
				<div class="col col-6">
					<div class="item">
						<a class="btn-icon" href="{{ url('/howto/?step=other') }}"><img src="{{ url('/images/icon/icon_box.png') }}" /></a>
					</div>
				</div>
			</div>
		</div>

	</section>
	<div class="trigger2"></div>

	<section id="section2" class="section section-home section-video">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12 col-md-11 col-lg-10 col-xl-9">

					<div class="h-title text-center text-md-right text-italic color-navy mb-2">ตัวอย่างภาพยนตร์</div>
					<div class="row justify-content-center justify-content-md-end">
						<div class="col-12 col-md-9 p-0 tl2-fadeInRight">
							<div class="iframe-wrapper" id="iframe-wrapper">
								
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<section id="section3" class="section section-home section-detail pb-0">
		<div class="bg-top d-none d-md-block"></div>
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12 col-md-11 col-lg-10 col-xl-9">

					<div class="trigger3"></div>
					<div class="row justify-content-center align-items-end">
						<div class="col-12 col-md-5 p-0 tl3-fadeInLeft">
							<img class="w-100 d-none d-md-block" src="{{ url('/images/home/p_toon.png') }}" />
							<img class="w-100 d-block d-md-none" style="margin-top: -10px;" realsrc="" src="{{ url('/images/home/bg-animate-banner-mb-2.gif') }}" />
						</div>
						<div class="col-12 col-md-7 p-0 pb-4 tl3-fadeInRight">
							<div class="desc text-center text-md-right">
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
								<div class="align-self-center">
									<span class="text-italic text-xs-medium">ชมฟรี วันที่ 6-16 ก.ย. 61</span>
									<br clear="d-block d-md-none" />
									<br clear="d-block d-md-none" />
									<a class="ml-md-3 btn d-inline-block" href="#"><span class="pl-4 pr-4">วิธีรับตั๋วชมภาพยนตร์</span></a>
								</div>
							</div>
						</div>
						<div class="col-12 d-block d-md-none p-0">
							<img class="w-100" src="{{ url('/images/home/bg-animate-banner-mb-2.jpg') }}" />
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<div class="trigger4"></div>
	<section id="section4" class="section section-home section-howto pb-3">
		<div class="container main pt-2 pb-2 pt-md-4 pb-md-4">
			<div class="h-title text-center text-italic mb-30">วิธีบริจาค</div>
			<div class="row justify-content-center">
				<div class="col-12 col-md-11 col-lg-10 col-xl-9">
					
					<div class="row justify-content-start justify-content-md-center icon-list tl4-fadeInUp">
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
						<a class="ml-md-3 btn d-inline-block pt-3 pb-3 pl-4 pr-4" href="javascript:;" data-toggle="modal" data-target="#popup-receipt"><span class="pl-4 pr-4">การขอใบเสร็จรับเงิน</span></a>
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

@section('scripts')
<script type="text/javascript">
	// function onReady(callback) {
	//   var intervalId = window.setInterval(function() {
	//     if (document.getElementsByTagName('body')[0] !== undefined) {
	//       window.clearInterval(intervalId);
	//       callback.call(this);
	//     }
	//   }, 1000);
	// }

	// function setVisible(selector, visible) {
	//   document.querySelector(selector).style.display = visible ? 'block' : 'none';
	// }

	// onReady(function() {
	//   setVisible('.page', true);
	//   setVisible('.loading', false);
	// });

    var controller = new ScrollMagic.Controller();

    TweenMax.from(".slideLeft", 0.75, {x:100, opacity:0, autoAlpha:0, ease:Power1.easeInOut});
    TweenMax.from(".slideRight", 1.0, {x:-100, opacity:0, autoAlpha:0, ease:Power1.easeInOut});
    TweenMax.to(".ani", 0.5, {y:5, ease:Power1.easeInOut, repeat:-1, yoyo:true});

    var tl = new TimelineMax();
    // {delay: 0.5,immediateRender: false}
    $(window).on("load", function() {
        tl
            .staggerFrom(".tl-fadeIn", 0.5, {opacity:0, zIndex:2, autoAlpha:0}, 0.35)
            .staggerFrom(".tl-fadeInUp", 0.45, {opacity:0, y: 100, autoAlpha:0}, 0.35)
            .staggerFrom(".tl-fadeInDown", 0.45, {opacity:0, y: -100, autoAlpha:0}, 0.25)
            .staggerFrom(".tl-flipX", 0.25, {opacity:0, rotationX:360, autoAlpha:0}, 0.15)
            .staggerFrom(".tl-flipY", 0.25, {opacity:0, rotationY:360, autoAlpha:0}, 0.15);
            $('#iframe-wrapper').html('<iframe width="560" height="315" src="https://www.youtube.com/embed/xUssbTpky7o" frameborder="0" encrypted-media" allowfullscreen></iframe>');
    });

    $(window).on("resize", resize);
    resize();

    function resize() {
        if (window.matchMedia("(min-width: 769px)").matches) {

            var scene0 = new ScrollMagic.Scene({triggerElement: "#target", offset: 500})
            .setClassToggle(".sidebanner", "addbg").addTo(controller);

            var scene1 = new ScrollMagic.Scene({triggerElement: "#target", offset: 500})
            .setClassToggle(".sidebanner", "unactive").addTo(controller);

            var tl2 = new TimelineMax();
            tl2
                .staggerFrom(".tl2-fadeInLeft", 0.25, {opacity:0, x: -100, ease:Power1.easeInOut})
                .staggerFrom(".tl2-fadeInRight", 0.25, {opacity:0, x: 100, ease:Power1.easeInOut});
            var scene2 = new ScrollMagic.Scene({ triggerElement: ".trigger2"}).setTween(tl2).addTo(controller);

            var tl3 = new TimelineMax();
            tl3
                .staggerFrom(".tl3-fadeInLeft", 0.25, {opacity:0, x: -100, ease:Power1.easeInOut})
                .staggerFrom(".tl3-fadeInRight", 0.25, {opacity:0, x: 100, ease:Power1.easeInOut});
            var scene2 = new ScrollMagic.Scene({ triggerElement: ".trigger3"}).setTween(tl3).addTo(controller);

            var tl4 = new TimelineMax();
            tl4
                .staggerFrom(".tl4-fadeInUp", 0.3, {opacity:0, scale: 0.5, y: 200, ease:Power1.easeInOut}, 0.1);;
            var scene4 = new ScrollMagic.Scene({ triggerElement: ".trigger4"}).setTween(tl4).addTo(controller);

        } else {
            $('.sidebanner').removeClass('active');
            controller.enabled(false);
            // tl.kill();
        }
    }

</script>

@endsection