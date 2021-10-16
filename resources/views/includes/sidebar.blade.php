<div class="inner-wrapper">
    <!-- start: sidebar -->
    <aside id="sidebar-left" class="sidebar-left">

        <div class="sidebar-header">
            <div class="sidebar-title">
                Navigation
            </div>
            <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <div class="nano">
            <div class="nano-content">
                <nav id="menu" class="nav-main" role="navigation">
                    <ul class="nav nav-main">
                        
                        
<!--                          <li>
                            <a href="{{url('/trialBalance')}}">
                                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                                <span>Trial Balance</span>
                            </a>
                        </li>-->
                        
                         <li>
                            <a href="{{url('/sms')}}">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>SMS</span>
                            </a>
                        </li>
                        
                         <li>
                            <a href="{{url('/reversals')}}">
                                <i class="fa fa-undo" aria-hidden="true"></i>
                                <span>Reversal Maker</span>
                            </a>
                        </li>
                          <li>
                            <a href="{{url('/reversals/checker')}}">
                                <i class="fa fa-key " aria-hidden="true"></i>
                                <span>Reversal Authorisation</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/glsettings')}}">
                                <i class="fa fa-bars " aria-hidden="true"></i>
                                <span>General Ledger Settings</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/generalledger/report')}}">
                                <i class="fa fa-bars " aria-hidden="true"></i>
                                <span>General Ledger Report</span>
                            </a>
                        </li>
                        <li>


                            <a href="{{url('/accountentries')}}">
                                <i class="fa fa-bars " aria-hidden="true"></i>
                                <span>Account Entries</span>
                            </a>
                        </li>
                        <li>


                            <a href="{{url('/claimsreport')}}">
                                <i class="fa fa-bars " aria-hidden="true"></i>
                                <span>Claims Report</span>
                            </a>
                        </li>

                        <!--                        <li>
                                                    <a href="{{url('/session')}}">
                                                        <i class="fa fa-bars " aria-hidden="true"></i>
                                                        <span>session</span>
                                                    </a>
                                                </li>-->

                        <!--                        <li>
                                                    <a href="{{url('/session')}}">
                                                        <i class="fa fa-bars " aria-hidden="true"></i>
                                                        <span>session</span>
                                                    </a>
                                                </li>-->





                        @if (Session::has('username'))  <!-- start session validation -->

                        @foreach(Session::get('systemmenu') as $data)
                        <li>
                            <a href="{{url($data->link)}}">
                                <i class="{{$data->icon}}" aria-hidden="true"></i>
                                <span>{{$data->menu_name}}</span>
                            </a>
                        </li>

                        @endforeach

                        @if(Session::get('role')=='Administrator')

                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                                <span>Administration</span>
                            </a>
                            <ul class="nav nav-children">


                                <li>
                                    <a href="{{url('/products')}}">
                                        Products Management
                                    </a>
                                </li>

                                <li>
                                    <a href="{{url('/corporate')}}">
                                        Corporate  Management
                                    </a>
                                </li>


                                <li>
                                    <a href="{{url('/users')}}">
                                        User  Management
                                    </a>
                                </li>



                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-bar-chart-o" aria-hidden="true"></i>
                                <span>Reports</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{url('/commissionsreports')}}">
                                        Commission Report
                                    </a>
                                </li>

                                <li>
                                    <a href="{{url('/paymentsreport')}}">
                                        Payments Report 
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/registrationreport')}}">
                                        Registration Reports 
                                    </a>
                                </li>


                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-pied-piper-alt" aria-hidden="true"></i>
                                <span> Graphical Reports</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{url('/vreports')}}">
                                        Financial Report
                                    </a>
                                </li>


                                <li>
                                    <a href="{{url('/reports')}}">
                                        Membership Report 
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-bar-chart-o" aria-hidden="true"></i>
                                <span>Simulations</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{url('/billmember')}}">
                                        Bill members
                                    </a>
                                </li>

                                <li>
                                    <a href="{{url('/reports')}}">
                                        Finance Report 
                                    </a>
                                </li>




                            </ul>
                        </li>
                        @endif
                        <li>
                            <a href="{{url('/')}}">
                                <i class="fa fa-power-off" aria-hidden="true"></i>
                                <span>Logout</span>
                            </a>
                        </li>







                        @else 
                        // your "Imaginary javascript"
                        window.location.href = '{{url("/")}}';
                        </script>
                        @endif  <!-- end  validation session-->




                        <!--                        @if(Session::get('role')=='Administrator')-->
                        <!--                        <li>
                                                    <a href="{{url('allrequests')}}">
                        
                                                        <span class="pull-right label label-primary"></span>
                                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                                        <span>All Requests</span>
                                                    </a>
                                                </li>
                        
                                                <li class="nav-parent">
                                                    <a>
                                                        <i class="fa fa-copy" aria-hidden="true"></i>
                                                        <span>Requests</span>
                                                    </a>
                                                    <ul class="nav nav-children">
                                                        <li>
                                                            <a href="{{url('myrequests')}}">
                                                                My Requests
                                                            </a>
                                                        </li>
                        
                        
                                                    </ul>
                                                </li>-->


                        <!--                        <li class="nav-parent">
                                                    <a>
                                                        <i class="fa fa-book" aria-hidden="true"></i>
                                                        <span>Report Management</span>
                                                    </a>
                                                    <ul class="nav nav-children">
                                                        <li>
                                                            <a href="{{url('reports')}}">
                                                                Trip Request Report
                                                            </a>
                                                        </li>
                        
                                                    </ul>
                                                    <ul class="nav nav-children">
                                                        <li>
                                                            <a href="{{url('report2form')}}">
                                                                Trip Status Report
                                                            </a>
                                                        </li>
                        
                                                    </ul>
                                                </li>-->

                        <!--                          <li>
                                                    <a href="{{url("users")}}">
                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                        <span>User Management</span>
                                                    </a>
                                                </li>
                                                
                                                  <li class="nav-parent">
                                                    <a>
                                                        <i class="fa fa-book" aria-hidden="true"></i>
                                                        <span>Manage Reports</span>
                                                    </a>
                                                    <ul class="nav nav-children">
                                                         <li>
                                                            <a href="{{url('organisationalreport')}}">
                                                                Organisational Reports
                                                            </a>
                                                        </li>
                                                        
                                                         <li>
                                                            <a href="{{url('provincialreport')}}">
                                                                Provincial Reports
                                                            </a>
                                                        </li>
                        
                                                    </ul>
                                                </li>
                                                
                                                      <li class="nav-parent">
                                                    <a>
                                                        <i class="fa fa-book" aria-hidden="true"></i>
                                                        <span>System Settings</span>
                                                    </a>
                                                    <ul class="nav nav-children">
                                                         <li>
                                                            <a href="{{url('capturedatasettings')}}">
                                                                Capture Data Settings
                                                            </a>
                                                        </li>-->

                        <!--                                 <li>
                                                            <a href="{{url('provincialreport')}}">
                                                                Provincial Reports
                                                            </a>
                                                        </li>-->

                    </ul>
                    </li>
                    <!--                        @endif-->


                    <!--                        @if(Session::get('role')=='User')-->
                    <!--                        <li class="nav-parent">
                                                <a>
                                                    <i class="fa fa-copy" aria-hidden="true"></i>
                                                    <span>Requests</span>
                                                </a>
                                                <ul class="nav nav-children">
                                                    <li>
                                                        <a href="{{url('myrequests')}}">
                                                            My Requests
                                                        </a>
                                                    </li>
                    
                    
                                                </ul>
                                            </li>-->

                    <!--                        @endif-->

                    </ul>
                </nav>

            </div>

        </div>

    </aside>
    <!-- end: sidebar -->