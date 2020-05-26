<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="card rounded-0">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<p>ข้อมูลนักศึกษา</p>
						</div>
						<div class="col-md-12">
							<p>รหัส 61122230103</p>
							<p>ชื่อ นาย ก.</p>
							<p>คณะ</p>
							<p>สาขา</p>
							<p>ชั้นปี</p>
							<p>คะแนนพฤติกรรม (100)</p>
							<p>หน่วยกิจกรรมสะสม (0)</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<a href="<?php echo route('member/edit'); ?>" class="btn btn-outline-dark mb-3 w-100 rounded-0">แก้ไขข้อมูลส่วนตัว</a>
						</div>
						<div class="col-md-12">
							<a href="<?php echo route('booking/booking'); ?>" class="btn btn-outline-dark mb-3 w-100 rounded-0">ตรวจสอบกิจกรรมที่ได้เข้าร่วม</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card rounded-0">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<h5>กิจกรรมที่จอง</h5>
							<hr>
						</div>
						<!-- <div class="col-md-6 text-right">
							<a href="<?php echo route('booking/booking'); ?>" class="btn btn-warning rounded-0">กิจกรรมที่จอง</a>
							<a href="<?php echo route('booking/pastactivity'); ?>" class="btn btn-success rounded-0">กิจกรรมที่ผ่านมา</a>
							<a href="<?php echo route('booking/cancelactivity'); ?>" class="btn btn-danger rounded-0">กิจกรรมที่ยกเลิก</a>
						</div>
						<div class="col-md-12">
							<hr>
						</div> -->
					</div>
					<div class="row">
						<div class="col-md-12">
							<div id="accordion">
								<div class="card">
									<div class="card-header p-1 bg-white" id="headingThree">
										<a href="#" class="btn btn-link text-dark collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										กิจกรรม Lorem ipsum dolor sit amet, consectetur adipisicing elit #3
										</a>
										<br>
										<a href="#" class="btn btn-danger float-right btn-sm rounded-0"><i class="fa fa-trash"></i> ยกเลิกกิจกรรม</a>
										<a href="<?php echo route('booking/printbook'); ?>" class="btn btn-primary float-right btn-sm mr-1 rounded-0"><i class="fa fa-print"></i> ปริ้นใบจอง</a>
									</div>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
										<div class="card-body">
											<div class="row mb-3">
												<div class="col-md-12">
													<p class="mb-0">วันที่จัดกิจกรรม : 16 ก.ย. 63</p>
													<p class="mb-0">สถานที่จัดงาน : ห้องประชุมช่อแก้ว ชั้น 3</p>
													<p class="mb-0">จำนวนผุ้เข้าร่วม : 100</p>
													<p class="mb-0">จำนวนผู้จองกิจกรรมล่าสุด : 50</p>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<p>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam pariatur totam excepturi, ratione consectetur ex, fuga, quam deserunt molestias facilis debitis! Animi, quis quisquam aliquid aspernatur, excepturi fuga pariatur facere? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis officia corporis ipsum veniam maiores hic consequatur. Tempore tenetur, in sed iusto, ab et quos magni fuga quia hic illo possimus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui tempora perferendis ducimus eum reprehenderit, adipisci odit itaque repudiandae accusamus! Aperiam incidunt earum eum corporis vitae, provident hic voluptate unde quaerat?
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

