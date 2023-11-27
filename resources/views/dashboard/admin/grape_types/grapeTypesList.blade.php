@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <div class="card">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-6">{{ __('Castas') }}</div>
                        <div class="col-6 text-right">
                          <a href="{{ route('grape_types.create') }}" class="btn btn-primary">{{ __('Criar Casta') }}</a>
                        </div>
                        
                      </div>
                    </div>
                    <div class="card-body">
                        
                        <br>
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>{{ __('Nome') }}</th>
                            <th class="text-center">{{ __('Percentagem aproveitamento') }}</th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($grape_types as $grape_type)
                            <tr>
                              <td>{{ $grape_type->name }}</td>
                              <td class="text-center">{{ $grape_type->readable_yeld_percentage }}</td>
                              <td>
                                <a href="{{ route("grape_types.show",[$grape_type->id]) }}" class="btn btn-block btn-primary">{{ __('Ver') }}</a>
                              </td>
                              <td>
                                <a href="{{ route("grape_types.edit",[$grape_type->id]) }}" class="btn btn-block btn-primary">{{ __('Editar') }}</a>
                              </td>
                              <td>
                                <form action="{{ route('grape_types.destroy', $grape_type->id ) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-block btn-danger">{{ __('Apagar') }}</button>
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
          </div>
        </div>

@endsection


@section('javascript')

@endsection

