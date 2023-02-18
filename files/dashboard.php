<?php
include_once "config.php";
?><div class="body2">
    <div class="mx-wd auto">
        <div class="all">
            <div class="left">
                <div class="top-nav">
                    <div class="user_profile" style="display: flex; align-items:center;">
                        <a href="./?img=edit" style="cursor: pointer;">
                            <div class="user_img">
                                <img src="./files/uploads/<?=$_SESSION['user']['img']?>" alt="">
                            </div>
                        </a>
                        <div>
                            <span style="margin-left: 10px; color: #fff; font-size: 17px;">
                                <?= $_SESSION['user']['fname'] . "" . $_SESSION['user']['lname']; ?></span>
                        </div>
                    </div>
                    <?php
                    if (isset($_GET['img'])) {
                        $img = $_GET['img'];
                        if ($img == 'edit') { ?>
                            <form action="./files/image.php" method="post" class="container" enctype="multipart/form-data">
                                <div>
                                    <div class="arrow">
                                        <?php
                                        if(isset($_GET['back'])){
                                            $back=$_GET['back'];
                                            if($back == 'prev'){
                                                header('location:../');
                                            }
                                        }
                                        ?>
                                        <a href="./?back=prev">
                                            <div>
                                                <span class="icons"><?php include "./svg/arrow-left.svg" ?></span>
                                            </div>
                                        </a>
                                        <div style="margin-left: 30px;">
                                            <span>Profile</span>
                                        </div>
                                    </div>
                                    <div class="img" style="margin: 20px auto;">
                                        <img src="./files/uploads/<?= $_SESSION['user']['img'] ?>" alt="">
                                        <div class="select">
                                            <a href="">
                                                <span style="fill: #333;" class="icons"><?php include "./svg/camera.svg" ?></span>
                                            </a>
                                            <input type="file" name="file">
                                        </div>
                                    </div>
                                    <div class="name">
                                        <p>Your name</p>
                                        <div style="margin: 10px 0;">
                                            <div style="position: relative;">
                                                <!-- <a href="?edt=value='<?php //$id
                                                                            ?>'"> -->
                                                <span>
                                                    <input type="text" name="fname" style="background-color: transparent; color:#fff; font-size:17px; border: none; outline:none;" value="<?= $_SESSION['user']['fname'] ?>">
                                                    <input type="text" name="lname" style="background-color: transparent; color:#fff; font-size:17px; border: none; outline:none;" value="<?= $_SESSION['user']['lname'] ?>">
                                                    <input type="hidden" name="id" style="position: absolute; inset:0; color:#333; background:transparent; outline:none;" value="<?= $_SESSION['user']['id'] ?>">
                                                </span>
                                                <!-- </a> -->
                                            </div>
                                            <div style="margin-right: 14px;">
                                                <button class="icons" type="submit" name="edit_submit" style="fill: #fff; background:#333; color:gray; border:1px solid gray;"><?php include "svg/check.svg" ?></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                    <?php }
                    }
                    ?>
                    <div class="icons">
                        <div>
                            <?php //print_r(glob('*')); 
                            ?>
                            <a href="">
                                <span><?php require "./svg/user.svg" ?></span>
                            </a>
                        </div>
                        <div>
                            <a href="">
                                <span><?php require "./svg/status.svg" ?></span>
                            </a>
                        </div>
                        <div class="message">
                            <a href="./?ref=all_chats">
                                <span><?php require "./svg/message.svg" ?></span>
                            </a>
                        </div>
                        <div class="ellipsis">
                            <a href="./?more=more">
                                <span><?php require "./svg/ellipsis-v.svg" ?></span>
                            </a>
                        </div>
                        <?php
                        if (isset($_GET['more'])) {
                            $more = $_GET['more'];
                            if ($more == 'more') { ?>
                                <div class="more">
                                    <div>
                                        <a href="?logout">
                                            <span style="fill: red;"><?php require "./svg/power-off.svg" ?></span>
                                        </a>
                                    </div>
                                </div>

                        <?php }
                        }
                        ?>
                    </div>
                </div>
                <div class="search">
                    <div class="search_icon">
                        <div><span><?php require "./svg/search.svg" ?></span></div>
                        <input type="text" name="search" placeholder="chat or start new chat">
                    </div>
                    <div class="icons">
                        <div>
                            <span data-testid="filter" data-icon="filter" class=""><svg viewBox="0 0 24 24" height="30" width="30" preserveAspectRatio="xMidYMid meet" class="" version="1.1" x="0px" y="0px" enable-background="new 0 0 24 24" xml:space="preserve">
                                    <path fill="gray" d="M10,18.1h4v-2h-4V18.1z M3,6.1v2h18v-2H3z M6,13.1h12v-2H6V13.1z"></path>
                                </svg></span>
                        </div>
                    </div>
                </div>
                <div class="scr">
                    <?php
                    $ref = '';
                    if (isset($_GET['ref']))
                        $ref = $_GET['ref'];
                    if ($ref == 'all_chats') {
                        //echo 'All users';
                        $sql1 ="SELECT id,fname,lname,img FROM whatsapp";
                        $query=mysqli_query($conn,$sql1) or die($conn->error);
                        if ($query) {
                            while ($row = $query->fetch_assoc()) { ?>
                                <a class="active" style="text-decoration: none;" href="./?ref=all_chats&chat_id=<?= $row['id'] ?>" class="<?php if ($ref == $row['id']) echo "active" ?>">
                                    <div class="recent">
                                        <div class="users">
                                            <div class="profile user_img">
                                                <img src="./files/uploads/<?=$row['img']?>" alt="">
                                            </div>
                                            <div class="name">
                                                <span><?= $row['fname'] . " " . $row['lname'] ?></span>
                                                <div style="font-size: 15px; color:gray;">
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div style="font-size: 14px; color:gray;">
                                                <span><?php date_default_timezone_set("Africa/Nairobi");
                                                        echo date("h:m:s"); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                        <?php }
                        }
                    } else {
                        //the original code
                        ?>
                        <div class="recent">
                            <div class="users">
                                <div class="profile">
                                    <img src="" alt="">
                                </div>
                                <div class="name">
                                    <span>Ivan Walker</span>
                                    <div style="font-size: 15px; color:gray;">
                                        <span>Hello</span>
                                    </div>
                                </div>
                                <div style="font-size: 14px; color:gray;">
                                    <span><?php date_default_timezone_set("Africa/Nairobi");
                                            echo date("h:m:s"); ?></span>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="right">
                <?php
                if (isset($_GET['chat_id'])) {
                    $chatid = $_GET['chat_id'];
                    $query2 = mysqli_query($conn, "SELECT lname,fname,img FROM whatsapp WHERE id='$chatid'");
                    if ($query2) {
                        while ($row2 = $query2->fetch_assoc()) { ?>
                            <div class="background"></div>
                            <div class="chat-body">
                                <div>
                                    <div class="profile user_img">
                                        <img src="./files/uploads/<?=$row2['img']?>" alt="">
                                    </div>
                                    <div class="name">
                                        <span><?= $row2['fname'] . " " . $row2['lname'] ?></span>
                                    </div>

                                    <?php } ?>
                                    <div class="icons">
                                        <div class="search_icon">
                                            <span><?php require "./svg/search.svg" ?></span>
                                        </div>
                                        <div class="ellipsis">
                                            <span><?php require "./svg/ellipsis-v.svg" ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-box">
                                    <?php
                                    $id = $_SESSION['user']['id'];
                                    $sender = $_GET['chat_id'];
                                    //$select=mysqli_query($conn,"SELECT * FROM messages WHERE receiver='$id' AND sender = '$sender'") or die($conn->error);
                                    $sql = "SELECT * FROM messages WHERE(sender='$sender' or sender='$id') AND(receiver='$id' or receiver='$sender')";
                                    echo $sql;
                                    $select = mysqli_query($conn, $sql) or die($conn->error);
                                    while ($row = $select->fetch_assoc()) {
                                        if ($id == $row['receiver']) { ?>
                                            <div>
                                                <?php
                                                echo '<div class="incoming">' . $row['message'] . '</div>';
                                                ?>
                                            </div>

                                        <?php } else { ?>
                                            <div>
                                                <div class="outgoing"><?= $row['message'] ?></div>
                                            </div>
                                    <?php }
                                    } ?>

                                </div>
                                <div class="footer">
                                    <?php
                                    $sender = $_SESSION['user']['id'];
                                    if (isset($_POST['message'])) {
                                        $message = $_POST['message'];
                                        $receiver = $_POST['receiver'];
                                        $msg_query = mysqli_query($conn, "INSERT INTO messages(sender,message,receiver) VALUES('$sender','$message','$receiver')") or die($conn->error);
                                    }
                                    ?>
                                    <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
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
                                                <input type="text" name="message" placeholder="Text message">
                                                <input type="hidden" name="receiver" value="<?= $_GET['chat_id'] ?>">
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
                    <?php }
                } ?>
            </div>
        </div>
    </div>
</div>