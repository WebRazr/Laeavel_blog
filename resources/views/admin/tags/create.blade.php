@extends('admin.layout')

@section('content')



    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Добавить тег
            <small>приятные слова..</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            {!! Form::open(['route' => 'tags.store']) !!}
            <div class="box-header with-border">
                <h3 class="box-title">Добавляем тег</h3>

                @include('admin.errors')

            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="">
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <submit class="btn btn-default">
                    <a href="{{route('tags.index')}}">назад</a>
                </submit>
                <button class="btn btn-success pull-right">Добавить</button>
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
{!! Form::close() !!}
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
