
@include('admin.includes.header')
<style>
  .event{ display:none; }
</style>
<div class="main_content_iner overly_inner ">
  <div class="container-fluid p-0 ">
    <div class="row">
      <div class="col-md-10">
        <div class="card p-4">
          <h4 class="f_s_30 f_w_700 text_white"><a href="javascript:history.back()" class="back_button" title="Back"><i class="fa fa-arrow-left"></i></a> {{$title}}</h4>
            <!-- <ol class="breadcrumb page_bradcam mb-0">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ url('admin/magazine') }}">{{$title}}</a></li>
              <li class="breadcrumb-item active">{{$title}}</li>
            </ol> -->
          <div class="card-body">
            @if(Session::has('message'))
            <p class="alert alert-success"><span style="font-weight: 600;"> Success !! </span>{{ Session::get('message') }}</p>
            @endif
            <!-- <a href="#" class="white_btn3">Create Report</a> -->
            <!-- <h2 class="card-title text-center pb-5">Add Brand</h2> -->
            <form method="post" id="saveform" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <div class="col-md-12">
                  <label for="instagram" class="col-form-label w-100">Type</label>
                  <div>
                    <input type="radio" id="news" name="type" value="1" <?php if(isset($data->id)){ if($data->type==1){echo "checked"; }}else{ ?>checked<?php } ?> >
                    <label for="news" class="px-2">News</label>
                    <input type="radio" id="event" name="type" value="4" <?php if(isset($data->id)){ if($data->type==4){echo "checked"; }} ?>>
                    <label for="event" class="px-2">Event</label> 
                    <input type="radio" id="review" name="type" value="2" <?php if(isset($data->id)){ if($data->type==2){echo "checked"; }} ?>>
                    <label for="review" class="px-2">Review</label>
                    <input type="radio" id="video" name="type" value="3" <?php if(isset($data->id)){ if($data->type==3){echo "checked"; }} ?>>
                    <label for="video" class="px-2">Video</label>
                  </div>    
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="name" class="col-form-label">Heading (English)</label>
                  <input type="text" name="heading" class="form-control name" placeholder="Heading (English)" id="name" value="@if(isset($data->id)){{$data->heading}}@endif" required>
                  <div class="text-danger" id="name_error"></div>
                </div>
                <div class="col-md-6">
                  <label for="namear" class="col-form-label">Heading (Arabic)</label>
                  <input type="text" name="headingar" class="form-control namear" placeholder="Heading (Arabic)" id="namear" value="@if(isset($data->id)){{$data->heading_ar}}@endif" required>
                  <div class="text-danger" id="namear_error"></div>
                </div>                
              </div>
              <div class="row mb-3">                
                <div class="col-md-6">
                  <label for="postedBy" class="col-form-label">Created By (English)</label>
                  <input type="text" name="postedBy" class="form-control" placeholder="Created By (English)" id="postedBy" value="@if(isset($data->id)){{$data->postedBy}}@endif" required>               
                  <div class="text-danger" id="postedBy_error"></div>
                </div>
                <div class="col-md-6">
                  <label for="postedByar" class="col-form-label">Created By (Arabic)</label>
                  <input type="text" name="postedByar" class="form-control" placeholder="Created By (Arabic)" id="postedByar" value="@if(isset($data->id)){{$data->postedBy_ar}}@endif" required>               
                  <div class="text-danger" id="postedByar_error"></div>
                </div>
              </div>

              {{-- <div class="row mb-3">
                <div class="col-md-6">
                  <label for="sort_description" class="col-form-label">Sort Description (English)</label>
                  <textarea name="sort_description" id="sort_description" cols="30" rows="5" class="form-control" placeholder="Sort Description (English)">@if(isset($data->id)){{$data->sort_description}}@endif</textarea>
                  <div class="text-danger" id="sort_description_error"></div>
                </div>
                <div class="col-md-6">
                  <label for="sort_descriptionar" class="col-form-label">Sort Description (Arabic)</label>
                  <textarea name="sort_descriptionar" id="sort_descriptionar" cols="30" rows="5" class="form-control" placeholder="Sort Description (Arabic)">@if(isset($data->id)){{$data->sort_description_ar}}@endif</textarea>
                  <div class="text-danger" id="sort_descriptionar_error"></div>
                </div>
                
              </div> --}}
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="info" class="col-form-label">Description (English)</label>
                  <textarea name="info" id="info" cols="30" rows="5" class="form-control" placeholder="Description (English)">@if(isset($data->id)){{$data->description}}@endif</textarea>
                  <div class="text-danger" id="info_error"></div>
                </div>
                <div class="col-md-6">
                  <label for="infoar" class="col-form-label">Description (Arabic)</label>
                  <textarea name="infoar" id="infoar" cols="30" rows="5" class="form-control" placeholder="Description (Arabic)">@if(isset($data->id)){{$data->description_ar}}@endif</textarea>
                  <div class="text-danger" id="infoar_error"></div>
                </div>
              </div>           
              
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="postedDate" class="col-form-label">Start Date</label>
                  <input type="date" name="postedDate" class="form-control" placeholder="Created Date" id="postedDate" value="<?php if(isset($data->id)){echo $data->postedDate; } ?>" required>               
                  <div class="text-danger" id="start_date_error"></div>
                </div>
                <div class="col-md-6">
                  <label for="end_date" class="col-form-label">End Date</label>
                  <input type="date" name="end_date" class="form-control" placeholder="Created Date" id="end_date" value="<?php if(isset($data->id)){echo $data->end_date; } ?>" required>               
                  <div class="text-danger" id="end_date_error"></div>
                </div>
              </div>
              <!-- event -->
              <div class="event">
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="contact_number" class="col-form-label">Contact Number</label>
                    <input type="text" name="contact_number" class="form-control" placeholder="Contact Number" id="contact_number" value="<?php if(isset($data->id)){echo $data->contact_number; } ?>" required>               
                    <div class="text-danger" id="contact_number_error"></div>
                  </div>
                  <div class="col-md-6">
                    <label for="website" class="col-form-label">Website</label>
                    <input type="text" name="website" class="form-control" placeholder="Website" id="website" value="<?php if(isset($data->id)){echo $data->website; } ?>" required>               
                    <div class="text-danger" id="website_error"></div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-12">
                    <label for="address" class="col-form-label">Address</label>
                    <textarea name="address" id="address" class="form-control" placeholder="Address">@if(isset($data->id)){{$data->address}}@endif</textarea>             
                    <div class="text-danger" id="address_error"></div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="facebook" class="col-form-label">Facebook</label>
                    <input type="text" name="facebook" class="form-control" placeholder="Facebook" id="facebook" value="<?php if(isset($data->id)){echo $data->facebook; } ?>" required>               
                    <div class="text-danger" id="facebook_error"></div>
                  </div>
                  <div class="col-md-6">
                    <label for="instagram" class="col-form-label">Instagram</label>
                    <input type="text" name="instagram" class="form-control" placeholder="Instagram" id="instagram" value="<?php if(isset($data->id)){echo $data->instagram; } ?>" required>               
                    <div class="text-danger" id="instagram_error"></div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="linkedin" class="col-form-label">Linkedin</label>
                    <input type="text" name="linkedin" class="form-control" placeholder="Linkedin" id="linkedin" value="<?php if(isset($data->id)){echo $data->linkedin; } ?>" required>               
                    <div class="text-danger" id="linkedin_error"></div>
                  </div>
                  <div class="col-md-6">
                    <label for="twitter" class="col-form-label">Twitter</label>
                    <input type="text" name="twitter" class="form-control" placeholder="Twitter" id="twitter" value="<?php if(isset($data->id)){echo $data->twitter; } ?>" required>               
                    <div class="text-danger" id="twitter_error"></div>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="videourl" class="col-form-label">Video URL</label>
                  <input type="text" name="videourl" class="form-control videourl" placeholder="Video url" id="videourl" value="@if(isset($data->id)){{$data->videourl}}@endif" required>
                  <div class="text-danger" id="videourl_error"></div>
                </div>                
              </div>
              <div class="row mb-3">                
                <div class="col-md-6">
                  <label for="tag_name" class="col-form-label">Tag Name (English)</label>
                  <input type="text" name="tag_name" class="form-control" placeholder="Tag Name (English)" id="tag_name" value="@if(isset($data->id)){{$data->tag_name}}@endif" required>               
                  <div class="text-danger" id="tag_name_error"></div>
                </div>
                <div class="col-md-6">
                  <label for="tag_namear" class="col-form-label">Tag Name (Arabic)</label>
                  <input type="text" name="tag_namear" class="form-control" placeholder="Tag Name (Arabic)" id="tag_namear" value="@if(isset($data->id)){{$data->tag_name_ar}}@endif" required>               
                  <div class="text-danger" id="tag_namear_error"></div>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="images" class="col-form-label">Image</label>
                  <input type="file" name="images"class="form-control files mb-2" placeholder="images" id="images" accept=".jpeg, .jpg, .png, .gif">
                  <span class="text-danger"><b>Note : </b>Recommended size will be 3:2</span><br>
                  <div class="text-center">
                    <img id="previewImg" class="mt-2" src="<?php if(isset($data->id)){ echo url("public/images/".$data->image);}else{ ?>../public/img/image-preview.png<?php } ?>" alt="Placeholder" width="100px">
                  </div>
                  <div class="text-danger" id="image_error"></div>
                </div>
                <div class="col-md-6">
                  <label for="tag_icon" class="col-form-label">Tag Icon</label>
                  <input type="file" name="tag_icon" id="tag_icon" class="form-control file mb-2" placeholder="Logo" accept=".jpeg,.jpg,.png,.gif" >
                  <span class="text-danger"><b>Note : </b>Recommended size will be 1:1</span><br>
                  <div class="text-center">
                    <img id="previewImgtag" class="mt-2" src="<?php if(isset($data->id)){ if($data->tag_icon!=''){ echo url("public/images/".$data->tag_icon);}else{?> ../public/img/image-preview.png <?php }}else{ ?>../public/img/image-preview.png<?php } ?>" alt="Placeholder" width="100px">
                  </div>
                  <div class="text-danger" id="tag_icon_error"></div>
                </div>
              </div>

              <!-- event --> 

              {{-- <div class="row mb-3">
                <div class="col-md-2">
                  <label for="sponser_icon" class="col-form-label">Sponser Icon</label>
                </div>
                <div class="col-sm-10">
                  <input type="file" name="sponser_icon" id="sponserlogo" class="form-control file mb-2" placeholder="Logo" accept=".jpeg, .jpg, .png, .gif"  onchange="previewFilesponser(this,20,20);">
                  <span class="text-danger"><b>Note : </b>Dimension 20px * 20px</span><br>
                  <img id="previewImgsponser" class="mt-2" src="<?php if(isset($data->id)){ if($data->sponser_icon!=''){ echo url("public/images/".$data->sponser_icon);}else{?> ../public/img/image-preview.png <?php }}else{ ?>../public/img/image-preview.png<?php } ?>" alt="Placeholder" width="100px">
                  <div class="text-danger" id="sponser_error"></div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-2">
                  <label for="sponser_name" class="col-form-label">Sponser Name</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" name="sponser_name" class="form-control" placeholder="Sponser Name" id="sponser_name" value="@if(isset($data->id)){{$data->sponser_name}}@endif" required>               
                  <div class="text-danger" id="sponser_name_error"></div>
                </div>
              </div> --}}

              <div class="row">
                <div class="col-sm-12 text-center">
                  <input type="hidden" class="id" name="id" id="id" value="@if(isset($data->id)) {{$data->id}} @endif">
                  <button type="button" class="btn btn-primary submitdata">Submit</button>
                </div>
                <div class="alert alert-success text-center hide1"><span class="msg_success"></span></div>
                <div class="alert alert-danger text-center hide2"><span class="msg_danger"></span></div>
              </div>
            </form>
            <!-- End Horizontal Form -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  document.getElementById('images').addEventListener('change', function(event) {
      const file = event.target.files[0];
      if (!file) return;

      const img = new Image();
      const objectURL = URL.createObjectURL(file);
      img.src = objectURL;
      
      img.onload = function() {
        const width = img.naturalWidth;
        const height = img.naturalHeight;
        const aspectRatio = width / height;
        const validImageTypes = ['image/jpeg','image/jpg', 'image/png', 'image/gif'];
        if (!validImageTypes.includes(file.type)) {
          //messageDiv.textContent = 'Invalid file type. Please upload a JPEG, PNG, or GIF image.';
          //return;
          const fileInput = document.getElementById('images');
          fileInput.value = '';
          document.getElementById('image_error').textContent = "Invalid file type. Please upload a JPG, JPEG, PNG, or GIF image.";
          document.getElementById('previewImg').style.display = 'none';
          // Clean up if the ratio is invalid
          URL.revokeObjectURL(objectURL);
          imgfile="1";
        }else{
          document.getElementById('previewImg').src = objectURL;
          document.getElementById('previewImg').style.display = 'block';
          document.getElementById('image_error').style.display = 'none';
          imgfile="0";
        }
          // const width = img.naturalWidth;
          // const height = img.naturalHeight;
          // const aspectRatio = width / height;
          
          // // Define your desired aspect ratio
          // //const desiredAspectRatio = 16 / 9;
          // const desiredAspectRatio = 4 / 3;
          // const tolerance = 0.03;  // Adjust the tolerance as needed
          // console.log(Math.abs(aspectRatio - desiredAspectRatio));
          // if (Math.abs(aspectRatio - desiredAspectRatio) < tolerance) {
          //     //document.getElementById('message').textContent = 'Image aspect ratio is valid!';
          //     document.getElementById('previewImg').src = objectURL;
          //     document.getElementById('previewImg').style.display = 'block';
          //     document.getElementById('image_error').style.display = 'none';
          // } else {
          //   const fileInput = document.getElementById('images');
          //     fileInput.value = '';
          //     document.getElementById('image_error').textContent = `Invalid aspect ratio: ${aspectRatio.toFixed(2)}. Expected: ${desiredAspectRatio.toFixed(2)}`;
          //     document.getElementById('previewImg').style.display = 'none';
          //     // Clean up if the ratio is invalid
          //     URL.revokeObjectURL(objectURL);
          // }
      };

      img.onerror = function() {
          document.getElementById('image_error').textContent = 'Failed to load image.';
          document.getElementById('previewImg').style.display = 'none';
      };
  });
</script>
<script>
  document.getElementById('tag_icon').addEventListener('change', function(event) {
      const file = event.target.files[0];
      if (!file) return;

      const img = new Image();
      const objectURL = URL.createObjectURL(file);
      img.src = objectURL;
      
      img.onload = function() {
        const width = img.naturalWidth;
        const height = img.naturalHeight;
        const aspectRatio = width / height;
        const validImageTypes = ['image/jpeg','image/jpg', 'image/png', 'image/gif'];
        if (!validImageTypes.includes(file.type)) {
          //messageDiv.textContent = 'Invalid file type. Please upload a JPEG, PNG, or GIF image.';
          //return;
          const fileInput = document.getElementById('tag_icon');
          fileInput.value = '';
          document.getElementById('tag_icon_error').textContent = "Invalid file type. Please upload a JPG, JPEG, PNG, or GIF image.";
          document.getElementById('previewImgtag').style.display = 'none';
          // Clean up if the ratio is invalid
          URL.revokeObjectURL(objectURL);
          imgfile="1";
        }else{
          document.getElementById('previewImgtag').src = objectURL;
          document.getElementById('previewImgtag').style.display = 'block';
          document.getElementById('tag_icon_error').style.display = 'none';
          imgfile="0";
        }
          // const width = img.naturalWidth;
          // const height = img.naturalHeight;
          // const aspectRatio = width / height;
          
          // // Define your desired aspect ratio
          // //const desiredAspectRatio = 16 / 9;
          // const desiredAspectRatio = 4 / 3;
          // const tolerance = 0.03;  // Adjust the tolerance as needed
          // console.log(Math.abs(aspectRatio - desiredAspectRatio));
          // if (Math.abs(aspectRatio - desiredAspectRatio) < tolerance) {
          //     //document.getElementById('message').textContent = 'Image aspect ratio is valid!';
          //     document.getElementById('previewImgtag').src = objectURL;
          //     document.getElementById('previewImgtag').style.display = 'block';
          //     document.getElementById('tag_icon_error').style.display = 'none';
          // } else {
          //   const fileInput = document.getElementById('tag_icon');
          //     fileInput.value = '';
          //     document.getElementById('tag_icon_error').textContent = `Invalid aspect ratio: ${aspectRatio.toFixed(2)}. Expected: ${desiredAspectRatio.toFixed(2)}`;
          //     document.getElementById('previewImgtag').style.display = 'none';
          //     // Clean up if the ratio is invalid
          //     URL.revokeObjectURL(objectURL);
          // }
      };

      img.onerror = function() {
          document.getElementById('tag_icon_error').textContent = 'Failed to load image.';
          document.getElementById('previewImgtag').style.display = 'none';
      };
  });
</script>
<script>
  $('input[type=radio][name=type]').change(function() {
    if (this.value == '4') {
      $('.event').css('display','block');
    }else{
      $('.event').css('display','none');
    }
  });
</script>
<script>
    $('.submitdata').click(function(){
      var name  = $('#name').val();
      var images  = $('#images').val();
      var videourl  = $('#videourl').val();
      var info  = $('#info').val();
      var postedBy  = $('#postedBy').val();
      var postedDate  = $('#postedDate').val();
      var start_date = new Date($('#postedDate').val());
      var end_date = new Date($('#end_date').val());
      var id  = $('#id').val();
      if(!name){
        $('#name_error').text("The field is required."); 
        return false;     
      }
      if(!info){
        $('#name_error').text(""); 
        $('#info_error').text("The field is required."); 
        return false;     
      }
      if(!postedBy){
        $('#name_error').text(""); 
        $('#info_error').text(""); 
        $('#postedBy_error').text("The field is required."); 
        return false;     
      }
      if(!postedDate){
        $('#name_error').text(""); 
        $('#info_error').text(""); 
        $('#postedBy_error').text(""); 
        $('#postedDate_error').text("The field is required."); 
        return false;     
      } 
      if(end_date!=''){
        if(new Date(start_date) > new Date(end_date)){
          $('#start_date_error').text("Start Date must be less then Expiry Date");
          return false;
        }
        //return false;
      }    
      $.ajax({
          type:'POST',
          url:'{{url("/admin/insert_magazine")}}',
          data  :new FormData( $("#saveform")[0] ),
          async   : false,
          cache   : false,
          contentType : false,
          processData : false,
          success:function(data){
            console.log(data);
            if($.trim(data)=="1"){
            $('.hide1').css('display','block');
            $('.msg_success').text("Sucessfully submitted");
            $(".alert-success").show('slow' , 'linear').delay(4000).fadeOut(function(){
                window.location.href="{{URL::to('/admin/magazine')}}";
            });

            }
            if($.trim(data)=="2"){
            $('.hide2').css('display','block');
            $('.msg_danger').text("Name already exist");
            $(".alert-danger").show('slow' , 'linear').delay(4000).fadeOut();

            }
          }
          
      });
       
    })



</script>


@include('admin.includes.footer')