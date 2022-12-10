<div>
    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <!-- Dark Logo-->
            <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="{{url('https://themesbrand.com/velzon/html/saas/assets/images/logo-sm.png')}}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{url('https://themesbrand.com/velzon/html/saas/assets/images/logo-dark.png')}}" alt="" height="17">
                </span>
            </a>
            <!-- Light Logo-->
            <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="{{url('https://themesbrand.com/velzon/html/saas/assets/images/logo-sm.png')}}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{url('https://themesbrand.com/velzon/html/saas/assets/images/logo-light.png')}}" alt="" height="17">
                </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  </svg>
            </button>
        </div>

        <div id="scrollbar">
            <div class="container-fluid">

                <div id="two-column-menu">
                </div>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-grid-1x2-fill" viewBox="0 0 16 16">
                                <path d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z"/>
                              </svg> <span data-key="t-dashboards">Dashboards</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarDashboards">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics"> Analytics </a>
                                </li>
                                <li class="nav-item">
                                    <a href="dashboard-crm.html" class="nav-link" data-key="t-crm"> CRM </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link" data-key="t-ecommerce"> Ecommerce </a>
                                </li>
                                <li class="nav-item">
                                    <a href="dashboard-crypto.html" class="nav-link" data-key="t-crypto"> Crypto </a>
                                </li>
                                <li class="nav-item">
                                    <a href="dashboard-projects.html" class="nav-link" data-key="t-projects"> Projects </a>
                                </li>
                                <li class="nav-item">
                                    <a href="dashboard-nft.html" class="nav-link" data-key="t-nft"> NFT</a>
                                </li>
                            </ul>
                        </div>
                    </li> <!-- end Dashboard Menu -->
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
                                <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
                                <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
                              </svg> <span data-key="t-apps">Apps</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarApps">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="apps-calendar.html" class="nav-link" data-key="t-calendar"> Calendar </a>
                                </li>
                                <li class="nav-item">
                                    <a href="apps-chat.html" class="nav-link" data-key="t-chat"> Chat </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarEmail" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEmail" data-key="t-email">
                                        Email
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarEmail">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="apps-mailbox.html" class="nav-link" data-key="t-mailbox"> Mailbox </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sidebaremailTemplates" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebaremailTemplates" data-key="t-email-templates">
                                                    Email Templates
                                                </a>
                                                <div class="collapse menu-dropdown" id="sidebaremailTemplates">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="apps-email-basic.html" class="nav-link" data-key="t-basic-action"> Basic Action </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="apps-email-ecommerce.html" class="nav-link" data-key="t-ecommerce-action"> Ecommerce Action </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarEcommerce" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce" data-key="t-ecommerce"> Ecommerce
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarEcommerce">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="apps-ecommerce-products.html" class="nav-link" data-key="t-products"> Products </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-ecommerce-product-details.html" class="nav-link" data-key="t-product-Details"> Product Details </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-ecommerce-add-product.html" class="nav-link" data-key="t-create-product"> Create Product </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-ecommerce-orders.html" class="nav-link" data-key="t-orders"> Orders </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-ecommerce-order-details.html" class="nav-link" data-key="t-order-details"> Order Details </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-ecommerce-customers.html" class="nav-link" data-key="t-customers"> Customers </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-ecommerce-cart.html" class="nav-link" data-key="t-shopping-cart"> Shopping Cart </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-ecommerce-checkout.html" class="nav-link" data-key="t-checkout"> Checkout </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-ecommerce-sellers.html" class="nav-link" data-key="t-sellers"> Sellers </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-ecommerce-seller-details.html" class="nav-link" data-key="t-sellers-details"> Seller Details </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarProjects" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProjects" data-key="t-projects"> Projects
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarProjects">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="apps-projects-list.html" class="nav-link" data-key="t-list"> List </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-projects-overview.html" class="nav-link" data-key="t-overview"> Overview </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-projects-create.html" class="nav-link" data-key="t-create-project"> Create Project </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarTasks" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTasks" data-key="t-tasks"> Tasks
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarTasks">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="apps-tasks-kanban.html" class="nav-link" data-key="t-kanbanboard"> Kanban Board </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-tasks-list-view.html" class="nav-link" data-key="t-list-view"> List View </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-tasks-details.html" class="nav-link" data-key="t-task-details"> Task Details </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarCRM" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCRM" data-key="t-crm"> CRM
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarCRM">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="apps-crm-contacts.html" class="nav-link" data-key="t-contacts"> Contacts </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-crm-companies.html" class="nav-link" data-key="t-companies"> Companies </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-crm-deals.html" class="nav-link" data-key="t-deals"> Deals </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-crm-leads.html" class="nav-link" data-key="t-leads"> Leads </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarCrypto" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrypto" data-key="t-crypto"> Crypto
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarCrypto">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="apps-crypto-transactions.html" class="nav-link" data-key="t-transactions"> Transactions </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-crypto-buy-sell.html" class="nav-link" data-key="t-buy-sell"> Buy & Sell </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-crypto-orders.html" class="nav-link" data-key="t-orders"> Orders </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-crypto-wallet.html" class="nav-link" data-key="t-my-wallet"> My Wallet </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-crypto-ico.html" class="nav-link" data-key="t-ico-list"> ICO List </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-crypto-kyc.html" class="nav-link" data-key="t-kyc-application"> KYC Application </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarInvoices" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoices" data-key="t-invoices"> Invoices
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarInvoices">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="apps-invoices-list.html" class="nav-link" data-key="t-list-view"> List View </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-invoices-details.html" class="nav-link" data-key="t-details"> Details </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-invoices-create.html" class="nav-link" data-key="t-create-invoice"> Create Invoice </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarTickets" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTickets" data-key="t-supprt-tickets"> Support Tickets
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarTickets">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="apps-tickets-list.html" class="nav-link" data-key="t-list-view"> List View </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-tickets-details.html" class="nav-link" data-key="t-ticket-details"> Ticket Details </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarnft" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarnft" data-key="t-nft-marketplace">
                                        NFT Marketplace
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarnft">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="apps-nft-marketplace.html" class="nav-link" data-key="t-marketplace"> Marketplace </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-nft-explore.html" class="nav-link" data-key="t-explore-now"> Explore Now </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-nft-auction.html" class="nav-link" data-key="t-live-auction"> Live Auction </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-nft-item-details.html" class="nav-link" data-key="t-item-details"> Item Details </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-nft-collections.html" class="nav-link" data-key="t-collections"> Collections </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-nft-creators.html" class="nav-link" data-key="t-creators"> Creators </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-nft-ranking.html" class="nav-link" data-key="t-ranking"> Ranking </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-nft-wallet.html" class="nav-link" data-key="t-wallet-connect"> Wallet Connect </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apps-nft-create.html" class="nav-link" data-key="t-create-nft"> Create NFT </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="apps-file-manager.html" class="nav-link"> <span data-key="t-file-manager">File Manager</span> <span class="badge badge-pill bg-danger" data-key="t-new">New</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="apps-todo.html" class="nav-link"> <span data-key="t-to-do">To Do</span> <span class="badge badge-pill bg-danger" data-key="t-new">New</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-columns" viewBox="0 0 16 16">
                                <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V2zm8.5 0v8H15V2H8.5zm0 9v3H15v-3H8.5zm-1-9H1v3h6.5V2zM1 14h6.5V6H1v8z"/>
                              </svg> <span data-key="t-layouts">Layouts</span>
                              
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarLayouts">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="layouts-vertical.html" target="_blank" class="nav-link" data-key="t-vertical">Vertical</a>
                                </li>
                                <li class="nav-item">
                                    <a href="layouts-detached.html" target="_blank" class="nav-link" data-key="t-detached">Detached</a>
                                </li>
                                <li class="nav-item">
                                    <a href="layouts-two-column.html" target="_blank" class="nav-link" data-key="t-two-column">Two Column</a>
                                </li>
                                <li class="nav-item">
                                    <a href="layouts-vertical-hovered.html" target="_blank" class="nav-link" data-key="t-hovered">Hovered</a>
                                </li>
                            </ul>
                        </div>
                    </li> <!-- end Dashboard Menu -->

                    <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                              </svg> <span data-key="t-authentication">Authentication</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarAuth">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="#sidebarSignIn" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignIn" data-key="t-signin"> Sign In
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarSignIn">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-signin-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-signin-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarSignUp" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp" data-key="t-signup"> Sign Up
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarSignUp">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-signup-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-signup-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="#sidebarResetPass" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarResetPass" data-key="t-password-reset"> Password Reset
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarResetPass">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-pass-reset-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-pass-reset-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="#sidebarchangePass" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarchangePass" data-key="t-password-create">
                                        Password Create
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarchangePass">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-pass-change-basic.html" class="nav-link" data-key="t-basic">
                                                    Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-pass-change-cover.html" class="nav-link" data-key="t-cover">
                                                    Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="#sidebarLockScreen" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLockScreen" data-key="t-lock-screen"> Lock Screen
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarLockScreen">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-lockscreen-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-lockscreen-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="#sidebarLogout" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLogout" data-key="t-logout"> Logout
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarLogout">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-logout-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-logout-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarSuccessMsg" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSuccessMsg" data-key="t-success-message"> Success Message
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarSuccessMsg">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-success-msg-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-success-msg-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarTwoStep" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTwoStep" data-key="t-two-step-verification"> Two Step Verification
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarTwoStep">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-twostep-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-twostep-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarErrors" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarErrors" data-key="t-errors"> Errors
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarErrors">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-404-basic.html" class="nav-link" data-key="t-404-basic"> 404 Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-404-cover.html" class="nav-link" data-key="t-404-cover"> 404 Cover </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-404-alt.html" class="nav-link" data-key="t-404-alt"> 404 Alt </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-500.html" class="nav-link" data-key="t-500"> 500 </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-offline.html" class="nav-link" data-key="t-offline-page"> Offline Page </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                              </svg> <span data-key="t-pages">Pages</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarPages">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="pages-starter.html" class="nav-link" data-key="t-starter"> Starter </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarProfile" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProfile" data-key="t-profile"> Profile
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarProfile">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="pages-profile.html" class="nav-link" data-key="t-simple-page"> Simple Page </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="pages-profile-settings.html" class="nav-link" data-key="t-settings"> Settings </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-team.html" class="nav-link" data-key="t-team"> Team </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-timeline.html" class="nav-link" data-key="t-timeline"> Timeline </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-faqs.html" class="nav-link" data-key="t-faqs"> FAQs </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-pricing.html" class="nav-link" data-key="t-pricing"> Pricing </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-gallery.html" class="nav-link" data-key="t-gallery"> Gallery </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-maintenance.html" class="nav-link" data-key="t-maintenance"> Maintenance </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-coming-soon.html" class="nav-link" data-key="t-coming-soon"> Coming Soon </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-sitemap.html" class="nav-link" data-key="t-sitemap"> Sitemap </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-search-results.html" class="nav-link" data-key="t-search-results"> Search Results </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-rocket" viewBox="0 0 16 16">
                                <path d="M8 8c.828 0 1.5-.895 1.5-2S8.828 4 8 4s-1.5.895-1.5 2S7.172 8 8 8Z"/>
                                <path d="M11.953 8.81c-.195-3.388-.968-5.507-1.777-6.819C9.707 1.233 9.23.751 8.857.454a3.495 3.495 0 0 0-.463-.315A2.19 2.19 0 0 0 8.25.064.546.546 0 0 0 8 0a.549.549 0 0 0-.266.073 2.312 2.312 0 0 0-.142.08 3.67 3.67 0 0 0-.459.33c-.37.308-.844.803-1.31 1.57-.805 1.322-1.577 3.433-1.774 6.756l-1.497 1.826-.004.005A2.5 2.5 0 0 0 2 12.202V15.5a.5.5 0 0 0 .9.3l1.125-1.5c.166-.222.42-.4.752-.57.214-.108.414-.192.625-.281l.198-.084c.7.428 1.55.635 2.4.635.85 0 1.7-.207 2.4-.635.067.03.132.056.196.083.213.09.413.174.627.282.332.17.586.348.752.57l1.125 1.5a.5.5 0 0 0 .9-.3v-3.298a2.5 2.5 0 0 0-.548-1.562l-1.499-1.83ZM12 10.445v.055c0 .866-.284 1.585-.75 2.14.146.064.292.13.425.199.39.197.8.46 1.1.86L13 14v-1.798a1.5 1.5 0 0 0-.327-.935L12 10.445ZM4.75 12.64C4.284 12.085 4 11.366 4 10.5v-.054l-.673.82a1.5 1.5 0 0 0-.327.936V14l.225-.3c.3-.4.71-.664 1.1-.861.133-.068.279-.135.425-.199ZM8.009 1.073c.063.04.14.094.226.163.284.226.683.621 1.09 1.28C10.137 3.836 11 6.237 11 10.5c0 .858-.374 1.48-.943 1.893C9.517 12.786 8.781 13 8 13c-.781 0-1.517-.214-2.057-.607C5.373 11.979 5 11.358 5 10.5c0-4.182.86-6.586 1.677-7.928.409-.67.81-1.082 1.096-1.32.09-.076.17-.135.236-.18Z"/>
                                <path d="M9.479 14.361c-.48.093-.98.139-1.479.139-.5 0-.999-.046-1.479-.139L7.6 15.8a.5.5 0 0 0 .8 0l1.079-1.439Z"/>
                              </svg> <span data-key="t-landing">Landing</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarLanding">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="landing.html" class="nav-link" data-key="t-one-page"> One Page </a>
                                </li>
                                <li class="nav-item">
                                    <a href="nft-landing.html" class="nav-link" data-key="t-nft-landing"> NFT Landing</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Components</span></li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-palette-fill" viewBox="0 0 16 16">
                                <path d="M12.433 10.07C14.133 10.585 16 11.15 16 8a8 8 0 1 0-8 8c1.996 0 1.826-1.504 1.649-3.08-.124-1.101-.252-2.237.351-2.92.465-.527 1.42-.237 2.433.07zM8 5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm4.5 3a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zM5 6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                              </svg> <span data-key="t-base-ui">Base UI</span>
                        </a>
                        <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="ui-alerts.html" class="nav-link" data-key="t-alerts">Alerts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-badges.html" class="nav-link" data-key="t-badges">Badges</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-buttons.html" class="nav-link" data-key="t-buttons">Buttons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-colors.html" class="nav-link" data-key="t-colors">Colors</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-cards.html" class="nav-link" data-key="t-cards">Cards</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-carousel.html" class="nav-link" data-key="t-carousel">Carousel</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-dropdowns.html" class="nav-link" data-key="t-dropdowns">Dropdowns</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-grid.html" class="nav-link" data-key="t-grid">Grid</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="ui-images.html" class="nav-link" data-key="t-images">Images</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-tabs.html" class="nav-link" data-key="t-tabs">Tabs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-accordions.html" class="nav-link" data-key="t-accordion-collapse">Accordion & Collapse</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-modals.html" class="nav-link" data-key="t-modals">Modals</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-offcanvas.html" class="nav-link" data-key="t-offcanvas">Offcanvas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-placeholders.html" class="nav-link" data-key="t-placeholders">Placeholders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-progress.html" class="nav-link" data-key="t-progress">Progress</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-notifications.html" class="nav-link" data-key="t-notifications">Notifications</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="ui-media.html" class="nav-link" data-key="t-media-object">Media object</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-embed-video.html" class="nav-link" data-key="t-embed-video">Embed Video</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-typography.html" class="nav-link" data-key="t-typography">Typography</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-lists.html" class="nav-link" data-key="t-lists">Lists</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-general.html" class="nav-link" data-key="t-general">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-ribbons.html" class="nav-link" data-key="t-ribbons">Ribbons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-utilities.html" class="nav-link" data-key="t-utilities">Utilities</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarAdvanceUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z"/>
                                <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
                              </svg> <span data-key="t-advance-ui">Advance UI</span>
                            <span class="badge badge-pill bg-success" data-key="t-new">New</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="advance-ui-sweetalerts.html" class="nav-link" data-key="t-sweet-alerts">Sweet Alerts</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-nestable.html" class="nav-link" data-key="t-nestable-list">Nestable List</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-scrollbar.html" class="nav-link" data-key="t-scrollbar">Scrollbar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-animation.html" class="nav-link" data-key="t-animation">Animation</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-tour.html" class="nav-link" data-key="t-tour">Tour</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-swiper.html" class="nav-link" data-key="t-swiper-slider">Swiper Slider</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-ratings.html" class="nav-link" data-key="t-ratings">Ratings</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-highlight.html" class="nav-link" data-key="t-highlight">Highlight</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-scrollspy.html" class="nav-link" data-key="t-scrollSpy">ScrollSpy</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="widgets.html">
                            <i class="bx bx-aperture"></i> <span data-key="t-widgets">Widgets</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                            <i class="bx bx-receipt"></i> <span data-key="t-forms">Forms</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarForms">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="forms-elements.html" class="nav-link" data-key="t-basic-elements">Basic Elements</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-select.html" class="nav-link" data-key="t-form-select"> Form Select </a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-checkboxs-radios.html" class="nav-link" data-key="t-checkboxs-radios">Checkboxs & Radios</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-pickers.html" class="nav-link" data-key="t-pickers"> Pickers </a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-masks.html" class="nav-link" data-key="t-input-masks">Input Masks</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-advanced.html" class="nav-link" data-key="t-advanced">Advanced</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-range-sliders.html" class="nav-link" data-key="t-range-slider"> Range Slider </a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-validation.html" class="nav-link" data-key="t-validation">Validation</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-wizard.html" class="nav-link" data-key="t-wizard">Wizard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-editors.html" class="nav-link" data-key="t-editors">Editors</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-file-uploads.html" class="nav-link" data-key="t-file-uploads">File Uploads</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-layouts.html" class="nav-link" data-key="t-form-layouts">Form Layouts</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-select2.html" class="nav-link" data-key="t-select2">Select2</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                            <i class="bx bx-table"></i> <span data-key="t-tables">Tables</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarTables">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="tables-basic.html" class="nav-link" data-key="t-basic-tables">Basic Tables</a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables-gridjs.html" class="nav-link" data-key="t-grid-js">Grid Js</a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables-listjs.html" class="nav-link" data-key="t-list-js">List Js</a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables-datatables.html" class="nav-link" data-key="t-datatables">Datatables</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCharts">
                            <i class="bx bx-doughnut-chart"></i> <span data-key="t-charts">Charts</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarCharts">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="#sidebarApexcharts" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApexcharts" data-key="t-apexcharts"> Apexcharts
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarApexcharts">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="charts-apex-line.html" class="nav-link" data-key="t-line"> Line </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-area.html" class="nav-link" data-key="t-area"> Area </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-column.html" class="nav-link" data-key="t-column"> Column </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-bar.html" class="nav-link" data-key="t-bar"> Bar </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-mixed.html" class="nav-link" data-key="t-mixed"> Mixed </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-timeline.html" class="nav-link" data-key="t-timeline"> Timeline </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-candlestick.html" class="nav-link" data-key="t-candlstick"> Candlstick </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-boxplot.html" class="nav-link" data-key="t-boxplot"> Boxplot </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-bubble.html" class="nav-link" data-key="t-bubble"> Bubble </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-scatter.html" class="nav-link" data-key="t-scatter"> Scatter </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-heatmap.html" class="nav-link" data-key="t-heatmap"> Heatmap </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-treemap.html" class="nav-link" data-key="t-treemap"> Treemap </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-pie.html" class="nav-link" data-key="t-pie"> Pie </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-radialbar.html" class="nav-link" data-key="t-radialbar"> Radialbar </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-radar.html" class="nav-link" data-key="t-radar"> Radar </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="charts-apex-polar.html" class="nav-link" data-key="t-polar-area"> Polar Area </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="charts-chartjs.html" class="nav-link" data-key="t-chartjs"> Chartjs </a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts-echarts.html" class="nav-link" data-key="t-echarts"> Echarts </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarIcons">
                            <i class="bx bx-tone"></i> <span data-key="t-icons">Icons</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarIcons">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="icons-remix.html" class="nav-link" data-key="t-remix">Remix</a>
                                </li>
                                <li class="nav-item">
                                    <a href="icons-boxicons.html" class="nav-link" data-key="t-boxicons">Boxicons</a>
                                </li>
                                <li class="nav-item">
                                    <a href="icons-materialdesign.html" class="nav-link" data-key="t-material-design">Material Design</a>
                                </li>
                                <li class="nav-item">
                                    <a href="icons-lineawesome.html" class="nav-link" data-key="t-line-awesome">Line Awesome</a>
                                </li>
                                <li class="nav-item">
                                    <a href="icons-feather.html" class="nav-link" data-key="t-feather">Feather</a>
                                </li>
                                <li class="nav-item">
                                    <a href="icons-crypto.html" class="nav-link"> <span data-key="t-crypto-svg">Crypto SVG</span> <span class="badge badge-pill bg-danger" data-key="t-new">New</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                            <i class="bx bx-map-alt"></i> <span data-key="t-maps">Maps</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarMaps">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="maps-google.html" class="nav-link" data-key="t-google">
                                        Google
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="maps-vector.html" class="nav-link" data-key="t-vector">
                                        Vector
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="maps-leaflet.html" class="nav-link" data-key="t-leaflet">
                                        Leaflet
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                            <i class="bx bx-sitemap"></i> <span data-key="t-multi-level">Multi Level</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarMultilevel">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Level 1.2
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarAccount">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm" data-key="t-level-2.2"> Level 2.2
                                                </a>
                                                <div class="collapse menu-dropdown" id="sidebarCrm">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link" data-key="t-level-3.1"> Level 3.1 </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link" data-key="t-level-3.2"> Level 3.2 </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li> --}}

                </ul>
            </div>
            <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>
</div>