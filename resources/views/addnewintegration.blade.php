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
                    <x-integrationheader headingName="Add New Integration"/>
                    <div class="row my-4 py-3 px-2" style="background: #212529;">
                        <div class="col col-12 d-flex justify-content-end align-items-center">
                            <a href="integrations"><button class="btn text-white">Back</button></a>
                            <a href="integrations"><button class="int-btn btn px-4">Save</button></a>
                        </div>
                    </div>
                    <div class="row my-2 mb-5">
                        <div class="col col-4">
                            <table class="table" style="background: #212529;">
                                <thead>
                                    <tr >
                                    <th class="fw-bold">Basic Settings</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="background: #0d6efd;" class="align-items-center">
                                        <td><a href="">Integration Info &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                          </svg></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="">API</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col col-8 d-flex flex-column">
                            <h3 class="h3 p-2" style="border-bottom: 1px solid gray">General</h3>
                            <div class="row mb-3">
                                <div class="col col-2"></div>
                                <div class="col col-8 d-flex flex-column">
                                    <div class="my-2 d-flex align-items-center">
                                        <label for="" class="mt-1">Name</label>
                                        <input type="text" name="" id=""  style="width:100%; background: lightgray; border:none; border-radius:4px; padding:8px 8px; margin-left:10px;">
                                    </div>
                                    <div class="my-2 d-flex align-items-center">
                                        <label for="" class="mt-1">Email</label>
                                        <input type="email" name="" id=""  style="width:100%; background: lightgray; border:none; border-radius:4px; padding:8px 8px; margin-left:10px;">
                                    </div>
                                    <div class="my-2 d-flex align-items-center">
                                        <label for="" class="mt-1 w-25">Callback URL</label>
                                        <input type="text" name="" id=""  style="width:100%; background: lightgray; border:none; border-radius:4px; padding:8px 8px; margin-left:10px;">
                                    </div>
                                    <div class="my-2 d-flex align-items-center">
                                        <label for="" class="mt-1 w-25">Identity Link URL</label>
                                        <input type="text" name="" id=""  style="width:100%; background: lightgray; border:none; border-radius:4px; padding:8px 8px; margin-left:10px;">
                                    </div>
                                </div>
                                <div class="col col-2"></div>
                            </div>
                            <h3 class="h3 p-2" style="border-bottom: 1px solid gray">Current User Identity Verification</h3>
                            <div class="row">
                                <div class="col col-2"></div>
                                <div class="col col-8 d-flex flex-column">
                                    <div class="my-2 d-flex align-items-center">
                                        <label for="" class="mt-1">Password</label>
                                        <input type="password" required name="" id=""  style="width:100%; background: lightgray; border:none; border-radius:4px; padding:8px 8px; margin-left:10px;">
                                    </div>
                                </div>
                                <div class="col col-2"></div>
                            </div>
                        </div>
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