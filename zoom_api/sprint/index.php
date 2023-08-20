 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sprint admin</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body>
    <div class="left_sidebar">
        <div class="lsb_top">
            <a href="#" class="iconBx_m" id="logo">
                <i class="fab fa-accusoft"></i>
            </a>
            <a href="#" class="iconBx_m">
                <i class="fas fa-th-large"></i>
            </a>
            <a href="#" class="iconBx_m">
                <i class="fas fa-plus"></i>
            </a>
            <a href="#" class="iconBx_m">
                <i class="fas fa-chart-line"></i>
            </a>
            <a href="#" class="iconBx_m">
                <i class="fas fa-comment-dots"></i>
            </a>
            <a href="#" class="iconBx_m">
                <i class="fas fa-users"></i>
            </a>
        </div>
        <div class="lsb_bottom">
            <a href="#" class="iconBx_m">
                <i class="fas fa-bell"></i>
            </a>
            <a href="#" class="iconBx_m">
                <i class="fas fa-cog"></i>
            </a>
        </div>
    </div>
    <div class="main_container">
        <div class="mc_header">
            <div class="nav_arrows">
                <div class="iconBx_m arrow">
                    <i class="fas fa-arrow-left"></i>
                </div>
                <div class="iconBx_m arrow">
                    <i class="fas fa-arrow-right"></i>
                </div>
                <div class="iconBx_m arrow toggle">
                    <i class="fas fa-bars menu"></i>
                    <i class="fas fa-times close"></i>
                </div>
            </div>
            <a href="#" class="btn btn_blue">finish sprint</a>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <script src="chart.js"></script>
    <script>
        const leftSideBar = document.querySelector('.left_sidebar');
        const toggle = document.querySelector('.toggle');
        toggle.onclick = function() {
            leftSideBar.classList.toggle('active');
            toggle.classList.toggle('active');
        }
    </script>
</body>

</html>