<?= $header ?>
  <div class="secondmenu">
    <div class="w-container">
      <div class="w-form form">
        <form id="email-form" name="email-form" data-name="Email Form" class="w-clearfix form">
          <label for="name" class="search-label">Search for Jobs:</label>
          <input id="name" type="text" placeholder="Search" name="name" data-name="Name" class="w-input searchbox">
          <input type="submit" value="Submit" data-wait="Please wait..." class="w-button search-box-button">
        </form>
        <div class="w-form-done">
          <p>Thank you! Your submission has been received!</p>
        </div>
        <div class="w-form-fail">
          <p>Oops! Something went wrong while submitting the form</p>
        </div>
      </div>
    </div>
  </div>
  <div class="w-section section profilemain">
    <div class="w-container">


      <?php foreach($profiles as $a) { ?>
      <div class="single-profile">
        <div class="single-profile-header">
          <div class="w-row">
            <div class="w-col w-col-1"><img width="317" src="public/images/facebook-teerasej-profile-ball-circle.png" class="profile-image">
            </div>
            <div class="w-col w-col-11">
              <a href="./profile/get/<?= $a->id ?>">
                <h4 class="name"><?= $a->name ?></h4>
                <h5 class="title"><?= $a->experience[0]->title ?></h5>
              </a>
            </div>
          </div>
        </div>
        <div class="profilelistmain">
          <div class="col">
            <div class="listtitle">Location:</div>
            <div class="listdetail"><?= $a->location->neighbourhood ?> - <?= $a->location->city ?></div>
            </div
            ><div class="col">
            <div class="listtitle">Email:</div>
            <div class="listdetail"> <?= $a->email ?>  </div>
            </div
            ><div class="col">
            <div class="listtitle">Phone:</div>
            <div class="listdetail">  <?= $a->phone ?> </div>
            </div
            ><div class="col twocol">
            <div class="listtitle">Summary:</div>
            <div class="listdetail"><?= substr_limit($a->summary, 150) ?> </div>
            </div 
            ><div class="col">
            <div class="listtitle">Education:</div>
            <?php foreach($a->education as $xp){ ?>
            <div class="listdetail"><?= $xp->title ?>,
              <br>
              <div><?= $xp->institution ?></div>
              <?php } ?>

            </div>
            </div
            ><div class="col twocol">
            <div class="listtitle">Skills:</div>
            <div class="listdetail"><?php 
              $separator = "";
              foreach($a->skill as $s){ 
                echo $separator;
                echo $s->name;
                $separator = ", ";
              } ?></div>
            </div
            ><div class="col">
            <div class="listtitle">Experience:</div>


            <?php foreach($a->experience as $xp){ ?>
            <div class="listdetail"><?= $xp->title ?>
              <br><?= $xp->company ?></div>
              <?php } ?>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
<?= $footer ?>