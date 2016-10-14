</div> <!-- end main container -->

<div class="footer">
    <div class="footer_container">
        <div id="foot_block"><a href="dir.php"><p><span>Berean</span></br>1030 East Evesham Ave.</br>Magnolia NJ 08049</br>Phone: (856) 784-2668</p></a></div>
        <div id="foot_fb"><a href="https://www.facebook.com/groups/419891871037/" title="Connect with us on Facebook"  target="_blank"><img src="img/bt_fb.png" alt="Facebook Link"></a></div>
    </div>

</div> <!-- end of footer container -->
<div><h4>©2016 Berean Baptist Church</h4></div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" ></script>
<script src="js/jquery.ubaplayer.js"></script>
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>

<!-- mobile -->
    <script>
		(function () {

		    // Create mobile element
		    var mobile = document.createElement('div');
		    mobile.className = 'nav-mobile';
		    document.querySelector('.nav').appendChild(mobile);

		    // hasClass
		    function hasClass(elem, className) {
		        return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
		    }

		    // toggleClass
		    function toggleClass(elem, className) {
		        var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
		        if (hasClass(elem, className)) {
		            while (newClass.indexOf(' ' + className + ' ') >= 0) {
		                newClass = newClass.replace(' ' + className + ' ', ' ');
		            }
		            elem.className = newClass.replace(/^\s+|\s+$/g, '');
		        } else {
		            elem.className += ' ' + className;
		        }
		    }

		    // Mobile nav function
		    var mobileNav = document.querySelector('.nav-mobile');
		    var toggle = document.querySelector('.nav-list');
		    mobileNav.onclick = function () {
		        toggleClass(this, 'nav-mobile-open');
		        toggleClass(toggle, 'nav-active');
		    };
		})();
		</script>

<!-- player -->
    <script>
            $(function(){

                $("#ubaplayer").ubaPlayer({
                codecs: [{name:"MP3", codec: 'audio/mpeg;'}]
                });

                $(".aShare").on('click',(function() {
					$(".dShare").hide();
					$(this).parent().find('.dShare').show();

					console.log(  );

                }));


            });
        </script>

<!-- form info -->
    <script>

$(document).ready(function(){
    $(".req").hide();
});


    </script>

<!-- testimonies -->
    <script>
        $(document).ready(function() {

            $('[id^=testmon]').hide();

            function rotateFade() {
                var toFadeOut = $('[id^=testmon].current');
                var toFadeIn = $('[id^=testmon].current + [id^=testmon]');

                toFadeIn = toFadeIn.length ? toFadeIn : $('[id^=testmon]:first-child');

                toFadeOut.removeClass('current').fadeOut(2000);

                if (toFadeIn.length == 0)
                {
                    $('#testmon1').addClass('current').fadeIn(2000);
                }
                else
                {
                   toFadeIn.addClass('current').fadeIn(2000);
                }
                setTimeout(rotateFade, 8000);
            }
            rotateFade();
        });
    </script>

    <!-- home page slide show -->
    <script src="js/ss.js"></script>


</body>
</html>
