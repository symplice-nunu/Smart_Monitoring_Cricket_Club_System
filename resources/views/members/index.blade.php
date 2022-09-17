@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Members</h2>
            </div>
            <div class="pull-right">
                @can('member-create')
                <a class="btn btn-success" href="{{ route('members.create') }}">New Member</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone</th>
            <!-- <th>Address</th> -->
            <!-- <th>Martal Status</th> -->
            <!-- <th>Membership Type</th> -->
            <!-- <th>Roles</th> -->
            <th width="150px">Action</th>
        </tr>
	    @foreach ($members as $member)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $member->FirstName }}</td>
	        <td>{{ $member->LastName }}</td>
	        <td>{{ $member->Gender }}</td>
	        <td>{{ $member->Email }}</td>
	        <!-- <td>{{ $member->Country }}</td> -->
	        <td>{{ $member->Phone }}</td>
	        <!-- <td>{{ $member->Address }}</td> -->
	        <!-- <td>{{ $member->MartalStatus }}</td> -->
	        <!-- <td>{{ $member->MembershipType }}</td> -->
	        <!-- <td>{{ $member->Roles }}</td> -->
	        <td>
                <form action="{{ route('members.destroy',$member->id) }}" method="POST">
                    <!-- <a class="btn btn-info" href="{{ route('members.show',$member->id) }}">Show</a> -->
                    @can('member-edit')
                    <a class="btn btn-primary" href="{{ route('members.edit',$member->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('member-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $members->links() !!}

@endsection