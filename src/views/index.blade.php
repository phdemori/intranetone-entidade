@extends('IntranetOne::io.layout.dashboard')

{{-- page level styles --}}
@section('header_styles')
    <script src="{{ asset('io/vendors/cidades_otimizado.js') }}" charset="ISO-8859-1" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pickadate-full.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('io/services/io-entidade.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('io/vendors/select2/css/select2.min.css') }}"
@stop

@section('main-heading')
@stop

@section('main-content')
	<!--section ends-->
			@component('IntranetOne::io.components.nav-tabs',
			[
				"_id" => "default-tablist",
				"_active"=>0,
				"_tabs"=> [
					[
						"tab"=>"Listar",
						"icon"=>"ico ico-list",
						"view"=>"Entidade::table-list"
					],
					[
						"tab"=>"Cadastrar",
						"icon"=>"ico ico-new",
						"view"=>"Entidade::form"
					],
				]
			])
			@endcomponent
	<!-- content -->
  @stop

  @section('footer_scripts')
  <script src="{{ asset('js/pickadate-full.min.js') }}" type="text/javascript"></script>

  <script src="{{ asset('io/vendors/jquery.mask.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('io/vendors/jquery.autocomplete.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('io/vendors/select2/js/select2.min.js') }}" type="text/javascript"></script>

  <script src="{{ asset('io/services/io-entidade-babel.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('io/services/io-entidade-mix.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('io/services/io-entidade.min.js') }}" type="text/javascript"></script>

@stop
