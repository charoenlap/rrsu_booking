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
                     <a href="<?php echo route('activity/form'); ?>" class="btn btn-primary">เพิ่มกิจกรรม</a>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div class="table-responsive">
                     <table class="table mb-0 table-bordered" id="datatables">
                        <thead>
                           <tr>
                              <th scope="col" class="text-center" width="50px">No</th>
                              <th scope="col">กิจกรรม</th>
                              <th scope="col" class="text-center" width="100px">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $i=1;foreach($list_event as $val){ ?>
                           <tr>
                              <td class="text-center"><?php echo $i; ?></td>
                              <td><?php echo $val['event_name']; ?></td>
                              <td class="text-center"><a class="btn btn-primary" href="<?php echo route('activity/form&id_event='.$val['id_event']); ?>">แก้ไข</a></td>
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

      
<script>
   $(document).ready(function() {
      $('#activity').addClass('menu-open');
      $('#activity').find('.iq-submenu').addClass('menu-open');
      $('#a1').addClass('active');
   });
   $('#datatables').DataTable();
</script>

