@extends('admin.admin_master')
@section('admin_content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
        <!-- Basic Forms -->
         <div class="box">
           <div class="box-header with-border">
             <h4 class="box-title">Add Fee Amount</h4>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="row">
               <div class="col">
                   <form action="{{ route('fee.amount.store') }}" method="post" novalidate>
                    @csrf
                     <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                            <h5>Fee Catagory</h5>
                            <div class="controls">
                                <select name="fee_catagory_id" id="fee_catagory_id" required class="form-control">
                                    <option value=""> Select Fee Catagory </option>
                                    @foreach ($fee_catagory as $key => $catagory )
                                      <option value="{{ $catagory->id }}">{{ $catagory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>    
                      </div> 
                    </div>
                    <div id="show_items">
                    <div class="row">
                      <div class="col-5">
                        <div class="form-group">
                            <h5> Class </h5>
                            <div class="controls">
                                <select name="class_id[]" id="class_id" required class="form-control">
                                    <option value=""> Select Class </option>
                                    @foreach ( $student_class as $key => $class)
                                      <option value="{{ $class->id }}">{{ $class->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>    
                      </div> 
                      <div class="col-5">						
                        <div class="form-group">
                             <h5>Fee Amount</h5>
                             <div class="controls">
                                 <input type="text" name="amount[]"  class="form-control" required data-validation-required-message="This field is required"> 
                                   @if ($errors->has('amount'))
                                     <span class="text-danger">{{ $errors->first('amount') }}</span>
                                   @endif
                             </div>
                        </div>
                      </div>
                      <div class="col-2">	
                        <span class="btn btn-md btn-success m-25 add_more"><i class="fa fa-plus-circle"></i></span>
                      </div>
                    </div>
                  </div>	
                  <div class="row">
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

<script>
  $(document).ready(function(){
    $(".add_more").click(function(e){
      e.preventDefault();
      $("#show_items").append(`<div class="row show_items" id="show_items">
                      <div class="col-5">
                        <div class="form-group">
                            <h5> Class </h5>
                            <div class="controls">
                                <select name="class_id[]" id="class_id" required class="form-control">
                                    <option value=""> Select Class </option>
                                    @foreach ( $student_class as $key => $class)
                                      <option value="{{ $class->id }}">{{ $class->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>    
                      </div> 
                      <div class="col-5">						
                        <div class="form-group">
                             <h5>Fee Amount</h5>
                             <div class="controls">
                                 <input type="text" name="amount[]"  class="form-control" required data-validation-required-message="This field is required"> 
                                   @if ($errors->has('amount'))
                                     <span class="text-danger">{{ $errors->first('amount') }}</span>
                                   @endif
                             </div>
                        </div>
                      </div>
                      <div class="col-2">	
                        <span class="btn btn-md btn-danger m-25 remove"><i class="fa fa-minus-circle"></i></span>
                      </div>
                    </div>`);
    });
    $(document).on('click', '.remove', function(e){
      e.preventDefault();
      let items = $(this).parent().parent();
      $(items).remove();

    });
});
</script>
@endsection 