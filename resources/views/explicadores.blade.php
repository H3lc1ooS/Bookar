@extends('layouts.main')

@section('title', 'Encontrar Explicador')

@section('content')
    <div id="react_0HMQ8OSKKC11R">
        <section class="header-nav-padding c-searchTutors" data-reactroot="">
            <div class="c-searchTutors__title default-width">
                <h1>Aqui estão os nossos<br />melhores explicadores<br /></h1>
            </div>
            <div class="c-searchTutors__filters c-searchFilters flex-grid--spaceBetween default-width">
                <div class="c-searchFilters__each"><label>Disciplinas:</label>
                    <div style="width:200px" class="ant-select ant-select-enabled">
                        <div class="ant-select-selection
            ant-select-selection--single" role="combobox"
                            aria-autocomplete="list" aria-haspopup="true" aria-controls="" aria-expanded="false"
                            tabindex="0">
                            <div class="ant-select-selection__rendered">
                                <div style="display:block;user-select:none;-webkit-user-select:none" unselectable="on"
                                    class="ant-select-selection__placeholder">Seleciona uma disciplina</div>
                                <div class="ant-select-search ant-select-search--inline" style="display:none">
                                    <div class="ant-select-search__field__wrap"><input autoComplete="off" value=""
                                            class="ant-select-search__field" /><span
                                            class="ant-select-search__field__mirror"> </span></div>
                                </div>
                            </div><span class="ant-select-arrow" style="user-select:none;-webkit-user-select:none"
                                unselectable="on"><i aria-label="icon: down"
                                    class="anticon anticon-down ant-select-arrow-icon"><svg viewBox="64 64 896 896"
                                        focusable="false" class="" data-icon="down" width="1em" height="1em"
                                        fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z">
                                        </path>
                                    </svg></i></span>
                        </div>
                    </div>
                </div>
                <div class="c-searchFilters__each"><label>Ordenar por:</label>
                    <div style="width:200px" class="ant-select ant-select-enabled">
                        <div class="ant-select-selection
            ant-select-selection--single" role="combobox"
                            aria-autocomplete="list" aria-haspopup="true" aria-controls="" aria-expanded="false"
                            tabindex="0">
                            <div class="ant-select-selection__rendered">
                                <div class="ant-select-selection-selected-value" title="Avaliação"
                                    style="display:block;opacity:1">Avaliação</div>
                                <div class="ant-select-search ant-select-search--inline" style="display:none">
                                    <div class="ant-select-search__field__wrap"><input autoComplete="off" value=""
                                            class="ant-select-search__field" /><span
                                            class="ant-select-search__field__mirror"> </span></div>
                                </div>
                            </div><span class="ant-select-arrow" style="user-select:none;-webkit-user-select:none"
                                unselectable="on"><i aria-label="icon: down"
                                    class="anticon anticon-down ant-select-arrow-icon"><svg viewBox="64 64 896 896"
                                        focusable="false" class="" data-icon="down" width="1em" height="1em"
                                        fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z">
                                        </path>
                                    </svg></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="c-searchTutors__tutors flex-middle-center">
                @auth
                    <form method="POST" action="{{ route('servico.store') }}"
                        class="border rounded-[0.5rem] p-6 mb-[5rem] w-[95%] h-[40vh] flex flex-col justify-between items-center">
                        @csrf
                        <section class="header flex items-center justify-between w-full">
                            <select name="disciplina" id="" class="border-none focus:ring-white underline">
                                <option disabled selected>Selecione a disciplina</option>
                                @foreach ($disciplinas as $disciplina)
                                    <option value="{{ $disciplina->id }}">{{ $disciplina->nome }}</option>
                                @endforeach
                            </select>

                            <h2 class="font-bold">{{ auth()->user()->name }}</h2>
                        </section>

                        <textarea name="descricao" id="" cols="30" rows="10"
                            class="w-full h-[60%] border-none focus:border-none focus:ring-white resize-none"
                            placeholder="Descreva aqui o seu serviço"></textarea>

                        <button type="submit"
                            class="w-full border border-black text-white bg-blue-800 p-2 font-bold rounded-[0.5rem]">Anunciar</button>
                    </form>
                @endauth

                <div class="c-searchTutors__list default-width">

                    @foreach ($explicadores as $explicador)
                        <section class="c-tutorCard mb-5" rel="noopener noreferrer">
                            <div class="c-tutorCard__image">
                                <img
                                    src="/img/{{ $explicador->user->foto }}"
                                    alt="{{ $explicador->user->name }}" />
                            </div>
                            
                            <div class="c-tutorCard__info">
                                <h3 class="c-tutorCard__name">{{ $explicador->user->name }}</h3>
                                <p class="c-tutorCard__description">{{ $explicador->descricao }}</p>
                                <div class="c-tutorCard__disciplines flex justify-between">
                                    <span class="c-badge c-badge__primary">{{ $explicador->disciplina->nome }}</span>

                                    <p>+244 {{$explicador->user->telefone}}</p>

                                    {{-- <span class="c-badge c-badge__primary">Análise Matemática</span>
                                    <span class="c-badge c-badge__primary">Cálculo diferencial e Integral</span>
                                    <span class="c-badge c-badge__primary">+ 11 disciplinas</span> --}}
                                </div>
                            </div>
                        </section>
                    @endforeach

                </div>
            </div>
        </section>
    </div>
@endsection
