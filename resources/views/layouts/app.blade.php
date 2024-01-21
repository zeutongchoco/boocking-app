<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->

    </head>
    <body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <body class="font-sans antialiased">
    <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">CodingLab</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Category</a></li>
        </ul>
      </li>
      <li class="active">
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Category</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Category</a></li>
          <li><a href="#">Shooting</a></li>
          <li><a href="#">Couverture Evenementielle</a></li>
          <li><a href="#">Strategie Numerique</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Posts</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Posts</a></li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Login Form</a></li>
          <li><a href="#">Card Design</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Analytics</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Analytics</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Chart</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Chart</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">Plugins</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Plugins</a></li>
          <li><a href="#">UI Face</a></li>
          <li><a href="#">Pigments</a></li>
          <li><a href="#">Box Icons</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Explore</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Explore</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">History</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">History</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <img src="https://gravatar.com/avatar/f57bddebd1edf91412d5d68702530099" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name">Dumitru Chirutac</div>
        <div class="job">Web Desginer</div>
      </div>
      <i class='bx bx-log-out' ></i>
    </div>
  </li>
</ul>
  </div>
        <section class="home-section">
            <div class="home-content">
              <i class='bx bx-menu' ></i>
               <span class="text">Drop Down Sidebar</span>
            </div>
         </section>
                       <!--js-->
                   <script>
                        let arrow = document.querySelectorAll(".arrow");
                          for (var i = 0; i < arrow.length; i++) {
                          arrow[i].addEventListener("click", (e)=>{
                           let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
                         arrowParent.classList.toggle("showMenu");
                        });
                      }
                        let sidebar = document.querySelector(".sidebar");
                        let sidebarBtn = document.querySelector(".bx-menu");
                        console.log(sidebarBtn);
                        sidebarBtn.addEventListener("click", ()=>{
                        sidebar.classList.toggle("close");
                     });
               </script>
               <style>
                /* Google Fonts Import Link */
                  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
                  *{
                     margin: 0;
                     padding: 0;
                      box-sizing: border-box;
                      font-family: 'Poppins', sans-serif;
                    }
                  .sidebar{
                            position: fixed;
                            top: 0;
                            left: 0;
                            height: 100%;
                            width: 260px;
                            z-index: 100;
                            transition: all 0.5s ease;
                            background: #fff;
                           }
                .sidebar.close{
                                width: 78px;
                              }
                .sidebar .logo-details{
                                        height: 60px;
                                        width: 100%;
                                        display: flex;
                                        align-items: center;
                                      }
                .sidebar .logo-details i{
                                          font-size: 30px;
                                          color: #11101d;
                                          height: 50px;
                                          min-width: 78px;
                                          text-align: center;
                                          line-height: 50px;
                                        }
                .sidebar .logo-details .logo_name{
                                                   font-size: 22px;
                                                    color: #fff;
                                                    font-weight: 600;
                                                    transition: 0.3s ease;
                                                    transition-delay: 0.1s;
                                                  }
                .sidebar.close .logo-details .logo_name{
                                                           transition-delay: 0s;
                                                            opacity: 0;
                                                            pointer-events: none;
                                                        }
                .sidebar .nav-links{
                                     height: 100%;
                                      padding: 30px 0 150px 0;
                                       overflow: auto;
                                    }
                .sidebar.close .nav-links{
                                             overflow: visible;
                                          }
                .sidebar .nav-links::-webkit-scrollbar{
                                                        display: none;
                                                      }
                .sidebar .nav-links li{
                                        position: relative;
                                         list-style: none;
                                        transition: all 0.4s ease;
                                      }
                .sidebar .nav-links > li.active:before,
                .sidebar .nav-links > li:before{
                                                   position:absolute;
                                                   left:0;
                                                    top:0;
                                                    content:'';
                                                    width:4px;
                                                    height:100%;
                                                    background:#93181a;
                                                     opacity: 0;
                                                    transition: all 0.25s ease-in-out;
                                                     border-top-right-radius:5px;
                                                     border-top-right-radius:5px;
                                                 }
                .sidebar .nav-links li.active:before,
                .sidebar .nav-links li:hover:before{
                                                       opacity: 1;
                                                     }
                .sidebar .nav-links li .iocn-link{
                                                   display: flex;
                                                   align-items: center;
                                                   justify-content: space-between;
                                                 }
                .sidebar.close .nav-links li .iocn-link{
                                                         display: block
                                                       }
                .sidebar .nav-links li i{
                                          height: 50px;
                                          min-width: 78px;
                                          text-align: center;
                                          line-height: 50px;
                                          color: #11101d;
                                          font-size: 20px;
                                          cursor: pointer;
                                          transition: all 0.3s ease;
                                        }

                .sidebar .nav-links li.active i,
                .sidebar .nav-links li:hover i{
                                                color: #93181a;  
                                              }
                .sidebar .nav-links li.showMenu i.arrow{
                                                         transform: rotate(-180deg);
                                                        }
                .sidebar.close .nav-links i.arrow{
                                                    display: none;
                                                  }
                .sidebar .nav-links li a{
                                          display: flex;
                                          align-items: center;
                                          text-decoration: none;
                                        }
                .sidebar .nav-links li a .link_name{
                                                     font-size: 16px;
                                                     font-weight: 400;
                                                     color: #11101d;
                                                     transition: all 0.4s ease;
                                                    }
                .sidebar .nav-links li.active a .link_name,
                .sidebar .nav-links li:hover a .link_name{  
                                                           color: #93181a;
                                                          }
                .sidebar.close .nav-links li a .link_name{
                                                           opacity: 0;
                                                           pointer-events: none;
                                                          }
                .sidebar .nav-links li .sub-menu{
                                                   padding: 6px 6px 14px 80px;
                                                   margin-top: -10px;
                                                   background: #fff;
                                                   display: none;
                                                }
                .sidebar .nav-links li.showMenu .sub-menu{
                                                           display: block;
                                                          }
                .sidebar .nav-links li .sub-menu a{
                                                    color: #1d1b31;
                                                    font-size: 15px;
                                                    padding: 5px 0;
                                                    white-space: nowrap;
                                                    opacity: 0.6;
                                                    transition: all 0.3s ease;
                                                  }
                .sidebar .nav-links li .sub-menu a:hover{
                                                          opacity: 1;
                                                        }
                .sidebar.close .nav-links li .sub-menu{
                                                        position: absolute;
                                                        left: 100%;
                                                        top: -10px;
                                                        margin-top: 0;
                                                        padding: 10px 20px;
                                                        border-radius: 0 6px 6px 0;
                                                        opacity: 0;
                                                        display: block;
                                                        pointer-events: none;
                                                        transition: 0s;
                                                      }
                .sidebar.close .nav-links li:hover .sub-menu{
                                                               top: 0;
                                                               opacity: 1;
                                                               pointer-events: auto;
                                                               transition: all 0.4s ease;
                                                            }
                .sidebar .nav-links li .sub-menu .link_name{
                                                              display: none;
                                                            }
                .sidebar.close .nav-links li .sub-menu .link_name{
                                                                    font-size: 18px;
                                                                    opacity: 1;
                                                                    display: block;
                                                                  }
                .sidebar .nav-links li .sub-menu.blank{
                                                        opacity: 1;
                                                        pointer-events: auto;
                                                         padding: 3px 20px 6px 16px;
                                                        opacity: 0;
                                                        pointer-events: none;
                                                      }
                .sidebar .nav-links li:hover .sub-menu.blank{
                                                               top: 50%;
                                                               transform: translateY(-50%);
                                                            }
                .sidebar .profile-details{
                                             position: fixed;
                                             bottom: 0;
                                             width: 260px;
                                             display: flex;
                                             align-items: center;
                                             justify-content: space-between;
                                             background: #1d1b31;
                                             padding: 12px 0;
                                             transition: all 0.5s ease;
                                          }
                .sidebar.close .profile-details{
                                                 background: none;
                                                }
                .sidebar.close .profile-details{
                                                 width: 78px;
                                                }
                .sidebar .profile-details .profile-content{
                                                            display: flex;
                                                            align-items: center;
                                                          }
                .sidebar .profile-details img{
                                               height: 52px;
                                               width: 52px;
                                               object-fit: cover;
                                               border-radius: 16px;
                                               margin: 0 14px 0 12px;
                                               background: #1d1b31;
                                               transition: all 0.5s ease;
                                              }
                .sidebar.close .profile-details img{
                                                     padding: 10px;
                                                    }
                .sidebar .profile-details .profile_name,
                .sidebar .profile-details .job{
                                                 color: #fff;
                                                 font-size: 16px;
                                                 font-weight: 400;
                                                 white-space: nowrap;
                                              }
                .sidebar .profile-details .job{
                                                color: #fff;
                                                font-size: 14px;
                                                font-weight: 300;
                                                opacity:.5;
                                                white-space: nowrap;
                                              }
                .sidebar .profile-details i.bx{  
                                                 min-width: 50px;
                                              }

                .sidebar.close .profile-details i,
                .sidebar.close .profile-details .profile_name,
                .sidebar.close .profile-details .job{
                                                      display: none;
                                                    }
                .sidebar .profile-details .job{
                                                font-size: 12px;
                                              }
                .home-section{
                               position: relative;
                               background: #E4E9F7;
                               height: 100vh;
                               left: 260px;
                               width: calc(100% - 260px);
                               transition: all 0.5s ease;
                              }
                .sidebar.close ~ .home-section{
                                                left: 78px;
                                                width: calc(100% - 78px);
                                              }
                .home-section .home-content{
                                              height: 60px;
                                              display: flex;
                                              align-items: center;
                                            }
                .home-section .home-content .bx-menu,
                .home-section .home-content .text{
                                                   color: #11101d;
                                                   font-size: 35px;
                                                  }
                .home-section .home-content .bx-menu{
                                                      margin: 0 15px;
                                                      cursor: pointer;
                                                    }
                .home-section .home-content .text{
                                                   font-size: 26px;
                                                   font-weight: 600;
                                                  }
                @media (max-width: 420px) {
                .sidebar.close .nav-links li .sub-menu{
                                                        display: none;
                                                      }
                                                      }
               </style>
 

            
        </div>
    </body>


</html>
