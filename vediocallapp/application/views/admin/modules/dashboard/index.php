           <div class="main">
            
               <div class="card">
                                <div class="row">
                                  <div class="col-md-6">
                             <p class="text"><strong>Company Details</strong></p>
                            </div>
                            <div class="col-md-6">
                              <a href="<?php echo base_url().'admin/company/addcompany'; ?>">
                             <input type="submit" class="button-add" value="Add Company"></a>
                            </div>
                        </div>
                        <br>
                        <div class="line">
                        <div class="col-md-2 sps">
                         <span ><strong>Show</strong></span>
                           <select class="form-control">
                             <option>10</option>
                             <option>20</option>
                             <option>40</option>
                             <option>50</option>
                             </select>
                          </div>
                          <div class="col-md-7"></div>
                        <div class="col-md-3 sps">
                         <span ><strong>Search</strong></span>
                           <input type="text" name="" maxlength="15">
                          </div>
                      </div>
               <!-----------------Table------------>
                            <table>
                              
            <?php  
            if(@$this->session->flashdata("success")) { ?>
                        <div class="alert alert-success" >
                        <?php echo $this->session->flashdata("success"); ?>
                        </div>
                        <?php } ?>
                        <?php  if(@$this->session->flashdata("failed")) { ?>
                        <div class="alert alert-warning" >
                        <?php echo $this->session->flashdata("failed"); ?>
                        <?php } ?>
                <tr>
                  <th>S.No.</th>
                  <th>Company ID</th>
                  <th>Company Name</th>
                  <th>Address</th>
                  <th>Contact Person</th>
                  <th>Contact Number</th>
                  <th>No. of Device</th>
                  <th>  Edit </th>
                </tr>
                 <?php
                 if(!empty($list))
                  {
                    $n = 1;
                    foreach($list as $item)
                      { 
                        //var_dump($item); ?>
                        <tr>
                          <td><?php echo $n."."; ?></td>
                          <td><?php echo $item['id']; ?></td>
                          <td><?php echo $item['company_name']; ?></td>
                          <td><?php echo $item['company_address']; ?></td>
                          <td><?php echo $item['contact_person']; ?></td>
                          <td><?php echo $item['contact_number']; ?></td>
                          <td><?php echo $item['noofdevices']; ?></td>
                          <td><a href="<?php echo base_url().'admin/company/editcompany/'.$item['id']; ?>"><i class="fas fa-pencil-alt"></i></a> &nbsp;&nbsp; <a href="<?php echo base_url().'admin/company/deletecompany/'.$item['id']; ?>"><i class="far fa-trash-alt"></i></a></td>
                        </tr>
                   <?php
                   $n++;  
                     }

                  }
                  ?>
                
                
              </table>
<!-----------------------------table--------------->
                       
                  
                </div>
           </div>

   </body>
</html>         
                    

           