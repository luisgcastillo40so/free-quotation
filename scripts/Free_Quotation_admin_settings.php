<?php
global $Free_Quotation_version;
global $wpdb;
global $today_date;
global $today_week_no;
$table_name = $wpdb->prefix . 'free_quotation_kris_IV';
?>

<div class="wrap">	
	 <h2><div class="Free_Quotation_header"></div>Free Quotation <?php echo $Free_Quotation_version; ?><a class="add-new-h2" href="admin.php?page=fq_menu_page">Free Quotation list</a></h2></h2>
	<br><h2>Settings page</h2>

<script>
	jQuery(document).ready( function($){
		$( "#set_page" ).tabs();
	});
</script>
		<form method="post" action="options.php">
			<?php settings_fields('Free_Quotation_settings_filed'); ?>
			<?php $options = get_option('Free_Quotation_options'); ?>
			<div id="set_page">
				<ul>
					<li><a href="#set_page-1">General</a></li>
					<li><a href="#set_page-2">Viasual</a></li>
				</ul>
				<div id="set_page-1">
					<table class="form-table">
						<tr>
							<th scope="row">Permit to write date (in Add Free Quotation page)</th>
							<td>
								<input name="Free_Quotation_options[option3]" type="checkbox" value="1" <?php if(isset($options['option3'])){checked($options['option3'], 1);}?> /><br>
							</td>
						</tr>
						<tr>
							<th scope="row">Start and end quotation with special characters</th>
							<td>
								<input name="Free_Quotation_options[option4]" id="quotationsign" type="checkbox" value="1" <?php if(isset($options['option4'])){checked($options['option4'], 1);} ?> /><br>
							</td>
						</tr>
					
						<tr style=" <?php if ($options['option4']==null){ echo 'display:none;';} else {}?>">
							<th scope="row"><div style="border-left: 1px dashed #E5E5E5;margin-left: 20px;padding-left: 5px;">Start character</div></th>
							<td>
								<input name="Free_Quotation_options[tekst3]" type="text" id="activator1" <?php if (isset($options['option4'])) {} else {echo 'disabled=""';};?> value="<?php if(isset($options['tekst3'])){echo htmlentities($options['tekst3']);}else{};?>" maxlength="1" size="1"></input>
							</td>
						</tr>	
						<tr style="<?php if ($options['option4']==null){ echo 'display:none;';} else {}?>">
							<th scope="row"><div style="border-left: 1px dashed #E5E5E5;margin-left: 20px;padding-left: 5px;">End character</div></th>
							<td>
								<input name="Free_Quotation_options[tekst4]" type="text" id="activator2" <?php if (isset($options['option4'])) {} else {echo 'disabled=""';};?> value="<?php if(isset($options['tekst3'])){echo htmlentities($options['tekst3']);}else{};?>" maxlength="1" size="1"></input>
							</td>
						</tr>
					<?php ?>
						<tr>
							<th scope="row">Type of quotation display:</th>
							<td>
								<input type="radio" name="Free_Quotation_options[option1]" value="1" <?php checked('1', $options['option1']); ?> />Use only Free_Quotation - display by day</br>
								<input type="radio" name="Free_Quotation_options[option1]" value="5" <?php checked('5', $options['option1']); ?> />Use only Free_Quotation - display by week number</br>
								<input type="radio" name="Free_Quotation_options[option1]" value="6" <?php checked('6', $options['option1']); ?> />Use only Free_Quotation - random quotation for specific day</br>
								<input type="radio" name="Free_Quotation_options[option1]" value="2" <?php checked('2', $options['option1']); ?> />Use Wikiquote if you doesn't have FQ for display<br>
								<input type="radio" name="Free_Quotation_options[option1]" value="3" <?php checked('3', $options['option1']); ?> />Use Wikiquote always for quotations displaying<br>
								<input type="radio" name="Free_Quotation_options[option1]" value="4" <?php checked('4', $options['option1']); ?> />Use one standard quotation (always active if Free_Quotation doesn't have quotation for displaying)<br>
							</td>
						</tr>
						<tr>
							<th scope="row">Choose Wikiquote system:</th>
							<td><select name="Free_Quotation_options[option2]">
								<option <?php if($options['option2']=="en" ){ echo "selected"; } ?> value="en">Wikiquote [en] (Quote of the day)</option>
								<option <?php if($options['option2']=="de"){ echo "selected";} ?> value="de">Wikiquote [de] (Zitat der Woche)</option>
								<option <?php if($options['option2']=="es"){ echo "selected";} ?> value="es">Wikiquote [es] (Cita del día)</option>
								<option <?php if($options['option2']=="ru"){ echo "selected";} ?> value="ru">Wikiquote [ru] (Избранная цитата)</option>
								<option <?php if($options['option2']=="pl"){ echo "selected";} ?> value="pl">Wikiquote [pl] (Cytat dnia)</option>
								</select>
							</td>
						</tr>
						<tr>
							<th scope="row"><div style="border-left: 1px dashed #E5E5E5;margin-left: 20px;padding-left: 5px;">Standard quotation</div></th>
								<td><textarea name="Free_Quotation_options[tekst1]" type="text" cols="80" rows="2"><?php echo $options['tekst1']; ?></textarea></td>
						</tr>			
						<tr>
							<th scope="row"><div style="border-left: 1px dashed #E5E5E5;margin-left: 20px;padding-left: 5px;">Quotation author</div></th>
							<td>
								<input name="Free_Quotation_options[tekst2]" type="input" value="<?php echo $options['tekst2']; ?>"></input>
							</td>
						</tr>
						
					</table>
				</div>
				<div id="set_page-2">
					<table class="form-table">
						<tr>
							<th scope="row">Do you want use your own style?</th>
							<td>
								<input name="Free_Quotation_options[option5]" type="checkbox" value="1" <?php if(isset($options['option5'])){checked($options['option5'], 1);}?> /><br>
							</td>
						</tr>
						<tr>
							<th scope="row">Header size:</th>
							<td>
								<input name="Free_Quotation_options[tekst6]" type="text" id="activator1" value="<?php if(isset($options['tekst6'])){echo htmlentities($options['tekst6']);}else{};?>" maxlength="2" size="2"></input>px
							</td>
						</tr>
						<tr>
							<th scope="row">Header font:</th>
							<td>
								<input name="Free_Quotation_options[tekst7]" type="text" id="activator1" value="<?php if(isset($options['tekst7'])){echo htmlentities($options['tekst7']);}else{};?>" maxlength="20" size="20"></input>
							</td>
						</tr>
						<tr>
							<th scope="row">Header bold:</th>
							<td>
								<input name="Free_Quotation_options[option6]" type="checkbox" value="1" <?php if(isset($options['option6'])){checked($options['option6'], 1);}?> /><br>
							</td>
						</tr>
						<tr>
							<th scope="row">Header italic:</th>
							<td>
								<input name="Free_Quotation_options[option7]" type="checkbox" value="1" <?php if(isset($options['option7'])){checked($options['option7'], 1);}?> /><br>
							</td>
						</tr>
						<tr>
							<th scope="row">Body size:</th>
							<td>
								<input name="Free_Quotation_options[tekst8]" type="text" id="activator1" value="<?php if(isset($options['tekst8'])){echo htmlentities($options['tekst8']);}else{};?>" maxlength="2" size="2"></input>px
							</td>
						</tr>
						<tr>
							<th scope="row">Body font:</th>
							<td>
								<input name="Free_Quotation_options[tekst9]" type="text" id="activator1" value="<?php if(isset($options['tekst9'])){echo htmlentities($options['tekst9']);}else{};?>" maxlength="20" size="20"></input>
							</td>
						</tr>
						<tr>
							<th scope="row">Body bold:</th>
							<td>
								<input name="Free_Quotation_options[option8]" type="checkbox" value="1" <?php if(isset($options['option8'])){checked($options['option8'], 1);}?> /><br>
							</td>
						</tr>
						<tr>
							<th scope="row">Body italic:</th>
							<td>
								<input name="Free_Quotation_options[option9]" type="checkbox" value="1" <?php if(isset($options['option9'])){checked($options['option9'], 1);}?> /><br>
							</td>
						</tr>
						<tr>
							<th scope="row">Signature size:</th>
							<td>
								<input name="Free_Quotation_options[tekst10]" type="text" id="activator1" value="<?php if(isset($options['tekst10'])){echo htmlentities($options['tekst10']);}else{};?>" maxlength="2" size="2"></input>px
							</td>
						</tr>
						<tr>
							<th scope="row">Signature font:</th>
							<td>
								<input name="Free_Quotation_options[tekst11]" type="text" id="activator1" value="<?php if(isset($options['tekst11'])){echo htmlentities($options['tekst11']);}else{};?>" maxlength="20" size="20"></input>
							</td>
						</tr>
						<tr>
							<th scope="row">Signature bold:</th>
							<td>
								<input name="Free_Quotation_options[option10]" type="checkbox" value="1" <?php if(isset($options['option10'])){checked($options['option10'], 1);}?> /><br>
							</td>
						</tr>
						<tr>
							<th scope="row">Signature italic:</th>
							<td>
								<input name="Free_Quotation_options[option11]" type="checkbox" value="1" <?php if(isset($options['option11'])){checked($options['option11'], 1);}?> /><br>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e('Save') ?>" />
			</p>
		</form>	

 <script>
jQuery(document).ready( function($){
    $( "#tabs" ).tabs();
  });
  </script>

<div class="Free_Quotation_wrap1">
<h2>Backlog</h2>
	<div id="tabs">
	  <ul>
		<li><a href="#tabs-1">ver. 2.0</a></li>
		<li><a href="#tabs-2">ver. 1.5</a></li>
		<li><a href="#tabs-3">ver. 1.4</a></li>
		<li><a href="#tabs-4">ver. 1.3</a></li>
		<li><a href="#tabs-5">ver. 1.2</a></li>
		<li><a href="#tabs-6">ver. 1.1</a></li>
		<li><a href="#tabs-7">ver. 1.0</a></li>
	  </ul>
	  <div id="backlog_table_fq">
	  <div id="tabs-1">
			2.0.5
			<ul>
				<li>Settings menu redesign (visual and funkcional).</li>
			</ul>
			2.0.4
			<ul>
				<li>Now you can style your widget quotation (global to all widgets)</li>
			</ul>
			2.0.3
			<ul>
				<li>Add new quotation to the group from selected box</li>
			</ul>
			2.0.2
			<ul>
				<li>Change widget configuation - now you have list insted of text box</li>
			</ul>
			2.0.1
			<ul>
				<li>Small functional improvements</li>
			</ul>
			2.0.0
			<ul>
				<li>Add group for quotation</li>
				<li>Now you can add title to widget (Free Quotation use headers &lt;h3&gt; to display it)</li>
				<li>Rebuild widget area</li>
				<li>Possibility to use many widgets with different value</li>
				<li>Hidden week number if you doesn't use this option</li>
				<li>Now you can display quotation for specific day of week</li>
				<li>Improve data selection (now first day of week is Monday)</li>
			</ul>
	  </div>
	  <div id="tabs-2">
			1.5.1-1.5.5
			<ul>
				<li>Fix database</li>
			</ul>
			1.5.0
			<ul>
				<li>Now you can display quotation not only in accordance with date but also for special week! You can change this value when you want, because system control both option.  Week number for quotation Free Quotation add automatically for selected date. Week starts in Monday, and in Sunday.</li>
				<li>All your old quotation get week number automatically when you update your plugin to new 1.5 version</li>
			</ul>
	  </div>
	  <div id="tabs-3">
			1.4.2
			<ul>
				<li>Add option: select all to delete</li>
				<li>Improve in CSS</li>
			</ul>
			1.4.1
			<ul>
				<li>Improve option start/end quotation with special characters</li>
			</ul>
			1.4.0
			<ul>
				<li>Add possibility to delete more than one quotation per one times</li>
			</ul>
	  </div>
	  <div id="tabs-4">
			1.3.3
			<ul>
				<li>Now it's demand to accept edit data (for safety) </li>
			</ul>
			1.3.2
			<ul>
				<li>Now it's demand to accept delete data (for safety) </li>
			</ul>
			1.3.1
			<ul>
				<li>Fix data problem !IMPORTANT! </li>
			</ul>
			1.3.0
			<ul>
				<li>Now is available edition for all of quotes. You can change:<ul>
					<li>Display date</li>
					<li>Quotation text</li>
					<li>Author of quotation</li></ul>
				</li>
			</ul>
	  </div>
	  <div id="tabs-5">
			1.2.0
			<ul>
				<li>Improve navigation (on plugin list)</li>
				<li>Better organisation in code</li>
			</ul>
			1.2.1
			<ul>
				<li>Fix many small issue and improve stable</li>
			</ul>
			1.2.2
			<ul>
				<li>Fix CSS in table</li>
				<li>Reorganization of code in few places</li>
			</ul>
	  </div>
	  <div id="tabs-6">		
			1.1.0
			<ul>
				<li>Add new quotation change location (go to Free Quotation)</li>
				<li>Table have now new feature. Now:
					<ul>
						<li>Table is sortable</li>
						<li>Table is filterable</li>
						<li>Table have pagination</li>
						<li>User can choose how many rows is display</li>
					</ul>
				</li>
				<li>Some small improvement (Wikiquotes mechanism, layout)</li>
			</ul>	
			1.1.1
			<ul>
				<li>Compatibility with WordPress 3.8.0</li>
				<li>Make plugin lighter</li>
			</ul>
	  </div>
	  <div id="tabs-7">
			1.0
			<ul>
				<li><b>Initial release</b></li>
				<li>Function
					<ul>
						<li>Widget for displaying quotation</li>
						<li>Page for add quotation</li>
						<li>Import CSV files</li>
						<li>Displaying quotation from Wikiquotes				
							<ul>
								<li>Widget for displaying quotation</li>
								<li>Page for add quotation</li>
								<li>Import CSV files</li>
								<li>User can choose how many rows is display</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
			1.0.1
			<ul>
				<li>Small visual improvement</li>
			</ul>
	  </div>
	  </div>
	</div>	
</div>

<script>

jQuery(document).ready( function($){
$('#quotationsign').change(function(){
   $("#activator1").prop("disabled", !$(this).is(':checked'));
   $("#activator2").prop("disabled", !$(this).is(':checked'));
   $("#activator3").prop("disabled", !$(this).is(':checked'));
});
});

</script>
	<?php 
?>