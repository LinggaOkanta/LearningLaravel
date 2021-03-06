@extends('Admin.layouts.master')
@section('sidemenu')

<div class="main-menu">
	<h5 class="sidenav-heading">Main</h5>
	<ul id="side-main-menu" class="side-menu list-unstyled">                  
		<li><a href="index.html"> <i class="icon-home"></i>Home</a></li>
		<li><a href="forms.html"> <i class="icon-form"></i>Forms</a></li>
		<li><a href="tables.html"> <i class="icon-grid"></i>Tables</a></li>
		<li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts</a></li>
		<li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Example dropdown </a>
		  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
		    <li><a href="#">Page</a></li>
		    <li><a href="#">Page</a></li>
		    <li><a href="#">Page</a></li>
		  </ul>
		</li>
		<li><a href="login.html"> <i class="icon-interface-windows"></i>Login page</a></li>
		<li> <a href="#"> <i class="icon-mail"></i>Demo
		    <div class="badge badge-warning">6 New</div></a>
		</li>
	</ul>
	</div>
	<div class="admin-menu">
		<h5 class="sidenav-heading">Second menu</h5>
	  	<ul id="side-admin-menu" class="side-menu list-unstyled"> 
	    	<li> <a href="#"> <i class="icon-screen"> </i>Demo</a></li>
	    	<li> <a href="#"> <i class="icon-flask"> </i>Demo
	    	    <div class="badge badge-info">Special</div></a></li>
	    	<li> <a href=""> <i class="icon-flask"> </i>Demo</a></li>
	    	<li> <a href=""> <i class="icon-picture"> </i>Demo</a></li>
	  	</ul>
	</div>
</div>
@endsection