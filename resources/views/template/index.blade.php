<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="{{asset('public/logo.ico')}}" type="image/x-icon" />
    <title>Book Meeting</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/datatable.css')}}">
    <link rel="stylesheet" href="{{url('css/font-awesome.css')}}">
    <link href="{{url('css/fullcalendar.min.css')}}" rel='stylesheet' />
    <link href="{{url('css/fullcalendar.print.min.css')}}" rel='stylesheet' media='print' />
    <link rel="stylesheet" href="{{url('build/jquery.datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/pick-a-color-1.2.3.min.css')}}">
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('lib/moment.min.js')}}"></script>
    <script src="{{url('js/fullcalendar.min.js')}}"></script>
    <script src="{{url('lib/fullcalendar.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('#example').DataTable();
          } );
        $(document).ready(function() {
        $('#example2').DataTable();
          } );
    </script>
</head>
<body>
    <header>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-5 pull-left">
                        <h3 style="font-weight: bold; line-height: 11px;"><a href="{{url('/home')}}" style="text-decoration: none;color: #fff;">Room</a></h3>
                    </div>
                    <div class="col-xs-3 pull-right">
                        <h5 class="text-right">
                            <div class="dropdown">
                                <label class="control-label" style="color: #fff;">Welcome: {{$name_user}}</label>
                                <a href="" class="btn dropdown-toggle" data-toggle="dropdown">
                                    <span style="color: #fff;cursor: pointer;"><span class="caret"></span></span>
                                </a>
                                <ul class="dropdown-menu">
                                @if($type_user == 1)
                                    <li><a href="{{url('/users')}}"><i class="fa fa-user"></i> User Manage</a></li>
                                    <li><a href="{{url('/groups')}}"><i class="fa fa-users"></i> Group & Room Manage</a></li>
                                    <div class="dropdown-divider"></div>
                                    <!-- <li><a href="#" data-toggle="modal" data-target="#changePassword"><i class="fa fa-lock"></i> Change password</a></li> -->
                                    <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out"></i> Log out</a></li>
                                @else
                                    <!-- <li><a href="#" data-toggle="modal" data-target="#changePassword"><i class="fa fa-lock"></i> Change password</a></li> -->
                                    <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out"></i> Log out</a></li>
                                @endif
                                </ul>
                            </div>
                        </h5>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <section>

        @yield('content')

    </section>
    <div id="error" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Error</h4>
                </div>
                <div class="modal-body">
                    <h3></h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- load -->
    <div id="load-event" class="modal fade" role="dialog">
        <i class="fa fa-cog fa-spin"></i>
    </div>
    <!-- end load -->
    <div id="success" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Success</h4>
                </div>
                <div class="modal-body">
                    <h3></h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onclick="close_user();">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="icon-loading" >
        <img src="{{url('images/icon-loading.gif')}}" width="100">
    </div>
    <!-- Script -->
    <script src="{{url('/js/ajax.js')}}"></script>
    <script src="{{url('/js/common.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{url('/js/bootstrap.min.js')}}"></script>
    <script src="{{url('/build/jquery.datetimepicker.full.js')}}"></script>
    <script src="{{url('/js/datetimepicker.js')}}"></script>
    <script src="{{asset('js/pick-a-color-1.2.3.min.js')}}"></script>
    <script src="{{asset('js/tinycolor-0.9.15.min.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script type="text/javascript">
        $(document).ready(function () {
            $(".pick-a-color").pickAColor({
              showSpectrum            : true,
                showSavedColors       : true,
                saveColorsPerElement  : true,
                fadeMenuToggle         : true,
                showAdvanced          : true,
                showHexInput          : true,
                showBasicColors       : true,
                allowBlank          : true,
                inlineDropdown      : true
            });
        });
    </script>
</body>
</html>
