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
			<p>在开始前，我希望你阅读 Fire 的基本条款</p>
			<p>网络审查是围绕着我们生活中存在的一种现象，是与非不可轻易区分，但是不需要商榷的是<b>通过避免网络审查进行犯罪活动是违背道德的</b>。Fire 遵守中华人民共和国的法律，所以请您遵守<a href="http://www.gov.cn/gongbao/content/2011/content_1860856.htm" target="_blank">《计算机信息网络国际联网安全保护管理办法》</a>。</p>
			<form>
			<p class="small-text">
			<?php
			echo '<dt>美国</dt>';
			echo '<dt>服务器:'.$address_a.'</dt>';
			echo '<dt>端口:'.$port_a.'</dt>';
			echo '<dt>密码:'.$pass_a.'</dt>';
			echo '<dt>加密方式:'.$method_a.'</dt>';
			?>
			</p>
			<p class="small-text">
			<?php
			echo '<dt>日本</dt>';
			echo '<dt>服务器:'.$address_j.'</dt>';
			echo '<dt>端口:'.$port_a.'</dt>';
			echo '<dt>密码:'.$pass_a.'</dt>';
			echo '<dt>加密方式:'.$method_a.'</dt>';
			?>
			</p>
			<p class="small-text">
			<?php
			echo '<dt>新加坡</dt>';
			echo '<dt>服务器:'.$address_s.'</dt>';
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