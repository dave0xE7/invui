<nav id="topnav">
	<ul>
            <li><a href="/">INVIDEC</a></li>
            <li><a href="/posts">Posts</a></li>
            <li><a href="/products">Products</a></li>
            <li><a href="/docs">Docs</a></li>
            <li><a href="/tools">Tools</a>
	<!--<ul>
	<?php /**
		$items=array_diff(scandir('tools'), array('.','..'));
		foreach ($items as $item) {
			echo('<li><a href="/tools/'.$item.'">'.$item.'</a></li>');
		}**/ 
	?>
		</ul>-->
	</li>
	
	<?php if (isUser()) { ?>
		<!--<li style="float:right"><a href="/account/logout">Logout</a></li>-->
		<li style="float:right"><a href="/account"><i class="fa fa-fw fa-user"></i> <?php echo(getUsername()); ?></a></li>
		<!--<li style="float:right"><a href="/account/dashboard">Dashboard</a></li>-->
		<li style="float:right"><a href="/account/conversations"><i class="fa fa-fw fa-envelope"></i> Conversations</a></li>
		
		<?php if (isAdmin()) { ?>
		<li style="float:right"><a href="/admin">Admin</a></li>
		<?php } ?>
		
	<?php } else { ?>
		<li style="float:right"><a href="/account/login.php"><i class="fa fa-fw fa-user"></i> Login</a></li>
		<li style="float:right"><a href="/account/register.php">Register</a></li>
	<?php } ?>
	</ul>
</nav>