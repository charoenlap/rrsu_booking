<!-- Page Content  -->
<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">ข้อมูลนักศึกษา</h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">
                     <form action="<?php echo $action_form_import; ?>" method="post" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
                        <div>
                           <input type="file" name="file" id="file" accept=".xls,.xlsx">
                           <button type="submit" id="submit" name="import" class="btn btn-primary btn-sm ">Import</button>
                           <a class="btn btn-success btn-sm" href="<?php echo route('student/exportExcel'); ?>">EXPORT</a>
                        </div>
                    
                    </form>
                  </div>
               </div>
               <div class="iq-card-body">
                  <form action="<?php echo $action;?>" method="GET" class="mb-4">
                     <input type="hidden" name="route" value="student/home">
                     <div class="row">
                        <div class="col">
                           <label for="">รหัสนักศึกษา</label>
                           <input type="text" class="form-control" placeholder="รหัสนักศึกษา" name="stu_code" value="<?php echo $stu_code; ?>">
                        </div>
                        <div class="col">
                           <label for="">รหัสศูนย์</label>
                           <select name="center_code" class="form-control" id="">
                              <option value="">รหัสศูนย์</option>
                              <?php foreach($list_center as $val){?>
                              <option value="<?php echo $val['center_code'];?>" <?php echo ($val['center_code']==$center_code?'selected':''); ?>><?php echo $val['center_name'];?></option>
                              <?php } ?>
                           </select>
                        </div>
                        <div class="col">
                           <label for="">คณะ</label>
                           <select name="id_group" class="form-control" id="">
                              <option value="">คณะ</option>
                              <?php foreach($list_group as $val){?>
                              <option value="<?php echo $val['id_group'];?>" <?php echo ($val['id_group']==$id_group?'selected':''); ?>><?php echo $val['group_name'];?></option>
                              <?php } ?>
                           </select>
                        </div>
                        <div class="col">
                           <label for="">สาขา</label>
                           <select name="branch_code" class="form-control" id="">
                              <option value="">สาขา</option>
                              <?php foreach($list_branch as $val){?>
                              <option value="<?php echo $val['branch_code'];?>" <?php echo ($val['branch_code']==$branch_code?'selected':''); ?>><?php echo $val['branch_code'].' '.$val['branch_name'];?></option>
                              <?php } ?>
                           </select>
                        </div>
                        <div class="col">
                           <label for="">รหัสระดับการศึกษา</label>
                           <select name="level_code" class="form-control" id="">
                              <option value="">รหัสระดับการศึกษา</option>
                              <?php foreach($list_level as $val){?>
                              <option value="<?php echo $val['level_code'];?>" <?php echo ($val['level_code']==$level_code?'selected':''); ?>><?php echo $val['level_name'];?></option>
                              <?php } ?>
                           </select>
                        </div>
                        <div class="col">
                           <label for="">&nbsp;</label>
                           <div>
                              <input type="submit" value="ค้นหา" class="btn btn-primary btn-block btn-lg">
                           </div>
                        </div>
                     </div>
                  </form>
                  <div class="table-responsive">
                     <table class="table mb-0 table-bordered" id="">
                        <thead>
                           <tr>
                              <th scope="col" class="text-center">No</th>
                              <th scope="col">รหัสนักศึกษา</th>
                              <th scope="col">ชื่อ - สกุล</th>
                              <th>รหัสศูนย์</th>
                              <th>คณะ</th>
                              <th>สาขา</th>
                              <th>รหัสระดับการศึกษา</th>
                              
                           </tr>
                        </thead>
                        <tbody>
                           <?php $i=( ($page-1)*DEFAULT_LIMIT_PAGE)+1;
                           foreach($result_student as $val){  ?>
                           <tr>
                              <td class="text-center"><?php echo $i; ?></td>
                              <td><?php echo $val['stu_code']; ?></td>
                              <td><?php echo $val['stu_prefix'].' '.$val['stu_name'].' '.$val['stu_lname']; ?></td>
                              <td><?php echo $val['center_name']; ?></td>
                              <td><?php echo $val['group_name']; ?></td>
                              <td><?php echo $val['branch_name']; ?></td>
                              <td><?php echo $val['level_name']; ?></td>
                              
                           </tr>
                           <?php $i++;} ?>
                           <?php if(empty($result_student)){?>
                           <tr>
                              <td colspan="10">ไม่พบข้อมูล</td>
                           </tr>
                           <?php } ?>
                        </tbody>
                     </table>
                  </div>
                  <hr>
                  <?php echo $pageing; ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   $(document).ready(function() {
      $('#student').addClass('active');
   });
   $('#datatables').DataTable();
</script>
      
