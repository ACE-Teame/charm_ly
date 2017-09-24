<?php require('header.php'); ?>
	<div class="container">
		<div class="contact">
			<div class="title">留言板</div>
			<div class="form">
				<div class="content">					
					<div class="title">发表您的留言</div>
					<form id="form_board">
						<div class="entry">
							<input type="text" id="username" name="username" placeholder="姓名(必填)">
						</div>
						<div class="entry">
							<input type="text" id="email" name="email" placeholder="邮箱">
						</div>
						<div class="entry">
							<input type="text" id="phone" name="phone" placeholder="电话(必填)*">
						</div>
						<div class="entry">
							<textarea id="contect" name="contect" placeholder="内容:" row="3"></textarea>
						</div>
					</form>
					<a class="btn" href="javascript:;" id="submit_board">提交</a>
				</div>
			</div>
		</div>
		<?php require('sidebar.php'); ?>
		<script>
	        $(document).ready(function() {
	            $('#submit_board').click(function() {
	                $.ajax({
	                    url: '<?php echo base_url('index/board') ?>',
	                    type: 'POST',
	                    dataType: 'json',
	                    data: $('#form_board').serialize(),
	                    success:function(data) {
	                        if(data.status == 200) {
	                            alert('留言成功！');
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
<?php require('footer.php'); ?>

