@include('admin.includes.header')
<style>
    .fa-file{
        font-size: 20px;
        color:brown;
    }
</style>

<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h4 class="f_s_30 f_w_700 text_white"><a href="javascript:history.back()" class="back_button" title="Back"><i class="fa fa-arrow-left"></i></a> {{$brand_name}} {{$model_name}} Car List</h4>
                        <!-- <ol class="breadcrumb page_bradcam mb-0">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Car List</li>
                </ol> -->
                    </div>
                    @if(Session::has('message'))
                    <p class="alert alert-success"><span style="font-weight: 600;"> Success !! </span>{{ Session::get('message') }}</p>
                    @endif
                    <!-- <a href="{{ url('admin/addBrand') }}" class="white_btn3">Create</a> -->
                    <!-- <button type="button" class="white_btn3" data-toggle="modal" data-target="#myModal"></button> -->
                    <!-- Button trigger modal -->
                    <button type="button"class="white_btn3" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Create </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_20 ">
            <!-- <h2 class="card-title text-center p-5">Brands</h2> -->
            <div class="white_card_body text-center">
                <div class="QA_table table-responsive pb-3">
                    <table class="table p-0" id="example">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Classes</th>
                                <th scope="col">Year</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">No. of Click</th>
                                <th scope="col">Brochure</th>
                                <th scope="col">Status</th>
                                <th scope="col">Popular</th>
                                <th scope="col">Add Brochure</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach($data as $value)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{App\Models\CarClasses::where('id',$value->classesID)->first()->name}}</td>
                                <td>{{$value->year}}</td>
                                <td><a href="{{url('admin/cardetail?key='.base64_encode($value->id))}}">{{$value->name}}</a></td>
                                <td>{{$value->description}}</td>
                                <td>{{$value->log}}</td>
                                <td><?php if($value->brochure!=''){ ?><a href="{{url('public/images/car/'.$value->brochure)}}" target="_blank"><i class="fa fa-file"></i></a><?php } ?></td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input flexSwitchCheckChecked" type="checkbox" role="switch" id="flexSwitchCheckChecked" data-id="{{$value->id}}" <?php if($value->status==1){ echo "checked"; } ?>>                                        
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input flexSwitchCheckCheckedpopular" type="checkbox" role="switch" id="flexSwitchCheckCheckedpopular" data-id="{{$value->id}}" <?php if($value->popular==1){ echo "checked"; } ?>>                                        
                                    </div>
                                </td>
                                <td><a  class="btn btn-warning" onclick="brochure({{$value->id}})">Add Brochure</a></td>
                                <td><a href="{{url('admin/pricelist?key='.base64_encode($value->id))}}" class="btn btn-warning">Price</a></td>
                                
                                <td><a href="{{url('admin/addcar?key='.base64_encode($value->id))}}"><i class="fa fa-edit"></i></a> | <a class="delete" data-id="{{$value->id}}"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        @php
                        $i++;
                        @endphp
                        @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- model -->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Car</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" id="saveform" enctype="multipart/form-data">
        @csrf
            <div class="modal-body"> 
                         
                <div class="form-group">
                    <label class="col-form-label">Make</label>
                    <input type="text" name="make" id="make" class="form-control" value="{{$brand_name}}" readonly>
                    <input type="hidden" name="brandID" id="brandID" value="{{$carmodel->brandID}}">                    
                </div>
                <div class="form-group">
                    <label class="col-form-label">Model</label>
                    <input type="text" name="model" id="model" class="form-control" value="{{$model_name}}" readonly>
                    <input type="hidden" name="modelid" id="modelid" value="{{$carmodel->id}}">                   
                </div>
                <div class="form-group">
                    <label class="col-form-label">Car Classes</label>
                    <select name="CarClasses" id="CarClasses" class="form-select">
                        @foreach($CarClasses as $classes)
                        <option value="{{$classes->id}}">{{$classes->name}}</option>
                        @endforeach
                    </select>                    
                </div>
                <div class="form-group">
                    <label class="col-form-label">Year</label>
                    <select name="yearID" id="yearID" class="form-select">
                        @foreach($yearlist as $year)
                        <option value="{{$year->value}}">{{$year->value}}</option>
                        @endforeach
                    </select>                    
                </div>
                
            </div>
            <div class="modal-footer">
                <button id="loadButton" type="button" class="btn btn-primary submitdata">Submit</button>
                <div class="alert alert-success text-center hide1"><span class="msg_success"></span></div>
                <div class="alert alert-danger text-center hide2"><span class="msg_danger"></span></div>
            </div>
        </form>
      </div>
    </div>
</div>
<div class="overlay" id="overlay">
    <div id="loader" class="loader"></div>
</div> 

  <!-- model -->
  {{-- model2 --}}
  <div class="modal fade" id="staticBackdropbro" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabelbro" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Brochure</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" id="saveformbrochure" enctype="multipart/form-data">
        @csrf
            <div class="col-md-12  mb-3">
                <label for="brochure" class="col-form-label">Brochure</label>
                <input type="file" name="brochure" id="brochure" class="form-control file" placeholder="Brochure" accept=".pdf">                
            </div>
            
            <div class="modal-footer">
                <input type="hidden" class="broid" name="broid" value="">
                <button id="loadButton" type="button" class="btn btn-primary submitbrodata">Submit</button>
                <div class="alert alert-success text-center hide1"><span class="msg_success"></span></div>
                <div class="alert alert-danger text-center hide2"><span class="msg_danger"></span></div>
            </div>
        </form>
      </div>
    </div>
</div>
  {{-- model2 --}}
  <script>
    function brochure(id){
        $('.broid').val(id);
        $('#brochure').val('');
        $('#staticBackdropbro').modal('show');
    }
  </script>
  <script>
    $('.submitbrodata').click(function(){
        $.ajax({
            type:'POST',
            url:'{{url("/admin/insertbrochure")}}',
            data  :new FormData( $("#saveformbrochure")[0] ),
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
                   location.reload();
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

  <script>
    // document.getElementById("loadButton").addEventListener("click", function () {
    //   var overlay = document.getElementById("overlay");
    //   var loader = document.getElementById("loader");

    //   overlay.style.display = "block";
    //   loader.style.display = "block";
      
    //   setTimeout(function () {
    //     overlay.style.display = "none";
    //     loader.style.display = "none";
    //   }, 3000);
    // });
  </script>

<script>
    $(".delete").click(function() {
        var id = $(this).data('id');
        var token = "<?= csrf_token() ?>";
        if (confirm("Are you sure want to delete this?")) {
            $.ajax({
                type: 'POST',
                url: '{{url("/admin/delete_car")}}',
                data: {
                    id: id,
                    _token: token
                },
                success: function(data) {
                    location.reload();
                }

            });
        }
    })
</script>
<script>
    $('.flexSwitchCheckChecked').click(function() {
        var id = $(this).data('id');
        var token = "<?= csrf_token() ?>";
        if ($(this).is(':checked')) {
            var status = 1;
        } else {
            var status = 0;
        }
        if (confirm("Are you sure want to change this status?")) {
            $.ajax({
                type: 'POST',
                url: '{{url("/admin/change_car_status")}}',
                data: {
                    id: id,
                    _token: token,
                    status: status
                },
                success: function(data) {
                    location.reload();
                }

            });
        }
    })
</script>
<script>
    $('.flexSwitchCheckCheckedpopular').click(function() {
        var id = $(this).data('id');
        var token = "<?= csrf_token() ?>";
        if ($(this).is(':checked')) {
            var status = 1;
        } else {
            var status = 0;
        }
        if (confirm("Are you sure want to add this in popular list?")) {
            $.ajax({
                type: 'POST',
                url: '{{url("/admin/add_popular_car")}}',
                data: {
                    id: id,
                    _token: token,
                    status: status
                },
                success: function(data) {
                    location.reload();
                }
            });
        }
    })
</script>
<script>
   $(document).ready(function() {
      $('#example').DataTable({
         dom: 'Bfrtip',
         buttons: [{
            extend: 'excel',
            text: 'Export', 
            exportOptions: {
                columns: [ 0,1,2,3]
            },
            filename: function(){
                var d = new Date();
                var n = d.getTime();
                return 'Car List' + n;
            },
            title:'Car List'
         }],
      });
   });
</script>
<script>
    $('.submitdata').click(function(){
        // var overlay = document.getElementById("overlay");
        // var loader = document.getElementById("loader");
        // overlay.style.display = "block";
        // loader.style.display = "block";
        var brandID  = $('#brandID').val();
        var modelid = $('#modelid').val();       
        var yearID = $('#yearID').val();
        var CarClasses = $('#CarClasses').val();
        

        
        $.ajax({
            type:'POST',
            url:'{{url("/admin/insertcar")}}',
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
                    window.location.href="{{URL::to('/admin/carlist?key=')}}"+btoa(modelid);
                });

                }
                if($.trim(data)=="2"){
                $('.hide2').css('display','block');
                $('.msg_danger').text("Something went wrong");
                $(".alert-danger").show('slow' , 'linear').delay(4000).fadeOut();

                }
            }
            
        });
       
    })
</script>

@include('admin.includes.footer')