@extends('admin.admin_master')
@section('admin_content')
<div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
        <div class="col-12">
            <div class="box">
               <div class="box-header with-border">
                 <h3 class="box-title"> Class List </h3>
                 <a href="" class="btn btn-md btn-success float-right"> <i class="fa fa-user-o"> </i> Add Class</a>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                   <div class="table-responsive">
                     <table id="example1" class="table table-bordered table-striped">
                       <thead>
                           <tr>
                               <th>Sn</th>
                               <th>Class Name</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach ($allData as $key => $class )
                           <tr>
                               <td>{{ $key+1 }} </td>
                               <td>{{ $class->name }}</td>
                               <td>
                                <a href="" class="btn btn-md btn-info">  <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="" class="btn btn-md btn-danger"> <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                               </td>
                        @endforeach
                       </tbody>
                       <tfoot>
                           <tr>
                               <th>Sn</th>
                               <th>Name</th>
                               <th>Action</th>
                           </tr>
                       </tfoot>
                     </table>
                   </div>
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->
      </section>
    </div>
</div>
@endsection 

@section('datatable_scripts');
<script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>	
<script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('backend/js/pages/data-table.js') }}"></script> 
@endsection