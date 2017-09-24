<script type="text/javascript">
    (function($){
		$(function(){

		    $('body').on('click','.home-menu', function(){
		    	$('.slide-left').addClass('active');
		    	$('.bg').addClass('active');
		    	return false;
		    });
		    $('body').on('click','.bg', function(){
		    	$('.slide-left').removeClass('active');
		    	$('.bg').removeClass('active');
		    	return false;		    	
		    });

		    var str = window.location.pathname;
            var positions = new Array();
            var pos = str.lastIndexOf("/");
            var ret = str.substring(pos+1, str.length);
            console.log(ret);
            if(ret){
                $('#index').removeClass('active');
                $('#' + ret).addClass('active');
            }
            
		});
    })(jQuery);

</script>
</body>
</html>