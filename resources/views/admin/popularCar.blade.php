
@include('admin.includes.header')

<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <div class="row">
        <div class="col-12">
            <div class="page_title_box d-flex align-items-center justify-content-between">
            <div class="page_title_left">
                <h4 class="f_s_30 f_w_700 text_white"><a href="javascript:history.back()" class="back_button" title="Back"><i class="fa fa-arrow-left"></i></a> Popular Car</h4>
                <!-- <ol class="breadcrumb page_bradcam mb-0">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Brands</li>
                </ol> -->
            </div>
            @if(Session::has('message'))
            <p class="alert alert-success"><span style="font-weight: 600;"> Success !! </span>{{ Session::get('message') }}</p>
            @endif
            <a href="{{ url('admin/brands') }}" class="white_btn3">Add Popular Car</a>
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
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Popular</th>
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
                                <td><a href="{{url('admin/cardetail?key='.base64_encode($value->id))}}">{{$value->name}}</a></td>
                                <td>{{$value->description}}</td>
                                
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input flexSwitchCheckCheckedpopular" type="checkbox" role="switch" id="flexSwitchCheckCheckedpopular" data-id="{{$value->id}}" <?php if($value->popular==1){ echo "checked"; } ?>>                                        
                                    </div>
                                </td>
                                
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
                url:'{{url("/admin/add_popular_car")}}',
                data  :{id:id,_token:token,status:status},          
                success:function(data){
                    location.reload();
                }
                
            });
        }
    })
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
         url: "{{url('updateCarOrder')}}",
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
<script>
   $(document).ready(function() {
      $('#example').DataTable({
         dom: 'Bfrtip',
         buttons: [{
            extend: 'excel',
            text: 'Export', 
            exportOptions: {
                columns: [ 1,2,3]
            },
            filename: function(){
                var d = new Date();
                var n = d.getTime();
                return 'Popular car' + n;
            },
            title:'Popular car'
         }],
      });
   });
</script>

@include('admin.includes.footer')