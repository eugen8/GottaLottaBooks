@extends('layout.mainlayout')

@section('content')
   
<div class="container">
    <div class="row">
        <div class="col mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="e-profile">
                        <div class="row">
                            <div class="col-12 col-sm-auto mb-3">
                                <div class="mx-auto" style="width: 140px;">
                                    <div class="d-flex justify-content-center align-items-center rounded"
                                        style="height: 140px; background-color: rgb(233, 236, 239);">
                                        <img src="{{base_path('public/images/') . $user->image}}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                <div class="text-center text-sm-left mb-2 mb-sm-0">
                                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">GottaLottaBooks Profile</h4>
                                    <p class="mb-0">@GottaLottaBooks.profile</p>
                                    <div class="text-muted"><small>Last seen 2 hours ago</small></div>
                                    <div class="mt-2">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-fw fa-camera"></i>
                                            <span>Change Photo</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="text-center text-sm-right">
                                    <a href="" class="btn btn-primary">Change Password</a>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                        </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane active">
                                <form class="form" method="post" action="{{url('profile')}}">
                                {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Full Name</label>
                                                        <input class="form-control" type="text" name="name"
                                                            value="{{ $user->name }}">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input class="form-control" type="text" name="email"
                                                            value="{{$user->email}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="zip">Zip</label>
                                                        <input type="text" class="form-control" 
                                                        value="{{$user->zip}}" name="zip">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Profile Image</label>
                                                        <input class="form-control" id="image" name="image" type="file">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex">
                                            <a href="" class="btn btn-primary">My Books</a>
                                        </div>
                                        <div class="row">
                                            <div class="col d-flex justify-content-end">
                                                <button class="btn btn-primary" type="submit">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection