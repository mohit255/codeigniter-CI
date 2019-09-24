           <div class="main">
               <div class="card">
                                
                             <p class="text"><strong>Update Company Details</strong></p>
                            <?php 
                            // var_dump($list);
                            ?>
                            <?php  if(@$this->session->flashdata("success")) { ?>
                        <div class="alert alert-success" >
                        <?php echo $this->session->flashdata("success"); ?>
                        </div>
                        <?php } ?>
                        <?php  if(@$this->session->flashdata("Already")) { ?>
                        <div class="alert alert-warning" >
                        <?php echo $this->session->flashdata("Already"); ?>
                        <?php } ?>
                      <br>
                      <form  class="form-horizontal" action="<?php echo base_url().'admin/company/updatecompany'; ?>" method="POST">
                        <div class="row">
                        <div class="col-md-6 sps">
                         <span ><strong>Company Name</strong></span>
                         <input type="hidden" name="id" value="<?php echo $list['id']; ?>">
                           <input type="text" name="company_name" id="company_name" value="<?php echo $list['company_name']; ?>" maxlength="30">
                          </div>
                        <div class="col-md-6 sps">
                         <span ><strong>Company Address</strong></span>
                           <input type="text" name="company_address" id="company_address" value="<?php echo $list['company_address']; ?>" maxlength="15">
                          </div>
                        <div class="col-md-6 sps">
                         <span ><strong>Contact Person</strong></span>
                           <input type="text" name="contact_person" id="contact_person" value="<?php echo $list['contact_person']; ?>" maxlength="15">
                          </div>
                          <div class="col-md-6 sps">
                         <span ><strong>Contact Number</strong></span>
                           <input type="Number" name="contact_number" id="contact_number" value="<?php echo $list['contact_number']; ?>" maxlength="10">
                          </div>
                        <div class="col-md-6 sps">
                         <span ><strong>No of Device</strong></span>
                            <input type="Number" name="noofdevices" id="noofdevices" value="<?php echo $list['noofdevices']; ?>" maxlength="3">
                          </div>
                        <div class="col-md-6 sps">
                         <span ><strong>Password</strong></span>
                           <input type="Password" name="password" id="password" value="<?php echo $list['password']; ?>" maxlength="8">
                            </div>
                       </div>
                       <div class="row mt-3 mb-2">
                    <div class="col-lg-5"></div>
                    <div class="col-lg-2">
                      <button type="submit" name="update_company" class="btn-block button-text btn button-success">Update</button>
                    </div>
                  </form>
                    <div class="col-lg-5"></div>
                     </div>
                       
                       
                  
                </div>

            </div>
            

   </body>
</html>