<?
	$title_tag = 'Journey Off The Map';
?>

<?php include '_header.php'; ?>

<div class="main_container">
<div class="info_area" style="background-color: #fcfcfc;"> <img src="img/ban_journey.png" style="padding:15px 0 15px 0;"> 
<div id="form_con">
        
        <form id="form1" name="form1" method="post" action="vbs_send.php">
             
            <div id="form_label"><label for="child_name"></label><input name="child_name" type="text" id="child_name" placeholder="Child's Name" size="40" required="" class="form-control" /></div>

            <div id="form_label"><label for="birthdate"></label><input name="birthdate" type="text" id="birthdate" placeholder="Birthday (mm/dd/yyyy)" size="40" class="form-control" /></div>
            
            <div id="form_label"><label for="age"></label><input name="age" type="text" id="age" placeholder="Age" size="40" required="" class="form-control" /></div>
            
            <div id="form_label"><label for="grade"></label><input name="grade" type="text" id="grade" placeholder="Last Grade Completed in School" size="40" required="" class="form-control" /></div>
            
            <div id="form_label"><label for="gender">Gender: </label><select name="gender" id="gender" size=""  required="">
                        <option selected=" "></option>
                        <option>Girl</option>
                        <option>Boy</option>
                       </select>
            </div>
            
            <div id="form_label"><label for="allergies"></label><input name="allergies" type="text" id="allergies" placeholder="Medical Conditions or Allergies" size="40" class="form-control" /></div>
            
            <div id="form_label"><label for="emecontact"></label><input name="emecontact" type="text" id="emecontact" placeholder="Emergency Contact & Phone Number" size="40" required="" class="form-control" /></div>
            
            <div id="form_label"><label for="parent_name"></label><input name="parent_name" type="text" id="parent_name" placeholder="Parents/Guardian Name" size="40" required="" class="form-control" /></div>
            <div id="form_label"><label for="email"></label><input name="email" type="text" id="email" placeholder="Email" size="40" required="" class="form-control" /></div>
            
            <div id="form_label"><label for="phone"></label><input name="phone" type="text" id="phone" placeholder="Phone" size="40" required="" class="form-control" /></div>
            
            <div id="form_label"><label for="address"></label><input name="address" type="text" id="address" placeholder="Address / Town / Zip" size="40" class="form-control" /></div>
            
            <div id="form_label"><label for="home_church"></label><input name="home_church" type="text" id="home_church" placeholder="Home Church" size="40" class="form-control" /></div>
            
            <div id="form_label"><label for="guest"></label><input name="guest" type="text" id="guest" placeholder="If you are visiting, who are you a guest of?" size="40" class="form-control" /></div>
            
            <div id="form_label"><label for="pickup"></label><input name="pickup" type="text" id="pickup" placeholder="Who Can Pick up your Child?" size="40" class="form-control" /></div>
            
            <div id="form_label"><label for="photo">May we have permission to photograph child: </label><select name="photo" id="photo" size=""  required="">
                        
                        <option>YES</option>
                        <option>NO</option>
                       </select>
            </div>
            
            <div id="form_label"><label for="promo">May we have permission to use your child's photograph in church publications for the purpose of promotion: </label><select name="promo" id="promo" size=""  required="">
                        
                        <option>YES</option>
                        <option>NO</option>
                       </select>
            </div>
            
            <div class='req'><label for='website'>Name Here</label><input type='text' name='website'></div><br>
            
            <div id="send_con">
            <div id="form_send"><input type="submit" name="button" id="button" value="Send" class="btn btn-primary"/></div>
            <div id="form_send"><input type="reset" name="Reset" id="Reset" value="Clear" class="btn btn-warning" /></div>
            </div>
            
        </form>
</div>


           <div id="" style="float:right; padding:5px;">
               <img src="img/ele_vbs.png">
      
            </div>
</div>       

   
    
<?php include '_footer.php'; ?> 