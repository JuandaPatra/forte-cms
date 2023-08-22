@extends('layouts.dashboard')
@section('title')
@php
$postId = last(request()->segments());
@endphp
@endsection
@section('breadcrumbs')
{{-- {{ Breadcrumbs::render() }} --}}
@endsection
@section('content')

<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">News List</h5>
    <div class="table-responsive text-nowrap" style="height:1000px">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>News</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">


                @foreach ($news as $row)
                <tr>
                    <td>
                        {{$loop->iteration}}
                    </td>
                    <td><strong>{{ $row->title }}</strong></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('news.edit',['news'=>$row]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>

                                
                                    <form action="{{ route('news.destroy',['news'=>$row]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a class="dropdown-item" href="#" , role="alert" alert-text="{{ $row->title }}" onclick="this.closest('form').submit();return false;">
                                            <i class="bx bx-trash me-1"></i>Delete
                                        </a>
                                    </form>
                                    
                            </div>

                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
<!--/ Basic Bootstrap Table -->
@endsection
@push('javascript-internal')
<script>
    $(document).ready(function() {
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