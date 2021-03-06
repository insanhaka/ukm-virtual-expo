@extends('Backend.Layout.app')

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.26.0/slimselect.min.css" rel="stylesheet">
@endsection

@section('content')
<!-- Page content -->
<div class="container-fluid" style="margin-top: 3%; margin-bottom: 6%;">

    <div class="card">
        <div class="card-header">
          <h2 class="text-primary">Edit API Url Data</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="/dapur/api-url/update/{!!$data->id!!}">
                {{ csrf_field() }}
                <div class="container" style="margin-top: -10px;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Url</label>
                                <input type="text" class="form-control" id="url" name="url" placeholder="api url" value="{!!$data->url!!}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" style="float: right; margin-top: 20px;">
                                <input class="btn btn-primary" type="submit" value="Save">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</div>    
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.26.0/slimselect.min.js"></script>

<script>
    $(document).ready(function() {   
        $("#api-url").addClass("active");
    });
</script>

<script>
    $(document).ready(function() {
        new SlimSelect({
            select: '#slimselect',
        })
    });
</script>
<script>
    $(document).ready(function() {
        new SlimSelect({
            select: '#slimselectmulti',
            placeholder: 'Select Permissions',
        })
    });
</script>
@endsection