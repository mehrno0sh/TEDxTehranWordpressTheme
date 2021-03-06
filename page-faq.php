﻿<?php /*
  Template Name: FAQ
Template Post Type: page
 */ ?>

<?php get_header(); ?>

<!-- Main -->
<main class="section section-white section-faq">
<div class="container">
<!-- Title -->
<div class="row">
  <div class="col-md-12 ">
    <h1 class="title-section-left">Quick Answers</h1>
    <p class="title-section-details">Answers to the most frequently asked questions.</p>
  </div>
</div>
<!-- /Title --> 
<!-- Containeer -->
<div class="row"> 
  <!-- Sidebar -->
  <aside class="col-md-4 sidebar"> 
    <!-- Categories -->
    <div class="sidebar-section sidebar-section-left">
      <h5 class="sidebar-heading text-uppercase"><span>Categories</span></h5>
      <ul class="list-unstyled list-categories tab-sidebar" role="tablist">
        <li class="active"><a href="<?php echo get_home_url(); ?>/faq#TEDx" aria-controls="TEDx" role="tab" data-toggle="tab">Questions about TED and TEDx</a></li>
        <li><a href="<?php echo get_home_url(); ?>/faq#AttendingTEDxTehran" aria-controls="AttendingTEDxTehran" role="tab" data-toggle="tab">Attending TEDxTehran</a></li>
        <li><a href="<?php echo get_home_url(); ?>/faq#Volunteers" aria-controls="Volunteers" role="tab" data-toggle="tab">Volunteers</a></li>
        <li><a href="<?php echo get_home_url(); ?>/faq#Speakers" aria-controls="Speakers" role="tab" data-toggle="tab">Speakers</a></li>
      </ul>
    </div>
    <!-- /Categories --> 
  </aside>
  <!-- /Sidebar --> 
  <!-- Questions -->
  <div class="col-md-8">
    <div class="tab-content"> 
      <!-- Tab #1 -->
      <div class="tab-pane fade in active" id="TEDx">
        <div class="panel-group group-questions" id="group-questions1"> 
          <!-- Item -->
          <div class="panel panel-style">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#group-questions1" href="<?php echo get_home_url(); ?>/faq#collapse1">What is the difference between TED and TEDx?<span></span></a> </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
              <div class="panel-body"> TED conferences are organized and run directly by TED. TEDx events are fully planned and coordinated independently, on a community-by-community basis. The goal of TEDx is to inspire a passion for spreading ideas in local communities from within. </div>
            </div>
          </div>
          <!-- /Item --> 
          <!-- Item -->
          <div class="panel panel-style">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#group-questions1" href="<?php echo get_home_url(); ?>/faq#collapse2">Are you employed by TED?<span></span></a> </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
              <div class="panel-body"> No. While we operate under a license from TED, TEDxTehran is a volunteer-based organization. The organizers and other volunteers donate their time to bring TEDxTehran events to our community. </div>
            </div>
          </div>
          <!-- /Item --> 
        </div>
        <!-- group-questions --> 
      </div>
      <!-- /Tabs #1 --> 
      <!-- Tabs #2 -->
      <div class="tab-pane" id="AttendingTEDxTehran">
        <div class="panel-group group-questions" id="group-questions2"> 
          <!-- Item -->
          <div class="panel panel-style">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#group-questions2" href="<?php echo get_home_url(); ?>/faq#collapse8">How do I attend a TEDxTehran event?<span></span></a> </h4>
            </div>
            <div id="collapse8" class="panel-collapse collapse">
              <div class="panel-body"> We usually ask attendees to apply for a conference Pass.  You may apply for a pass via our website. </div>
            </div>
          </div>
          <!-- /Item --> 
          <!-- Item -->
          <div class="panel panel-style">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#group-questions2" href="<?php echo get_home_url(); ?>/faq#collapse9">Why should I request an invitation?<span></span></a> </h4>
            </div>
            <div id="collapse9" class="panel-collapse collapse">
              <div class="panel-body"> TEDx events are generally oversubscribed. We carefully curate our audience so we have   a diverse, creative mix of leading thinkers and doers in our community. We are looking for remarkable people with great stories and ideas worth sharing.
                
                We have adopted some of TED’s practices—like their practice of requesting an invitation. When a delegate takes 10 to 15 minutes to complete the application, it creates a common threshold for everyone entering the event. This practice helps to ensure that our limited seats go to people who are committed to being there. We have no VIP’s nor will we ever have VIP delegates. Only those who apply can attend. </div>
            </div>
          </div>
          <!-- /Item --> 
          <!-- Item -->
          <div class="panel panel-style">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#group-questions2" href="<?php echo get_home_url(); ?>/faq#collapse10">How can I request an invitation?<span></span></a> </h4>
            </div>
            <div id="collapse10" class="panel-collapse collapse">
              <div class="panel-body"> In an effort to find a fair way to issue tickets, we ask attendees to request an invitation, using our online form which is usually posted on our website. </div>
            </div>
          </div>
          <!-- /Item --> 
        </div>
        <!-- group-questions --> 
      </div>
      <!-- /Tabs #2 --> 
      <!-- Tabs #3 -->
      <div class="tab-pane" id="Volunteers">
        <div class="panel-group group-questions" id="group-questions3"> 
          <!-- Item -->
          <div class="panel panel-style">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#group-questions3" href="<?php echo get_home_url(); ?>/faq#collapse12">How can I become a TEDxTehran volunteer?<span></span></a> </h4>
            </div>
            <div id="collapse12" class="panel-collapse collapse">
              <div class="panel-body"> Volunteers are the backbone of any community based event. Volunteers tend to be people who are as passionate as we are about ideas worth spreading. We are always looking for enthusiastic volunteers to help bring TEDxTehran to life. If you’re interested in helping out, we’d love to hear from you. Click here if you would like to volunteer or send your resume to info@tedxtehran.com with Volunteer in the subject. </div>
            </div>
          </div>
          <!-- /Item --> 
        </div>
        <!-- group-questions --> 
      </div>
      <!-- /Tabs #3 --> 
      <!-- Tabs #4 -->
      <div class="tab-pane" id="Speakers">
        <div class="panel-group group-questions" id="group-questions4"> 
          <!-- Item -->
          <div class="panel panel-style">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#group-questions4" href="<?php echo get_home_url(); ?>/faq#collapse15">How do I suggest a speaker?<span></span></a> </h4>
            </div>
            <div id="collapse15" class="panel-collapse collapse">
              <div class="panel-body"> Use our “Nominate a Speaker” form, and fill in as much information as you can. This form goes directly to our speaker selection team. </div>
            </div>
          </div>
          <!-- /Item --> 
          <!-- Item -->
          <div class="panel panel-style">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#group-questions4" href="<?php echo get_home_url(); ?>/faq#collapse16">Can I suggest a speaker that I don't know personally?<span></span></a> </h4>
            </div>
            <div id="collapse16" class="panel-collapse collapse">
              <div class="panel-body"> Please do! Just let us know how you’ve heard about this person, and why you think they should speak at TEDxTehran. </div>
            </div>
          </div>
          <!-- /Item --> 
          <!-- Item -->
          <div class="panel panel-style">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#group-questions4" href="<?php echo get_home_url(); ?>/faq#collapse17">Can I nominate I work for, or a client of mine?<span></span></a> </h4>
            </div>
            <div id="collapse17" class="panel-collapse collapse">
              <div class="panel-body"> Yes. </div>
            </div>
          </div>
          <!-- /Item --> 
          <!-- Item -->
          <div class="panel panel-style">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#group-questions4" href="<?php echo get_home_url(); ?>/faq#collapse18">Can I suggest myself as a speaker?<span></span></a> </h4>
            </div>
            <div id="collapse18" class="panel-collapse collapse">
              <div class="panel-body"> Yes. </div>
            </div>
          </div>
          <!-- /Item --> 
          <!-- Item -->
          <div class="panel panel-style">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#group-questions4" href="<?php echo get_home_url(); ?>/faq#collapse19">Can I speak at TEDxTehran by becoming a sponsor?<span></span></a> </h4>
            </div>
            <div id="collapse19" class="panel-collapse collapse">
              <div class="panel-body"> No. Sponsoring TEDxTehran has many benefits, but a guaranteed speaking slot is not one of them. </div>
            </div>
          </div>
          <!-- /Item --> 
          <!-- Item -->
          <div class="panel panel-style">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#group-questions4" href="<?php echo get_home_url(); ?>/faq#collapse19">Is there a deadline for suggesting a speaker?<span></span></a> </h4>
            </div>
            <div id="collapse19" class="panel-collapse collapse">
              <div class="panel-body"> We accept nominations all the time. It’s best to get your suggestions to us as early as possible, so we can research them carefully and make the best decision on the speaker roster. </div>
            </div>
          </div>
          <!-- /Item --> 
          <!-- Item -->
          <div class="panel panel-style">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#group-questions4" href="<?php echo get_home_url(); ?>/faq#collapse19">Will it help if I submit multiple nominations, or have my friends nominate me several times?<span></span></a> </h4>
            </div>
            <div id="collapse19" class="panel-collapse collapse">
              <div class="panel-body"> No. It really only takes one suggestion. </div>
            </div>
          </div>
          <!-- /Item --> 
          <!-- Item -->
          <div class="panel panel-style">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#group-questions4" href="<?php echo get_home_url(); ?>/faq#collapse19">I want to speak at TEDxTehran, but my usual talk runs 50 minutes. Can I get a longer slot?<span></span></a> </h4>
            </div>
            <div id="collapse19" class="panel-collapse collapse">
              <div class="panel-body"> We strictly enforce the clock for all speakers. TEDxTehran is the place to condense your ideas into a compelling 18-minute talk that communicates your best ideas. We’ve found that a carefully prepared presentation of this length can have astonishing impact. </div>
            </div>
          </div>
          <!-- /Item --> 
          <!-- Item -->
          <div class="panel panel-style">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#group-questions4" href="<?php echo get_home_url(); ?>/faq#collapse19">Do you pay the speakers?<span></span></a> </h4>
            </div>
            <div id="collapse19" class="panel-collapse collapse">
              <div class="panel-body"> TEDxTehran does not pay speakers. Other benefits include pre-conference coaching and training, special events for networking. We are committed to creating an experience that’s tremendously fulfilling and beneficial on all sides. <br />
                An additional benefit of speaking at TEDxTehran is that your presentation may become a TED Talk, part of TED’s beautifully produced, broadcast-quality video series. Not all talks given on the TEDx stages will automatically become online TED Talks, but we hope most do. </div>
            </div>
          </div>
          <!-- /Item --> 
        </div>
        <!-- group-questions --> 
      </div>
      <!-- /Tabs #4 --> 
    </div>
    <!-- tab-content --> 
    <!-- Title --> 
    <!-- /Questions --> 
  </div>
  <!-- /Containeer --> 
</div>
<!-- BOX -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div  class="panel panel-style">
      <div id="id-box" class="panel-heading">
       <h4 class="panel-title"> <a href="<?php echo get_home_url(); ?>/contact-us" target="_blank">Have Questions?<p>Did not find an answer to your question? Ask us in the form below.</p><button id="box-btn" class="btn btn-submit  btn-no-radius disabled" style="pointer-events: all; cursor: pointer;">Send Message</button></a> </h4>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- !BOX -->
</main>
<!-- /Main -->

<?php get_footer(); ?>
