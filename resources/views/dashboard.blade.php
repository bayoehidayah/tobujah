@extends('theme')

@section('content')
<div class="dashboard-header d-flex flex-column grid-margin">
    <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
        <div class="d-flex align-items-center">
            <h4 class="mb-0 font-weight-bold">Sales Trends</h4>
            <button class="btn btn-inverse-info tx-12 btn-sm btn-rounded mx-3">Enterprise</button>
            <div class="d-none d-md-flex">
                <p class="text-muted mb-0 tx-13 cursor-pointer">Home</p>
                <i class="mdi mdi-chevron-right text-muted"></i>
                <p class="text-muted mb-0 tx-13 cursor-pointer">Dashboard</p>
            </div>
        </div>
        <div class="button-wrapper d-flex align-items-center mt-md-3 mt-xl-0">
            <div class="dropdown mr-3 d-none d-md-block">
                <button class="btn btn-sm text-muted border-0 dropdown-toggle px-0" type="button"
                    id="dropdownMenuSizeButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">UTC
                    time zone </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton2">
                    <h6 class="dropdown-header">Settings</h6>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
            <div class="dropdown mr-3 d-none d-md-block">
                <button class="btn btn-sm text-muted border dropdown-toggle" type="button" id="dropdownMenuSizeButton3"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter by </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                    <h6 class="dropdown-header">Settings</h6>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
            <button class="btn btn-primary btn-sm mr-3 d-none d-md-block">Download Report</button>
            <button class="btn btn-outline-primary btn-sm  d-none d-md-block">Data Export</button>
        </div>
    </div>
    <div class="d-md-flex align-items-center justify-content-between flex-wrap">
        <div class="d-flex align-items-center">
            <p class="mb-0 font-weight-medium mr-2 d-none d-md-block">Categories :</p>
            <div class="p-1 bg-danger mr-1"></div>
            <p class="mb-0 font-weight-medium cursor-pointer mr-3">#Sales</p>
            <div class="p-1 bg-success mr-1"></div>
            <p class="mb-0 font-weight-medium cursor-pointer mr-3">#Purchases</p>
            <div class="p-1 bg-info mr-1"></div>
            <p class="mb-0 font-weight-medium cursor-pointer mr-3">#Returns</p>
        </div>
        <div class="d-flex mt-3 mt-lg-0">
            <div class="d-none d-md-flex">
                <div class="d-flex align-items-center mr-3">
                    <i class="mdi mdi-square-edit-outline icon-sm text-primary"></i>
                    <p class="mb-0 ml-1 cursor-pointer">Edit</p>
                </div>
                <div class="d-flex align-items-center mr-3">
                    <i class="mdi mdi-cash-usd icon-sm text-danger"></i>
                    <p class="mb-0 ml-1 cursor-pointer">Plans & billing</p>
                </div>
                <div class="d-flex align-items-center mr-3">
                    <i class="mdi mdi-progress-upload icon-sm text-success"></i>
                    <p class="mb-0 ml-1 cursor-pointer">Archive</p>
                </div>
                <div class="d-flex align-items-center mr-3">
                    <i class="mdi mdi-logout-variant icon-sm text-info"></i>
                    <p class="mb-0 ml-1 cursor-pointer">Leave</p>
                </div>
            </div>
            <div class="btn-group mt-3 mt-md-0" role="group" aria-label="Button group">
                <button type="button" class="btn border">
                    <i class="mdi mdi-magnify text-body"></i>
                </button>
                <button type="button" class="btn border">
                    <i class="mdi mdi-reload text-body"></i>
                </button>
                <button type="button" class="btn border">
                    <i class="mdi mdi-chart-line text-body"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12 grid-margin stretch-card">
        <div class="row flex-grow">
            <div class="col-md-6 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <p class="card-title mb-0">Real Time Sales</p>
                            <p class="mb-0 tx-13">This Week</p>
                        </div>
                        <div class="d-flex mb-2">
                            <div class="mr-4 mb-2 mb-sm-0">
                                <h4 class="mb-1 font-weight-medium"><span
                                        class="text-muted">$</span>150,200<small>.00</small>
                                </h4>
                                <p class="text-muted mb-0 tx-11">Total Sales</p>
                            </div>
                            <div>
                                <h4 class="mb-1 font-weight-medium"><span
                                        class="text-muted">$</span>21,830<small>.25</small>
                                </h4>
                                <p class="text-muted mb-0 tx-11">Avg. Sales per Day</p>
                            </div>
                        </div>
                        <div class="sales-chart-wrapper">
                            <div id="salesFlotChartDark" class="sales-flot-chart-dark"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <p class="card-title mb-0">Store Visitors</p>
                            <p class="mb-0 tx-13">This Week</p>
                        </div>
                        <div class="d-flex flex-wrap mb-2">
                            <div class="mr-4">
                                <h4 class="mb-1 font-weight-medium">297,506</h4>
                                <p class="text-muted mb-0 tx-11">Total Visitors</p>
                            </div>
                            <div class="mr-4">
                                <h4 class="mb-1 font-weight-medium">38,130</h4>
                                <p class="text-muted mb-0 tx-11">Visits per Day</p>
                            </div>
                            <div>
                                <h4 class="mb-1 font-weight-medium">35.07%</h4>
                                <p class="text-muted mb-0 tx-11">Bounce Rate</p>
                            </div>
                        </div>
                        <div class="visitors-chart-wrapper">
                            <div id="visitorsFlotChartDark" class="visitors-flot-chart-dark"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Sessions by Channel</h6>
                <p class="mb-3 text-muted">Measures your user's sessions and page views metrics to
                    your website for
                    this month.</p>
                <div class="row align-items-center">
                    <div class="col-sm-8 col-md-7">
                        <div id="flotPieChartDark" class="flot-pie-chart w-100"></div>
                    </div>
                    <div class="col-sm-4 col-md-5 mg-t-30 mg-sm-t-0">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center"><span
                                    class="d-inline-block p-1 bg-purple mr-3"></span>
                                Very Satisfied (26%)</li>
                            <li class="d-flex align-items-center"><span
                                    class="d-inline-block p-1 bg-primary mr-3"></span>
                                Satisfied (39%)</li>
                            <li class="d-flex align-items-center"><span class="d-inline-block p-1 bg-teal mr-3"></span>
                                Not
                                Satisfied (20%)</li>
                            <li class="d-flex align-items-center"><span class="d-inline-block p-1 bg-gray mr-3"></span>
                                Satisfied (15%)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card dashboard-special-card">
            <img src="{{asset("images/dashboard/oval.svg")}}" class="oval" alt="oval">
            <img src="{{asset("images/dashboard/rectangle.svg")}}" class="rectangle" alt="rectangle">
            <div class="card-body text-white">
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h4 class="text-white font-weight-bold mb-3">Your business in our hands</h4>
                        <button class="btn btn-sm text-white">Upgrade Trail</button>
                    </div>
                    <div class="col-md-6 mt-3 mt-md-0">
                        <img src="{{asset("images/dashboard/card-img.svg")}}" alt="">
                    </div>
                </div>
                <div class="mt-3 mb-5 mb-md-2 card-bottom">
                    <p class="tx-13 mb-0">Best for small business</p>
                    <p class="tx-13 mb-0">Accessible on mobile & esktop devices</p>
                    <p class="tx-13 mb-0">view more</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-9 grid-margin stretch-card">
        <div class="card">
            <div class="row">
                <div class="col-md-4 stretch-card">
                    <div class="card-body">
                        <p class="card-title">Users By Country</p>
                        <p class="mb-3 text-muted">The top locations where users of your product are
                            located for this
                            month</p>
                        <div>
                            <div class="d-flex justify-content-between mt-2">
                                <span>United States</span>
                                <span class="tx-12 font-weight-bold">3,564</span>
                            </div>
                            <div class="progress progress-sm mt-2">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 90%"
                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <span>United Kingdom</span>
                                <span class="tx-12 font-weight-bold">7,567</span>
                            </div>
                            <div class="progress progress-sm mt-2">
                                <div class="progress-bar bg-purple" role="progressbar" style="width: 88%"
                                    aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <span>Russia</span>
                                <span class="tx-12 font-weight-bold">6,466</span>
                            </div>
                            <div class="progress progress-sm mt-2">
                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="55"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <span>China</span>
                                <span class="tx-12 font-weight-bold">5,234</span>
                            </div>
                            <div class="progress progress-sm mt-2">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 65%"
                                    aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <span>Australia</span>
                                <span class="tx-12 font-weight-bold">4,865</span>
                            </div>
                            <div class="progress progress-sm mt-2">
                                <div class="progress-bar bg-teal" role="progressbar" style="width: 55%"
                                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 stretch-card">
                    <div class="card-body overflow-hidden">
                        <div id="vmapDark2" class="vmap-dark-wrapper"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Mobile Sessions</p>
                <p class="mb-3 text-muted">The percentage of users who uses mobile devices compare
                    to other devices.
                </p>
                <div class="d-flex flex-column align-items-center mg-b-25">
                    <div>
                        <div class="donut-chart chart-dark">
                            <div class="slice one"></div>
                            <div class="slice two"></div>
                            <div class="chart-center">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-6 d-flex justify-content-end">
                        <div>
                            <label
                                class="d-flex align-items-center justify-content-end tx-10 text-uppercase font-weight-medium"><span
                                    class="p-1 mr-1 rounded-circle bg-indigo"></span> Mobile</label>
                            <h3 class="font-weight-bold mb-0">6,098</h3>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="d-flex align-items-center tx-10 text-uppercase font-weight-medium"><span
                                class="p-1 mr-1 rounded-circle bg-gray-dark"></span> Desktop</label>
                        <h3 class="font-weight-bold mb-0">3,902</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
        <div class="row">
            <div class="col-md-12 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Acquisition</h6>
                        <p class="tx-12 mb-3 text-muted">Tells you where your visitors originated
                            from, such as search
                            engines, social networks or website referrals.</p>
                        <div class="row">
                            <div class="col-6 d-sm-flex align-items-center">
                                <div class="card-chart mr-2 bg-primary">
                                    <span class="peity-bar"
                                        data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 20, &quot;height&quot;: 20 }">6,4,7,5,7</span>
                                </div>
                                <div>
                                    <label class="tx-12 mb-1">Bounce Rate</label>
                                    <h4 class="font-weight-bold mb-0">33.50%</h4>
                                </div>
                            </div>
                            <div class="col-6 d-sm-flex align-items-center">
                                <div class="card-chart mr-2 bg-purple">
                                    <span class="peity-bar"
                                        data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 21, &quot;height&quot;: 20 }">7,4,5,7,2</span>
                                </div>
                                <div>
                                    <label class="tx-12 mb-1">Sessions</label>
                                    <h4 class="font-weight-bold mb-0">965</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Sessions</h6>
                        <p class="tx-12 mb-3 text-muted">A session is the period time a user is
                            actively engaged with your
                            website, app, etc.</p>
                        <div class="row">
                            <div class="col-6 d-sm-flex align-items-center">
                                <div class="card-chart mr-2">
                                    <span class="peity-donut"
                                        data-peity='{ "fill": ["#7571f9", "#1e1e2f"],  "innerRadius": 14, "radius": 20 }'>4/7</span>
                                </div>
                                <div>
                                    <label class="tx-12 mb-1">New Sessions</label>
                                    <h4 class="font-weight-bold mb-0">26.80%</h4>
                                </div>
                            </div>
                            <div class="col-6 d-sm-flex align-items-center">
                                <div class="card-chart mr-2">
                                    <span class="peity-donut"
                                        data-peity='{ "fill": ["#00BBE0", "#1e1e2f"],  "innerRadius": 14, "radius": 20 }'>2/7</span>
                                </div>
                                <div>
                                    <label class="tx-12 mb-1">Pages/Session</label>
                                    <h4 class="font-weight-bold mb-0">105</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">What pages do your users visit</h6>
                <p class="mb-2 text-muted">Part of this date range occurs before the new users
                    metric had been
                    calculated, so the old users metric is displayed.</p>
                <div class="table-responsive">
                    <table class="table card-table-one">
                        <thead>
                            <tr>
                                <th class="px-0">Country</th>
                                <th>Entrances</th>
                                <th>Bounce Rate</th>
                                <th>Exits</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-0">
                                    <div class="d-flex">
                                        <i class="flag-icon flag-icon-us flag-icon-squared mr-3"></i>
                                        <strong>United States</strong>
                                    </div>
                                </td>
                                <td><strong>134</strong> (1.51%)</td>
                                <td>33.58%</td>
                                <td>15.47%</td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <div class="d-flex">
                                        <i class="flag-icon flag-icon-gb flag-icon-squared mr-3"></i>
                                        <strong>United Kingdom</strong>
                                    </div>
                                </td>
                                <td><strong>290</strong> (3.30%)</td>
                                <td>9.22%</td>
                                <td>7.99%</td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <div class="d-flex">
                                        <i class="flag-icon flag-icon-in flag-icon-squared mr-3"></i>
                                        <strong>India</strong>
                                    </div>
                                </td>
                                <td><strong>250</strong> (3.00%)</td>
                                <td>20.75%</td>
                                <td>2.40%</td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <div class="d-flex">
                                        <i class="flag-icon flag-icon-ca flag-icon-squared mr-3"></i>
                                        <strong>Canada</strong>
                                    </div>
                                </td>
                                <td><strong>216</strong> (2.79%)</td>
                                <td>32.07%</td>
                                <td>15.09%</td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <div class="d-flex">
                                        <i class="flag-icon flag-icon-fr flag-icon-squared mr-3"></i>
                                        <strong>France</strong>
                                    </div>
                                </td>
                                <td><strong>216</strong> (2.79%)</td>
                                <td>32.07%</td>
                                <td>15.09%</td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <div class="d-flex">
                                        <i class="flag-icon flag-icon-ph flag-icon-squared mr-3"></i>
                                        <strong>Philippines</strong>
                                    </div>
                                </td>
                                <td><strong>197</strong> (2.12%)</td>
                                <td>32.07%</td>
                                <td>15.09%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection