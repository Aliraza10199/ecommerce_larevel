

@extends('front/layout_account')

@section('page_title','Reviews')
@section('sidebar')


    {{-- <div class="page-content">
        <div class="holder mt-0">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Reviews</span></li>
                </ul>
            </div>
        </div>
      
    </div> --}}

    <div class="holder mt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center d-flex align-items-center justify-content-center">
                    <div class="card-body card-body-rating border">
                        <div class="prd-rating-value text-success">4.0</div>
                        <div class="prd-rating justify-content-center"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                        <div>Based on 3 review</div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card-body card-body-progress">
                        <div class="row">
                            <div class="col-3">
                                <h6>5 Stars</h6>
                            </div>
                            <div class="col-7">
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width:80%"></div>
                                </div>
                            </div>
                            <div class="col-2">
                                <h6>(10)</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <h6>4 Stars</h6>
                            </div>
                            <div class="col-7">
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width:70%"></div>
                                </div>
                            </div>
                            <div class="col-2">
                                <h6>(2)</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <h6>3 Stars</h6>
                            </div>
                            <div class="col-7">
                                <div class="progress">
                                    <div class="progress-bar bg-warning" style="width:10%"></div>
                                </div>
                            </div>
                            <div class="col-2">
                                <h6>(1)</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <h6>2 Stars</h6>
                            </div>
                            <div class="col-7">
                                <div class="progress">
                                    <div class="progress-bar bg-danger" style="width:10%"></div>
                                </div>
                            </div>
                            <div class="col-2">
                                <h6>(1)</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <h6>1 Star</h6>
                            </div>
                            <div class="col-7">
                                <div class="progress">
                                    <div class="progress-bar bg-danger" style="width:10%"></div>
                                </div>
                            </div>
                            <div class="col-2">
                                <h6>(1)</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center d-flex align-items-center justify-content-center">
                    <div class="review-write"><a href="#" class="btn btn--lg js-show-form" data-form="#writeReview"><i class="icon-pencil"></i><span>Write Your Reviews</span></a><br><small>share your experience/views about this product</small></div>
                </div>
            </div>
            <div class="mt-3 d-none" id="writeReview">
                <h3>Write Review</h3>
            <form action="" id="frmproductreview">
                {{-- <div class="row mt-2">
                    <div class="col-sm-6"><label class="text-uppercase">First Name:</label>
                        <div class="form-group"><input type="text" class="form-control" placeholder="Jenny"></div>
                    </div>
                    <div class="col-sm-6"><label class="text-uppercase">Last Name:</label>
                        <div class="form-group"><input type="text" class="form-control" placeholder="Raider"></div>
                    </div>
                </div> --}}
                {{-- <div class="row mt-2">
                    <div class="col-sm-6"><label class="text-uppercase">E-mail:</label>
                        <div class="form-group"><input type="email" class="form-control" placeholder="jennyraider@hotmail.com"></div>
                    </div>
                    <div class="col-sm-6"><label class="text-uppercase">Phone:</label>
                        <div class="form-group"><input type="text" class="form-control" placeholder="876-432-4323"></div>
                    </div>
                </div> --}}
                    <div class="form-group"><label class="text-dark"><span class="required">*</span>YOUR REVIEW MESSAGE</label> <textarea class="form-control textarea--height-100" name="message" data-required-error="Please fill the field" required></textarea></div>
                    <div class="mt-2">
                        <button type="reset" class="btn btn--alt js-close-form" data-form="#writeReview">Cancel</button>
                        <button type="submit" class="btn ml-1">Send</button>
                    </div>
                    <input type="hidden" name="product_id" id="" value="">
                    @csrf
            </form>
            </div>


            <div class="review-item">
                <div class="row">
                    <div class="col-md">
                        <h4 class="review-item_author">Sheldon Matthews</h4>
                    </div>
                    <div class="col-md-auto">
                        <div class="review-item_date">30 may 2019</div>
                    </div>
                </div>
                <div class="review-item_rating"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i></div>
                <p>Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet.</p>
                <div class="row pt-2">
                    <div class="col-md"><button type="button" class="btn">Reply</button></div>
                    <div class="col-md-auto">
                        <ul class="list-inline list-unstyled">
                            <li class="list-inline-item"><small>Is this helpful to you?</small></li>
                            <li class="list-inline-item"><button type="button" class="btn btn--grey btn-sm">Yes</button></li>
                            <li class="list-inline-item"><button type="button" class="btn btn--grey btn-sm">No</button></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="review-item">
                <div class="row">
                    <div class="col-md">
                        <h4 class="review-item_author">Sheldon Matthews</h4>
                    </div>
                    <div class="col-md-auto">
                        <div class="review-item_date">30 may 2019</div>
                    </div>
                </div>
                <div class="review-item_rating"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i></div>
                <p>Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet.</p>
                <div class="row pt-2">
                    <div class="col-md"><button type="button" class="btn">Reply</button></div>
                    <div class="col-md-auto">
                        <ul class="list-inline list-unstyled">
                            <li class="list-inline-item"><small>Is this helpful to you?</small></li>
                            <li class="list-inline-item"><button type="button" class="btn btn--grey btn-sm">Yes</button></li>
                            <li class="list-inline-item"><button type="button" class="btn btn--grey btn-sm">No</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection  