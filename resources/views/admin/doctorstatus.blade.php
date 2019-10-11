<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Admin - Dashboard HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="#">
                    <h1 class="tm-site-title mb-0">Product Admin</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link" href="/index">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                        
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-file-alt"></i>
                                <span>
                                    products <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/products">Health Products</a>
                                <a class="dropdown-item" href="/equipments">Gym Equipments</a>
                                <a class="dropdown-item" href="/doctors">Doctor</a>
                                <a class="dropdown-item" href="/packages">Membership</a>
                            </div>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-shopping-cart"></i>
                                Fitness Tips
                            </a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="/membershipstatus">
                                <i class="far fa-grin-tongue-squint"></i>
                                Membership Status
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/accounts">
                                <i class="far fa-user"></i>
                                Accounts
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <span> History <i class="fas fa-angle-down"></i> </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/pastorder">Pastorder</a>
                                <a class="dropdown-item" href="/doctorstatus">Doctor Status</a>
                            </div>  
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="/login">
                                Admin, <b>Logout</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Welcome back     <b>Admin</b></p>
                </div>
            </div>
            <!-- row 2-->
            
<div class="col-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                        <h2 class="tm-block-title">Doctor's Appointment List</h2>
                        <table class="table">
                            <thead>

                                <tr>
                                    <th scope="col">Doctor ID</th>
                                    <th scope="col">DOCTORNAME</th>
                                    <th scope="col">PRICE</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">phone</th>
                                    <th scope="col">House number</th>
                                    <th scope="col">Area</th>
                                    <th scope="col">Landmark</th>
                                    <th scope="col">City</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $value)

                                <tr>
                                    <th scope="row"><b>{{ $value->id }}</b></th>
                                    <td><b>{{ $value->doctorname }}</b>
                                    </td>
                                    <td><b>{{ $value->consultancycharge }}</b></td>
                                    <td><b>{{ $value->name }}</b></td>

                                    <td>{{ $value->phone }}</td>
                                    <td>{{ $value->apartment }}</td>
                                    <td>{{ $value->area }}</td>
                                    <td>{{ $value->landmark }}</td>
                                    <td>{{ $value->city }}</td>
                                    
                                </tr>
                                
                                @endforeach

                            </tbody>
                         </table>
                      </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>

        <footer class="tm-footer row tm-mt-small">
            <div class="col-12 font-weight-light">
                <p class="text-center text-white mb-0 px-4 small">
                    Copyright &copy; <b>2019</b> All rights reserved. 
                    
                    Design By: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Students of LJ</a>
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>
</body>

</html>