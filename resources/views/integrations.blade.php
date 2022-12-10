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
                    <div class="row" >
                        <div class="col col-8">
                            <h1 class="h1 fw-bold" style="margin:0; line-height:1rem;">Integrations</h1>
                        </div>
                        <div class="col col-4">
                            <div class="row" >
                                <div class="col col-6"></div>
                                <div class="col col-6 d-flex justify-content-center">
                                    <a href="" class="mx-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"  style="margin-right: -30px;">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                          </svg>
                                    </a>
                                    <a href="" class="mx-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                                      </svg>
                                    </a>
                                    <a href="" class="d-flex">
                                        <svg style="margin-right: 8px;" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                          </svg><h6 class="h6">Admin</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-4 py-3 px-2" style="background: #212529;">
                        <div class="col col-12 d-flex justify-content-end">
                            <button class="int-btn btn">Add New Integration</button>
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
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="d-flex align-items-center fs-4"> <img src="{{url('http://pngimg.com/uploads/amazon/amazon_PNG11.png')}}" class="img-thumbnail mx-3" style="border:none; width:80px;" alt="">Amazon</td>
                                    <td class="text-sucess">Connected</td>
                                </tr>
                                <tr>
                                    <td class="d-flex align-items-center fs-4"> <img src="{{url('https://pngimg.com/uploads/ebay/ebay_PNG22.png')}}" class="img-thumbnail mx-3" style="border:none;  width:80px;" alt="">Ebay</td>
                                    <td class="text-sucess">Connected</td>
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