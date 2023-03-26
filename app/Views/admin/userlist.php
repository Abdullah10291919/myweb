                



                
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header dash-breadcrumb">
              <div class="row">
                <div class="col-6">                              
                  <h3 class="f-w-600">User</h3>
                </div>
                <div class="col-6">
                  <div class="breadcrumb-sec">
                    <ul class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                      <li class="breadcrumb-item">User  </li>
 
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid default-dash">
             <div class="row">
                    <div class="col-sm-12">
                    
                            <div class="table-responsive">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Ful Name</th>
                                <!-- first_name last_name -->
                                <th>email</th>
                              
                                <th>Join At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($userlist as $key => $value ) {
                                ?>
                            <tr id="movielist<?php  echo $value['id']; ?>" > 
                                <td><?= $value['id']?></td>
                                <td><?= $value['first_name'].$value['last_name']?></td>
                                <td><?= $value['username']?></td>
                                <td><?= $value['email']?></td>
  
                                <td><?= $value['create_date']?></td>
                                <td><button class="btn btn-danger" onclick="deleteuser(<?= $value['id'] ?>)">Delete</button></td>
                                
                            </tr>
                            <?php  } ?>
                        </tbody>
                      
                    </table>
                          </div>
                    </div>
          </div>
          <!-- Container-fluid Ends-->
          </div>
        </div>
      

            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"> </script>
        <script>
            $(document).ready(function () {
    $('#example').DataTable();
});
            
function deleteuser(id)
    {
        $.ajax({
            url: '<?php echo base_url() ?>/deleteuser',
            data: {
                id: id
            },
            method: "POST",
            dataType: "json",
            success: function(response) {
                
                console.log(response);
              if(response.success){
                                Swal.fire(
                                    'Success',
                                    response.message,
                                    'success'
                                  )
                                  $('#movielist'+id).remove();
                                  return false;
                               }
                               Swal.fire(
                                    'error',
                                    response.message,
                                    'error'
                                )
               
            }
        });

    }        
    </script>