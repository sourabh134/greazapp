@include('admin.includes.header')
<style>
    .nav-link {
        color: black;
    }
    .nav-link:hover {
        color: #fae80b;
    }

</style>
<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <div class="row">
            <div class="col-md-10">
                <h4 class="f_s_30 f_w_700 text_white mb-4"><a href="javascript:history.back()" class="back_button" title="Back"><i class="fa fa-arrow-left"></i></a> {{$brand_name}} {{$model_name}} {{$data->name}} Car Detail</h4>
                        <!-- <ol class="breadcrumb page_bradcam mb-0">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Car Detail</li>
                </ol> -->
                <div class="card p-4">
                    <div class="card-body">
                        @if(Session::has('message'))
                        <p class="alert alert-success"><span style="font-weight: 600;"> Success !! </span>{{ Session::get('message') }}</p>
                        @endif
                        <!-- <a href="{{ url('admin/addBrand') }}" class="white_btn3">Create</a> -->
                        <!-- <button type="button" class="white_btn3" data-toggle="modal" data-target="#myModal"></button> -->
                        <!-- Button trigger modal -->
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Body</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Engine</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Mileage</button>
                                <button class="nav-link" id="nav-color-tab" data-bs-toggle="tab" data-bs-target="#nav-color" type="button" role="tab" aria-controls="nav-color" aria-selected="false">Color</button>
                                <button class="nav-link" id="nav-image-tab" data-bs-toggle="tab" data-bs-target="#nav-image" type="button" role="tab" aria-controls="nav-image" aria-selected="false">Image</button>
                                <button class="nav-link" id="nav-video-tab" data-bs-toggle="tab" data-bs-target="#nav-video" type="button" role="tab" aria-controls="nav-video" aria-selected="false">Video</button>
                            </div>
                        </nav>
                        <div class="tab-content p-3 border" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="QA_table ">
                                    <table class="table p-0">
                                        <tr>
                                            <td><strong>Name</strong></td>
                                            <td>{{$data->name}}</td>
                                        </tr>                                        
                                        <tr>
                                            <td><strong>Description</strong></td>
                                            <td>{{$data->description}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Year</strong></td>
                                            <td>{{$data->year}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Type</strong></td>
                                            <td>{{$body->type}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Doors</strong></td>
                                            <td>{{$body->doors}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Seats</strong></td>
                                            <td>{{$body->seats}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Length</strong></td>
                                            <td>{{$body->length}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Width</strong></td>
                                            <td>{{$body->width}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Height</strong></td>
                                            <td>{{$body->height}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Wheel Base</strong></td>
                                            <td>{{$body->wheel_base}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Front Track</strong></td>
                                            <td>{{$body->front_track}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Rear Track</strong></td>
                                            <td>{{$body->rear_track}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Ground Clearance</strong></td>
                                            <td>{{$body->ground_clearance}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Cargo Capacity</strong></td>
                                            <td>{{$body->cargo_capacity}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Max Cargo Capacity</strong></td>
                                            <td>{{$body->max_cargo_capacity}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Curb Weight</strong></td>
                                            <td>{{$body->curb_weight}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Gross Weight</strong></td>
                                            <td>{{$body->gross_weight}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Max Payload</strong></td>
                                            <td>{{$body->max_payload}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Max Towing Capacity</strong></td>
                                            <td>{{$body->max_towing_capacity}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="QA_table ">
                                    <table class="table p-0">
                                        <tr>
                                            <td><strong>Engine Type</strong></td>
                                            <td>{{$engine->engine_type}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Fuel Type</strong></td>
                                            <td>{{$engine->fuel_type}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>cylinders</strong></td>
                                            <td>{{$engine->cylinders}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Size</strong></td>
                                            <td>{{$engine->size}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Horsepower hp</strong></td>
                                            <td>{{$engine->horsepower_hp}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Horsepower rpm</strong></td>
                                            <td>{{$engine->horsepower_rpm}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Torque ft lbs</strong></td>
                                            <td>{{$engine->torque_ft_lbs}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Torque rpm</strong></td>
                                            <td>{{$engine->torque_rpm}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Valves</strong></td>
                                            <td>{{$engine->valves}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Valve Timing</strong></td>
                                            <td>{{$engine->valve_timing}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Cam Type</strong></td>
                                            <td>{{$engine->cam_type}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Drive Type</strong></td>
                                            <td>{{$engine->drive_type}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Transmission</strong></td>
                                            <td>{{$engine->transmission}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="QA_table ">
                                    <table class="table p-0">
                                        <tr>
                                            <td><strong>Fuel Tank Capacity</strong></td>
                                            <td>{{$mileage->fuel_tank_capacity}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Combined MPG</strong></td>
                                            <td>{{$mileage->combined_mpg}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Epa City MPG</strong></td>
                                            <td>{{$mileage->epa_city_mpg}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Epa Highway MPG</strong></td>
                                            <td>{{$mileage->epa_highway_mpg}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Range City</strong></td>
                                            <td>{{$mileage->range_city}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Range Highway</strong></td>
                                            <td>{{$mileage->range_highway}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Battery Capacity Electric</strong></td>
                                            <td>{{$mileage->battery_capacity_electric}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Epa time to charge hr 240v electric</strong></td>
                                            <td>{{$mileage->epa_time_to_charge_hr_240v_electric}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Epa kwh 100 mi electric</strong></td>
                                            <td>{{$mileage->epa_kwh_100_mi_electric}}</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Range Electric</strong></td>
                                            <td>{{$mileage->range_electric}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Epa highway mpg electric</strong></td>
                                            <td>{{$mileage->epa_highway_mpg_electric}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Epa city mpg electric</strong></td>
                                            <td>{{$mileage->epa_city_mpg_electric}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Epa combined mpg electric</strong></td>
                                            <td>{{$mileage->epa_combined_mpg_electric}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-color" role="tabpanel" aria-labelledby="nav-color-tab">
                                <div class="QA_table ">
                                    <table class="table p-0">
                                        <tr>
                                            <td><strong>Exterior Color</strong></td>
                                            <td>
                                                <div class="row">
                                                    @foreach($exteriorcolor as $exvalue)
                                                    <div class="col-md-1">
                                                        <div style="width:20px;height:20px;border-radius:50%; background:rgb(<?= $exvalue->rgb ?>)" title="<?= $exvalue->name ?>"></div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Interior Color</strong></td>
                                            <td>
                                                <div class="row">
                                                    @foreach($interiorcolor as $invalue)
                                                    <div class="col-md-1">
                                                        <div style="width:20px;height:20px;border-radius:50%; background:rgb(<?= $invalue->rgb ?>)" title="<?= $invalue->name ?>"></div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-image" role="tabpanel" aria-labelledby="nav-image-tab">
                                <div class="QA_table ">
                                    <div class="row">
                                        @foreach($carimage as $carval)
                                        <div class="col-md-2">
                                            <a class="close deleteimg" data-id="{{$carval->id}}"><i class="fa fa-times"></i></a>
                                            <?php if($carval->image_type==1){ ?>
                                            <img class="img-fluid" src='{{url("public/images/car/".$carval->image)}}'>
                                            <?php }else{ ?>
                                                <img class="img-fluid" src='{{$carval->image}}'> 
                                                <?php } ?>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab">
                                <div class="QA_table ">
                                    <div class="row">
                                        @foreach($carvideo as $carvval)
                                        <?php
                                        //echo $carvval->video;
                                        $ex = explode("https://www.youtube.com/watch?v=", $carvval->video);
                                        //echo end($ex);
                                        ?>
                                        <div class="col-md-2">
                                            <iframe src="https://www.youtube.com/embed/<?= end($ex) ?>"></iframe>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(".deleteimg").click(function() {
        var id = $(this).data('id');
        var token = "<?= csrf_token() ?>";
        if (confirm("Are you sure want to delete this?")) {
            $.ajax({
                type: 'POST',
                url: '{{url("/admin/deleteimg")}}',
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

@include('admin.includes.footer')