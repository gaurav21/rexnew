<?php $theme = Yii::app()->theme; ?>


<?php $this->widget('LoginModal'); ?>
<!-- reset password modal -->
<div class="modal fade modal-app" id="modal-resetpassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title">Reset Your Password</h3>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning" id="reset_warning"><span id="reset_err_msg"></span></div>
                <div class="form-wrap" id="reset_modal_form">
                    <h4>Provide your new password below.</b></h4>
                    <br>
                    <form class="form">
                        <div class="form-group">
                            <div class="form-group">
                                <input class="form-control" type="password" id="reset_password" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" id="reset_confirm_password" placeholder="Re-type New Password">
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" id="reset_submit">Done</button>&nbsp;
                        <a href="#" data-dismiss="modal">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of reset password modal -->


<!-- set password modal -->

<div class="modal fade modal-app" id="modal-setpassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title">Set Your Password</h3>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning" id="set_warning" style="display: none;" ><span id="set_err_msg"></span></div>
                <div class="form-wrap" id="set_modal_form">
                    <h4>Provide your password below.</b></h4>
                    <br>
                    <form class="form">
                        <div class="form-group">
                            <div class="form-group">
                                <input class="form-control" type="password" id="set_password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" id="set_confirm_password" placeholder="Re-type Password">
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" id="set_submit">Done</button>&nbsp;
                        <a href="#" data-dismiss="modal">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end of set password modal -->


<!-- hero section -->
<div class="row hero-section">
    <div class="col-md-12">
        <h1>OOH Proof, Monitoring & Reporting made Easy</h1>
        <h3>Delight clients by capturing & instantly sharing campaign reports using the Monitorly mobile app. Save time, get paid. Certified by EatAds. </h3>
        <h4><span class="dashed-line"></span> 100 images free (limited offer) <span class="dashed-line"></span></h4>
        <?php if (Yii::app()->user->hasFlash('success')) { ?>
            <div id="flash-messages" class="alert alert-success alert-dismissible">
                <?php echo Yii::app()->user->getFlash('success'); ?>

            </div>
        <?php } ?>
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'vendor_subscription',
            'action' => 'account/createvendor',
            //'enableClientValidation' => true,
            //    'clientOptions' => array(
            //        'validateOnSubmit' => true,
            //    ),
            'htmlOptions' => array(
                'class' => 'form-inline',
            ),
        ));
        ?>
<!--                        <input type="email" class="form-control" placeholder="Email">-->
        <?php echo $form->emailField($modelSub, 'email', array('id' => 'emailid', 'class' => 'form-control', 'placeholder' => 'Email', 'type' => 'email', 'autocomplete' => 'off')); ?>                            
        <?php echo $form->error($modelSub, 'email'); ?>
<!--                        <input type="text" class="form-control" placeholder="Company Name">-->
        <?php echo $form->textField($modelSub, 'companyname', array('id' => 'companynameid', 'class' => 'form-control companyname', 'placeholder' => 'Company Name', 'autocomplete' => 'off')); ?> 
        <input type="hidden" value="" id="vendor-ac-id">
        <?php echo $form->error($modelSub, 'companyname'); ?>
<!--                        <input type="text" class="form-control" placeholder="+91">-->
<!--                        <input  class="form-control intl-tel-input" placeholder="Mobile" id="mobile-number" type="tel">-->
        <?php echo $form->textField($modelSub, 'phonenumber', array('max-length' => '10', 'class' => 'form-control intl-tel-input', 'placeholder' => 'Mobile', 'type' => 'tel', 'id' => 'mobile-number', 'autocomplete' => 'off')); ?>                            
        <?php echo $form->error($modelSub, 'phonenumber'); ?>
        <br>
        <br>
        <?php //echo CHtml::submitButton('Sign Up for Free', array('class' => 'btn btn-primary btn-primary-lg', 'id' => '_submit')); ?>
        <button class="btn btn-primary btn-primary-lg" id="signup">Create Free Account</button>
        <!--                        <button class="btn btn-primary btn-primary-lg">Sign Up for Free</button>-->
        <br>
        <h5>No Credit Card required</h5>

        <h5>By signing-up you agree to <a href="<?php echo Yii::app()->urlManager->createUrl('account/terms'); ?>" target="_blank">Terms &amp; Conditions</a></h5>
        <?php $this->endWidget(); ?>

        <!--<div><a class="pricing-link" href="pricing.html">Know More About Pricing &amp; Plan</a></div>-->
    </div>
</div>
<!-- end of hero section -->

<!-- process steps in monitorly -->
<div class="row process-steps">
    <div class="col-md-12">
        <h2>2 Steps to Take All Your Monitoring Pain Away</h2>
        <img class="img-responsive" src="<?php echo $theme->getBaseUrl(); ?>/images/process-steps.png">
    </div>
</div>
<!-- end of process steps in monitorly  --> 

<!-- benefits -->
<div class="row benefits">
    <div class="col-md-12">
        <hr>
        <div class="row testimonial">
            <div class="col-md-2">
                <img src="<?php echo $theme->getBaseUrl(); ?>/images/rongraham.png">
            </div>
            <div class="col-md-10">
                <p>"Proof of Posting &amp; Monitoring is a necessity but Monitorly makes it automated and dynamic for media owners and agencies to use and advertisers to review. This is a big step forward."</p>
                <p>Ron Graham, Media On The Go</p>
            </div>
        </div>
        <hr>
        <h1>How Monitorly Does It?</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <ul>
                    <li>
                        <img src="<?php echo $theme->getBaseUrl(); ?>/images/img-benefit-1.png">
                        <h2>Easy to Use</h2>
                        <br>
                        <p class="selling-point-desc">Designed for simple set-up and use. Monitorly gets your team and partners in the office and around the country, set-up in an hour.  </p>
                    </li>
                    <li>
                        <img src="<?php echo $theme->getBaseUrl(); ?>/images/img-benefit-2.png">
                        <h2>Get Paid, Save Time</h2>
                        <br>
                        <p class="selling-point-desc">Delight your clients, build trust and save time with Automatic Reporting. And with Certified Images, all your campaign images are time-stamped and geo-tagged so your clients can make payment with complete confidence. </p>
                    </li>
                    <li>
                        <img src="<?php echo $theme->getBaseUrl(); ?>/images/img-benefit-3.png">
                        <h2>Certified, Anywhere</h2>
                        <br>
                        <p class="selling-point-desc">Certified images can be captured anywhere with Offline mode (and image auto-sync). Any site, anywhere, even away from network connectivity. </p>
                    </li>
                </ul>
            </div>
            <!--
<div class="row pricing-preview">
    <div class="col-md-12">
        <h2>No Nonsense Pay-As-You-Go Pricing</h2>
        <br>
        <h4>Get your free 100 photos when you sign-up</h4>
        <br>
        <h4><a href="<?php echo Yii::app()->urlManager->createUrl('account/pricing'); ?>">Know More About Pricing and Plan</a></h4>
        <br>
        <button class="btn btn-primary btn-primary-lg js-signup-btn-scrolltop">Sign Up for Free</button>
        <h5>No Credit Card required</h5>
    </div>
</div>-->
        </div>
    </div>
</div>
<!-- end of benefits  -->

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>

    $('#signup').on('click', function (event) {
        event.preventDefault();
        //console.log(data);
        if ($('#emailid').val()) {
//            console.log('1');
            if ($('#companynameid').val()) {
                //              console.log('2');
                if ($('#mobile-number').val()) {
                    //console.log('4');
                    $('#vendor_subscription').submit();
                    //return true;
                } else {
                    $('#mobile-number').focus();
                    $('#mobile-number').attr('placeholder', 'Phone Number is required').attr('style', 'background-color:rgb(218, 172, 172)');
                    //alert('Phone Number is required');
                }
            } else {
                $('#companynameid').focus();
                $('#companynameid').attr('placeholder', 'Company Name is Required').attr('style', 'background-color:rgb(218, 172, 172)');
                //alert('Company Name is Required');
            }
        } else {
            $('#emailid').focus();
            $('#emailid').attr('placeholder', 'Email is required').attr('style', 'background-color:rgb(218, 172, 172)');
            //alert('Email is required');
        }
    });

    $(function () {
        //$('#modal-login').modal('show');

        //$('#modal-setpassword').modal('show');
        //
        //autocomplete for company name in vendor subscription form
        var allVendorJson = JSON.parse('<?php echo $vendorList; ?>');
//console.log(allVendorJson);
        $('.companyname').autocomplete({
            source: allVendorJson,
            select: function (event, ui) {
                //console.log(ui.item.value + ', ' + ui.item.id);
                $("#vendor-ac-id").val(ui.item.id);
            },
            change: function (event, ui) {
                if (ui.item == null) {
                    //$(".companyname").val('');
                    $("#vendor-ac-id").val('');
                    $(".companyname").focus();
                }
            },
            messages: {
                noResults: '',
                results: function () {
                }
            },
        })

        $('#static_logo').removeClass('logo-on-lightbcg');
        $('#static_logo').addClass('logo-on-darkbcg');
        var fpc = '<?php echo $forgotPwdCode; ?>';
        if (fpc) {
            //console.clear();
            //console.log('is');
            //console.log(fpc);

            // verify the hash
            $.ajax({
                url: "<?php echo Yii::app()->urlManager->createUrl('ajax/verifyresethash'); ?>",
                data: {
                    hash: fpc
                },
                async: false,
                success: function (data) {
                    //obj = JSON.parse(data);
                    //console.log('succ' + obj);
                    //console.log(data);
                    if (data == 1) {
                        $('#reset_warning').hide();
                    } else if (data == 2) {
                        $('#reset_modal_form').hide();
                        $('#reset_err_msg').html("Your reset password link is expired. Don't worry, get it again from <a href='#' id='reset_modal_forgot'>Forgot Password?</a>");
                    } else if (data == 3) {
                        $('#reset_modal_form').hide();
                        $('#reset_err_msg').html("This link is already used. You can reset your password from <a href='#' id='reset_modal_forgot'>Forgot Password?</a>");
                    } else if (data == 4) {
                        $('#reset_modal_form').hide();
                        $('#reset_err_msg').html('The link you used is not valid. Please check it is the correct link from the email.');
                    }
                    $('#modal-resetpassword').modal('show');
                }
            });

        }

        var spc = '<?php echo $setPwdHash; ?>';
        if (spc) {
            $('#modal-setpassword').modal('show');
        }

        $('#reset_modal_forgot').on("click", function () {
            $('#modal-resetpassword').modal('hide');
            $('#modal-forgotpassword').modal('show');
        });

        $('#reset_submit').click(function () {
            var pwd = $('#reset_password').val();
            var cpwd = $('#reset_confirm_password').val();
            if (pwd === cpwd) {
                // ajax call
                //console.log('password matches');
                $.ajax({
                    type: "POST",
                    url: "<?php echo Yii::app()->urlManager->createUrl('ajax/resetpwd'); ?>",
                    data: {
                        password: pwd,
                        hash: '<?php echo $forgotPwdCode; ?>'
                    },
                    async: false,
                    success: function (data) {
                        if (data == 5) {
                            // login and redirect from server
                            $('#reset_modal_form').hide();
                            $('#reset_err_msg').html("Please login to your account.");
                        } else if (data == 2) {
                            $('#reset_modal_form').hide();
                            $('#reset_err_msg').html("Your reset password link is expired. Don't worry, get it again from <a href='#' id='reset_modal_forgot'>Forgot Password?</a>");
                        } else if (data == 3) {
                            $('#reset_modal_form').hide();
                            $('#reset_err_msg').html("This link is already used. You can reset your password from <a href='#' id='reset_modal_forgot'>Forgot Password?</a>");
                        } else if (data == 4) {
                            $('#reset_modal_form').hide();
                            $('#reset_err_msg').html('The link you used is not valid. Please check it is the correct link from the email.');
                        } else {
                            $('#modal-resetpassword').modal('hide');
                            window.location = data;
                        }
                        $('#reset_warning').show();
                    }
                });
            } else {
                $('#reset_err_msg').html("The two passwords do not match.");
                $('#reset_warning').show();
            }
        });

        $('#set_submit').click(function () {
            var pwd = $('#set_password').val();
            var cpwd = $('#set_confirm_password').val();
            //console.log(pwd + ' ' + cpwd);
            if (pwd === cpwd) {

                $.ajax({
                    type: 'POST',
                    url: $('#completePath').text() + '/ajax/SetPassword',
                    data: {
                        password: pwd,
                        hash: '<?php echo $setPwdHash; ?>'},
                    success: function (data) {
                        //console.log('hi');
                        //console.log(data);
                        if(data == 1){
                            window.location=$('#completePath').text() + '/myCampaigns';
                        }
                        else if(data == 2){
                            window.location=$('#completePath').text();
                            $('#set_modal_form').hide();
                            $('#set_err_msg').html("Your password link has expired.");
                            $('#set_warning').show();
                        }
                        else if (data == 5) {
                            // login and redirect from server
                            $('#set_modal_form').hide();
                            $('#set_err_msg').html("Please login to your account.");
                        }
                    }
                })
            } else {
                $('#set_err_msg').html("The two passwords do not match.");
                $('#set_warning').show();
            }
        });

        $('#home_login').click(function (e) {
            //console.log('clicked');
            e.preventDefault();
            $('#LoginModal').modal('show');
        });

    });
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
                function () {
                    (b[l].q = b[l].q || []).push(arguments)
                });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X');
    ga('send', 'pageview');

</script>
</body>
</html>