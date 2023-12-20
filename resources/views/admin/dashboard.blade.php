<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
   <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/summernote/summernote-bs4.min.css')}}">
<!-- MODEL STYLE -->
<!-- Bootstrap Switch -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<style>
    .message-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
        }

        .message-input {
            flex: 1;
            width: 80em;
           /*padding: 10px;*/
            box-sizing: border-box;
        }

        .send-button {
            padding: 10px;
            cursor: pointer;
          /*background-color: #4CAF50;*/
            color: #fff;
            border: none;
            max-width: 12%;
        }

        /* Adjust the max-width for the image as needed */
        .send-button img {
            max-width: 100%;
        }

         /* Updated CSS with avatar styling */
        .chat_recived_message-container {
            max-width: 70%;
            margin: 10px;
            padding: 15px;
            border-radius: 10px;
            clear: both;
            position: relative; /* Added for positioning the avatar */

        }

        .chat_sent_message-container{
            max-width: 70%;
            margin: 10px;
            border-radius: 10px;
            clear: both;
            position: relative;
            width: 56%;
            margin-left: auto;  
        }

        /* Style for avatars */
        .recived_avatar {
            width: 15%;
            height: 40px;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }
        .sent_avatar {
            width: 42px;
            height: 31px;
            border-radius: 50%;
            position: fixed;
            top: 26%;
            left: 777px;
            transform: translateY(-50%);
        }

        /* Style for sent messages */
        .sent-message {
            background-color: #4CAF50;
            color: #fff;
            float: right;
            max-width: 60%;
            padding: 2px;
            border-radius: 10px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            margin-right: 50px; 
        }

        /* Style for received messages */
        .received-message {
            background-color: #008CBA;
            color: #fff;
            float: left;
            max-width: 60%; 
            padding: 1px;
            border-radius: 10px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            margin-left: 50px;
        }

        /* Clearfix to handle float */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
        .sent{
            width: fit-content;
            margin-left: auto;
        }

</style>



</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('AdminLTE/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('adminDashboard')}}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto" style="justify-content: end;">

      
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">


              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
        <img src="{{asset('malefashion/img/icon/Inquiey.png')}}" title="Inquries" style="max-width: 13%;"data-toggle="modal" data-target="#inquieryModal">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('logout')}}" class="brand-link">
      <img src="{{asset('AdminLTE/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('adminDashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          <!-- Products  Start-->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('all_products')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('add_products')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Products</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Products  End's-->
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('adminDashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                    @forelse($user_data as $users)
                  <tbody>
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$users->name}}</td>
                    <td>{{$users->email}}</td>
                    <td>
                      <a href="{{url('/user_cart/'.$users->id)}}" title="Cart"><img src="{{asset('malefashion/img/icon/cart(1).png')}}" alt="" style="max-width: 38px;"></a>
                      <a href="{{url('/order/'.$users->id)}}" title="order"><img src="{{asset('malefashion/img/icon/order.png')}}" alt="" style="max-width: 23px;"></a>
                       <a href="{{url('/user_wishlist/'.$users->id)}}" title="wishlist"><img src="{{asset('malefashion/img/icon/heart.png')}}" alt="" style="max-width: 23px; margin-left: 8px;"></a>
                       <a href="#" title="chats" data-toggle="modal" data-target="#myModal{{$users->id}}" onclick="loadMessages({{$users->id}})"><img src="{{asset('malefashion/img/icon/chat.png')}}" alt="" style="max-width: 23px; margin-left: 8px;"></a>
                       <!-- MODEL  -->
                          <div class="modal fade" id="myModal{{$users->id}}" role="dialog">
                              <div class="modal-dialog">
                              <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Modal Header User ID: {{$users->id}}</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                    <!-- MODEL Chat HEADES -->
                                      <div class="chat_recived_message-container clearfix">
                                        <img src="{{asset('malefashion/img/icon/avatar.png')}}" alt="Reciver" class="recived_avatar">
                                        <div class="received-message" id="recived_chats">
                                            This is a Recived message.
                                        </div>
                                    </div>

                                    <div class="chat_sent_message-container clearfix ">
                                        <img src="{{asset('malefashion/img/icon/avatar.png')}}" alt="Sender" class="sent_avatar">
                                        <div class="sent-message" id="sent_chats">
                                            This is a Sent message.
                                        </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer message-container">
                                    <input type="text" class="message-input" name="message" placeholder="Send Message....." id = "message-input">
                                    <a href="#" class="send-button" onclick="sendMessage({{$users->id}})"><img src="{{asset('malefashion/img/icon/sendmessage.png')}}"></a>
                                  </div>
                                </div>
                              </div>
                          </div>
                  <!-- MODEL -->
                    </td>
                  </tr>
                  </tbody>
                    @empty
                    <td>Please enter Somedata</td>
                    @endforelse
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="{{route('adminDashboard')}}">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<div class="modal fade" id="inquieryModal" role="dialog">
    <div class="modal-dialog" style="max-width: 100%;">
    <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Modal Header Inquries</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
           </div>
           <div class="modal-body">
              <div>
                  <label for="minDate">Min Date:</label>
                  <input type="date" id="minDate">

                  <label for="maxDate" style="margin-left: 20px;">Max Date:</label>
                  <input type="date" id="maxDate">
              </div>
            @include('admin.inquaries')
          </div>
          <div class="modal-footer">
          </div>
      </div>
    </div>
  </div>
  <!-- MODEL -->



<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('AdminLTE/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('AdminLTE/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('AdminLTE/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('AdminLTE/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('AdminLTE/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('AdminLTE/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('AdminLTE/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('AdminLTE/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('AdminLTE/dist/js/pages/dashboard.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{('AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
  $(function () { 
    $("#example1").DataTable({
      "rowId": "S.No",
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
$(function () { 
  var table = $("#inquiry_details").DataTable({
    "responsive": true,
    "lengthChange": false,
    "autoWidth": false,
    buttons: [],
  });
  $.fn.dataTable.ext.search.push(
    function (settings, data, dataIndex) {
      var min = $('#minDate').val();
      var max = $('#maxDate').val();
      var date = new Date(data[6]);
      var minDate = min !== "" ? new Date(min) : null;
      var maxDate = max !== "" ? new Date(max) : null;


      if (
        (minDate === null || date >= minDate) &&
        (maxDate === null || date <= maxDate)
      ) {
        return true;
      }

      return false;
    }
  );
  $('#minDate, #maxDate').on('change', function () {
    table.draw();
  });
});



function sendMessage(id) {
        var id =id;
       var messageInput = document.getElementById('message-input');
       var message = messageInput.value;
       $.ajax({
            url:'/sendmessage',
            method:'POST',
            data:{message:message ,id :id, _token: '{{ csrf_token() }}'},
            success:function(response){
                console.log("Message sent successfully", response);
                $('#message-input').val("");
            },
             error: function(error) {
                console.error("Error sending message", error);
                // Handle error, if needed
            }
       });
    }

      function loadMessages(userId) {      
        $.ajax({
            url: '/getmessages',
            type: 'GET',
            data: { user_id: userId },
            success: function (data) {
                if (data.recived_messages) {
                $('#messageModalBody' + userId + ' .chat_recived_message-container .received-message').html('');
                data.recived_messages.forEach(function (message) {
                    var receivedMessage = message.message;
                    $('#recived_chats').html('');
                    $('#recived_chats').append(receivedMessage);
                });
            }

                 if (data.sent_messages) {
                // Clear the sent messages div
                $('#messageModalBody' + userId + ' .chat_sent_message-container .sent-message').html('');

                // Iterate through sent messages and append each message to the div
                data.sent_messages.forEach(function (message) {
                    var sentMessage = message.message;
                   $('#sent_chats').html('');
                    $('#sent_chats').append(sentMessage);
                   
                });
            }

                // $('#messageModalBody' + userId).html(data);
            },
            error: function (error) {
                console.error('Error fetching messages: ', error);
            }
        });
    }
    $(document).ready(function(){
        $('.respond-toggle').on('change', function () {
            var inquiryId = $(this).data('inquiry-id');
            var isResponded = $(this).prop('checked') ? 1 : 0;
            $.ajax({
              url:'/update_response_status',
              type:'POST',
              data : {inquiryId: inquiryId,
                    isResponded: isResponded,_token: '{{ csrf_token() }}'},
              success: function (response) {

                if (response.success) {
                  // $('#inquiry_details').DataTable().ajax.reload();
                } else {
                    console.error('Error updating response status');
                }
                // if (response.success) {
                //   var respondedByDiv = $('#responded_by[data-inquiry-id="' + inquiryId + '"]');
                //   respondedByDiv.html(`
                //     <div class="form-check form-switch">
                //       <input class="form-check-input" type="checkbox" role="switch" id="additionalSwitch1">
                //       <label class="form-check-label" for="additionalSwitch1">By Phone</label>
                //     </div>
                //     <div class="form-check form-switch">
                //       <input class="form-check-input" type="checkbox" role="switch" id="additionalSwitch2">
                //       <label class="form-check-label" for="additionalSwitch2">By Email</label>
                //     </div>
                //   `);
                // } else {
                 
                //   console.error('Error updating response status');
                // }
                // table.ajax.reload(null, false); 

              },
              error: function (xhr, status, error) {
                // Handle the error or show a message
                console.error('AJAX request failed');
              }

            });
        });
    });
</script>
</body>
</html>
