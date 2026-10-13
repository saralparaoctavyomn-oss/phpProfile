</php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use Profile</title>
    <link rel="stylesheet" href="./src/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Instrument+Sans:wght@400..700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="profile-container">
        <div class="profile-contetn">
            <div class="profile-main-section">
                <div class="main">
                    <div class="profile-img">
                        <img src="./src/profile-1.jpg" alt="">
                    </div>
                    <div class="profile-name">
                        <h1>Souvik Das</h1>
                        <p>Secondary Science Educator</p>
                    </div>
                </div>
                <div class="contact-section">
                    <p>Phone</p>
                    <h2>+91 1234567890</h2>
                    <p>Email</p>
                    <h2>souvik@gmail.com</h2>
                </div>
            </div>
        </div>
        <div class="profile-details">
            <div class="profile-details-section">
                <div class="profile-details-section-a">
                    <div class="button">
                        <button id="btna">
                            <h4>About</h4>
                        </button>
                        <button id="btnb">
                            <h4>Contact</h4>
                        </button>

                    </div>

                </div>
                <div id="section-a" class="profile-details-section-b">
                    <div class="dtls-section-a">
                        <h2>About Me</h2>
                        <p>Hii Everyone i am a Supper techer in since and i have many knowledge on sience and i accive
                            my best techer award in Kolkata high school so i want to learn more and tech more so we got
                            all of this and thig to do alll the time </p>
                    </div>
                    <div class="dtls-section-b">
                        <div class="bsc-title">
                            <h2>Qualification</h2>
                        </div>
                        <div class="bsc-content">
                            <p>Higher Secondery Education</p>
                            <p>M.Sc. Sience.</p>
                            <p>B.Ed.</p>
                        </div>
                    </div>
                    <div class="dtls-section-b">
                        <div class="bsc-title">
                            <h2>Exprience</h2>
                        </div>
                        <div class="bsc-content">
                            <p>Current · Kolkata Gov High School Jr Since Techer</p>
                            <p>2 years · Sonapur Govt High School Pera Techer</p>
                            <p>6 Years · Baby Land Private School</p>
                            <p>Total 20 Years</p>

                        </div>
                    </div>
                    <div class="dtls-section-a">
                        <h2>Achivment</h2>
                        <p>I give my 100% in Pass out 2022 CBSE 12th student upto 15% student pass form my classes
                            student so it's very big achivment </p>
                    </div>
                    <div class="dtls-section-b">
                        <div class="bsc-title">
                            <h2>Award</h2>
                        </div>
                        <div class="bsc-content">
                            <p>2022 Best Since Techer Kolkata Govt High School</p>
                        </div>
                    </div>

                </div>
                <div id="section-b" class="profile-details-section-b">
                    <div class="dtls-section-b">
                        <div class="dtls-section-a">
                            <h2>Address</h2>
                            <p>near Mintu Staionery Shop,1st Floor, Howra, Kokata, West Bengal - 734000</p>
                        </div>
                        <div class="bsc-title">
                            <h2>Contact</h2>
                        </div>
                        <div class="bsc-content">
                            <p>Email- souvik@gmail.com</p>
                            <p>Phone- +91 1234567890</p>

                            <p>Whatsapp- +91 1234567890</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        // alert("hii")
        $("#btnb").css("background-color", "white")
        $("#btnc").css("background-color", "white")
        $("#section-b").hide()
        $("#btna").click(function() {
            $("#section-a").show()
            $("#section-b").hide()
            $("#btnb").css("background-color", "transparent")
            $("#btnc").css("background-color", "transparent")
            $("#btna").css("background-color", "rgb(233, 233, 233)")

        })
        $("#btnb").click(function() {
            $("#section-b").show()
            $("#section-a").hide()
            $("#btnb").css("background-color", "rgb(233, 233, 233)")
            $("#btna").css("background-color", "transparent")
            $("#btnc").css("background-color", "transparent")
        })
    })
    </script>
</body>

</html>