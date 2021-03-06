@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
	<!-- Content Header (Page header) -->
	<section class="content-header" style="margin-bottom: 10px;">
	    <h1>
	        @yield('contentheader_title', 'Inicio')
	        <small>@yield('contentheader_description')</small>
	    </h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
	        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
	    </ol>
	</section>

	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 col-md-offset-0">
				<div class="panel panel-default">
					<div class="panel-heading">Inicio</div>

					<div class="panel-body">
						{{ trans('adminlte_lang::message.logged') }}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
