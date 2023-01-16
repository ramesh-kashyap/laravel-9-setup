@include('layouts.admin.header')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Users /</span> Total users
        </h4>




            <div class="card">
                <h5 class="card-header">Total Users</h5>

                <div class="card-datatable text-nowrap">

        <br>

               <?php if(is_array($open_ticket_msg) || is_object($open_ticket_msg)){ ?>
               <?php $count= 0; ?>
               <?php foreach ($open_ticket_msg as $item): ?>
                  <div class="row">
                     <?php
                      if($item->reply_by == 'user'){
                        echo "<div class='col-md-2 col-sm-2 col-xs-2'></div>";
                      }


                     ?>

                  <div class="col-md-12">
                     <div class="box">
                      <div class="box-body">
                   <!-- /.box-header -->
                     <div class="card">
                        <div class="card-header card-header-icon" data-background-color="rose" style="paint-order: 20px; padding-right: 20px;">
                           <h4 class="card-title"><?= $item->category ?> (<?=$item->gen_date?>)</h4>
                        </div>
                        <div class="clearfix"></div>
                        <br>
                        <div class="row">
                           <div class="col-md-12">
                               <p class="comp_bank_p"><?= $item->msg ?></p><br>
                               <p class="text-right"><?=($item->reply_by == 'admin')? 'Admin' : 'You'?></p>
                           </div>
                        </div>
                     </div>
                   </div>
                  </div>
               </div>
               </div>
               <!-- /.box-body -->

          <?php endforeach; ?>
          <?php } ?>

      </div>
        </div>
  </div>
  <!-- /.content-wrapper -->
  </div>



@include('layouts.admin.footer')
