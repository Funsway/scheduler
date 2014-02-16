<div class="section">
    <span style="font-size: larger; font-weight: bold;">Employee</span>

</div>
<hr/>
<form>
  			<p>UserID: 12345</p>
  			<p>First Name:
  				<input class="inputText" name="FirstName" value="Shih-Wei">
  			</p>
  			<p>Middle Name:
  				<input class="inputText" name="MiddleName">
  			</p>
  			<p>Last Name:
  				<input class="inputText" name="LastName" value="Fang">
  			</p>
  			<p>Email:
  				<input class="inputText" name="EmailName" value="shihwei@csupomona.edu">
  			</p>
  			<input type="submit" value="Save">
			<button type="button" class="btn btn-danger btn-lg modalButton" data-popup="popupOne">Change Password</button>
</form>



<section class="modal modalWindow" id="popupOne">  
	<section class="modalWrapper">
		<h2>Change Password </h2>
		<form>
			<p>Password:
			   <input type="password" value="" placeholder="Enter Password" id="password" class="password">
			</p>
			<p>New Password:
			   <input type="password" value="" placeholder="New Password" id="new_password" class="password">
			</p>
			<p>Comfirm Password:
			   <input type="password" value="" placeholder="Comfirm Password" id="comfirm_password" class="password">
			</p>
  			<input type="submit" value="Submit">
			<button type="button" class="btn btn-danger btn-lg closeBtn">Cencel</button>
		</form>
		
	</section>
	<a class="closeBtn upright">CLOSE X</a>
</section>
<section class="modal overlay"></div>
	
	
	
	
	<section class="notiModal notiModalWindow" id="popupNotification">  
		<section class="notiModalWrapper">
			<h2>Today Meeting</h2>
	        <ul>
	          <li>Meeting 1<span> at 3:00pm</span></li>
	        </ul>
			<h2>Notification</h2>
	        <ul>
	          <li>Dan rejected the meeting 1.</li>
			  <li>You set up meeting 2.</li>
	        </ul>
		
		</section>
		<a class="notiCloseBtn upright">CLOSE X</a>
	</section>
	<section class="notiModal notiOverlay"></div>

  </div><!-- /popup__inner -->
</div><!-- /popup -->
