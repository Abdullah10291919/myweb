
        <!-- Page Sidebar Ends-->
        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header dash-breadcrumb">
              <div class="row">
                <div class="col-6">                              
                  <h3 class="f-w-600">Movies</h3>
                </div>
                <div class="col-6">
                  <div class="breadcrumb-sec">
                    <ul class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                      <li class="breadcrumb-item">Add Movies</li>
 
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
                <div class="card">
                    <div class="col-sm-4">
 
                    
                    </div>
                  <div class="card-header pb-0">
                    <h5>Add Movies</h5>
                  </div>
                  <form class="form theme-form" id="moviesadd" name="moviesadd" onSubmit="return checkmethod()"  method="post"   action="#">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-4">
                          <div class="mb-3">
                            <label class="form-label" for="movietitle">Title</label>
                            <input class="form-control" required id="movietitle" name="movietitle" type="text" placeholder="Please Enter the Title of the Movie">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="mb-3">
                            <label class="form-label" for="Director">Director</label>
                            <input class="form-control " required id="Director" name="Director" type="text" placeholder="Please Enter the Director">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="mb-3">
                            <label class="form-label" for="Duration">Duration </label>
                            <input class="form-control" required id="Duration" name="Duration" type="text" placeholder="Please Enter the Duration like 2h 30m">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="mb-3">
                            <label class="form-label" for="Genre">Genre </label>
                            <input class="form-control" required id="Genre" name="Genre" type="text" placeholder="horror,action,thrill etc">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="mb-3">
                            <label class="form-label" for="Budget">Budget</label>
                            <input class="form-control" required id="Budget" name="Budget" type="text" placeholder="Please Enter the Budget">
                          </div>
                        </div>
                        <div class="col-10">
                          <div class="mb-3">
                            <label class="form-label" for="movieStoryLine">Story Line</label>.
                            <textarea  class="form-control" required id="movieStoryLine" name="moviesStoryLine" 
                             placeholder="Please Enter the Title of the Movie"></textarea>
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="mb-3">
                            <label class="form-label" for="Country">Country</label>
                            <input class="form-control" required id="Country" name="Country" type="text" placeholder="Please Enter the Country">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="mb-3">
                            <label class="form-label" for="Language">Language</label>
                            <input class="form-control" required id="Language" name="Language" type="text" placeholder="Please Enter the Language">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="mb-3">
                            <label class="form-label" for="ProductionCo">Production Co</label>
                            <input class="form-control" required id="ProductionCo" name="ProductionCo" type="text" placeholder="Please Enter the Production Co">
                          </div>
                        </div>
                       
                        <div class="col-6">
                          <div class="mb-3">
                            
                            <input class="btn btn-success" id="submitbutton" name="submitbutton" type="submit" value="Submit">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer pt-0 text-end">
                      <button class="btn btn-primary" type="submit">Add</button>
                      <input class="btn btn-light" type="reset" value="Cancel">
                    </div>
                  </form>
                </div>
                 
               
              </div>

            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
         <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

        <script>
             
 
                function checkmethod(){
                  

                    
                      $.ajax({
                            type: "POST",
                            url: "<?php echo base_url() ?>addMoviesdata",
                            data: $('#moviesadd').serialize() ,
                            dataType:'json',
                            success: function(response) {
                            // show success message and hide form
                               response = JSON.parse(message);
                           
                               if(response.success){
                                Swal.fire(
                                    'Success',
                                    response.message,
                                    'success'
                                  )
                                  return false;
                               }
                               Swal.fire(
                                    'error',
                                    response.message,
                                    'error'
                                )

                            return false;
                            },
                            error: function() {
                            // handle errors
                            alert("Error submitting form!");
                            }
                        });
                    return false;
                }

         </script>
      
