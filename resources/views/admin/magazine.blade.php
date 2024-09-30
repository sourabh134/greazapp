
@include('admin.includes.header')
<style>
.table img{
    object-fit: cover;
}
</style>
<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <div class="row">
        <div class="col-12">
            <div class="page_title_box d-flex align-items-center justify-content-between">
            <div class="page_title_left">
                <h4 class="f_s_30 f_w_700 text_white"><a href="javascript:history.back()" class="back_button" title="Back"><i class="fa fa-arrow-left"></i></a> {{$title}}</h4>
                <!-- <ol class="breadcrumb page_bradcam mb-0">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">{{$title}}</li>
                </ol> -->
            </div>
            @if(Session::has('message'))
            <p class="alert alert-success"><span style="font-weight: 600;"> Success !! </span>{{ Session::get('message') }}</p>
            @endif
            <a href="{{ url('admin/addMagazine') }}" class="white_btn3">Create</a>
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
                                <th scope="col">Type</th>
                                <th scope="col">Image</th>
                                <th scope="col">Heading (English)</th>
                                <th scope="col">Heading (Arabic)</th>
                                <th scope="col">Content (English)</th>
                                <th scope="col">Content (Arabic)</th>
                                <th scope="col">Total View</th>
                                <th scope="col">No. of Click</th>
                                <th scope="col">Home</th>
                                <th scope="col">Add Banner</th>
                                <th scope="col">Status</th>
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
                                <td><?php switch ($value->type) {
                                            case "1":
                                                echo "News";
                                                break;
                                            case "2":
                                                "Review";
                                                break;
                                            case "3":
                                                echo "Video";
                                                break;
                                            case "4":
                                                echo "Event";
                                                break;
                                            default:
                                                echo "";
                                            } ?>
                                </td>
                                <td>
                                    <img src="{{ url('public/images/'.$value->image) }}" alt width="100" height="100">
                                </td>
                                <td><a href="{{url('admin/magazinedata?key='.base64_encode($value->id))}}">{{$value->heading}}</a></td>
                                <td><a href="{{url('admin/magazinedata?key='.base64_encode($value->id))}}">{{$value->heading_ar}}</a></td>
                                <td>{{substr($value->description,0,50)}}...</td>
                                <td>{{substr($value->description_ar,0,50)}}...</td>
                                <td><?php echo $view = App\Models\Viewed::where('menu_type',2)->where('menuID',$value->id)->count(); ?></td>
                                <td>{{$value->log}}</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input flexSwitchCheckCheckedhome" type="checkbox" role="switch" id="flexSwitchCheckCheckedhome" data-id="{{$value->id}}" <?php if($value->home==1){ echo "checked"; } ?>>                                        
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input flexSwitchCheckCheckedbanner" type="checkbox" role="switch" id="flexSwitchCheckCheckedbanner" data-id="{{$value->id}}" <?php if($value->banner==1){ echo "checked"; } ?>>                                        
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input flexSwitchCheckChecked" type="checkbox" role="switch" id="flexSwitchCheckChecked" data-id="{{$value->id}}" <?php if($value->status==1){ echo "checked"; } ?>>                                        
                                    </div>
                                </td>                                
                                <td><a href="{{url('admin/addMagazine?key='.base64_encode($value->id))}}"><i class="fa fa-edit"></i></a> | <a class="delete" data-id="{{$value->id}}"><i class="fa fa-trash"></i></a></td>
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
          url:'{{url("/admin/delete_magazine")}}',
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
                url:'{{url("/admin/change_magazine_status")}}',
                data  :{id:id,_token:token,status:status},          
                success:function(data){
                    location.reload();
                }
                
            });
        }
    })
</script>
<script>
    $('.flexSwitchCheckCheckedhome').click(function(){
        var id = $(this).data('id');
        var token = "<?=csrf_token()?>";
        if ($(this).is(':checked')) {
            var status = 1;
        }else{
            var status = 0;
        }
        if(confirm("Are you sure want to add this on home screen?")){
            $.ajax({
                type:'POST',
                url:'{{url("/admin/addhomemagazine")}}',
                data  :{id:id,_token:token,status:status},          
                success:function(data){
                    location.reload();
                }
                
            });
        }
    })
</script>
<script>
    $('.flexSwitchCheckCheckedbanner').click(function(){
        var id = $(this).data('id');
        var token = "<?=csrf_token()?>";
        if ($(this).is(':checked')) {
            var status = 1;
        }else{
            var status = 0;
        }
        if(confirm("Are you sure want to add this on Banner?")){
            $.ajax({
                type:'POST',
                url:'{{url("/admin/addbannermagazine")}}',
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
                columns: [1,2,4,5,6,7]
            },
            filename: function(){
                var d = new Date();
                var n = d.getTime();
                return 'Magazine' + n;
            },
            title:'Magazine'
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
         console.log(selectedData);
         updateOrder(selectedData);
      }
   });
   function updateOrder(aData){
      var token = "<?php echo csrf_token(); ?>";
      $.ajax({
         url: "{{url('updatemagzineOrder')}}",
         type: "POST",
         data: {allData:aData,_token:token},
         success: function(data){
            console.log(data);
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