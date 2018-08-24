@extends('layouts.master')

@section('content')
<div class="fullpage-wrapper">
	<section class="section section-howto">
		<div class="content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 col-lg-8 col-xl-7 pb-3 pt-3">
						
						<div class="tabs-left row justify-content-cente align-items-start">
							<div class="nav nav-tabs col-12 col-md-2 pt-1" id="nav-tab" role="tablist">
								<a class="nav-item nav-link @if(!isset($_GET['step'])) active @endif @if(isset($_GET['step']) && $_GET['step'] == 'sms') active @endif" href="#a" data-toggle="tab">
									<div class="item">
										<div class="a"><img src="{{ url('/images/icon/icon_donate_SMS.png') }}" /></div>
									</div>
								</a>
								<a class="nav-item nav-link @if(isset($_GET['step']) && $_GET['step'] == 'bookbank') active @endif" href="#b" data-toggle="tab">
									<div class="item">
										<div class="a"><img src="{{ url('/images/icon/icon_donate_book.png') }}" /></div>
									</div>
								</a>
								<a class="nav-item nav-link @if(isset($_GET['step']) && $_GET['step'] == 'promtpay') active @endif" href="#c" data-toggle="tab">
									<div class="item">
										<div class="a"><img src="{{ url('/images/icon/icon_donate_prompt_pay.png') }}" /></div>
									</div>
								</a>
								<a class="nav-item nav-link @if(isset($_GET['step']) && $_GET['step'] == 'atm') active @endif" href="#e" data-toggle="tab">
									<div class="item">
										<div class="a"><img src="{{ url('/images/icon/icon_donate_ATM.png') }}" /></div>
									</div>
								</a>
								<a class="nav-item nav-link @if(isset($_GET['step']) && $_GET['step'] == 'easynet') active @endif" href="#f" data-toggle="tab">
									<div class="item">
										<div class="a"><img src="{{ url('/images/icon/icon_donate_Easy_Net.png') }}" /></div>
									</div>
								</a>
								<a class="nav-item nav-link @if(isset($_GET['step']) && $_GET['step'] == 'easyapp') active @endif" href="#g" data-toggle="tab">
									<div class="item">
										<div class="a"><img src="{{ url('/images/icon/icon_donate_easy_app.png') }}" /></div>
									</div>
								</a>
								<a class="nav-item nav-link @if(isset($_GET['step']) && $_GET['step'] == 'other') active @endif" href="#h" data-toggle="tab">
									<div class="item">
										<div class="a"><img src="{{ url('/images/icon/icon_box.png') }}" /></div>
									</div>
								</a>
							</div>
							<div class="tab-content col-12 col-md-10 pl-sm-15 pl-md-0 mt-sm-30 mt-xs-15">
								<div class="tab-pane @if(!isset($_GET['step'])) active @endif @if(isset($_GET['step']) && $_GET['step'] == 'sms') active @endif" id="a">
									<div class="icon-list mb-15 row justify-content-center ml-xs-0">
										<div class="col-6 col-sm-4 col-md-4">
											<div class="item">
												<div class="btn-icon" href="javascript:;"><img src="{{ url('/images/icon/icon_donate_SMS.png') }}" /></div>
											</div>
										</div>
									</div>
									<div class="text-white mb-30">
										<div class="text-large mb-1">SMS : </div>
										บริจาคครั้งละ 10 บาท* โดยพิมพ์ “T” แล้วกดส่งมาที่ 4545099 (ทุกเครือข่ายไม่หักค่าใช้จ่าย)
										<div class="mt-15">ตั้งแต่วันนี้ – 28 ก.พ. 62</div>
										<div class="text-large mt-30">หมายเหตุ: </div>
										 - ไม่รวมภาษีมูลค่าเพิ่ม 7%<br />
										 - ไม่สามารถออกใบเสร็จรับเงินเพื่อลดหย่อนภาษี
									</div>
								</div>
								<div class="tab-pane @if(isset($_GET['step']) && $_GET['step'] == 'bookbank') active @endif" id="b">
									<div class="icon-list mb-15 row justify-content-center ml-xs-0">
										<div class="col-6 col-sm-4 col-md-4">
											<div class="item">
												<div class="btn-icon" href="javascript:;"><img src="{{ url('/images/icon/icon_donate_book.png') }}" /></div>
											</div>
										</div>
									</div>
									<div class="text-white mb-30">
										<div class="text-large mb-1">บัญชีธนาคาร : </div>
										สามารถโอนเงินไปที่บัญชีรับบริจาคธนาคารไทยพาณิชย์ จำกัด (มหาชน) สาขาศิริราช<br />
										เลขที่บัญชี 016-3-04556-7 ประเภทบัญชีกระแสรายวัน<br />
										ชื่อบัญชี “เพื่อการรักษาพยาบาลผู้ป่วยอาคารนวมินทรบพิตร ๘๔ พรรษา โรงพยาบาลศิริราช”
										<div class="mt-15">ตั้งแต่วันนี้ – 28 ก.พ. 62</div>
									</div>
								</div>
								<div class="tab-pane @if(isset($_GET['step']) && $_GET['step'] == 'promtpay') active @endif" id="c">
									<div class="icon-list mb-15 row justify-content-center ml-xs-0">
										<div class="col-6 col-sm-4 col-md-4">
											<div class="item">
												<div class="btn-icon" href="javascript:;"><img src="{{ url('/images/icon/icon_donate_prompt_pay.png') }}" /></div>
											</div>
										</div>
									</div>
									<div class="text-white mb-30">
										<div class="text-large mb-1">QR Code Promptpay</div>
										บริจาคผ่าน QR Code Promptpay โดยใช้ Mobile Banking Application<br />
										สแกน QR Code นี้

										<div class="text-center mt-3 mb-3">
											<img style="max-width: 300px;" src="{{ url('/images/howto/Thai-QR-Payment.png') }}" />
										</div>

										<div class="mt-15">ตั้งแต่วันนี้ – 28 ก.พ. 62</div>

										<div class="text-large mt-30">หมายเหตุ: </div>
										- อัตราค่าธรรมเนียมพร้อมเพย์สำหรับบุคคลธรรมดา
										<div class="p-15 mb-15">
											<table>
												<thead>
													<tr>
														<th class="bg-blue" width="60%">ช่วงมูลค่า</th>
														<th class="bg-lightblue">ค่าธรรมเนียม</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>ไม่เกิน 5,000 บาท/รายการ</td>
														<td class="color-blue">ฟรีทุกรายการ</td>
													</tr>
													<tr>
														<td>มากกว่า 5,000 - 30,000 บาท/รายการ</td>
														<td class="color-blue">ไม่เกิน 2 บาท/รายการ</td>
													</tr>
													<tr>
														<td>มากกว่า 30,000 - 100,000 บาท/รายการ</td>
														<td class="color-blue">ไม่เกิน 5 บาท/รายการ</td>
													</tr>
													<tr>
														<td>มากกว่า 100,000 - วงเงินสูงสุดที่กำหนด*</td>
														<td class="color-blue">ไม่เกิน 10 บาท/รายการ</td>
													</tr>

												</tbody>
											</table>
											<div class="text-right text-blue mt-3 text-small pr-20">*วงเงินสูงสุดตามที่แต่ละธนาคารกำหนด</div>
										</div>
										- อัตราค่าธรรมเนียมพร้อมเพย์สำหรับนิติบุคคล
										<div class="p-15">
											<table>
												<thead>
													<tr>
														<th class="bg-blue" width="60%">ช่วงมูลค่า</th>
														<th class="bg-lightblue">ค่าธรรมเนียม</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>ไม่เกิน 100,000 บาท/รายการ</td>
														<td class="color-blue">ไม่เกิน 10 บาท/รายการ</td>
													</tr>
													<tr>
														<td>มากกว่า 100,000 บาท/รายการ</td>
														<td class="color-blue">ไม่เกิน 15 บาท/รายการ</td>
													</tr>
												</tbody>
											</table>
											<div class="text-center color-blue mt-3 text-small">ตารางอัตราค่าธรรมเนียมพร้อมเพย์นิติบุคคล (จนกว่าจะมีการเปลี่ยนแปลง)</div>
										</div>
									</div>
								</div>
								<div class="tab-pane @if(isset($_GET['step']) && $_GET['step'] == 'atm') active @endif" id="e">
									<div class="icon-list mb-15 row justify-content-center ml-xs-0">
										<div class="col-6 col-sm-4 col-md-4">
											<div class="item">
												<div class="btn-icon" href="javascript:;"><img src="{{ url('/images/icon/icon_donate_ATM.png') }}" /></div>
											</div>
										</div>
									</div>
									<div class="text-white mb-30">
										<div class="text-large mb-1">SCB ATM</div>
										บริจาคผ่านเครื่อง ATM ของธนาคารไทยพาณิชย์ จำกัด (มหาชน)<br />
										เลือกรายการ แล้วกด ถอนจากบัตร UP2ME / บริจาค <br />
										แล้วกด บริจาค โครงการ “ก้าวคนละก้าว” เพื่อโรงพยาบาลศิริราช<br />
										(ไม่มีค่าธรรมเนียมโอนเงินข้ามเขตทั่วประเทศ)
										<div class="mt-15">ตั้งแต่วันนี้ – 28 ก.พ. 62</div>
										<div class="text-center mt-15 mb-15">
											<img class="w-100" src="{{ url('/images/howto/atm-1.png') }}" />
										</div>
										<div class="text-center mt-15 mb-15">
											<img class="w-100" src="{{ url('/images/howto/atm-2.png') }}" />
										</div>
									</div>
								</div>
								<div class="tab-pane @if(isset($_GET['step']) && $_GET['step'] == 'easynet') active @endif" id="f">
									<div class="icon-list mb-15 row justify-content-center ml-xs-0">
										<div class="col-6 col-sm-4 col-md-4">
											<div class="item">
												<div class="btn-icon" href="javascript:;"><img src="{{ url('/images/icon/icon_donate_Easy_Net.png') }}" /></div>
											</div>
										</div>
									</div>
									<div class="text-white mb-30">
										<div class="text-large mb-1">SCB EASY NET</div>
										ผู้ที่สมัครใช้บริการ SCB Easy Net สามารถบริจาคด้วยการโอนเงินผ่านเว็บไซต์ 
										<br />www.scbeasy.com ไปที่บัญชีธนาคารไทยพาณิชย์ จำกัด (มหาชน) สาขาศิริราช
										<br />เลขที่บัญชี 016-3-04556-7 ประเภทบัญชีกระแสรายวัน
										<br />ชื่อบัญชี “เพื่อการรักษาพยาบาลผู้ป่วยอาคารนวมินทรบพิตร ๘๔ พรรษา โรงพยาบาลศิริราช”
										<br />(ไม่มีค่าธรรมเนียมโอนเงินข้ามเขตทั่วประเทศ)
										<div class="mt-15">ตั้งแต่วันนี้ – 28 ก.พ. 62</div>
									</div>
								</div>
								<div class="tab-pane @if(isset($_GET['step']) && $_GET['step'] == 'easyapp') active @endif" id="g">
									<div class="icon-list mb-15 row justify-content-center ml-xs-0">
										<div class="col-6 col-sm-4 col-md-4">
											<div class="item">
												<div class="btn-icon" href="javascript:;"><img src="{{ url('/images/icon/icon_donate_easy_app.png') }}" /></div>
											</div>
										</div>
									</div>
									<div class="text-white mb-30">
										<div class="text-large mb-1">SCB EASY APP</div>
										ผู้ที่สมัครใช้บริการ SCB EASY APP สามารถบริจาคผ่านปุ่ม บริจาค ใน SCB EASY APP<br />
										และเลือก โครงการ “ก้าวคนละก้าว” เพื่อโรงพยาบาลศิริราช
										<div class="mt-15">ตั้งแต่วันนี้ – 28 ก.พ. 62</div>
										<div class="text-center mb-5">
											<img src="{{ url('/images/howto/myapp-1.png') }}" style="max-width: 350px;" />
										</div>
										<div class="text-center mb-5">
											<img src="{{ url('/images/howto/myapp-2.png') }}" style="max-width: 350px;" />
										</div>
										<div class="text-center mb-3">
											<img src="{{ url('/images/howto/myapp-3.png') }}" style="max-width: 350px;" />
										</div>
									</div>
								</div>
								<div class="tab-pane @if(isset($_GET['step']) && $_GET['step'] == 'other') active @endif" id="h">
									<div class="icon-list mb-15 row justify-content-center ml-xs-0">
										<div class="col-6 col-sm-4 col-md-4">
											<div class="item">
												<div class="btn-icon" href="javascript:;"><img src="{{ url('/images/icon/icon_box.png') }}" /></div>
											</div>
										</div>
									</div>
									<div class="text-white mb-30">
										<div class="text-white mb-30">
										<div class="text-large mb-1">ช่องทางบริจาคอื่นๆ</div>
										   - บริจาคผ่านกล่องรับบริจาคของโครงการ “ก้าวคนละก้าว” ตรงเคาน์เตอร์หน้าโรงภาพยนตร์ ในเครือ SF และ Major ตั้งแต่วันที่ 6 - 30 ส.ค. 61<br />
										   <br />- บริจาคผ่านช่องทาง True Money Wallet ตั้งแต่วันนี้ – 28 ก.พ. 62


										<div class="text-large mt-30">หมายเหตุ: </div>
										 - ไม่สามารถออกใบเสร็จรับเงินเพื่อลดหย่อนภาษี
									</div>
									</div>
								</div>
					        </div>
						</div><!-- /tabbable -->
				    </div>
				</div>
			</div>

		</div>
	</section>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
	if ($(window).width() > 767) {
		var tabsFn = (function() {
			function init() {
				setHeight();
			}
			function setHeight() {
			var $tabPane = $('.tab-pane'),
			    tabsHeight = $('.nav-tabs').height();
				$tabPane.css({
				  height: tabsHeight
				});
			}
			$(init);
		})();
	}
	$(window).resize(function () {
       if ($(window).width() > 767) {
			var tabsFn = (function() {
				function init() {
					setHeight();
				}
				function setHeight() {
				var $tabPane = $('.tab-pane'),
				    tabsHeight = $('.nav-tabs').height();
					$tabPane.css({
					  height: tabsHeight
					});
				}
				$(init);
			})();
		}
    });
    $(window).resize();

</script>
@endsection