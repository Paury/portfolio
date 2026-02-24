<!doctype html>
<html lang="en">

<head>
    <title>contact
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/button.css">
    
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <nav id="navbar"
            class="navbar navbar-expand-sm navbar-light bg-light"
            
        >
            <div class="container">
                <a class="navbar-brand"  href="index.html">Maury Cambier</a>
                <button
                
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="aboutme.html" aria-current="page"
                                >About Me
                                <span class="visually-hidden">(current)</span></a
                            >
                        </li>
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="showcase.html" aria-current="page"
                                >Showcase
                                <span class="visually-hidden">(current)</span></a
                            >
                        </li>
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="studieMeter.html" aria-current="page"
                                >Studiemonitor
                                <span class="visually-hidden">(current)</span></a
                            >
                        </li>
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="contact.php" aria-current="page"
                                >Contact
                                <span class="visually-hidden">(current)</span></a
                            >
                        </li>
                        
                        
                            </div>
                        </li>
                    </ul>

                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="Wrapper">
    <main>
    <h1 class="text" style="padding-top: 100px;">Contact</h1>    

    <form class="contactform" action="contactmailer.php" method="POST">
        <div class="mb-3">
                <label for="" class="form-label">Naam</label>
                <input
                    type="text"
                    class="form-control"
                    name="naam"
                    id="naam"
                    aria-describedby="helpId"
                    placeholder="voer hier uw naam in"
                    required
                />
                <div class="mb-3">
                <label for="" class="form-label">Bedrijf</label>
                <input
                    type="text"
                    class="form-control"
                    name="bedrijf"
                    id="bedrijf"
                    aria-describedby="helpId"
                    placeholder="voer hier de naam van uw bedrijf in"
                    required
                />
                
            


        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input
                type="email"
                class="form-control"
                name="email"
                id="email"
                aria-describedby="emailHelpId"
                placeholder="abc@mail.com"
                required
            />
<div class="mb-3">
    <label for="" class="form-label">Waarom wilt uw mij bij uw bedrijf hebben</label>
    <textarea class="form-control" name="waarom" id="waarom" rows="3"></textarea>
</div>

<ul class="shadow-button-set" id="button-contact">
           <li> <button
                type="submit"
                
            >
                Submit
            </button></li>
            </ul>
        </div>
        </form>


    </main>
    <footer>
        <!-- place footer here -->
    </footer>


</div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>