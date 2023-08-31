@extends('admin.admin_master')
@section('admin_content')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
        <!-- Basic Forms -->
         <div class="box">
           <div class="box-header with-border">
             <h4 class="box-title"> Update  Profile</h4>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="row">
               <div class="col">
                   <form action="{{ route('update.profile', $user->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                     <div class="row">
                       <div class="col-6">						
                           <div class="form-group">
                            <h5>Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                   <input type="text" name="name" value="{{ $user->name }}" class="form-control" required data-validation-required-message="This field is required"> 
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                           </div>
                       </div>
                       <div class="col-6">						
                        <div class="form-group">
                         <h5>mobile </h5>
                         <div class="controls">
                                <input type="text" name="mobile" value="{{ $user->mobile }}" class="form-control" required data-validation-required-message="This field is required"> 
                                 @if ($errors->has('mobile'))
                                     <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                 @endif
                             </div>
                        </div>
                       </div>
                       <div class="col-6">
                           <div class="form-group">
                                <h5>Email </h5>
                            <div class="controls">
                                <input type="email" name="email" value="{{ $user->email }}" class="form-control" required data-validation-required-message="This field is required"> </div>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                       </div>
                       <div class="col-6">						
                            <div class="form-group">
                            <h5>Address </h5>
                            <div class="controls">
                                    <input type="text" name="address" value="{{ $user->adress }}" class="form-control" required data-validation-required-message="This field is required"> 
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                            </div>
                       </div>
                        <div class="col-6">
                                <div class="form-group">
                                <h5>Select User Gender </h5>
                                <div class="controls">
                                    <select name="gender" id="status" required class="form-control">
                                        <option value="{{ $user->gender }}"> {{ $user->gender }} </option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>    
                        </div>
                       <div class="col-6">						
                            <div class="form-group">
                            <h5>Image </h5>
                            <div class="controls">
                                    <img class="rounded w-40 left-55 position-absolute" src="{{ url('/upload/'.$user->image) }}" alt="User Avatar">
                                    <input type="file" name="image"  class="form-control" enctype="multipart/form-data" > 
                                    @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                            </div>
                       </div>
                        <div class="col-6">
                                <div class="form-group">
                                <h5>Select User Status </h5>
                                <div class="controls">
                                    <select name="status" id="status" required class="form-control">
                                        <option value="{{ $user->status }}"> @if ($user->status == 1) Active @endif </option>
                                        <option value="1">Active</option>
                                        <option value="0">Deactivated</option>
                                    </select>
                                </div>
                            </div>    
                        </div>
                       <div class="col-6">
                           <div class="form-group">
                            <h5>Select User Role </h5>
                            <div class="controls">
                                <select name="usertype" id="usertype" required class="form-control">
                                    <option value="{{ $user->usertype }}"> {{ $user->usertype }} </option>
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