<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>SOUZX</title>
    <link rel="stylesheet" href="/Souzx/css/style.css">
</head>


<body>
    <nav id="sidebar">

        <div id="sidebar_content">
            <div id="user">
                <a href="/views/login.php"><img src="img/account_circle_24dp_FILL0_wght400_GRAD0_opsz24.png" id="user_avatar" alt="Avatar"></a>

                <p id="user_infos">
                    <span class="item-descripition">
                        Fulano de tal
                    </span>
                    <span class="item-descripition">
                        Lorem ipsum
                    </span>
                </p>
            </div>

            <ul id="side_items">
                <li class="side-item active">
                    <a href="/index.php">
                        <i class="fa-solid fa-house"></i>
                        <span class="item-descripition">
                            Home
                        </span>
                    </a>
                </li>

                <li class="side-item">
                    <a href="/Souzx/views/login.php">
                        <i class="fa-solid fa-user"></i>
                        <span class="item-descripition">
                            Perfil
                        </span>
                    </a>
                </li>


                <li class="side-item">
                    <a href="#">
                        <i class="fa-solid fa-image"></i>
                        <span class="item-descripition">
                            Produtos
                        </span>
                    </a>
                </li>


                <li class="side-item">
                    <a href="#">
                        <i class="fa-solid fa-gear"></i>
                        <span class="item-descripition">
                            Configurações
                        </span>
                    </a>
                </li>
            </ul>

            <button id="open_btn">
                <i id="open_btn_icon" class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div id="logout">
            <button id="Logout_btn">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span class="item-descripition">
                    Logout
                </span>
            </button>
        </div>
    </nav>

    <main>
        <h1>SOUZA'S</h1>
    </main>




    <script src="/Souzx/js/java.js"></script>
</body>

</html>