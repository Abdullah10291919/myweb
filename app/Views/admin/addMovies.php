
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
                <div class="card">
                    <div class="col-sm-4">

                    <?php if($this->session->flashdata('message')){
                            $messageType = $this->session->flashdata('message');
                                if($messageType == 'success'){ ?>
                        <div class="alert alert-success dark alert-dismissible fade show" role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>           
                      <p>Catogery added successfully</p>
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                              <?php   }else{ ?>
                                <div class="alert alert-warning dark alert-dismissible fade show" role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>           
                      <p>Some thing wrong, Try again.</p>
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                               <?php  }
                    } ?>
                    
                    </div>
                  <div class="card-header pb-0">
                    <h5>Add catogery</h5>
                  </div>
                  <form class="form theme-form" method="post" action="<?php echo base_url()?>addcatogery">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="catogeryTitle">Title</label>
                            <input class="form-control" id="catogeryTitle" name="catogeryTitle" type="text" placeholder="Action, horror, thrill">
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
      