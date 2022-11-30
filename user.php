<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash</title>
    <style>
        <?php require "user.css" ?>
    </style>
</head>
<body>
<div class="mx-wd auto">
    <div class="all">
        <div class="left">
            <div class="top-nav">
                <div class="user_profile">
                    <img src="" alt="">
                </div>
                <div class="icons">
                    <div>
                        <span><?php require "./svg/users.svg" ?></span>
                    </div>
                    <div>
                        <span><?php require "./svg/status.svg" ?></span>
                    </div>
                    <div class="message">
                        <span><?php require "./svg/message.svg" ?></span>
                    </div>
                    <div class="ellipsis">
                        <span><?php require "./svg/ellipsis-v.svg" ?></span>
                    </div>
                </div>
            </div>
            <div class="search">
                <div class="search_icon">
                    <div><span><?php require "./svg/search.svg" ?></span></div>
                    <input type="text" placeholder="chat or start new chat">
                </div>
                <div class="icons">
                    <div>
                    <span data-testid="filter" data-icon="filter" class=""><svg viewBox="0 0 24 24" height="30" width="30" preserveAspectRatio="xMidYMid meet" class="" version="1.1" x="0px" y="0px" enable-background="new 0 0 24 24" xml:space="preserve"><path fill="gray" d="M10,18.1h4v-2h-4V18.1z M3,6.1v2h18v-2H3z M6,13.1h12v-2H6V13.1z"></path></svg></span>
                    </div>
                </div>
            </div>
            <div class="recent">
                <div class="users">
                    <div class="profile"></div>
                    <div class="name">
                        <span>Ivan Walker</span>
                        <div style="font-size: 15px; color:gray;">
                            <span>Hello</span>
                        </div>
                    </div>
                    <div style="font-size: 14px; color:gray;">
                        <span>14:00</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="background"></div>
            <div class="chat-body">
                <div>
                    <div class="user_profile">
                        <img src="" alt="">
                    </div>
                    <div class="name">
                        <span>IvanWalker</span>
                    </div>
                    <div class="icons">
                        <div class="search_icon">
                            <span><?php require "./svg/search.svg" ?></span>
                        </div>
                        <div class="ellipsis">
                            <span><?php require "./svg/ellipsis-v.svg" ?></span>
                        </div>
                    </div>
                </div>
                <div>
                    
                </div>
                <div class="footer">
                    <form action="">
                        <div class="chat">
                            <div class="footer-icons">
                                <div>
                                    <span><?php include "./svg/smile.svg" ?></span>
                                </div>
                                <div>
                                    <span><?php include "./svg/paperclip.svg" ?></span>
                                </div>
                            </div>
                            <div class="input">
                                <input type="text" placeholder="Text message">
                            </div>
                            <div class="footer-icons">
                                <div>
                                    <span><?php include "./svg/microphone.svg" ?></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>