<?= $header ?>
	<div class="w-section section profilemain">
		<div class="w-container">
			<div class="w-clearfix main">
				<div class="firstpart">
					<div class="singleimage"><img src="public/images/facebook-teerasej-profile-ball-circle.png">
					</div>
					<div class="singlemainpart">
						<h1 class="singlename"><?= $profile->name ?></h1>
						<h1 class="singletitle"><?= $profile->experience[0]->title ?></h1>
						<div class="singleadres"><?= 
							$profile->location->number . ", " . 
							$profile->location->street . ". " . 
							$profile->location->city . ", " . 
							$profile->location->province . ". "?></div>
							<div class="singleadres">Phone: <?= $profile->phone ?> Email: <?= $profile->email ?></div><a href="#" class="w-button single-button-1">Download Resume</a><a href="#" class="w-button single-button-1 sec">Contact Candidate</a>
						</div>
					</div>
					<div class="firstpart secondpart">
						<h2 class="singleheading">Summary</h2>
						<div id="single-detail" class="single-detail">
							<p><?= $profile->summary ?></p>
						</div>
					</div>
					<div class="firstpart secondpart">
						<h2 class="singleheading">Experience</h2>
						<div id="single-detail" class="single-detail">
						<?php foreach($profile->experience as $xp) { ?>
							<h3><?= $xp->title ?></h3>
							<h4><?= $xp->company ?></h4>
							<span><?= date("M Y", strtotime($xp->start_date)); ?> &#8212; <?= date("M Y", strtotime($xp->end_date)); ?></span>
							<br>
							<br>
							<p><?= $xp->description ?></p>
						<?php } ?>
						</div>
					</div>
					<div class="firstpart secondpart">
						<h2 class="singleheading">Education</h2>
						<div id="single-detail" class="single-detail">
							<?php foreach($profile->education as $ed) { ?>
								<h3><?= $ed->title ?></h3>
								<h4><?= $ed->institution ?></h4>
							<?php } ?>
						</div>
					</div>
					<div class="firstpart secondpart">
						<h2 class="singleheading">Skills</h2>
						<div id="single-detail" class="single-detail"><?php 
							$separator = "";
							foreach($profile->skill as $s){ 
								echo $separator;
								echo $s->name;
								$separator = ", ";
							} ?>
						</div>
					</div>
					<div class="firstpart secondpart">
						<h2 class="singleheading">Disabilites</h2>
						<div id="single-detail" class="single-detail"><?= $profile->description ?></div>
					</div>
				</div>
			</div>
		</div>
<?= $footer ?>