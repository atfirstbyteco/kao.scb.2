<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
	<head>
		@include('frontend.includes.meta')

		<title>โครงการก้าวคนละก้าว</title>
		<link rel="icon" type="image/png" href="{{ url('/images/nav-icon.png') }}" sizes="32x32" />

		@include('frontend.includes.stylesheet')

		@include('frontend.includes.header_script')

	</head>
	<body>
		<div id="app">

			<!-- Fixed navbar -->
	        <nav id="header" class="navbar sticky-top navbar-expand-md align-items-end">
		        <div class="container-fluid pl-0 pr-0">
		            <div class="navbar-header d-flex w-auto mr-auto">
	                    <a id="brand" class="navbar-brand" href="{{ url('/') }}">
	                    	<img src="{{ url('images/logo/logo_siri.png') }}" />
	                    </a>
	                </div>
	                <button class="navbar-toggler cd-primary-nav-trigger collapsed" type="button" data-toggle="collapse" data-target="#mainNav" aria-expanded="false">
                    	<span class="cd-menu-icon"></span>
                    </button>
		            <div class="navbar-collapse collapse" id="mainNav">
    					<ul class="navbar-nav w-100 justify-content-center nav-pills nav-fill">
		                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/') }}">หน้าหลัก</a></li>
		                    <li class="nav-item {{ Request::is('howto') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/howto') }}">วิธีบริจาค</a></li>
		                    <li class="nav-item {{ Request::is('howtowatch') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/howtowatch') }}">วิธีรับชมภาพยนตร์</a></li>
		                    <li class="nav-item {{ Request::is('about') ? 'active' : '' }}"><a class="nav-link btn-nav" href="#about">ที่มาโครงการ</a></li>
		                </ul>
		            </div>
		        </div>
		    </nav>
	        <!-- End Fixed navbar -->
