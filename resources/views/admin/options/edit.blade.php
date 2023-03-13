@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Изменить</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <!-- end page title end breadcrumb -->
            <form action="{{ route('options.update', $option->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <label for="key">Ключ</label>
                                <select name="key" id="key" class="form-control">
                                    <option value="telegram_kanal" @if ($option->key == 'telegram_kanal') @endif>Telegram канал</option>
                                    <option value="instagram" @if($option->key == 'instagram') selected @endif>Instagram</option>
                                    <option value="facebook" @if($option->key == 'facebook') selected @endif>Facebook</option>
                                    <option value="telegram" @if($option->key == 'telegram') selected @endif>Telegram</option>
                                </select>
                                @if($errors->has('key'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('key') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-8">
                                <label for="title_ru">Ценить</label>
                                <input type="text" id="value" class="form-control" name="value" value="{{ $option->value }}">
                                @if($errors->has('value'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('value') }}
                                    </div>
                                @endif
                            </div>

                        </div><br><samp></samp>

                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success btn-block">Обновить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
