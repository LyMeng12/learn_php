<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" enctype="multipart/form-data" method="post">
        <fieldset>
            <legend>
                Student Registration
            </legend>

            <div class="field">
                <label for="firstname">First Name:</label>
                <input type="text" id="firstname" name="firstname">
                <div class="error"></div>
            </div>

            <div class="field">
                <label for="lastname">Last Name:</label>
                <input type="text" id="lastname" name="lastname">
                <div class="error"></div>
            </div>

            <div class="field">
                <label for="emailid">Email ID:</label>
                <input type="text" id="emailid" name="emailid">
                <div class="error"></div>
            </div>

            <div class="field">
                <label for="mobilenumber">Mobile Number:</label>
                <input type="text" id="mobilenumber" name="mobilenumber">
                <div class="error"></div>
            </div>

            <div class="field">
                <label for="gender">Gender</label>
                <input type="radio" name="gender" id="male" checked value="1">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="0">
                <label for="female">Female</label>
                <div class="error"></div>
            </div>
            <div class="field">
                <label for="dob">DOB:</label>
                <select name="dob" id="dob">
                    <option value="0">Day</option>
                    <?php for($i=1; $i<=31;$i++): ?>
                    <option value="<?= $i?>"><?=$i?></option>
                    <?php endfor; ?>

                </select>
                <select name="month" id="month">
                    <option value="0">Month</option>
                    <?php 
                for($i=1; $i<=12;$i++): 
                ?>
                    <option value="<?= $i?>"><?=$i?></option>
                    <?php endfor; ?>

                </select>
                <select name="year" id="year">
                    <option value="0">Year</option>
                    <?php for($i=1940; $i<=2026;$i++): ?>
                    <option value="<?= $i?>"><?=$i?></option>
                    <?php endfor; ?>
                </select>

                <div class="error"></div>
            </div>
            <div class="field">
                <label for="address">Address:</label>
                <textarea name="address" id="address"></textarea>
                <div class="error"></div>
            </div>
            <div class="field">
                <label for="city">City :</label>
                <input type="text" id="city" name="city">
                <div class="error"></div>
            </div>
            <div class="field">
                <label for="pincode">Pin Code:</label>
                <input type="text" id="pincode" name="pincode">
                <div class="error"></div>
            </div>
            <div class="field">
                <label for="province">Province :</label>
                <input type="text" id="province" name="province">
                <div class="error"></div>
            </div>
            <div class="field">
                <label for="country">Country :</label>
                <input type="text" id="country" name="country">
                <div class="error"></div>
            </div>

            <div class="field">
                <label for="qualification">Hobbies :</label> &nbsp;&nbsp;
                <input type="checkbox" id="hobbies" class="hobbies" name="hobbies[]" value="drawing">&nbsp;Drawing
                &nbsp;&nbsp;
                <input type="checkbox" id="hobbies" class="hobbies" name="hobbies[]" value="singing">&nbsp;Singing
                &nbsp;&nbsp;
                <input type="checkbox" id="hobbies" class="hobbies" name="hobbies[]" value="dancing">&nbsp;Dancing
                &nbsp;&nbsp;
                <input type="checkbox" id="hobbies" class="hobbies" name="hobbies[]" value="sketching">&nbsp;Sketching
                <br>
                Other &nbsp;
                <input type="text" id="hobbies" class="hobbies" name="hobbies[]" placeholder="Ex: Teaching">
                &nbsp;&nbsp;
                <div class="error"></div>
            </div>
            <div class="field">
                <label for="photo">Your Photo :</label>
                <input type="file" id="photo" name="photo">
                <div class="error"></div>
            </div>
            <div class="field">
                <label for="qualification">Qualification :</label> &nbsp;&nbsp;
                <br>
                <input type="radio" id="qualification" class="qualification" name="qualification" value="High School">&nbsp;High School
                <br>
                <input type="radio" id="qualification" class="qualification" name="qualification" value="Higher School(12th)">&nbsp;Higher School(12th)
                <br>
                <input type="radio" id="qualification" class="qualification" name="qualification" value="Graduation(Bachelors)">&nbsp;Graduation(Bachelors)
                <br>
                <input type="radio" id="qualification" class="qualification" name="qualification" value="Post Graduation(Master)">&nbsp;Post Graduation(Master)
                <br>
                <input type="radio" id="qualification" class="qualification" name="qualification" value="Phd">&nbsp;Phd
                <br>
                <div class="error"></div>
            </div>
            <div class="field">
                <label for="coursesappliedfor">Courses Applied For :</label> &nbsp;&nbsp;
                <br>
                <input type="radio" id="coursesappliedfor" class="coursesappliedfor" name="coursesappliedfor" value="BCA(Bachelor of Computer Applications)">&nbsp;BCA(Bachelor of Computer Applications)
                <br>
                <input type="radio" id="coursesappliedfor" class="coursesappliedfor" name="coursesappliedfor" value="B.Com Bachelor of Commerce">&nbsp;B.Com Bachelor of Commerce
                <br>
                <input type="radio" id="coursesappliedfor" class="coursesappliedfor" name="coursesappliedfor" value="B.Sc(Bachelor of Science)">&nbsp;B.Sc(Bachelor of Science)
                <br>
                <input type="radio" id="coursesappliedfor" class="coursesappliedfor" name="coursesappliedfor" value="MCA (Master of Computer Applications   )">&nbsp;MCA (Master of Computer Applications  )
                <br>
                <input type="radio" id="coursesappliedfor" class="coursesappliedfor" name="coursesappliedfor" value="BA(Bachelor of Arts)">&nbsp;BA(Bachelor of Arts)
                <br>
                <div class="error"></div>
            </div>
            <div class="field">
                <input type="submit" value="Submit" name="submitButton">
                <input type="reset" value="Reset" id="resetButton" name="resetButton">
                <div class="error"></div>
            </div>
        </fieldset>
    </form>

</body>

</html>
