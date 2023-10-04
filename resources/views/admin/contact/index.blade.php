@extends('layouts.dashboard')
@section('title')
Contact-List
@endsection
@section('breadcrumbs')
{{ Breadcrumbs::render('contact') }}
@endsection
@section('content')

<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Message List</h5>
    <div class="" style="height:auto">

    {{-- 
        <table class="table table-responsive text-nowrap">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Sender</th>
                    <th>Date</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">


                @foreach ($contacts as $row)
                <tr>
                    <td>
                        {{$loop->iteration}}
                    </td>
                    <td><strong>{{ $row->name }}</strong></td>
                    <td><strong> {{ date('d/m/Y', strtotime($row->created_at)) }}</strong></td>
                    <td style="word-break:break-all;"><strong> <p>{{ $row->message }}</p> </strong></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>

                            <div class="dropdown-menu">

                                <a class="dropdown-item" href="{{ route('contact.show',$row) }}"><i class="bx bx-edit-alt me-1"></i> Detail</a>


                            </div>

                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        --}}


         
            
            <div class="" style="overflow:auto;">
    
                <table class="table table-bordered data-table mx-3 display responsive table-contact" >
                     <thead>
                         <tr>
                             <th>No.</th>
                             <th>Sender</th>
                             <th>Email</th>
                             <th>Date</th>
                             <th>Messages</th>
                         </tr>
                     </thead>
                     <tbody>
                     </tbody>
                 </table>
            </div>
            
    </div>
</div>
<!--/ Basic Bootstrap Table -->
@endsection
@push('javascript-external')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
@endpush
@push('javascript-internal')
<script>
    $(document).ready(function() {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('messages') }}",
            columns: [
                // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                //  { "width": "20%" },
                //  { "width": "20%" },
                //  { "width": "20%" },
                // //  { "width": "20%" },
                
                
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'date',
                    name: 'date'
                },
                {
                    data: 'mes',
                    name: 'mes'
                },
                // {
                //     data: 'action',
                //     name: 'action'
                // },
                //  {
                //      data: 'finish_date',
                //      name: 'finish_date'
                //  },
                // {
                //    data: 'created_at',
                //    render: function(d) {
                //       return moment(d).format("DD/MM/YYYY HH:mm");
                //    }
                // },
                // {
                //    data: 'email',
                //    name: 'subject'
                // },
                // {
                //    data: 'email',
                //    name: 'address'
                // },
                // {
                //    data: 'email',
                //    name: 'phone'
                // },
                // {
                //    data: 'email',
                //    name: 'message'
                // }

            ]
        });
        // event delete category
        $("form[role='alert']").submit(function(event) {
            event.preventDefault();
            Swal.fire({
                title: "Apakah anda ingin menghapus ?",
                text: $(this).attr('alert-text'),
                icon: 'warning',
                allowOutsideClick: false,
                showCancelButton: true,
                cancelButtonText: "Cancel",
                reverseButtons: true,
                confirmButtonText: "Yes",
            }).then((result) => {
                if (result.isConfirmed) {
                    // todo: process of deleting categories
                    event.target.submit();
                }
            });
        });
    });
</script>
@endpush