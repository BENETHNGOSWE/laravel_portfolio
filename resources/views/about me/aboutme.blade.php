@extends('layout.main')
@section('content')
<div class="hc-about hc-spacer-top hc-spacer-bottom" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1">
                        <div class="hc-about-img">
                            <div class="hc-image-style">
                                <img src="assets/images/about.jpg" alt="about">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="hc-about-content">
                            <div class="hc-heading-wrap">
                                <h2 class="hc-sub-heading">About Us</h2>
                                <h1 class="hc-heading">We are the best to take care of you</h1>
                            </div>
                            <ul class="nav hc-tab-list">
                                <li class="nav-item">
                                    <a class="active" data-toggle="tab" href="#work">Work</a>
                                </li>
                                <li class="nav-item">
                                    <a id="profile-tab" data-toggle="tab" href="#mission">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a id="profile-tab" data-toggle="tab" href="#achievement">Achievement</a>
                                </li>
                            </ul>
                            <div class="tab-content hc-tab-content">
                                <div class="tab-pane fade show active" id="work">
                                    Aenean facilisis sodales est neciMorbi vitapurus on Est facilisisro convallis commodo velante, tiam ltricies lputate.Aenean facilisis sodales est neciMorbi vitapurus on Est facilisisro convallis commodo velante, tiam ltricies lputate.
                                </div>
                                <div class="tab-pane fade" id="mission">
                                    Aenean facilisis sodales est neciMorbi vitapurus on Est facilisisro convallis commodo velante, tiam ltricies lputate. Aenean facilisis sodales est neciMorbi vitapurus on Est facilisisro convallis commodo velante, tiam facilisis ltricies lputate.
                                </div>
                                <div class="tab-pane fade" id="achievement">
                                    Aenean facilisis sodales est neciMorbi vitapurus on Est facilisisro convallis commodo velante, tiam ltricies lputate.Aenean facilisis sodales est neciMorbi vitapurus on Est facilisisro convallis commodo est velante, tiam ltricies lputate.
                                </div>
                            </div>
                            <img src="assets/images/hc-signature.png" alt="signature">
                        </div>
                    </div>
                </div>
            </div>
</div>













            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                  <button class="btn bg-gradient-success w-100 mb-0 toast-btn" type="button" data-target="successToast">Success</button>
                </div>
              </div>
            </div>

@endsection        