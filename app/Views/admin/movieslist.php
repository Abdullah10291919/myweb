                



                
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header dash-breadcrumb">
              <div class="row">
                <div class="col-6">                              
                  <h3 class="f-w-600">Catogery</h3>
                </div>
                <div class="col-6">
                  <div class="breadcrumb-sec">
                    <ul class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                      <li class="breadcrumb-item">Add catogery</li>
 
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
                                <th>Title</th>
                                <th>Budget</th>
                                <th>Image</th>
                                <th>Country</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($movielist as $key => $value ) {
                                ?>
                            <tr id="movielist<?php  echo $value['id']; ?>" > 
                                <td><?= $value['id']?></td>
                                <td><?= $value['title']?></td>
                                <td><?= $value['Budget']?></td>
                                <td>
                                <img style="width:100px; height:100px; border-radius:20px;  " src="<?php echo base_url().'public/uploads/'.$value['image_url'];?>" alt="">

                                   
                                </td>
                                <td><?= $value['Country']?></td>
                                <td><button class="btn btn-danger" onclick="deleteProduct(<?= $value['id'] ?>)">Delete</button></td>
                                
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
            
function deleteProduct(id)
    {
        $.ajax({
            url: '<?php echo base_url() ?>/deleteproduct',
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