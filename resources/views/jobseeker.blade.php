@extends('layouts.master')
@section('title') @lang('translation.Data_Tables')  @endsection
@section('css')
<link href="{{ URL::asset('assets/libs/datatables.net-bs4/datatables.net-bs4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/datatables.net-buttons-bs4/datatables.net-buttons-bs4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> الباحثين عن عمل </h4>
                <p class="card-title-desc">جدول الباحثين عن عمل
                </p>
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>City ID</th>
                                <th>Gender ID</th>
                                <th>Marital Status ID</th>
                                <th>User Type</th>
                                <th>End Date</th>
                                <th>Job Salary</th>
                                <th>Phone Number</th>
                                <th>Secondary Phone Number</th>
                                <th>Address</th>
                                <th>Date of Birth</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jobseekers as $jobseeker)
                            <tr>
                                <td>{{ $jobseeker->id }}</td>
                                <td>{{ $jobseeker->cities_id }}</td>
                                <td>{{ $jobseeker->genders_id }}</td>
                                <td>{{ $jobseeker->marital_statuses_id }}</td>
                                <td>{{ $jobseeker->users_type }}</td>
                                <td>{{ $jobseeker->EndDate }}</td>
                                <td>{{ $jobseeker->JobSalary }}</td>
                                <td>{{ $jobseeker->phoneNumber }}</td>
                                <td>{{ $jobseeker->sec_phoneNumber }}</td>
                                <td>{{ $jobseeker->Address }}</td>
                                <td>{{ $jobseeker->dateofbirth }}</td>
                                <td>{{ $jobseeker->created_at }}</td>
                                <td>{{ $jobseeker->updated_at }}</td>
                                <td>
                                    <form action="{{ route('jobseeker.destroy', $jobseeker) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                
                    
@endsection
@section('script')
<script src="{{ URL::asset('assets/libs/datatables.net/datatables.net.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/datatables.net-bs4/datatables.net-bs4.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/datatables.net-buttons/datatables.net-buttons.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/datatables.net-buttons-bs4/datatables.net-buttons-bs4.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/datatables.net-responsive/datatables.net-responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/datatables.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/app.min.js') }}"></script>
@endsection