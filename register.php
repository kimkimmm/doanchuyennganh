<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'layouts/headerpage.php' ?>
    </head>

    <body>
        <!-- Nav Bar Start -->
        <?php include 'layouts/menupage.php' ?>
        <!-- Nav Bar End -->


        <!-- Page Header Start -->
        <div class="page-header mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Register Page</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Register</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Booking Start -->
        <div class="booking">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="booking-content">
                            <div class="section-header">
                                <p>Register Page</p>
                                <h2>Sign Up with  Dinners & Happy Hours</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="booking-form">
                            <h2>Register Page</h2>
                            <form>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Name" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="Email" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="password" class="form-control" placeholder="Password" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-mobile-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="password" class="form-control" placeholder="Re-password" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-mobile-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Mobile" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-mobile-alt"></i></div>
                                        </div>
                                    </div>
                                </div>



                                <div class="control-group">
                                    <div class="input-group">
                                        <label for="html" style="color:white">Nam </label><br>
                                        <input class="lbsRadio" type="radio" name="rad_nam" id="rad_nam"  value="Nam" >
                                        <label for="html" style="color:white">N??? </label><br>
                                        <input class="lbsRadio" type="radio" name="rad_nu" name="rad_nu" value="Nu">

                                    </div>
                                </div>

                                <div class="control-group">
                                    <div class="input-group">

                                        <select class="form-control" name="sel_sothich" id="sel_sothich">
                                            <option value="" disabled selected hidden>Ch???n s??? th??ch</option>

                                            <option value="volvo">B??ng ????</option>
                                            <option value="saab">B??ng chuy???n</option>
                                            <option value="mercedes">B??ng r???</option>
                                            <option value="audi">Nh???y d??y</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                     
                                        <input class="lbsCheck"   type="checkbox" name="chk_nam" id="chk_nam"  value="Nam" >
                                        <label for="html" style="color:white">T??i ?????ng ?? v???i ??i???u kho???n </label>

                                    </div>
                                </div>
                                <div>
                                    <button class="btn custom-btn" type="submit">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->





        <!-- Footer Start -->
        <?php include 'layouts/footerpage.php' ?>
        <!-- Footer End -->


    </body>
</html>
