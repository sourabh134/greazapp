
@include('admin.includes.header')

<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <div class="row">
        <div class="col-12">
            <div class="page_title_box d-flex align-items-center justify-content-between">
            <div class="page_title_left">
                <h4 class="f_s_30 f_w_700 text_white"><a href="javascript:history.back()" class="back_button" title="Back"><i class="fa fa-arrow-left"></i></a> Brands</h4>
                <!-- <ol class="breadcrumb page_bradcam mb-0">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Brands</li>
                </ol> -->
            </div>
            @if(Session::has('message'))
            <p class="alert alert-success"><span style="font-weight: 600;"> Success !! </span>{{ Session::get('message') }}</p>
            @endif
            <a href="{{ url('admin/addBrand') }}" class="white_btn3">Create</a>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_20 ">
            {{-- <div class="row justify-content-end">
                <div class="form-group col-md-3">
                    <div class="row mt-3 me-3 align-items-center">
                        <div class="col-md-4 d-flex justify-content-end ">
                            <label for="Category">Category :</label>
                        </div>
                        <div class="col-md-8 ps-0">
                            <select class="form-select" name="Category" id="Category">
                                <option value="">Choose</option>
                                @foreach ($Category as $Categoryvalue)
                                    <option value="{{$Categoryvalue->id}}">{{$Categoryvalue->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- <h2 class="card-title text-center p-5">Brands</h2> -->
            <div class="white_card_body text-center">
                {{-- tab --}}
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        @php
                        $t=1;
                        @endphp
                        @foreach ($Category as $Categoryvalue)
                            <button class="nav-link <?php if($t==1){ ?>active<?php } ?>" id="nav-{{$Categoryvalue->id}}-tab" data-bs-toggle="tab" data-bs-target="#nav-{{$Categoryvalue->id}}" type="button" role="tab" aria-controls="nav-{{$Categoryvalue->id}}" aria-selected="true">{{$Categoryvalue->name}}</button>
                        @php
                        $t++;
                        @endphp
                        @endforeach

                      {{-- <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                      <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button> --}}
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    @php
                    $t1=1;
                    $tbname="";
                    @endphp
                    @foreach ($Category as $Categoryvalues)
                    <?php
                        $tbname = $tbname.",#example".$Categoryvalues->id;
                    ?>
                        <div class="tab-pane fade show <?php if($t1==1){ ?>active<?php } ?>" id="nav-{{$Categoryvalues->id}}" role="tabpanel" aria-labelledby="nav-{{$Categoryvalues->id}}-tab">
                            <?php
                            $brandpopcount = App\Models\Brand::where('status','!=',2)->where('categoryID',$Categoryvalues->id)->where('popular',1)->count();
                            if($brandpopcount!=0){
                                $data = App\Models\Brand::where('status','!=',2)->where('categoryID',$Categoryvalues->id)->orderby('popular','DESC')->orderby('position','ASC')->get();
                            }else{
                                $data = App\Models\Brand::where('status','!=',2)->where('categoryID',$Categoryvalues->id)->orderby('name','ASC')->get();
                            }
                            ?>
                            <div class="QA_table table-responsive pb-3 mt-4">
                                <table class="table p-0" id="example{{$Categoryvalues->id}}">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">#</th>
                                            {{-- <th scope="col">Category</th> --}}
                                            <th scope="col">Logo</th>
                                            <th scope="col">Name (English)</th>
                                            <th scope="col">Name (Arabic)</th>
                                            <th scope="col">Visited</th>
                                            <th scope="col">No. of Owners</th>
                                            <th scope="col">No. of Click</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Popular</th>
                                            <th scope="col">Add Model</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="row_position">
                                    @php
                                    $i=1;
                                    @endphp
                                    @foreach($data as $value)
                                        <tr id="<?php echo $value->id; ?>">
                                            <td><i class="fa fa-arrow-up"></i><br>Move<br><i class="fa fa-arrow-down"></i></td>
                                            <td>{{$i}}</td>
                                            {{-- <td>{{App\Models\Category::where('id',$value->categoryID)->value('name')}}</td> --}}
                                            <td>
                                                <img class="img-fluid" src="<?php if($value->logo!=''){ echo url("public/images/".$value->logo);}else{ ?>../public/img/image-preview.png<?php } ?>" alt width="100" height="100">
                                            </td>
                                            <td><a
                                                href="{{ url('admin/brandsdetails?key=' . base64_encode($value->id) . '&lang=' . base64_encode(1)) }}">{{$value->name}}</a></td>
                                            <td><a
                                                href="{{ url('admin/brandsdetails?key=' . base64_encode($value->id) . '&lang=' . base64_encode(2)) }}">{{$value->name_ar}}</a></td>
                                            <td><?php echo $view = App\Models\Viewed::where('menu_type',1)->where('menuID',$value->id)->count(); ?></td>
                                            <td><?php echo $owner = App\Models\MyCar::where('make_id',$value->id)->distinct()->count('userID');  ?></td>
                                            <td>{{$value->log}}</td>
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
                                            <td><?php if($value->categoryID==1){?><a href="{{url('admin/carmodel?key='.base64_encode($value->id))}}" class="btn btn-warning">ADD MODEL</a><?php } ?></td>
                                            <td><a href="{{url('admin/addBrand?key='.base64_encode($value->id))}}"><i class="fa fa-edit"></i></a> | <a class="delete" data-id="{{$value->id}}"><i class="fa fa-trash"></i></a></td>

                                        </tr>
                                    @php
                                    $i++;
                                    @endphp
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    @php
                    $t1++;
                    @endphp
                    @endforeach


                </div>
                {{-- tab --}}
                {{-- <div class="QA_table table-responsive pb-3">
                    <table class="table p-0" id="example">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">#</th>
                                <th scope="col">Category</th>
                                <th scope="col">Logo</th>
                                <th scope="col">Name (English)</th>
                                <th scope="col">Name (Arabic)</th>
                                <th scope="col">Visited</th>
                                <th scope="col">No. of Owners</th>
                                <th scope="col">No. of Click</th>
                                <th scope="col">Status</th>
                                <th scope="col">Popular</th>
                                <th scope="col">Add Model</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="row_position">
                        @php
                        $i=1;
                        @endphp
                        @foreach($data as $value)
                            <tr id="<?php echo $value->id; ?>">
                                <td><i class="fa fa-arrow-up"></i><br>Move<br><i class="fa fa-arrow-down"></i></td>
                                <td>{{$i}}</td>
                                <td>{{App\Models\Category::where('id',$value->categoryID)->value('name')}}</td>
                                <td>
                                    <img class="img-fluid" src="<?php if($value->logo!=''){ echo url("public/images/".$value->logo);}else{ ?>../public/img/image-preview.png<?php } ?>" alt width="100" height="100">
                                </td>
                                <td><a
                                    href="{{ url('admin/brandsdetails?key=' . base64_encode($value->id) . '&lang=' . base64_encode(1)) }}">{{$value->name}}</a></td>
                                <td><a
                                    href="{{ url('admin/brandsdetails?key=' . base64_encode($value->id) . '&lang=' . base64_encode(2)) }}">{{$value->name_ar}}</a></td>
                                <td><?php echo $view = App\Models\Viewed::where('menu_type',1)->where('menuID',$value->id)->count(); ?></td>
                                <td><?php echo $owner = App\Models\MyCar::where('make_id',$value->id)->distinct()->count('userID');  ?></td>
                                <td>{{$value->log}}</td>
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
                                <td><?php if($value->categoryID==1){?><a href="{{url('admin/carmodel?key='.base64_encode($value->id))}}" class="btn btn-warning">ADD MODEL</a><?php } ?></td>
                                <td><a href="{{url('admin/addBrand?key='.base64_encode($value->id))}}"><i class="fa fa-edit"></i></a> | <a class="delete" data-id="{{$value->id}}"><i class="fa fa-trash"></i></a></td>

                            </tr>
                        @php
                        $i++;
                        @endphp
                        @endforeach

                        </tbody>
                    </table>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<script>
  $(".delete").click(function(){
    var id = $(this).data('id');
    var token = "<?=csrf_token()?>";
    if(confirm("Are you sure want to delete this?")){
      $.ajax({
          type:'POST',
          url:'{{url("/admin/delete_brand")}}',
          data  :{id:id,_token:token},
          success:function(data){
            location.reload();
          }

      });
    }
  })
</script>
<script>
    $('.flexSwitchCheckChecked').click(function(){
        var id = $(this).data('id');
        var token = "<?=csrf_token()?>";
        if ($(this).is(':checked')) {
            var status = 1;
        }else{
            var status = 0;
        }
        if(confirm("Are you sure want to change this status?")){
            $.ajax({
                type:'POST',
                url:'{{url("/admin/change_brand_status")}}',
                data  :{id:id,_token:token,status:status},
                success:function(data){
                    location.reload();
                }

            });
        }
    })
</script>
<script>
    $('.flexSwitchCheckCheckedpopular').click(function(){
        var id = $(this).data('id');
        var token = "<?=csrf_token()?>";
        if ($(this).is(':checked')) {
            var status = 1;
        }else{
            var status = 0;
        }
        if(confirm("Are you sure want to add this in popular list?")){
            $.ajax({
                type:'POST',
                url:'{{url("/admin/add_popular_brand")}}',
                data  :{id:id,_token:token,status:status},
                success:function(data){
                    location.reload();
                }

            });
        }
    })
</script>
<script>
   $(document).ready(function() {
      $('{{trim($tbname,",")}}').DataTable({
         dom: 'Bfrtip',
         buttons: [{
            extend: 'excel',
            text: 'Export',
            exportOptions: {
                columns: [ 1,3,4,5,6,7,8,13,14,15,16,17,18,19,20,21]
            },
            filename: function(){
                var d = new Date();
                var n = d.getTime();
                return 'Brand' + n;
            },
            title:'Brand'
         }],
      });
   });
</script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.24/themes/smoothness/jquery-ui.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.24/jquery-ui.min.js"></script>
<script type="text/javascript">
   $(".row_position").sortable({
      delay: 150,
      stop: function () {
         var selectedData = new Array();
         $(".row_position>tr").each(function(){
            selectedData.push($(this).attr("id"))
         });
         updateOrder(selectedData);
      }
   });
   function updateOrder(aData){
      var token = "<?php echo csrf_token(); ?>";
      $.ajax({
         url: "{{url('updateBrandOrder')}}",
         type: "POST",
         data: {allData:aData,_token:token},
         success: function(data){
                $(window).scrollTop(0);
                $("#orderUpdateMsg").show();
                $("#orderUpdateMsg").fadeOut(3000);
                setTimeout(() => {
                    location.reload();
                }, 3000);
         }
      });
   }
</script>
<script>
    $('#Category').change(function(){
        var id = $('#Category').val();
        var token = "<?=csrf_token()?>";
        $.ajax({
            type:'POST',
            url:'{{url("/admin/filter_Categorydata")}}',
            data  :{id:id,_token:token},
            success:function(data){
                $('.row_position').html(data);
            }

        });


    })
</script>

@include('admin.includes.footer')
