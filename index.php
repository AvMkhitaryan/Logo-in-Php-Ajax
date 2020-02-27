<?php
session_start();
$_SESSION["num"] = [4, 8, 11, 28, 22, 30, 35, 49, 44, 56, 52, 67, 66, 77, 88, 81];
//echo "<pre>";
//var_dump($arrNum);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    <script src="jquery-3.4.1.min.js"></script>

</head>
<body>
<div class="conatiner-fluid d-flex justify-content-center">
    <table style="width: 150px" class="table table-dark ">
        <tbody>
        <tr>
            <td id="4">4</td>
            <td></td>
            <td></td>
            <td id="30">30</td>
            <td id="49">49</td>
            <td></td>
            <td id="67">67</td>
            <td></td>
            <td id="88">88</td>
        </tr>
        <tr>
            <td></td>
            <td id="11">11</td>
            <td id="28">28</td>
            <td></td>
            <td></td>
            <td id="56">56</td>
            <td id="66">66</td>
            <td id="77">77</td>
            <td></td>
        </tr>
        <tr>
            <td id="8">8</td>
            <td></td>
            <td id="22">22</td>
            <td id="35">35</td>
            <td id="44">44</td>
            <td id="52">52</td>
            <td></td>
            <td></td>
            <td id="81">81</td>
        </tr>
        </tbody>
    </table>
</div>
<script>
    function Rand() {
        $.ajax({
            url: "rand.php",
            type: "POST",
            dataType: "",
            success: function (data) {
                $arr=[];
                data = JSON.parse(data);
                console.log(data);
                if (data.good >= 1 || data.good <= 90 && data == 'undefined') {
                    $("#NumberGen").append(`<p style="margin-left: 5px">${data.good}</p>`);
                    $("#"+data.good).css("color","red");
                }
                if (data.bed >= 1 || data.bed <= 90 && data == 'undefined') {
                    $("#NumberGenFalse").append(`<p style="margin-left: 5px">${data.bed}</p>`);
                }
                if (data.good==="end"){
                    $("#rem").remove();
                    $("#finish").append(`<h1 class="rem" style="color: red">FINISH!!</h1>`);
                }
            }
        });

    }
</script>
<div class="d-flex justify-content-center">
    <form action="" method="post" style=" width: 70px ">
        <input id="" type="button" class="btn btn-dark" onclick="Rand()" name="submit" value="Թիվը">
    </form>
</div>
<h6 class="d-flex justify-content-center">Համնկաց Թվեր</h6>
<div class="conatiner d-flex justify-content-center" style="margin-left: 20%;margin-right: 20%;">
    <div id="NumberGen" class="d-flex" style="padding: 7px;">

    </div>
</div>
<h6 class="d-flex justify-content-center">Չկա Նման Թվեր ձեր տոմսում</h6>
<div class="conatiner d-flex justify-content-center" style="margin-left: 20%;margin-right: 20%;">
    <div id="NumberGenFalse" class="d-flex"  style="padding: 7px;">

    </div>
</div>
<div id="finish" class="d-flex justify-content-center">

</div>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

</body>
</html>


