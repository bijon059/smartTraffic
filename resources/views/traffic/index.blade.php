@extends('master.master')
@section('content')

<div class="container">

    <div class="row">
        <div class="col-sm-6">
            <form action="">
                @csrf
          <!-- textarea -->
          <div class="form-group">
            <label></label>
            <textarea class="form-control" rows="2"name="uid" id="uid" placeholder="Please Tag your Card / Key Chain to display ID"></textarea>
          </div>
        </form>
        </div>
      </div>
</div>

@endsection

@section('js')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
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
</script>

@endsection()
