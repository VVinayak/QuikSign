<html>
<body>
<div class='row'>
<form action='/register' method='post'enctype="multipart/form-data">
    <div class='col offset-m2 m8'>
            <h1 class='center' style="font-family:roboto-thin;">
                 Registration
            </h1>
        <h5 class='center'>Account Details</h5>
        <div class='input-field'>
            <input type='text' id='display_name' name='display_name' pattern='[A-Za-z0-9._]{6,16}' class='validate' required>
            <label for='display_name'>
                Username (min. 6 chars)
            </label>
        </div>
        <div class='input-field'>
            <input type='email' id='email' name='email' class='validate' required>
            <label for='email'>
                Email Address
            </label>
        </div>
        <div class='input-field'>
            <input type='hidden' name='webmail_id' value='{{{ $webmail_id }}}'>
            <input type='text' id='webmail_id' disabled='disabled' value='{{{ $webmail_id }}}'>
            <label for='webmail_id'>
                Webmail Id ( e.g. me@nitt.edu)
            </label>
        </div>
        <div class='row'>
            <div class='input-field'>
            <input type='password' id='password' name='password' class='validate' required>
            <label for='password'>
                Password (min. 6 chars)
            </label>
        </div>
        <div class='input-field'>
            <input type='password' id='password_confirmation' name='password_confirmation' class='validate' required>
            <label for='password_confirm'>
                Confirm Password
            </label>
        </div>
        </div>
        <h5 class='center'>Personal Details</h5>
        <div class='row'>
            <div class='input-field'>
            <input type='text' id='full_name' name='full_name' pattern='[A-za-z ]{6,30}' class='validate' required>
            <label for='full_name'>
                Full Name
            </label>
        </div>
        </div>
        <div class='row'>
            <div class='input-field'>
            <div class='row'>
                <label for='gender'>
                    Gender
                </label>
            </div>
            <div class='row'>
                <input type='radio' name='gender' id='gender1' value='male' checked>
                <label for='gender1'>Male</label>
                <input type='radio' name='gender' id='gender2' value='female'>
                <label for='gender2'>Female</label>
                <input type='radio' name='gender' id='gender3' value='other'>
                <label for='gender3'>Other</label>
            </div>
        </div>
        </div>
        <div class='row'>
            <div class='input-field'>
            <input type='date' id='date_of_birth' name='dob' placeholder="Date of Birth" required>
            <script>
                $('.datepicker').pickadate();
            </script>
        </div>
        </div>
        <div class='row'>
            <div class='col s2 input-field'>
            <label for='country_code'>
                Country Code (e.g. +91)
            </label>
            <input type='number' id='country_code' name='country_code' class='validate' pattern='[0-9]{1,3}' value=91 required>
        </div>
        <div class=' col s10 input-field'>
            <label for='phone_number'>
                Phone Number
            </label>
            <input type='number' id='phone_number' name='phone_number' pattern="[0-9]{5,20}" class='validate' required>
        </div>
        </div>
        <div class='row'>
            <label for='address'>
                Permanent address
            </label>
            <textarea name='address' class='materialize-textarea' required></textarea>
        </div>
                <div class='row'>
            <div class='col s6'>
                Willing to donate blood?
                <select required class='browser-default' name='donor'>
                <option value='yes'>
                    Yes
                </option>
                <option value='no'>
                    No
                </option>
            </select>
            </div>
            <div class='col s4'>
                Blood group
                <select required class='browser-default' name='blood_group'>
                <option value='o'>
                    O
                </option>
                <option value='a'>
                    A
                </option>
                <option value='b'>
                    B
                </option>
                <option value='ab'>
                    AB
                </option>
                <option value='a1b'>
                    A1B
                </option>
                <option value='a2b'>
                    A2B
                </option>
                <option value='b1'>
                    B1
                </option>
            </select>
            </div>
            <div class='col s2'>
                Rh
                <select required class='browser-default' name='rh_factor'>
                <option value='+'>
                    +ve
                </option>
                <option value='-'>
                    -ve
                </option>
            </select>
            </div>
        </div>
        <h5 class='center'>Parent/Guardian Details</h5>
        <div class='row'>
            <div class='input-field'>
                <label for='guardian_name'>
                    Name of Parent/Guardian
                </label>
                <input type="text" name="guardian_name" class='validate' pattern="[a-zA-Z ]{4,30}" required>
            </div>
        </div>
        <div class='row'>
            <div class='col s2 input-field'>
            <label for='guardian_country_code'>
                Country Code (e.g. +91)
            </label>
            <input type='number' id='guardian_country_code' name='guardian_country_code' class='validate' pattern='[0-9]{1,3}' value=91 required>
        </div>
        <div class='col s10 input-field'>
            <label for='guardian_phone_number'>
                Parent/Guardian Phone Number
            </label>
            <input type='number' id='guardian_phone_number' name='guardian_phone_number' pattern="[0-9]{5,20}" class='validate' required>
        </div>
        </div>
        <div class='row'>
            <div class='input-field'>
                <label for='guardian_email'>
                    Parent/Guardian Email Address
                </label>
                <input type='email' class='validate' name='guardian_email' required>
            </div>
        </div>
        <div class='row'>
            <label for='guardian_address'>
                Address of Parent/Guardian
            </label>
            <textarea name='guardian_address' class='materialize-textarea' required></textarea>
        </div>
        <div class='row'>
            <label for='facebook_link'>
                Facebook profile address
            </label>
            <input type='text' name='facebook_link'>
        </div>
        <label for='profilepic'>
            Profile Picture
        </label>
        <div class='input-field'>
            <div class='row'>
                <input type="file" id='profilepic' name="profilepic" placeholder="Your profile pic" />
            </div>
        </div>
        <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Submit
                <i class="mdi-content-send right"></i>
        </button>
    </div>
</form>
</div>
</body>
</html>
