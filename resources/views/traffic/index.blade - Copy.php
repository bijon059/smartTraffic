@extends('master.master')
@section('content')

<div class="container" >

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
                <input type="text" class="form-control" id="uid" >
                </div>

            </form>
        </div>
        <!-- checking section -->
        <div class="col-sm-6" id="js-check-buttons">
            <div class="row">
                @if(!empty($riders))
                <div class="col-sm-4">
                    <button type="button" style="margin-top: 25px; margin-left= 15px;" class="btn btn-block {{ ($riders->check_status == 1) ? 'btn-success' : 'btn-danger' }}">
                        {{ ($riders->check_status == 1) ? 'Checked' : 'Not Checked' }}
                    </button>
                </div>
                <div class="col-sm-4">

                    <button type="button" style="margin-top: 25px;" class="btn btn-block {{ ($riders->check_status == 1) ? 'btn-warning' : 'btn-success' }}">{{ ($riders->check_status == 1) ? 'Has case' : 'No case' }}</button>

                </div>
                @endif
                <div class="col-sm-4">

                    <div class="col-sm-8" style="margin-top: 32px;">

                    </div>
                </div>


            </div>
        </div>
    </div>
    <div id="js-body">
        @if($riders->check_status == 1)
        <div class="success">
            <p><i>Last checked at {{ $riders->last_checking_time }} </i></p>
        </div>
        @endif
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
                                                <td>{{ $riders->first_name }} {{$riders->last_name}}</td>

                                            </tr>

                                            <tr>
                                                <td>Mobile:</td>
                                                <td>{{ $riders->mobile }}</td>

                                            </tr>

                                            <tr>
                                                <td>NID No:</td>
                                                <td>{{ $riders->nid_no }}</td>

                                            </tr>

                                            <tr>
                                                <td>Driving License No:</td>
                                                <td>{{ $riders->driving_license_no }}</td>
                                            </tr>

                                            <tr>
                                                <td>Driving License Validity:</td>
                                                <td>{{ $riders->driving_license_validity }}</td>
                                            </tr>

                                            <tr>
                                                <td>Vehicle License No:</td>
                                                <td>{{ $riders->vehicle_license_no }}</td>
                                            </tr>

                                            <tr>
                                                <td>Vehicle License Validity:</td>
                                                <td>{{ $riders->vehicle_validity }}</td>
                                            </tr>

                                            <tr>
                                                <td>Engine No:</td>
                                                <td>{{ $riders->engine_no }}</td>
                                            </tr>

                                            <tr>
                                                <td>Chesis No:</td>
                                                <td>{{ $riders->chesis_no }}</td>
                                            </tr>

                                            <tr>
                                                <td>Insurance No:</td>
                                                <td>{{ $riders->insurance_no }}</td>
                                            </tr>

                                            <tr>
                                                <td>Insurance Validity:</td>
                                                <td>{{ $riders->insurance_validity }}</td>
                                            </tr>

                                            @if($riders->email != '')
                                            <tr>
                                                <td>Email</td>
                                                <td>{{ $riders->email }}</td>
                                            </tr>
                                            @endif
                                            @if($riders->address != '')
                                            <tr>
                                                <td>Address</td>
                                                <td>{{ $riders->address }}</td>
                                            </tr>
                                            @endif

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <img class="d-block w-100" style="height: 250px;border-radius:15px;" src="{{ asset('bi-05 300X300.jpg') }}" alt="Third slide">
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
                                        <tbody style="text-align: left;">

                                            @foreach($cases as $case)
                                            <tr>
                                                <td>
                                                    <div class="icheck-primary">
                                                        <input type="checkbox" id="remember">
                                                    </div>
                                                </td>
                                                <td>{{ $case->name }}</td>

                                            </tr>
                                            @endforeach

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




@endsection

@section('js')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
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
    $('#js-body').css('display','none');
    $('#js-check-buttons').css('display','none');
    $('#scan').on('click', function() {
        uid();
        function indexRender() {
            $.ajax({
                type: "GET",
                url: "{{ route('index') }}",
                async: false,
                data: {
                    "_token": token,
                },
                success: function(data) {
                    console.log(data)
                }
            });
        }
        $('#js-body').css('display','block');
        $('#js-check-buttons').css('display','block');
    });
</script>

@endsection()
