@extends('newLayout.layouts.newLayout')

@section('title')
    Colab
@endsection

@section('content')
    <style>
        td{
            border: none;
        }
    /* .datatable th{
        background-color: #04AA6D;
    }
    .datatable td, .datatable th {
        text-align:center;
      border: 1px solid #ddd;
      padding: 8px;
    }
    .badge{
        font-size: 15px!important;
        padding: 5px 14px 5px 15px!important;
    } */
</style>
   <div class="row justify-content-center">
      <div class="col-12 card">
         {{-- <div class="card-header">{{ __('Noor Games') }}</div> --}}
         @if ($message = Session::get('success'))
         <div class="alert alert-success">
            <p>{{ $message }}</p>
         </div>
         @endif
         <div class="card-body">
            <div class="row justify-content-between">
               <h4>{{$title}} {{$total}}</h4>
               @include('butt')
            </div>
         </div>
         <div class="table-responsive p-4">
            <table class="table datatable">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Actions</th>
                     <th>Date</th>
                     <th>Name</th>
                     <th>Emain</th>
                     <th>Number</th>
                     <th>Address</th>
                     <th>Note</th>



                  </tr>
               </thead>
               <tbody>
                   @php
                   $count = 1;
                   @endphp
                  @foreach($forms as $num)
                  <tr>
                    <td scope="row" data-editable="false"><b>{{$count++}}</b></th>
                        <td data-editable="false">
                            <a href="{{route('dashboardColab.edit',['id'=>$num->id])}}" class="btn btn-success">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route('dashboardColab.destroy',['id'=>$num->id])}}" class="btn btn-danger confirm-delete">
                                <i class="fa fa-trash"></i>
                            </a>
                         </td>
                    <td data-editable="false">{{date_format($num->created_at, 'M d,Y H:i:s')}}</td>
                    <td data-editable="false">{{ucwords($num->email)}}</td>


                     <td data-editable="false"><a href="tel:{{$num->number}}">{{$num->number}}</a></td>

                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
   @section('script')
<script>
   $(document).ready( function () {
    $('.confirm-delete').on('click', function () {
    var link = $(this).attr("href");
//   $(document).on('click', '.confirm-delete', function () {
       ans = confirm('Are you sure you want to delete this?');
       if (ans == true) {
           window.location = link;
       } else {
           return false;
       }
   });
       $('table').editableTableWidget();

       $('.class').on('change', function(evt, newValue) {
        var type = "POST";


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });

             $.ajax({
                type: type,
                url: '/saveNote',
                data: {
                    "cid": $(this).data('id'),
                    "note" : newValue
                },
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    toastr.success('Success',"Note Saved");

                },
                error: function (data) {
                    console.log(data);
                    toastr.error('Error',data.responseText);
                }
            });
           console.log(newValue);
           console.log($(this).data('id'));
           });
    });
</script>
@endsection
@endsection
