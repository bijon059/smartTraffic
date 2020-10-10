@extends('master.master')
@section('content')

<div class="container">

    <div class="row">
        <!-- scan rfid section -->
        <div class="col-sm-6">

            <form action="">
                @csrf

                <!-- textarea -->
                <div class="input-group " style="margin-top: 25px;">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-danger" id="scan">Scan</button>
                    </div>
                    <!-- /btn-group -->
                    <input type="text" class="form-control" id="uid">
                </div>

            </form>
        </div>
        <!-- checking section -->
        <div class="col-sm-6" id="js-check-buttons">
            <div class="row">
                <div class="col-sm-4">
                    <button type="button" style="margin-top: 25px; margin-left= 15px;" class="btn btn-block"
                        id="check-status">
                    </button>
                </div>
                <div class="col-sm-4">

                    <button type="button" style="margin-top: 25px;" class="btn btn-block" id="check-case"
                        data-toggle="modal" data-target="#modal-default"></button>

                </div>


            </div>
        </div>
    </div>
    <div id="js-body">
        <div class="success">
            <p><i id="note"></i></p>
        </div>
        <!-- profile info starts here -->
        <div class="row">
            <div class="col-sm-8">
                <div class="card" style="margin-top: 25px;">
                    <div class="card-header">
                        <h3 class="card-title">RFID Registerd Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body text-center">
                        <div class="row">

                            <div class="col-md-8">
                                <div>
                                    <table class="table table">
                                        <thead>

                                        </thead>

                                        <tbody style="text-align: left;">
                                            <tr>
                                                <td>Name:</td>
                                                <td id="rider-name"></td>

                                            </tr>

                                            <tr>
                                                <td>Mobile:</td>
                                                <td id="rider-mobile"></td>

                                            </tr>

                                            <tr>
                                                <td>NID No:</td>
                                                <td id="rider-nid"></td>

                                            </tr>

                                            <tr>
                                                <td>Driving License No:</td>
                                                <td id="rider-dl-no"></td>
                                            </tr>

                                            <tr>
                                                <td>Driving License Validity:</td>
                                                <td id="rider-dl-vld"></td>
                                            </tr>

                                            <tr>
                                                <td>Vehicle License No:</td>
                                                <td id="rider-vl-no"></td>
                                            </tr>

                                            <tr>
                                                <td>Vehicle License Validity:</td>
                                                <td id="rider-vl-vld"></td>
                                            </tr>

                                            <tr>
                                                <td>Engine No:</td>
                                                <td id="rider-en-no"></td>
                                            </tr>

                                            <tr>
                                                <td>Chesis No:</td>
                                                <td id="rider-chs-no"></td>
                                            </tr>

                                            <tr>
                                                <td>Insurance No:</td>
                                                <td id="rider-ins-no"></td>
                                            </tr>

                                            <tr>
                                                <td>Insurance Validity:</td>
                                                <td id="rider-ins-vld"></td>
                                            </tr>

                                            <tr>
                                                <td>Email</td>
                                                <td id="rider-email"></td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td id="rider-address"></td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <img class="d-block w-100" style="height: 250px;border-radius:15px;"
                                    src="{{ asset('bi-05 300X300.jpg') }}" alt="Third slide">
                            </div>


                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- case list starts here -->
            <div class="col-sm-4">
                <div class="card" style="margin-top: 25px;">
                    <div class="card-header">
                        <h3 class="card-title">Case List</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body text-center">
                        <div class="row">

                            <div class="col-md-12">
                                <div>
                                    <table class="table table">
                                        <thead>

                                        </thead>
                                        <tbody style="text-align: left; overflow-y:scroll; max-height: 200px" id="cases-tr">

                                        </tbody>
                                    </table>

                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- case list ends here -->
        </div>
        <!-- profile info ends here -->
    </div>

</div>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- modal start --}}
            <div class="modal-body">
                <div>
                    <table class="table table">
                        <thead>
                            <th>#</th>
                            <th>Case Name</th>
                            <th>Case Fees</th>
                            <th>Duration</th>
                        </thead>
                        <tbody style="text-align: left;" id="">
                        <form action="{{ route('insert.traffic') }}" method="post">
                                @csrf
                                <input type="hidden" name="traffic_id" value="9">
                                <input type="hidden" name="rider_id" id="rider_id" value="">
                                <input type="hidden" name="cases_id" id="cases_id" value="">
                                @foreach ($cases as $case)
                                <tr>
                                    <td>
                                        <input type="checkbox" class="cases-js" name="case_id" value="{{ $case->id }}">
                                    </td>
                                    <td>
                                        {{ $case->name }}
                                    </td>
                                    <td>
                                        {{ $case->fee }}

                                    </td>
                                    <td>
                                        {{ $case->expiration_date }}

                                    </td>
                                </tr>
                                @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
            <div class="modal-footer">
                <div style="float: right;">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

                <button type="submit" class="btn btn-primary" id="submit">Submit Case</button>
            </div>
        </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>



@endsection

@section('js')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $('#js-body').css('display','none');

    var token = "{{ csrf_token() }}";
    function uid() {
            $.ajax({
                type: "GET",
                url: "{{ route('getuid') }}",
                async: false,
                data: {
                    "_token": token,
                },
                success: function(data) {
                    $('#uid').val(data);
                }
            });
        }
    $('#scan').on('click', function() {
        $('#cases-tr').text('');
        uid();

            $.ajax({
                type: "GET",
                url: "{{ route('traffic') }}",
                async: false,
                data: {
                    "_token": token,
                },
                success: function(data) {
                    $('#js-body').css('display','block');
                        if (data.rider.check_status == 1) {
                            $('#check-status').text('Checked');
                            $('#check-status').addClass('btn-success');
                            $('#note').text('Checked at: '+data.rider.last_checking_time);
                        } else {
                            $('#check-status').text('Not checked');
                            $('#check-status').addClass('btn-danger');
                            $('#note').text('Checked at: '+data.rider.last_checking_time);
                        }
                        if (data.rider.case_status !=0) {
                            $('#check-case').text('Cased');
                            $('#check-case').addClass('btn-warning');
                        } else {
                            $('#check-case').text('No cases');
                            $('#check-case').addClass('btn-success');
                        }
                        $('#rider-name').text(data.rider.first_name+' '+data.rider.last_name);
                        $('#rider-mobile').text(data.rider.mobile);
                        $('#rider-nid').text(data.rider.nid_no);
                        $('#rider-dl-no').text(data.rider.driving_license_no);
                        $('#rider-dl-vld').text(data.rider.driving_license_validity);
                        $('#rider-vl-no').text(data.rider.vehicle_license_no);
                        $('#rider-vl-vld').text(data.rider.vehicle_validity);
                        $('#rider-en-no').text(data.rider.engine_no);
                        $('#rider-chs-no').text(data.rider.chesis_no);
                        $('#rider-ins-no').text(data.rider.insurance_no);
                        $('#rider-ins-vld').text(data.rider.insurance_validity);
                        $('#rider-email').text(data.rider.email);
                        $('#rider-address').text(data.rider.address);
                        $('#rider_id').val(data.rider.id);
                        $('#cases-tr').append('');
                        if (data.rider.case_status !=0){
                            $(data.cases).each(function(index, value){
                                var html = '';
                                html += '<tr><td><div class="icheck-primary"><input type="checkbox"><span>'+ value.cases[0]['name'] +'</span></div></td></tr>';
                                $('#cases-tr').append(html);
                            });
                        } else {
                            $('#cases-tr').text('No cases found...');
                        }
                }
            });
    });
    var case_id = [];
        $('input[type="checkbox"]').on('click', function() {

                if ($(this).prop("checked") == true) {

                    case_id.push($(this).val());

                } else if ($(this).prop("checked") == false) {
                    for (var i = 0; 1<case_id.length; i++){
                        if (case_id[i] == $(this).val()) {
                            case_id.splice(i, $(this).val());
                        }
                    }
                }
            });

            $('#submit').on('click', function() {
                console.log(case_id.toString());
                $('#cases_id').val(case_id.toString());

            });

</script>

@endsection()
