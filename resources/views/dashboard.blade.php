@extends('layouts.main')

@section('title', 'Perfil')

@section('content')
    <div class="container">
        <div class="col-md-9">
            <div class="row">
                <div class="col-sm-12">
                    <div class="dash-block dash__notifications">
                        <div class="dash-block__title">
                            <h4>Editar meu perfil</h4>
                        </div>
                        <div class="dash-block__content">
                            <ul class="list-unstyled me-list">
                                <li>
                                    <div class="py-12">
                                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                                            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                                <div class="max-w-xl">
                                                    @include('profile.partials.update-profile-information-form')
                                                </div>
                                            </div>

                                            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                                <div class="max-w-xl">
                                                    @include('profile.partials.update-password-form')
                                                </div>
                                            </div>

                                            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                                <div class="max-w-xl">
                                                    @include('profile.partials.delete-user-form')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>
@endsection
