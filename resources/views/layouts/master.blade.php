<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', 'Project') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  {{ Html::style('css/bootstrap.min.css') }}
  {{ Html::style('css/font-awesome.min.css') }}
  {{ Html::style('css/ionicons.min.css') }}
  {{ Html::style('css/app.css') }}
  {{ Html::style('css/AdminLTE.min.css') }}
  {{ Html::style('css/_all-skins.min.css') }}
  {{ Html::style('css/bootstrap-datepicker.min.css') }}
  {{ Html::style('css/dataTables.bootstrap.min.css') }}
  {{ Html::style('css/daterangepicker.css') }}
  {{ Html::style('css/bootstrap3-wysihtml5.min.css') }}
  {{ Html::style('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic') }}
  {{ Html::style('css/bootstrap3-wysihtml5.min.css') }}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

{{ HTML::script('js/jquery.min.js') }}

<script type="text/javascript">

$(document).ready(function(){
  
  $("#bloc").change(function() {
  
  if ($("#bloc").val() == 1)
  {
    $("#one").show();
    $("#two").hide();
    $("#three").hide(); 
  }
  else if ($("#bloc").val() == 2)
  {
    $("#two").show();
    $("#one").hide();
    $("#three").hide(); 
  }
  else
  {      
    $("#three").show();
    $("#one").hide();
    $("#two").hide();
  }
  
  });
  
  $("#bloc").change();
  
});
 </script>
 
<script type="text/javascript">
$(document).ready(function () {
    $('.group').hide();
    $('#multiple').show();
    $('#selectMe').change(function () {
        $('.group').hide();
        $('#'+$(this).val()).show();
    })
});

</script>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" style="overflow-x: hidden; overflow-y: hidden;">
  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>MS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="">School Management System</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        {{ HTML::image('img/1514452804.jpg', 'picture', array('class' => 'img-circle')) }}
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        {{ HTML::image('img/user3-128x128.jpg', 'picture', array('class' => 'img-circle')) }}
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        {{ HTML::image('img/user4-128x128.jpg', 'picture', array('class' => 'img-circle')) }}
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        {{ HTML::image('img/user3-128x128.jpg', 'picture', array('class' => 'img-circle')) }}
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        {{ HTML::image('img/user4-128x128.jpg', 'picture', array('class' => 'img-circle')) }}
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ Auth::user()->avatar }}" class="avatar">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>

            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                {{-- HTML::image('img/1514452804.jpg', 'a picture', array('class' => 'img-circle')) --}}
                <img src="{{ Auth::user()->avatar }}" class="img-circle">
                <p>
                  Saif - Software Developer
                  <small>Member since Nov. 2015</small>
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer" style="background-color:palegreen">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  	<a href="{{ url('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>

  </header>

  
@yield('content')
  <div class="control-sidebar-bg"></div>
</div>


{{ HTML::script('js/jquery-ui.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}
{{ HTML::script('js/raphael.min.js') }}
{{ HTML::script('js/jquery.sparkline.min.js') }}
{{ HTML::script('js/jquery-jvectormap-1.2.2.min.js') }}
{{ HTML::script('js/jquery-jvectormap-world-mill-en.js') }}
{{ HTML::script('js/jquery.knob.min.js') }}
{{ HTML::script('js/moment.min.js') }}
{{ HTML::script('js/daterangepicker.js') }}
{{ HTML::script('js/bootstrap-datepicker.min.js') }}
{{ HTML::script('js/bootstrap3-wysihtml5.all.js') }}
{{ HTML::script('js/jquery.dataTables.min.js') }}
{{ HTML::script('js/dataTables.bootstrap.min.js') }}
{{ HTML::script('js/trial.js') }}

{{ HTML::script('js/adminlte.min.js') }}
{{-- HTML::script('js/dashboard.js') --}}
{{ HTML::script('js/demo.js') }}
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>


<script type="text/javascript">
    $(document).ready(function() {
        $('.addrow').on('click', function(){
            addrow();
        });
        	let id = 1;
        function addrow() {
        
            var tr= '<tr>'+
                    '<td><input type="text" name="name[]" placeholder="Name" class="form-control"></td>'+                  
                    '<td><input type="text" name="classes[]" placeholder="Class" class="form-control"></td> '+                
                    '<td><input type="text" name="section[]" placeholder="section" class="form-control"></td>'+
                    '<td><input type="text" name="dept[]" placeholder="Department" class="form-control"></td>'+
                    '<td><button type="button" class="btn btn-danger remove"><span class="glyphicon glyphicon-remove"></span></button></td>'+
                    '</tr>';
            $('tbody').append(tr);
            id++;
        };

        $(function(){
			$('table').on('click','.remove', function(){
		        var allRow= $('tbody tr').length;
			    if(allRow==1){
			    	alert('You can not remove first row');
			    }else{
			    	$(this).parent().parent().remove();
			    }		
        	});
        });
    });
</script>
</body>
</html>
