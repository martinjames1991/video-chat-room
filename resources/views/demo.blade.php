<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Flingo, Messaging app, chat, chat app"/>
    
    <title>Flingo Messaging Platform</title>
    <link href="https://fonts.googleapis.com/css?family=Archivo:400,400i,500,500i,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/fonts/MaterialDesign/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="./assets/vendors/OwlCarousel2/owl.carousel.css">
    <link rel="stylesheet" href="./assets/vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="./css/theme/default.css">
</head>
<body class="light-default-theme">
    <div class="ca-main-conatiner">
        <div class="ca-main-wrapper">
            <div class="ca-sidebar-wrapper">
                <div class="ca-sidebar">
                    <div class="ca-sidebar__header">
                        <div class="ca-userprofile" data-toggle="modal" data-target="#viewProfileModal">
                            <a href="javascript:;" class="user-avatar user-avatar-rounded">
                                <img src="./assets/images/user/100/face-01.jpg" alt="">
                            </a>
                        </div>
                        <div class="iconbox-group">
                            
                            <div class="iconbox iconbox-search btn-hovered-light">
                                <i class="iconbox__icon mdi mdi-magnify"></i>
                            </div>

                            <div class="iconbox btn-hovered-light">
                                <i class="iconbox__icon mdi mdi-bell-outline"></i>
                            </div>
                            
                            <div class="iconbox-dropdown dropdown">
                                <div class="iconbox btn-hovered-light" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="javascript:;">
                                        <span><i class="mdi mdi-star-outline"></i></span> 
                                        <span>Starred Messages</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;" data-toggle="modal" data-target="#invitePeopleModal">
                                        <span><i class="mdi mdi-account-multiple-plus-outline"></i></span> 
                                        <span>Invite People</span>
                                    </a>
                                   
                                    <a class="dropdown-item" href="javascript:;" data-toggle="modal" data-target="#settingsModalCenter">
                                        <span><i class="mdi mdi-settings-outline"></i></span> 
                                        <span>Settings</span>
                                    </a>

                                   
                                    <a class="dropdown-item" href="javascript:;">
                                        <span><i class="mdi mdi-help-circle-outline"></i></span> 
                                        <span>Help</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <span><i class="mdi mdi-comment-quote-outline"></i></span> 
                                        <span>Feedback</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <span><i class="mdi mdi-information-outline"></i></span> 
                                        <span>About us</span>
                                    </a>
                                </div>
                            </div>                            
                        </div>

                        <div class="iconbox-searchbar">
                            <form>
                                <input type="text" class="form-control" placeholder="Search here..." autofocus>
                                
                                <button class="search-submit" type="submit">
                                    <i class="mdi mdi-magnify"></i>
                                </button>
                                <a href="javascript:void(0)" class="search-close">
                                    <i class="mdi mdi-arrow-left"></i>
                                </a>
                            </form>
                        </div>
                       
                    </div>

                    <div class="ca-sidebar__body">
                        <div class="ca-navigation-tabs">
                            <div class="nav-style-1">
                                <ul class="nav" id="caMainTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="caChatsTab" data-toggle="pill" href="#caChats" role="tab" aria-controls="caChats" aria-selected="true">
                                            <span class="mdi mdi-message-text"></span>
                                            <span>Chats</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="caCallsTab" data-toggle="pill" href="#caCalls" role="tab" aria-controls="caCalls" aria-selected="false">
                                            <span class="mdi mdi-phone"></span>
                                            <span>Calls</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="caContactsTab" data-toggle="pill" href="#caContacts" role="tab" aria-controls="caContacts" aria-selected="false">
                                            <span class="mdi mdi-account-box-outline"></span>
                                            <span>Contacts</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="caMainTabContent">

                                    <div class="tab-pane fade show active" id="caChats" role="tabpanel" aria-labelledby="caChatsTab">
                                        <div class="nav-style-2">
                                            <ul class="nav nav-pills py-3" id="caChatsTabInside" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link d-flex flex-row align-items-center active" id="personal-chat-tab" data-toggle="pill" href="#personal-chat" role="tab" aria-controls="personal-chat" aria-selected="true"> 
                                                        <span>Personal</span>
                                                        <span class="badge badge-primary badge-rounded badge-font-size ml-2">2</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link  d-flex flex-row align-items-center" id="groups-chat-tab" data-toggle="pill" href="#groups-chat" role="tab" aria-controls="groups-chat" aria-selected="false">
                                                        <span>Groups</span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="tab-content" id="caChatsTabInsideContent">
                                                <div class="tab-pane fade show active" id="personal-chat" role="tabpanel" aria-labelledby="personal-chat-tab">
                                                    <div class="sidebar-userlist">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <div class="conversation">
                                                                    <div class="user-avatar user-avatar-rounded online">
                                                                        <img src="./assets/images/user/250/01.jpg" alt="">
                                                                    </div>
                                                                    <div class="conversation__details">
                                                                        <div class="conversation__name">
                                                                            <div class="conversation__name--title">Jack P. Angulo</div>
                                                                            <div class="conversation__time">00:21 PM</div>
                                                                        </div>
                                                                        <div class="conversation__message">
                                                                            <div class="conversation__message-preview">
                                                                                <span class="tick">
                                                                                    <img src="./assets/images/tick/tick-read.svg" alt="">
                                                                                </span>
                                                                                <span>
                                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta consequuntur accusantium tempora. Ad officiis voluptate neque, deleniti porro necessitatibus aut!
                                                                                </span>
                                                                            </div>
                                                                            
                                                                            <span>
                                                                                <i class="mdi mdi-pin"></i>
                                                                            </span>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="conversation unread">
                                                                    <div class="user-avatar user-avatar-rounded online">
                                                                        <img src="./assets/images/user/250/02.jpg" alt="">
                                                                    </div>
                                                                    <div class="conversation__details">
                                                                        <div class="conversation__name">
                                                                            <div class="conversation__name--title">Earnest Clements</div>
                                                                            <div class="conversation__time">02:47 PM</div>
                                                                        </div>
                                                                        <div class="conversation__message">
                                                                            <div class="conversation__message-preview">
                                                                                <span class="tick">
                                                                                <img src="./assets/images/tick/tick-delivered.svg" alt="">
                                                                                </span>An example of un-read message.
                                                                            </div>
                                                                            
                                                                            <span><i class="mdi mdi-pin"></i></span>
                                                                            <span class="badge badge-primary badge-rounded">2</span>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="conversation unread">
                                                                    <div class="user-avatar user-avatar-rounded offline">
                                                                        <img src="./assets/images/user/250/03.jpg" alt="">
                                                                    </div>
                                                                    <div class="conversation__details">
                                                                        <div class="conversation__name">
                                                                            <div class="conversation__name--title">Willie McLaughlin</div>
                                                                            <div class="conversation__time">07:15 PM</div>
                                                                        </div>
                                                                        <div class="conversation__message">
                                                                            <div class="conversation__message-preview">
                                                                                <span class="tick">
                                                                                    <img src="./assets/images/tick/tick-send.svg" alt="">
                                                                                </span>
                                                                                Hello! Are you free today?
                                                                            </div>
                                                                            
                                                                            <span><i class="mdi mdi-volume-mute"></i></span>
                                                                            <span class="badge badge-primary badge-rounded">12</span>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="conversation">
                                                                    <div class="user-avatar user-avatar-rounded online">
                                                                        <img src="./assets/images/user/250/04.jpg" alt="">
                                                                    </div>
                                                                    <div class="conversation__details">
                                                                        <div class="conversation__name">
                                                                            <div class="conversation__name--title">Andrew Showalter</div>
                                                                            <div class="conversation__time">02:47 PM</div>
                                                                        </div>
                                                                        <div class="conversation__message">
                                                                            <div class="conversation__message-preview">
                                                                                <span class="tick">
                                                                                <img src="./assets/images/tick/tick-delivered.svg" alt="">
                                                                                </span>Hey! I received your email. Thank you :)
                                                                            </div>                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="conversation">
                                                                    <div class="user-avatar user-avatar-rounded offline">
                                                                        <img src="./assets/images/user/250/05.jpg" alt="">
                                                                    </div>
                                                                    <div class="conversation__details">
                                                                        <div class="conversation__name">
                                                                            <div class="conversation__name--title">Amanda Sinquefield</div>
                                                                            <div class="conversation__time">yesterday</div>
                                                                        </div>
                                                                        <div class="conversation__message">
                                                                            <div class="conversation__message-preview">
                                                                                <span class="tick">
                                                                                    <img src="./assets/images/tick/tick-send.svg" alt="">
                                                                                </span>
                                                                                Hello! Are you free today?
                                                                            </div>                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="conversation active">
                                                                    <div class="user-avatar user-avatar-rounded offline">
                                                                        <img src="./assets/images/user/500/01.jpg" alt="">
                                                                    </div>
                                                                    <div class="conversation__details">
                                                                        <div class="conversation__name">
                                                                            <div class="conversation__name--title">Janice Nichols</div>
                                                                            <div class="conversation__time">yesterday</div>
                                                                        </div>
                                                                        <div class="conversation__message">
                                                                            <div class="conversation__message-preview">
                                                                                <span class="tick">
                                                                                    <img src="./assets/images/tick/tick-send.svg" alt="">
                                                                                </span>
                                                                                Hello! Are you free today?
                                                                            </div>                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="conversation">
                                                                    <div class="user-avatar user-avatar-rounded offline">
                                                                        <img src="./assets/images/user/500/02.jpg" alt="">
                                                                    </div>
                                                                    <div class="conversation__details">
                                                                        <div class="conversation__name">
                                                                            <div class="conversation__name--title">Christopher P. Adams</div>
                                                                            <div class="conversation__time">yesterday</div>
                                                                        </div>
                                                                        <div class="conversation__message">
                                                                            <div class="conversation__message-preview">
                                                                                <span class="tick">
                                                                                    <img src="./assets/images/tick/tick-send.svg" alt="">
                                                                                </span>
                                                                                Hello! Are you free today?
                                                                            </div>                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="conversation">
                                                                    <div class="user-avatar user-avatar-rounded avatar-info online">
                                                                        <span>EH</span>
                                                                    </div>
                                                                    <div class="conversation__details">
                                                                        <div class="conversation__name">
                                                                            <div class="conversation__name--title">Esther Hunter</div>
                                                                            <div class="conversation__time">yesterday</div>
                                                                        </div>
                                                                        <div class="conversation__message">
                                                                            <div class="conversation__message-preview">
                                                                                <span class="tick">
                                                                                    <img src="./assets/images/tick/tick-send.svg" alt="">
                                                                                </span>
                                                                                Hello! Are you free today?
                                                                            </div>                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="conversation">
                                                                    <div class="user-avatar user-avatar-rounded offline">
                                                                        <img src="./assets/images/user/500/04.jpg" alt="">
                                                                    </div>
                                                                    <div class="conversation__details">
                                                                        <div class="conversation__name">
                                                                            <div class="conversation__name--title">Marguerite E. Hutchings</div>
                                                                            <div class="conversation__time">yesterday</div>
                                                                        </div>
                                                                        <div class="conversation__message">
                                                                            <div class="conversation__message-preview">
                                                                                <span class="tick">
                                                                                    <img src="./assets/images/tick/tick-send.svg" alt="">
                                                                                </span>
                                                                                Hello! Are you free today?
                                                                            </div>                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="conversation">
                                                                    <div class="user-avatar user-avatar-rounded offline">
                                                                        <img src="./assets/images/user/500/05.jpg" alt="">
                                                                    </div>
                                                                    <div class="conversation__details">
                                                                        <div class="conversation__name">
                                                                            <div class="conversation__name--title">Thomas Weber</div>
                                                                            <div class="conversation__time">yesterday</div>
                                                                        </div>
                                                                        <div class="conversation__message">
                                                                            <div class="conversation__message-preview">
                                                                                <span class="tick">
                                                                                    <img src="./assets/images/tick/tick-send.svg" alt="">
                                                                                </span>
                                                                                Hello! Are you free today?
                                                                            </div>                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="conversation">
                                                                    <div class="user-avatar user-avatar-rounded avatar-danger online">
                                                                        <span>CM</span>
                                                                    </div>
                                                                    <div class="conversation__details">
                                                                        <div class="conversation__name">
                                                                            <div class="conversation__name--title">Chuck McCann</div>
                                                                            <div class="conversation__time">yesterday</div>
                                                                        </div>
                                                                        <div class="conversation__message">
                                                                            <div class="conversation__message-preview">
                                                                                <span class="tick">
                                                                                    <img src="./assets/images/tick/tick-send.svg" alt="">
                                                                                </span>
                                                                                Hello! Are you free today?
                                                                            </div>                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="conversation">
                                                                    <div class="user-avatar user-avatar-rounded offline">
                                                                        <img src="./assets/images/user/500/07.jpg" alt="">
                                                                    </div>
                                                                    <div class="conversation__details">
                                                                        <div class="conversation__name">
                                                                            <div class="conversation__name--title">Eva Wilson</div>
                                                                            <div class="conversation__time">yesterday</div>
                                                                        </div>
                                                                        <div class="conversation__message">
                                                                            <div class="conversation__message-preview">
                                                                                <span class="tick">
                                                                                    <img src="./assets/images/tick/tick-send.svg" alt="">
                                                                                </span>
                                                                                Hello! Are you free today?
                                                                            </div>                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="conversation">
                                                                    <div class="user-avatar user-avatar-rounded offline">
                                                                        <img src="./assets/images/user/500/08.jpg" alt="">
                                                                    </div>
                                                                    <div class="conversation__details">
                                                                        <div class="conversation__name">
                                                                            <div class="conversation__name--title">Sheila Hawkins</div>
                                                                            <div class="conversation__time">yesterday</div>
                                                                        </div>
                                                                        <div class="conversation__message">
                                                                            <div class="conversation__message-preview">
                                                                                <span class="tick">
                                                                                    <img src="./assets/images/tick/tick-send.svg" alt="">
                                                                                </span>
                                                                                Hello! Are you free today?
                                                                            </div>                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="conversation">
                                                                    <div class="user-avatar user-avatar-rounded offline">
                                                                        <img src="./assets/images/user/500/09.jpg" alt="">
                                                                    </div>
                                                                    <div class="conversation__details">
                                                                        <div class="conversation__name">
                                                                            <div class="conversation__name--title">Pearl Villarreal</div>
                                                                            <div class="conversation__time">yesterday</div>
                                                                        </div>
                                                                        <div class="conversation__message">
                                                                            <div class="conversation__message-preview">
                                                                                <span class="tick">
                                                                                    <img src="./assets/images/tick/tick-send.svg" alt="">
                                                                                </span>
                                                                                Hello! Are you free today?
                                                                            </div>                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="groups-chat" role="tabpanel" aria-labelledby="groups-chat-tab">
                                                    <div class="sidebar-userlist">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <div class="conversation status-hidden active">
                                                                    <div class="user-avatar user-avatar-rounded">
                                                                        <img src="./assets/images/media/friends.jpg" alt="">
                                                                    </div>
                                                                    <div class="conversation__details">
                                                                        <div class="conversation__name">
                                                                            <div class="conversation__name--title">Friends Forever</div>
                                                                            <div class="conversation__time">00:21 PM</div>
                                                                        </div>
                                                                        <div class="conversation__message">
                                                                            <div class="conversation__message-preview">
                                                                                <span>
                                                                                    <a href="javascript:;">Eva :</a>
                                                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta consequuntur accusantium tempora. Ad officiis voluptate neque, deleniti porro necessitatibus aut!
                                                                                </span>
                                                                            </div>
                                                                            
                                                                            <span>
                                                                                <i class="mdi mdi-pin"></i>
                                                                            </span>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="conversation status-hidden unread">
                                                                    <div class="user-avatar user-avatar-rounded avatar-primary">
                                                                        <span><i class="mdi mdi-account-group"></i></span>
                                                                    </div>
                                                                    
                                                                    <div class="conversation__details">
                                                                        <div class="conversation__name">
                                                                            <div class="conversation__name--title">The Public Square</div>
                                                                            <div class="conversation__time">02:47 PM</div>
                                                                        </div>
                                                                        <div class="conversation__message">
                                                                            <div class="conversation__message-preview">
                                                                                <span class="tick">
                                                                                <img src="./assets/images/tick/tick-delivered.svg" alt="">
                                                                                </span>An example of un-read message.
                                                                            </div>
                                                                            
                                                                            <span><i class="mdi mdi-pin"></i></span>
                                                                            <span class="badge badge-primary badge-rounded">2</span>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="conversation status-hidden unread">
                                                                    <div class="user-avatar user-avatar-rounded">
                                                                        <img src="./assets/images/media/family.jpg" alt="">
                                                                    </div>
                                                                    <div class="conversation__details">
                                                                        <div class="conversation__name">
                                                                            <div class="conversation__name--title">Best Family Ever</div>
                                                                            <div class="conversation__time">07:15 PM</div>
                                                                        </div>
                                                                        <div class="conversation__message">
                                                                            <div class="conversation__message-preview">
                                                                                <span class="tick">
                                                                                    <img src="./assets/images/tick/tick-send.svg" alt="">
                                                                                </span>
                                                                                Hello! Are you free today?
                                                                            </div>
                                                                            
                                                                            <span><i class="mdi mdi-volume-mute"></i></span>
                                                                            <span class="badge badge-primary badge-rounded">12</span>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="conversation status-hidden">
                                                                    <div class="user-avatar user-avatar-rounded">
                                                                        <img src="./assets/images/svg/happy.svg" alt="">
                                                                    </div>
                                                                    <div class="conversation__details">
                                                                        <div class="conversation__name">
                                                                            <div class="conversation__name--title">Live life like there is no tomorrow</div>
                                                                            <div class="conversation__time">02:47 PM</div>
                                                                        </div>
                                                                        <div class="conversation__message">
                                                                            <div class="conversation__message-preview">
                                                                                <span class="tick">
                                                                                <img src="./assets/images/tick/tick-delivered.svg" alt="">
                                                                                </span>Hey! I received your email. Thank you :)
                                                                            </div>                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="conversation status-hidden">
                                                                    <div class="user-avatar user-avatar-rounded avatar-warning">
                                                                        <span><i class="mdi mdi-account-group"></i></span>
                                                                    </div>
                                                                    <div class="conversation__details">
                                                                        <div class="conversation__name">
                                                                            <div class="conversation__name--title">We are unique</div>
                                                                            <div class="conversation__time">yesterday</div>
                                                                        </div>
                                                                        <div class="conversation__message">
                                                                            <div class="conversation__message-preview">
                                                                                <span class="tick">
                                                                                    <img src="./assets/images/tick/tick-send.svg" alt="">
                                                                                </span>
                                                                                Hello! Are you free today?
                                                                            </div>                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="caCalls" role="tabpanel" aria-labelledby="caCallsTab">
                                        <div class="nav-style-2">
                                            <ul class="nav nav-pills my-3" id="caCallsTabInside" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="all-calls-tab" data-toggle="pill" href="#all-calls" role="tab" aria-controls="all-calls" aria-selected="true">All</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="missed-calls-tab" data-toggle="pill" href="#missed-calls" role="tab" aria-controls="missed-calls" aria-selected="false">Missed</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="caCallsTabInsideContent">
                                                <div class="tab-pane fade show active" id="all-calls" role="tabpanel" aria-labelledby="all-calls-tab">
                                                    <div class="sidebar-userlist">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <div class="calllist">
                                                                    <div class="user-avatar user-avatar-rounded online">
                                                                        <img src="./assets/images/user/250/01.jpg" alt="">
                                                                    </div>
                                                                    <div class="calllist__details">
                                                                        <div class="calllist__details--name">Jack P. Angulo</div>
                                                                        <div class="calllist__details--info">
                                                                            <span><i class="mdi mdi-call-made"></i></span>
                                                                            <span>Today at 10:02AM</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="calllist__actions">
                                                                        <div class="iconbox btn-hovered-light">
                                                                            <i class="iconbox__icon mdi mdi-phone"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="calllist active">
                                                                    <div class="user-avatar user-avatar-rounded online">
                                                                        <img src="./assets/images/user/250/02.jpg" alt="">
                                                                    </div>
                                                                    <div class="calllist__details">
                                                                        <div class="calllist__details--name">Earnest Clements</div>
                                                                        <div class="calllist__details--info">
                                                                            <span><i class="mdi mdi-call-received"></i></span>
                                                                            <span>Today at 07:25AM</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="calllist__actions">
                                                                        <div class="iconbox btn-hovered-light">
                                                                            <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="calllist">
                                                                    <div class="user-avatar user-avatar-rounded online">
                                                                        <img src="./assets/images/user/250/03.jpg" alt="">
                                                                    </div>
                                                                    <div class="calllist__details">
                                                                        <div class="calllist__details--name">Willie McLaughlin</div>
                                                                        <div class="calllist__details--info text-danger">
                                                                            <span><i class="mdi mdi-call-missed"></i></span>
                                                                            <span>Today at 07:25AM</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="calllist__actions">
                                                                        <div class="iconbox btn-hovered-light">
                                                                            <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="calllist">
                                                                    <div class="user-avatar user-avatar-rounded online">
                                                                        <img src="./assets/images/user/250/04.jpg" alt="">
                                                                    </div>
                                                                    <div class="calllist__details">
                                                                        <div class="calllist__details--name">Andrew Showalter</div>
                                                                        <div class="calllist__details--info text-danger">
                                                                            <span><i class="mdi mdi-call-missed"></i></span>
                                                                            <span>Today at 07:25AM</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="calllist__actions">
                                                                        <div class="iconbox btn-hovered-light">
                                                                            <i class="iconbox__icon mdi mdi-phone"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="calllist">
                                                                    <div class="user-avatar user-avatar-rounded online">
                                                                        <img src="./assets/images/user/250/05.jpg" alt="">
                                                                    </div>
                                                                    <div class="calllist__details">
                                                                        <div class="calllist__details--name">Jack P. Angulo</div>
                                                                        <div class="calllist__details--info">
                                                                            <span><i class="mdi mdi-call-made"></i></span>
                                                                            <span>Today at 10:02AM</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="calllist__actions">
                                                                        <div class="iconbox btn-hovered-light">
                                                                            <i class="iconbox__icon mdi mdi-phone"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="calllist">
                                                                    <div class="user-avatar user-avatar-rounded online">
                                                                        <img src="./assets/images/user/500/09.jpg" alt="">
                                                                    </div>
                                                                    <div class="calllist__details">
                                                                        <div class="calllist__details--name">Earnest Clements</div>
                                                                        <div class="calllist__details--info">
                                                                            <span><i class="mdi mdi-call-received"></i></span>
                                                                            <span>Today at 07:25AM</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="calllist__actions">
                                                                        <div class="iconbox btn-hovered-light">
                                                                            <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="missed-calls" role="tabpanel" aria-labelledby="missed-calls-tab">
                                                    <div class="sidebar-userlist">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <div class="calllist active">
                                                                    <div class="user-avatar user-avatar-rounded online">
                                                                        <img src="./assets/images/user/250/03.jpg" alt="">
                                                                    </div>
                                                                    <div class="calllist__details">
                                                                        <div class="calllist__details--name">Willie McLaughlin</div>
                                                                        <div class="calllist__details--info text-danger">
                                                                            <span><i class="mdi mdi-call-missed"></i></span>
                                                                            <span>Today at 07:25AM</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="calllist__actions">
                                                                        <div class="iconbox btn-hovered-light">
                                                                            <i class="iconbox__icon mdi mdi-phone"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="calllist">
                                                                    <div class="user-avatar user-avatar-rounded online">
                                                                        <img src="./assets/images/user/250/04.jpg" alt="">
                                                                    </div>
                                                                    <div class="calllist__details">
                                                                        <div class="calllist__details--name">Andrew Showalter</div>
                                                                        <div class="calllist__details--info text-danger">
                                                                            <span><i class="mdi mdi-call-missed"></i></span>
                                                                            <span>Today at 07:25AM</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="calllist__actions">
                                                                        <div class="iconbox btn-hovered-light">
                                                                            <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade position-relative" id="caContacts" role="tabpanel" aria-labelledby="caContactsTab">
                                        <div class="sidebar-contactlist">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <div class="contactlist-heading">
                                                        <span>Favourite</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist">
                                                        <div class="user-avatar user-avatar-rounded online">
                                                            <img src="./assets/images/user/250/01.jpg" alt="">
                                                        </div>
                                                        <div class="contactlist__details">
                                                            <div class="contactlist__details--name">Jack P. Angulo</div>
                                                            <div class="calllist__details--info">
                                                                <span><i class="mdi mdi-tag-outline"></i></span>
                                                                <span>Co-Workers</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist active">
                                                        <div class="user-avatar user-avatar-rounded online">
                                                            <img src="./assets/images/user/500/09.jpg" alt="">
                                                        </div>
                                                        <div class="contactlist__details">
                                                            <div class="contactlist__details--name">Pearl Villarreal</div>
                                                            <div class="calllist__details--info">
                                                                <span><i class="mdi mdi-tag-outline"></i></span>
                                                                <span>Family members</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist">
                                                        <div class="user-avatar user-avatar-rounded online">
                                                            <img src="./assets/images/user/500/04.jpg" alt="">
                                                        </div>
                                                        <div class="contactlist__details">
                                                            <div class="contactlist__details--name">Marguerite E. Hutchings</div>
                                                            <div class="calllist__details--info">
                                                                <span><i class="mdi mdi-tag-outline"></i></span>
                                                                <span>Friends</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist">
                                                        <div class="user-avatar user-avatar-rounded online">
                                                            <img src="./assets/images/user/500/06.jpg" alt="">
                                                        </div>
                                                        <div class="contactlist__details">
                                                            <div class="contactlist__details--name">Chuck McCann</div>
                                                            <div class="calllist__details--info">
                                                                <span><i class="mdi mdi-tag-outline"></i></span>
                                                                <span>Friends</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist-heading">
                                                        <span>A</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist">
                                                        <div class="user-avatar user-avatar-rounded online">
                                                            <img src="./assets/images/user/250/04.jpg" alt="">
                                                        </div>
                                                        <div class="contactlist__details">
                                                            <div class="contactlist__details--name">Andrew Showalter</div>
                                                            <div class="calllist__details--info">
                                                                <span><i class="mdi mdi-tag-outline"></i></span>
                                                                <span>Co-Workers</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist">
                                                        <div class="user-avatar user-avatar-rounded online">
                                                            <img src="./assets/images/user/250/05.jpg" alt="">
                                                        </div>
                                                        <div class="contactlist__details">
                                                            <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                            <div class="calllist__details--info">
                                                                <span><i class="mdi mdi-tag-outline"></i></span>
                                                                <span>Co-Workers</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist-heading">
                                                        <span>B</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist">
                                                        <div class="user-avatar user-avatar-rounded online">
                                                            <img src="./assets/images/user/250/04.jpg" alt="">
                                                        </div>
                                                        <div class="contactlist__details">
                                                            <div class="contactlist__details--name">Andrew Showalter</div>
                                                            <div class="calllist__details--info">
                                                                <span><i class="mdi mdi-tag-outline"></i></span>
                                                                <span>Co-Workers</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist">
                                                        <div class="user-avatar user-avatar-rounded online">
                                                            <img src="./assets/images/user/250/05.jpg" alt="">
                                                        </div>
                                                        <div class="contactlist__details">
                                                            <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                            <div class="calllist__details--info">
                                                                <span><i class="mdi mdi-tag-outline"></i></span>
                                                                <span>Co-Workers</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist-heading">
                                                        <span>C</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist">
                                                        <div class="user-avatar user-avatar-rounded online">
                                                            <img src="./assets/images/user/250/04.jpg" alt="">
                                                        </div>
                                                        <div class="contactlist__details">
                                                            <div class="contactlist__details--name">Andrew Showalter</div>
                                                            <div class="calllist__details--info">
                                                                <span><i class="mdi mdi-tag-outline"></i></span>
                                                                <span>Co-Workers</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist">
                                                        <div class="user-avatar user-avatar-rounded online">
                                                            <img src="./assets/images/user/250/05.jpg" alt="">
                                                        </div>
                                                        <div class="contactlist__details">
                                                            <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                            <div class="calllist__details--info">
                                                                <span><i class="mdi mdi-tag-outline"></i></span>
                                                                <span>Co-Workers</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist-heading">
                                                        <span>E</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist">
                                                        <div class="user-avatar user-avatar-rounded online">
                                                            <img src="./assets/images/user/250/04.jpg" alt="">
                                                        </div>
                                                        <div class="contactlist__details">
                                                            <div class="contactlist__details--name">Andrew Showalter</div>
                                                            <div class="calllist__details--info">
                                                                <span><i class="mdi mdi-tag-outline"></i></span>
                                                                <span>Co-Workers</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist">
                                                        <div class="user-avatar user-avatar-rounded online">
                                                            <img src="./assets/images/user/250/05.jpg" alt="">
                                                        </div>
                                                        <div class="contactlist__details">
                                                            <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                            <div class="calllist__details--info">
                                                                <span><i class="mdi mdi-tag-outline"></i></span>
                                                                <span>Co-Workers</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist-heading">
                                                        <span>M</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist">
                                                        <div class="user-avatar user-avatar-rounded online">
                                                            <img src="./assets/images/user/250/04.jpg" alt="">
                                                        </div>
                                                        <div class="contactlist__details">
                                                            <div class="contactlist__details--name">Andrew Showalter</div>
                                                            <div class="calllist__details--info">
                                                                <span><i class="mdi mdi-tag-outline"></i></span>
                                                                <span>Co-Workers</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist">
                                                        <div class="user-avatar user-avatar-rounded online">
                                                            <img src="./assets/images/user/250/05.jpg" alt="">
                                                        </div>
                                                        <div class="contactlist__details">
                                                            <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                            <div class="calllist__details--info">
                                                                <span><i class="mdi mdi-tag-outline"></i></span>
                                                                <span>Co-Workers</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist-heading">
                                                        <span>S</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist">
                                                        <div class="user-avatar user-avatar-rounded online">
                                                            <img src="./assets/images/user/250/04.jpg" alt="">
                                                        </div>
                                                        <div class="contactlist__details">
                                                            <div class="contactlist__details--name">Andrew Showalter</div>
                                                            <div class="calllist__details--info">
                                                                <span><i class="mdi mdi-tag-outline"></i></span>
                                                                <span>Co-Workers</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist">
                                                        <div class="user-avatar user-avatar-rounded online">
                                                            <img src="./assets/images/user/250/05.jpg" alt="">
                                                        </div>
                                                        <div class="contactlist__details">
                                                            <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                            <div class="calllist__details--info">
                                                                <span><i class="mdi mdi-tag-outline"></i></span>
                                                                <span>Co-Workers</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist-heading">
                                                        <span>#</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist">
                                                        <div class="user-avatar user-avatar-rounded online">
                                                            <img src="./assets/images/user/250/04.jpg" alt="">
                                                        </div>
                                                        <div class="contactlist__details">
                                                            <div class="contactlist__details--name">&#9829; My Love &#9829;</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contactlist">
                                                        <div class="user-avatar user-avatar-rounded online">
                                                            <img src="./assets/images/user/250/05.jpg" alt="">
                                                        </div>
                                                        <div class="contactlist__details">
                                                            <div class="contactlist__details--name">&#126; Eva 	&#126;</div>
                                                            <div class="calllist__details--info">
                                                                <span><i class="mdi mdi-tag-outline"></i></span>
                                                                <span>Co-Workers</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="alphabet-series">
                                            <span><i class="mdi mdi-star"></i></span>
                                            <span>A</span>
                                            <span>B</span>
                                            <span>D</span>
                                            <span>E</span>
                                            <span>F</span>
                                            <span>G</span>
                                            <span>H</span>
                                            <span>I</span>
                                            <span>J</span>
                                            <span>K</span>
                                            <span>L</span>
                                            <span>M</span>
                                            <span>N</span>
                                            <span>O</span>
                                            <span>P</span>
                                            <span>Q</span>
                                            <span>R</span>
                                            <span>S</span>
                                            <span>T</span>
                                            <span>U</span>
                                            <span>V</span>
                                            <span>W</span>
                                            <span>X</span>
                                            <span>Y</span>
                                            <span>Z</span>
                                            <span>#</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul id="mfbMenu" class="mfb-component--br mfb-slidein" data-mfb-toggle="click">
                                <li class="mfb-component__wrap">
                                    <a href="#" class="mfb-component__button--main">
                                        <i class="mfb-component__main-icon--resting mdi mdi-plus ion-plus-round"></i>
                                        <i class="mfb-component__main-icon--active mdi mdi-close ion-close-round"></i>
                                    </a>
                                    <ul class="mfb-component__list">
                                        <li>
                                            <a href="javascript:;"
                                                data-mfb-label="Theme" class="mfb-component__button--child">
                                            <i class="mfb-component__child-icon mdi mdi-palette"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javascript:;"  data-toggle="modal" data-target="#newGroupModal" data-mfb-label="Create Group" class="mfb-component__button--child">
                                            <i class="mfb-component__child-icon mdi mdi-account-group"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javascript:;" data-toggle="modal" data-target="#newCallModal" data-mfb-label="New Call" class="mfb-component__button--child">
                                                <i class="mfb-component__child-icon mdi mdi-phone"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javascript:;" data-toggle="modal" data-target="#newMsgModal" data-mfb-label="New Chat" class="mfb-component__button--child">
                                                <i class="mfb-component__child-icon mdi mdi-android-messages"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ca-content-wrapper">
                <div class="ca-content">
                    <div class="ca-content__chatstab">
                        <div class="ca-content__chatstab--personal">
                            <div class="conversation-wrapper">
                                <div class="conversation-panel">
                                    <div class="conversation-panel__head">
                                        <div class="conversation-panel__back-button ">
                                            <i class="mdi mdi-arrow-left"></i>
                                        </div>

                                        <div class="conversation-panel__avatar personalinfo-panel-opener">
                                            <div class="user-avatar user-avatar-rounded">
                                                <img src="./assets/images/user/250/01.jpg" alt="">
                                            </div>
                                            <div class="conversation__name">
                                                <div class="conversation__name--title">Jack P. Angulo</div>
                                                <div class="conversation__time">last seen at 07:15 PM</div>
                                            </div>
                                        </div>
                                        <div class="conversation__actions">
                                            <div class="action-icon"  data-toggle="modal" data-target="#outGoingCall">
                                                <i class="mdi mdi-phone"></i>
                                            </div>
                                            <div class="action-icon" data-toggle="modal" data-target="#incomingVideoStart">
                                                <i class="mdi mdi-video-outline"></i>
                                            </div>

                                            <div class="iconbox-dropdown dropdown">
                                                <div class="iconbox btn-hovered-light" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="iconbox__icon mdi mdi-dots-vertical"></i>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink2">
                                                    <a class="dropdown-item personalinfo-panel-opener" href="javascript:;">
                                                        <span><i class="mdi mdi-information-outline"></i></span> 
                                                        <span>View Contact</span>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <span><i class="mdi mdi-magnify"></i></span> 
                                                        <span>Search</span>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <span><i class="mdi mdi-volume-mute"></i></span> 
                                                        <span>Mute notifications</span>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <span><i class="mdi mdi-wallpaper"></i></span> 
                                                        <span>Wallpaper</span>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <span><i class="mdi mdi-notification-clear-all"></i></span> 
                                                        <span>Clear Chat</span>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <span><i class="mdi mdi-export-variant"></i></span> 
                                                        <span>Export Chat</span>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <span><i class="mdi mdi-cancel"></i></span> 
                                                        <span>Block</span>
                                                    </a>
                                                </div>
                                            </div>                                                
                                        </div>
                                    </div>

                                    <div class="conversation-panel__body">
                                        <div class="container">
                                            <div class="chatstyle-01">
                                                <div class="chat-date"><span>Monday 16 May</span></div>

                                                <div class="ca-send">
                                                    <div class="ca-send__msg-group">
                                                        <div class="ca-send__msgwrapper">
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtons1"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtons1">
                                                                        
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-send__msg">Hi Marie, welcome to Live Chat! My name is Jason. How can I help you today?</div>
                                                        </div>
                                                        <div class="metadata">
                                                            <span class="time">10:10 AM</span>
                                                            <span class="tick">
                                                                <img src="./assets/images/tick/tick-read.svg" alt="">
                                                            </span>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="user-avatar user-avatar-sm user-avatar-rounded online">
                                                        <img src="./assets/images/user/250/02.jpg" alt="">
                                                    </div>
                                                </div>

                                                <div class="ca-received">
                                                    <div class="user-avatar user-avatar-sm user-avatar-rounded online">
                                                        <img src="./assets/images/user/250/01.jpg" alt="">
                                                    </div>
                                                    <div class="ca-received__msg-group">
                                                        <div class="ca-received__msgwrapper">
                                                            <div class="ca-received__msg">Hi, I wanted to check my order status. My order number is 0009483021 😀</div>
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtonsr1"  role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonsr1">
                                                            
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="metadata">
                                                            <span class="time">10:10 AM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="ca-send">
                                                    <div class="ca-send__msg-group">
                                                        <div class="ca-send__msgwrapper">
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtons3"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtons3">
                                                                        
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-send__msg">Great, thanks 😀 for the information! Give me one moment please while I check on that for you.</div>
                                                        </div>
                                                        <div class="metadata">
                                                            <span class="time">10:10 AM</span>
                                                            <span class="tick">
                                                                <img src="./assets/images/tick/tick-read.svg" alt="">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="user-avatar user-avatar-sm user-avatar-rounded online">
                                                        <img src="./assets/images/user/250/02.jpg" alt="">
                                                    </div>
                                                </div>

                                                <div class="ca-received">
                                                    <div class="user-avatar user-avatar-sm user-avatar-rounded online">
                                                        <img src="./assets/images/user/250/01.jpg" alt="">
                                                    </div>
                                                    <div class="ca-received__msg-group">
                                                        <div class="ca-received__msgwrapper">
                                                            <div class="ca-received__msg">Thanks. I’m worried 😳 it won’t arrive in time ⌚ for my daughter’s birthday🎂  party 🎉🎊🎈this weekend.</div>
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtonsr4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonsr4">
                                                            
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-received__msgwrapper">
                                                            <div class="ca-received__msg">
                                                                <div class="ca-received__msg-media-group">
                                                                    <div class="ca-received__msg-media">
                                                                        <img src="./assets/images/media/02.jpg" alt="">
                                                                    </div>
                                                                    <div class="ca-received__msg-media">
                                                                        <img src="./assets/images/media/05.jpg" alt="">
                                                                    </div>
                                                                    <div class="ca-received__msg-media">
                                                                        <img src="./assets/images/media/04.jpg" alt="">
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtonsr6" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonsr6">
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-download-outline"></i></span> 
                                                                            <span>Download</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="metadata">
                                                            <span class="time">10:10 AM</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="ca-send">
                                                    <div class="ca-send__msg-group">
                                                        <div class="ca-send__msgwrapper">
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtons5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtons5">
                                                                        
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-send__msg">I understand your concern… I wouldn’t want my child’s gift to arrive late either. It looks like your order is set to arrive in 2 business days, so it should arrive by Friday, just in time!</div>
                                                        </div>
                                                        <div class="ca-send__msgwrapper">
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtons6" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtons6">
                                                                        
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-send__msg">Is there anything else that I can do for you?</div>
                                                        </div>
                                                        <div class="metadata">
                                                            <span class="time">10:10 AM</span>
                                                            <span class="tick">
                                                                <img src="./assets/images/tick/tick-read.svg" alt="">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="user-avatar user-avatar-sm user-avatar-rounded online">
                                                        <img src="./assets/images/user/250/02.jpg" alt="">
                                                    </div>
                                                </div>

                                                <div class="ca-received">
                                                    <div class="user-avatar user-avatar-sm user-avatar-rounded online">
                                                        <img src="./assets/images/user/250/01.jpg" alt="">
                                                    </div>
                                                    <div class="ca-received__msg-group">
                                                        <div class="ca-received__msgwrapper">
                                                            <div class="ca-received__msg">
                                                                <div class="ca__file">
                                                                    <div class="ca__fileicon">
                                                                        <img src="./assets/images/svg/pdf.svg" alt="">
                                                                    </div>
                                                                    <div class="ca__filename">
                                                                        <span class="ca__filename--title">example.pdf</span>
                                                                        <span class="ca__filename--size">21Kb</span>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtonsr7" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonsr7">
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-download-outline"></i></span> 
                                                                            <span>Download</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-received__msgwrapper">
                                                            <div class="ca-received__msg">
                                                                <div class="ca__file">
                                                                    <div class="ca__fileicon">
                                                                        <img src="./assets/images/svg/word.svg" alt="">
                                                                    </div>
                                                                    <div class="ca__filename">
                                                                        <span class="ca__filename--title">example.docs</span>
                                                                        <span class="ca__filename--size">21Kb</span>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtonsr8" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonsr8">
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-download-outline"></i></span> 
                                                                            <span>Download</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-received__msgwrapper">
                                                            <div class="ca-received__msg">
                                                                <div class="ca__file">
                                                                    <div class="ca__fileicon">
                                                                        <img src="./assets/images/svg/powerpoint.svg" alt="">
                                                                    </div>
                                                                    <div class="ca__filename">
                                                                        <span class="ca__filename--title">example.pptx</span>
                                                                        <span class="ca__filename--size">21Kb</span>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtonsr9" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonsr9">
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-download-outline"></i></span> 
                                                                            <span>Download</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-received__msgwrapper">
                                                            <div class="ca-received__msg">
                                                                <div class="ca__file">
                                                                    <div class="ca__fileicon">
                                                                        <img src="./assets/images/svg/excel.svg" alt="">
                                                                    </div>
                                                                    <div class="ca__filename">
                                                                        <span class="ca__filename--title">example.xlxs</span>
                                                                        <span class="ca__filename--size">21Kb</span>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtonsr10" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonsr10">
                                                            
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-download-outline"></i></span> 
                                                                            <span>Download</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="metadata">
                                                            <span class="time">10:10 AM</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="ca-send">
                                                    <div class="ca-send__msg-group">
                                                        <div class="ca-send__msgwrapper">
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtons7" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtons7">
                                                                        
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-download-outline"></i></span> 
                                                                            <span>Download</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-send__msg">
                                                                <div class="ca__file">
                                                                    <div class="ca__fileicon">
                                                                        <img src="./assets/images/svg/pdf.svg" alt="">
                                                                    </div>
                                                                    <div class="ca__filename">
                                                                        <span class="ca__filename--title">example.pdf</span>
                                                                        <span class="ca__filename--size">21Kb</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="ca-send__msgwrapper">
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtons8" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtons8">
                                                                        
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-download-outline"></i></span> 
                                                                            <span>Download</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-send__msg">
                                                                <div class="ca__file">
                                                                    <div class="ca__fileicon">
                                                                        <img src="./assets/images/svg/word.svg" alt="">
                                                                    </div>
                                                                    <div class="ca__filename">
                                                                        <span class="ca__filename--title">example.docs</span>
                                                                        <span class="ca__filename--size">21Kb</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="ca-send__msgwrapper">
                                                            <div class="ca-msg-actions">
                                                                <div class="dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtons9" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenuButtons9">
                                                                        
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-download-outline"></i></span> 
                                                                            <span>Download</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-send__msg">
                                                                <div class="ca__file">
                                                                    <div class="ca__fileicon">
                                                                        <img src="./assets/images/svg/powerpoint.svg" alt="">
                                                                    </div>
                                                                    <div class="ca__filename">
                                                                        <span class="ca__filename--title">example.pptx</span>
                                                                        <span class="ca__filename--size">21Kb</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="ca-send__msgwrapper">
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtons10" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtons10">
                                                                        
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-download-outline"></i></span> 
                                                                            <span>Download</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-send__msg">
                                                                <div class="ca__file">
                                                                    <div class="ca__fileicon">
                                                                        <img src="./assets/images/svg/excel.svg" alt="">
                                                                    </div>
                                                                    <div class="ca__filename">
                                                                        <span class="ca__filename--title">example.xlxs</span>
                                                                        <span class="ca__filename--size">21Kb</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="metadata">
                                                            <span class="time">10:10 AM</span>
                                                            <span class="tick">
                                                                <img src="./assets/images/tick/tick-read.svg" alt="">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="user-avatar user-avatar-sm user-avatar-rounded online">
                                                        <img src="./assets/images/user/250/02.jpg" alt="">
                                                    </div>
                                                </div>

                                                <div class="ca-received">
                                                    <div class="user-avatar user-avatar-sm user-avatar-rounded online">
                                                        <img src="./assets/images/user/250/01.jpg" alt="">
                                                    </div>
                                                    <div class="ca-received__msg-group">
                                                        <div class="ca-received__msgwrapper">
                                                            <div class="ca-received__msg">
                                                                Great, thank you! Yes, I also wanted to make sure I entered the right shipping address. My address is 12390 Mulberry Ln, Coral Springs, FL 33067. Is that where it’s being shipped to?
                                                            </div>
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtonsr11" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonsr11">
                                                            
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="metadata">
                                                            <span class="time">10:10 AM</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="ca-send">
                                                    <div class="ca-send__msg-group">
                                                        <div class="ca-send__msgwrapper">
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtons11" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtons11">
                                                                        
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-send__msg">No problem, let me check that for you.</div>
                                                        </div>
                                                        <div class="ca-send__msgwrapper">
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtons12"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtons12">
                                                                        
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-send__msg">Yes, I have here the shipping address as 12390 Mulberry Ln, Coral Springs, FL 33067. It looks like you’re good to go!</div>
                                                        </div>
                                                        <div class="ca-send__msgwrapper">
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtonsms1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonsms1">
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-download-outline"></i></span> 
                                                                            <span>Download</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-send__msg">
                                                                <div class="ca-send__msg-media-group">
                                                                    <div class="ca-send__msg-media">
                                                                        <img src="./assets/images/media/02.jpg" alt="">
                                                                    </div>
                                                                    <div class="ca-send__msg-media">
                                                                        <img src="./assets/images/media/05.jpg" alt="">
                                                                    </div>
                                                                    <div class="ca-send__msg-media">
                                                                        <img src="./assets/images/media/04.jpg" alt="">
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="metadata">
                                                            <span class="time">10:10 AM</span>
                                                            <span class="tick">
                                                                <img src="./assets/images/tick/tick-read.svg" alt="">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="user-avatar user-avatar-sm user-avatar-rounded online">
                                                        <img src="./assets/images/user/250/02.jpg" alt="">
                                                    </div>
                                                </div>

                                                <div class="ca-received">
                                                    <div class="user-avatar user-avatar-sm user-avatar-rounded online">
                                                        <img src="./assets/images/user/250/01.jpg" alt="">
                                                    </div>
                                                    <div class="ca-received__msg-group">
                                                        <div class="ca-received__msgwrapper">
                                                            <div class="ca-received__msg">
                                                                Thanks so much!
                                                            </div>
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtonsr14" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonsr14">
                                                            
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="metadata">
                                                            <span class="time">10:10 AM</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="ca-received">
                                                    <div class="user-avatar user-avatar-sm user-avatar-rounded online">
                                                        <img src="./assets/images/user/250/01.jpg" alt="">
                                                    </div>
                                                    <div class="ca-received__msg-group">
                                                        <div class="ca-received__msgwrapper">
                                                            <div class="ca-received__msg">
                                                                <img src="./assets/images/svg/typing-01.svg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="conversation-panel__footer">
                                        <div class="composer">
                                            <div class="composer__left">
                                                <div class="composer__left--sticker">
                                                    <i class="mdi mdi-sticker-emoji"></i>
                                                </div>
                                                <div class="composer__left--emoticon">
                                                    <i class="mdi mdi-emoticon-outline"></i>
                                                </div>     
                                            </div>

                                            <div class="composer__middle">
                                                <textarea class="form-control" rows="1" placeholder="Type a message..."></textarea>
                                        
                                                <div class="composer__middle--microphone">
                                                    <i class="mdi mdi-microphone"></i>
                                                </div>
                                                <div class="composer__middle--photo">
                                                    <i class="mdi mdi-camera"></i>
                                                </div>
                                                <div class="composer__middle--attachment">
                                                    <i class="mdi mdi-attachment"></i>
                                                </div>
                                            </div>

                                            <div class="composer__right">
                                                <div class="composer__right--send">
                                                    <i class="mdi mdi-send"></i>
                                                </div>
                                                <div class="composer__right--microphone">
                                                    <i class="mdi mdi-microphone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="information-panel personal-information-panel">
                                    <div class="information-panel__head">
                                        <h5>Contact info</h5>
                                        <div class="information-panel__closer">
                                            <i class="mdi mdi-close"></i>
                                        </div>
                                    </div>
                    
                                    <div class="information-panel__body">
                                        <div class="userprofile-avatar">
                                            <img class="img-fluid" src="./assets/images/user/250/01.jpg" alt="">
                                        </div>
                    
                                        <div class="userprofile-name">
                                            <h4>Jack P. Angulo</h4>
                                            <span>Product Manager</span>
                                            <div class="social-icon-box">
                                                <div class="social-icon">
                                                    <i class="mdi mdi-facebook"></i>
                                                </div>
                                                <div class="social-icon">
                                                    <i class="mdi mdi-linkedin"></i>
                                                </div>
                                                <div class="social-icon">
                                                    <i class="mdi mdi-twitter"></i>
                                                </div>
                                                <div class="social-icon">
                                                    <i class="mdi mdi-youtube"></i>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <hr>
                    
                                        <table class="table table-sm table-borderless user-table-info">
                                            <tr>
                                                <td><i class="mdi mdi-cellphone-android"></i></td>
                                                <td>+91 99041-99041</td>
                                            </tr>
                                            <tr>
                                                <td><i class="mdi mdi-web"></i></td>
                                                <td>www.jackangulo.com</td>
                                            </tr>
                                            <tr>
                                                <td><i class="mdi mdi-map-marker"></i></td>
                                                <td>2519  Burnside Court, HORICON, WI, 53032</td>
                                            </tr>
                                        </table>
                    
                                        <hr>
                    
                                        <div class="accordion accordion-ungrouped mb-3" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <div class="card-title" data-toggle="collapse" role="button"  data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <div class="acpanel__heading">
                                                            <div class="acpanel__left">
                                                                <span><i class="mdi mdi-camera-outline"></i></span>
                                                                <span>Photos & Media</span>
                                                            </div>
                                                            <div class="acpanel__right">
                                                                <span class="badge badge-info">26</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <div class="owl-carousel">
                                                            <div class="item">
                                                                <img class="img-fluid" src="./assets/images/media/01.jpg" alt="">
                                                            </div>
                                                            <div class="item">
                                                                <img class="img-fluid" src="./assets/images/media/02.jpg" alt="">
                                                            </div>
                                                            <div class="item">
                                                                <img class="img-fluid" src="./assets/images/media/03.jpg" alt="">
                                                            </div>
                                                            <div class="item">
                                                                <img class="img-fluid" src="./assets/images/media/04.jpg" alt="">
                                                            </div>
                                                            <div class="item">
                                                                <img class="img-fluid" src="./assets/images/media/05.jpg" alt="">
                                                            </div>
                                                            <div class="item">
                                                                <img class="img-fluid" src="./assets/images/media/06.jpg" alt="">
                                                            </div>
                                                        </div>                                                                                                          
                                                    </div>
                                                </div>
                                            </div>
                    
                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <div class="card-title collapsed d-flex justify-content-between align-items-center"  role="button" data-toggle="collapse" data-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        <div class="acpanel__heading">
                                                            <div class="acpanel__left">
                                                                <span><i class="mdi mdi-file-document-outline"></i></span>
                                                                <span>Documents</span>
                                                            </div>
                                                            <div class="acpanel__right">
                                                                <span class="badge badge-info">16</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <ul class="list-unstyled documentlist-wrapper">
                                                            <li>
                                                                <div class="doclist">
                                                                    <div class="docicon">
                                                                        <img src="./assets/images/svg/pdf.svg" alt="">
                                                                    </div>
                                                                    <div class="doctitle">
                                                                        <div class="docname">example-file.pdf</div>
                                                                        <div class="docsize">217kb</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="doclist">
                                                                    <div class="docicon">
                                                                        <img src="./assets/images/svg/word.svg" alt="">
                                                                    </div>
                                                                    <div class="doctitle">
                                                                        <div class="docname">example-file.docs</div>
                                                                        <div class="docsize">217kb</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="doclist">
                                                                    <div class="docicon">
                                                                        <img src="./assets/images/svg/excel.svg" alt="">
                                                                    </div>
                                                                    <div class="doctitle">
                                                                        <div class="docname">example-file.xlxs</div>
                                                                        <div class="docsize">217kb</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="doclist">
                                                                    <div class="docicon">
                                                                        <img src="./assets/images/svg/powerpoint.svg" alt="">
                                                                    </div>
                                                                    <div class="doctitle">
                                                                        <div class="docname">example-file.pptx</div>
                                                                        <div class="docsize">217kb</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="doclistall">View All</div>
                                                            </li>
                                                           
                                                        </ul> 
                                                    </div>
                                                </div>
                                            </div>
                    
                                            <div class="card">
                                                <div class="card-header" id="headingFour">
                                                    <div class="card-title collapsed  d-flex justify-content-between align-items-center" role="button"  data-toggle="collapse" data-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                        <div class="acpanel__heading">
                                                            <div class="acpanel__left">
                                                                <span><i class="mdi mdi-settings-outline"></i></span>
                                                                <span>Settings</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                                    <div class="card-body">
                    
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <div class="setting-list">
                                                                    <div class="setting-list-name">Media Auto Download</div>
                                                                    <div class="setting-list-switch">
                                                                        <label class="material-switch">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="setting-list">
                                                                    <div class="setting-list-name">Mute Conversation</div>
                                                                    <div class="setting-list-switch">
                                                                        <label class="material-switch">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="setting-list">
                                                                    <div class="setting-list-name">Notifications</div>
                                                                    <div class="setting-list-switch">
                                                                        <label class="material-switch">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="setting-list">
                                                                    <div class="setting-list-name">Block</div>
                                                                    <div class="setting-list-switch">
                                                                        <label class="material-switch">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                    
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ca-content__chatstab--group">
                            <div class="conversation-wrapper">
                                <div class="conversation-panel">
                                    <div class="conversation-panel__head">
                                        <div class="conversation-panel__back-button">
                                            <i class="mdi mdi-arrow-left"></i>
                                        </div>
                                        <div class="conversation-panel__avatar groupinfo-panel-opener">
                                            <div class="user-avatar user-avatar-rounded">
                                                <img src="./assets/images/media/friends.jpg" alt="">
                                            </div>
                                            <div class="conversation__name">
                                                <div class="conversation__name--title">Friends Forever</div>
                                                <div class="conversation__time">250 Members</div>
                                            </div>
                                        </div>
                                        <div class="conversation__actions">
                                            <div class="action-icon"  data-toggle="modal" data-target="#addMemberModal">
                                                <i class="mdi mdi-account-plus-outline"></i>
                                            </div>
                                            <div class="action-icon"  data-toggle="modal" data-target="#outGoingCall">
                                                <i class="mdi mdi-phone"></i>
                                            </div>
                                            <div class="action-icon" data-toggle="modal" data-target="#incomingGroupVideoStart">
                                                <i class="mdi mdi-video-outline"></i>
                                            </div>

                                            <div class="iconbox-dropdown dropdown">
                                                <div class="iconbox btn-hovered-light" role="button" id="dropdownGroupMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="iconbox__icon mdi mdi-dots-vertical"></i>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownGroupMenuLink2">
                                                    <a class="dropdown-item personalinfo-panel-opener" href="javascript:;">
                                                        <span><i class="mdi mdi-information-outline"></i></span> 
                                                        <span>View Contact</span>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <span><i class="mdi mdi-magnify"></i></span> 
                                                        <span>Search</span>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <span><i class="mdi mdi-volume-mute"></i></span> 
                                                        <span>Mute notifications</span>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <span><i class="mdi mdi-wallpaper"></i></span> 
                                                        <span>Wallpaper</span>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <span><i class="mdi mdi-notification-clear-all"></i></span> 
                                                        <span>Clear Chat</span>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <span><i class="mdi mdi-export-variant"></i></span> 
                                                        <span>Export Chat</span>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <span><i class="mdi mdi-logout"></i></span> 
                                                        <span>Leave Group</span>
                                                    </a>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="conversation-panel__body">
                                        <div class="container">
                                            <div class="chatstyle-01">
                                                <div class="chat-date"><span>Monday 16 May</span></div>

                                                <div class="ca-send">
                                                    <div class="ca-send__msg-group">
                                                        <div class="ca-send__msgwrapper">
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtonsSG1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonsSG1">
                                                                        
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-send__msg">Hi Marie, welcome to Live Chat! My name is Jason. How can I help you today?</div>
                                                        </div>
                                                        <div class="metadata">
                                                            <span class="time">10:10 AM</span>
                                                            <span class="tick">
                                                                <img src="./assets/images/tick/tick-read.svg" alt="">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="user-avatar user-avatar-sm user-avatar-rounded online">
                                                        <img src="./assets/images/user/250/02.jpg" alt="">
                                                    </div>
                                                </div>

                                                <div class="ca-received">
                                                    <div class="user-avatar user-avatar-sm user-avatar-rounded online">
                                                        <img src="./assets/images/user/250/01.jpg" alt="">
                                                    </div>
                                                    <div class="ca-received__msg-group">
                                                        <div class="ca-received__msgwrapper">
                                                            <div class="ca-received__msg">Hi, I wanted to check my order status. My order number is 0009483021</div>
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtonsRG1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonsRG1">
                                                            
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="metadata">
                                                            <span class="time">10:10 AM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="ca-received">
                                                    <div class="user-avatar user-avatar-sm user-avatar-rounded online">
                                                        <img src="./assets/images/user/500/02.jpg" alt="">
                                                    </div>
                                                    <div class="ca-received__msg-group">
                                                        <div class="ca-received__msgwrapper">
                                                            <div class="ca-received__msg">Great, thanks for the information! Give me one moment please while I check on that for you.</div>
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtonSG3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonSG3">
                                                                        
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="metadata">
                                                            <span class="time">10:10 AM</span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>

                                                <div class="ca-received">
                                                    <div class="user-avatar user-avatar-sm user-avatar-rounded online">
                                                        <img src="./assets/images/user/500/01.jpg" alt="">
                                                    </div>
                                                    <div class="ca-received__msg-group">
                                                        <div class="ca-received__msgwrapper">
                                                            <div class="ca-received__msg">Thanks. I’m worried it won’t arrive in time for my daughter’s birthday party this weekend.</div>
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtonsRG4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonsRG4">
                                                            
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-received__msgwrapper">
                                                            <div class="ca-received__msg">
                                                                <div class="ca-received__msg-media-group">
                                                                    <div class="ca-received__msg-media">
                                                                        <img src="./assets/images/media/02.jpg" alt="">
                                                                    </div>
                                                                    <div class="ca-received__msg-media">
                                                                        <img src="./assets/images/media/05.jpg" alt="">
                                                                    </div>
                                                                    <div class="ca-received__msg-media">
                                                                        <img src="./assets/images/media/04.jpg" alt="">
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtonsRG6" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonsRG6">
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-download-outline"></i></span> 
                                                                            <span>Download</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="metadata">
                                                            <span class="time">10:10 AM</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="ca-send">
                                                    <div class="ca-send__msg-group">
                                                        <div class="ca-send__msgwrapper">
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtonSG5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonSG5">
                                                                        
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-send__msg">I understand your concern… I wouldn’t want my child’s gift to arrive late either. It looks like your order is set to arrive in 2 business days, so it should arrive by Friday, just in time!</div>
                                                        </div>
                                                        <div class="ca-send__msgwrapper">
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtonSG6" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonSG6">
                                                                        
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-send__msg">Is there anything else that I can do for you?</div>
                                                        </div>
                                                        <div class="metadata">
                                                            <span class="time">10:10 AM</span>
                                                            <span class="tick">
                                                                <img src="./assets/images/tick/tick-read.svg" alt="">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="user-avatar user-avatar-sm user-avatar-rounded online">
                                                        <img src="./assets/images/user/250/02.jpg" alt="">
                                                    </div>
                                                </div>

                                                <div class="ca-received">
                                                    <div class="user-avatar user-avatar-sm user-avatar-rounded online">
                                                        <img src="./assets/images/user/500/05.jpg" alt="">
                                                    </div>
                                                    <div class="ca-received__msg-group">
                                                        <div class="ca-received__msgwrapper">
                                                            <div class="ca-received__msg">
                                                                Great, thank you! Yes, I also wanted to make sure I entered the right shipping address. My address is 12390 Mulberry Ln, Coral Springs, FL 33067. Is that where it’s being shipped to?
                                                            </div>
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtonsRG11" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonsRG11">
                                                            
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="metadata">
                                                            <span class="time">10:10 AM</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="ca-send">
                                                    <div class="ca-send__msg-group">
                                                        <div class="ca-send__msgwrapper">
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtonSG11" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonSG11">
                                                                        
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-send__msg">No problem, let me check that for you.</div>
                                                        </div>
                                                        <div class="ca-send__msgwrapper">
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtonSG12" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonSG12">
                                                                        
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-send__msg">Yes, I have here the shipping address as 12390 Mulberry Ln, Coral Springs, FL 33067. It looks like you’re good to go!</div>
                                                        </div>
                                                        
                                                        <div class="metadata">
                                                            <span class="time">10:10 AM</span>
                                                            <span class="tick">
                                                                <img src="./assets/images/tick/tick-read.svg" alt="">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="user-avatar user-avatar-sm user-avatar-rounded online">
                                                        <img src="./assets/images/user/250/02.jpg" alt="">
                                                    </div>
                                                </div>

                                                <div class="ca-received">
                                                    <div class="user-avatar user-avatar-sm user-avatar-rounded online">
                                                        <img src="./assets/images/user/250/01.jpg" alt="">
                                                    </div>
                                                    <div class="ca-received__msg-group">
                                                        <div class="ca-received__msgwrapper">
                                                            <div class="ca-received__msg">
                                                                Thanks so much!
                                                            </div>
                                                            <div class="ca-msg-actions">
                                                                <div class="iconbox-dropdown dropdown">
                                                                    <div class="iconbox btn-hovered-light" id="dropdownMenuButtonsRG14" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonsRG14">
                                                            
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-share-outline"></i></span> 
                                                                            <span>Forward</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-content-copy"></i></span> 
                                                                            <span>Copy</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-star-outline"></i></span> 
                                                                            <span>Add Star</span>
                                                                        </a>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <span><i class="mdi mdi-trash-can-outline"></i></span> 
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="metadata">
                                                            <span class="time">10:10 AM</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="ca-received">
                                                    <div class="user-avatar user-avatar-sm user-avatar-rounded online">
                                                        <img src="./assets/images/user/250/01.jpg" alt="">
                                                    </div>
                                                    <div class="ca-received__msg-group">
                                                        <div class="ca-received__msgwrapper">
                                                            <div class="ca-received__msg">
                                                                <img src="./assets/images/svg/typing-02.svg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="conversation-panel__footer">
                                        <div class="composer">
                                            <div class="composer__left">
                                                <div class="composer__left--sticker">
                                                    <i class="mdi mdi-sticker-emoji"></i>
                                                </div>
                                                <div class="composer__left--emoticon">
                                                    <i class="mdi mdi-emoticon-outline"></i>
                                                </div>     
                                            </div>

                                            <div class="composer__middle">
                                                <textarea class="form-control" rows="1" placeholder="Type a message..."></textarea>
                                        
                                                <div class="composer__middle--microphone">
                                                    <i class="mdi mdi-microphone"></i>
                                                </div>
                                                <div class="composer__middle--photo">
                                                    <i class="mdi mdi-camera"></i>
                                                </div>
                                                <div class="composer__middle--attachment">
                                                    <i class="mdi mdi-attachment"></i>
                                                </div>
                                            </div>

                                            <div class="composer__right">
                                                <div class="composer__right--send">
                                                    <i class="mdi mdi-send"></i>
                                                </div>
                                                <div class="composer__right--microphone">
                                                    <i class="mdi mdi-microphone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="information-panel group-information-panel">
                                    <div class="information-panel__head">
                                        <h5>Group info</h5>
                                        <div class="information-panel__closer">
                                            <i class="mdi mdi-close"></i>
                                        </div>
                                    </div>
                    
                                    <div class="information-panel__body">
                                        <div class="userprofile-avatar">
                                            <img class="img-fluid" src="./assets/images/media/friends.jpg" alt="">
                                        </div>
                    
                                        <div class="userprofile-name">
                                            <h4>Friends Forever</h4>
                                            <span>250 Members</span>
                                        </div>
                    
                                        <hr>
                    
                                        <div class="accordion accordion-ungrouped mb-3" id="accordionGroupChat">
                                            <div class="card">
                                                <div class="card-header" id="headingOneGroup">
                                                    <div class="card-title collapsed justify-content-between align-items-center" data-toggle="collapse" role="button" data-target="#collapseOneGroup"
                                                     aria-expanded="false" aria-controls="collapseOneGroup">
                                                        <div class="acpanel__heading">
                                                            <div class="acpanel__left">
                                                                <span><i class="mdi mdi-camera-outline"></i></span>
                                                                <span>Photos & Media</span>
                                                            </div>
                                                            <div class="acpanel__right">
                                                                <span class="badge badge-info">26</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <div id="collapseOneGroup" class="collapse " aria-labelledby="headingOneGroup" data-parent="#accordionGroupChat">
                                                    <div class="card-body">
                                                        <div class="owl-carousel">
                                                            <div class="item">
                                                                <img class="img-fluid" src="./assets/images/media/01.jpg" alt="">
                                                            </div>
                                                            <div class="item">
                                                                <img class="img-fluid" src="./assets/images/media/02.jpg" alt="">
                                                            </div>
                                                            <div class="item">
                                                                <img class="img-fluid" src="./assets/images/media/03.jpg" alt="">
                                                            </div>
                                                            <div class="item">
                                                                <img class="img-fluid" src="./assets/images/media/04.jpg" alt="">
                                                            </div>
                                                            <div class="item">
                                                                <img class="img-fluid" src="./assets/images/media/05.jpg" alt="">
                                                            </div>
                                                            <div class="item">
                                                                <img class="img-fluid" src="./assets/images/media/06.jpg" alt="">
                                                            </div>
                                                        </div>                                                                                                          
                                                    </div>
                                                </div>
                                            </div>
                    
                                            <div class="card">
                                                <div class="card-header" id="headingTwoGroup">
                                                    <div class="card-title collapsed d-flex justify-content-between align-items-center" role="button" data-toggle="collapse" data-target="#collapseTwoGroup"
                                                        aria-expanded="false" aria-controls="collapseTwoGroup">
                                                        <div class="acpanel__heading">
                                                            <div class="acpanel__left">
                                                                <span><i class="mdi mdi-file-document-outline"></i></span>
                                                                <span>Documents</span>
                                                            </div>
                                                            <div class="acpanel__right">
                                                                <span class="badge badge-info">16</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="collapseTwoGroup" class="collapse" aria-labelledby="headingTwoGroup" data-parent="#accordionGroupChat">
                                                    <div class="card-body">
                                                        <ul class="list-unstyled documentlist-wrapper">
                                                            <li>
                                                                <div class="doclist">
                                                                    <div class="docicon">
                                                                        <img src="./assets/images/svg/pdf.svg" alt="">
                                                                    </div>
                                                                    <div class="doctitle">
                                                                        <div class="docname">example-file.pdf</div>
                                                                        <div class="docsize">217kb</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="doclist">
                                                                    <div class="docicon">
                                                                        <img src="./assets/images/svg/word.svg" alt="">
                                                                    </div>
                                                                    <div class="doctitle">
                                                                        <div class="docname">example-file.docs</div>
                                                                        <div class="docsize">217kb</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="doclist">
                                                                    <div class="docicon">
                                                                        <img src="./assets/images/svg/excel.svg" alt="">
                                                                    </div>
                                                                    <div class="doctitle">
                                                                        <div class="docname">example-file.xlxs</div>
                                                                        <div class="docsize">217kb</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="doclist">
                                                                    <div class="docicon">
                                                                        <img src="./assets/images/svg/powerpoint.svg" alt="">
                                                                    </div>
                                                                    <div class="doctitle">
                                                                        <div class="docname">example-file.pptx</div>
                                                                        <div class="docsize">217kb</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li> <div class="doclistall">View All</div></li>
                                                           
                                                        </ul> 
                                                    </div>
                                                </div>
                                            </div>
                    
                                            <div class="card">
                                                <div class="card-header" id="headingThreeGroup">
                                                    <div class="card-title collapsed  d-flex justify-content-between align-items-center" role="button" data-toggle="collapse" data-target="#collapseThreeGroup"
                                                        aria-expanded="false" aria-controls="collapseThreeGroup">
                                                        <div class="acpanel__heading">
                                                            <div class="acpanel__left">
                                                                <span><i class="mdi mdi-settings-outline"></i></span>
                                                                <span>Settings</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="collapseThreeGroup" class="collapse" aria-labelledby="headingThreeGroup" data-parent="#accordionGroupChat">
                                                    <div class="card-body">
                    
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <div class="setting-list">
                                                                    <div class="setting-list-name">Media Auto Download</div>
                                                                    <div class="setting-list-switch">
                                                                        <label class="material-switch">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="setting-list">
                                                                    <div class="setting-list-name">Mute Conversation</div>
                                                                    <div class="setting-list-switch">
                                                                        <label class="material-switch">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="setting-list">
                                                                    <div class="setting-list-name">Notifications</div>
                                                                    <div class="setting-list-switch">
                                                                        <label class="material-switch">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="setting-list">
                                                                    <div class="setting-list-name">Block</div>
                                                                    <div class="setting-list-switch">
                                                                        <label class="material-switch">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingFourGroup">
                                                    <div class="card-title  d-flex justify-content-between align-items-center" role="button" data-toggle="collapse" data-target="#collapseFourGroup"
                                                        aria-expanded="true" aria-controls="collapseFourGroup">
                                                        <div class="acpanel__heading">
                                                            <div class="acpanel__left">
                                                                <span><i class="mdi mdi-file-document-outline"></i></span>
                                                                <span>Members List</span>
                                                            </div>
                                                            <div class="acpanel__right">
                                                                <span class="badge badge-info">250</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="collapseFourGroup" class="collapse show" aria-labelledby="headingFourGroup" data-parent="#accordionGroupChat">
                                                    <div class="card-body">
                                                        <ul class="list-unstyled documentlist-wrapper">
                                                            <li>
                                                                <div class="memberlist">
                                                                    <div class="membericon">
                                                                        <img class="img-fluid" src="./assets/images/user/250/01.jpg" alt="">
                                                                    </div>
                                                                    <div class="membertitle">
                                                                        <div class="membername">Jack P. Angulo</div>
                                                                        <div class="membersubtext">California</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="memberlist">
                                                                    <div class="membericon">
                                                                        <img class="img-fluid" src="./assets/images/user/250/02.jpg" alt="">
                                                                    </div>
                                                                    <div class="membertitle">
                                                                        <div class="membername">Jack P. Angulo</div>
                                                                        <div class="membersubtext">Newyork</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="memberlist">
                                                                    <div class="membericon">
                                                                        <img class="img-fluid" src="./assets/images/user/250/03.jpg" alt="">
                                                                    </div>
                                                                    <div class="membertitle">
                                                                        <div class="membername">Jack P. Angulo</div>
                                                                        <div class="membersubtext">Japan</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="memberlist">
                                                                    <div class="membericon">
                                                                        <img class="img-fluid" src="./assets/images/user/250/04.jpg" alt="">
                                                                    </div>
                                                                    <div class="membertitle">
                                                                        <div class="membername">Jack P. Angulo</div>
                                                                        <div class="membersubtext">Newyork</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="memberlist">
                                                                    <div class="membericon">
                                                                        <img class="img-fluid" src="./assets/images/user/250/05.jpg" alt="">
                                                                    </div>
                                                                    <div class="membertitle">
                                                                        <div class="membername">Jack P. Angulo</div>
                                                                        <div class="membersubtext">California</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="memberlist">
                                                                    <div class="membericon">
                                                                        <img class="img-fluid" src="./assets/images/user/500/01.jpg" alt="">
                                                                    </div>
                                                                    <div class="membertitle">
                                                                        <div class="membername">Jack P. Angulo</div>
                                                                        <div class="membersubtext">California</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            
                                                            <li> <div class="doclistall">Load More</div></li>
                                                           
                                                        </ul> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ca-content__callstab">
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="ca-call-details-card">
                                                <div class="conversation-panel__back-button ">
                                                    <i class="mdi mdi-arrow-left"></i>
                                                </div>
                                                <div class="ca-call-details__left">
                                                    <div class="user-avatar  user-avatar-xl user-avatar-rounded online">
                                                        <img src="./assets/images/user/250/02.jpg" alt="">
                                                    </div>
                                                    <div class="ca-call-details__pname">
                                                        <div>Earnest Clements</div>
                                                        <div class="calllist__details--info">
                                                            <span><i class="mdi mdi-tag-outline"></i></span>
                                                            <span>Co-Workers</span>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="ca-call-details__right">
                                                    <div class="iconbox btn-solid-primary">
                                                        <i class="iconbox__icon mdi mdi-message-text-outline"></i>
                                                    </div>
                                                    <div class="iconbox btn-solid-success">
                                                        <i class="iconbox__icon mdi mdi-phone"></i>
                                                    </div>
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="ca-call-details-history">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="ca-call-history">
                                                    <div class="ca-call-history__left">
                                                        <div class="call-outline-btn call-incoming-icon">
                                                            <i class="mdi mdi-phone-incoming"></i>
                                                        </div>
                                                        <div class="ca-call-history__left--title">
                                                            <div>Incoming Call</div>
                                                            <span>5 Minutes ago - 12m 26s</span>
                                                        </div>
                                                    </div>
                                                    <div class="ca-call-history__right">
                                                        <div class="iconbox btn-solid-info">
                                                            <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="ca-call-history">
                                                    <div class="ca-call-history__left">
                                                        <div class="call-outline-btn call-outgoing-icon">
                                                            <i class="mdi mdi-phone-outgoing"></i>
                                                        </div>
                                                        <div class="ca-call-history__left--title">
                                                            <div>Outgoing Call</div>
                                                            <span>5 Minutes ago - 12m 26s</span>
                                                        </div>
                                                    </div>
                                                    <div class="ca-call-history__right">
                                                        <div class="iconbox btn-solid-success">
                                                            <i class="iconbox__icon mdi mdi-phone"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="ca-call-history">
                                                    <div class="ca-call-history__left">
                                                        <div class="call-outline-btn call-missed-icon">
                                                            <i class="mdi mdi-phone-missed"></i>
                                                        </div>
                                                        <div class="ca-call-history__left--title">
                                                            <div>Missed Call</div>
                                                            <span>5 Minutes ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="ca-call-history__right">
                                                        <div class="iconbox btn-solid-info">
                                                            <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="ca-call-history">
                                                    <div class="ca-call-history__left">
                                                        <div class="call-outline-btn call-incoming-icon">
                                                            <i class="mdi mdi-phone-incoming"></i>
                                                        </div>
                                                        <div class="ca-call-history__left--title">
                                                            <div>Incoming Call</div>
                                                            <span>5 Minutes ago - 12m 26s</span>
                                                        </div>
                                                    </div>
                                                    <div class="ca-call-history__right">
                                                        <div class="iconbox btn-solid-info">
                                                            <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="ca-call-history">
                                                    <div class="ca-call-history__left">
                                                        <div class="call-outline-btn call-incoming-icon">
                                                            <i class="mdi mdi-phone-incoming"></i>
                                                        </div>
                                                        <div class="ca-call-history__left--title">
                                                            <div>Incoming Call</div>
                                                            <span>5 Minutes ago - 12m 26s</span>
                                                        </div>
                                                    </div>
                                                    <div class="ca-call-history__right">
                                                        <div class="iconbox btn-solid-info">
                                                            <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="ca-call-history">
                                                    <div class="ca-call-history__left">
                                                        <div class="call-outline-btn call-incoming-icon">
                                                            <i class="mdi mdi-phone-incoming"></i>
                                                        </div>
                                                        <div class="ca-call-history__left--title">
                                                            <div>Incoming Call</div>
                                                            <span>5 Minutes ago - 12m 26s</span>
                                                        </div>
                                                    </div>
                                                    <div class="ca-call-history__right">
                                                        <div class="iconbox btn-solid-info">
                                                            <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="ca-call-history">
                                                    <div class="ca-call-history__left">
                                                        <div class="call-outline-btn call-outgoing-icon">
                                                            <i class="mdi mdi-phone-outgoing"></i>
                                                        </div>
                                                        <div class="ca-call-history__left--title">
                                                            <div>Outgoing Call</div>
                                                            <span>5 Minutes ago - 12m 26s</span>
                                                        </div>
                                                    </div>
                                                    <div class="ca-call-history__right">
                                                        <div class="iconbox btn-solid-success">
                                                            <i class="iconbox__icon mdi mdi-phone"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="ca-call-history">
                                                    <div class="ca-call-history__left">
                                                        <div class="call-outline-btn call-missed-icon">
                                                            <i class="mdi mdi-phone-missed"></i>
                                                        </div>
                                                        <div class="ca-call-history__left--title">
                                                            <div>Missed Call</div>
                                                            <span>5 Minutes ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="ca-call-history__right">
                                                        <div class="iconbox btn-solid-info">
                                                            <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="ca-call-history">
                                                    <div class="ca-call-history__left">
                                                        <div class="call-outline-btn call-outgoing-icon">
                                                            <i class="mdi mdi-phone-outgoing"></i>
                                                        </div>
                                                        <div class="ca-call-history__left--title">
                                                            <div>Outgoing Call</div>
                                                            <span>5 Minutes ago - 12m 26s</span>
                                                        </div>
                                                    </div>
                                                    <div class="ca-call-history__right">
                                                        <div class="iconbox btn-solid-success">
                                                            <i class="iconbox__icon mdi mdi-phone"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="ca-call-history">
                                                    <div class="ca-call-history__left">
                                                        <div class="call-outline-btn call-missed-icon">
                                                            <i class="mdi mdi-phone-missed"></i>
                                                        </div>
                                                        <div class="ca-call-history__left--title">
                                                            <div>Missed Call</div>
                                                            <span>5 Minutes ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="ca-call-history__right">
                                                        <div class="iconbox btn-solid-info">
                                                            <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ca-content__contactstab">
                        <div class="container">
                            <div class="conversation-panel__back-button back2contacts">
                                <i class="mdi mdi-arrow-left"></i> 
                                <span>Back</span>
                            </div>
                            <div class="ca-profile-thumb" style="background-image: url(./assets/images/media/07.jpg);">
                                
                                <div class="ca-profile-info">
                                    <div class="ca-profile-pic"><img class="img-fluid" src="./assets/images/user/500/09.jpg" alt=""></div>
                                </div>
                                <div class="ca-profile-actions">
                                    <div class="iconbox-group">
                                        <div class="iconbox btn-hovered-light">
                                            <i class="iconbox__icon mdi mdi-star-outline"></i>
                                        </div>
                                        <div class="iconbox btn-hovered-light">
                                            <i class="iconbox__icon mdi mdi-pencil-outline"></i>
                                        </div>
                                        <div class="iconbox btn-hovered-light">
                                            <i class="iconbox__icon mdi mdi-dots-horizontal"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="ca-overlay"></div>
                            </div>

                            <div class="profile-settings-list border mb-5">
                                <div class="ca-profile-title">
                                    <h2 class="ca-profile-name">Pearl Villarreal</h2>
                                    <div class="ca-profile-tag">
                                        <span>Co-Workers</span>
                                    </div>
                                    <div class="ca-contcat-profile__calling-buttons pt-2">
                                        
                                        <div class="iconbox iconbox-pill btn-outline-light">
                                            <i class="iconbox__icon mdi mdi-message-text-outline"></i>
                                            <span>Message</span>
                                        </div>
                                        <div class="iconbox iconbox-pill btn-outline-light">
                                            <i class="iconbox__icon mdi mdi-phone"></i>
                                            <span>Voice Call</span>
                                        </div>
                                        <div class="iconbox iconbox-pill btn-outline-light">
                                            <i class="iconbox__icon mdi mdi-video-outline"></i>
                                            <span>Video Call</span> 
                                        </div>
                                    </div>
                                </div>

                                <div class="setting-sunheading  setting-sunheading-style01  my-3">Personal & Contact Information</div>
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="ps-list">
                                            <div class="ps-list__left">
                                                <div class="ps-list__left--icon"><i class="mdi mdi-account-heart-outline"></i></div>
                                                <div class="ps-list__left--name">Nick name</div>
                                            </div>
                                            <div class="ps-list__right">Eva</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ps-list">
                                            <div class="ps-list__left">
                                                <div class="ps-list__left--icon"><i class="mdi mdi-gender-male-female"></i></div>
                                                <div class="ps-list__left--name">Gender</div>
                                            </div>
                                            <div class="ps-list__right">Female</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ps-list">
                                            <div class="ps-list__left">
                                                <div class="ps-list__left--icon"><i class="mdi mdi-cake"></i></div>
                                                <div class="ps-list__left--name">Birth date</div>
                                            </div>
                                            <div class="ps-list__right">20/12/2016</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ps-list">
                                            <div class="ps-list__left">
                                                <div class="ps-list__left--icon"><i class="mdi mdi-cellphone-android"></i></div>
                                                <div class="ps-list__left--name">Mobile number</div>
                                            </div>
                                            <div class="ps-list__right">+01 369 2015</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ps-list">
                                            <div class="ps-list__left">
                                                <div class="ps-list__left--icon"><i class="mdi mdi-email-outline"></i></div>
                                                <div class="ps-list__left--name">Email</div>
                                            </div>
                                            <div class="ps-list__right">earnest.clements@email.com</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ps-list border-bottom-0">
                                            <div class="ps-list__left">
                                                <div class="ps-list__left--icon"><i class="mdi mdi-at"></i></div>
                                                <div class="ps-list__left--name">Website</div>
                                            </div>
                                            <div class="ps-list__right">www.earnestclements.com</div>
                                        </div>
                                    </li>                                
                                </ul>


                                <div class="setting-sunheading setting-sunheading-style01 my-4">Social Network</div>


                                <ul class="list-unstyled">
                                    <li>
                                        <div class="ps-list">
                                            <div class="ps-list__left">
                                                <div class="ps-list__left--icon"><i class="mdi mdi-facebook"></i></div>
                                                <div class="ps-list__left--name">Facebook</div>
                                            </div>
                                            <div class="ps-list__right">earnest.clements</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ps-list">
                                            <div class="ps-list__left">
                                                <div class="ps-list__left--icon"><i class="mdi mdi-instagram"></i></div>
                                                <div class="ps-list__left--name">Instagram</div>
                                            </div>
                                            <div class="ps-list__right">earnest_clements</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ps-list">
                                            <div class="ps-list__left">
                                                <div class="ps-list__left--icon"><i class="mdi mdi-snapchat"></i></div>
                                                <div class="ps-list__left--name">Snapchat</div>
                                            </div>
                                            <div class="ps-list__right">earnestclements212</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ps-list border-bottom-0">
                                            <div class="ps-list__left">
                                                <div class="ps-list__left--icon"><i class="mdi mdi-twitter"></i></div>
                                                <div class="ps-list__left--name">Twitter</div>
                                            </div>
                                            <div class="ps-list__right">iamearnest</div>
                                        </div>
                                    </li> 
                                                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Settings Modal -->
            <div class="modal settings-modal-dialog" id="settingsModalCenter" tabindex="-1" role="dialog" aria-labelledby="settingsModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="settingsModalCenterTitle">Settings</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body p-0">
                            <div class="nav-style-vertical-1">
                                <div class="container-fluid p-0">
                                    <div class="row">
                                        <div class="col-4 settings-nav-menu">
                                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link active" id="v-pills-privacy-tab" data-toggle="pill" href="#v-pills-privacy" role="tab" aria-controls="v-pills-privacy" aria-selected="true">
                                                    <div class="settingmenu">
                                                        <div class="settingmenu__icon"><i class="mdi mdi-shield-lock-outline"></i></div>
                                                        <div class="settingmenu__name">Privacy & Security</div>
                                                    </div>
                                                </a>
                                                <a class="nav-link" id="v-pills-notifications-tab" data-toggle="pill" href="#v-pills-notifications" role="tab" aria-controls="v-pills-notifications" aria-selected="false">
                                                    <div class="settingmenu">
                                                        <div class="settingmenu__icon"><i class="mdi mdi-bell-ring-outline"></i></div>
                                                        <div class="settingmenu__name">Notifications</div>
                                                    </div>
                                                </a>
                                                <a class="nav-link" id="v-pills-theme-tab" data-toggle="pill" href="#v-pills-theme" role="tab" aria-controls="v-pills-theme" aria-selected="false">
                                                    <div class="settingmenu">
                                                        <div class="settingmenu__icon"><i class="mdi mdi-palette-outline"></i></div>
                                                        <div class="settingmenu__name">Theme</div>
                                                    </div>
                                                </a>
                                                <a class="nav-link" id="v-pills-audiovideo-tab" data-toggle="pill" href="#v-pills-audiovideo" role="tab" aria-controls="v-pills-audiovideo" aria-selected="false">
                                                    <div class="settingmenu">
                                                        <div class="settingmenu__icon"><i class="mdi mdi-video-wireless-outline"></i></div>
                                                        <div class="settingmenu__name">Audio & Video</div>
                                                    </div>
                                                </a>
                                                <a class="nav-link" id="v-pills-media-tab" data-toggle="pill" href="#v-pills-media" role="tab" aria-controls="v-pills-media" aria-selected="false">
                                                    <div class="settingmenu">
                                                        <div class="settingmenu__icon"><i class="mdi mdi-message-settings-variant-outline"></i></div>
                                                        <div class="settingmenu__name">Media</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-8 settings-nav-content">
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-privacy" role="tabpanel" aria-labelledby="v-pills-privacy-tab">
                                                    <div class="accordion settings-accordion accordion-arrow-toggler accordion-ungrouped" id="privacySecurity">
                                                        <div class="card">
                                                            <div class="card-header" id="privacySecurityHead1">
                                                                <div class="card-title" data-toggle="collapse" role="button" data-target="#privacySecurity1" aria-expanded="true" aria-controls="privacySecurity1">
                                                                    Privacy
                                                                </div>
                                                            </div>
                                                    
                                                            <div id="privacySecurity1" class="collapse show" aria-labelledby="headingOne" data-parent="#privacySecurity">
                                                                <div class="card-body">
                                                                    <div class="setting-sunheading">who can see my personal details</div>

                                                                    <ul class="list-unstyled ca-setting-list">
                                                                        <li>
                                                                            <div class="ca-setting-type">
                                                                                <div class="ca-setting-name">
                                                                                    <div class="ca-setting-name-main">Profile Picture</div>
                                                                                    <div class="ca-setting-name-sub">Select who can see your profile picture</div>
                                                                                </div>
                                                                                <div class="ca-setting-action">
                                                                                    <div class="dropdown">
                                                                                        <a class="btn btn-link dropdown-toggle" href="#" role="button" id="SettingsDropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                            Public
                                                                                        </a>
                                                                                        
                                                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="SettingsDropdown1">
                                                                                            <a class="dropdown-item" href="javascript:;">Public</a>
                                                                                            <a class="dropdown-item" href="javascript:;">My contacts</a>
                                                                                            <a class="dropdown-item" href="javascript:;">Selected group</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="ca-setting-type">
                                                                                <div class="ca-setting-name">
                                                                                    <div class="ca-setting-name-main">Last Seen</div>
                                                                                    <div class="ca-setting-name-sub">Select who can see my last seen</div>
                                                                                </div>
                                                                                <div class="ca-setting-action">
                                                                                    <div class="dropdown">
                                                                                        <a class="btn btn-link dropdown-toggle" href="#" role="button" id="SettingsDropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                            My contacts   
                                                                                        </a>
                                                                                        
                                                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="SettingsDropdown2">
                                                                                            <a class="dropdown-item" href="javascript:;">Public</a>
                                                                                            <a class="dropdown-item" href="javascript:;">My contacts</a>
                                                                                            <a class="dropdown-item" href="javascript:;">Selected group</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="ca-setting-type">
                                                                                <div class="ca-setting-name">
                                                                                    <div class="ca-setting-name-main">Online Status</div>
                                                                                    <div class="ca-setting-name-sub">Select who can see my last seen</div>
                                                                                </div>
                                                                                <div class="ca-setting-action">
                                                                                    <div class="dropdown">
                                                                                        <a class="btn btn-link dropdown-toggle" href="#" role="button" id="SettingsDropdown3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                            Selected group 
                                                                                        </a>
                                                                                        
                                                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="SettingsDropdown3">
                                                                                            <a class="dropdown-item" href="javascript:;">Public</a>
                                                                                            <a class="dropdown-item" href="javascript:;">My contacts</a>
                                                                                            <a class="dropdown-item" href="javascript:;">Selected group</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="privacySecurityHead2">
                                                                <div class="card-title collapsed" role="button" data-toggle="collapse" data-target="#privacySecurity2"
                                                                    aria-expanded="false" aria-controls="privacySecurity2">
                                                                    Security
                                                                </div>
                                                            </div>
                                                            <div id="privacySecurity2" class="collapse" aria-labelledby="headingTwo" data-parent="#privacySecurity">
                                                                <div class="card-body">
                                                                    <ul class="list-unstyled">
                                                                        <li>
                                                                            <div class="setting-list">
                                                                                <div class="setting-list-name">Lock chat screen</div>
                                                                                <div class="setting-list-switch">
                                                                                    <label class="material-switch">
                                                                                        <input type="checkbox">
                                                                                        <span></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="setting-list">
                                                                                <div class="setting-list-name">Unlock with Fingerprint</div>
                                                                                <div class="setting-list-switch">
                                                                                    <label class="material-switch">
                                                                                        <input type="checkbox">
                                                                                        <span></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="setting-list">
                                                                                <div class="setting-list-name">Desktop notification </div>
                                                                                <div class="setting-list-switch">
                                                                                    <label class="material-switch">
                                                                                        <input type="checkbox">
                                                                                        <span></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="privacySecurityHead3">
                                                                <div class="card-title collapsed" role="button" data-toggle="collapse" data-target="#privacySecurity3"
                                                                    aria-expanded="false" aria-controls="privacySecurity3">
                                                                    Blocked Contacts
                                                                </div>
                                                            </div>
                                                            <div id="privacySecurity3" class="collapse" aria-labelledby="privacySecurity3" data-parent="#privacySecurity">
                                                                <div class="card-body">
                                                                    <ul class="list-unstyled">
                                                                        <li>
                                                                            <div class="contactlist">
                                                                                <div class="user-avatar user-avatar-rounded online">
                                                                                    <img src="./assets/images/user/500/06.jpg" alt="">
                                                                                </div>
                                                                                <div class="contactlist__details">
                                                                                    <div class="contactlist__details--name">Chuck McCann</div>
                                                                                    <div class="calllist__details--info">
                                                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                                                        <span>Friends</span>
                                                                                    </div>
                                                                                </div>
                        
                                                                                <div class="contactlist__actions">
                                                                                    <div class="iconbox btn-solid-danger"  data-toggle="tooltip" data-placement="top" title="Remove">
                                                                                        <i class="iconbox__icon mdi mdi-close"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="contactlist">
                                                                                <div class="user-avatar user-avatar-rounded online">
                                                                                    <img src="./assets/images/user/500/01.jpg" alt="">
                                                                                </div>
                                                                                <div class="contactlist__details">
                                                                                    <div class="contactlist__details--name">Pearl Villarreal</div>
                                                                                    <div class="calllist__details--info">
                                                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                                                        <span>Friends</span>
                                                                                    </div>
                                                                                </div>
                        
                                                                                <div class="contactlist__actions">
                                                                                    <div class="iconbox btn-solid-danger"  data-toggle="tooltip" data-placement="top" title="Remove">
                                                                                        <i class="iconbox__icon mdi mdi-close"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="contactlist">
                                                                                <div class="user-avatar user-avatar-rounded online">
                                                                                    <img src="./assets/images/user/500/03.jpg" alt="">
                                                                                </div>
                                                                                <div class="contactlist__details">
                                                                                    <div class="contactlist__details--name">Sheila Hawkins</div>
                                                                                    <div class="calllist__details--info">
                                                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                                                        <span>Friends</span>
                                                                                    </div>
                                                                                </div>
                        
                                                                                <div class="contactlist__actions">
                                                                                    <div class="iconbox btn-solid-danger"  data-toggle="tooltip" data-placement="top" title="Remove">
                                                                                        <i class="iconbox__icon mdi mdi-close"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="contactlist border-bottom-0">
                                                                                <div class="user-avatar user-avatar-rounded online">
                                                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                                                </div>
                                                                                <div class="contactlist__details">
                                                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                                                    <div class="calllist__details--info">
                                                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                                                        <span>Friends</span>
                                                                                    </div>
                                                                                </div>
                        
                                                                                <div class="contactlist__actions">
                                                                                    <div class="iconbox btn-solid-danger" data-toggle="tooltip" data-placement="top" title="Remove">
                                                                                        <i class="iconbox__icon mdi mdi-close"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-notifications" role="tabpanel" aria-labelledby="v-pills-notifications-tab">
                                                    <div class="settings-inside-wrapper">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="setting-sunheading">notification configuration</div>
                                                                <ul class="list-unstyled ca-setting-list">
                                                                    <li>
                                                                        <div class="ca-setting-type">
                                                                            <div class="ca-setting-name">
                                                                                <div class="ca-setting-name-main">View Notification for</div>
                                                                                <div class="ca-setting-name-sub">You will get notification for</div>
                                                                            </div>
                                                                            <div class="ca-setting-action">
                                                                                <div class="dropdown">
                                                                                    <a class="btn btn-link dropdown-toggle" href="#" role="button" id="notiDropdownSettings1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        Both
                                                                                    </a>
                                                                                    
                                                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notiDropdownSettings1">
                                                                                        <a class="dropdown-item" href="javascript:;">Call only</a>
                                                                                        <a class="dropdown-item" href="javascript:;">Message only</a>
                                                                                        <a class="dropdown-item" href="javascript:;">Both</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="ca-setting-type">
                                                                            <div class="ca-setting-name">
                                                                                <div class="ca-setting-name-main">Notification sound for</div>
                                                                                <div class="ca-setting-name-sub">Notification sound play for</div>
                                                                            </div>
                                                                            <div class="ca-setting-action">
                                                                                <div class="dropdown">
                                                                                    <a class="btn btn-link dropdown-toggle" href="#" role="button" id="notiDropdownSettings2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        Message only
                                                                                    </a>
                                                                                    
                                                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notiDropdownSettings2">
                                                                                        <a class="dropdown-item" href="javascript:;">Call only</a>
                                                                                        <a class="dropdown-item" href="javascript:;">Message only</a>
                                                                                        <a class="dropdown-item" href="javascript:;">Both</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="setting-list">
                                                                            <div class="setting-list-name">Desktop notifications</div>
                                                                            <div class="setting-list-switch">
                                                                                <label class="material-switch">
                                                                                    <input type="checkbox">
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-theme" role="tabpanel" aria-labelledby="v-pills-theme-tab">
                                                    <div class="settings-inside-wrapper">
                                                        <h6 class="border-bottom pb-2">Light Theme</h6>
                                                        <a href="javascript:;" data-theme="light-default-theme" class="theme default-theme selected"></a>
                                                        <a href="javascript:;" data-theme="light-purple-theme" class="theme purple-theme"></a>
                                                        <a href="javascript:;" data-theme="light-pink-theme" class="theme pink-theme"></a>
                                                        <a href="javascript:;" data-theme="light-green-theme" class="theme green-theme"></a>
                                                        <a href="javascript:;" data-theme="light-red-theme" class="theme red-theme"></a>
                                                        <a href="javascript:;" data-theme="light-orange-theme" class="theme orange-theme"></a>
                                                        <a href="javascript:;" data-theme="light-blue-theme" class="theme blue-theme"></a>
                                                        <a href="javascript:;" data-theme="light-darkblue-theme" class="theme darkblue-theme"></a>
                                                        <a href="javascript:;" data-theme="light-lightpink-theme" class="theme lightpink-theme"></a>
                                
                                                        <h6 class="border-bottom py-3">Dark Theme</h6>
                                                        <a href="javascript:;" data-theme="dark-default-theme" class="theme default-theme"></a>
                                                        <a href="javascript:;" data-theme="dark-purple-theme" class="theme purple-theme"></a>
                                                        <a href="javascript:;" data-theme="dark-pink-theme" class="theme pink-theme"></a>
                                                        <a href="javascript:;" data-theme="dark-green-theme" class="theme green-theme"></a>
                                                        <a href="javascript:;" data-theme="dark-red-theme" class="theme red-theme"></a>
                                                        <a href="javascript:;" data-theme="dark-orange-theme" class="theme orange-theme"></a>
                                                        <a href="javascript:;" data-theme="dark-blue-theme" class="theme blue-theme"></a>
                                                        <a href="javascript:;" data-theme="dark-darkblue-theme" class="theme darkblue-theme"></a>
                                                        <a href="javascript:;" data-theme="dark-lightpink-theme" class="theme lightpink-theme"></a>
                                            
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-audiovideo" role="tabpanel" aria-labelledby="v-pills-audiovideo-tab">
                                                    <div class="accordion settings-accordion accordion-arrow-toggler accordion-ungrouped" id="audioVideoAcc">
                                                        <div class="card">
                                                            <div class="card-header" id="audioVideoAccHead1">
                                                                <div class="card-title" data-toggle="collapse" role="button" data-target="#audioVideoAcc1" aria-expanded="true" aria-controls="audioVideoAcc1">
                                                                    Audio
                                                                </div>
                                                            </div>
                                                    
                                                            <div id="audioVideoAcc1" class="collapse show" aria-labelledby="headingOne" data-parent="#audioVideoAcc">
                                                                <div class="card-body">
                                                                    <div class="setting-sunheading">Audio configurations</div>

                                                                    <ul class="list-unstyled ca-setting-list">
                                                                        <li>
                                                                            <div class="ca-setting-type">
                                                                                <div class="ca-setting-name">
                                                                                    <div class="ca-setting-name-main">Input</div>
                                                                                    <div class="ca-setting-name-sub">Select who can see your profile picture</div>
                                                                                </div>
                                                                                <div class="ca-setting-action">
                                                                                    <div class="dropdown">
                                                                                        <a class="btn btn-link dropdown-toggle" href="#" role="button" id="audioDropdownSettings1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                            Microphone
                                                                                        </a>
                                                                                        
                                                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="audioDropdownSettings1">
                                                                                            <a class="dropdown-item" href="javascript:;">Default Device </a>
                                                                                            <a class="dropdown-item" href="javascript:;">Microphone</a>
                                                                                            <a class="dropdown-item" href="javascript:;">Stereo mix</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="audioVideoAccHead2">
                                                                <div class="card-title collapsed" role="button"  data-toggle="collapse" data-target="#audioVideoAcc2"
                                                                    aria-expanded="false" aria-controls="audioVideoAcc2">
                                                                    Video
                                                                </div>
                                                            </div>
                                                            <div id="audioVideoAcc2" class="collapse" aria-labelledby="headingTwo" data-parent="#audioVideoAcc">
                                                                <div class="card-body">
                                                                    <div class="setting-sunheading">Video configurations</div>

                                                                    <ul class="list-unstyled ca-setting-list">
                                                                        <li>
                                                                            <div class="ca-setting-type">
                                                                                <div class="ca-setting-name">
                                                                                    <div class="ca-setting-name-main">Input</div>
                                                                                    <div class="ca-setting-name-sub">Select who can see your profile picture</div>
                                                                                </div>
                                                                                <div class="ca-setting-action">
                                                                                    <div class="dropdown">
                                                                                        <a class="btn btn-link dropdown-toggle" href="#" role="button" id="audioDropdownSettings2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                            UHD webcam
                                                                                        </a>
                                                                                        
                                                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="audioDropdownSettings2">
                                                                                            <a class="dropdown-item" href="javascript:;">Default webcam </a>
                                                                                            <a class="dropdown-item" href="javascript:;">HD webcam </a>
                                                                                            <a class="dropdown-item" href="javascript:;">UHD webcam </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-media" role="tabpanel" aria-labelledby="v-pills-media-tab">
                                                    <div class="accordion settings-accordion accordion-arrow-toggler accordion-ungrouped" id="mediaAcc">
                                                        <div class="card">
                                                            <div class="card-header" id="mediaAccHead1">
                                                                <div class="card-title" data-toggle="collapse" role="button" data-target="#mediaAcc1" aria-expanded="true" aria-controls="mediaAcc1">
                                                                    Backups
                                                                </div>
                                                            </div>
                                                    
                                                            <div id="mediaAcc1" class="collapse show" aria-labelledby="headingOne" data-parent="#mediaAcc">
                                                                <div class="card-body">
                                                                    <div class="setting-sunheading">Backups configurations</div>

                                                                    <ul class="list-unstyled ca-setting-list">
                                                                        <li>
                                                                            <div class="ca-setting-type">
                                                                                <div class="ca-setting-name">
                                                                                    <div class="ca-setting-name-main">Backup Type</div>
                                                                                    <div class="ca-setting-name-sub">Select that how you want to take backup</div>
                                                                                </div>
                                                                                <div class="ca-setting-action">
                                                                                    <div class="dropdown">
                                                                                        <a class="btn btn-link dropdown-toggle" href="#" role="button" id="backupDropdownSettings1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                            Auto
                                                                                        </a>
                                                                                        
                                                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="backupDropdownSettings1">
                                                                                            <a class="dropdown-item" href="javascript:;">Auto</a>
                                                                                            <a class="dropdown-item" href="javascript:;">Manual</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="ca-setting-type">
                                                                                <div class="ca-setting-name">
                                                                                    <div class="ca-setting-name-main">Backup Schedule</div>
                                                                                    <div class="ca-setting-name-sub">Select span of the backup time</div>
                                                                                </div>
                                                                                <div class="ca-setting-action">
                                                                                    <div class="dropdown">
                                                                                        <a class="btn btn-link dropdown-toggle" href="#" role="button" id="backupDropdownSettings2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                            Every Day
                                                                                        </a>
                                                                                        
                                                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="backupDropdownSettings2">
                                                                                            <a class="dropdown-item" href="javascript:;">Every Day</a>
                                                                                            <a class="dropdown-item" href="javascript:;">Every Week</a>
                                                                                            <a class="dropdown-item" href="javascript:;">Every Month</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="ca-setting-type">
                                                                                <div class="ca-setting-name">
                                                                                    <div class="ca-setting-name-main">Delete Old Media</div>
                                                                                    <div class="ca-setting-name-sub">Delete media automatically after period of time</div>
                                                                                </div>
                                                                                <div class="ca-setting-action">
                                                                                    <div class="dropdown">
                                                                                        <a class="btn btn-link dropdown-toggle" href="#" role="button" id="backupDropdownSettings3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                            Never
                                                                                        </a>
                                                                                        
                                                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="backupDropdownSettings3">
                                                                                            <a class="dropdown-item" href="javascript:;">Never</a>
                                                                                            <a class="dropdown-item" href="javascript:;">Every Week</a>
                                                                                            <a class="dropdown-item" href="javascript:;">Every Month</a>
                                                                                            <a class="dropdown-item" href="javascript:;">Every Year</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>

                                                                    <div class="setting-sunheading mt-5 mb-3">Backups items</div>

                                                                    <ul class="list-unstyled">
                                                                        <li>
                                                                            <div class="setting-list">
                                                                                <div class="setting-list-name">Chat</div>
                                                                                <div class="setting-list-switch">
                                                                                    <label class="material-switch">
                                                                                        <input type="checkbox" checked="">
                                                                                        <span></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="setting-list">
                                                                                <div class="setting-list-name">Images </div>
                                                                                <div class="setting-list-switch">
                                                                                    <label class="material-switch">
                                                                                        <input type="checkbox" checked="">
                                                                                        <span></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="setting-list">
                                                                                <div class="setting-list-name">Videos </div>
                                                                                <div class="setting-list-switch">
                                                                                    <label class="material-switch">
                                                                                        <input type="checkbox">
                                                                                        <span></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="setting-list">
                                                                                <div class="setting-list-name">Documents</div>
                                                                                <div class="setting-list-switch">
                                                                                    <label class="material-switch">
                                                                                        <input type="checkbox" checked="">
                                                                                        <span></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="mediaAccHead2">
                                                                <div class="card-title collapsed" role="button" data-toggle="collapse" data-target="#mediaAcc2"
                                                                    aria-expanded="false" aria-controls="mediaAcc2">
                                                                    Media Settings
                                                                </div>
                                                            </div>
                                                            <div id="mediaAcc2" class="collapse" aria-labelledby="headingTwo" data-parent="#mediaAcc">
                                                                <div class="card-body">
                                                                    <div class="setting-sunheading mb-3">Auto Download Media</div>

                                                                    <ul class="list-unstyled">
                                                                        <li>
                                                                            <div class="setting-list">
                                                                                <div class="setting-list-name">Images </div>
                                                                                <div class="setting-list-switch">
                                                                                    <label class="material-switch">
                                                                                        <input type="checkbox" checked="">
                                                                                        <span></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="setting-list">
                                                                                <div class="setting-list-name">Videos </div>
                                                                                <div class="setting-list-switch">
                                                                                    <label class="material-switch">
                                                                                        <input type="checkbox">
                                                                                        <span></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="setting-list">
                                                                                <div class="setting-list-name">Documents</div>
                                                                                <div class="setting-list-switch">
                                                                                    <label class="material-switch">
                                                                                        <input type="checkbox" checked="">
                                                                                        <span></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>

                                                                    <div class="setting-sunheading mt-5 mb-3">Media configuration</div>

                                                                    <ul class="list-unstyled ca-setting-list">
                                                                        <li>
                                                                            <div class="ca-setting-type">
                                                                                <div class="ca-setting-name">
                                                                                    <div class="ca-setting-name-main">Image Quality</div>
                                                                                    <div class="ca-setting-name-sub">Choose media quality you want to send</div>
                                                                                </div>
                                                                                <div class="ca-setting-action">
                                                                                    <div class="dropdown">
                                                                                        <a class="btn btn-link dropdown-toggle" href="#" role="button" id="mediaDropdownSettings1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                            Original
                                                                                        </a>
                                                                                        
                                                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="mediaDropdownSettings1">
                                                                                            <a class="dropdown-item" href="javascript:;">Good</a>
                                                                                            <a class="dropdown-item" href="javascript:;">Excellent</a>
                                                                                            <a class="dropdown-item" href="javascript:;">Original</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="calling-modal-data">
                <!-- INCOMING VIDEO CALL -->
                <div class="modal calling-modal CallDialogFullscreen-sm" id="incomingVideoCall" tabindex="-1" role="dialog" aria-labelledby="incomingVideoCall" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="text-center">
                                    <div class="user-avatar user-avatar-rounded user-avatar-xl">
                                        <img src="./assets/images/user/250/01.jpg" alt="">
                                    </div>
                                    <div class="userprofile-name">
                                        <span>Incoming Call</span>
                                        <h4>Jack P. Angulo</h4>
                                        <span>Product Manager</span>
                                    </div>

                                    <div class="call-actions">
                                        <div class="call-hangup" data-dismiss="modal"><i class="mdi mdi-phone-hangup"></i></div>
                                        <div class="call-pickup" data-toggle="modal" data-target="#incomingVideoStart"><i class="mdi mdi-video-outline"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- VIDEO CALL START-->
                <div class="modal fade videocall-modal CallDialogFullscreen-sm" id="incomingVideoStart" tabindex="-1" role="dialog" aria-labelledby="incomingVideoStart" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl " role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="icvideocallwrapper">
                                    <div class="icvideo-contact">
                                        <img class="img-fluid icvideo-contact__inner" src="./assets/images/media/call-01.jpg" alt="">
                                    </div>
                                    <div class="icvideo-user">
                                        <img class="" src="./assets/images/media/call-02.jpg" alt="">
                                    </div>
                                    <div class="icvideo-actions">
                                        <div class="icvideo-actions__left">
                                            <div class="icvideo-actions__left--duration">00:36</div>
                                        </div>
                                        <div class="icvideo-actions__middle">
                                            <div class="">
                                                
                                                <div class="iconbox btn-hovered-light" data-toggle="tooltip" data-placement="top" title="Speaker">
                                                    <i class="iconbox__icon mdi mdi-volume-high"></i>
                                                </div>
                                                <div class="iconbox btn-hovered-light" data-toggle="tooltip" data-placement="top" title="Hold">
                                                    <i class="iconbox__icon mdi mdi-pause"></i>
                                                </div>
                                                <div class="iconbox btn-hovered-light" data-toggle="tooltip" data-placement="top" title="Add Call">
                                                    <i class="iconbox__icon mdi mdi-phone-plus"></i>
                                                </div>
                                                <div class="iconbox btn-hovered-light" data-toggle="tooltip" data-placement="top" title="Disbale Video">
                                                    <i class="iconbox__icon mdi mdi-video-off-outline"></i>
                                                </div>
                                                <div class="iconbox btn-hovered-light" data-toggle="tooltip" data-placement="top" title="Mute">
                                                    <i class="iconbox__icon mdi mdi-microphone-off"></i>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="icvideo-actions__right">
                                            <div class="iconbox btn-hovered-light bg-danger" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="Hangup">
                                                <i class="iconbox__icon text-white mdi mdi-phone-hangup"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                <!-- OUTGOING VOICE CALL -->
                <div class="modal CallDialogFullscreen-sm" id="outGoingCall" tabindex="-1" role="dialog" aria-labelledby="outGoingCall" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="text-center">
                                    <div class="user-avatar user-avatar-rounded user-avatar-xl">
                                        <img src="./assets/images/user/250/01.jpg" alt="">
                                    </div>
                                    <div class="userprofile-name">
                                        <span>Calling...</span>
                                        <h4>Jack P. Angulo</h4>
                                        <span>Product Manager</span>

                                        <div class="call-duration">00:36</div>
                                    </div>
                                    
                                    <div class="call-options">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="call-options__iconbox">
                                                    <i class="mdi mdi-microphone-off"></i>
                                                </div>
                                                <h6>Mute</h6>
                                            </div>
                                            <div class="col-4">
                                                    <div class="call-options__iconbox">
                                                    <i class="mdi mdi-volume-high"></i>
                                                </div>
                                                <h6>Speaker</h6>
                                            </div>
                                            <div class="col-4">
                                                    <div class="call-options__iconbox">
                                                    <i class="mdi mdi-pause"></i>
                                                </div>
                                                <h6>Hold</h6>
                                            </div>                                                           
                                        </div>
                                    </div>

                                    <div class="call-actions">
                                        <div class="call-hangup" data-dismiss="modal"><i class="mdi mdi-phone-hangup"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="new-msgcall-data">
                <!-- NEW MESSAGE MODAL -->
                <div class="modal new-message-dialog" id="newMsgModal" tabindex="-1" role="dialog" aria-labelledby="newMsgModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="newMsgModalLabel">Create New Message</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="searchbar">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                                        <div class="input-group-append">
                                            <span class="input-group-text dialpad-opener"><i class="mdi mdi-dialpad"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-contact-list">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/06.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Chuck McCann</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                <div class="iconbox btn-solid-primary">
                                                    <i class="iconbox__icon mdi mdi-message-text-outline"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/01.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Pearl Villarreal</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                <div class="iconbox btn-solid-primary">
                                                    <i class="iconbox__icon mdi mdi-message-text-outline"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/03.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Sheila Hawkins</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                <div class="iconbox btn-solid-primary">
                                                    <i class="iconbox__icon mdi mdi-message-text-outline"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                <div class="iconbox btn-solid-primary">
                                                    <i class="iconbox__icon mdi mdi-message-text-outline"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                <div class="iconbox btn-solid-primary">
                                                    <i class="iconbox__icon mdi mdi-message-text-outline"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                <div class="iconbox btn-solid-primary">
                                                    <i class="iconbox__icon mdi mdi-message-text-outline"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                <div class="iconbox btn-solid-primary">
                                                    <i class="iconbox__icon mdi mdi-message-text-outline"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                <div class="iconbox btn-solid-primary">
                                                    <i class="iconbox__icon mdi mdi-message-text-outline"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                <div class="iconbox btn-solid-primary">
                                                    <i class="iconbox__icon mdi mdi-message-text-outline"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                <div class="iconbox btn-solid-primary">
                                                    <i class="iconbox__icon mdi mdi-message-text-outline"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                <div class="iconbox btn-solid-primary">
                                                    <i class="iconbox__icon mdi mdi-message-text-outline"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                <div class="iconbox btn-solid-primary">
                                                    <i class="iconbox__icon mdi mdi-message-text-outline"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                <div class="iconbox btn-solid-primary">
                                                        <i class="iconbox__icon mdi mdi-message-text-outline"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                <div class="iconbox btn-solid-primary">
                                                        <i class="iconbox__icon mdi mdi-message-text-outline"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist border-bottom-0">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                <div class="iconbox btn-solid-primary">
                                                        <i class="iconbox__icon mdi mdi-message-text-outline"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-dialpad">
                                    <div class="dial-pad-wrap">
                                        <div class="dial-pad">
                                            <div class="dial-screen">+01-(363)-2612</div>
                                            <div class="dial-table">
                                                <div class="dial-table-row">
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="1">
                                                        <div class="dial-key">1</div>
                                                        <div class="dial-sub-key">&nbsp;</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="2">
                                                        <div class="dial-key">2</div>
                                                        <div class="dial-sub-key">abc</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="3">
                                                        <div class="dial-key">3</div>
                                                        <div class="dial-sub-key">def</div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="dial-table-row">
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="4">
                                                        <div class="dial-key">4</div>
                                                        <div class="dial-sub-key">ghi</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="5">
                                                        <div class="dial-key">5</div>
                                                        <div class="dial-sub-key">jkl</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="6">
                                                        <div class="dial-key">6</div>
                                                        <div class="dial-sub-key">mno</div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="dial-table-row">
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="7">
                                                        <div class="dial-key">7</div>
                                                        <div class="dial-sub-key">pqrs</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="8">
                                                        <div class="dial-key">8</div>
                                                        <div class="dial-sub-key">tuv</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="9">
                                                        <div class="dial-key">9</div>
                                                        <div class="dial-sub-key">wxyz</div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="dial-table-row">
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="*">
                                                        <div class="dial-key">*</div>
                                                        <div class="dial-sub-key">&nbsp;</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="0">
                                                        <div class="dial-key">0</div>
                                                        <div class="dial-sub-key">+</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="#">
                                                        <div class="dial-key">#</div>
                                                        <div class="dial-sub-key">&nbsp;</div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="dial-table-row no-sub-key">
                                                    <div class="dial-table-col">
                                                        <div class="dial-key-wrap" data-key="save-contact">
                                                            <div class="dial-key"><i class="mdi mdi-account-plus-outline"></i></div>
                                                            <div class="dial-sub-key">Call</div>
                                                        </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="call">
                                                        <div class="dial-key"><i class="mdi mdi-message-text-outline"></i></div>
                                                        <div class="dial-sub-key">Call</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="back">
                                                        <div class="dial-key"><i class="mdi mdi-arrow-left"></i></div>
                                                        <div class="dial-sub-key">Back</div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- NEW CALL MODAL -->
                <div class="modal new-call-dialog" id="newCallModal" tabindex="-1" role="dialog" aria-labelledby="newCallModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="newCallModalLabel">Create New Call</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="searchbar">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                                        <div class="input-group-append">
                                            <span class="input-group-text dialpad-opener"><i class="mdi mdi-dialpad"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-contact-list">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/06.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Chuck McCann</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-success">
                                                        <i class="iconbox__icon mdi mdi-phone"></i>
                                                    </div>
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/01.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Pearl Villarreal</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-success">
                                                        <i class="iconbox__icon mdi mdi-phone"></i>
                                                    </div>
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/03.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Sheila Hawkins</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-success">
                                                        <i class="iconbox__icon mdi mdi-phone"></i>
                                                    </div>
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-success">
                                                        <i class="iconbox__icon mdi mdi-phone"></i>
                                                    </div>
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-success">
                                                        <i class="iconbox__icon mdi mdi-phone"></i>
                                                    </div>
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-success">
                                                        <i class="iconbox__icon mdi mdi-phone"></i>
                                                    </div>
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-success">
                                                        <i class="iconbox__icon mdi mdi-phone"></i>
                                                    </div>
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-success">
                                                        <i class="iconbox__icon mdi mdi-phone"></i>
                                                    </div>
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-success">
                                                        <i class="iconbox__icon mdi mdi-phone"></i>
                                                    </div>
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-success">
                                                        <i class="iconbox__icon mdi mdi-phone"></i>
                                                    </div>
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-success">
                                                        <i class="iconbox__icon mdi mdi-phone"></i>
                                                    </div>
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-success">
                                                        <i class="iconbox__icon mdi mdi-phone"></i>
                                                    </div>
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-success">
                                                        <i class="iconbox__icon mdi mdi-phone"></i>
                                                    </div>
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-success">
                                                        <i class="iconbox__icon mdi mdi-phone"></i>
                                                    </div>
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist border-bottom-0">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-success">
                                                        <i class="iconbox__icon mdi mdi-phone"></i>
                                                    </div>
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-video-outline"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-dialpad">
                                    <div class="dial-pad-wrap">
                                        <div class="dial-pad">
                                            <div class="dial-screen">+01-(363)-2612</div>
                                            <div class="dial-table">
                                                <div class="dial-table-row">
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="1">
                                                        <div class="dial-key">1</div>
                                                        <div class="dial-sub-key">&nbsp;</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="2">
                                                        <div class="dial-key">2</div>
                                                        <div class="dial-sub-key">abc</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="3">
                                                        <div class="dial-key">3</div>
                                                        <div class="dial-sub-key">def</div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="dial-table-row">
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="4">
                                                        <div class="dial-key">4</div>
                                                        <div class="dial-sub-key">ghi</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="5">
                                                        <div class="dial-key">5</div>
                                                        <div class="dial-sub-key">jkl</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="6">
                                                        <div class="dial-key">6</div>
                                                        <div class="dial-sub-key">mno</div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="dial-table-row">
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="7">
                                                        <div class="dial-key">7</div>
                                                        <div class="dial-sub-key">pqrs</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="8">
                                                        <div class="dial-key">8</div>
                                                        <div class="dial-sub-key">tuv</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="9">
                                                        <div class="dial-key">9</div>
                                                        <div class="dial-sub-key">wxyz</div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="dial-table-row">
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="*">
                                                        <div class="dial-key">*</div>
                                                        <div class="dial-sub-key">&nbsp;</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="0">
                                                        <div class="dial-key">0</div>
                                                        <div class="dial-sub-key">+</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="#">
                                                        <div class="dial-key">#</div>
                                                        <div class="dial-sub-key">&nbsp;</div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="dial-table-row no-sub-key">
                                                    <div class="dial-table-col">
                                                            
                                                        <div class="dial-key-wrap" data-key="save-contact">
                                                            <div class="dial-key"><i class="mdi mdi-account-plus-outline"></i></div>
                                                            <div class="dial-sub-key">Call</div>
                                                        </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="call">
                                                        <div class="dial-key"><i class="mdi mdi-phone"></i></div>
                                                        <div class="dial-sub-key">Call</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="back">
                                                        <div class="dial-key"><i class="mdi mdi-arrow-left"></i></div>
                                                        <div class="dial-sub-key">Back</div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- NEW GROUP MODAL -->
                <div class="modal new-group-dialog"  id="newGroupModal" tabindex="-1" role="dialog" aria-labelledby="newGroupModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="newGroupModalLabel">Create New Group</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                            <label for="defaultBaseInput" class="font-weight-bold">Group Name</label>
                                        <input class="form-control" type="text" id="defaultBaseInput">
                                    </div>
                                </form>
                                <div class="group-members">
                                    <div class="group-members__title">
                                        <h6>Group Members</h6>
                                        <span>4/100</span>
                                    </div>
                                    <div class="group-members__avatar">
                                        <div class="user-avatar user-avatar-rounded">
                                            <img src="./assets/images/user/250/01.jpg" alt="">
                                            <div class="user-avatar-closer"><i class="mdi mdi-close"></i></div>
                                        </div>
                                        <div class="user-avatar user-avatar-rounded">
                                            <img src="./assets/images/user/250/02.jpg" alt="">
                                            <div class="user-avatar-closer"><i class="mdi mdi-close"></i></div>
                                        </div>
                                        <div class="user-avatar user-avatar-rounded">
                                            <img src="./assets/images/user/250/03.jpg" alt="">
                                            <div class="user-avatar-closer"><i class="mdi mdi-close"></i></div>
                                        </div>
                                        <div class="user-avatar user-avatar-rounded">
                                            <img src="./assets/images/user/250/04.jpg" alt="">
                                            <div class="user-avatar-closer"><i class="mdi mdi-close"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            
                                <div class="searchbar">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                                        <div class="input-group-append">
                                            <span class="input-group-text dialpad-opener"><i class="mdi mdi-dialpad"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-contact-list">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/06.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Chuck McCann</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/01.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Pearl Villarreal</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/03.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Sheila Hawkins</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist border-bottom-0">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-dialpad">
                                    <div class="dial-pad-wrap">
                                        <div class="dial-pad">
                                            <div class="dial-screen">+01-(363)-2612</div>
                                            <div class="dial-table">
                                                <div class="dial-table-row">
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="1">
                                                        <div class="dial-key">1</div>
                                                        <div class="dial-sub-key">&nbsp;</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="2">
                                                        <div class="dial-key">2</div>
                                                        <div class="dial-sub-key">abc</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="3">
                                                        <div class="dial-key">3</div>
                                                        <div class="dial-sub-key">def</div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="dial-table-row">
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="4">
                                                        <div class="dial-key">4</div>
                                                        <div class="dial-sub-key">ghi</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="5">
                                                        <div class="dial-key">5</div>
                                                        <div class="dial-sub-key">jkl</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="6">
                                                        <div class="dial-key">6</div>
                                                        <div class="dial-sub-key">mno</div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="dial-table-row">
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="7">
                                                        <div class="dial-key">7</div>
                                                        <div class="dial-sub-key">pqrs</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="8">
                                                        <div class="dial-key">8</div>
                                                        <div class="dial-sub-key">tuv</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="9">
                                                        <div class="dial-key">9</div>
                                                        <div class="dial-sub-key">wxyz</div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="dial-table-row">
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="*">
                                                        <div class="dial-key">*</div>
                                                        <div class="dial-sub-key">&nbsp;</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="0">
                                                        <div class="dial-key">0</div>
                                                        <div class="dial-sub-key">+</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="#">
                                                        <div class="dial-key">#</div>
                                                        <div class="dial-sub-key">&nbsp;</div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="dial-table-row no-sub-key">
                                                    <div class="dial-table-col">
                                                            
                                                        <div class="dial-key-wrap" data-key="save-contact">
                                                            <div class="dial-key"><i class="mdi mdi-account-plus-outline"></i></div>
                                                            <div class="dial-sub-key">Call</div>
                                                        </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="call">
                                                        <div class="dial-key"><i class="mdi mdi-plus-circle-outline"></i></div>
                                                        <div class="dial-sub-key">Call</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="back">
                                                        <div class="dial-key"><i class="mdi mdi-arrow-left"></i></div>
                                                        <div class="dial-sub-key">Back</div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ADD MEMBER IN GROUP MODAL -->
                <div class="modal new-group-dialog"  id="addMemberModal" tabindex="-1" role="dialog" aria-labelledby="addMemberModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="addMemberModalLabel">Add Members</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            
                                <div class="searchbar">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                                        <div class="input-group-append">
                                            <span class="input-group-text dialpad-opener"><i class="mdi mdi-dialpad"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-contact-list">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/06.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Chuck McCann</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/01.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Pearl Villarreal</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/03.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Sheila Hawkins</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist border-bottom-0">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-dialpad">
                                    <div class="dial-pad-wrap">
                                        <div class="dial-pad">
                                            <div class="dial-screen">+01-(363)-2612</div>
                                            <div class="dial-table">
                                                <div class="dial-table-row">
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="1">
                                                        <div class="dial-key">1</div>
                                                        <div class="dial-sub-key">&nbsp;</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="2">
                                                        <div class="dial-key">2</div>
                                                        <div class="dial-sub-key">abc</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="3">
                                                        <div class="dial-key">3</div>
                                                        <div class="dial-sub-key">def</div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="dial-table-row">
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="4">
                                                        <div class="dial-key">4</div>
                                                        <div class="dial-sub-key">ghi</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="5">
                                                        <div class="dial-key">5</div>
                                                        <div class="dial-sub-key">jkl</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="6">
                                                        <div class="dial-key">6</div>
                                                        <div class="dial-sub-key">mno</div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="dial-table-row">
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="7">
                                                        <div class="dial-key">7</div>
                                                        <div class="dial-sub-key">pqrs</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="8">
                                                        <div class="dial-key">8</div>
                                                        <div class="dial-sub-key">tuv</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="9">
                                                        <div class="dial-key">9</div>
                                                        <div class="dial-sub-key">wxyz</div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="dial-table-row">
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="*">
                                                        <div class="dial-key">*</div>
                                                        <div class="dial-sub-key">&nbsp;</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="0">
                                                        <div class="dial-key">0</div>
                                                        <div class="dial-sub-key">+</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="#">
                                                        <div class="dial-key">#</div>
                                                        <div class="dial-sub-key">&nbsp;</div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="dial-table-row no-sub-key">
                                                    <div class="dial-table-col">
                                                            
                                                        <div class="dial-key-wrap" data-key="save-contact">
                                                            <div class="dial-key"><i class="mdi mdi-account-plus-outline"></i></div>
                                                            <div class="dial-sub-key">Call</div>
                                                        </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="call">
                                                        <div class="dial-key"><i class="mdi mdi-plus-circle-outline"></i></div>
                                                        <div class="dial-sub-key">Call</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="back">
                                                        <div class="dial-key"><i class="mdi mdi-arrow-left"></i></div>
                                                        <div class="dial-sub-key">Back</div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- INVITE PEOPLE -->
                <div class="modal new-group-dialog"  id="invitePeopleModal" tabindex="-1" role="dialog" aria-labelledby="invitePeopleModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="invitePeopleModalLabel">Invite Members</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            
                                <div class="searchbar">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                                        <div class="input-group-append">
                                            <span class="input-group-text dialpad-opener"><i class="mdi mdi-dialpad"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-contact-list">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/06.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Chuck McCann</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/01.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Pearl Villarreal</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/03.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Sheila Hawkins</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contactlist border-bottom-0">
                                                <div class="user-avatar user-avatar-rounded">
                                                    <img src="./assets/images/user/500/04.jpg" alt="">
                                                </div>
                                                <div class="contactlist__details">
                                                    <div class="contactlist__details--name">Amanda Sinquefield</div>
                                                    <div class="calllist__details--info">
                                                        <span><i class="mdi mdi-tag-outline"></i></span>
                                                        <span>Friends</span>
                                                    </div>
                                                </div>

                                                <div class="contactlist__actions">
                                                    <div class="iconbox btn-solid-info">
                                                        <i class="iconbox__icon mdi mdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-dialpad">
                                    <div class="dial-pad-wrap">
                                        <div class="dial-pad">
                                            <div class="dial-screen">+01-(363)-2612</div>
                                            <div class="dial-table">
                                                <div class="dial-table-row">
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="1">
                                                        <div class="dial-key">1</div>
                                                        <div class="dial-sub-key">&nbsp;</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="2">
                                                        <div class="dial-key">2</div>
                                                        <div class="dial-sub-key">abc</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="3">
                                                        <div class="dial-key">3</div>
                                                        <div class="dial-sub-key">def</div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="dial-table-row">
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="4">
                                                        <div class="dial-key">4</div>
                                                        <div class="dial-sub-key">ghi</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="5">
                                                        <div class="dial-key">5</div>
                                                        <div class="dial-sub-key">jkl</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="6">
                                                        <div class="dial-key">6</div>
                                                        <div class="dial-sub-key">mno</div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="dial-table-row">
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="7">
                                                        <div class="dial-key">7</div>
                                                        <div class="dial-sub-key">pqrs</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="8">
                                                        <div class="dial-key">8</div>
                                                        <div class="dial-sub-key">tuv</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="9">
                                                        <div class="dial-key">9</div>
                                                        <div class="dial-sub-key">wxyz</div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="dial-table-row">
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="*">
                                                        <div class="dial-key">*</div>
                                                        <div class="dial-sub-key">&nbsp;</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="0">
                                                        <div class="dial-key">0</div>
                                                        <div class="dial-sub-key">+</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="#">
                                                        <div class="dial-key">#</div>
                                                        <div class="dial-sub-key">&nbsp;</div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="dial-table-row no-sub-key">
                                                    <div class="dial-table-col">
                                                            
                                                        <div class="dial-key-wrap" data-key="save-contact">
                                                            <div class="dial-key"><i class="mdi mdi-account-plus-outline"></i></div>
                                                            <div class="dial-sub-key">Call</div>
                                                        </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="call">
                                                        <div class="dial-key"><i class="mdi mdi-plus-circle-outline"></i></div>
                                                        <div class="dial-sub-key">Call</div>
                                                    </div>
                                                    </div>
                                                    <div class="dial-table-col">
                                                    <div class="dial-key-wrap" data-key="back">
                                                        <div class="dial-key"><i class="mdi mdi-arrow-left"></i></div>
                                                        <div class="dial-sub-key">Back</div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- VIEW PROFILE MODAL -->
            <div class="modal profile-dialog" id="viewProfileModal" tabindex="-1" role="dialog" aria-labelledby="viewProfileModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="back2homepage" data-dismiss="modal">
                                <i class="mdi mdi-arrow-left"></i> 
                                <span>Back</span>
                            </div>
                            <div class="profile-modal-close" data-dismiss="modal">
                                <i class="mdi mdi-close"></i> 
                            </div>
                        </div>
                        <div class="modal-body p-0">
                            <div class="ca-profile-thumb" style="background-image: url(./assets/images/media/07.jpg);">
                                <div class="ca-profile-info">
                                    <div class="ca-profile-pic"><img class="img-fluid" src="./assets/images/user/500/01.jpg" alt=""></div>
                                    <div class="ca-profile-title">
                                        <h2 class="ca-profile-name">Earnest Clements</h2>
                                    </div>
                                </div>
                                <div class="ca-profile-actions">
                                    <div class="iconbox-group">
                                        <div class="iconbox btn-hovered-light">
                                            <i class="iconbox__icon mdi mdi-pencil-outline"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="ca-overlay"></div>
                            </div>

                            <div class="profile-settings-list">
                                <div class="setting-sunheading pl-2">Personal & Contact Information</div>
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="ps-list">
                                            <div class="ps-list__left">
                                                <div class="ps-list__left--icon"><i class="mdi mdi-gender-male-female"></i></div>
                                                <div class="ps-list__left--name">Gender</div>
                                            </div>
                                            <div class="ps-list__right">Female</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ps-list">
                                            <div class="ps-list__left">
                                                <div class="ps-list__left--icon"><i class="mdi mdi-cake"></i></div>
                                                <div class="ps-list__left--name">Birth date</div>
                                            </div>
                                            <div class="ps-list__right">20/12/2016</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ps-list">
                                            <div class="ps-list__left">
                                                <div class="ps-list__left--icon"><i class="mdi mdi-cellphone-android"></i></div>
                                                <div class="ps-list__left--name">Mobile number</div>
                                            </div>
                                            <div class="ps-list__right">+01 369 2015</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ps-list">
                                            <div class="ps-list__left">
                                                <div class="ps-list__left--icon"><i class="mdi mdi-email-outline"></i></div>
                                                <div class="ps-list__left--name">Email</div>
                                            </div>
                                            <div class="ps-list__right">earnest.clements@email.com</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ps-list">
                                            <div class="ps-list__left">
                                                <div class="ps-list__left--icon"><i class="mdi mdi-at"></i></div>
                                                <div class="ps-list__left--name">Website</div>
                                            </div>
                                            <div class="ps-list__right">www.earnestclements.com</div>
                                        </div>
                                    </li>                                
                                </ul>
                                <div class="setting-sunheading pl-2 py-4">Social Network</div>
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="ps-list">
                                            <div class="ps-list__left">
                                                <div class="ps-list__left--icon"><i class="mdi mdi-facebook"></i></div>
                                                <div class="ps-list__left--name">Facebook</div>
                                            </div>
                                            <div class="ps-list__right">earnest.clements</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ps-list">
                                            <div class="ps-list__left">
                                                <div class="ps-list__left--icon"><i class="mdi mdi-instagram"></i></div>
                                                <div class="ps-list__left--name">Instagram</div>
                                            </div>
                                            <div class="ps-list__right">earnest_clements</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ps-list">
                                            <div class="ps-list__left">
                                                <div class="ps-list__left--icon"><i class="mdi mdi-snapchat"></i></div>
                                                <div class="ps-list__left--name">Snapchat</div>
                                            </div>
                                            <div class="ps-list__right">earnestclements212</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ps-list">
                                            <div class="ps-list__left">
                                                <div class="ps-list__left--icon"><i class="mdi mdi-twitter"></i></div>
                                                <div class="ps-list__left--name">Twitter</div>
                                            </div>
                                            <div class="ps-list__right">iamearnest</div>
                                        </div>
                                    </li> 
                                                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- THEME CUSTOMIZER -->
            <div class="theme-customizer">
                <div class="theme-customizer-opener">
                    <i class="theme-customizer-icon mdi mdi-settings"></i>
                </div>
                
                <div class="theme-customizer-content">
                    <h6 class="border-bottom pb-2">Light Theme</h6>
                    <a href="javascript:;" data-theme="light-default-theme" class="theme default-theme selected"></a>
                    <a href="javascript:;" data-theme="light-purple-theme" class="theme purple-theme"></a>
                    <a href="javascript:;" data-theme="light-pink-theme" class="theme pink-theme"></a>
                    <a href="javascript:;" data-theme="light-green-theme" class="theme green-theme"></a>
                    <a href="javascript:;" data-theme="light-red-theme" class="theme red-theme"></a>
                    <a href="javascript:;" data-theme="light-orange-theme" class="theme orange-theme"></a>
                    <a href="javascript:;" data-theme="light-blue-theme" class="theme blue-theme"></a>
                    <a href="javascript:;" data-theme="light-darkblue-theme" class="theme darkblue-theme"></a>
                    <a href="javascript:;" data-theme="light-lightpink-theme" class="theme lightpink-theme"></a>

                    <h6 class="border-bottom py-3">Dark Theme</h6>
                    <a href="javascript:;" data-theme="dark-default-theme" class="theme default-theme"></a>
                    <a href="javascript:;" data-theme="dark-purple-theme" class="theme purple-theme"></a>
                    <a href="javascript:;" data-theme="dark-pink-theme" class="theme pink-theme"></a>
                    <a href="javascript:;" data-theme="dark-green-theme" class="theme green-theme"></a>
                    <a href="javascript:;" data-theme="dark-red-theme" class="theme red-theme"></a>
                    <a href="javascript:;" data-theme="dark-orange-theme" class="theme orange-theme"></a>
                    <a href="javascript:;" data-theme="dark-blue-theme" class="theme blue-theme"></a>
                    <a href="javascript:;" data-theme="dark-darkblue-theme" class="theme darkblue-theme"></a>
                    <a href="javascript:;" data-theme="dark-lightpink-theme" class="theme lightpink-theme"></a>

                    <h6 class="border-bottom py-3">RTL Layout</h6>
                    <label class="material-switch">
                        <input type="checkbox" class="rtlSwitch">
                        <span></span>
                    </label>
                </div>
               
            </div>
          
            <div class="backdrop-overlay hidden"></div>
        </div>
    </div>

    <script src="./assets/vendors/jquery/jquery-3.4.1.min.js"></script>
    <script src="./assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="./assets/vendors/material-floating-button/dist/mfb.min.js"></script>
    <script src="./assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="./assets/vendors/OwlCarousel2/owl.carousel.min.js"></script>
    <script src="./js/app.js"></script>

    <script>
    //INCOMING VIDEO CALL

        setTimeout(function () {
            $('#incomingVideoCall').modal( {
            backdrop: 'static',
            keyboard: false,
            show:true
            });
        }, 20);
        $(".call-pickup").on('click', function () {
            $('#incomingVideoCall').modal('hide');
            $('#incomingVideoStart').modal( {
            backdrop: 'static',
            keyboard: false,
            show:true
            });
        });
    </script>
</body>
</html>