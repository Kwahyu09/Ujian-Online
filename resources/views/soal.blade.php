@extends('layout.main')
@section('container')
<main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                <div class="col-md-12 my-4">
                  <div class="row mb-3">
                    <div class="col">
                        <h2 class="h3 mb-0 page-title">Data {{ $title }}</h2> <br>
                        <button type="button" class="btn btn-primary"><span class="fe fe-plus-circle fe-12 mr-2"></span>Tambah</button>
                    </div>
                    <div class="col-auto">
                            <form class="form-inline mr-auto searchform text-muted">
                                <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Cari..." aria-label="Search">
                            </form>
                    </div>
                    </div>
                  <div class="card shadow">
                    <div class="card-body">
                      <!-- table -->
                      <table class="table table-hover table-borderless border-v">
                        <thead class="thead-dark">
                          <tr>
                            <th>Invoice No</th>
                            <th>Invoice Date</th>
                            <th>Order #</th>
                            <th>Bill To</th>
                            <th>Status</th>
                            <th>Grand Total</th>
                            <th>Total</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="accordion-toggle collapsed" id="c-2474" data-toggle="collapse" data-parent="#c-2474" href="#collap-2474">
                            <td>3599</td>
                            <td>2020-09-12 11:21:03</td>
                            <td>3951</td>
                            <td>Alexander Ellis</td>
                            <td><span class="badge badge-pill badge-success mr-2">S</span><small class="text-muted">Paid</small></td>
                            <td>$37.39</td>
                            <td>$80.11</td>
                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted sr-only">Action</span>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Remove</a>
                                <a class="dropdown-item" href="#">Assign</a>
                              </div>
                            </td>
                          </tr>
                          <tr class="accordion-toggle collapsed" id="c-3954" data-toggle="collapse" data-parent="#c-3954" href="#collap-3954">
                            <td>3954</td>
                            <td>2020-10-11 19:09:12</td>
                            <td>4038</td>
                            <td>Casey Caldwell</td>
                            <td><span class="badge badge-pill badge-success mr-2">S</span><small class="text-muted">Paid</small></td>
                            <td>$30.74</td>
                            <td>$46.14</td>
                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted sr-only">Action</span>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Remove</a>
                                <a class="dropdown-item" href="#">Assign</a>
                              </div>
                            </td>
                          </tr>
                          <tr id="collap-3954" class="collapse in p-3 bg-light">
                            <td colspan="8">
                              <dl class="row mb-0 mt-1">
                                <dt class="col-sm-1">Company</dt>
                                <dd class="col-sm-2">Tristique Ltd</dd>
                                <dt class="col-sm-1">Address</dt>
                                <dd class="col-sm-2">4577 Cras St.</dd>
                                <dt class="col-sm-1">Phone</dt>
                                <dd class="col-sm-2">(977) 220-6518</dd>
                                <dt class="col-sm-1 text-truncate">Region</dt>
                                <dd class="col-sm-2">Central African Republic</dd>
                              </dl>
                            </td>
                          <tr class="accordion-toggle collapsed" id="c-2429" data-toggle="collapse" data-parent="#c-2429" href="#collap-2429">
                            <td>2429</td>
                            <td>2020-11-26 02:45:30</td>
                            <td>4603</td>
                            <td>Jack Adams</td>
                            <td><span class="badge badge-pill badge-warning mr-2">W</span><small class="text-muted">Pending</small></td>
                            <td>$20.84</td>
                            <td>$28.51</td>
                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted sr-only">Action</span>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Remove</a>
                                <a class="dropdown-item" href="#">Assign</a>
                              </div>
                            </td>
                          </tr>
                          <tr class="accordion-toggle collapsed" id="c-3987" data-toggle="collapse" data-parent="#c-3987" href="#collap-3987">
                            <td>3987</td>
                            <td>2020-02-13 19:29:45</td>
                            <td>4261</td>
                            <td>Samantha Hansen</td>
                            <td><span class="badge badge-pill badge-success mr-2">S</span><small class="text-muted">Paid</small></td>
                            <td>$83.19</td>
                            <td>$48.48</td>
                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted sr-only">Action</span>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Remove</a>
                                <a class="dropdown-item" href="#">Assign</a>
                              </div>
                            </td>
                          </tr>
                          <tr class="accordion-toggle collapsed" id="c-3165" data-toggle="collapse" data-parent="#c-3987" href="#collap-3165">
                            <td>3165</td>
                            <td>2020-05-05 22:33:28</td>
                            <td>3308</td>
                            <td>Carla Ochoa</td>
                            <td><span class="badge badge-pill badge-primary mr-2">P</span><small class="text-muted">Invoiced</small></td>
                            <td>$99.92</td>
                            <td>$38.62</td>
                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted sr-only">Action</span>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Remove</a>
                                <a class="dropdown-item" href="#">Assign</a>
                              </div>
                            </td>
                          </tr>
                          <tr class="accordion-toggle collapsed" id="c-5429" data-toggle="collapse" data-parent="#c-5429" href="#collap-5429">
                            <td>5429</td>
                            <td>2020-11-26 02:45:30</td>
                            <td>4603</td>
                            <td>Jack Adams</td>
                            <td><span class="badge badge-pill badge-warning mr-2">W</span><small class="text-muted">Pending</small></td>
                            <td>$20.84</td>
                            <td>$28.51</td>
                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted sr-only">Action</span>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Remove</a>
                                <a class="dropdown-item" href="#">Assign</a>
                              </div>
                            </td>
                          </tr>
                          <tr id="collap-5429" class="collapse in p-3 bg-light">
                            <td colspan="8">
                              <dl class="row mb-0 mt-1">
                                <dt class="col-sm-1">Company</dt>
                                <dd class="col-sm-2">Dolor Incorporated</dd>
                                <dt class="col-sm-1">Address</dt>
                                <dd class="col-sm-2">8250 Molestie St.</dd>
                                <dt class="col-sm-1">Phone</dt>
                                <dd class="col-sm-2">(934) 582-9495</dd>
                                <dt class="col-sm-1 text-truncate">Region</dt>
                                <dd class="col-sm-2">British</dd>
                              </dl>
                            </td>
                          </tr>
                          <tr class="accordion-toggle collapsed" id="c-3951" data-toggle="collapse" data-parent="#c-3951" href="#collap-3951">
                            <td>3951</td>
                            <td>2020-10-11 19:09:12</td>
                            <td>4038</td>
                            <td>Casey Caldwell</td>
                            <td><span class="badge badge-pill badge-success mr-2">S</span><small class="text-muted">Paid</small></td>
                            <td>$30.74</td>
                            <td>$46.14</td>
                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted sr-only">Action</span>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Remove</a>
                                <a class="dropdown-item" href="#">Assign</a>
                              </div>
                            </td>
                          </tr>
                          <tr id="collap-3951" class="collapse in p-3 bg-light">
                            <td colspan="8">
                              <dl class="row mb-0 mt-1">
                                <dt class="col-sm-1">Company</dt>
                                <dd class="col-sm-2">Urna Et PC</dd>
                                <dt class="col-sm-1">Address</dt>
                                <dd class="col-sm-2">3132 Mi Av.</dd>
                                <dt class="col-sm-1">Phone</dt>
                                <dd class="col-sm-2">(459) 982-1284</dd>
                                <dt class="col-sm-1 text-truncate">Region</dt>
                                <dd class="col-sm-2">Burkina Faso</dd>
                              </dl>
                            </td>
                          </tr>
                          <tr class="accordion-toggle collapsed" id="c-3599" data-toggle="collapse" data-parent="#c-3599" href="#collap-3599">
                            <td>3599</td>
                            <td>2020-09-12 11:21:03</td>
                            <td>3951</td>
                            <td>Alexander Ellis</td>
                            <td><span class="badge badge-pill badge-primary mr-2">P</span><small class="text-muted">Invoiced</small></td>
                            <td>$37.39</td>
                            <td>$80.11</td>
                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted sr-only">Action</span>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Remove</a>
                                <a class="dropdown-item" href="#">Assign</a>
                              </div>
                            </td>
                          </tr>
                          <tr id="collap-3599" class="collapse in p-3 bg-light">
                            <td colspan="8">
                              <dl class="row mb-0 mt-1">
                                <dt class="col-sm-1">Company</dt>
                                <dd class="col-sm-2">Mi Consulting</dd>
                                <dt class="col-sm-1">Address</dt>
                                <dd class="col-sm-2">921-6311 Nam Av.</dd>
                                <dt class="col-sm-1">Phone</dt>
                                <dd class="col-sm-2">(759) 501-2397</dd>
                                <dt class="col-sm-1 text-truncate">Region</dt>
                                <dd class="col-sm-2">Singapore</dd>
                              </dl>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div> <!-- end section -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
@endsection