@include('admin.includes.header')
<style>
    .brand {
        display: none;
    }
    .age {
        display: none;
    }
    .gender {
        display: none;
    }
    .city {
        display: none;
    }
    .statecity {
        display: none;
    }
    .sponseradvice {
        display: none;
    }
    .select2-container {
        display: block !important;
    }
</style>
<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <div class="row">
            <div class="col-md-10">
                <h4 class="f_s_30 f_w_700 text_white mb-4"><a href="javascript:history.back()" class="back_button"
                        title="Back"><i class="fa fa-arrow-left"></i></a> {{ $title }}</h4>
                <!-- <ol class="breadcrumb page_bradcam mb-0">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ url('admin/notification') }}">{{ $title }}</a></li>
              <li class="breadcrumb-item active">{{ $title }}</li>
            </ol> -->
                <div class="card p-4">
                    @if (Session::has('message'))
                        <p class="alert alert-success"><span style="font-weight: 600;"> Success !!
                            </span>{{ Session::get('message') }}</p>
                    @endif
                    <!-- <a href="#" class="white_btn3">Create Report</a> -->
                    <div class="card-body">
                        <!-- <h2 class="card-title text-center pb-5">Add Brand</h2> -->
                        <form method="post" id="saveform" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="advicetype" class=" col-form-label">Advice Type</label>
                                    <select name="advicetype" id="advicetype" class="form-select">
                                        <option value="1">General Advice</option>
                                        <option value="2">Sponser Advice</option>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="row ui sponseradvice">
                                <div class="col-sm-6">
                                    <label for="usertype" class=" col-form-label">Users Type</label>
                                    <select name="usertype" id="usertype" class="form-select">
                                        <option value="1">All user</option>
                                        <option value="2">User Model</option>
                                        <option value="3">User Age</option>
                                        <option value="4">User Gender</option>
                                        <option value="5">User City</option>

                                    </select>
                                    <div class="text-danger" id="usertype_error"></div>
                                </div>
                                <div class="col-sm-6 brand">
                                    <label for="brand" class=" col-form-label">Brand</label>
                                    <select name="brand" id="brand" class="form-select">
                                        <option value="">Choose</option>                                        
                                        @foreach ($brand as $val)
                                            <option value="{{ $val->id }}">{{ $val->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger" id="brand_error"></div>
                                </div>
                                {{-- age --}}
                                <div class="col-sm-6 age">
                                    <label for="age" class=" col-form-label">Age</label>
                                    <input type="number" name="age" id="age" class="form-control">
                                    <div class="text-danger" id="age_error"></div>
                                </div>
                                {{-- gender --}}
                                <div class="col-sm-6 gender">
                                    <label for="gender" class="col-form-label">Gender</label>
                                    <select name="gender" id="gender" class="form-select">
                                        <option value="">Choose</option>                                        
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Other</option>
                                    </select>
                                    <div class="text-danger" id="gender_error"></div>
                                </div>
                                {{-- city --}}
                                <div class="col-sm-6 city">
                                    <label for="country" class=" col-form-label">Country</label>
                                    <select name="country" id="country" class="form-select">
                                        <option value="">Choose</option>                                        
                                        @foreach($country as $countryvalue)
                                            <option value="{{$countryvalue->id}}">{{$countryvalue->name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger" id="country_error"></div>
                                </div>

                            </div>
                            <div class="row ui statecity">
                                <div class="col-sm-6">
                                    <label for="state" class=" col-form-label">State</label>
                                    <select name="state" id="state" class="form-select">
                                    </select>
                                    <div class="text-danger" id="state_error"></div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="city" class=" col-form-label">City</label>
                                    <select name="city" id="city" class="form-select">
                                    </select>
                                    <div class="text-danger" id="city_error"></div>
                                </div>
                            </div>

                            <div class="row ui sponseradvice">                                
                                <div class="col-sm-6">
                                    <label for="user" class=" col-form-label">User</label>
                                    <select name="user[]" multiple="" id="user"
                                        class="js-example-basic-single form-control">
                                        <option value="0">All</option>
                                        @foreach ($user as $value)
                                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger" id="user_error"></div>
                                </div>
                            </div>
                            <div class="row ui">
                                <div class="col-sm-6">
                                    <label for="name" class=" col-form-label">Title (English)</label>
                                    <input type="text" name="name" class="form-control name" placeholder="Title (English)"
                                        id="name"
                                        value="" required>
                                    <div class="text-danger" id="name_error"></div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="namear" class=" col-form-label">Title (Arabic)</label>
                                    <input type="text" name="namear" class="form-control namear" placeholder="Title (Arabic)"
                                        id="namear"
                                        value="" required>
                                    <div class="text-danger" id="namear_error"></div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-12">
                                    <label for="info" class=" col-form-label">Message (English)</label>
                                    <textarea name="info" id="info" cols="30" rows="5" class="form-control" placeholder="Message (English)"></textarea>
                                    <div class="text-danger" id="info_error"></div>
                                </div>
                                <div class="col-sm-12">
                                    <label for="infoar" class=" col-form-label">Message (Arabic)</label>
                                    <textarea name="infoar" id="infoar" cols="30" rows="5" class="form-control" placeholder="Message (Arabic)"></textarea>
                                    <div class="text-danger" id="infoar_error"></div>
                                </div>
                                <div class="row ui">
                                    <div class="col-sm-6">
                                        <label for="url" class="col-form-label">URL</label>
                                        <input type="url" name="url" class="form-control" placeholder="URL"
                                            id="url" value="">
                                        <div class="text-danger" id="url_error"></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="image" class="col-form-label">Upload Image</label>
                                        <input type="file" name="image" class="form-control" id="image"
                                             <?php if (!isset($banner)) {
                                                echo 'required';
                                            } ?>>
                                        {{-- <span class="text-danger"><b>Note : </b>Image ratio must be 4:3</span><br> --}}
                                        <img id="previewImg" src="../public/img/image-preview.png" alt="Placeholder"
                                            width="100px">
                                        <div class="text-danger" id="image_error"></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                      <label for="sponser_name" class="col-form-label">Sponser Name (English)</label>
                                      <input type="text" name="sponser_name" class="form-control" placeholder="Sponser Name" id="sponser_name" value="@if(isset($data->id)){{$data->sponser_name}}@endif" required>               
                                      <div class="text-danger" id="sponser_name_error"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sponser_namear" class="col-form-label">Sponser Name (Arabic)</label>
                                        <input type="text" name="sponser_namear" class="form-control" placeholder="Sponser Name" id="sponser_namear" value="@if(isset($data->id)){{$data->sponser_name}}@endif" required>               
                                        <div class="text-danger" id="sponser_namear_error"></div>
                                      </div>
                                  </div>
                                  <div class="row mb-3">                                    
                                    <div class="col-md-6">
                                        <label for="sponser_icon" class="col-form-label">Sponser Icon</label>
                                        <input type="file" name="sponser_icon" id="sponserlogo" class="form-control file mb-2" placeholder="Logo" accept=".jpeg, .jpg, .png, .gif"  onchange="previewFilesponser(this,20,20);">
                                        {{-- <span class="text-danger"><b>Note : </b>Dimension 20px * 20px</span><br> --}}
                                        <img id="previewImgsponser" class="mt-2" src="<?php if(isset($data->id)){ if($data->sponser_icon!=''){ echo url("public/images/".$data->sponser_icon);}else{?> ../public/img/image-preview.png <?php }}else{ ?>../public/img/image-preview.png<?php } ?>" alt="Placeholder" width="100px">
                                        <div class="text-danger" id="sponser_error"></div>
                                      </div>
                                  </div>
                                <div class="row ui">
                                  <div class="col-sm-6">
                                      <label for="end_date" class="col-form-label">Expire Date</label>
                                      <input type="date" name="expire_date" class="form-control" min="<?=date('Y-m-d')?>" placeholder="End Date"
                                          id="expire_date" value="@if(isset($data->id)){{$data->expire_date}}@endif">
                                      <div class="text-danger" id="end_date_error"></div>
                                  </div>                                  
                              </div>

                                <div class="col-sm-12 text-center mt-4">
                                    <input type="hidden" class="id" name="id"
                                        value="@if (isset($data->id)) {{ $data->id }} @endif">
                                    <button type="button" class="btn submitdata">Submit</button>
                                </div>
                                <div class="alert alert-success text-center hide1"><span class="msg_success"></span>
                                </div>
                                <div class="alert alert-danger text-center hide2"><span class="msg_danger"></span>
                                </div>
                            </div>
                        </form><!-- End Horizontal Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('image').addEventListener('change', function(event) {
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
                const fileInput = document.getElementById('image');
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
            //     const fileInput = document.getElementById('image');
            //   fileInput.value = '';
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
    $('#usertype').change(function() {
        var type = $(this).val();
        var token = "<?= csrf_token() ?>";
        if (type == 2) {
            $('.brand').css('display', 'block')
            $('.age').css('display', 'none')
            $('.gender').css('display', 'none')
            $('.city').css('display', 'none')
            $('.statecity').css('display', 'none')
        }else if(type==3){
            $('.brand').css('display', 'none')
            $('.age').css('display', 'block')
            $('.gender').css('display', 'none')
            $('.city').css('display', 'none')
            $('.statecity').css('display', 'none')
        }else if(type==4){
            $('.brand').css('display', 'none')
            $('.age').css('display', 'none')
            $('.gender').css('display', 'block')
            $('.city').css('display', 'none')
            $('.statecity').css('display', 'none')
        }else if(type==5){
            $('.brand').css('display', 'none')
            $('.age').css('display', 'none')
            $('.gender').css('display', 'none')
            $('.city').css('display', 'block')
            $('.statecity').css('display', 'flex')
        } else {
            $('.brand').css('display', 'none')
            $('.age').css('display', 'none')
            $('.gender').css('display', 'none')
            $('.city').css('display', 'none')
            $('.statecity').css('display', 'none')
            $.ajax({
                type: 'POST',
                url: '{{ url('/admin/getuser') }}',
                data: {
                    type: type,
                    _token: token,
                    value: 1
                },
                success: function(data) {
                    console.log(data);
                    $("#user").html(data);
                }
            })
        }

    })
</script>
<script>
    $('#brand').change(function() {
        var brand = $(this).val();
        var type = $('#usertype').val();
        var token = "<?= csrf_token() ?>";
        $.ajax({
            type: 'POST',
            url: '{{ url('/admin/getuser') }}',
            data: {
                type: type,
                _token: token,
                value: 2,
                brand: brand
            },
            success: function(data) {
                console.log(data);
                $("#user").html(data);
            }
        })
    })
</script>
<script>
    $('#gender').change(function() {
        var gender = $(this).val();
        var type = $('#usertype').val();
        var token = "<?= csrf_token() ?>";
        $.ajax({
            type: 'POST',
            url: '{{ url('/admin/getuser') }}',
            data: {
                type:type,
                _token: token,
                value: 3,
                gender:gender
            },
            success: function(data) {
                console.log(data);
                $("#user").html(data);
            }
        })
    })
</script>
<script>
    //age
    $('#age').keypress(function() {
        var age = $('#age').val();
        var type = $('#usertype').val();
        var token = "<?= csrf_token() ?>";
        $.ajax({
            type: 'POST',
            url: '{{ url('/admin/getuser') }}',
            data: {
                type:type,
                _token: token,
                value: 2,
                age:age
            },
            success: function(data) {
                console.log(data);
                $("#user").html(data);
            }
        })
    })
</script>
<script>
    //city
    $('#city').keypress(function() {
        var city = $('#city').val();
        var type = $('#usertype').val();
        var token = "<?= csrf_token() ?>";
        $.ajax({
            type: 'POST',
            url: '{{ url('/admin/getuser') }}',
            data: {
                type:type,
                _token: token,
                value: 2,
                city:city
            },
            success: function(data) {
                console.log(data);
                $("#user").html(data);
            }
        })
    })
</script>
<script>
    $('#country').change(function(){
        var country_id = $(this).val();
        var token = "<?=csrf_token()?>";
        if(!country_id){
            $('#country').css("border","1px solid red");
        }else{
            $('#country').css("border","");
            $.ajax({
                type:'POST',
                url:"{{url('/getState')}}",
                data:{country_id:country_id,_token:token},
                success:function(res){
                    $('#state').html(res)

                }
            })
        }
    });

</script>
<script>
    $('#state').change(function(){
        var state_id = $(this).val();
        var token = "<?=csrf_token()?>";
        if(!state_id){
            $('#state').css("border","1px solid red");
        }else{
            $('#state').css("border","");
            $.ajax({
                type:'POST',
                url:"{{url('/getCity')}}",
                data:{state_id:state_id,_token:token},
                success:function(res){
                    $('#city').html(res)

                }
            })
        }
    });

</script>
<script>
  $('.submitdata').click(function() {
    var user = $("#user").val();
    var name = $('#name').val();
    var info = $('#info').val();
    var expire_date = $('#expire_date').val();
    var usertype = $('#usertype').val();
    var brand = $('#brand').val();
    var url = $('#url').val();
    var image = $('#image').val();
    var sponser_name = $('#sponser_name').val();
    var sponserlogo = $('#sponserlogo').val();
    var advicetype = $('#advicetype').val();
    if(advicetype==2){
        if (user == '') {
            $('#user_error').text("The user field is required.");
            return false;
        }
    }
    
    if (!name) {
        $('#user_error').text("");
        $('#name_error').text("The title field is required.");
        return false;
    }
    if (!info) {
        $('#user_error').text("");
        $('#name_error').text("");
        $('#info_error').text("The info field is required.");
        return false;
    }
    if(url!=''){
      if(!url.match(/^(?:(?:http|https|ftp):\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-._~:/?#[\]@!$&'()*+,;=%]+$/)){
        $('#user_error').text("");
        $('#name_error').text("");
        $('#info_error').text("");
        $('#url_error').text("Please enter valid URL");
        return false;
      }
    }
    
    if(!image){      
        $('#user_error').text("");
        $('#name_error').text("");
        $('#info_error').text("");
        $('#url_error').text("");
        $('#image_error').text("The field is required.");
        return false;      
    }
    if(!sponser_name){      
        $('#user_error').text("");
        $('#name_error').text("");
        $('#info_error').text("");
        $('#url_error').text("");
        $('#image_error').text("");
        $('#sponser_name_error').text("The field is required.");
        return false;      
    }
    if(!sponserlogo){      
        $('#user_error').text("");
        $('#name_error').text("");
        $('#info_error').text("");
        $('#url_error').text("");
        $('#image_error').text("");
        $('#sponser_name_error').text("");
        $('#sponser_error').text("The field is required.");
        return false;      
    }    
    // if(!expire_date){      
    //     $('#user_error').text("");
    //     $('#name_error').text("");
    //     $('#info_error').text("");
    //     $('#url_error').text("");
    //     $('#image_error').text("");
    //     $('#sponser_name_error').text("");
    //     $('#sponser_error').text("");
    //     $('#end_date_error').text("The field is required.");
    //     return false;      
    // }    
    $('#user_error').text("");
    $('#name_error').text("");
    $('#info_error').text("");
    $('#url_error').text("");
    $('#image_error').text("");
    $('#sponser_name_error').text("");
    $('#sponser_error').text("");
    $('#end_date_error').text("");
    $.ajax({
        type: 'POST',
        url: '{{ url('/admin/insertadvice') }}',
        data: new FormData($("#saveform")[0]),
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data) {
            console.log(data);
            if ($.trim(data) == "1") {
                $('.hide1').css('display', 'block');
                $('.msg_success').text("Sucessfully submitted");
                $(".alert-success").show('slow', 'linear').delay(4000).fadeOut(function() {
                    window.location.href = "{{ URL::to('/admin/advice') }}";
                });

            }
            if ($.trim(data) == "2") {
              $('#end_time_error').text("Time must me be greater then current time for current date");
                // $('.hide2').css('display', 'block');
                // $('.msg_danger').text("Name already exist");
                // $(".alert-danger").show('slow', 'linear').delay(4000).fadeOut();

            }
        }

    });

  })
</script>
<script>
    $('#advicetype').change(function(){
        var advicetype = $('#advicetype').val();
        if(advicetype==1){
            $('.sponseradvice').css('display','none');
        }else{
            $('.sponseradvice').css('display','block');
        }
    })
</script>


@include('admin.includes.footer')
