		<footer id="about">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-6 col-xl-5 pl-30 pl-sm-15 pr-30 pr-sm-15">
						<div class="title row justify-content-between align-items-center">
							<div class="col-10 pr-0 text-italic">
								โครงการก้าวคนละก้าว <span class="text-small font-light">เพื่อจัดซื้ออุปกรณ์ทางการแพทย์<br class="d-none d-md-block" />
								ให้แก่อาคารนวมินทรบพิตร ๘๔ พรรษา <br class="d-none d-md-block" />
								คณะแพทยศาสตร์ศิริราชพยาบาล มหาวิทยาลัยมหิดล</span>
							</div>
							<div class="col-2 pl-0">
								<img src="{{ url('/images/logo_sup-1.png') }}" />
							</div>
						</div>
						<p class="mt-4">
							ก้าวคนละก้าว ร่วมกับ จีดีเอช และ คิง เพาเวอร์ ไทย เพาเวอร์ พลังคนไทย เชิญชวนคนไทยร่วมชม
							ภาพยนตร์ “2,215 เชื่อ บ้า กล้า ก้าว” ภาพยนตร์คลุกวงในตลอด 55 วัน ของ ก้าวคนละก้าว
							ที่คุณไม่เคยเห็นที่ไหนมาก่อน ภาพจากกล้องตัวเดียวของทีม GDH ที่ยังไม่เคยเผยแพร่ที่ไหนให้ได้ชม
							กันครั้งแรก เพื่อส่งต่อแรงบันดาลใจในการทำความดี ก้าวนี้..เพื่อศิริราช ด้วยการบริจาคเพื่อหา
							รายได้ซื้ออุปกรณ์การแพทย์ เพื่ออาคารนวมินทรบพิตร ๘๔ พรรษา คณะแพทยศาสตร์ศิริราชพยาบาล
							มหาวิทยาลัยมหิดล อาคารหลังสุดท้ายที่ในหลวงรัชกาลที่ 9 พระราชทานนามให้ เพื่อผู้ป่วยด้อยโอกาส
							และ ผลิตบุคลากรทางการแพทย์รุ่นใหม่ต่อไป โดยมี คิง เพาเวอร์ ไทย เพาเวอร์ พลังคนไทย ร่วม
							สนับสนุนการฉายภาพยนตร์ “2,215 เชื่อ บ้า กล้า ก้าว” ให้คนไทยได้ชมฟรีจำนวน 720,000 ที่นั่ง
							ที่โรงภาพยนตร์ ในเครือเมเจอร์ ซีนีเพล็กซ์ และโรงภาพยนตร์ ในเครือ เอส เอฟ
							ตั้งแต่วันที่ 6 กันยายน 2561 เป็นต้นไป

						</p>
						<div class="text-right"><a class="color-navy" href="{{ url('/kao_project_detail.pdf') }}">ข้อมูลเพิ่มเติม</a></div>
						<div class="row">
							<div class="col-xs-6 col-sm-6">
								<span class="text-small">follow us</span><br />
								<a class="btn-icon-circle btn-navy mt-1" href="https://www.facebook.com/kaokonlakao/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</div>
							<div class="col-xs-6 col-sm-6 text-right">
								<a href="{{ url('/howto') }}" class="btn btn-navy inline-block mt-4 mt-md-2">ร่วมบริจาค</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-xl-5 pr-30 pr-sm-15 pl-30 pl-sm-15">
						<div class="title mb-4 pt-5 pt-md-3">ผู้สนับสนุน</div>
							<div class="home-slider">

	                		@foreach($sponsor->chunk(12) as $index => $sponsor_item)

	                			<div class="item row">
	                				@foreach($sponsor_item as $row)
		                			<div class="col-4 col-md-3 mb-30">
		                				<a class="btn-square" href="javascript:;"><span style="background-image: url({{ \Storage::disk('s3')->url('uploads/sponsor/'.$row->sponsor_image) }}); background-size: contain;  background-position: center;  background-repeat: no-repeat;">
			                			</span></a>
		                			</div>
	                				@endforeach
	                			</div>

							@endforeach
							</div>

					</div>
				</div>
			</div>
		</footer>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 text-right">
						<!-- <a href="#">Privacy Policy</a> <span class="mgl-5 mgr-5">|</span> <a href="#">Term of Use</a> <span class="mgl-5 mgr-5">|</span> <a href="#">Security Tips</a> -->
					</div>
				</div>
			</div>
		</div>

	</div>
	@include('frontend.includes.footer_script')
</body>
</html>
