<?= $header ?>
  <div class="w-section sing-in-section">
    <div class="w-container">
      <div class="create-profile">
        <h1 class="sign-in-word">Create your profile</h1>
        <div class="little-message">Showcase what you skills and qualifications to everybody.</div>
        <div class="w-form">
          <form id="email-form" name="email-form" data-name="Email Form" method="post" action="./login/submit/signup" >
            <input type="hidden" name="email" value="<?= $email ?>" >
            <input type="hidden" name="password" value="<?= $password ?>" >
            <h2 class="subhead">Basic Information:</h2>
            <div class="w-row">
              <div class="w-col w-col-4">
                <label for="name" class="form-label">Name:</label>
                <input id="name" type="email" placeholder="Enter your name" name="name" data-name="Name" class="w-input">
              </div>
              <div class="w-col w-col-4">
                <label for="location" class="form-label">Mobile number:</label>
                <input id="location" type="tel" placeholder="Enter your mobile number" name="phone" data-name="location" class="w-input">
              </div>
              <div class="w-col w-col-4">
                <label for="email-2" class="form-label">Date of birth:</label>
                <input id="email-2" type="datetime" placeholder="Enter your date of birth" name="date_of_birth" data-name="Email 2" class="w-input">
              </div>
            </div>
            <label for="field-3" class="form-label">Short Summary:</label>
            <textarea id="field-3" placeholder="Enter a short description of yourself" name="summary" data-name="Field 3" class="w-input"></textarea>
            <h2 class="subhead">Location:</h2>
            <div class="w-row">
              <div class="w-col w-col-3">
                <label for="location-8" class="form-label">Zip Code:</label>
                <input id="location-8" type="text" placeholder="Enter your zip code" name="zipcode" data-name="location 1" class="w-input">
              </div>
              <div class="w-col w-col-3">
                <label for="Location-7" class="form-label">Apartment number:</label>
                <input id="Location-7" type="password" placeholder="Enter apartment number" name="unit" data-name="Location 2" class="w-input">
              </div>
              <div class="w-col w-col-3">
                <label for="location-9" class="form-label">Street number:</label>
                <input id="location-9" type="password" placeholder="Enter your street number" name="number" data-name="location 3" class="w-input">
              </div>
              <div class="w-col w-col-3">
                <label for="location-10" class="form-label">Street name:</label>
                <input id="location-10" type="password" placeholder="Enter your street name" name="street" data-name="location 4" class="w-input">
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-3">
                <label for="location-11" class="form-label">Neighborhood:</label>
                <input id="location-11" type="email" placeholder="Enter your neighborhood" name="neighborhood" data-name="location 5" class="w-input">
              </div>
              <div class="w-col w-col-3">
                <label for="Location-12" class="form-label">City:</label>
                <input id="Location-12" type="password" placeholder="Enter your city" name="city" data-name="Location 6" class="w-input">
              </div>
              <div class="w-col w-col-3">
                <label for="location-13" class="form-label">Province:</label>
                <input id="location-13" type="password" placeholder="Enter your location" name="province" data-name="location 7" class="w-input">
              </div>
              <div class="w-col w-col-3"></div>
            </div>
            <h2 class="subhead">Experiences:</h2>
            <div class="w-row">
              <div class="w-col w-col-3">
                <label for="name-2" class="form-label">Title:</label>
                <input id="name-2" type="email" placeholder="What was your job title" name="xp[0][title]" data-name="Name 2" class="w-input">
              </div>
              <div class="w-col w-col-3">
                <label for="location-2" class="form-label">Company:</label>
                <input id="location-2" type="password" placeholder="Enter the company's name" name="xp[0][company]" data-name="Location 2" class="w-input">
              </div>
              <div class="w-col w-col-3">
                <label for="email-3" class="form-label">Start Date:</label>
                <input id="email-3" type="password" placeholder="Enter your start date" name="xp[0][start_date]" data-name="Email 3" class="w-input">
              </div>
              <div class="w-col w-col-3">
                <label for="email-4" class="form-label">End Date:</label>
                <input id="email-4" type="password" placeholder="Enter your end date" name="xp[0][end_date]" data-name="Email 4" class="w-input">
              </div>
            </div>
            <label for="field" class="form-label">Description:</label>
            <textarea id="field" placeholder="Enter a short description of your self" name="xp[0][description]" class="w-input"></textarea>
            <h2 class="subhead">Education:</h2>
            <div class="w-row">
              <div class="w-col w-col-3">
                <label for="name-3" class="form-label">Title:</label>
                <input id="name-3" type="email" placeholder="What was your job title" name="ed[0][title]" data-name="Name 3" class="w-input">
              </div>
              <div class="w-col w-col-3">
                <label for="location-3" class="form-label">Company:</label>
                <input id="location-3" type="password" placeholder="Enter the company's name" name="ed[0][company]" data-name="Location 3" class="w-input">
              </div>
              <div class="w-col w-col-3">
                <label for="email-5" class="form-label">Start Date:</label>
                <input id="email-5" type="password" placeholder="Enter your start date" name="ed[0][start_date]" data-name="Email 5" class="w-input">
              </div>
              <div class="w-col w-col-3">
                <label for="email-6" class="form-label">End Date:</label>
                <input id="email-6" type="password" placeholder="Enter your end date" name="ed[0][end_date]" data-name="Email 6" class="w-input">
              </div>
            </div>
            <label for="field" class="form-label">Description:</label>
            <textarea id="field-2" placeholder="Enter a short description of your self" name="ed[0][description]" data-name="Field 2" class="w-input"></textarea>
            <h2 class="subhead">Disabilities:</h2>
            <label for="field-4" class="form-label">Describe what is your disabilities</label>
            <textarea id="field-4" placeholder="Describe in few sentences your disabilities." name="field-4" data-name="description" class="w-input"></textarea>
            <h2 class="subhead">Skills:</h2>
            <label for="field-4" class="form-label">Enter a list of words that describes your skills.</label>
            <textarea id="field-5" placeholder="Seperate your skills by comma, writing more skills make your resume more searchable" name="skill" data-name="Field 5" class="w-input"></textarea>
            <input type="submit" value="Submit" data-wait="Please wait..." class="w-button sign-in-button">
          </form>
          <div class="w-form-done psm">
            <p>Loading...</p>
          </div>
          <div class="w-form-fail">
            <p>Oops! Something went wrong when submiting your resume</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<?= $footer ?>