@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> {{ __('Edit') }}: {{ $grape_type->name }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('grape_types.update',$grape_type->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <div class="col">
                                    <label>Nome</label>
                                    <input class="form-control" type="text" placeholder="{{ __('Nome') }}" name="name" value="{{ $grape_type->name }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label>Percentagem aproveitamento</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" value="{{ $grape_type->yeld_percentage*100 }}" min="0" max="100" placeholder="{{ __('Percentagem') }}" name="yeld_percentage" required autofocus>
                                    <div class="input-group-append"><span class="input-group-text">%</span></div>
                                </div>
                            </div>
 
                            <button class="btn btn-block btn-success" type="submit">{{ __('Save') }}</button>
                            <a href="{{ route('notes.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a> 
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

@section('javascript')

@endsection