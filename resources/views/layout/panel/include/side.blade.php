<div id="kt_aside" class="aside card" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle" data-kt-sticky="true" data-kt-sticky-name="aside-sticky" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '265px'}" data-kt-sticky-left="auto" data-kt-sticky-top="95px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
    <div class="aside-menu flex-column-fluid">
        <div class="hover-scroll-overlay-y my-5 my-lg-6" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_aside_footer, #kt_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="0px">
            <div class="d-flex flex-center flex-column mb-10">
                <div class="symbol mb-3 symbol-100px symbol-circle">
                    <img alt="Pic" src="{{url('public/Twebsite/v1/media/avatars/blank.png')}}" />
                </div>
                <span class="fs-2 text-gray-800 text-hover-primary fw-bolder mb-1">{{auth()->user()->name}}</span>
                <div class="fs-7 fw-bold text-gray-400 mb-2">{{auth()->user()->email}}</div>
                <div class="fs-7 fw-bold text-gray-400 mb-0 fw-bold">
                    <b>
                        @if (auth()->user()->roles->contains('name', 'operator'))
                            Operator    
                        @elseif (auth()->user()->roles->contains('name', 'visitor'))
                            Visitor 
                        @elseif (auth()->user()->roles->contains('name', 'superadmin')) 
                            Administrator
                        @endif
                    </b>
                </div>
                {{-- <div class="d-flex flex-center">
                    <a href="#" class="btn btn-sm btn-light-primary py-2 px-4 fw-bolder me-2" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</a>
                </div> --}}
            </div>
            
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
                @can("Operator - Antrian Pengajuan Proposal")
                <div class="menu-item">
                    <a class="menu-link {{ Request::is('antrian-proposal*') ? 'active' : '' }}" href="{{url('antrian-proposal')}}" data-kt-page="pro">
                        <span class="menu-icon">
                            <i class="fas fa-folder fa-lg"></i>
                        </span>
                        <span class="menu-title">Antrian Proposal
                            {{-- <span class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span> --}}
                    </a>
                </div>
                @endcan
                @can("Operator - Riwayat Proposal")
                <div class="menu-item">
                    <a class="menu-link {{ Request::is('riwayat-proposal*') ? 'active' : '' }}" href="{{url('riwayat-proposal')}}" data-kt-page="pro">
                        <span class="menu-icon">
                            <i class="fas fa-folder fa-lg"></i>
                        </span>
                        <span class="menu-title">Riwayat Proposal
                            {{-- <span class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span> --}}
                    </a>
                </div>
                @endcan
                @can("Visitor - Pengajuan saya")
                <div class="menu-item">
                    <a class="menu-link {{ Request::is('pengajuan-proposal*') ? 'active' : '' }}" href="{{url('pengajuan-proposal')}}" data-kt-page="pro">
                    <span class="menu-icon">
                        <i class="fas fa-folder fa-lg"></i>
                    </span>
                    <span class="menu-title">Proposal Saya
                        {{-- <span class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span> --}}
                    </a>
                </div>
                @endcan
                @can("Visitor - Riwayat Pengajuan")
                <div class="menu-item">
                    <a class="menu-link {{ Request::is('riwayat-pengajuan*') ? 'active' : '' }}" href="{{url('riwayat-pengajuan')}}" data-kt-page="pro">
                    <span class="menu-icon">
                        <i class="fas fa-folder fa-lg"></i>
                    </span>
                    <span class="menu-title">Riwayat
                        {{-- <span class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span> --}}
                    </a>
                </div>
                @endcan

                {{-- @can("DIKLAT - buat artikel / berita")
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
                                        <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
                                    </svg>
                                </span>
                            </span>
                            <span class="menu-title">Artikel</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion">
                            <div class="menu-item">
                                <a class="menu-link" href="{{url('/panel-berita')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Berita</span>
                                </a>
                                <a class="menu-link" href="{{url('/panel-berita-kategori')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Kategori</span>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                @endcan

                 --}}
                {{-- <div class="menu-item">
                    <a class="menu-link" href="#" data-kt-page="pro">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
                                    <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
                                    <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Calendar
                        <span class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
        <a href="{{url('/pengajuan-proposal/create')}}" class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="">
            <span class="btn-label">Ajukan Proposal</span>
            
        </a>
    </div>
</div>