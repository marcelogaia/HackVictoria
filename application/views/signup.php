<?= $header ?>
  <div class="w-section sing-in-section">
    <div class="w-container">
      <div class="sign-in-box">
        <h1 class="sign-in-word">Sign up</h1>
        <div class="little-message">Sign up now for free, and upload your resume.</div>
        <div class="w-form">
          <form id="email-form" name="email-form" data-name="Email Form" method="post" action="./create-profile">
            <label for="name" class="form-label">Email:</label>
            <input id="name" type="email" placeholder="Enter your email address" name="email" data-name="Name" class="w-input">
            <label for="email" class="form-label">Password:</label>
            <input id="email" type="password" placeholder="Enter your password" name="password" data-name="Email" required="required" class="w-input">
            <input type="submit" value="Sign up" data-wait="Please wait..." class="w-button sign-in-button">
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