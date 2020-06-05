<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="card rounded-0 mb-2">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<p><b>ข้อมูลนักศึกษา</b></p>
						</div>
						<div class="col-md-12">
							<p><b>รหัส</b> <?php echo $stu_code; ?></p>
							<p><b>ชื่อ</b> <?php echo $stu_prefix; ?> <?php echo $stu_name; ?></p>
							<p><b>นามสกุล</b> <?php echo $stu_lname; ?></p>
							<p><b>คณะ</b> <?php echo $stu_detail['group_name']; ?></p>
							<p><b>สาขา</b> <?php echo $stu_detail['branch_name']; ?></p>
							<p><b>ชั้นปี</b> <?php echo $stu_detail['level_name']; ?></p>
							<p><b>คะแนนพฤติกรรม</b> (<?php echo $stu_point_behavior; ?>)</p>
							<p><b>หน่วยกิจกรรมสะสม</b> (<?php echo $stu_point_event; ?>)</p>
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
		<div class="col-md-9">
			<div class="card rounded-0 mb-5">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<h5>ตรวจสอบชั่วโมงกิจกรรม</h5>
							<hr>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<nav>
								<div class="nav nav-tabs justify-content-end" id="nav-tab" role="tablist">
									<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">กิจกรรมที่เข้าร่วม</a>
									<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">สรุปรวมหน่วยชั่วโมงกิจกรรมนักศึกษา</a>
								</div>
							</nav>
							<div class="tab-content" id="nav-tabContent">
								<div class="tab-pane fade pt-5 show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
									<div class="row">
										<div class="col-md-12">
											<h5>กิจกรรมที่เข้าร่วม</h5>
											<table class="table table-bordered table-striped">
												<thead>
													<tr>
														<th>ลำดับ</th>
														<th>กิจกรรม</th>
														<th>วันจัดกิจกรรม</th>
														<th>หน่วยกิจกรรม</th>
													</tr>
												</thead>
												<tbody>
													<?php $sum_unit = 0; $i=1;foreach($list_event_approve as $val){ ?>
													<tr>
														<td><?php echo $i; ?></td>
														<td><?php echo $val['event_name']; ?></td>
														<td><?php echo date_f($val['event_date_start'],'Y-m-d'); ?></td>
														<td><?php echo $val['event_unit'];//$sum_unit+=(float)$val['event_unit']; ?></td>
													</tr>
													<?php $i++;} ?>
												</tbody>
												<tfoot>
												<tr>
													<th colspan="4" class="text-center">
														<!-- รวมกิจกรรมบังคับ 0 ชั่วโมง รวมกิจกรรมเลือก 0 ชั่วโมง รวมกิจกรรมที่เข้าร่วมทั้งสิ้น 0 ชั่วโมง -->
													</th>
												</tr>
												</tfoot>
											</table>
										</div>
									</div>
								</div>
								<div class="tab-pane fade pt-5" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
									<div class="row">
										<div class="col-md-12">
											<h5>สรุปรวมหน่วยชั่วโมงกิจกรรมนักศึกษา</h5>
											<table class="table table-bordered table-striped">
												<thead>
													<tr>
														<th rowspan="2" class="align-middle text-center">ชั้นปีที่</th>
														<th rowspan="2" class="align-middle text-center">ประเภทกิจกรรม</th>
														<th rowspan="2" class="align-middle text-center">ชั่วโมงกิจกรรม</th>
														<th rowspan="2" class="align-middle text-center">สถานะกิจกรรม</th>
														<th colspan="2" class="text-center">สรุปสถานะกิจกรรม</th>
													</tr>
													<tr>
														<th class="text-center">ชั่วโมงกิจกรรมรวม</th>
														<th class="text-center">สถานะกิจกรรม</th>
													</tr>
												</thead>
												<tbody>
													<?php $sum_unit = 0; $i=1;foreach($list_event_approve as $val){ ?>
													<tr>
														<td class="text-center"><?php echo $i; ?></td>
														<td><?php echo $val['event_type']; ?></td>
														<td><?php echo $val['event_hour']; ?></td>
														<td></td>
														<td class="text-center"></td>
														<td class="text-center"><span class="text-danger"></span></td>
													</tr>
													<?php $i++;} ?>
												</tbody>
											</table>
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

<script>
	$(document).ready(function() {
		$('#activity').addClass('active');
	});
</script>

