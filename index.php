<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>EOS SmartContract Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script type="text/javascript">
	(function()
	{
		for(var tags = ['main','figure','figcaption'], i = 0; i < tags.length; i ++)
		{
			document.createElement(tags[i]);
		}
	})();
	</script>

	<style type="text/css">

	html, body
	{
		margin:0;
		padding:0;

		background:#f5f5f5;
		color:#444;
	}
	main
	{
		display:block;

		width:100%;
		min-width:18em;
		margin:2em auto;
	}



	figure
	{
		display:block;

		margin:1em 0;

		border:1px solid #ccc;
		border-radius:3px;

		background:#eee;
	}

	figure figcaption
	{
		display:block;

		padding:5px 10px 4px 10px;

		border-bottom:1px solid #ccc;
		border-radius:3px 3px 0 0;

		font-weight:bold;

		background:#ddd;
		color:#777;
	}



	/* re-factor the existing styles so that the layout
	   is on the inner code element rather than the outer pre,
	   and extend the font reset to all descendents */
	pre, pre *
	{
		font:normal normal normal 1em/1.4 monaco, courier, monospace;
	}
	pre
	{
		font-size:0.8em;
	}
	pre, pre code, pre samp
	{
		display:block;
		margin:0;

		cursor:text;
	}
	pre code, pre samp
	{
		/* explicit white-space is needed for IE7 */
		white-space:pre;

		padding:10px;

		-moz-tab-size:4;
		-o-tab-size:4;
		tab-size:4;

		overflow-x:auto;
	}

	/* extra layout rules for the pre when the numbers column is present */
	pre.line-numbers
	{
		position:relative;
	}
	pre.line-numbers code,
	pre.line-numbers samp
	{
		margin-left:3em;

		border-left:1px solid #ccc;
	}

	/* layout and counter rules for the numbers column */
	pre.line-numbers > div
	{
		display:block;

		position:absolute;
		top:0;
		left:0;

		height:100%;

		border-radius:0 0 0 3px;

		background:#e5e5e5;

		overflow:hidden;

		counter-reset:line;
	}

	/* layout and counter rules for each individual number */
	pre.line-numbers > div > span
	{
		display:block;
		width:2.5em;
		padding:0 0.5em 0 0;

		text-align:right;

		color:#777;

		overflow:hidden;

		counter-increment:line;
	}
	pre.line-numbers > div > span::before
	{
		content:counter(line);
	}
	pre.line-numbers > div > span:first-child
	{
		/* adjust the first number's position
		   to allow for the code element's padding-top */
		margin-top:10px;
	}
	pre.line-numbers > div > span:nth-child(odd)
	{
		background:#dfdfdf;
	}

	/* negate the numbers column for print since it uses pre-wrap */
	@media print
	{
		pre code
		{
			overflow-x:visible;
			white-space:pre-wrap;
		}
		pre.line-numbers div
		{
			display:none;
		}
		pre.line-numbers > code,
		pre.line-numbers > samp
		{
			margin-left:0;
		}
	}



	pre b
	{
		font-weight:normal;
		color:#039;
	}
	pre u, pre u b
	{
		text-decoration:none;
		color:#083;
	}
	pre i, pre i *, pre i * *
	{
		letter-spacing:-0.1em;
		text-decoration:none;
		font-style:normal;
		color:#c55;
	}

	</style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <!-- <i class="fas fa-laugh-wink"></i> -->
        </div>
        <div class="sidebar-brand-text mx-3">SmartContract</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->

      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Components</span></a>
      </li>


      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Utilities Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Addons
      </div> -->

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item active" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Charts -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li> -->

      <!-- Nav Item - Tables -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li> -->

      <!-- Divider -->
      <!-- <hr class="sidebar-divider d-none d-md-block"> -->

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->


            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://www.xatobaxestion.com/wp-content/uploads/2016/09/default-user-img.jpg" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://www.xatobaxestion.com/wp-content/uploads/2016/09/default-user-img.jpg" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://www.xatobaxestion.com/wp-content/uploads/2016/09/default-user-img.jpg" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://www.xatobaxestion.com/wp-content/uploads/2016/09/default-user-img.jpg" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Main Account</span>
                <img class="img-profile rounded-circle" src="https://www.xatobaxestion.com/wp-content/uploads/2016/09/default-user-img.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Deploy Contract</h1>

        </div>
        <!-- /.container-fluid -->
        <div class="container">
          <div class="col-md-1-12">

            <div class="form-group">
              <p>FROM</p>
              <select style="width:50%;" class="form-control form-control-user">
              <option value="volvo">Wallet selector</option>
              <option value="saab">Main Account</option>
              <option value="mercedes">Rodrigo Account</option>
              <option value="audi">EoS Account</option>
              </select>
            </div>

            <div class="form-group">
              <p>AMOUNT</p>

            </div>

            <div class="col-md-12 row">
              <div class="col-md-4 inline-block">
                  <input style="width:50%;" type="email" class="form-control form-control-user inline-block" id="exampleInputEmail" placeholder="1000">

              </div>
              <div class="col-md-4 inline-block">
                <span class="">ETHER</span>
              </div>
              <div class="col-md-4 inline-block">
                <span class="">37.91237234673457</span>

              </div>
            </div>
            <br>
            <input type="checkbox" name="vehicle" value="Bike"> Send everything<br>
            <br>
            <p>you want to send <b>1000 ETHER</b></p>

            <div class="row col-md-12">
              <div class="col-md-8">
                <main>

              		<figure contenteditable="true" >
              			<figcaption id="example1-caption">Solidity code</figcaption>
              <pre aria-describedby="example1-description" aria-labelledby="example1-caption" class="line-numbers"><div aria-hidden="true"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div><code><i>//SmartContract</i>

                pragma solidity >=0.4.22 0.6.0;

    contract Mortal {
        address owner;

        constructor() public { owner = msg.sender; }

        function kill() public { if (msg.sender == owner) selfdestruct(msg.sender); }
    }

    contract Greeter is Mortal {
        string greeting;

        constructor(string memory _greeting) public {
            greeting = _greeting;
        }

        function greet() public view returns (string memory) {
            return greeting;
        }
        function withdraw() canWithdraw {
    uint amountAllocated = totalReceived/employees.length;
    uint amountWithdrawn = withdrawnAmounts[msg.sender];
    uint amount = amountAllocated - amountWithdrawn;
    withdrawnAmounts[msg.sender] = amountWithdrawn + amount;

    if(amount > 0){
      msg.sender.transfer(amount);
    }
  }
}
    }
              }
            </code></pre>
              		</figure>

              	</main>

              </div>
              <div class="col-md-4">

                <div class="form-group">
                  <p>SELECT CONTRACT TO DEPLOY</p>
                  <select style="width:50%;" class="form-control form-control-user">
                  <option value="volvo">Pay Employees</option>
                  <option value="saab">Juan Account</option>
                  <option value="mercedes">Francisco Account</option>
                  <option value="audi">Omar Account</option>
                  </select>
                </div>


              </div>
            </div>








          </div>
        </div>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright EOS Software 2019©</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script type="text/javascript">
	(function()
	{
		//filter IE8 and earlier which don't support the generated content
		if(typeof(window.getComputedStyle) == 'undefined')
		{
			return;
		}

		//get the collection of PRE elements
		var pre = document.getElementsByTagName('pre');

		//now iterate through the collection
		for(var len = pre.length, i = 0; i < len; i ++)
		{
			//get the CODE or SAMP element inside it,
			//or just in case there isn't one, continue to the next PRE
			var code = pre[i].getElementsByTagName('code').item(0);
			if(!code)
			{
				code = pre[i].getElementsByTagName('samp').item(0);
				if(!code)
				{
					continue;
				}
			}

			//create a containing DIV column (but don't append it yet)
			//including aria-hidden so that ATs don't read the numbers
			var column = document.createElement('div');
			column.setAttribute('aria-hidden', 'true');

			//split the code by line-breaks to count the number of lines
			//then for each line, add an empty span inside the column
			for(var n = 0; n < code.innerHTML.split(/[\n\r]/g).length; n ++)
			{
				column.appendChild(document.createElement('span'));
			}

			//now append the populated column before the code element
			pre[i].insertBefore(column, code);

			//finally add an identifying class to the PRE to trigger the extra CSS
			pre[i].className = 'line-numbers';
		}

	})();
	</script>

</body>

</html>
