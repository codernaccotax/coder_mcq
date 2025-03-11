<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="nav-container container-fluid d-flex justify-content-between align-items-center">
            <div class="home"><strong>HOME</strong></div>
            <div class="image-part">
                <img src="..\images\codernaccotax.png" alt="">
            </div>
            <div class="login">
                <button class="btn" id="top-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    Login
                </button>
            </div>
        </div>
    </nav>
    <div class="container-fluid main-container">
        <main>
            <!-- Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis minus illum quisquam unde explicabo voluptates qui esse quo molestiae. Pariatur dolor repellendus, labore dicta sapiente natus ab? Velit hic quisquam sunt consectetur. Error facilis numquam vel animi et! Error illum molestiae rerum nulla rem veniam at temporibus nesciunt quas voluptate fugiat vitae obcaecati in perferendis illo maiores, veritatis atque eius vel incidunt. Fuga iusto asperiores impedit voluptate quibusdam ratione molestiae voluptas ex minus dolore, error ipsam veritatis consequuntur, reiciendis exercitationem, vel voluptatibus veniam cumque quis! Possimus eaque, voluptatum impedit rerum aliquid cumque alias accusamus dolorum, animi neque nobis perferendis, laborum soluta laudantium earum explicabo accusantium eveniet fuga voluptatibus fugiat nesciunt? Officiis, nemo tempora. Ducimus nulla eveniet nam rem neque magnam iure praesentium corrupti numquam expedita quis ut libero facilis atque doloribus esse perferendis fugiat eaque, explicabo repellat molestias? Amet modi eveniet corporis veritatis asperiores fuga illo similique, cum nobis ab itaque corrupti, eaque consectetur delectus libero impedit eum accusamus voluptatem excepturi autem officia. Aliquam soluta suscipit animi adipisci doloribus laboriosam, iste ipsam minima, magni quod eaque unde, facilis porro quasi maiores voluptatem eos. Perspiciatis suscipit saepe magni quod similique quo, incidunt quos quis, doloribus impedit voluptatibus corrupti? Maiores, vitae! Harum soluta animi similique labore dolore, nam dicta temporibus alias, inventore illum, nesciunt minima ipsam. Consequatur aliquam maiores quos inventore reprehenderit harum ex at. Autem voluptatum ipsa esse tempore! Placeat nobis ullam modi aperiam suscipit quasi doloribus adipisci? Voluptatem voluptates asperiores rerum excepturi neque amet non necessitatibus officia, rem facilis aliquam. Hic voluptas mollitia ducimus neque, deleniti debitis unde. Incidunt accusamus quas illo excepturi corporis, dolor perferendis praesentium ex ipsum aliquid. Sed suscipit blanditiis iste voluptatem placeat iusto voluptatum vitae natus dolore modi ipsum nisi quia, enim corporis laboriosam molestias temporibus vero? Ut, nulla quia ipsa reprehenderit, iste ipsam impedit eos omnis et sequi aliquam in deleniti, saepe distinctio nisi officiis nobis fugiat. Corporis eius magni alias at unde commodi, soluta amet modi deleniti totam animi suscipit, minima iure ipsam eum perferendis eos similique quia laudantium omnis dicta veniam nostrum ipsa voluptatem! Voluptatum alias libero maiores, dolore veritatis similique dolores dignissimos ab mollitia fugit quia quam debitis repellat recusandae modi eveniet animi dolorum adipisci ad et ullam magnam. Consequuntur tempora dolorem culpa assumenda rerum quo maxime libero itaque omnis natus accusamus repudiandae fugiat cumque enim praesentium a, consectetur saepe reprehenderit dignissimos quisquam repellat adipisci aliquam qui. Doloribus iusto excepturi, autem magni eum voluptas et ullam adipisci, fuga atque assumenda soluta eos molestiae commodi dolor magnam doloremque odit! Maiores reprehenderit nisi dolorum quasi rerum fugit repellat, distinctio, modi pariatur aliquid tenetur! Delectus, voluptas vero facilis eum cum sunt. Perferendis molestiae at, beatae et eos ducimus dicta, illo natus vel ut corporis blanditiis ipsam reprehenderit vero tempore ab illum? Esse voluptas minus corporis, magnam itaque magni. Natus inventore accusantium odio nostrum, adipisci ad placeat voluptatum ea asperiores facilis sint, veritatis cupiditate odit laudantium quod itaque et rerum voluptatibus dolor, voluptate quia accusamus? Impedit deleniti quidem, tempore rerum ratione velit debitis animi illo odio? -->
        </main>
    </div>
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Login Here</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="offcanvas-body-left">
                <!-- <img src="../images\login-person.png" alt=""> -->
                <!-- <img src="../images\person2.png" alt=""> -->
                <img src="../images\person3.png" alt="">
            </div>
            <div class="offcanvas-body-right">
                <div class="form-section">
                    <form id="login-form">
                        <div class="form-part">
                            <label class="text-white col-12 input-fileds" for="user-email">EMAIL</label>
                            <input type="text" id="user-email" placeholder="youremail@gmail.com">
                        </div>
                        <div class="form-part">
                            <label class="text-white col-12 input-fileds" for="user-password">PASSWORD</label>

                            <input type="password" id="user-password" placeholder="pas....rd">
                        </div>
                        <div class="form-part form-button">
                            <button type="submit" class="btn text-success w-100 h-100">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <form id="formForUserId" method="POST">
        <input type="hidden" name="userId" id="forUserId">
    </form>

    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    
    <script>
        function openLoginPart(){
            $('.login-part').fadeToggle(800);
        }
        $('.home').on("click",function(){
            window.location.href = "../index.php";
        });
        $(document).ready(function() {
            $('#login-form').on('submit', function(e) {
                e.preventDefault(); // Prevent form submission
                let userEmail = $('#user-email').val();
                let password = $('#user-password').val();
                
                $.ajax({
                    type: 'POST',
                    url: 'login.php',
                    data: {
                        user_email: userEmail,
                        password: password
                    },
                    success: function(response) {
                        let answer = JSON.parse(response);                        
                        if (answer.success != true) {
                            alert(`Please Check Email OR Password,`);
                        } else {
                            if (answer.user_type_id == 1) {
                                $('.btn').html('Loading...');
                                $('#forUserId').val(answer.id);
                                $('#formForUserId').prop('action', '../ADMIN/index.php');
                                console.log(answer);
                                
                                setTimeout(function() {
                                    $('#loading-spinner').hide();
                                    $('#login-btn').prop('disabled', false);
                                    $('#login-btn').text('LOGIN');
                                    $('#formForUserId').submit();
                                    $('.btn').html('LOGIN');
                                }, 1000);
                            } else if (answer.user_type_id == 2) {
                                $('.btn').html('Loading...');
                                $('#forUserId').val(answer.id);
                                $('#formForUserId').prop('action', '../INSTRUCTOR/index.php');
                                console.log(answer);

                                setTimeout(function() {
                                    $('#loading-spinner').hide();
                                    $('#login-btn').prop('disabled', false);
                                    $('#login-btn').text('LOGIN');
                                    $('#formForUserId').submit();
                                    $('.btn').html('LOGIN');
                                }, 1000);

                            } else if (answer.user_type_id == 3) {
                                $('.btn').html('Loading...');

                                $('#forUserId').val(answer.id);
                                $('#formForUserId').prop('action', '../STUDENT/index.php');
                                console.log(answer);
                                
                                    setTimeout(function() {
                                    $('#loading-spinner').hide();
                                    $('#login-btn').prop('disabled', false);
                                    $('#login-btn').text('LOGIN');
                                    $('#formForUserId').submit();
                                    $('.btn').html('LOGIN');
                                }, 1000);

                            }
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>