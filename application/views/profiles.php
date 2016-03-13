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
			<h3><?= $a->experience[0]->title ?></h3>
			<h4>location</h4>
			<p><?= $a->location->neighbourhood ?> - <?= $a->location->city ?></p>
			<h4>email</h4>
			<p><?= $a->email ?></p>
			<h4>phone</h4>
			<p><?= $a->phone ?></p>
			<h4>summary</h4>
			<p><?= $a->summary ?></p>
			<h4>skils</h4>
			<p><?php 
	
	$separator = "";
	foreach($a->skill as $s){ 
		echo $separator;
		echo $s->name;
		$separator = ", ";
	} ?></p>
			<h4>education</h4>
			<p><?php foreach($a->education as $xp){ ?>
				<h5><?= $xp->title ?> - <?= $xp->institution ?></h5>
<?php } ?></p><h4>experience</h4>
			<p><?php foreach($a->experience as $xp){ ?>
				<h5><?= $xp->title ?> - <?= $xp->company ?></h5>
<?php } ?></p>
		</article>
		<!-- <?php print_r($a); ?> -->
<?php } ?>
	</div>
</body>
</html>