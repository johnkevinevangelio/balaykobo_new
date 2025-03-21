<style>
.booking-title-text {
  font-size: 36px;
  font-family: "Spectral";
}
.booking-subtitle {
  color: #000;
  font-family: "Oxygen Mono";
  font-size: 16px;
  font-style: normal;
  line-height: 150.2%; /* 24.032px */
  text-align: left;
  margin-bottom: 50px;
}
.booking-subtitle-cont {
  display: flex;
  justify-content: center;
  align-items: center; /* Optional for vertical centering */
  width: 80%; /* Adjust width as needed */
  margin: 0 auto;
}

.card{
    padding: 30px 40px;
    margin-top: 20px;
    margin-bottom: 20px;
    border: none !important;
    box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2);
}


.card-cont {
  padding: 70px 70px;
  margin-top: 30px;
  margin-bottom: 60px;
  background: rgba(255, 255, 255, 0.60);
  backdrop-filter: blur(15px);
}

.custom-control-input {
  height: 20px;
  width: 20px;
}
@media screen and (max-width:787px) {
  .card-cont {
    padding: 10px 10px;
  }
  .card {
    padding: 5px 5px;
  }
}
.submitBtn {
    width: 228px;
    /* height: 35px; */
    padding: 8px, 33.6px, 8px, 33.6px;
    border-radius: 6px;
    border: 1px solid #DADADA;
    background-color: #557689;
    text-align: center;
    color: #FFF;
    font-family: 'Oxygen Mono';
    font-size: 12px;
    font-style: normal;
    font-weight: 400;
}
.custom-checkbox img:hover {
  cursor: pointer;
  filter: brightness(90%);
}
@media screen and (max-width:2000px) {
  .booking-subtitle {
    margin-left: 10%;
    margin-right: 10%;
  }
}
@media screen and (max-width:500px) {
  .booking-subtitle {
    margin-left: 0%;
    margin-right: 0%;
    font-size: 12px;
  }
  .card{
    padding: 10px 10px;
  }


}
label {
    color: #000 !important;
    font-family: 'Oxygen Mono';
    font-size: 14px;
    font-weight: 400;
    line-height: 150.2%;
}
.blue-text{
    color: #00BCD4
}
.form-control-label{
    margin-bottom: 0
}
/* Style the input fields */
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: 'Oxygen Mono';
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
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
.checkbox-label {
  margin-top: 8px;
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
.box00{
	width: 100px;
	height: 100px;
	border-radius: 50%;
}
.card-title {
  /* Web/Web 28px/Regular */
  font-family: Spectral;
  font-size: 22px;
  font-style: normal;
  font-weight: 400;
  line-height: 104%; /* 29.12px */
  margin-bottom: 10px;
}
.submitButtonContainer {
  display: flex;
  justify-content: end;
  margin-top: 50px;
  margin-bottom: 20px;
}
@media screen and (max-width: 800px) {
.submitButtonContainer {
  justify-content: center;
}
}


.booking-bg {
  z-index: -1;
  background-image: url('https://balaykobo.com/wp-content/uploads/2024/06/booking-form-bg-scaled.jpeg');
  height: 100%;
  position: fixed;
  width: 100%;
  background-position: center;
  background-size: cover;
}
.modal-header, .modal-footer {
  border: none; /* Remove the default borders */
}

</style>
<div class="booking-bg"></div>
<div class="container-fluid px-1 py-5 mx-auto mt-5 booking-form">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">

            <div class="card-cont">
                <div class="booking-title-text">Booking Form</div>
                <div class="booking-subtitle"> Daylight Home + Studio  &nbsp;҉　Creative Stage and Communal Space <br/> for Creatives
                      Shoots • Workshops • Intimate Events
                </div>
                <form id="gform" class="form-card" action="https://docs.google.com/forms/d/e/1FAIpQLSe2vrqDjcUu-kzTLqgKG4OTGEr5GMyPhSApRcDHwl5UTddoGQ/formResponse">
                    <div class="tab">
                        <!-- Your information -->
                        <div class="card">
                            <div class="card-title d-flex justify-content-start">Your Information</div>
                            <div class="row">
                                <div class="d-flex justify-content-start"><label>Name<span class="text-danger"> *</span></label></div>
                                <div class="form-group col-sm-12 flex-column d-flex">   
                                    <input type="text" name="entry.532332563" class="required input" oninput="validateFormIndividual(this)" placeholder="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="d-flex justify-content-start"><label>Affiliation/Company<span class="text-danger"> *</span></label></div>
                                <div class="form-group col-sm-12 flex-column d-flex">   
                                    <input type="text" name="entry.156465969" class="required input" oninput="validateFormIndividual(this)" placeholder="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="d-flex justify-content-start"><label>Email address<span class="text-danger"> *</span></label></div>
                                <div class="form-group col-sm-12 flex-column d-flex">   
                                    <input type="text" name="entry.1198147897" class="required input" oninput="validateFormIndividual(this)" placeholder="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="d-flex justify-content-start"><label>Mobile number<span class="text-danger"> *</span></label></div>
                                <div class="form-group col-sm-12 flex-column d-flex">   
                                    <input type="text" name="entry.413029487" class="required input" oninput="validateFormIndividual(this)" placeholder="">
                                </div>
                            </div>
                            <div class="row mt-3 mb-5">
                                <div class="d-flex justify-content-start"><label>Instagram Handle<span class="text-danger"> *</span></label></div>
                                <div class="form-group col-sm-12 flex-column d-flex">   
                                    <input type="text" name="entry.1881684809" class="required input" oninput="validateFormIndividual(this)" placeholder="">
                                </div>
                            </div>
      
                        </div>



                        <!-- Select Studios -->
                        <div class="card">
                            <div class="card-title mb-5">
                              <div class="col d-flex justify-content-start">Select a Studio &nbsp;<span class="text-danger"> *</span></div>
                            </div>
                            <div class="row mb-5">
                              <div class="col-md-6 mb-3">
                                  <div class="custom-control custom-checkbox image-checkbox">
                                      <label class="custom-control-label" for="option1">
                                          <img src="https://balaykobo.com/wp-content/uploads/2024/02/DAYLIGHTSTUDIO-0578-WEB-scaled.jpg" alt="#" class="img-fluid">
                                      </label>
                                      <div class="checkbox-label d-flex justify-content-start gap-3">
                                        <div>
                                          <input type="checkbox" name="entry.248573189" class="required custom-control-input input" id="option1" value="Daylight Studio">
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
                                          <input type="checkbox" name="entry.248573189" class="required custom-control-input input" id="option2" value="Cyclorama Studio">
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
                                          <input type="checkbox" name="entry.248573189" class="required custom-control-input input" id="option3" value="Kitchen Studio">
                                        </div>
                                        <div>
                                          Kitchen Studio
                                        </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                        </div>


                          <!-- Upgrades of Interest -->
                        <div class="card">
                            <div class="card-title mb-5">
                              <div class="col d-flex justify-content-start">Upgrades of interest&nbsp;<span class="text-danger"> *</span></div>
                            </div>
                            <div class="row">
                              <div class="col-md-6 mb-3">
                                  <div class="custom-control custom-checkbox image-checkbox">
                                      <label class="custom-control-label" for="uoioption1">
                                          <img src="https://balaykobo.com/wp-content/uploads/2024/02/zen-garden-01-scaled.jpg" alt="#" class="img-fluid">
                                      </label>
                                      <div class="checkbox-label d-flex justify-content-start gap-3">
                                        <div>
                                          <input type="checkbox" name="entry.1962474743" class="required custom-control-input input" id="uoioption1" value="Zen Garden">
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
                                          <input type="checkbox" name="entry.1962474743" class="required custom-control-input input" id="uoioption2" value="Sun Hall">
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
                                          <input type="checkbox" name="entry.1962474743" class="required custom-control-input input" id="uoioption3" value="Audio Room">
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
                                          <input type="checkbox" name="entry.1962474743" class="required custom-control-input input" id="uoioption4" value="Mezzanine">
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
                                          <input type="checkbox" name="entry.1962474743" class="required custom-control-input input" id="uoioption5" value="Guest Room">
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
                                          <input type="checkbox" name="entry.1962474743" class="required custom-control-input input" id="uoioption6" value="Penthouse">
                                        </div>
                                        <div>
                                          Penthouse
                                        </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-title">
                              <div class="d-flex justify-content-start">Purpose of the shoot<span class="text-danger"> *</span></div>
                            </div>
                            <div>
                                <div class="form-group col-sm-12 flex-column d-flex">   
                                    <input type="text" name="entry.711602103" class="required input" oninput="validateFormIndividual(this)" placeholder="">
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-title">
                              <div class="d-flex justify-content-start">Target Date<span class="text-danger"> *</span></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                  <!-- <div class="d-flex justify-content-start"><label>Date</label></div> -->
                                  <div class="form-group col-sm-12 flex-column d-flex">   
                                      <input type="datetime-local" name="entry.283111418" class="required input" oninput="validateFormIndividual(this)" placeholder="">
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-title">
                              <div class="d-flex justify-content-start">Duration (Minimum of 4 hour booking)<span class="text-danger"> *</span></div>
                            </div>
                            <div>
                                <div class="form-group col-sm-12 flex-column d-flex">   
                                  <!-- <input id="duration" type="text" name="duration" data-duration="01:00:00" data-duration-max="04:00:00" data-duration-min="01:00:00" class="html-duration-picker" oninput="this.className = ''" placeholder=""> -->
                                  <select id="durationSelect" name="entry.736432796" class="required input">
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


                        <div class="card">
                            <div class="card-title">
                              <div class="d-flex justify-content-start">Headcount (team members/attendees)<span class="text-danger"> *</span></div>
                            </div>
                            <div>
                                <div class="form-group col-sm-12 flex-column d-flex durationTime">   
                                    <input type="text" class="required input" name="entry.1563353137" oninput="validateFormIndividual(this)" placeholder="">
                                </div>
                            </div>
                        </div>



                        <div class="card mb-5">
                            <div class="card-title">
                              <div class="d-flex justify-content-start">Questions and/ clarifications</div>
                            </div>
                            <div>
                                <div class="form-group col-sm-12 flex-column d-flex">   
                                    <textarea class="input" name="entry.336176798" rows="4" oninput="validateFormIndividual(this)" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="booking-subtitle-cont">
                          <div class="booking-subtitle mt-5">
                              Please expect our response within 24 hours. 
                              <br/>
                              <br/>
                              You may email us at info.balaykobo@gmail.com
                              <br/>
                              or contact 09176761202 for urgent concerns.
                              <br/>
                              <br/>
                              <br/>
                              Thank you!
                          </div>
                        </div>
                        <div>
                            <div class="submitButtonContainer">
                                <input type="submit" name="" class="button submitBtn" value="Submit">  
                            </div>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>




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

document.getElementById('testModal').addEventListener('click', function() {
  console.log('test');
  let myModal = new bootstrap.Modal(document.getElementById('statusSuccessModal'), {});
  myModal.show();
})


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
var currentTab = 0;
function validateFormIndividual(val) {
  if (val.value == "" || val.value == null || val.value == undefined) {
    val.className += "invalid";
  } else {
    val.className = '';
  }
}
function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;

  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByClassName("required");
  // A loop that checks every input field in the current tab:
  // for (i = 0; i < y.length; i++) {

  //   if (y[i].value == "" || y[i].value == null || y[i].value == undefined) {
  //     console.log(y[i].value);
  //     // add an "invalid" class to the field:
  //     y[i].className += "invalid";
  //     // and set the current valid status to false:
  //     valid = false;
  //   }
  //   console.log(y[i].value);
  // }
  for (i = 0; i < y.length; i++) {
    // Check if the element is a checkbox
      // For other input types, check for empty values as before
    if (y[i].value == "" || y[i].value == null || y[i].value == undefined) {
      y[i].className += " invalid";
      valid = false;
    } else {
      y[i].className = y[i].className.replace(" invalid", "");
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  // if (valid) {
  //   document.getElementsByClassName("step")[currentTab].className += " finish";
  // }
  return valid; // return the valid status
}
</script>
<script>

// document.addEventListener('DOMContentLoaded', function() {
//     const durationInput = document.getElementById('duration');
    
//     durationInput.addEventListener('input', function() {
//         const inputTime = parseTime(durationInput.value);
//         const maxTime = parseTime('04:00:00'); // Maximum duration: 4 hours
        
//         if (inputTime && inputTime > maxTime) {
//             durationInput.setCustomValidity('Duration cannot exceed 4 hours.');
//         } else {
//             durationInput.setCustomValidity('');
//         }
//     });

//     function parseTime(timeString) {
//         const parts = timeString.split(':');
//         if (parts.length === 3) {
//             const hours = parseInt(parts[0], 10);
//             const minutes = parseInt(parts[1], 10);
//             const seconds = parseInt(parts[2], 10);
//             return new Date(0, 0, 0, hours, minutes, seconds);
//         }
//         return null;
//     }
// });


var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

// function nextPrev(n) {
//   // This function will figure out which tab to display
//   var x = document.getElementsByClassName("tab");
//   // Exit the function if any field in the current tab is invalid:
//   if (n == 1 && !validateForm()) return false;
//   // Hide the current tab:
//   x[currentTab].style.display = "none";
//   // Increase or decrease the current tab by 1:
//   currentTab = currentTab + n;
//   // if you have reached the end of the form... :
//   if (currentTab >= x.length) {
//     //...the form gets submitted:
//     document.getElementById("regForm").submit();
//     return false;
//   }
//   // Otherwise, display the correct tab:
//   showTab(currentTab);
// }

// function validateForm() {
//   // This function deals with validation of the form fields
//   var x, y, i, valid = true;
//   x = document.getElementsByClassName("tab");
//   y = x[currentTab].getElementsByClassName("required");
//   // A loop that checks every input field in the current tab:
//   for (i = 0; i < y.length; i++) {
//     // If a field is empty...
//     if (y[i].value == "") {
//       // add an "invalid" class to the field:
//       y[i].className += " invalid";
//       // and set the current valid status to false:
//       valid = false;
//     }
//   }
//   // If the valid status is true, mark the step as finished and valid:
//   if (valid) {
//     document.getElementsByClassName("step")[currentTab].className += " finish";
//   }
//   return valid; // return the valid status
// }

// function fixStepIndicator(n) {
//   // This function removes the "active" class of all steps...
//   var i, x = document.getElementsByClassName("step");
//   for (i = 0; i < x.length; i++) {
//     x[i].className = x[i].className.replace(" active", "");
//   }
//   //... and adds the "active" class to the current step:
//   x[n].className += " active";
// }
</script>