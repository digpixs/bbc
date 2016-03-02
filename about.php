<?
	$title_tag = 'Connect with Us';
?>

<?php include '_header.php'; ?>

<style>
body {
    background:url(img/bkg_about.jpg);
    background-position: center center;
    background-position: top;
}
</style>

<div class="main_container">
<div class="info_area">
<div id="info_sig">
    <h2>About Berean</h2><br>
<p>Berean is made up of people from all walks of life.  We get together on a weekly basis to build genuine friendships, worship God, and discover life-changing truths from the Bible.  We are committed to continually experience the irresistible love of Christ personally and as we are doing that we are engaging communities to experience Christ.</p><br>
</div>

<div id="info_block"> 
            <div id="info_quad"><a href="leader.php" title="Who's who in the Church"><img src="img/link_leader.jpg" alt="leadership at Berean"></a></div>
            <div id="info_quad"><a href="dir.php" title="Need to find us?"><img src="img/link_dir.jpg" alt="directions to Berean"></a></div>
            <div id="info_quad"><a href="belief.php" title="What drives our beliefs"><img src="img/link_belief.jpg" alt="what we believe"></a></div>
            <div id="info_quad"><a href="history.php" title="Where we came from"><img src="img/link_history.jpg" alt="Berean history"></a></div>
            <!-- <div><a href="faq.php" title="Addional information"><img src="img/link_faq.png" alt="frequently asked questions"></a></div> -->
            
            <!-- <div><a href="about.php" title="Comments, questions and prayer requests"><img src="img/link_connect.png" alt="contact us"></a></div> -->
</div>
    
<div id="form_con">
    <form id="form1" name="form1" method="post" action="contact_send.php">
         <div id="form_label"><label for="name"></label><input name="name" type="text" id="name" placeholder="NAME" size="32" required="" class="form-control" /></div>

         <div id="form_label"><label for="email"></label><input name="email" type="text" id="email" placeholder="EMAIL" size="32" required="" class="form-control" /></div>

         <div id="form_label"><label for="phone"></label><input name="phone" type="text" id="phone" placeholder="PHONE" size="32" class="form-control" /></div>

        <div id="form_label"><label for="comments"></label><br><textarea name="comments" cols="35" rows="5" id="comments" placeholder="MESSAGE" class="form-control"></textarea></div>
        
        <div class='req'><label for='website'>Name Here</label><input type='text' name='website'></div>

        
        <div id="send_con">
        <div id="form_send"> <input type="submit" name="button" id="button" value="Send" class="btn btn-primary"/></div>
        <div id="form_send"><input type="reset" name="Reset" id="Reset" value="Clear" class="btn btn-warning" /></div>
        </div>
    </form>
    </div>
    <div id="welcome_vid"><iframe src="https://player.vimeo.com/video/135182396?autoplay=1&loop=1&title=0&byline=0&portrait=0" width="100%" height="253" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
    
</div>    
    
    
<?php include '_footer.php'; ?> 