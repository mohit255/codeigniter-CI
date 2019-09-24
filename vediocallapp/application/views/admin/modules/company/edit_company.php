           <div class="main">
               <div class="card">
                                <div class="row">
                                  <div class="col-md-6">
                             <p class="text"><strong>Edit Company Details</strong></p>
                            </div>
                            <div class="col-md-6">
                              <a href="<?php echo base_url().'admin/company/editcompanydetails/'.$list['id']; ?>">
                             <input type="submit" class="button-add" value="Edit Details"></a>
                            </div>
                        </div>
                        <br>
                        <?php //var_dump($list); ?>
                         <div class="row">
                        <div class="col-md-6 sps">
                         <span ><strong>Company Name</strong></span>
                           <p><?php echo $list['company_name']; ?></p>
                          </div>
                          <div class="col-md-6 sps">
                         <span ><strong>Company ID</strong></span>
                           <p><?php echo $list['id']; ?></p>
                          </div>
                          <div class="col-md-6 sps">
                         <span ><strong>Created ON</strong></span>
                           <p><?php echo $list['created_on']; ?></p>
                          </div>
                        <div class="col-md-6 sps">
                         <span ><strong>Company Address</strong></span>
                           <p><?php echo $list['company_address']; ?></p>
                          </div>
                        <div class="col-md-6 sps">
                         <span ><strong>Contact Person</strong></span>
                           <p><?php echo $list['contact_person']; ?></p>
                          </div>
                          <div class="col-md-6 sps">
                         <span ><strong>Contact Number</strong></span>
                           <p><?php echo $list['contact_number']; ?></p>
                          </div>
                        <div class="col-md-6 sps">
                         <span ><strong>No of Device</strong></span>
                            <p><?php echo $list['noofdevices']; ?></p>
                          </div>
                        <div class="col-md-6 sps">
                         <span ><strong>Password</strong></span>
                           <p>*********</p>
                            </div>
                       </div>
                 </div>
                               <!--------------------------------------->
                     <!---------------Device list------------->
                <div class="card">
                                <div class="row">
                                  <div class="col-md-6">
                             <p class="text"><strong>Device Details</strong></p>
                            </div>
                            <div class="col-md-6">
                              <a href="<?php echo base_url().'admin/device/adddevice'; ?>">
                             <input type="submit" class="button-add" value="Add Device"></a>
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
                <tr>
                  <th>S.No.</th>
                  <th>Device Id</th>
                  <th>Device Unique Id</th>
                  <th>Company ID</th>
                  <th>Created On</th>
                  <th>Created By</th>
                  <th>  Edit </th>
                </tr>
                
               
                <?php
                if(!empty($device_list))
                  {
                    $n = 1;
                    foreach($device_list as $device_item)
                      { 
                        // var_dump($device_item); 
                        ?>
                        <tr>
                          <td><?php echo $n."."; ?></td>
                          <td><?php echo $device_item['id']; ?></td>
                          <td><?php echo $device_item['device_id']; ?></td>
                          <td><?php echo $device_item['company_id']; ?></td>
                          <td><?php echo $device_item['created_on']; ?></td>
                          <td><?php echo $device_item['created_by']; ?></td>
                          <td><!-- <a href="<?php echo base_url().'admin/device/viewdevice/'.$device_item['id']; ?>"><i class="fas fa-pencil-alt"></i></a> --> &nbsp;&nbsp; <a href="<?php echo base_url().'admin/device/deletedevice/'.$device_item['id']; ?>"><i class="far fa-trash-alt"></i></a></td>
                        </tr>
                   <?php
                   $n++;   
                      }

                  }
                  ?>
                
              </table>
                        <!-----------------------------table--------------->
                        </div>
                        <!-------------------------------------->

            </div>
            

   </body>
</html>