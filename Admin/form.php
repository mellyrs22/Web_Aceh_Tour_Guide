	<div class="hidden">
	<div class="booking-form popup-form" id="booking-form">
		<div class="section-title popup-title"><h4></h4></div>
		<form action="http://themextemplates.com/demo/midway/wp-admin/admin-ajax.php" method="POST" class="formatted-form ajax-form">			
			<p></p><div class="message"></div><div class="sixcol column "><div class="field-container"><input type="text" id="full-name" name="full-name" value="" placeholder="Your Name"  /></div></div>
			<div class="sixcol column last"><div class="clear"></div><div class="field-container"><input type="text" id="email-address" name="email-address" value="" placeholder="Your Email"  /></div></div>
			<div class="sixcol column last"><div class="clear"></div><div class="field-container"><input type="text" id="kids-number" name="kids-number" value="" placeholder="Your Phone"  /></div></div>
			<div class="sixcol column "><div class="field-container"><input type="text" id="adults-number" name="adults-number" value="" placeholder="Adults Number"  /></div></div>
			<div class="sixcol column "><div class="field-container"><input type="text" id="locations" name="locations" value="" placeholder="locations"  /></div></div>
			<div class="sixcol column "><div class="field-container"><input type="text" id="departure-date" name="date" value="" class="date-field" placeholder="Reserve Date"  /></div></div>
				
			<input type="hidden" name="id" value="" class="popup-id" />
			<input type="hidden" name="slug" value="booking" />
			<input type="hidden" class="action" value="themex_form_submit" />
			<a class="submit-button button" href="#">Submit</a>
		</form>
	</div>
	<!-- booking form -->
	<div class="question-form popup-form" id="question-form">
		<div class="section-title popup-title"><h4></h4></div>
		<form action="http://themextemplates.com/demo/midway/wp-admin/admin-ajax.php" method="POST" class="formatted-form ajax-form">
			<p></p><div class="message">
			</div><div class="sixcol column "><div class="field-container"><input type="text" id="email" name="email" value="" placeholder="Your Email" /></div></div>
			<div class="sixcol column last"><div class="clear"></div><div class="field-container"><input type="text" id="lokasi" name="lokasi" value="" placeholder="Locations"  /></div></div>
			<div class="sixcol column "><div class="field-container"><input type="text" id="departure-date" name="date" value="" class="date-field" placeholder=" Date"/></div></div>
			<div class="sixcol column last"><div class="clear"></div><div class="field-container"><input type="text" id="no_flight"" name="no_flight" value="" placeholder="NO Flight"  /></div></div>
			<div class="clear"></div><div class="field-container"><textarea id="adaress" name="Addres" placeholder="Address" ></textarea></div>		
			<input type="hidden" name="id" value="" class="popup-id" />
			<input type="hidden" name="slug" value="question" />
			<input type="hidden" class="action" value="themex_form_submit" />
			<a class="submit-button button" href="#">Submit</a>
		</form>
	</div>
	<!-- question form -->
</div>