<style>
    .banner-img-height {
        height: 380px;
    }

    @media screen and (max-width: 600px) {
        .banner-img-height {
            height: 150px;
        }
    }

    .first-letter {
        font-size: 80px;
    }

    .custom-para {
        line-height: 40px;
    }
</style>

<section class="banner-img-height" id="page-title" style="background-color: #181918;background-size: contain;background-repeat: no-repeat;" data-parallax-image="<?= base_url() ?>assets/front/images/banner/registration.jpg">
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="mb-1">
                <span class="smalldesc">
                    <h5 align="justify" class="mx-sm-5 custom-para">
                        <span class="first-letter text-bold">I</span><span style="font-style:italic;">f you can change nothing, nothing is changed</span><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Joyce<br>

                        Is your brain sizzling with thoughts that are unimagined? Want a companion to implement your ideas to rule the sphere? Then join hands with IEDC.
                        IEDC TKMCE has opened the door to welcome all young geniuses to the world of inspiration and innovation and the benefits for the members of this igniting organisation is countless.
                        <br><br>
                        1. Mentorship will be provided to all the members and they shall make use of the resources of IEDC.<br>
                        2. Funding for incubation of potentially excelling startups.<br>
                        3. Necessary Funding for projects.<br>
                        4. Access to hardware library.<br>
                        5. Provision of server access and many other exciting features that are solely dedicated to IEDC members.<br>

                        So sign up and get ready to ignite the genius in you.

                        This registration is for students of batch 2019-2023.<br>
                        <br>
                        Registration fee: Rs.300

                    </h5>
                    <br>

                </span>
            </div>
        </div>
    </div>
</section>
<div class="row">
    <div class="container mt-3 mb-5">
        <h3 class="mb-5 text-center">Membership Registration</h3>
        <div class="">
            <form action="<?= base_url() ?>pages/new_user_registration" method="post">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="required" for="name">Name </label>
                        <input type="text" aria-required="true" name="name" class="form-control" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="required" for="email">Email</label>
                        <input type="email" aria-required="true" name="email" class="form-control" placeholder="Enter your Email" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="required" for="phone">Phone</label>
                        <input type="phone" name="phone_number" class="form-control" placeholder="Enter your phone number" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="required" for="admission_number">TKMCE Admission Number</label>
                        <input type="number" aria-required="true" name="admission_number" class="form-control" placeholder="Enter admission number" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label class="required" for="Year of study">Year of Study</label>
                        <select name="year" class="form-control" required>
                            <option value="second-year">Second Year</option>
                          <!--   <option>Third Year</option>
                            <option>Fourth Year</option> -->
                        </select>
                    </div>
                    <div class="form-group  col-md-6">
                        <label class="required" for="Branch">Select your Branch</label>
                        <select name="branch" class="form-control" required>
                            <option>Architecture</option>
                            <option>Chemical Engineering</option>
                            <option>Civil Engineering</option>
                            <option>Computer Science & Engineering</option>
                            <option>Electronics & Communication Engineering</option>
                            <option>Electrical & Electronics Engineering</option>
                            <option>Master of Computer Application</option>
                            <option>Mechanical Engineering</option>
                            <option>Mechanical Production</option>
                        </select>
                    </div>

                    <!-- <div class="form-group  col-md-6">

                    </div>
                    <div class="form-group  col-md-6">

                    </div>

                    <div class="form-group  col-md-12">

                    </div> -->

                </div>
                <div class="g-recaptcha" name="g-recaptcha-response" data-sitekey="6LfZF_EUAAAAANZ8kcPRhCXKepzq_RIOYd55Mob5"></div>
                <button class="btn" type="submit"><i class="fa fa-paper-plane"></i>&nbsp;Register</button>
            </form>
        </div>
    </div>
</div>