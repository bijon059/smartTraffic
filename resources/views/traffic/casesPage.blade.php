@extends('master.master')
@section('content')
<div class="container">

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
                    <div class="card-body text-center" style="overflow-y:scroll">
                        <div class="row">

                            <div class="col-md-12">
                                <div>
                                    <table class="table table">
                                        <thead>

                                        </thead>
                                        <tbody style="text-align: left;" id="cases-tr">

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
