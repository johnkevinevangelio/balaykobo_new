<style>




.bookform-body {
  margin-top: 6%;
  background: #EBE9DA;
}
.column1 {
  padding-left: 5%
}
.column1 .title {
color: #3E352C;
font-family: "Helvetica Neue";
font-size: 20px;
font-style: normal;
font-weight: 700;
line-height: 103.2%; /* 20.64px */
margin-bottom: 5%;
}
.column1 .content {
color: #3E352C;
font-family: "Helvetica Neue";
font-size: 16px;
font-style: normal;
font-weight: 400;
line-height: 150.2%; /* 24.032px */
}
.form-section {
  background: #F2F2E6;
  padding: 3%;
  margin-right: 5%;
  margin-left: 5%;
  margin-bottom: 5%;
}
.form-section-title {
  color: #3E352C;
  font-family: "Helvetica Neue";
  font-size: 20px;
  font-style: normal;
  font-weight: 700;
  line-height: 103.2%; /* 20.64px */
}

.form-control {
    border: none;
    border-bottom: 1px solid #3E352C;
    border-radius: 0;
    box-shadow: none;
    color: #3E352C;
    font-family: "Helvetica Neue";
    font-size: 16px;
    font-style: normal;
    line-height: 103.2%; /* 16.512px */
    background: #F2F2E6;
}
.form-control.invalid {
  background-color: #ffdddd;
}
.form-label {
    color: #3E352C;
    font-family: "Helvetica Neue";
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: 103.2%; /* 16.512px */
}
.form-control:focus {
    border-bottom: 2px solid #007bff;
    outline: none;
    box-shadow: none;
}
.text-muted {
    font-family: "Helvetica Neue";
    font-size: 12px;
    font-style: normal;
    line-height: 103.2%; /* 16.512px */
}

.checkbox-label {
  margin-top: 3%;
  color: #000;

  font-family: "Helvetica Neue";
  font-size: 16px;
  font-style: normal;
  line-height: 150.2%; /* 24.032px */
}
.submit-btn-section {
  margin-left: 5%;
  margin-right: 5%;
  margin-bottom: 5%;
}
.submitBtn {

  width: 228px;
  height: 35px;
  padding: 8px 33.6px;
  gap: 83.2px;

  border-radius: 6px;
  border: 0.8px solid #496575;
  background: #557689;
  color: #FFF;

  font-family: "Helvetica Neue";
  font-size: 14px;
  font-style: normal;
  font-weight: 400;
  line-height: 115.2%; /* 16.128px */
}

/*modal */
.modal#statusSuccessModal .modal-content {
  border-radius: 30px;
},
.modal#statusErrorsModal .modal-content {
	border-radius: 30px;
}
.modal#statusSuccessModal .modal-content svg, 
.modal#statusErrorsModal .modal-content svg {
	width: 100px; 
	display: block; 
	margin: 0 auto;
}
.modal#statusSuccessModal .modal-content .path, 
.modal#statusErrorsModal .modal-content .path {
	stroke-dasharray: 1000; 
	stroke-dashoffset: 0;
}
.modal#statusSuccessModal .modal-content .path.circle, 
.modal#statusErrorsModal .modal-content .path.circle {
	-webkit-animation: dash 0.9s ease-in-out; 
	animation: dash 0.9s ease-in-out;
}
.modal#statusSuccessModal .modal-content .path.line, 
.modal#statusErrorsModal .modal-content .path.line {
	stroke-dashoffset: 1000; 
	-webkit-animation: dash 0.95s 0.35s ease-in-out forwards; 
	animation: dash 0.95s 0.35s ease-in-out forwards;
}
.modal#statusSuccessModal .modal-content .path.check, 
.modal#statusErrorsModal .modal-content .path.check {
	stroke-dashoffset: -100; 
	-webkit-animation: dash-check 0.95s 0.35s ease-in-out forwards; 
	animation: dash-check 0.95s 0.35s ease-in-out forwards;
}

@-webkit-keyframes dash { 
	0% {
		stroke-dashoffset: 1000;
	}
	100% {
		stroke-dashoffset: 0;
	}
}
@keyframes dash { 
	0% {
		stroke-dashoffset: 1000;
	}
	100%{
		stroke-dashoffset: 0;
	}
}
@-webkit-keyframes dash { 
	0% {
		stroke-dashoffset: 1000;
	}
	100% {
		stroke-dashoffset: 0;
	}
}
@keyframes dash { 
	0% {
		stroke-dashoffset: 1000;}
	100% {
		stroke-dashoffset: 0;
	}
}
@-webkit-keyframes dash-check { 
	0% {
		stroke-dashoffset: -100;
	}
	100% {
		stroke-dashoffset: 900;
	}
}
@keyframes dash-check {
	0% {
		stroke-dashoffset: -100;
	}
	100% {
		stroke-dashoffset: 900;
	}
}


</style>




<div class="container-fluid bookform-body">
  <div class="row mt-5 column1">
    <div class="col-sm-3">
      <div class="title">
        Book a Studio
      </div>
      <div class="content">
        For rental inquiries, please fill out the form below.Please expect our response within 24 hours. 
      </div>
      <div class="content">
        You may email us at info.balaykobo@gmail.com
        or contact 09176761202 for urgent concerns.
      </div>
      <div class="content">
        Thank you!
      </div>
    </div>
    <div class="col">
      <form id="gform" class="form-card">
        <section class="form-section">
            <div class="form-section-title mb-5">
                Step 01: Input your information
            </div>
            <div class="row mb-4">
              <label class="form-label">Name</label>
              <p class="text-muted">ex: Trina</p>
              <div class="row">
                  <div class="col">
                      <input type="text" name="entry.532332563" oninput="validateFormIndividual(this)" class="form-control required" placeholder="First Name Last Name">
                  </div>
                  <!-- <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="Last Name">
                  </div> -->
              </div>            
            </div>
            <div class="row mb-4">
              <label class="form-label">Affiliation / Company</label>
              <p class="text-muted">ex: Balay Kōbō</p>
              <div class="row">
                  <div class="col">
                      <input type="text" name="entry.156465969" oninput="validateFormIndividual(this)" class="form-control required">
                  </div>
              </div>            
            </div>
            <div class="row mb-4">
              <label class="form-label">Email</label>
              <p class="text-muted">ex: balaykobo@gmail.com</p>
              <div class="row">
                  <div class="col">
                      <input type="text" name="entry.1198147897" oninput="validateFormIndividual(this)"class="form-control required">
                  </div>
              </div>            
            </div>
            <div class="row mb-4">
              <label class="form-label">Phone</label>
              <p class="text-muted">ex: 0926 638 3322</p>
              <div class="row">
                  <div class="col">
                      <input type="text" name="entry.413029487" oninput="validateFormIndividual(this)" class="form-control required">
                  </div>
              </div>            
            </div>
            <div class="row mb-4">
              <label class="form-label">Instagram Handle</label>
              <p class="text-muted">ex: @_trinacamacho</p>
              <div class="row">
                  <div class="col">
                      <input type="text" name="entry.1881684809" oninput="validateFormIndividual(this)" class="form-control required">
                  </div>
              </div>            
            </div>
        </section>

        <section class="form-section">
          <div class="form-section-title mb-5">
            Step 02: Input your shoot details
          </div>
          <div class="row mb-4">
            <label class="form-label">Purpose of the Shoot</label>
            <p class="text-muted">Please select your upgrades of interest</p>
            <div class="row">
                <div class="col">
                    <input type="text" name="entry.711602103" oninput="validateFormIndividual(this)" class="form-control required">
                </div>
            </div>            
          </div>
          <div class="row mb-4">
            <label class="form-label">Target Date</label>
            <p class="text-muted">Please give us your shoot date</p>
            <div class="row">
                <div class="col">
                    <input type="datetime-local" name="entry.283111418" oninput="validateFormIndividual(this)" class="form-control required">
                </div>
            </div>            
          </div>
          <div class="row mb-4">
            <label class="form-label">Duration</label>
            <p class="text-muted">Minimum of 4 hour booking</p>
            <div class="row">
                <div class="col">
                  <div class="form-group col-sm-12 flex-column d-flex">   
                    <!-- <input id="duration" type="text" name="duration" data-duration="01:00:00" data-duration-max="04:00:00" data-duration-min="01:00:00" class="html-duration-picker" oninput="this.className = ''" placeholder=""> -->
                    <select id="durationSelect" name="entry.736432796" class="form-control required">
                      <option value="4 hours">4 hours</option>
                      <option value="5 hours">5 hours</option>
                      <option value="6 hours">6 hours</option>
                      <option value="7 hours">7 hours</option>
                      <option value="8 hours">8 hours</option>
                      <option value="9 hours">9 hours</option>
                      <option value="10 hours">10 hours</option>
                    </select>
                  </div>
                </div>
            </div>            
          </div>
          <div class="row mb-4">
            <label class="form-label">Headcount</label>
            <p class="text-muted">Team members/Attendees</p>
            <div class="row">
                <div class="col">
                    <input type="text" name="entry.1563353137" oninput="validateFormIndividual(this)" class="form-control required">
                </div>
            </div>            
          </div>
        </section>

        <section class="form-section">
          <div class="form-section-title mb-3">
            Step 03: Select a studio
          </div>
          <div class="row mb-4">
            <p class="text-muted">Please select your desired studio</p>
            <div class="row">

              <div class="col-md-6 mb-3">
                  <div class="custom-control custom-checkbox image-checkbox">
                      <label class="custom-control-label" for="option1">
                          <img src="https://balaykobo.com/wp-content/uploads/2024/02/DAYLIGHTSTUDIO-0578-WEB-scaled.jpg" alt="#" class="img-fluid">
                      </label>
                      <div class="checkbox-label d-flex justify-content-start gap-3">
                        <div>
                          <input type="checkbox" name="entry.248573189" class="" id="option1" value="Daylight Studio">
                        </div>
                        <div>
                          Daylight Studio
                        </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 mb-3">
                  <div class="custom-control custom-checkbox image-checkbox">
                      <label class="custom-control-label" for="option2">
                          <img src="https://balaykobo.com/wp-content/uploads/2024/02/CYC-8668-WEB-scaled.jpg" alt="#" class="img-fluid">
                      </label>
                      <div class="checkbox-label d-flex justify-content-start gap-3">
                        <div>
                          <input type="checkbox" name="entry.248573189" class="" id="option2" value="Cyclorama Studio">
                        </div>
                        <div>
                          Cyclorama Studio
                        </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 mb-3">
                  <div class="custom-control custom-checkbox image-checkbox">
                      <label class="custom-control-label" for="option3">
                          <img src="https://balaykobo.com/wp-content/uploads/2024/02/KITCHENSTUDIO-9055-WEB-scaled.jpg" alt="#" class="img-fluid">
                      </label>
                      <div class="checkbox-label d-flex justify-content-start gap-3">
                        <div>
                          <input type="checkbox" name="entry.248573189" class="" id="option3" value="Kitchen Studio">
                        </div>
                        <div>
                          Kitchen Studio
                        </div>
                      </div>
                  </div>
              </div>

            </div>            
          </div>
        </section>

        <section class="form-section">
          <div class="form-section-title mb-3">
            Step 04: Select your upgrades of interest
          </div>
          <div class="row mb-4">
            <p class="text-muted">Please select your upgrades of interest</p>
            <div class="row">

              <div class="col-md-6 mb-3">
                  <div class="custom-control custom-checkbox image-checkbox">
                      <label class="custom-control-label" for="uoioption1">
                          <img src="https://balaykobo.com/wp-content/uploads/2024/02/zen-garden-01-scaled.jpg" alt="#" class="img-fluid">
                      </label>
                      <div class="checkbox-label d-flex justify-content-start gap-3">
                        <div>
                          <input type="checkbox" name="entry.1962474743" class="" id="uoioption1" value="Zen Garden">
                        </div>
                        <div>
                          Zen Garden
                        </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 mb-3">
                  <div class="custom-control custom-checkbox image-checkbox">
                      <label class="custom-control-label" for="uoioption2">
                          <img src="https://balaykobo.com/wp-content/uploads/2024/02/SUN-HALL-8728-WEB-scaled.jpg" alt="#" class="img-fluid">
                      </label>
                      <div class="checkbox-label d-flex justify-content-start gap-3">
                        <div>
                          <input type="checkbox" name="entry.1962474743" class="" id="uoioption2" value="Sun Hall">
                        </div>
                        <div>
                          Sun Hall
                        </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 mb-3">
                  <div class="custom-control custom-checkbox image-checkbox">
                      <label class="custom-control-label" for="uoioption3">
                          <img src="https://balaykobo.com/wp-content/uploads/2024/02/AUDIO__-0603-WEB-scaled.jpg" alt="#" class="img-fluid">
                      </label>
                      <div class="checkbox-label d-flex justify-content-start gap-3">
                        <div>
                          <input type="checkbox" name="entry.1962474743" class="" id="uoioption3" value="Audio Room">
                        </div>
                        <div>
                          Audio Room
                        </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 mb-3">
                  <div class="custom-control custom-checkbox image-checkbox">
                      <label class="custom-control-label" for="uoioption4">
                          <img src="https://balaykobo.com/wp-content/uploads/2024/02/MEZZANINE__-0554-WEB-scaled.jpg" alt="#" class="img-fluid">
                      </label>
                      <div class="checkbox-label d-flex justify-content-start gap-3">
                        <div>
                          <input type="checkbox" name="entry.1962474743" class="" id="uoioption4" value="Mezzanine">
                        </div>
                        <div>
                          Mezzanine
                        </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 mb-3">
                  <div class="custom-control custom-checkbox image-checkbox">
                      <label class="custom-control-label" for="uoioption5">
                          <img src="https://balaykobo.com/wp-content/uploads/2024/02/GUEST-2164-WEB-scaled.jpg" alt="#" class="img-fluid">
                      </label>
                      <div class="checkbox-label d-flex justify-content-start gap-3">
                        <div>
                          <input type="checkbox" name="entry.1962474743" class="" id="uoioption5" value="Guest Room">
                        </div>
                        <div>
                          Guest Room
                        </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 mb-3">
                  <div class="custom-control custom-checkbox image-checkbox">
                      <label class="custom-control-label" for="uoioption6">
                          <img src="https://balaykobo.com/wp-content/uploads/2024/02/3F-0668-WEB-scaled.jpg" alt="#" class="img-fluid">
                      </label>
                      <div class="checkbox-label d-flex justify-content-start gap-3">
                        <div>
                          <input type="checkbox" name="entry.1962474743" class="" id="uoioption6" value="Penthouse">
                        </div>
                        <div>
                          Penthouse
                        </div>
                      </div>
                  </div>
              </div>

            </div>            
          </div>
        </section>

        <section class="form-section">
          <div class="form-section-title mb-5">
            Step 05: Ask your questions
          </div>
          <div class="row mb-4">
            <label class="form-label">Questions and Clarifications</label>
            <p class="text-muted">Ask us anything!</p>
            <div class="row">
                <div class="col">
                    <textarea type="text" name="entry.336176798" rows="4" class="form-control"></textarea>
                </div>
            </div>            
          </div>
        </section>

        <section class="submit-btn-section">
          <div class="row">
            <div class="col-sm-6"> 
            </div>
            <div class="col-sm-6 text-end">
              <input id="submitBtn" type="submit" name="" class="button submitBtn" value="Submit">
            </div>
          </div>
        </section>
      </form>
    </div>
  </div>
  <!-- <input id="testModal" type="hidden" name="" class="button submitBtn" value="Hidden Button"> -->
  <div class="container mt-5">
    <div class="row">
      <!-- <div class="col-12 text-center">
        <button type="button" class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#statusSuccessModal">Success Modal</button>
        <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#statusErrorsModal">Error Modal</button> 
      </div> -->
      <div class="modal modalFade" id="confirmationModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content" style="border-radius: 0;">
            <div class="modal-header text-center flex-column">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <h5 class="" style="margin-bottom: 0px; margin-top: 5%; font-family: Spectral; font-size: 32px" id="confirmationModalLabel">Confirm Booking</h5>
              <hr class="w-50 mx-auto" style="margin-bottom: 0px">
            </div>
            <div class="text-center flex-column" style="margin-left: 10%; margin-right: 10%; font-family: Oxygen Mono; font-size: 16px">
              Are you sure you want to submit this booking request?
            </div>
            <div class="modal-footer flex-column mt-3">
              <button type="button" class="btn btn-secondary w-50 mb-2" data-bs-dismiss="modal" style="font-family: Oxygen Mono; font-size: 14px; background-color: white; color: black">Cancel</button>
              <button type="button" class="btn btn-primary w-50 mb-3" id="confirmSubmitBtn" style="font-family: Oxygen Mono; font-size: 14px; background-color: #04AA6D">Confirm</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal modalFade" id="statusErrorsModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"> 
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document"> 
          <div class="modal-content"> 
            <div class="modal-body text-center p-lg-4"> 
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                <circle class="path circle" fill="none" stroke="#db3646" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" /> 
                <line class="path line" fill="none" stroke="#db3646" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3" />
                <line class="path line" fill="none" stroke="#db3646" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38" X2="34.4" y2="92.2" /> 
              </svg> 
              <h4 class="text-danger mt-3">Fill out required field!</h4> 
              <!-- <p class="mt-3">This email is already registered, please login.</p> -->
              <button type="button" class="btn btn-sm mt-3 btn-danger" data-bs-dismiss="modal">Ok</button> 
            </div> 
          </div> 
        </div> 
      </div>
      <div class="modal modalFade" id="statusSuccessModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"> 
        <div class="modal-dialog modal-dialog-centered" role="document"> 
          <div class="modal-content" style="border-radius: 0;"> 
            <div class="modal-body text-center p-lg-4"> 
              <svg width="30" height="30" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                <circle class="path circle" fill="none" stroke="#198754" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                <polyline class="path check" fill="none" stroke="#198754" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " /> 
              </svg> 
              <h4 class="mt-3" style="margin-bottom: 0px; margin-top: 5%; font-family: Spectral; font-size: 32px">Thank you</h4>
              <hr class="mx-auto" style="margin-bottom: 0px; width: 70%;">
              <div class="text-center flex-column mt-3" style="margin-left: 10%; margin-right: 10%; font-family: Oxygen Mono; font-size: 16px">
                Your response has been successfully submitted
              </div>
              <div class="modal-footer flex-column mt-3">
                <button type="button" class="btn btn-secondary mb-2" id="postSubmitBtn" data-bs-dismiss="modal" style="width: 60%; font-family: Oxygen Mono; font-size: 14px; background-color: white; color: black">Return to homepage</button>
                <button type="button" class="btn btn-primary mb-3" id="submitAnotherForm" data-bs-dismiss="modal" style="width: 60%; font-family: Oxygen Mono; font-size: 14px; background-color: #557689">Submit another form</button>
              </div>
            </div> 
          </div> 
        </div> 
      </div>
    </div>
  </div>



</div>


<script>
// document.getElementById('testModal').addEventListener('click', function() {
//   console.log('test');
//   let myModal = new bootstrap.Modal(document.getElementById('statusSuccessModal'), {});
//   myModal.show();
// });


document.getElementById('gform').addEventListener('submit', function(event) {
  event.preventDefault();
  var extraData = {};
  let myModal
  var formData = new FormData(this);
  const action = 'https://docs.google.com/forms/d/e/1FAIpQLSe2vrqDjcUu-kzTLqgKG4OTGEr5GMyPhSApRcDHwl5UTddoGQ/formResponse';
  validateForm();
  if (validateForm()) {
    myModal = new bootstrap.Modal(document.getElementById('confirmationModal'), {});
    myModal.show();
    document.getElementById('confirmSubmitBtn').addEventListener('click', function() {
      fetch(action, {
        method: 'POST',
        body: formData,
        credentials: 'include'
      })
      .then(function(response) {
        console.log('response', response);
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        // alert('Form Submitted. Thanks.');
      })
      .catch(function(error) {
        // alert('Form Submitted. Thanks.');
        myModal = new bootstrap.Modal(document.getElementById('statusSuccessModal'), {});
        myModal.show();
        document.getElementById('postSubmitBtn').addEventListener('click', function() {
          document.getElementById("gform").reset();
          window.location.href = "https://balaykobo.com";
        });
        document.getElementById('submitAnotherForm').addEventListener('click', function() {
          document.getElementById("gform").reset();
          window.location.href = "https://balaykobo.com/bookingform/";
        });
      });
    });

  } else {
      myModal = new bootstrap.Modal(document.getElementById('statusErrorsModal'), {});
      myModal.show();
  }
});


function validateFormIndividual(val) {
  if (val.value == "" || val.value == null || val.value == undefined) {
    val.classList.add('invalid');
  } else {
    val.classList.remove('invalid');
  }
}

function validateForm() {
  // This function deals with validation of the form fields
  var y, i, valid = true;

  y = document.querySelectorAll(".required");;
  for (i = 0; i < y.length; i++) {
    if (y[i].value == "" || y[i].value == null || y[i].value == undefined) {
      y[i].classList.add('invalid');
      valid = false;
    } else {
      y[i].classList.remove('invalid');
    }
  }
  return valid;
}



</script>

