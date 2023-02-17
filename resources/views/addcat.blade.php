@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="row mb-3">
                <form action="{{url('/admin/cat/add')}}" method="post">
                {{csrf_field()}}
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus >
                            </div>
                            <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Создать') }}
                                </button>
                            </div>
                        </div>
                        </form>
            </div>
        </div>
    </div>
</div>
@endsection