<?php view('home/header'); ?>
	<div class="container">
		<div class="home">
			<div class="img"><img src="<?php echo image('1.png') ?>" alt=""></div>
			<div class="img"><img src="<?php echo image('2.png') ?>" alt=""></div>
			<div class="img"><img src="<?php echo image('3.png') ?>" alt=""></div>
			<div class="img"><img src="<?php echo image('4.png') ?>" alt=""></div>
			<div class="img"><img src="<?php echo image('5.png') ?>" alt=""></div>
			<div class="img"><img src="<?php echo image('6.png') ?>" alt=""></div>
			<div class="img"><img src="<?php echo image('7.png') ?>" alt=""></div>
			<div class="img"><img src="<?php echo image('8.png') ?>" alt=""></div>

			<div class="form">
				<div class="content">					
					<div class="title">凭信用卡全国免费领取</div>
					<form id="form_contenct">
						<div class="entry">
							<input type="text" id="username" name="username" placeholder="您的姓名*">
						</div>
						<div class="entry">
							<input type="text" id="phone" name="phone" placeholder="您的手机号*">
						</div>
						<div class="entry">
							<input type="text" id="address" name="address" placeholder="邮寄地址*">
						</div>
						<div class="entry">
							<input type="text" id="contact" name="contact" placeholder="微信/QQ">
						</div>

					</form>
					<a class="btn" href="javascript:;" id="submit_contect">提交</a>
				</div>
			</div>
			<div class="img"><img src="<?php echo image('9.jpg') ?>" alt=""></div>
		</div>
		<?php view('home/sidebar'); ?>
		<script>
	        $(document).ready(function() {
	            $('#submit_contect').click(function() {
	                $.ajax({
	                    url: '<?php echo base_url('index/submitContect') ?>',
	                    type: 'POST',
	                    dataType: 'json',
	                    data: $('#form_contenct').serialize(),
	                    success:function(data) {
	                        if(data.status == 200) {
	                            alert('申请成功，等待信息核实...');
	                            location.reload();
	                        }else {
	                            alert(data.msg);
	                        }
	                    }
	                })
	            });
	        });
	    </script>
	</div>
<?php view('home/footer'); ?>

