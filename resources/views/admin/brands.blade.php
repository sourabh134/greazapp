
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
            <!-- <h2 class="card-title text-center p-5">Brands</h2> -->
            <div class="white_card_body text-center">
                <div class="QA_table table-responsive pb-3">
                    <table class="table p-0" id="example">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">#</th>
                                <th scope="col">Logo</th>
                                <th scope="col">Name (English)</th>
                                <th scope="col">Name (Arabic)</th>
                                <th scope="col">Tag (English)</th>
                                <th scope="col">Tag (Arabic)</th>
                                <th scope="col">Visited</th>
                                <th scope="col">No. of Owners</th>
                                <th scope="col">No. of Click</th>
                                <th scope="col">Status</th>
                                <th scope="col">Popular</th>
                                <th scope="col">Add Model</th>
                                <th scope="col">Action</th>
                                <th scope="col" style="display: none">Description (English)</th>
                                <th scope="col" style="display: none">Description (Arabic)</th>
                                <th scope="col" style="display: none">Website</th>
                                <th scope="col" style="display: none">Youtube</th>
                                <th scope="col" style="display: none">Twitter</th>
                                <th scope="col" style="display: none">Linkedin</th>
                                <th scope="col" style="display: none">Facebook</th>
                                <th scope="col" style="display: none">Instagram</th>
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
                                <td>
                                    <img class="img-fluid" src="<?php if($value->logo!=''){ echo url("public/images/".$value->logo);}else{ ?>../public/img/image-preview.png<?php } ?>" alt width="100" height="100">
                                </td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->name_ar}}</td>
                                <td>{{$value->tag_name}}</td>
                                <td>{{$value->tag_name_ar}}</td>
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
                                <td><a href="{{url('admin/carmodel?key='.base64_encode($value->id))}}" class="btn btn-warning">ADD MODEL</a></td>
                                <td><a href="{{url('admin/addBrand?key='.base64_encode($value->id))}}"><i class="fa fa-edit"></i></a> | <a class="delete" data-id="{{$value->id}}"><i class="fa fa-trash"></i></a></td>
                                <td style="display: none">{{$value->description}}</td>
                                <td style="display: none">{{$value->description_ar}}</td>
                                <td style="display: none">{{$value->website}}</td>
                                <td style="display: none">{{$value->youtube}}</td>
                                <td style="display: none">{{$value->twitter}}</td>
                                <td style="display: none">{{$value->linkedin}}</td>
                                <td style="display: none">{{$value->facebook}}</td>
                                <td style="display: none">{{$value->instagram}}</td>
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
      $('#example').DataTable({
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

@include('admin.includes.footer')