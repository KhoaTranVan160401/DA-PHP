
    <style>
                :root{
            --primary: #2175f5;
        }

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body{
            background-color: #efefef;
        }

        .container{
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
            overflow: hidden;
        }

        .card{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 860px;
        }

        .shoeBackground{
            position: relative;
            width: 50%;
            height: 475px;
            box-shadow: -15px 0 35px rgba(0, 0, 0, 0.1),
            0 -15px 35px rgba(0, 0, 0, 0.1),
            0 15px 35px rgba(0, 0, 0, 0.1);
            transition: .5s;
        }

        .gradients{
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
        }

        .gradient{
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            z-index: -2;
        }

        .first{
            z-index: 0;
            animation: 1s width ease;
        }

        @keyframes width{
            from{
                width: 0%;
            }
            to{
                width: 100%;
            }
        }

        .second{
            z-index: -1;
        }

        .gradient[color="blue"]{
            background-image: linear-gradient(45deg, #0136af, #22abfa);
        }

        .gradient[color="red"]{
            background-image: linear-gradient(45deg, #d62926, #ee625f);
        }

        .gradient[color="green"]{
            background-image: linear-gradient(45deg, #11998e, #1ce669);
        }

        .gradient[color="orange"]{
            background-image: linear-gradient(45deg, #fc4a1a, #f7b733);
        }

        .gradient[color="black"]{
            background-image: linear-gradient(45deg, #111, #666);
        }

        .logo{
            position: absolute;
            width: 100px;
            left: 20px;
            top: 20px;
        }

        .share{
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: #fff;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            text-align: center;
            font-size: 1.3rem;
            text-decoration: none;
            color: var(--primary);
            transition: .5s;
        }

        .share:hover{
            transform: scale(1.1);
        }

        .share i{
            line-height: 50px;
        }

        .nike{
            position: absolute;
            top: 85px;
            left: 15px;
            font-size: 5rem;
            text-transform: uppercase;
            line-height: .9;
            color: #fff;
            opacity: .1;
        }

        .shoe{
            position: absolute;
            width: 140%;
            opacity: 0;
            bottom: 0;
            right: 0;
            transform: rotate(-20deg);
            transition: .5s;
        }

        .shoe.show{
            opacity: 1;
        }

        .info{
            width: 50%;
            background-color: #fff;
            z-index: 1;
            padding: 35px 40px;
            box-shadow: 15px 0 35px rgba(0, 0, 0, 0.1),
            0 -15px 35px rgba(0, 0, 0, 0.1),
            0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .shoeName{
            padding: 0 0 10px 0;
        }

        .shoeName div{
            display: flex;
            align-items: center;
        }

        .shoeName div .big{
            margin-right: 10px;
            font-size: 2rem;
            color: #333;
            line-height: 1;
        }

        .shoeName div .new{
            background-color: var(--primary);
            text-transform: uppercase;
            color: #fff;
            padding: 3px 10px;
            border-radius: 5px;
            transition: .5s;
        }

        .shoeName .small{
            font-weight: 500;
            color: #444;
            margin-top: 3px;
            text-transform: capitalize;
        }

        .shoeName, .description, .color-container, .size-container{
            border-bottom: 1px solid #dadada;
        }

        .description{
            padding: 10px 0;
        }

        .title{
            color: #3a3a3a;
            font-weight: 600;
            font-size: 1.2rem;
            text-transform: uppercase;
        }

        .text{
            color: #555;
            font-size: 17px;
        }

        .color-container{
            padding: 10px 0;
        }

        .colors{
            padding: 8px 0;
            display: flex;
            align-items: center;
        }

        .color{
            width: 25px;
            height: 25px;
            border-radius: 50%;
            margin: 0 10px;
            border: 5px solid;
            cursor: pointer;
            transition: .5s;
        }

        .color[color="blue"]{
            background-color: #2175f5;
            border-color: #2175f5;
        }

        .color[color="red"]{
            background-color: #f84848;
            border-color: #f84848;
        }

        .color[color="green"]{
            background-color: #29b864;
            border-color: #29b864;
        }

        .color[color="orange"]{
            background-color: #ff5521;
            border-color: #ff5521;
        }

        .color[color="black"]{
            background-color: #444;
            border-color: #444;
        }

        .color.active{
            border-color: #fff;
            box-shadow: 0 0 10px .5px rgba(0, 0, 0, 0.2);
            transform: scale(1.1);
        }

        .size-container{
            padding: 10px 0;
            margin-bottom: 10px;
        }

        .sizes{
            padding: 8px 0;
            display: flex;
            align-items: center;
        }

        .size{
            width: 40px;
            height: 40px;
            border-radius: 6px;
            background-color: #eee;
            margin: 0 10px;
            text-align: center;
            line-height: 40px;
            font-size: 1.1rem;
            font-weight: 500;
            cursor: pointer;
            transition: .3s;
        }

        .size.active{
            background-color: var(--primary);
            color: #fff;
            transition: .5s;
        }

        .buy-price{
            padding-top: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .price{
            color: #333;
            display: flex;
            align-items: flex-start;
        }

        .price h1{
            font-size: 2.1rem;
            font-weight: 600;
            line-height: 1;
        }

        .price i{
            font-size: 1.4rem;
            margin-right: 1px;
        }

        .buy{
            padding: .7rem 1rem;
            background-color: var(--primary);
            text-decoration: none;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 500;
            font-size: 1.1rem;
            transition: .5s;
        }

        .buy:hover{
            transform: scale(1.1);
        }

        .buy i{
            margin-right: 2px;
        }

        @media (max-width: 1070px){
            .shoe{
                width: 135%;
            }
        }

        @media (max-width: 1000px){
            .card{
                flex-direction: column;
                width: 100%;
                box-shadow: 0 0 35px 1px rgba(0, 0, 0, 0.2);
            }
            
            .card > div{
                width: 100%;
                box-shadow: none;
            }

            .shoe{
                width: 100%;
                transform: rotate(-5deg) translateY(-50%);
                top: 55%;
                right: 2%;
            }

            .nike{
                top: 20%;
                left: 5%;
            }
        }

        @media (max-width: 600px){
            .share{
                width: 40px;
                height: 40px;
            }

            .share i {
                font-size: 1rem;
                line-height: 40px;
            }

            .logo{
                width: 70px;
            }
        }

        @media (max-width: 490px){
            .nike{
                font-size: 7rem;
            }

            .shoeName div .big{
                font-size: 1.3rem;
            }

            .small{
                font-size: 1rem;
            }

            .new{
                padding: 2px 6px;
                font-size: .9rem;
            }

            .title{
                font-size: .9rem;
            }

            .text{
                font-size: .8rem;
            }

            .buy{
                padding: .5rem .8rem;
                font-size: .8rem;
            }

            .price h1{
                font-size: 1.5rem;
            }

            .price i{
                font-size: .9rem;
            }

            .size{
                width: 30px;
                height: 30px;
                margin: 0 8px;
                font-size: .9rem;
                line-height: 30px;
            }

            .color{
                margin: 0 6px;
                width: 0 20px;
                width: 20px;
                height: 20px;
                border-width: 4px;
            }

            .share{
                width: 35px;
                height: 35px;
                top: 10px;
                right: 10px;
            }

            .share i{
                font-size: .8rem;
                line-height: 35px;
            }

            .logo{
                width: 60px;
                top: 10px;
                left: 10px;
            }

            .info{
                padding: 20px;
            }
        }

        @media (max-width: 400px){
            .buy i{
                display: none;
            }

            .container{
                padding: 20px;
            }
        }
    </style>
<div class="container">
        <?php
            include '../config.php';
            if(isset($_GET['id']  )){
                $accountid=$_GET['id'];
                $sql="select * from `sanpham` where `maSP`='$accountid'";
                
                $ds=mysqli_query($conn,$sql);
                $response=array();
                while($dong=mysqli_fetch_assoc($ds)){
                    
           
        
        ?>    
        
            <div class="card">
                <div class="shoeBackground">
                    <div class="gradients">
                        <div class="gradient second" color="blue"></div>
                        <div class="gradient" color="red"></div>
                        <div class="gradient" color="green"></div>
                        <div class="gradient" color="orange"></div>
                        <div class="gradient" color="black"></div>
                    </div>
                    <h1 class="nike"><?php echo $dong['tenSP']?></h1>
                    <img src="img/logo.png" alt="" class="logo">
                    <a href="#" class="share"><i class="fas fa-share-alt"></i></a>

                    <!-- <img src="img/blue.png" alt="" class="shoe show" color="blue">
                    <img src="img/red.png" alt="" class="shoe" color="red">
                    <img src="img/green.png" alt="" class="shoe" color="green">
                    <img src="img/orange.png" alt="" class="shoe" color="orange">
                    <img src="img/black.png" alt="" class="shoe" color="black"> -->
                    <img src="../img/<?php echo $dong['hinhAnh']?>" alt="" class="shoe show" color="blue">
                    <img src="../img/<?php echo $dong['hinhAnh']?>" alt="" class="shoe" color="red">
                    <img src="../img/<?php echo $dong['hinhAnh']?>" alt="" class="shoe" color="green">
                    <img src="../img/<?php echo $dong['hinhAnh']?>" alt="" class="shoe" color="orange">
                    <img src="../img/<?php echo $dong['hinhAnh']?>" alt="" class="shoe" color="black">

                </div>
                <div class="info">
                    <div class="shoeName">
                        <div>
                            <h1 class="big" ><?php echo $dong['tenSP']?></h1>
                            <span class="new">new</span>
                        </div>
                        <h3 class="small"><?php echo $dong['nhomSP']?></h3>
                    </div>
                    <div class="description">
                        <h3 class="title">Product Info</h3>
                        <p class="text"><?php echo $dong['moTa']?>.</p>
                    </div>
                    <div class="color-container">
                        <h3 class="title">Color</h3>
                        <div class="colors">
                            <span class="color active" primary="#2175f5" color="blue"></span>
                            <span class="color" primary="#f84848" color="red"></span>
                            <span class="color" primary="#29b864" color="green"></span>
                            <span class="color" primary="#ff5521" color="orange"></span>
                            <span class="color" primary="#444" color="black"></span>
                        </div>
                    </div>
                    <div class="size-container">
                        <h3 class="title">size</h3>
                        <div class="sizes">
                            <span class="size">7</span>
                            <span class="size">8</span>
                            <span class="size active">9</span>
                            <span class="size">10</span>
                            <span class="size">11</span>
                        </div>
                    </div>
                    <div class="buy-price">
                        <a href="#" class="buy"><i class="fas fa-shopping-cart"></i>Add to card</a>
                        <div class="price">
                            <i class="fas fa-dollar-sign"></i>
                            <h1><?php echo $dong['gia']?> $</h1>
                        </div>
                    </div>
                </div>
            </div>
        <?php
                }
            }
        
        ?>    
    </div>
    <script >
        const sizes = document.querySelectorAll('.size');
        const colors = document.querySelectorAll('.color');
        const shoes = document.querySelectorAll('.shoe');
        const gradients = document.querySelectorAll('.gradient');
        const shoeBg = document.querySelector('.shoeBackground');

        let prevColor = "blue";
        let animationEnd = true;

        function changeSize(){
            sizes.forEach(size => size.classList.remove('active'));
            this.classList.add('active');
        }

        function changeColor(){
            if(!animationEnd) return;
            let primary = this.getAttribute('primary');
            let color = this.getAttribute('color');
            let shoe = document.querySelector(`.shoe[color="${color}"]`);
            let gradient = document.querySelector(`.gradient[color="${color}"]`);
            let prevGradient = document.querySelector(`.gradient[color="${prevColor}"]`);

            if(color == prevColor) return;

            colors.forEach(c => c.classList.remove('active'));
            this.classList.add('active');

            document.documentElement.style.setProperty('--primary', primary);
            
            shoes.forEach(s => s.classList.remove('show'));
            shoe.classList.add('show');

            gradients.forEach(g => g.classList.remove('first', 'second'));
            gradient.classList.add('first');
            prevGradient.classList.add('second');

            prevColor = color;
            animationEnd = false;

            gradient.addEventListener('animationend', () => {
                animationEnd = true;
            })
        }

        sizes.forEach(size => size.addEventListener('click', changeSize));
        colors.forEach(c => c.addEventListener('click', changeColor));

        let x = window.matchMedia("(max-width: 1000px)");

        function changeHeight(){
            if(x.matches){
                let shoeHeight = shoes[0].offsetHeight;
                shoeBg.style.height = `${shoeHeight * 0.9}px`;
            }
            else{
                shoeBg.style.height = "475px";
            }
        }

        changeHeight();

        window.addEventListener('resize', changeHeight);
    </script>