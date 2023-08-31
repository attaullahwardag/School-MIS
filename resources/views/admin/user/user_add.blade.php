@extends('admin.admin_master')
@section('admin_content')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
        <!-- Basic Forms -->
         <div class="box">
           <div class="box-header with-border">
             <h4 class="box-title">Add new user</h4>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="row">
               <div class="col">
                   <form action="{{ route('store.user') }}" method="post" novalidate>
                    @csrf
                     <div class="row">
                       <div class="col-6">						
                           <div class="form-group">
                            <h5>Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                   <input type="text" name="name" class="form-control" required data-validation-required-message="This field is required"> 
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                           </div>
                       </div>
                       <div class="col-6">
                           <div class="form-group">
                                <h5>Email <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                       </div>
                       <div class="col-6">	 
                           <div class="form-group">
                               <h5>Password  <span class="text-danger">*</span></h5>
                               <div class="controls">
                                   <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> 
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                               
                                </div>
                           </div>
                       </div>
                       <div class="col-6">
                           <div class="form-group">
                            <h5>Select User Role </h5>
                            <div class="controls">
                                <select name="usertype" id="usertype" required class="form-control">
                                    <option value=""> Select User Role</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                </select>
                            </div>
                       </div>    
                     </div> 
                     <div class="col-12">
                        <input type="submit" class="btn btn-rounded btn-info">
                     </div>   
                   </form>
               </div>
               <!-- /.col -->
             </div>
             <!-- /.row -->
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
       </section>
    </div>
</div>
@endsection 
