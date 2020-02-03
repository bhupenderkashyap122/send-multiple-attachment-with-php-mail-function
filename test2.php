<center>
<form id="frmEnquiry" action="mail2.php" method="post" enctype='multipart/form-data'>
  <h2>Send Multiple Attachment With Php Mail Function</h2><br>
    <div id="mail-status"></div>
<div id="loader-icon" style="display: none;">
    <img src="LoaderIcon.gif" />
</div>
    <div>
        <input
            type="text" name="userName" id="userName"
            class="demoInputBox" placeholder="Name" required>
    </div>
    <div>
        <input type="text" name="userEmail" id="userEmail"
            class="demoInputBox" placeholder="from email" required>
    </div>
  <div>
        <input type="text" name="toemail" id="toemail"
            class="demoInputBox" placeholder='to email' required>
    </div>
     
   
    <div>
        <textarea name="content" id="content" class="demoInputBox"
            cols="90" rows="26" placeholder="Content"></textarea>
    </div>
    <div>
       <center> <label>Attachment</label><br /> <input type="file"
            name="file[]" class="demoInputBox" multiple="multiple"></div></center>
    <div>
   <center>     <input type="submit" value="Send" class="btnSubmit" />
 <br>
 <button type="reset" class="btnSubmit" value="Reset">Reset</button></center></div>
<div class="wrapperDiv">
  </div>
</form>
</center>

</body>
</html>




