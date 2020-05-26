<!-- Page Content  -->
<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="iq-card">
<!--                <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">รายงานเข้าร่วมกิจกรรม</h4>
                  </div>
               </div> -->
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
      </div>
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">รายงานเข้าร่วมกิจกรรม</h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">
                     <a href="" class="btn btn-info">Export</a>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div class="table-responsive">
                     <table class="table mb-0 table-bordered" id="datatables">
                        <thead>
                           <tr>
                              <th scope="col" class="text-center">No</th>
                              <th scope="col">กิจกรรม</th>
                              <th scope="col" class="text-center">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="text-center">1</td>
                              <td>Lorem ipsum dolor sit amet</td>
                              <td class="text-center"><button class="btn btn-primary">Edit</button></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<script>
   $(document).ready(function() {
      $('#report').addClass('menu-open');
      $('#report').find('.iq-submenu').addClass('menu-open');
      $('#r1').addClass('active');
   });
   $('#datatables').DataTable();
</script>
      
