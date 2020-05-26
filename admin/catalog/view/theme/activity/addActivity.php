<!-- Page Content  -->
<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">กิจกรรม</h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">
                     
                  </div>
               </div>
               <div class="iq-card-body">
                  <div class="row mb-3">
                     <div class="col-md-6">
                        <label for="">ปีการศึกษา</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col-md-6">
                        <label for="">ชื่อกิจกรรม</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <label for="">ช่วงเวลากิจกรรม</label>
                     </div>
                  </div>
                  <div class="row mb-3">
                     <div class="col-md-6">
                        <input type="datetime-local" class="form-control">
                     </div>
                     <div class="col-md-6">
                        <input type="datetime-local" class="form-control">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <div class="col-md-6">
                        <label for="">สถานที่จัด</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col-md-6">
                        <label for="">ประธาน</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <div class="col-md-6">
                        <label for="">จำนวนผุ้เข้าร่วม</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col-md-6">
                        <label for="">ประเภทกิจกรรม</label>
                        <div class="form-group">
                           <div class="custom-control custom-checkbox custom-control-inline">
                              <input type="checkbox" class="custom-control-input" id="customCheck5">
                              <label class="custom-control-label" for="customCheck5">กิจกรรมบังคับ</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row mb-3">
                     <div class="col-md-12">
                        <label for="">รายละเอียด</label>
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
      $('#activity').addClass('menu-open');
      $('#activity').find('.iq-submenu').addClass('menu-open');
      $('#a1').addClass('active');
   });
   $('#datatables').DataTable();
</script>

