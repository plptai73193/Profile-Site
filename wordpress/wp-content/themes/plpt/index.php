<?php 
/* Template Name: Landing Page */
   get_header();
   $basicInfo = get_field('basic_information', 'option');
   $profilePicture = $basicInfo[0]['profile_picture'] ? $basicInfo[0]['profile_picture'] : NO_IMAGE;
   $about = get_field('about', 'option');
   $kv = get_field('key_visual', 'option');
?>
<div class="profile-page">
   <div class="wrapper">
      <div class="page-header page-header-small" filter-color="green">
         <div class="page-header-image" data-parallax="true" style="background-image: url('<?php echo $kv; ?>');">
         </div>
         <div class="container">
            <div class="content-center">
               <div class="cc-profile-image"><a href="<?php echo site_url(); ?>">
                     <img src="<?php echo $profilePicture ?>" alt="Image" alt="<?php bloginfo( 'name' ) ?>" /></a>
               </div>
               <div class="h2 title"><?php echo $basicInfo[0]['display_name'] ?></div>
               <p class="category text-white"><?php echo $basicInfo[0]['profession'] ?></p>
               <a class="btn btn-primary" href="#" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>
            </div>
         </div>
         <div class="section">
            <div class="container">
               <div class="button-container">
                  <a class="btn btn-default btn-round btn-lg btn-icon" href="<?php echo $basicInfo[0]['facebook'] ?>"
                     rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a>
                  <a class="btn btn-default btn-round btn-lg btn-icon"
                     href="mailto:<?php echo $basicInfo[0]['email'] ?>" rel="tooltip" title="Contact me"><i
                        class="fas fa-envelope"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="section" id="about">
   <div class="container">
      <div class="card" data-aos="fade-up" data-aos-offset="10">
         <div class="row">
            <div class="col-lg-6 col-md-12">
               <div class="card-body">
                  <div class="h4 mt-0 title">About</div>
                  <?php echo $about ?>
               </div>
            </div>
            <div class="col-lg-6 col-md-12">
               <div class="card-body">
                  <div class="h4 mt-0 title">Basic Information</div>
                  <div class="row">
                     <div class="col-sm-4"><strong class="text-uppercase">DOB:</strong></div>
                     <div class="col-sm-8"><?php echo $basicInfo[0]['dob'] ?></div>
                  </div>
                  <div class="row mt-3">
                     <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                     <div class="col-sm-8"><a
                           href="mailto:<?php echo $basicInfo[0]['email'] ?>"><?php echo $basicInfo[0]['email'] ?></a>
                     </div>
                  </div>
                  <div class="row mt-3">
                     <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
                     <div class="col-sm-8"><a
                           href="tel:<?php echo $basicInfo[0]['phone'] ?>"><?php echo $basicInfo[0]['phone'] ?></a>
                     </div>
                  </div>
                  <div class="row mt-3">
                     <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
                     <div class="col-sm-8"><?php echo $basicInfo[0]['address'] ?></div>
                  </div>
                  <div class="row mt-3">
                     <div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>
                     <div class="col-sm-8"><?php echo $basicInfo[0]['language'] ?></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php 
   $skills = get_field('skills', 'option');
?>
<div class="section" id="skill">
   <div class="container">
      <div class="h4 text-center mb-4 title">Professional Skills</div>
      <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
         <div class="card-body">
            <div class="row">
               <?php
                  foreach($skills as $skill){
               ?>
               <div class="col-md-6">
                  <div class="progress-container progress-primary"><span
                        class="progress-badge"><?php echo $skill['skill_name'] ?></span>
                     <div class="progress">
                        <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10"
                           data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                           aria-valuemax="100" style="width: <?php echo $skill['skill_level'] ?>%;"></div><span
                           class="progress-value"><?php echo $skill['skill_level'] ?>%</span>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="section" id="portfolio">
   <div class="container">
      <div class="row">
         <div class="col-md-6 ml-auto mr-auto">
            <div class="h4 text-center mb-4 title">Portfolio</div>
            <div class="nav-align-center">
               <ul class="nav nav-pills nav-pills-primary" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#web-development"
                        role="tablist"><i class="fa fa-code" aria-hidden="true"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="tab-content gallery mt-5">
         <div class="tab-pane active" id="web-development">
            <div class="ml-auto mr-auto">
               <div class="row">
                  <div class="col-md-6">
                     <div class="cc-porfolio-image img-raised" data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom">
                        <a href="#web-development">
                           <figure class="cc-effect"><img src="images/project-1.jpg" alt="Image" />
                              <figcaption>
                                 <div class="h4">Recent Project</div>
                                 <p>Web Development</p>
                              </figcaption>
                           </figure>
                        </a></div>
                     <div class="cc-porfolio-image img-raised" data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom">
                        <a href="#web-development">
                           <figure class="cc-effect"><img src="images/project-2.jpg" alt="Image" />
                              <figcaption>
                                 <div class="h4">Startup Project</div>
                                 <p>Web Development</p>
                              </figcaption>
                           </figure>
                        </a></div>
                  </div>
                  <div class="col-md-6">
                     <div class="cc-porfolio-image img-raised" data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom">
                        <a href="#web-development">
                           <figure class="cc-effect"><img src="images/project-3.jpg" alt="Image" />
                              <figcaption>
                                 <div class="h4">Food Order Project</div>
                                 <p>Web Development</p>
                              </figcaption>
                           </figure>
                        </a></div>
                     <div class="cc-porfolio-image img-raised" data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom">
                        <a href="#web-development">
                           <figure class="cc-effect"><img src="images/project-4.jpg" alt="Image" />
                              <figcaption>
                                 <div class="h4">Web Advertising Project</div>
                                 <p>Web Development</p>
                              </figcaption>
                           </figure>
                        </a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php 
   $experiences = get_field('experience', 'option');
?>
<div class="section" id="experience">
   <div class="container cc-experience">
      <div class="h4 text-center mb-4 title">Work Experience</div>
      <?php foreach($experiences as $experience){ ?>
      <div class="card">
         <div class="row">
            <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
               <div class="card-body cc-experience-header">
                  <p><?php echo $experience['from'] ?> - <?php echo $experience['to'] ?></p>
                  <div class="h5"><?php echo $experience['company_name'] ?></div>
               </div>
            </div>
            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
               <div class="card-body">
                  <div class="h5"><?php echo $experience['position'] ?></div>
                  <?php echo $experience['descriptioin'] ?>
               </div>
            </div>
         </div>
      </div>
      <?php } ?>
   </div>
</div>

<?php 
   $education = get_field('education', 'option');
?>
<div class="section">
   <div class="container cc-education">
      <div class="h4 text-center mb-4 title">Education</div>
      <?php foreach ($education as $edu) { ?>
      <div class="card">
         <div class="row">
            <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
               <div class="card-body cc-education-header">
                  <p><?php echo $edu['from'] ?> - <?php echo $edu['to'] ?></p>
                  <div class="h5"><?php echo $edu['school_level'] ?></div>
               </div>
            </div>
            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
               <div class="card-body">
                  <div class="h5"><?php echo $edu['specialization'] ?></div>
                  <p class="category"><?php echo $edu['school_name'] ?></p>
                  <?php echo $edu['description'] ?>
               </div>
            </div>
         </div>
      </div>
      <?php } ?>
   </div>
</div>
<?php
   $contactBg = get_field('contact_background', 'option');
?>
<div class="section" id="contact">
   <div class="cc-contact-information" style="background-image: url('<?php echo $contactBg ?>');">
      <div class="container">
         <div class="cc-contact">
            <div class="row">
               <div class="col-md-9">
                  <div class="card mb-0" data-aos="zoom-in">
                     <div class="h4 text-center title">Contact Me</div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="card-body">
                              <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]') ?>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="card-body">
                              <p class="mb-0"><strong>Address </strong></p>
                              <p class="pb-2"><?php echo $basicInfo[0]['address'] ?></p>
                              <p class="mb-0"><strong>Phone</strong></p>
                              <p class="pb-2"><a
                                    href="tel:<?php echo $basicInfo[0]['address'] ?>"><?php echo $basicInfo[0]['phone'] ?></a>
                              </p>
                              <p class="mb-0"><strong>Email</strong></p>
                              <p><a
                                    href="mailto:<?php echo $basicInfo[0]['address'] ?>"><?php echo $basicInfo[0]['address'] ?></a>
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php get_footer(); ?>