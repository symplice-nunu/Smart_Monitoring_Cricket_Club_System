@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Member</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('members.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('members.update',$member->id) }}" method="POST">
    	@csrf
        @method('PUT')


         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>First Name</strong>
		            <input type="text" name="FirstName" class="form-control" value="{{ $member->FirstName }}" placeholder="First Name">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Last Name</strong>
		            <input type="text" name="LastName" class="form-control" value="{{ $member->LastName }}" placeholder="Last Name">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Gender</strong>
                    <select name="Gender" id="" class="form-control" value="">
                        <option value="{{ $member->Gender }}">{{ $member->Gender }}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Email</strong>
		            <input type="email" name="Email" class="form-control" value="{{ $member->Email }}" placeholder="Email">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Country</strong>
                    
                    <select name="Country" id="" class="form-control" value="">
                        <option value="{{ $member->Country }}">{{ $member->Country }}</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Burundi">Burundi</option>
                    </select>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Phone</strong>
		            <input type="text" name="Phone" class="form-control" value="{{ $member->Phone }}" placeholder="Phone">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Address</strong>
		            <input type="text" name="Address" class="form-control" value="{{ $member->Address }}" placeholder="Address">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Martal Status</strong>
                    <select name="MartalStatus" id="" class="form-control" value="">
                        <option value="{{ $member->MartalStatus }}">{{ $member->MartalStatus }}</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Spouce">Spouce</option>
                    </select>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Membership Type</strong>
                    <select name="MembershipType" id="" class="form-control" value="">
                        <option value="{{ $member->MembershipType }}">{{ $member->MembershipType }}</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Roles</strong>
                    <select name="Roles" id="" class="form-control" value="">
                        <option value="{{ $member->Roles }}">{{ $member->Roles }}</option>
                        <option value="Capitain">Capitain</option>
                        <option value="Club Manager">Club Manager</option>
                    </select>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		      <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>


    </form>
@endsection