 <!-- content -->
 <div id="content">
        <div class="wrapper">
            <div class="section">
              <h2>User Registration</h2><?php //echo md5("mohitchack"); ?>
        <p>You are supposed to place some contact infromation on this page. You may place a map here with some instructions on how to get to your office or just a contact form. Note that the contact form below is not working.</p>
        <center>

           <form id="contacts-form" method="post" >
          <fieldset>
            <div class="field">
              <label>First Name:</label>
              <input type="text" name="fn" id="fn" value=""/>
            </div>
            <div class="field">
              <label>Last Name:</label>
              <input type="text" name="ln" id="ln" value=""/>
            </div>
            <div class="field">
              <label>Your Mobile:</label>
              <input type="text" name="mob" id="mob" value=""/>
            </div>
            <div class="field">
              <label>Your E-mail:</label>
              <input type="email" name="email" id="email" value=""/>
            </div>
            <div class="field">
              <label>Your Password:</label>
              <input type="password" name="pwd" id="pwd" value=""/>
            </div>
            <div class="wrapper"><input type="submit" name="rg" value="Register" style="float:right;">
            </div>
          </fieldset>
        </form>
        </center>
             </div>
          </div>
      </div>