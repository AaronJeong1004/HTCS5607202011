<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Single Student</title>
    <script src=https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <?php
        $studentID = $_GET["id"];
    ?>
    <script>
        $(document).ready(function () {
            url1 = "api/apiStudent.php?id="+<?php echo $studentID;?>;
            console.log(url1);
            $.ajax({
                type:'GET',
                url:url1,
                dataType: "JSON",
                success: function (data) {
                    console.log(data);
                    $("#studentName").val(data.name);
                    $("#studentUsername").val(data.username);
                    $("#studentName").dbleclick(function () {
                        $("#studentName").Prop('readonly', false);
                    });
                    $("#studentName").dbleclick(function () {
                        $("#studentName").Prop('readonly', false);
                    });
                    $("#save").click(function () {
                        newName = $("#studentName").val();
                        newUsernameame = $("#studentUsername").val();

                        url = "http://herokugitphpleisong.herokuapp.com/api/apiUpdateStudent.php";
                        posting = $.post(url, { id:<?php echo $studentID;?>, name: newName, username: newUsername});
                        posting.done(function (data) {
                            alert("changed");

                        });

                    });
                },
                error: function () {
                    alert("Not connected");

                }
            });
        });
    </script>
</head>
<body>

<div id="studentInfoDiv">
    <p>Name: <input type="text" id="studentName" readonly></p>
    <p>Username: <input type="text" id="studentUsername" readonly></p>
    <p><button>Save</button></p>
</div>
</body>
</html>
