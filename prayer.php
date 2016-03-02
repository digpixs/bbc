<?
	$title_tag = 'How Can We Pray For You?';
?>

<?php include '_header.php'; ?>

<style>
body {
    background:url(img/bkg_prayer.jpg);
    background-position: center center;
    background-position: top;
}
</style>


<div class="main_container">
<div class="info_area" style="padding-top: 20px;background-color: black;"><img src="img/ban_pray_for_you.png">
    <div id="form_con">
        <form id="form1" name="form1" method="post" action="prayer_send.php">
             
            <div id="form_label"><label for="name"></label><input name="name" type="text" id="name" placeholder="First Name or Blank (Anonymous)" size="35" class="form-control" /></div>

             <div id="form_label"><label for="email"></label><input name="email" type="text" id="email" placeholder="Email (If You Wish to be Contacted)" size="35" class="form-control" /></div>

             <div id="form_label"><label for="phone"></label><input name="phone" type="text" id="phone" placeholder="Phone (Optional)" size="35" class="form-control" /></div>

            <div id="form_label" style="color: #ffffff; font-size:.75em;">Max Lenght: 250 Characters<label for="comments"></label><br><textarea name="comments" cols="40" rows="5" id="comments" placeholder="PRAISE or PRAYER REQUEST" class="form-control" maxlength="250"></textarea></div>
            <div class='req'><label for='website'>Name Here</label><input type='text' name='website'></div>
            
            <div id="send_con">
            <div id="form_send"><input type="submit" name="button" id="button" value="Send" class="btn btn-primary"/></div>
            <div id="form_send"><input type="reset" name="Reset" id="Reset" value="Clear" class="btn btn-warning" /></div>
            </div>    
        </form> 
    </div>         
    <div id="pray_pic"><img src="img/ele_prayer.jpg"></div>
</div>
   
    
<?php include '_footer.php'; ?> 