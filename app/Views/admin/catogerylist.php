                



                
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
                    
                            <div>
          <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Create Date</th>
                <th>Update date</th>
                <th>Action</th>
           
            </tr>
        </thead>
        <tbody>
            <?php foreach($genrelist as $key => $value ) {
                ?>
            <tr>
                <td><?= $value['id']?></td>
                <td><?= $value['title']?></td>
                <td><?= $value['created_date']?></td>
                <td><?= $value['updated_date']?></td>
                <td><button class="btn btn-danger">Delete</button></td>
                
            </tr>
             <?php  } ?>
        </tbody>
        <tfoot>
            <tr>
            <th>Id</th>
                <th>Title</th>
                <th>Create Date</th>
                <th>Update date</th>
                <th>Action</th>
            </tr>
        </tfoot>
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
            
            </script>