<!DOCTYPE html>
<html lang="en" data-layout="horizontal" data-topbar="dark" data-sidebar-size="lg" data-sidebar="light" data-sidebar-image="none" data-preloader="disable">
    <head>

        <meta charset="utf-8" />
        <title>Spreadify | Integrations</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
    
        <link rel="stylesheet" href="{{asset('app.css')}}">
        <!-- jsvectormap css -->
        <link href="{{url('https://themesbrand.com/velzon/html/saas/assets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />
    
        <!--Swiper slider css-->
        <link href="{{url('https://themesbrand.com/velzon/html/saas/assets/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" />
    
        <!-- Layout config Js -->
        <script src="{{url('https://themesbrand.com/velzon/html/saas/assets/js/layout.js')}}"></script>
        <!-- Bootstrap Css -->
        <link href="{{url('https://themesbrand.com/velzon/html/saas/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{url('https://themesbrand.com/velzon/html/saas/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{url('https://themesbrand.com/velzon/html/saas/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="{{url('https://themesbrand.com/velzon/html/saas/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    
    <style>
        .topbar-user{
            background-color: #1e78ff !important;
        }
    
        #page-topbar,.border-primary,.bg-primary{
            border-color: #0d6efd !important;
            background-color: #0d6efd !important;
        }
        a::after { 
      content: none !important;
    }
    </style>
    </head>
<body>

    <div id="layout-wrapper">
        @component('components.header')
        @endcomponent
        @component('components.appmenu')
        @endcomponent
        <div class="vertical-overlay"></div>

        <div class="main-content">
            <div class="page-content">
                {{-- <div class="container-fluid"> --}}
                    <x-integrationheader headingName="Integrations"/>
                    <div class="row my-4 py-3 px-2" style="background: #212529;">
                        <div class="col col-12 d-flex justify-content-end">
                            <a href="newintegration"><button class="int-btn btn">Add New Integration</button></a>
                        </div>
                    </div>
                    <div class="my-2 row d-flex align-items-center">
                        <div class="col col-8">
                            <div class="row d-flex align-items-center">
                                <div class="col col-1">
                                    <button class="btn int-btn">Search</button>
                                </div>
                                <div class="col col-2 d-flex justify-content-center">
                                    <a href="" style="color:#418dff;">Reset Filter</a>
                                </div>
                                <div class="col col-9">
                                    <p style="margin: 0;">0 Records Found</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-4">
                            <div class="row d-flex align-items-center justify-content-end">
                                <div class="col col-6">
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="fw-semibold text-uppercase fs-12">Per Page
                                            </span><span class="text-muted mx-1"> 5 <img src="{{asset('imgs/logos/angle-down.svg')}}" alt="" width="10px" height="10px"> </span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">5</a>
                                            <a class="dropdown-item" href="#">4</a>
                                            <a class="dropdown-item" href="#">3</a>
                                            <a class="dropdown-item" href="#">2</a>
                                            <a class="dropdown-item" href="#">1</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-6 d-flex justify-content-around align-items-center">
                                    <button class="search-int-btn" style=""><img src="{{asset('imgs/logos/angle-left.svg')}}" width="15px" height="15px" alt=""></button>
                                    <input type="number" name="" id="" style="width: 40px; background:transparent; border:1px solid gray; color:white;; border-radius: 4px;">
                                    <p style="margin-top: 15px; "> 0f 1</p>
                                    <button class="search-int-btn"><img src="{{asset('imgs/logos/angle-right.svg')}}" width="15px" height="15px" alt=""></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-4 row">
                        <table class="table">
                            <thead>
                                <tr style="background: #0d6efd;">
                                <th class="fw-bold">Name</th>
                                <th class="fw-bold">Status</th>
                                <th class="fw-bold">Active</th>
                                <th class="fw-bold">Edit</th>
                                <th class="fw-bold">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="d-flex align-items-center fs-4"> <img src="{{url('http://pngimg.com/uploads/amazon/amazon_PNG11.png')}}" class="img-thumbnail mx-3" style="border:none; width:80px;" alt="">Amazon</td>
                                    <td class="text-sucess">Active</td>
                                    <td class="text-sucess">Reauthorize</td>
                                    <td><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                      </svg></a></td>
                                    <td><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                      </svg></a></td>
                                </tr>
                                <tr>
                                    <td class="d-flex align-items-center fs-4"> <img src="{{url('https://pngimg.com/uploads/ebay/ebay_PNG22.png')}}" class="img-thumbnail mx-3" style="border:none;  width:80px;" alt="">Ebay</td>
                                    <td class="text-sucess">Inactive</td>
                                    <a href=""><td class="text-sucess">Active</td></a>
                                    <td><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                      </svg></a></td>
                                    <td><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                      </svg></a>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                {{-- </div> --}}
            </div>

            @component('components.footer')
            @endcomponent
        </div>
    </div>
    @component('components.themesettings')
    @endcomponent

    @component('components.scripts')
    @endcomponent
</body>
</html>