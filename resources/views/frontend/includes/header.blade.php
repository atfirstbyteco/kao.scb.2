<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
	<head>
		@include('frontend.includes.meta')

		<title>Title</title>
		<link rel="icon" type="image/png" href="{{ url('/images/icon/icon.ico') }}" sizes="32x32" />

		@include('frontend.includes.stylesheet')

		@include('frontend.includes.header_script')

	</head>
	<body>
		<div id="app">

			<!-- Fixed navbar -->
	        <nav id="header" class="navbar sticky-top navbar-expand-md justify-content-center">
	           nav
	        </nav>
	        <!-- End Fixed navbar -->