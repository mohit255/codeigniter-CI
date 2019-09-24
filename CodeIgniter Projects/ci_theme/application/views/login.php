 <!-- content -->
 <div id="content">
        <div class="wrapper">
            <div class="section">
              <h2>User Login</h2>
        <p>You are supposed to place some contact infromation on this page. You may place a map here with some instructions on how to get to your office or just a contact form. Note that the contact form below is not working.</p>
         <b style="color:#F00;">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $msg; ?></b>
        <center>
           <form id="contacts-form" method="post" >
          <fieldset>
            <div class="field">
              <label>Your E-mail:</label>
              <input type="email" name="email" id="email" value=""/>
            </div>
            <div class="field">
              <label>Your Password:</label>
              <input type="password" name="pwd" id="pwd" value=""/>
            </div>
            <div class="wrapper"><input type="submit" name="logn" value="Login" style="float:right;">
            </div>
          </fieldset>
        </form>
        </center>
             </div>
          </div>
      </div>