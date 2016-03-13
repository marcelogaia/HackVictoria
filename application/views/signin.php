<?= $header ?>
  <div class="w-section sing-in-section">
    <div class="w-container">
      <div class="sign-in-box">
        <h1 class="sign-in-word">Sign in</h1>
        <div class="little-message">Hello There, Sign in and start managing your resume.</div>
        <div class="w-form">
          <form id="email-form" name="email-form" data-name="Email Form" action="./login/submit/signin" method="post">
            <label for="name" class="form-label">Email:</label>
            <input id="name" type="email" placeholder="Enter your email address" name="name" data-name="Name" class="w-input">
            <label for="email" class="form-label">Password:</label>
            <input id="email" type="password" placeholder="Enter your password" name="password" data-name="Email" required="required" class="w-input">
            <input type="submit" value="Submit" data-wait="Please wait..." class="w-button sign-in-button">
          </form>
          <div class="w-form-done">
            <p>Logging in ....</p>
          </div>
          <div class="w-form-fail">
            <p>Oops! Something went wrong when signing in</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<?= $footer ?>