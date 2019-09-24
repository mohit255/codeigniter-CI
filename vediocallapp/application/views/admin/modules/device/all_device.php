           <div class="main">
            
               <div class="card">
                                <div class="row">
                                  <div class="col-md-6">
                             <p class="text"><strong>All Devices</strong></p>
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
                      <?php  if(@$this->session->flashdata("Success")) { ?>
                        <div class="alert alert-success" >
                        <?php echo $this->session->flashdata("Success"); ?>
                        </div>
                        <?php } ?>
               <!-----------------Table------------>
                            <table>
                <tr>
                  <th>S.No.</th>
                  <th>Device ID</th>
                  <th>Device Unique ID</th>
                  <th>Company ID</th>
                  <th>Company Name</th>
                  <th>Created On</th>
                  <th>Created By</th>
                  <th>  Edit </th>
                </tr>
                 <?php
                 // var_dump($list); 
                        
                 if(!empty($list))
                  {
                    $n = 1;
                    foreach($list as $item)
                      { 
                        // var_dump($item); 
                        ?>
                        <tr>
                          <td><?php echo $n."."; ?></td>
                          <td><?php echo $item['id']; ?></td>
                          <td><?php echo $item['device_id']; ?></td>
                          <td><?php echo $item['company_id']; ?></td>
                          <td><?php echo $item['company_name']; ?></td>
                          <td><?php echo $item['created_on']; ?></td>
                          <td><?php echo $item['created_by']; ?></td>
                          <td><!-- <a href="<?php echo base_url().'admin/device/editdevice/'.$item['id']; ?>"><i class="fas fa-pencil-alt"></i></a> --> &nbsp;&nbsp; <a href="<?php echo base_url().'admin/device/deletedevice/'.$item['id']; ?>"><i class="far fa-trash-alt"></i></a></td>
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
                    

           