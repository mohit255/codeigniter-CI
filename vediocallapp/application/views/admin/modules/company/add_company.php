<div class="main">
               <div class="card">
                                
                             <p class="text"><strong>Add Company Details</strong></p>
                        <br>
                        <?php  if(@$this->session->flashdata("message")) { ?>
                        <div class="alert alert-success" >
                        <?php echo $this->session->flashdata("message"); ?>
                        </div>
                        <?php } ?>
                        <?php  if(@$this->session->flashdata("already")) { ?>
                        <div class="alert alert-warning" >
                        <?php echo $this->session->flashdata("already"); ?>
                        <?php } ?>
                        <?php  if(@$this->session->flashdata("error")) { ?>
                        <div class="alert alert-danger" >
                        <?php echo $this->session->flashdata("error"); ?>
                        <?php } ?>
                    <form  class="form-horizontal" action="<?php echo base_url().'admin/company/addnewcompany'; ?>" method="POST">
                        <div class="row">
                       <div class="col-md-6 sps">
                         <span ><strong>Company Name</strong></span>
                           <input type="text" name="company_name" id="company_name" maxlength="30">
                          </div>
                        <div class="col-md-6 sps">
                         <span ><strong>Company Address</strong></span>
                           <input type="text" name="company_address" id="company_address" maxlength="15">
                          </div>
                        <div class="col-md-6 sps">
                         <span ><strong>Contact Person</strong></span>
                           <input type="text" name="contact_person" id="contact_person" maxlength="15">
                          </div>
                          <div class="col-md-6 sps">
                         <span ><strong>Contact Number</strong></span>
                           <input type="Number" name="contact_number" id="contact_number" maxlength="10">
                          </div>
                        <div class="col-md-6 sps">
                         <span ><strong>No of Device</strong></span>
                            <input type="Number" name="noofdevices" id="noofdevices" maxlength="3">
                          </div>
                        <div class="col-md-6 sps">
                         <span ><strong>Password</strong></span>
                           <input type="Password" name="password" id="password" maxlength="8">
                            </div>
                       </div>
                       <div class="row mt-3 mb-2">
                    <div class="col-lg-5"></div>
                    <div class="col-lg-2">
                      <button type="submit" name="add_company" class="btn-block button-text btn button-success">Add</button> 
                    </div>
                  </form>
                    <div class="col-lg-5"></div>
                     </div>
                       
                  
                </div>

            </div>
            

   </body>
</html>