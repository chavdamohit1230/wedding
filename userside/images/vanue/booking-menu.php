<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bokking-menu</title>
    <style>
        * {

            margin: 0px;
            padding: 0px;

        }

        .conteiner {

            height: 705px;
            width: 850px;
            justify-content: center;
            align-items: center;
            box-shadow: 0px 2px 4px 0.4px;
            background-color: #f9f9f9;
            margin-left: 22%;
            margin-top: 1%;
            display: flex;
        }

        .image-content {
            height: 700px;
            width: 50%;
            background-image: url("bokking-menu.jpg");
            background-size: cover;
            object-fit: cover;
            box-shadow: 1px 2px 4px;

        }

        .image-cover {
            height: 700px;
            width: 100%;
            background-color: blue;
            opacity: 0.3;
        }

        .detail-content {
            height: 700px;
            width: 50%;
            background-color: white;
        }

        .vanue-hadding {
            padding-left: 12px;
            padding-top: 30px
        }

        .hadding-span {
            color: rgb(281, 17, 119);
        }

        .local-price-style {

            font-size: 22px;
            padding-left: 20px;
            padding-top: 10px;
        }

        .local-price {
            height: 50px;
            background-color: #f0f0f0;
            width: 100%;
            margin-top: 12px;
        }

        .price-info {
            padding-left: 170px;
            font-size: 17px;
            color: rgb(281, 17, 119);
        }

        .price-detail-vage {

            height: 50px;
            width: 100%;
            background-color: #f0f0f0;
            margin-top: 3px;
        }

        .price-detail-nonvage {
            height: 50px;
            width: 100%;
            background-color: #f0f0f0;
            margin-top: 3px;
        }

        .ruppi {
            color: rgb(281, 17, 119);
            padding-left: 20px;
            padding-top: 26px;
        }

        .price-part-1 {

            color: rgb(281, 17, 119);
            font-size: 22px;
            padding-left: 4px;


        }

        .price-part-2 {

            font-size: 18px;
        }

        .price-part-3 {
            padding-left: 65px;
        }

        .menu-line {

            height: 90px;
            padding-left: 30px;
            color: rgb(281, 17, 119);
        }

        .form-element {}

        .input-element {

            height: 40px;
            width: 400px;
            margin-left: 4px;
            margin-bottom: 13px;
            font-size: 16px;
            padding-left: 12px;
            border: 1.8px solid rgb(122, 117, 22);
            font-weight: bold;
            position: relative;
            transition: all 0.3s ease;
        }

        .input-element:hover {
            border-color: #b65c8f;
            /* Change border color on hover */
            box-shadow: 0 0 10px rgba(182, 92, 143, 0.8);
            transform: scale(0.99);
        }

        .btn {

            height: 50px;
            width: 70%;
            font-size: 25px;
            color: white;
            background-color: rgb(281, 17, 119);
            margin-left: 60px;
            margin-top: 43px;

            border: 2px solid #b65c8f
        }

        .btn:hover {
            box-shadow: 0 0 10px rgba(182, 92, 143, 100);
            transform: scale(0.99);
            border-color: #b65c8f;
            border-radius: 50px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>

<body>

    <div class="conteiner">

        <div class="image-content">
            <div class="image-cover"></div>
        </div>

        <div class="detail-content">
            <h1 class="vanue-hadding"><span class="hadding-span">Book</span> Your Vanue !</h1>

            <form action="">
                <div class="local-price">
                    <P class="local-price-style">Local Price :<span class="price-info">pricing info </span></P>
                </div>
                <div class="price-detail-vage">
                    <p> <i class="fa-solid fa-indian-rupee-sign fa-lg ruppi"></i><span class="price-part-1">1,300
                            <span class="price-part-2"> per plate</span></span> (taxes extra) <span
                            class="price-part-3"> vage price</span>
                    </p>
                </div>
                <div class="price-detail-nonvage">

                    <p> <i class="fa-solid fa-indian-rupee-sign fa-lg ruppi"></i><span class="price-part-1">1,600
                            <span class="price-part-2"> per plate</span></span> (taxes extra) <span
                            class="price-part-3"> non vage price</span>
                    </p>

                </div>
                <p class="menu-line-p"><img src="menu-line.png" alt="" class="menu-line"></p>
                <div class="form-element">
                    <input type="text" class="input-element" placeholder="Full name">
                    <input type="text" class="input-element" placeholder="Email">
                    <input type="text" class="input-element" placeholder="Phone: +91">
                    <input type="text" class="input-element" placeholder="Function date">
                    <button class="btn" onclick="mohit()">BooK Now</button>

                </div>
            </form>

        </div>
    </div>

</body>
<script>

    function mohit() {

        var url = " https://google.com";
        var mm = "width=600,height=400 scrollBy=yes"
        window.location.href = url;

    }

</script>

</html>