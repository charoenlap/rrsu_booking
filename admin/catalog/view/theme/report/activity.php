<!-- Page Content  -->
<div id="content-page" class="content-page">
   <div class="container-fluid">
      <!-- <div class="row">
         <div class="col-md-12">
            <div class="iq-card">
               <div class="iq-card-body">
                  <div class="row mb-3">
                     <div class="col-md-6">
                        <label for="">ประจำปีการศึกษา</label>
                        <select name="" id="" class="form-control">
                           <option value="">2563</option>
                        </select>
                     </div>
                     <div class="col-md-6">
                        <label for="">ประเภท นศ.</label>
                        <select name="" id="" class="form-control">
                           <option value="">ภาคปกติ</option>
                        </select>
                     </div>
                  </div>
                  <div class="row mb-3">
                     <div class="col-md-6">
                        <label for="">คณะ</label>
                        <select name="" id="" class="form-control">
                           <option value=""></option>
                        </select>
                     </div>
                     <div class="col-md-6">
                        <label for="">สาขาวิชา</label>
                        <select name="" id="" class="form-control">
                           <option value=""></option>
                        </select>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <button class="btn btn-primary">Submit</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">รายงานเข้าร่วมกิจกรรม</h4>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div class="table-responsive">
                     <table class="table mb-0 table-bordered" id="datatables">
                        <thead>
                           <tr>
                              <th scope="col" class="text-center"  style="width:70px;">ลำดับ</th>
                              <th scope="col" style="width:100px;">รหัสนักศึกษา</th>
                              <th scope="col">ขื่อนักศึกษา</th>
                              <th scope="col">กิจกรรม</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $i=1;foreach($listTakeEvent as $val): ?>
                           <tr>
                              <td class="text-center"><?php echo $i; ?></td>
                              <td><?php echo $val['stu_code']; ?></td>
                              <td><?php echo $val['stu_name'].' '.$val['stu_lname']; ?></td>
                              <td><?php echo $val['event_name']; ?></td>
                           </tr>
                           <?php $i++;endforeach; ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<style href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"></style>
<style href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css"></style>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>


<script>
   $(document).ready(function() {
      $('#report').addClass('menu-open');
      $('#report').find('.iq-submenu').addClass('menu-open');
      $('#r1').addClass('active');
   });
   $('#datatables').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
</script>
      
