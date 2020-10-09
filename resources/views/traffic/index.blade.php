@extends('master.master')
@section('content')

<div class="container" style="margin-bottom: 150px;">

    <div class="row">
        <div class="col-sm-6">

            <form action="">
                @csrf

                <!-- textarea -->
                <div class="input-group " style="margin-top: 25px;">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-danger">Scan</button>
                    </div>
                    <!-- /btn-group -->
                    <input type="text" class="form-control" placeholder="Press To Scan Your Card">
                </div>

            </form>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-4">
                    <button type="button" style="margin-top: 25px; margin-left= 15px;"
                        class="btn btn-block btn-danger">Not
                        Check</button>
                </div>
                <div class="col-sm-4">

                    <button type="button" style="margin-top: 25px;" class="btn btn-block btn-success">NO
                        Cases</button>

                </div>
                <div class="col-sm-4">

                    <div class="col-sm-8" style="margin-top: 32px;">

                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div>
                <div>

                </div>
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
                                                <td>Bijan Kanti Munshi</td>

                                            </tr>

                                            <tr>
                                                <td>Driving Licences No:</td>
                                                <td>78945632164555555555</td>
                                            </tr>
                                            <tr>
                                                <td>Vehicle Licences No:</td>
                                                <td>7894563214454646464545</td>
                                            </tr>
                                            <tr>
                                                <td>Insurance No:</td>
                                                <td>78945632164646666666666</td>
                                            </tr>
                                            <tr>
                                                <td>Name:</td>
                                                <td>Bijan Kanti Munshi</td>

                                            </tr>

                                            <tr>
                                                <td>Driving Licences No:</td>
                                                <td>78945632164555555555</td>
                                            </tr>
                                            <tr>
                                                <td>Vehicle Licences No:</td>
                                                <td>7894563214454646464545</td>
                                            </tr>
                                            <tr>
                                                <td>Insurance No:</td>
                                                <td>78945632164646666666666</td>
                                            </tr>
                                            <tr>
                                                <td>Name:</td>
                                                <td>Bijan Kanti Munshi</td>

                                            </tr>

                                            <tr>
                                                <td>Driving Licences No:</td>
                                                <td>78945632164555555555</td>
                                            </tr>
                                            <tr>
                                                <td>Vehicle Licences No:</td>
                                                <td>7894563214454646464545</td>
                                            </tr>
                                            <tr>
                                                <td>Insurance No:</td>
                                                <td>78945632164646666666666</td>
                                            </tr>
                                            <tr>
                                                <td>Name:</td>
                                                <td>Bijan Kanti Munshi</td>

                                            </tr>

                                            <tr>
                                                <td>Driving Licences No:</td>
                                                <td>78945632164555555555</td>
                                            </tr>
                                            <tr>
                                                <td>Vehicle Licences No:</td>
                                                <td>7894563214454646464545</td>
                                            </tr>
                                            <tr>
                                                <td>Insurance No:</td>
                                                <td>78945632164646666666666</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <img class="d-block w-100"
                                style="height: 250px;border-radius:15px;"
                                    src="{{ asset('bi-05 300X300.jpg') }}" alt="Third slide">
                            </div>


                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div> <!-- /.card -->
        </div>
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
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                <input type="checkbox" id="remember">
                                                </div>
                                            </td>
                                            <td>Helmet</td>

                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                <input type="checkbox" id="remember">
                                                </div>
                                            </td>
                                            <td>Driving Licences No</td>

                                        </tr>
                                        <tr>
                                            <td>Vehicle Licences No:</td>
                                            <td>7894563214454646464545</td>
                                        </tr>
                                        <tr>
                                            <td>Insurance No:</td>
                                            <td>78945632164646666666666</td>
                                        </tr>
                                        <tr>
                                            <td>Name:</td>
                                            <td>Bijan Kanti Munshi</td>

                                        </tr>

                                        <tr>
                                            <td>Driving Licences No:</td>
                                            <td>78945632164555555555</td>
                                        </tr>
                                        <tr>
                                            <td>Vehicle Licences No:</td>
                                            <td>7894563214454646464545</td>
                                        </tr>
                                        <tr>
                                            <td>Insurance No:</td>
                                            <td>78945632164646666666666</td>
                                        </tr>
                                        <tr>
                                            <td>Name:</td>
                                            <td>Bijan Kanti Munshi</td>

                                        </tr>

                                        <tr>
                                            <td>Driving Licences No:</td>
                                            <td>78945632164555555555</td>
                                        </tr>
                                        <tr>
                                            <td>Vehicle Licences No:</td>
                                            <td>7894563214454646464545</td>
                                        </tr>
                                        <tr>
                                            <td>Insurance No:</td>
                                            <td>78945632164646666666666</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                <input type="checkbox" id="remember">
                                                </div>
                                            </td>
                                            <td>Bijan Kanti Munshi</td>

                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>


                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>




@endsection

@section('js')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
<<<<<<< HEAD
    $(document).ready(function(){
        // function uid() {
        //     var token = "{{ csrf_token() }}";
        //     $.ajax({
        //         type: "GET",
        //         url: "{{ route('getuid') }}",
        //         async:false,
        //         data: {
        //                 "_token" : token,
        //                 },
        //         success:function(data){
        //             $('#uid').val(data);
        //         }
        //     });
        // }
        // setInterval(function () {
        //     uid();
        // },500);
    });
=======
    // $(document).ready(function(){
    //     function uid() {
    //         var token = "{{ csrf_token() }}";
    //         $.ajax({
    //             type: "GET",
    //             url: "{{ route('getuid') }}",
    //             async:false,
    //             data: {
    //                     "_token" : token,
    //                     },
    //             success:function(data){
    //                 $('#uid').val(data);
    //             }
    //         });
    //     }
    //     setInterval(function () {
    //         uid();
    //     },500);
    // });
>>>>>>> 3c687df6040613f8208b337ee758bac9d3b6eb19
</script>

@endsection()
