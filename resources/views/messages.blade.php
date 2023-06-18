@extends('layouts.main')

@section('title', 'Mensagens')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 dash__user-info">

                <div class="row">
                    <div class="col-sm-12 text-center dash-block">
                        <div class="dash__user-info-content">
                            <div class="mt-15 mb-[5rem]">
                                <h4 class="usename">{{ Auth::user()->name }}</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="dash-block dash__notifications">
                            <div class="dash-block__title">
                                <h4>Mensagens</h4>
                            </div>
                            <div class="dash-block__content">
                                <a href="">
                                    António
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
