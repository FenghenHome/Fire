<?php
//填写服务器地址和端口号


include 'header.php';
$address_a = "xxxx";//填写美国服务器地址
$address_j = "xxxx";//填写日本服务器地址
$address_s = "xxxx";//填写新加坡服务器地址
$port_a ="xxxx";//填写端口
$pass_a = file_get_contents("library/pass.txt");//密码
$method_a ="aes-256-cfb";//填写加密方式
?>

<header>
	<a href="index.php">入门</a>
	<a href="trial.php" class="active">试用</a>
</header>

<main>
	<div class="card">
		<div class="card-header">试用</div>
		<div class="card-content">
			<p>服务器除地址不一致以外，其他端口、密码和加密方式均一致</p>
			<form>
			<p class="small-text">
			<?php
			echo '<dt>美国服务器:'.$address_a.'</dt>';
			echo '<dt>日本服务器:'.$address_j.'</dt>';
			echo '<dt>新加坡服务器:'.$address_s.'</dt>';
			
			echo '<dt>端口:'.$port_a.'</dt>';
			echo '<dt>密码:'.$pass_a.'</dt>';
			echo '<dt>加密方式:'.$method_a.'</dt>';
			?>
			</p>
			</form>
		</div>
		<div class="card-footer small-text">
			<p>&copy; <?php echo date('Y'); ?> <a href="http://cenegd.com/">cenegd</a></p>
		</div>
	</div>
</main>

<?php include 'footer.php'; ?>
