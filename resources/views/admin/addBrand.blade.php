
@include('admin.includes.header')
<style>
  .img-div {
    position: relative;
    /* width: 46%; */
    float:left;
    margin-right:5px;
    margin-left:5px;
    margin-bottom:10px;
    margin-top:10px;
}

.image {
    opacity: 1;
    display: block;
    width: 100%;
    max-width: auto;
    transition: .5s ease;
    backface-visibility: hidden;
}

.middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
}

.img-div:hover .image {
    opacity: 0.3;
}

.img-div:hover .middle {
    opacity: 1;
}
</style>

<div class="main_content_iner overly_inner ">
  <div class="container-fluid p-0 ">
    <div class="row">
      <div class="col-md-10">
        <h4 class="f_s_30 f_w_700 text_white mb-4"><a href="javascript:history.back()" class="back_button" title="Back"><i class="fa fa-arrow-left"></i></a> Add Brand</h4>
            <!-- <ol class="breadcrumb page_bradcam mb-0">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ url('admin/brands') }}">Brands</a></li>
              <li class="breadcrumb-item active">Add Brand</li>
            </ol> -->
          
        <div class="card p-4">
          <div class="card-body">
            @if(Session::has('message'))
            <p class="alert alert-success"><span style="font-weight: 600;"> Success !! </span>{{ Session::get('message') }}</p>
            @endif
            <!-- <a href="#" class="white_btn3">Create Report</a> -->
            <!-- <h2 class="card-title text-center pb-5">Add Brand</h2> -->
            <form method="post" id="saveform" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="name" class="col-form-label">Brand Name (English)</label>
                  <input type="text" name="name" class="form-control name" placeholder="Brand Name (English)" id="name" value="@if(isset($data->id)){{$data->name}}@endif" required>
                  <div class="text-danger" id="name_error"></div>
                </div>
                <div class="col-md-6">
                  <label for="namear" class="col-form-label">Brand Name (Arabic)</label>
                  <input type="text" name="namear" class="form-control namear" placeholder="Brand Name (Arabic)" id="namear" value="@if(isset($data->id)){{$data->name_ar}}@endif" required>
                  <div class="text-danger" id="namear_error"></div>
                </div>
              </div>
              <div class="row mb-3">                
                <div class="col-md-6">
                  <label for="category" class="col-form-label">Category</label>
                  <select name="category" id="category" class="form-select">
                    <option value="">Choose</option>
                    @foreach($category as $cvalue)
                      <option <?php if(isset($data->id)){ if($data->categoryID == $cvalue->id){ echo"Selected"; }} ?> value="{{$cvalue->id}}">{{$cvalue->name}}</option>
                    @endforeach                      
                  </select>
                  <div class="text-danger" id="category_error"></div>
                </div>
                <div class="col-md-6">
                  <label for="logo" class="col-form-label">Logo</label>
                  <input type="file" name="image" id="logo" class="form-control file mb-2" placeholder="Logo" accept=".jpeg, .jpg, .png,.gif">
                  {{-- <span class="text-danger"><b>Note : </b>Image ratio must be 4:3</span><br> --}}
                  <img id="previewImg" class="mt-2" src="<?php if(isset($data->id)){ if($data->logo!=''){ echo url("public/images/".$data->logo);}else{?> ../public/img/image-preview.png <?php }}else{ ?>../public/img/image-preview.png<?php } ?>" alt="Placeholder" width="100px">
                  <div class="text-danger" id="image_error"></div>
                </div>
              </div>
              
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="info" class="col-form-label">Description (English)</label>
                  <textarea name="info" id="info" cols="30" rows="5" class="form-control" placeholder="Description (English)">@if(isset($data->id)){{$data->description}}@endif</textarea>
                </div>
                <div class="col-md-6">
                  <label for="infoar" class="col-form-label">Description (Arabic)</label>
                  <textarea name="infoar" id="infoar" cols="30" rows="5" class="form-control" placeholder="Description (Arabic)">@if(isset($data->id)){{$data->description_ar}}@endif</textarea>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="website" class="col-form-label">Website</label>
                  <input type="text" name="website" class="form-control" placeholder="Website" id="website" value="@if(isset($data->id)){{$data->website}}@endif" required>               
                  <div class="text-danger" id="website_error"></div>
                </div>
                <div class="col-md-6">
                  <label for="youtube" class="col-form-label">Youtube</label>
                  <input type="text" name="youtube" class="form-control" placeholder="Youtube" id="youtube" value="@if(isset($data->id)){{$data->youtube}}@endif" required>               
                  <div class="text-danger" id="youtube_error"></div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="twitter" class="col-form-label">Twitter</label>
                  <input type="text" name="twitter" class="form-control" placeholder="Twitter" id="twitter" value="@if(isset($data->id)){{$data->twitter}}@endif" required>               
                  <div class="text-danger" id="twitter_error"></div>
                </div>
                <div class="col-md-6">
                  <label for="linkedin" class="col-form-label">Linkedin</label>
                  <input type="text" name="linkedin" class="form-control" placeholder="Linkedin" id="linkedin" value="@if(isset($data->id)){{$data->linkedin}}@endif" required>               
                  <div class="text-danger" id="linkedin_error"></div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="facebook" class="col-form-label">Facebook</label>
                  <input type="text" name="facebook" class="form-control" placeholder="Facebook" id="facebook" value="@if(isset($data->id)){{$data->facebook}}@endif" required>               
                  <div class="text-danger" id="facebook_error"></div>
                </div>
                <div class="col-md-6">
                  <label for="instagram" class="col-form-label">Instagram</label>
                  <input type="text" name="instagram" class="form-control" placeholder="Instagram" id="instagram" value="@if(isset($data->id)){{$data->instagram}}@endif" required>               
                  <div class="text-danger" id="instagram_error"></div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="sponser_name" class="col-form-label">Sponser Name (English)</label>
                  <input type="text" name="sponser_name" class="form-control" placeholder="Sponser Name (English)" id="sponser_name" value="@if(isset($data->id)){{$data->sponser_name}}@endif" required>               
                  <div class="text-danger" id="sponser_name_error"></div>
                </div>
                <div class="col-md-6">
                  <label for="tag_name" class="col-form-label">Tag Name (English)</label>
                  <input type="text" name="tag_name" class="form-control" placeholder="Tag Name (English)" id="tag_name" value="@if(isset($data->id)){{$data->tag_name}}@endif" required>               
                  <div class="text-danger" id="tag_name_error"></div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="sponser_namear" class="col-form-label">Sponser Name (Arabic)</label>
                  <input type="text" name="sponser_namear" class="form-control" placeholder="Sponser Name (Arabic)" id="sponser_namear" value="@if(isset($data->id)){{$data->sponser_name_ar}}@endif" required>               
                  <div class="text-danger" id="sponser_name_error"></div>
                </div>
                <div class="col-md-6">
                  <label for="tag_namear" class="col-form-label">Tag Name (Arabic)</label>
                  <input type="text" name="tag_namear" class="form-control" placeholder="Tag Name (Arabic)" id="tag_namear" value="@if(isset($data->id)){{$data->tag_name_ar}}@endif" required>               
                  <div class="text-danger" id="tag_namear_error"></div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="sponser_icon" class="col-form-label">Sponser Icon</label>
                  <input type="file" name="sponser_icon" id="sponserlogo" class="form-control file mb-2" placeholder="Logo" accept=".jpeg, .jpg, .png, .gif">
                  {{-- <span class="text-danger"><b>Note : </b>Image ratio must be 4:3</span><br> --}}
                  <img id="previewImgsponser" class="mt-2" src="<?php if(isset($data->id)){ if($data->sponser_icon!=''){ echo url("public/images/".$data->sponser_icon);}else{?> ../public/img/image-preview.png <?php }}else{ ?>../public/img/image-preview.png<?php } ?>" alt="Placeholder" width="100px">
                  <div class="text-danger" id="sponser_error"></div>
                </div>
                <div class="col-md-6">
                  <label for="tag_icon" class="col-form-label">Tag Icon</label>
                  <input type="file" name="tag_icon" id="tag_icon" class="form-control file mb-2" placeholder="Logo" accept=".jpeg,.jpg,.png,.gif">
                  {{-- <span class="text-danger"><b>Note : </b>Image ratio must be 4:3</span><br> --}}
                  <img id="previewImgtag" class="mt-2" src="<?php if(isset($data->id)){ if($data->tag_icon!=''){ echo url("public/images/".$data->tag_icon);}else{?> ../public/img/image-preview.png <?php }}else{ ?>../public/img/image-preview.png<?php } ?>" alt="Placeholder" width="100px">
                  <div class="text-danger" id="tag_icon_error"></div>
                </div> 
              </div>
              <div class="row mb-3">
                <div class="form-group">
                  <label for="images">Banner Images</label>
                  <input type="file" name="images[]" id="images" multiple class="form-control" accept=".jpeg, .jpg, .png,.gif">
                </div>
                <div class="form-group">
                  <?php if(isset($data->id)){
                    foreach($brandbanner as $bannervalue){
                  ?>

                    <div class='img-div' id='img-div"+i+"'>
                      <img src='{{url('public/images/'.$bannervalue->image)}}' class='img-responsive image img-thumbnail' title=''>
                      <div class='middle'>
                        <button id='action-icon' class='btn' type="button" onclick="bannerimagedelete({{$bannervalue->id}})"><i class='fa fa-trash'></i></button>
                      </div>
                    </div>

                  <?php } } ?>
                  <div id="image_preview" style="width:100%;">
                  </div>
                </div>
              </div>            

              
              <div class="row mt-5">
                <div class="col-sm-12 text-center">
                  <input type="hidden" class="id" name="id" id="id" value="@if(isset($data->id)){{$data->id}}@endif">
                  <button type="button" class="btn btn-primary submitdata">Submit</button>
                </div>
                <div class="alert alert-success text-center hide1"><span class="msg_success"></span></div>
                <div class="alert alert-danger text-center hide2"><span class="msg_danger"></span></div>
              </div>
            </form><!-- End Horizontal Form -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  var imgfile = "0";
  document.getElementById('logo').addEventListener('change', function(event) {
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
          const fileInput = document.getElementById('logo');
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
          //     imgfile="0";
          // } else {
          //     const fileInput = document.getElementById('logo');
          //     fileInput.value = '';
          //     document.getElementById('image_error').textContent = `Invalid aspect ratio: ${aspectRatio.toFixed(2)}. Expected: ${desiredAspectRatio.toFixed(2)}`;
          //     document.getElementById('previewImg').style.display = 'none';
          //     // Clean up if the ratio is invalid
          //     URL.revokeObjectURL(objectURL);
          //     imgfile="1";
          // }
      };

      img.onerror = function() {
          document.getElementById('image_error').textContent = 'Failed to load image.';
          document.getElementById('previewImg').style.display = 'none';
      };
  });
</script>
<script>
  document.getElementById('sponserlogo').addEventListener('change', function(event) {
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
          const fileInput = document.getElementById('sponserlogo');
          fileInput.value = '';
          document.getElementById('sponser_error').textContent = "Invalid file type. Please upload a JPG, JPEG, PNG, or GIF image.";
          document.getElementById('previewImgsponser').style.display = 'none';
          // Clean up if the ratio is invalid
          URL.revokeObjectURL(objectURL);
          imgfile="1";
        }else{
          document.getElementById('previewImgsponser').src = objectURL;
          document.getElementById('previewImgsponser').style.display = 'block';
          document.getElementById('sponser_error').style.display = 'none';
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
          //     document.getElementById('previewImgsponser').src = objectURL;
          //     document.getElementById('previewImgsponser').style.display = 'block';
          // } else {
          //     const fileInput = document.getElementById('sponserlogo');
          //     fileInput.value = '';
          //     document.getElementById('sponser_error').textContent = `Invalid aspect ratio: ${aspectRatio.toFixed(2)}. Expected: ${desiredAspectRatio.toFixed(2)}`;
          //     document.getElementById('previewImgsponser').style.display = 'none';
          //     // Clean up if the ratio is invalid
          //     URL.revokeObjectURL(objectURL);
          // }
      };

      img.onerror = function() {
          document.getElementById('sponser_error').textContent = 'Failed to load image.';
          document.getElementById('previewImgsponser').style.display = 'none';
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
          // } else {
          //     const fileInput = document.getElementById('tag_icon');
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
  $(document).ready(function() {
  var fileArr = [];
   $("#images").change(function(){
      // check if fileArr length is greater than 0
       if (fileArr.length > 0) fileArr = [];
     
        $('#image_preview').html("");
        var total_file = document.getElementById("images").files;
        if (!total_file.length) return;
        for (var i = 0; i < total_file.length; i++) {
          if (total_file[i].size > 1048576) {
            return false;
          } else {
            fileArr.push(total_file[i]);
            $('#image_preview').append("<div class='img-div' id='img-div"+i+"'><img src='"+URL.createObjectURL(event.target.files[i])+"' class='img-responsive image img-thumbnail' title='"+total_file[i].name+"'><div class='middle'><button id='action-icon' value='img-div"+i+"' class='btn' role='"+total_file[i].name+"'><i class='fa fa-trash'></i></button></div></div>");
          }
        }
   });
  
  $('body').on('click', '#action-icon', function(evt){
      var divName = this.value;
      var fileName = $(this).attr('role');
      $(`#${divName}`).remove();
    
      for (var i = 0; i < fileArr.length; i++) {
        if (fileArr[i].name === fileName) {
          fileArr.splice(i, 1);
        }
      }
    document.getElementById('images').files = FileListItem(fileArr);
      evt.preventDefault();
  });
  
   function FileListItem(file) {
            file = [].slice.call(Array.isArray(file) ? file : arguments)
            for (var c, b = c = file.length, d = !0; b-- && d;) d = file[b] instanceof File
            if (!d) throw new TypeError("expected argument to FileList is File or array of File objects")
            for (b = (new ClipboardEvent("")).clipboardData || new DataTransfer; c--;) b.items.add(file[c])
            return b.files
        }
});
</script>
<script>
    $('.submitdata').click(function(){
        var name  = $('#name').val();        
        var category  = $('#category').val();        
        var logo  = $('#logo').val();      
        var website  = $('#website').val();   
        var youtube  = $('#youtube').val();   
        var twitter  = $('#twitter').val();   
        var linkedin  = $('#linkedin').val();   
        var facebook  = $('#facebook').val();   
        var instagram  = $('#instagram').val();
        var id  = $('#id').val();
        if(!name){
          $('#name_error').text("The name field is required."); 
          return false;     
        }
        if(!category){
          $('#name_error').text("");
          $('#category_error').text("The category field is required."); 
          return false;     
        }
        if(id==''){
          if(!logo){
            $('#name_error').text("");
            $('#category_error').text("");
            $('#image_error').text("The image field is required.");
            return false;
          }
        }else if(imgfile =="1"){
          $('#name_error').text("");
          $('#category_error').text("");
          $('#image_error').text("The image field is required.");
          return false;
        }
        if(website!=''){
          if(!website.match(/^(?:(?:http|https|ftp):\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-._~:/?#[\]@!$&'()*+,;=%]+$/)){
            $('#website_error').text("Please enter valid URL");
            return false;
          }
        }
        if(youtube!=''){
          if(!youtube.match(/^(?:(?:http|https|ftp):\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-._~:/?#[\]@!$&'()*+,;=%]+$/)){
            $('#youtube_error').text("Please enter valid URL");
            return false;
          }
        }
        if(twitter!=''){
          if(!twitter.match(/^(?:(?:http|https|ftp):\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-._~:/?#[\]@!$&'()*+,;=%]+$/)){
            $('#twitter_error').text("Please enter valid URL");
            return false;
          }
        }
        if(linkedin!=''){
          if(!linkedin.match(/^(?:(?:http|https|ftp):\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-._~:/?#[\]@!$&'()*+,;=%]+$/)){
            $('#linkedin_error').text("Please enter valid URL");
            return false;
          }
        }
        if(facebook!=''){
          if(!facebook.match(/^(?:(?:http|https|ftp):\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-._~:/?#[\]@!$&'()*+,;=%]+$/)){
            $('#facebook_error').text("Please enter valid URL");
            return false;
          }
        }
        if(instagram!=''){
          if(!instagram.match(/^(?:(?:http|https|ftp):\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-._~:/?#[\]@!$&'()*+,;=%]+$/)){
            $('#instagram_error').text("Please enter valid URL");
            return false;
          }
        }
        
            $.ajax({
                type:'POST',
                url:'{{url("/admin/insert_brand")}}',
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
                      window.location.href="{{URL::to('/admin/brands')}}";
                  });

                  }
                  if($.trim(data)=="2"){
                  $('.hide2').css('display','block');
                  $('.msg_danger').text("Name already exist");
                  $(".alert-danger").show('slow' , 'linear').delay(4000).fadeOut();

                  }
                  if ($.trim(data) == "3") {           
                    $('#image_error').text("Invalid image dimensions must be 40px X 40px");

                  }
                }
                
            });
       
    })
</script>
<script>
  function bannerimagedelete(th){
    var id = th;
    var token = "<?=csrf_token()?>";
    $.ajax({
        type:'POST',
        url:'{{url("/admin/deleteimage")}}',
        data  :{id:id,_token:token},
        success:function(data){
          console.log(data);
          if($.trim(data)=="1"){
            location.reload();
          }          
        }
        
    });
  }
</script>

@include('admin.includes.footer')