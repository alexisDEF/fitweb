@extends('adminlte::page')

@section('title', 'FitWeb')

@section('content_header')
    <h1 class="m-0 text-dark">Page des programmes d'entrainement</h1>
@stop

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nom: activate to sort column descending" style="width: 184.625px;">Libellé</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nom: activate to sort column descending" style="width: 184.625px;">Programme assigné à</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 67.0156px;"></th></tr>
                                            </thead>
                                            <tbody>
                                            @foreach($programs as $program)
                                                <tr>
                                                    <td>
                                                        {{$program->name}}
                                                    </td>
                                                    <td>
                                                        <a href="{{route('customer.show',$program->user->id)}}" >{{$program->user->firstname}} {{$program->user->lastname}}</a>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-xs btn-default" href="{{route("program.show",$program->id)}}">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a type="button" class="btn btn-xs btn-danger" href="http://fitweb.test/program/todelete/{{$program->id}}" ><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop