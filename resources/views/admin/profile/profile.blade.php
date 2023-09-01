@extends('admin.admin_master')
@section('admin_content')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
        <!-- /.box -->
            <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('../images/gallery/full/10.jpg') center center;">
                <a href="{{ route('edit.profile', $user->id ) }}" class="btn btn-info float-right"> Edit Profile</a>
                <h3 class="widget-user-username">User Name: {{ $user->name }}</h3>
                <h6 class="widget-user-desc">User Role: {{  $user->usertype }}</h6>
                <h6 class="widget-user-desc">User Role: {{  $user->email }}</h6>
            </div>

            <div class="widget-user-image">
                <img class="rounded-circle" src="{{ url('/upload/'.$user->image) }}" alt="User Avatar">
            </div>
            <div class="box-footer">
                <div class="row">
                <div class="col-sm-4">
                    <div class="description-block">
                    <h5 class="description-header">Mobile</h5>
                    <span class="description-text">{{ $user->mobile }}</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 br-1 bl-1">
                    <div class="description-block">
                    <h5 class="description-header">Address</h5>
                    <span class="description-text">{{ $user->adress }}</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                    <div class="description-block">
                    <h5 class="description-header">Gender</h5>
                    <span class="description-text">{{ $user->gender }}</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            </div>
       </section>
    </div>
</div>
@endsection 