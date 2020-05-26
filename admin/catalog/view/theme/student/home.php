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
                     <button class="btn btn-primary btn-sm mr-2">IMPORT</button>
                     <button class="btn btn-success btn-sm">EXPORT</button>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div class="table-responsive">
                     <table class="table mb-0 table-bordered" id="datatables">
                        <thead>
                           <tr>
                              <th scope="col" class="text-center">No</th>
                              <th scope="col">รหัสนักศึกษา</th>
                              <th>รหัสศูนย์</th>
                              <th>รหัสระดับการศึกษา</th>
                              <th scope="col">ชื่อ - สกุล</th>
                              <th scope="col" class="text-center">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="text-center">1</td>
                              <td>1234567890</td>
                              <td>0</td>
                              <td>3</td>
                              <td>นาย เทส</td>
                              <td class="text-center"><button class="btn btn-info">View</button></td>
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
      $('#student').addClass('active');
   });
   $('#datatables').DataTable();
</script>
      
