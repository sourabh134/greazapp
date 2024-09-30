
@include('admin.includes.header')
<?php 
  if(isset($banner)){ 
    if($banner->internal_external==1){
?>
<style>
  .inetrnalpage{
    display: none;
  }
  .externalpage{
    display: block;
  }
</style>
<?php     
    }else{
?>
<style>
  .inetrnalpage{
    display: block;
  }
  .externalpage{
    display: none;
  }
</style>
<?php
    }
  }else{
?>
<style>
  .inetrnalpage{
    display: none;
  }
</style>
<?php } ?>

<div class="main_content_iner overly_inner ">
  <div class="container-fluid p-0 ">
    <div class="row">
      <div class="col-md-10">
      
        <h4 class="f_s_30 f_w_700 text_white mb-4"><a href="javascript:history.back()" class="back_button" title="Back"><i class="fa fa-arrow-left"></i></a> <?php if(isset($banner)){ echo "Update"; }else{ echo "Add"; } ?> Banner</h4>
            <!-- <ol class="breadcrumb page_bradcam mb-0">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ url('admin/banners') }}">Banners</a></li>
              <li class="breadcrumb-item active"><?php if(isset($banner)){ echo "Update"; }else{ echo "Add"; } ?> Banner</li>
            </ol> -->

        <div class="card p-4">
          <div class="card-body">
            <!-- @if(Session::has('message'))
            <p class="alert alert-success"><span style="font-weight: 600;"> Success !! </span>{{ Session::get('message') }}</p>
            @endif -->
            <p class="alert alert-success" style="display:none" id="msg"></p>
            
            <!-- <a href="#" class="white_btn3">Create Report</a>style="border: 1px solid #d7d7d7;" -->
          
            <!-- <h2 class="card-title text-center pb-5"><?php if(isset($banner)){ echo "Update"; }else{ echo "Add"; } ?> Banner</h2> -->
            <form id="formData" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <div class="col-sm-6">
                  <label for="name" class="col-form-label">Name (English)</label>
                  <input type="text" name="name" class="form-control" placeholder="Name (English)" id="name" value="<?php if(isset($banner)){ echo $banner->name; } ?>">
                  <div class="text-danger" id="name_error"></div>
                </div>
             
                <div class="col-sm-6">
                  <label for="namear" class="col-form-label">Name (Arabic)</label>
                  <input type="text" name="namear" class="form-control" placeholder="Name (Arabic)" id="namear" value="<?php if(isset($banner)){ echo $banner->name_ar; } ?>">
                  <div class="text-danger" id="namear_error"></div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-12">
                  {{-- radio button --}}
                  <div class="form-check form-check-inline">
                    <input class="form-check-inputs" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" <?php if(isset($banner)){ if($banner->internal_external==1){ echo"checked"; } }else{ echo"checked"; } ?> >
                    <label class="form-check-label" for="inlineRadio1">External URL</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-inputs" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2" <?php if(isset($banner)){ if($banner->internal_external==2){ echo"checked"; } } ?>>
                    <label class="form-check-label" for="inlineRadio2">Internal Page</label>
                  </div>
                </div>
              </div>
              <div class="row mb-3 externalpage">
                <div class="col-sm-12">
                  <label for="url" class="col-form-label">URL</label>
                    <input type="url" name="url" class="form-control" placeholder="URL" id="url" value="<?php if(isset($banner)){ if($banner->internal_external==2){echo "";}else{echo $banner->url;} } ?>">
                    <div class="text-danger" id="url_error"></div>
                </div>
              </div>
              {{-- page --}}
              <div class="row mb-3 inetrnalpage">
                <div class="col-sm-12">
                  <label for="url" class="col-form-label">Page</label>
                  <Select class="form-select" name="page" id="page">
                    <option value="">Choose</option>
                    @foreach($InternalAppPage as $page)
                    <option <?php if(isset($banner)){ if($banner->internal_external==2){ if($banner->url==$page->id){ echo"Selected"; } } } ?> value="{{$page->id}}">{{$page->name}}</option>
                    @endforeach

                  </Select>
                </div>
              </div>
              {{-- page --}}

              <div class="row mb-3">
                <div class="col-sm-6">
                  <label for="start_date" class="col-form-label">Start Date</label>
                  <input type="date" name="start_date" class="form-control" id="start_date" min="<?=date('Y-m-d')?>" value="<?php if(isset($banner)){ echo $banner->start_date; }else{ echo date('Y-m-d'); } ?>">
                  <div class="text-danger" id="start_date_error"></div>
                </div>
              
                <div class="col-sm-6">
                  <label for="end_date" class="col-form-label">Expiry Date</label>
                  <input type="date" name="end_date" class="form-control" id="end_date" min="<?=date('Y-m-d', strtotime(date('Y-m-d') . ' +1 day'))?>" value="<?php if(isset($banner)){ echo $banner->end_date; }else{ echo date('Y-m-d', strtotime(date('Y-m-d') . ' +1 day')); } ?>">
                  <div class="text-danger" id="end_date_error"></div>
                </div>
              </div>
              
              <div class="row mb-3">
                <div class="col-sm-12">
                  <label for="image" class="col-form-label">Upload Image</label>
                  <input type="file" id="imageInput" name="image" accept="image/*" class="form-control mb-2">
                  <span class="text-danger"><b>Note : </b>Image ratio must be 4:3</span><br>
                  <p class="text-danger" id="message"></p>
                  <img id="preview" src="<?php if(isset($banner)){ echo url("public/img/banners/".$banner->image);}else{ ?>../public/img/image-preview.png<?php } ?>" style="max-width: 100%;">
                  <?php if(isset($banner)){ ?>
                    <input type="hidden" name="banner_id" id="banner_id" value="{{ $banner->id }}">
                    <input type="hidden" name="pre_image" value="{{ $banner->image }}">
                  <!-- <img src="{{ url('public/img/banners') }}/{{ $banner->image }}" alt="Banner Image" width="150" height="100"> -->
                  <?php }else{ ?>
                    <input type="hidden" name="banner_id" id="banner_id" value="">
                  <?php } ?>                  
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12 text-center">
                  <button type="button" onclick="get_form_data()" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $('input[type=radio][name=inlineRadioOptions]').change(function() {
    if (this.value == '1') {
        $('.externalpage').css('display','block');
        $('.inetrnalpage').css('display','none');
    }
    else if (this.value == '2') {
      $('.externalpage').css('display','none');
      $('.inetrnalpage').css('display','block');
    }
});
</script>
<script>
  var imgfile = "0";
  document.getElementById('imageInput').addEventListener('change', function(event) {
      const file = event.target.files[0];
      if (!file) return;

      const img = new Image();
      const objectURL = URL.createObjectURL(file);
      img.src = objectURL;
      
      img.onload = function() {
          const width = img.naturalWidth;
          const height = img.naturalHeight;
          const aspectRatio = width / height;
          
          // Define your desired aspect ratio
          //const desiredAspectRatio = 16 / 9;
          const desiredAspectRatio = 4 / 3;
          const tolerance = 0.03;  // Adjust the tolerance as needed
          console.log(Math.abs(aspectRatio - desiredAspectRatio));
          if (Math.abs(aspectRatio - desiredAspectRatio) < tolerance) {
              //document.getElementById('message').textContent = 'Image aspect ratio is valid!';
              document.getElementById('preview').src = objectURL;
              document.getElementById('preview').style.display = 'block';
              document.getElementById('message').style.display = 'none';
              imgfile="0";
          } else {
              const fileInput = document.getElementById('imageInput');
              fileInput.value = '';
              document.getElementById('message').textContent = `Invalid aspect ratio: ${aspectRatio.toFixed(2)}. Expected: ${desiredAspectRatio.toFixed(2)}`;
              document.getElementById('preview').style.display = 'none';
              // Clean up if the ratio is invalid
              URL.revokeObjectURL(objectURL);
              imgfile="1";
          }
      };

      img.onerror = function() {
          document.getElementById('message').textContent = 'Failed to load image.';
          document.getElementById('preview').style.display = 'none';
      };
  });
</script>
<script>
  function get_form_data(){
    var banner_id = $('#banner_id').val();
    var name = $('#name').val();
    var namear = $('#namear').val();
    var image = $('#imageInput').val();
    var url = $('#url').val();
    var start_date = new Date($('#start_date').val());
    var end_date = new Date($('#end_date').val());
    
    if(!name){
      $('#name_error').text("The name field is required."); 
      return false;     
    }
    if(!namear){
      $('#name_error').text("");
      $('#namear_error').text("The name field is required."); 
      return false;     
    }
    if(banner_id==''){
      if(!image){
        $('#name_error').text("");
        $('#namear_error').text("");
        $('#message').text("The image field is required.");
        return false;
      }
    }else if(imgfile=="1"){
        $('#name_error').text("");
        $('#namear_error').text("");
        $('#message').text("The image field is required.");
        return false;
    }
    
    if(url!=''){
      if(!url.match(/^(?:(?:http|https|ftp):\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-._~:/?#[\]@!$&'()*+,;=%]+$/)){
        $('#url_error').text("Please enter valid URL");
        return false;
      }
    }
    if(new Date(start_date) > new Date(end_date)){
      $('#start_date_error').text("Start Date must be less then Expiry Date");
      return false;
    } 
    //alert(banner_id);
    $('#url_error').text("");
    $('#start_date_error').text("");     
    $.ajax({  
      type:"POST",
      url:"{{url('admin/insertBanner')}}",
      data:new FormData( $("#formData")[0]),
      async : false,
      contentType : false,
      cache : false,
      processData: false,
      success:function(data)
      {
        console.log(data);
        if($.trim(data)=="update")
        { 
          $(window).scrollTop(0);
          $('#msg').show();
          $("#msg").html('<span style="font-weight: 600;"> Success !! </span> Banner updated successfully.');
          $('#image_error').html('');
          $('#name_error').html('');
          $('#start_date_error').html('');
          $('#end_date_error').html('');
          setTimeout(() => {
            window.location.href = "<?php echo url('admin/banners'); ?>";
          }, 5000);
        }
        else if($.trim(data)=="add")
        {
          $(window).scrollTop(0);
          $('#msg').show();
          $("#msg").html('<span style="font-weight: 600;"> Success !! </span> Banner added successfully.');
          $('#formData')[0].reset();
          $('#image_error').html('');
          $('#name_error').html('');
          $('#start_date_error').html('');
          $('#end_date_error').html('');
          setTimeout(() => {
            window.location.href = "<?php echo url('admin/banners'); ?>";
          }, 5000);
        }else{
          var obj=JSON.parse(data);
          if(obj.image){
            $('#image_error').html(obj.image);
            $('#name_error').html('');
            $('#start_date_error').html('');
            $('#end_date_error').html('');
          }else if(obj.name){
            $('#image_error').html('');
            $('#name_error').html(obj.name);
            $('#start_date_error').html('');
            $('#end_date_error').html('');
          }else if(obj.start_date){
            $('#image_error').html('');
            $('#name_error').html('');
            $('#start_date_error').html(obj.start_date);
            $('#end_date_error').html('');
          }else if(obj.end_date){
            $('#image_error').html('');
            $('#name_error').html('');
            $('#start_date_error').html('');
            $('#end_date_error').html(obj.end_date);
          }
        }
      }  
      
    });
 // }
  }
</script>

@include('admin.includes.footer')