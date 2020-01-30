<?php include("header.php");
  $mat_member_id = $this->session->userdata('mat_member_id');
?>
<section class="heading">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">User Profile</h1>
      </div>
    </div>
  </div>
</section>

<section class="profile-page">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-3  d-none d-sm-block">
          <div class="adv mb-4 mt-0">
            <img src="<?php echo base_url(); ?>assets/images/adv/<?php echo $adv_image1; ?>" width="100%" height="60%" alt="">
          </div>
          <div class="adv mb-4 mt-0">
            <img src="<?php echo base_url(); ?>assets/images/adv/<?php echo $adv_image2; ?>" width="100%" height="60%" alt="">
          </div>
          <div class="adv mb-4 mt-0">
            <img src="<?php echo base_url(); ?>assets/images/adv/<?php echo $adv_image3; ?>" width="100%" height="60%" alt="">
          </div>
        </div>

        <div class="col-md-9">
          <div class="profile-div">
            <div class="profile-div-left">
              <div class="row">
                <div class="col-md-4">
                  <div class="card card-red" style="width: 100%;">
                    <div class="card-body">
                      <div class="img w-100 text-center">
                        <div class="row owl-main">
                          <div class="owl-carousel owl-theme">
                            <div class="item">
                              <a target="_blank" href="<?php echo base_url(); ?>assets/images/profile-girl.jpg">
                                <img class="pb-2" src="<?php echo base_url(); ?>assets/images/profile-girl.jpg" width="100" alt="">
                              </a>
                            </div>

                            <div class="item"><img class="pb-2" src="<?php echo base_url(); ?>assets/images/profile-girl.jpg" width="100" alt=""></div>
                            <div class="item"><img class="pb-2" src="<?php echo base_url(); ?>assets/images/profile-girl.jpg" width="100" alt=""></div>
                            <div class="item"><img class="pb-2" src="<?php echo base_url(); ?>assets/images/profile-girl.jpg" width="100" alt=""></div>
                            <div class="item"><img class="pb-2" src="<?php echo base_url(); ?>assets/images/profile-girl.jpg" width="100" alt=""></div>

                          </div>
                        </div>
                      </div>
                      <hr class="white">
                      <input type="hidden" id="profile_member_id" name="profile_member_id" value="<?php echo $member_info[0]['member_id']; ?>">
                      <input type="hidden" id="login_member_id" name="login_member_id" value="<?php echo $member_info[0]['member_id']; ?>">
                      <?php if(isset($interest_sent)){ ?>
                        <button class="btn btn-primary btn-sm w-100 mb-2" type="submit" disabled><i class="fa fa-heart" aria-hidden="true"></i> Expressed Interest</button>
                      <?php  } else{ ?>
                        <button class="btn btn-primary btn-sm w-100 mb-2" id="btn_exp_interest" type="submit"><i class="fa fa-heart" aria-hidden="true"></i> Express Interest</button>
                      <?php } ?>

                      <div class="row">
                        <!-- <div class="col-6">
                          <?php if(isset($shortlist_sent)){ ?>
                            <button class="btn btn-success btn-sm w-100 " type="submit" disabled><i class="fa fa-list" aria-hidden="true" ></i> Shortlisted</button>
                          <?php  } else{ ?>
                            <button class="btn btn-success btn-sm w-100 " id="btn_shortlist" type="submit"><i class="fa fa-list" aria-hidden="true"></i> Shortlist</button>
                          <?php } ?>
                        </div> -->
                        <div class="col-12">
                          <button class="btn btn-success btn-sm w-100 " type="button" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-envelope" aria-hidden="true"></i> Message</button>
                        </div>
                      </div>
                    </div>
                   </div>
                </div>

                <div class="col-12 d-block d-sm-none">
                  <div class="adv">
                    <img src="<?php echo base_url(); ?>assets/images/adv/<?php echo $adv_image1; ?>" width="100%"  alt="">
                    <br>
                  </div>
                </div>

                <div class="col-md-8">
                  <div class="frist">
                    <div class="row">
                      <div class="col-md-12">
                        <h5 class="mb-3">Quick Information : </h5>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12 py-1">
                        <h5  class="mb-1 text-danger text-bold f-18"><?php echo $member_info[0]['member_name']; ?></h5>
                      </div>
                      <div class="col-12">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-6 col-6 py-1">
                        <p class="mb-1 text-bold ">Member Id : </p>
                      </div>
                      <div class="col-md-6 col-6 py-1">
                       <p class="mb-1 text-danger"><?php echo $member_info[0]['member_id']; ?></p>
                      </div>
                      <div class="col-12">
                          <hr class="hr-web">
                      </div>

                      <div class="col-md-3 col-6 py-1">
                        <p class="mb-1 text-bold">Gender : </p>
                      </div>
                      <div class="col-md-3 col-6 py-1">
                        <p class="mb-1"><?php echo $member_info[0]['member_gender']; ?></p>
                      </div>
                      <div class="col-12 d-block d-sm-none">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6 py-1">
                        <p class="mb-1 text-bold">Age : </p>
                      </div>
                      <div class="col-md-3 col-6 py-1">
                        <p class="mb-1"><?php echo $age; ?></p>
                      </div>
                      <div class="col-12">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6 py-1">
                        <p class="mb-1 text-bold">Marital Status : </p>
                      </div>
                      <div class="col-md-3 col-6 py-1">
                        <p class="mb-1"><?php echo $member_info[0]['marital_status_name']; ?></p>
                      </div>
                      <div class="col-12 d-block d-sm-none">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6 py-1">
                        <p class="mb-1 text-bold">City : </p>
                      </div>
                      <div class="col-md-3 col-6 py-1">
                        <p class="mb-1"><?php echo $member_info[0]['city_name']; ?></p>
                      </div>
                      <div class="col-12">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6 py-1">
                        <p class="mb-1 text-bold">Area : </p>
                      </div>

                      <div class="col-md-3 col-6 py-1">
                        <p class="mb-1"><?php echo $member_info[0]['member_area']; ?></p>
                      </div>
                      <div class="col-12 d-block d-sm-none">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6 py-1">
                        <p class="mb-1 text-bold">On Behalf : </p>
                      </div>
                      <div class="col-md-3 col-6 py-1">
                        <p class="mb-1"><?php if($member_info[0]['onbehalf_name'] == ''){ echo 'Self'; } else{ echo $member_info[0]['onbehalf_name']; } ?></p>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 d-block d-sm-none">
                    <div class="adv pt-4">
                      <img src="<?php echo base_url(); ?>assets/images/adv/<?php echo $adv_image2; ?>" width="100%"  alt="">
                      <br>
                    </div>
                  </div>

                  <div class="third">
                    <div class="row">
                      <div class="col-md-6">
                        <h5 class="mb-3">Basic Information : </h5>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-6">
                        <p class="mb-1">  Address : </p>
                      </div>
                      <div class="col-md-6 col-6">
                       <p class="mb-1"><?php echo $member_info[0]['member_address']; ?> </p>
                      </div>
                      <div class="col-12">
                          <hr class="hr-web">
                      </div>

                      <div class="col-md-3 col-6">
                        <p class="mb-1">Mobile : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php if($member_info[0]['show_mobile'] == 1){ echo $member_info[0]['member_mobile']; }  ?></p>
                      </div>
                      <div class="col-12 d-block d-sm-none">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">Email : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php if($member_info[0]['show_email'] == 1){ echo $member_info[0]['member_email']; } ?></p>
                      </div>
                      <div class="col-12">
                          <hr class="hr-web">
                      </div>

                      <div class="col-md-3 col-6">
                        <p class="mb-1">Area : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['member_area']; ?></p>
                      </div>
                      <div class="col-12 d-block d-sm-none">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">City : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['city_name']; ?></p>
                      </div>
                      <div class="col-12">
                          <hr class="hr-web">
                      </div>

                      <div class="col-md-3 col-6">
                        <p class="mb-1">Tahasil : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['tahasil_name']; ?></p>
                      </div>
                      <div class="col-12 d-block d-sm-none">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">District : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['district_name']; ?></p>
                      </div>

                      <div class="col-12">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">State : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['state_name']; ?></p>
                      </div>
                      <div class="col-12 d-block d-sm-none">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">Country : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['country_name']; ?></p>
                      </div>

                      <div class="col-12">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">Blood Group : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['blood_group_name']; ?></p>
                      </div>
                      <div class="col-12 d-block d-sm-none">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">Body type : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['body_type_name']; ?></p>
                      </div>

                      <div class="col-12">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">Religion : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['religion_name']; ?></p>
                      </div>
                      <div class="col-12 d-block d-sm-none">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">Cast : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['cast_name']; ?></p>
                      </div>

                      <div class="col-12">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">Sub Cast  : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['sub_cast_name']; ?></p>
                      </div>
                      <div class="col-12 d-block d-sm-none">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">Complexion : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['complexion_name']; ?></p>
                      </div>

                      <div class="col-12">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">Diet  : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['diet_name']; ?></p>
                      </div>
                      <div class="col-12 d-block d-sm-none">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">Education : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['education_name']; ?></p>
                      </div>

                      <div class="col-12">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">Family Status  : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['family_status_name']; ?></p>
                      </div>
                      <div class="col-12 d-block d-sm-none">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">Family Type : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['family_type_name']; ?></p>
                      </div>

                      <div class="col-12">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">Family Value  : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['family_value_name']; ?></p>
                      </div>
                      <div class="col-12 d-block d-sm-none">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">Gothram : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['gothram_name']; ?></p>
                      </div>

                      <div class="col-12">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">Height : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['height_name']; ?></p>
                      </div>
                      <div class="col-12 d-block d-sm-none">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">Income : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['min_income'].'-'.$member_info[0]['max_income']; ?></p>
                      </div>

                      <div class="col-12">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">Moonsign : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['moonsign_name']; ?></p>
                      </div>
                      <div class="col-12 d-block d-sm-none">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">Occupation : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['occupation_name']; ?></p>
                      </div>

                      <div class="col-12">
                          <hr class="hr-web">
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1">Resident Status  : </p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="mb-1"><?php echo $member_info[0]['resident_status_name']; ?></p>
                      </div>
                      <div class="col-12 d-block d-sm-none">
                          <hr class="hr-web">
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Send Message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="" action="" method="post">
              <textarea name="message_text" id="message_text" class="form-control form-control-sm" rows="4" cols="80" placeholder="Type your message..."></textarea>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="btn_msg_send" data-dismiss="modal" class="btn btn-primary">Send</button>
          </div>
        </div>
      </div>
    </div>

  </section>


<!-- End of Quick Info Update Modal -->

<?php include("script.php"); ?>


<script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
  <script type="text/javascript">
    $('#btn_exp_interest').on('click',function(){
      var to_member_id = $('#profile_member_id').val();
      var from_member_id = <?php echo $mat_member_id; ?>;
      $.ajax({
        url:'<?php echo base_url(); ?>Member/add_interest',
        method:'post',
        data:{'from_member_id':from_member_id,
              'to_member_id':to_member_id},
        success:function(result){
          if(result == 'success'){
            toastr.success('Interest sent successfully');
            $('#btn_exp_interest').html('<i class="fa fa-heart" aria-hidden="true" ></i> Expressed Interest');
            $('#btn_exp_interest').attr('disabled','true');
          } else{
            toastr.error('Interest not sent');
          }
        }
      });
    });

    $('#btn_shortlist').on('click',function(){
      var to_member_id = $('#profile_member_id').val();
      var from_member_id = <?php echo $mat_member_id; ?>;
      $.ajax({
        url:'<?php echo base_url(); ?>Member/add_shortlist',
        method:'post',
        data:{'from_member_id':from_member_id,
              'to_member_id':to_member_id},
        success:function(result){
          if(result == 'success'){
            toastr.success('This Profile Shortlisted successfully');
            $('#btn_shortlist').html('<i class="fa fa-list" aria-hidden="true" ></i> Shortlisted');
            $('#btn_shortlist').attr('disabled','true');
          } else{
            toastr.error('Profile Shortlist Error');
          }
        }
      });
    });

    $('#btn_msg_send').on('click',function(){
      var to_member_id = $('#profile_member_id').val();
      var from_member_id = <?php echo $mat_member_id; ?>;
      var message_text = $('#message_text').val();
      if(message_text == ''){
        toastr.error('Message field is empty');
      } else{
        $('#message_text').val('');
        $.ajax({
          url:'<?php echo base_url(); ?>Member/add_message',
          method:'post',
          data:{'from_member_id':from_member_id,
                'to_member_id':to_member_id,
                'message_text':message_text},
          success:function(result){
            if(result == 'success'){
              toastr.success('Message Sent successfully');
            } else{
              toastr.error('Message Not Sent');
            }
          }
        });
      }
    });

  </script>

  <script type="text/javascript">
    $('.owl-carousel').owlCarousel({
      loop:true,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      margin:40,
      padding:30,
      dots: true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
    });
  </script>
