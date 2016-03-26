<?php include 'header.php'; ?>

<header>
	<a href="index.php">入门</a>
	<a href="member.php" class="active">账户</a>
</header>

<main>
	<div class="card">
		<div class="card-header">
			<span class="right"><a href="member.php?action=home">&gt;&gt; 返回</a></span>
			缴费
		</div>
		<div class="card-content">
			<?php if (count($message)) { ?>
			<div>
				<ul>
					<?php foreach ($message as $line) {
						echo "<li>$line</li>";
					}?>
				</ul>
			</div>
			<?php } ?>
			<form method="post" action="member.php?action=pay">
				<input type="text" placeholder="支付宝流水号" autofocus="autofocus" id="tradeno" name="tradeno" />
				<input type="submit" class="button" />
			</form>
			<ol>
				<li>向 <a href="https://auth.alipay.com/login/index.htm?goto=https%3A%2F%2Fshenghuo.alipay.com%2Fsend%2Fpayment%2Ffill.htm" target="_blank"><code>s.sunfeihu@gmail.com</code></a> 转账一个整数，小数部分将被忽略，使用手机支付宝可以免除手续费</li>
				<li>访问 <a href="https://consumeprod.alipay.com/record/advanced.htm" target="_blank"><code>https://consumeprod.alipay.com/record/advanced.htm</code></a> 查看支付宝流水号粘贴到输入框中，请注意该页面是支付宝交易记录高级版，直接访问会跳转到普通版</li>
			</ol>
			<p>客服电话是 <span class="badge">100 0000 0000</span> ，服务时间是 08：00 至 20：00</p>
		</div>
		<div class="card-footer small-text">
			<p>&copy; <?php echo date('Y'); ?> <a href="http://cenegd.com/">cenegd</a></p>
		</div>
	</div>
</main>

<?php include 'footer.php'; ?>
