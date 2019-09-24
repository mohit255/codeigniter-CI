 <div id="content">
        <div class="wrapper">
          <div class="col-1">
            <div class="section">
              <form id="form1" name="form1" method="post">
                <table width="30%" border="1">
                  <tr>
              <td colspan="2"><div align="center"><strong>Login Here</strong></div>
			  </td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center"><?php echo $error;?></td>
                  </tr>
                  <tr>
                    <td><strong>Uname</strong></td>
                    <td><strong>
                    <input type="text" name="un" id="un">
                    </strong></td>
                  </tr>
                  <tr>
                    <td><strong>Password</strong></td>
                    <td><strong>
                    <input type="password" name="pass" id="pass">
                    </strong></td>
                  </tr>
                  <tr>
                    <td>Role</td>
                    <td><select name="role" id="role">
                        <option value="User">User</option>
                        <option value="Author">Author</option>
                        <option value="Admin">Admin</option>
                      </select>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2"><div align="center">
                      <strong>
                      <input type="submit" name="sub" id="sub" value="Submit">
                    </strong></div></td>
                  </tr>
                </table>
              </form>
            </div>
            </div>
          <div class="col-2">
            <div class="section">
             sidebar
            </div>
           
          </div>
        </div>
      </div>