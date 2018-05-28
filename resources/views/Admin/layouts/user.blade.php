@extends('Admin.layouts.master')
@section('content')

<!-- Breadcrumb-->
<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">User</li>
    </ul>
  </div>
</div>
<section class="forms">
	<div class="container-fluid">
		<header> 
    		<h1 class="h3 display">User Menu</h1>
    	</header>
    	<div class="row">
			<div class="col-lg-12">
				<div class="card">
    		        <div class="card-header d-flex align-items-center">
    		        	<h4>Search User</h4>
    		        </div>
    		        <div class="card-body">
    		        	<form class="form-horizontal">
    		        		<div class="form-group row">
    		                	<label class="col-sm-2">User ID</label>
    		                	<div class="col-sm-9">
    		                		<div class="row">
    		                			<div class="col-sm-4">
    		                				<input type="text" placeholder="User ID" class="form-control">
    		                			</div>
    		                			<div class="col-sm-2">
    		                				&nbsp;
    		                			</div>
    		                			<div class="col-sm-2">
    		                				<label>Username</label>
    		                			</div>
    		                			<div class="col-sm-4">
            								<input type="text" placeholder="Username" class="form-control">				
    		                			</div>
    		                		</div>
    		                	</div>    		                	
    		              	</div>
			                <div class="form-group row">       
			                	<label class="col-sm-2">Full Name</label>
			                	<div class="col-sm-9">
    		                		<div class="row">
    		                			<div class="col-sm-4">
    		                				<input type="text" placeholder="Full Name" class="form-control">
    		                			</div>
    		                			<div class="col-sm-2">
    		                				&nbsp;
    		                			</div>
    		                			<div class="col-sm-2">
    		                				<label>Phone Number</label>
    		                			</div>
    		                			<div class="col-sm-4">
            								<input type="text" placeholder="Phone Number" class="form-control">			
    		                			</div>
    		                		</div>
    		                	</div>   
			                </div>
			                <div class="form-group row">       
			                	<label class="col-sm-2">Email</label>
			                	<div class="col-sm-9">
    		                		<div class="row">
    		                			<div class="col-sm-4">
    		                				<input type="email" placeholder="Email" class="form-control">
    		                			</div>
    		                			<div class="col-sm-2">
    		                				&nbsp;
    		                			</div>
    		                			<div class="col-sm-2">
    		                				<label>Birthday Date</label>
    		                			</div>
    		                			<div class="col-sm-4">
            								<div class="input-group date" id="birthdayUserSearch" data-target-input="nearest">
            								    <input type="text" placeholder="DD-MM-YYYY" class="form-control datetimepicker-input" data-target="#birthdayUserSearch"/>
            								    <div class="input-group-append" data-target="#birthdayUserSearch" data-toggle="datetimepicker">
            								        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            								    </div>
            								</div>				
    		                			</div>
    		                		</div>
    		                	</div>  
			                </div>
			                <div class="form-group row">       
			                	<label class="col-sm-2">Status</label>
			                	<div class="col-sm-3">
			                		<select name="statusUser" class="form-control">
			                        	<option>Active</option>
			                        	<option>In Active</option>
			                        </select>
			                	</div>
			                </div>
			                <div class="line"></div>
			                <div class="form-group row">
			                	<div class="col-sm-10 offset-sm-0">
			                		<button type="submit" class="btn btn-outline-secondary">Reset</button>
                        			<button type="submit" class="btn btn-outline-primary">
                        				<i class="fa fa-search" aria-hidden="true"></i> Search
                        			</button>
                      			</div>
                      			<div class="col-sm-2 offset-sm-0">
                      				<button type="button" data-toggle="modal" data-target="#addUser" class="btn btn-primary">
         								<span class="fa fa-plus"></span> Add New User 
        							</button>
        							<div id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
					                    <div role="document" class="modal-dialog">
					                    <div class="modal-content">
					                        <div class="modal-header">
					                        	<h5 id="exampleModalLabel" class="modal-title">Add New User</h5>
					                        	<button type="button" data-dismiss="modal" aria-label="Close" class="close">
					                        		<span aria-hidden="true">×</span>
					                        	</button>
					                        </div>
					                        <div class="modal-body">
					                        	<form>
					                        		<div class="form-group">
					                        			<label>Full Name</label>
					                        			<input type="text" placeholder="Full Name" class="form-control">
					                        		</div>
					                        		<div class="form-group">
					                        			<label>Birthday Date</label>
					                        			<div class="input-group date" id="birthdayUserAdd" data-target-input="nearest">
			            								    <input type="text" placeholder="DD-MM-YYYY" class="form-control datetimepicker-input" data-target="#birthdayUserAdd"/>
			            								    <div class="input-group-append" data-target="#birthdayUserAdd" data-toggle="datetimepicker">
			            								        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
			            								    </div>
			            								</div>
					                        		</div>
					                        		<div class="form-group">
					                        			<label>Email Address</label>
					                        			<input type="email" placeholder="Email Address" class="form-control">
					                        		</div>
					                        		<div class="form-group">
					                        			<label>Phone Number</label>
					                        			<input type="text" placeholder="Phone Number" class="form-control">
					                        		</div>
					                        		<div class="form-group">
					                        			<label>Username</label>
					                        			<input type="text" placeholder="Username" class="form-control">
					                        		</div>
					                        		<div class="form-group">
					                        			<label>Password</label>
					                        			<input type="password" placeholder="Password" class="form-control">
					                        		</div>
					                        	</form>
					                        </div>
					                        <br>
					                        <div class="modal-footer">
					                          <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
					                          <button type="button" class="btn btn-primary">Save Changes</button>
					                        </div>
					                        
					                    </div>
					                    </div>
					                </div>
                      			</div>
			                </div>
    		            </form>
    		        </div>
    		        <div class="card-header">
                  		<h4>Table User</h4>
                	</div>
                	<div class="card-body">
                  		<div class="table-responsive">
                  		  	<table class="table table-hover">
                  		  	  	<thead>
                  		  	  		<tr>
                  		  	  			<th>#</th>
                  		  	  			<th>Full Name</th>
                  		  	  			<th>Username</th>
                  		  	  			<th>Email Address</th>
                  		  	  			<th>Phone Number</th>
                  		  	  			<th>Birthday</th>
                  		  	  			<th>Status</th>
                  		  	  			<th>Action</th>
                  		  	  		</tr>
                  		  	  	</thead>
                  		  	  	<tbody>
                  		  	  		<tr>
                  		  	  			<th scope="row">1</th>
                  		  	  			<td>Mark Dog</td>
                  		  	  			<td>@mdo</td>
                  		  	  			<td>mark.dog@gmail.com</td>
                  		  	  			<td>08188888888</td>
                  		  	  			<td>03-May-2000</td>
                  		  	  			<td>Active</td>
                  		  	  			<td>
                  		  	  				<a href="#" class="btn btn-primary">
         										<span class="fa fa-edit"></span> Edit
        									</a>
        									<a href="#" class="btn btn-danger">
         										<span class="fa fa-trash"></span> Delete
        									</a>
                  		  	  			</td>
                  		  	  		</tr>
                  		  	  		<tr>
                  		  	  			<th scope="row">1</th>
                  		  	  			<td>Jacob Snell</td>
                  		  	  			<td>@jcbs</td>
                  		  	  			<td>Jacob.Snell@gmail.com</td>
                  		  	  			<td>08111111111</td>
                  		  	  			<td>13-june-1974</td>
                  		  	  			<td>Active</td>
                  		  	  			<td>
                  		  	  				<a href="#" class="btn btn-primary">
         										<span class="fa fa-edit"></span> Edit
        									</a>
        									<a href="#" class="btn btn-danger">
         										<span class="fa fa-trash"></span> Delete
        									</a>
                  		  	  			</td>
                  		  	  		</tr>
                  		  	  		<tr>
                  		  	  			<th scope="row">1</th>
                  		  	  			<td>Kimberly Beaty</td>
                  		  	  			<td>@kbl</td>
                  		  	  			<td>Kimberly.Beaty@gmail.com</td>
                  		  	  			<td>081999999999</td>
                  		  	  			<td>11-Jan-1990</td>
                  		  	  			<td>Active</td>
                  		  	  			<td>
                  		  	  				<a href="#" class="btn btn-primary">
         										<span class="fa fa-edit"></span> Edit
        									</a>
        									<a href="#" class="btn btn-danger">
         										<span class="fa fa-trash"></span> Delete
        									</a>
                  		  	  			</td>
                  		  	  		</tr>
                  		  	  	</tbody>
                  		  	</table>
                  		</div>
                </div>
    		    </div>
    		</div>
		</div>
	</div>
</section>
@endsection