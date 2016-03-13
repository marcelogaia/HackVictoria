<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<header>
		<h1>Victoria</h1>
		<nav>
			<ul>
				<li>Home</li>
				<li>Profiles</li>
				<li>Sign in</li>
				<li>Sign up</li>
			</ul>
		</nav>
	</header>
	<div>
<?php foreach($profiles as $a){?>
		<article>
			<h2><?= $a->name ?></h2>
			<h3><?= $a->name ?></h3>
			<h4>location</h4>
			<p><?= $a->name ?></p>
			<h4>email</h4>
			<p><?= $a->email ?></p>
			<h4>phone</h4>
			<p><?= $a->phone ?></p>
			<h4>summary</h4>
			<p><?= $a->summary ?></p>
			<h4>skils</h4>
			<p><?= $a->name ?></p>
			<h4>education</h4>
			<p><?= $a->name ?></p>
			<h4>experience</h4>
			<p><?= $a->name ?></p>
		</article>
<?php } ?>
	</div>
</body>
</html>