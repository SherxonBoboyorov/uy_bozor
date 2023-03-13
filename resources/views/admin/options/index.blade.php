@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Список Параметры</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <a href="{{ route('options.create')}}" class="btn bg-success mb-3">Добавить Параметры +</a>

            <div class="card">
                <div class="card-body">

                    @if(session('message'))

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ session('message') }}
                        </div>

                    @endif

                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 2%;">#</th>
                            <th>Ключ</th>
                            <th>Ценить</th>
                            <th colspan="2" style="width: 2%;">Действий</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($options as $option)
                            <tr>
                                <td>{{ $option->id }}</td>
                                <td>{{ $option->key }}</td>
                                <td>{{ $option->value }}</td>
                                <td>
                                    <a href="{{ route('options.edit', $option->id) }}" class="btn btn-primary btn-icon">
                                        <i class="fa fa-edit">Изменить</i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('options.destroy', $option->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-icon">
                                            <i class="fa fa-trash">Удалить</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
@endsection
