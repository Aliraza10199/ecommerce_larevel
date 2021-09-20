
@extends('front/layout_account')
@section('page_title','My Account')
@section('account_select','active')
@section('sidebar')







              
                <div class="col-md-9 aside">
                    <h2>Account Details</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h3>Personal Info</h3>
                                    <p><b>Name: </b> {{$customers[0]->name}}<br><b>E-mail:</b> {{$customers[0]->email}}<br><b>Phone:</b> {{$customers[0]->mobile}} <br><b>Country:</b> {{$customers[0]->country}} <br><b>City:</b> {{$customers[0]->city}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h3>Address  (Default)</h3>
                                    <p>{{$customers[0]->address}}</p>
                                    {{-- <div class="mt-2 clearfix"><a href="#" class="link-icn js-show-form" data-form="#updateAddress"><i class="icon-pencil"></i>Edit</a> <a href="#" class="link-icn ml-1 float-right"><i class="icon-cross"></i>Delete</a></div> --}}
                                    <div class="mt-2 clearfix"><a href="#" class="link-icn js-show-form" data-form="#updateDetails"><i class="icon-pencil"></i>Edit</a></div>

                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-sm-6 mt-2 mt-sm-0">
                            <div class="card">
                                <div class="card-body">
                                    <h3>Address 2</h3>
                                    <p>Yuto Murase 42 1<br>Motohakone Hakonemaci Ashigarashimo<br>Gun Kanagawa 250 05 JAPAN</p>
                                    <div class="mt-2 clearfix"><a href="#" class="link-icn js-show-form" data-form="#updateAddress"><i class="icon-pencil"></i>Edit</a> <a href="#" class="link-icn ml-1 float-right"><i class="icon-cross"></i>Delete</a></div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="card mt-3 d-none" id="updateDetails">
                       <form  action="/update_accountss" id="frm_update_btn">
                        <div class="card-body">
                            <h3>Update Account Details</h3>
                            <div class="row mt-2">
                                <div class="col-sm-6"><label class="text-uppercase"> Name:</label>
                                    <div class="form-group"><input type="text" name="name" class="form-control" ></div>
                                </div>
                                {{-- <div class="col-sm-6"><label class="text-uppercase">E-mail:</label>
                                    <div class="form-group"><input type="email" name="email" class="form-control" placeholder="Enter E-mail"></div>
                                </div> --}}
                                <div class="col-sm-6"><label class="text-uppercase">City:</label>
                                    <div class="form-group"><input type="text" name="city" class="form-control" ></div>
                                </div>
    
                            </div>
                            <div class="row mt-2">
                              
                                <div class="col-sm-6"><label class="text-uppercase">Phone:</label>
                                    <div class="form-group"><input type="text" name="phone" class="form-control" ></div>
                                </div>
                                 <div class="col-sm-6"><label class="text-uppercase">Country:</label>
                                    <div class="form-group"><input type="text" name="country" class="form-control" ></div>
                                </div>
                                
                            </div>
                            <div class="row mt-2">
                             
                                    <div class="col-sm-6"><label class="text-uppercase">State:</label>
                                        <div class="form-group"><input type="text" name="state" class="form-control"></div>
                                    </div>
                                    <div class="col-sm-6"><label class="text-uppercase">zip/postal code:</label>
                                        <div class="form-group"><input type="text" name="zip" class="form-control"></div>
                                    </div>

                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-12"><label class="text-uppercase">Address:</label>
                                    <div class="form-group"><input type="text" name="address" class="form-control"></div>
                                </div>
                            </div>
                            <div class="mt-2"><button type="reset" class="btn btn--alt js-close-form" data-form="#updateDetails">Cancel</button> <button type="submit" class="btn ml-1 " onclick="detail_updates()" id="update_btn">Update</button></div>
                        </div>
                        @csrf

                    </form>
                    </div>
                    <div id="update_msg"></div>
                </div>
           








@endsection 