<!doctype html>
<html lang="en">

<head>
    <title>contact
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="css/contact.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <a href="index.html"><button>Home</button></a>
    </header>
    <div id="Wrapper">
    <main>
        
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


            <button
                type="submit"
                class="btn btn-primary"
            >
                Submit
            </button>
            
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