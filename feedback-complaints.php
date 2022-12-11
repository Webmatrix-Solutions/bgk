<?php 
include('header.php');
?>

            <!-- Main Content Starts -->
            <main class="main">
                <!-- promo start-->
				<section class="promo-primary">
					<picture>
						<source srcset="img/about-us/know-more-bgk/banner-2.webp" media="(min-width: 992px)"/><img class="img--bg" src="img/about-us/know-more-bgk/banner-2.webp" alt="img"/>
					</picture>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">Feedback & Complaints</span>
										<h1 class="promo-primary__title"><span>We value your</span> <span>Feedback & Complaints</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- promo end-->

                <!-- section start-->
				<section class="section">
					<div class="container">
						<div class="row bottom-50">
							<div class="col-12" style="margin-bottom: 2.5rem;">
								<div class="heading heading--primary heading--center">
									<h2 class="heading__title no-margin-bottom"><span>Share Your</span> <span>Feedbacks & Complaints</span></h2>
								</div>
							</div>
                            <div class="col-6">
                                <button class="btn sign-in__button active feedback-submit-btn">
                                    Click to Open Complaints Form        
                                </button>
							</div>
                            <div class="col-6">
                                <button class="btn register__button complaints-toggler">
                                    Click to Open Feedback Form        
                                </button>
							</div>
                            <div class="container feedback-form">
                                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">

                                    <div class="row login__form" style="display: block;">
                                    <form action="/auth" method="post" accept-charset="UTF-8">
                                        <div>
                                        <fieldset class="form__fieldset required form__login">
                                            <legend class="form__legend--subtitle complaints-legend">
                                            Tell Us About Your Complaints </legend>
                                
                                            <div class="form__field__wrapper form-item complaints-form"> <label for="edit-email" class="text-input__label">Your Full Name <span class="form-required" aria-hidden="true" title="This field is required."><span style="color: red; font-weight: bolder;">*</span></span></label>
                                                <input class="form-control form-text required text-input__field" type="text" id="edit-email" name="email" value="" size="60" maxlength="128" aria-required="true" aria-describedby="edit-email-descriptor">
                                            </div>
                                            <div class="form__field__wrapper form-item complaints-form"> <label for="edit-password" class="text-input__label">Email Address <span class="form-required" aria-hidden="true" title="This field is required."><span style="color: red; font-weight: bolder;">*</span></label>
                                                <input class="form-control form-text password__field text-input__field required" type="email" id="edit-password" name="email" size="60" maxlength="128" aria-required="true">
                                            </div>
                                            <div class="form__field__wrapper form-item complaints-form"> <label for="edit-password" class="text-input__label">Contact Number <span class="form-required" aria-hidden="true" title="This field is required."><span style="color: red; font-weight: bolder;">*</span></label>
                                                <input class="form-control form-text password__field text-input__field required" type="number" id="edit-password" name="number" size="60" maxlength="128" aria-required="true">
                                            </div>
                                            <div class="form__field__wrapper form-item complaints-form"> <label for="edit-password" class="text-input__label">Your Complaint <span class="form-required" aria-hidden="true" title="This field is required."><span style="color: red; font-weight: bolder;">*</span></label>
                                                <textarea class="form-control form-text password__field text-input__field required" type="textbox" id="edit-password" name="complaint-desc" rows="20" cols="30" aria-required="true"></textarea>
                                            </div>
                                        </fieldset>
                                        <button class="btn btn-success complain-submit-btn" type="submit">Submit Your Complain Now</button>
                                        </div>
                                    </form>
                                    </div>
                                
                                    <div class="row register__form" style="display: none;">
                                    <div id="registration-form-wrapper">
                                        <form action="/auth" method="post" accept-charset="UTF-8">
                                        <div>
                                            <fieldset class="form__fieldset required form__login">
                                                <legend class="form__legend--subtitle complaints-legend">
                                                We're Open for your feedback </legend>
                                            <div class="form__register">
                                
                                
                                            <div class="clearfix"></div>
                                
                                            <div class="divide-width">
                                                <div class="middle-bottom-inner-left">
                                                <div class="form__field__wrapper form-item complaints-form"> <label for="edit-firstname" class="text-input__label">Full Name <span class="form-required" aria-hidden="true" title="This field is required."><span style="color: red; font-weight: bolder;">*</span></label>
                                                    <input placeholder="Full Name" class="form-control form-text required text-input__field" type="text" id="edit-firstname" name="firstname" value="" size="60" maxlength="128" aria-required="true" aria-describedby="edit-firstname-descriptor">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="divide-width divide-mrgn">
                                                <div class="middle-bottom-inner-left">
                                                <div class="form__field__wrapper form-item complaints-form"> <label for="edit-lastname" class="input__label">Your Email Address <span class="form-required" aria-hidden="true" title="This field is required."><span style="color: red; font-weight: bolder;">*</span></label>
                                                    <input placeholder="Email Address" class="form-control form-text required text-input__field" type="text" id="edit-lastname" name="lastname" value="" size="60" maxlength="128" aria-required="true" aria-describedby="edit-lastname-descriptor">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="middle-bottom-inner-left">
                                                <div class="form__field__wrapper form-item complaints-form"> <label for="edit-email--2" class="input__label">Contact Number <span class="form-required" aria-hidden="true" title="This field is required."><span style="color: red; font-weight: bolder;">*</span></label>
                                                <input placeholder="Contact Number" class="form-control form-text required text-input__field" type="text" id="edit-email--2" name="email" value="" size="60" maxlength="128" aria-required="true" aria-describedby="edit-email--2-descriptor">
                                                </div>
                                            </div>
                                
                                            <div class="middle-bottom-inner-left-pass">
                                                <div class="form-type-password form-item-password form-item form-group" id="display-second-part">
                                                <div class="form__field__wrapper form-item complaints-form"> <label for="edit-password--2" class="text-input__label">Your Feedback <span style="color: red; font-weight: bolder;">*</span></label>
                                                    <input class="form-group form-control form-text password__field text-input__field" placeholder="Your Feedback" data-edit-password="true" type="password" id="edit-password--2" name="password" size="60" maxlength="128"> <span class="field-suffix"><span id="passwordval"></span></span>
                                                </div>
                                
                                                </div>
                                            </div>
                                
                                            </div>
                                            <button class="btn btn-success feedback-submit-btn" type="submit">Submit Your Feedback</button>
                                        </fieldset>
                                        </div>
                                        </form>
                                    </div>
                                    </div>
                                
                                </div>
                            </div>
						</div>
					</div>
				</section>

				<!-- section end-->

            </main>  
            <!-- Main Content Ends -->


             <!-- Social Network start-->
				<section class="section no-padding-top no-padding-bottom">
					<div class="row no-gutters">
						<div class="col-lg-6"><a class="action-block" href="#">
							<div class="action-block__inner"><img class="img--bg" src="img/homepage-banner/banner-1.webp" alt="img"/>
								<h3 class="action-block__title"><span>Bengal Gearless Knights</span><br/> <span>in Facebook</span></h3>
							</div></a></div>
						<div class="col-lg-6"><a class="action-block" href="#">
							<div class="action-block__inner"><img class="img--bg" src="img/homepage-banner/banner-2.webp" alt="img"/>
								<h3 class="action-block__title"><span>Bengal Gearless Knights</span><br/> <span>in Instagram</span></h3>
							</div></a></div>
					</div>
				</section>
				<!-- Social Network end-->

<?php 
include('footer.php');
?>
