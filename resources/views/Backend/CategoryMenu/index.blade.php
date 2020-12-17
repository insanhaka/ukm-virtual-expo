@extends('Backend.Layout.app')

@section('css')

@endsection

@section('content')
<!-- Page content -->
<div class="container-fluid" style="margin-top: 3%; margin-bottom: 6%;">

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-primary">Data Category Menu</h2>
                </div>
                <div class="col-md-6 text-right">
                    {{-- <a class="btn btn-primary" href="/dapur/api-url/add" role="button">Add Data</a> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4>Data From API</h4>
                </div>
                <div class="col-md-6 text-right">
                    {{-- <a class="btn btn-primary" href="/dapur/api-url/add" role="button">Add Data</a> --}}
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-sm table-bordered display responsive nowrap" style="width:100%">
                <thead class="bg-primary" style="color: #ffff;">
                    <tr>
                        <th>Category Menu</th>
                        <th>url</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $data)
                    <tr>
                        <td>{!!$data['name']!!}</td>
                        <td>{!!$data['uri']!!}</td>
                        <td>
                            <a style="margin-right: 20px;" href="{{url()->current().'/edit/'.$data['id']}}"><i class="fa fa-paper-plane text-primary" style="font-size: 18px;"></i> Publish</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4>Data Published</h4>
                </div>
                <div class="col-md-6 text-right">
                    {{-- <a class="btn btn-primary" href="/dapur/api-url/add" role="button">Add Data</a> --}}
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-sm table-bordered display responsive nowrap" style="width:100%">
                <thead class="bg-primary" style="color: #ffff;">
                    <tr>
                        <th>Category Menu</th>
                        <th>url</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($database as $item)
                    <tr>
                        <td>{!!$item->product_category_name!!}</td>
                        <td>{!!$item->product_category_uri!!}</td>
                        <td>
                            <a style="margin-right: 20px;" href="{{url()->current().'/edit/'.$item->product_category_id}}"><i class="fa fa-edit text-primary" style="font-size: 21px;"></i></a>
                            <a style="margin-right: 10px;" href="{{url()->current().'/delete/'.$item->product_category_id}}"><i class="fa fa-trash text-primary" style="font-size: 21px;"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $("#category-menu").addClass("active");
    });
</script>

<script type="text/javascript">
    @if ($message = Session::get('created'))
            iziToast.success({
                        title: 'Success',
                        message: 'Data berhasil disimpan',
                        position: 'topRight'
                    });
    @endif
</script>
<script type="text/javascript">
    @if ($message = Session::get('updated'))
            iziToast.success({
                        title: 'Success',
                        message: 'Data berhasil diubah',
                        position: 'topRight'
                    });
    @endif
</script>
<script type="text/javascript">
    @if ($message = Session::get('deleted'))
            iziToast.success({
                        title: 'Success',
                        message: 'Data berhasil dihapus',
                        position: 'topRight'
                    });
    @endif
</script>
<script type="text/javascript">
    @if ($message = Session::get('warning'))
            iziToast.error({
                        title: 'Failed',
                        message: 'Data gagal diproses',
                        position: 'topRight'
                    });
    @endif
</script>

@endsection
