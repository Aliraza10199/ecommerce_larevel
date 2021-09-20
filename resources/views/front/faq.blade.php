@extends('front/layouts')
@section('page_title','FAQ')
@section('container')

<div class="page-content">
    <div class="holder mt-0">
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><span>FAQ</span></li>
            </ul>
        </div>
    </div>
    <div class="holder mt-0 global-width">
        <div class="container">
            <div class="simple-filter js-simple-filter">
                <div class="text-center">
                    <h2 class="h1-style">FAQ</h2>
                    <div class="simple-filter-tabs js-simple-filters-tabs"><span class="js-simple-filter-label" data-filter=".category1">TOP 10</span> <span class="js-simple-filter-label" data-filter=".category2">GENERAL QUESTIONS</span> <span class="js-simple-filter-label" data-filter=".category3">CATEGORY QUESTIONS</span></div>
                </div>
                <div class="faq-wrapper simple-filter-wrap">
                    <div class="faq-item js-simple-filter-item category1">
                        <div class="panel">
                            <div class="panel-heading"><a data-toggle="collapse" href="#faq1" class="collapsed">
                                    <div class="panel-title">Lorem ipsum dolor sit amet, consectetur?</div>
                                </a></div>
                            <div id="faq1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item js-simple-filter-item category2">
                        <div class="panel">
                            <div class="panel-heading"><a data-toggle="collapse" href="#faq2" class="collapsed">
                                    <div class="panel-title">Adipiscing elit, sed do eiusmod tempor incididunt ut?</div>
                                </a></div>
                            <div id="faq2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item js-simple-filter-item category1">
                        <div class="panel">
                            <div class="panel-heading"><a data-toggle="collapse" href="#faq4" class="collapsed">
                                    <div class="panel-title">Elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua enim ad minim?</div>
                                </a></div>
                            <div id="faq4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p><img src="images/pages/faq-img-01.png" class="pull-left mr-3 mb-3" alt="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item js-simple-filter-item category1">
                        <div class="panel">
                            <div class="panel-heading"><a data-toggle="collapse" href="#faq5" class="collapsed">
                                    <div class="panel-title">Eiusmod tempor incididunt ut labore et dolore magna aliqua minim veniam?</div>
                                </a></div>
                            <div id="faq5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item js-simple-filter-item category2">
                        <div class="panel">
                            <div class="panel-heading"><a data-toggle="collapse" href="#faq6" class="collapsed">
                                    <div class="panel-title">Tempor incididunt ut labore et dolore?</div>
                                </a></div>
                            <div id="faq6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item js-simple-filter-item category3">
                        <div class="panel">
                            <div class="panel-heading"><a data-toggle="collapse" href="#faq7" class="collapsed">
                                    <div class="panel-title">Adipiscing elit, sed do eiusmod tempor incididunt?</div>
                                </a></div>
                            <div id="faq7" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item js-simple-filter-item category1">
                        <div class="panel">
                            <div class="panel-heading"><a data-toggle="collapse" href="#faq8" class="collapsed">
                                    <div class="panel-title">Eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim?</div>
                                </a></div>
                            <div id="faq8" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item js-simple-filter-item category2">
                        <div class="panel">
                            <div class="panel-heading"><a data-toggle="collapse" href="#faq9" class="collapsed">
                                    <div class="panel-title">Tempor incididunt ut labore et?</div>
                                </a></div>
                            <div id="faq9" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item js-simple-filter-item category3">
                        <div class="panel">
                            <div class="panel-heading"><a data-toggle="collapse" href="#faq10" class="collapsed">
                                    <div class="panel-title">Labore et dolore magna aliqua Ut enim ad?</div>
                                </a></div>
                            <div id="faq10" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item js-simple-filter-item category1">
                        <div class="panel">
                            <div class="panel-heading"><a data-toggle="collapse" href="#faq11" class="collapsed">
                                    <div class="panel-title">Elit, sed do eiusmod temp incididunt?</div>
                                </a></div>
                            <div id="faq11" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item js-simple-filter-item category3">
                        <div class="panel">
                            <div class="panel-heading"><a data-toggle="collapse" href="#faq12" class="collapsed">
                                    <div class="panel-title">Elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua enim ad minim?</div>
                                </a></div>
                            <div id="faq12" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p><img src="images/pages/faq-img-01.png" class="pull-left mr-3 mb-3" alt="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>









@endsection  