@extends('layouts.main')

@section('content')

    <div class="container-lg" style="margin: 0 auto">
        <div class="row mt-5">
            <div class="col-lg-4 col-md-4 col-sm-12 text-center mb-3">
                <div class="card" style="width: 28rem">
                    <img src="" alt="">
                    <div class="card-body">
                        <div class="card-title">{{ $key }}</div>
                        <div class="card-text">content</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
