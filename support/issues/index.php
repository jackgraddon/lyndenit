<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<head>
    <title>Lynden IT | Support</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/e80db28d62.js" crossorigin="anonymous"></script>
    <!-- Personal CSS -->
    <link rel="stylesheet" href="../../css/style.css" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/ico" href="../../images/lynden/lyndenFavicon.ico" />
    <!-- Google Site Search -->
    <script async onload="javascript:googleLoaded();" src="https://cse.google.com/cse.js?cx=f35faae7eae0e71ee"></script>
    <script type="text/javascript">
        function googleLoaded() {
            $("#searchbar").removeClass("hidden");
            $(".safari-warning-search").addClass("hidden");
            console.log("Google search bar loaded!");
        }
    </script>
    <!-- jsCookie (for tracking progression in Tech Tutorials) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script> -->
    <!-- Packery.js -->
    <script src="https://unpkg.com/packery@2.1/dist/packery.pkgd.min.js"></script>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-sm sticky-top">
        <div class="d-flex flex-sm-row-reverse w-100 h-100 align-content-center">
            <span id="menubar">
                <!-- Navigation Links -->
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="../">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="../support/">Support<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../faq/">FAQ</a>
                        </li>
                    </ul>
                </div>
            </span>
            <span class="flex-fill" id="spacer">
                <!-- Search Bar -->
                <div class="search float-right pr-3">
                    <div class="gcse-searchbox-only"></div>
                </div>
                <!-- Detect Safari -->
                <script type="application/javascript">
                    var ua = navigator.userAgent.toLowerCase();
                    if (ua.indexOf("safari") != -1) {
                        if (ua.indexOf("chrome") > -1) {
                            console.log("Using a Chromium Base - Good to go!");
                        } else {
                            console.log(
                                "Using Safari - Search may not work properly, hiding..."
                            );
                            $(".search").addClass("hidden");
                            $(".safari-warning-search").removeClass("hidden");
                        }
                    }
                </script>
            </span>
            <span class="float-left" id="brand">
                <span class="
              flex-row justify-content-center alight-items-center w-100 h-100 ">
                    <a class="navbar-brand" href="../../">
                        <div class="navbar-brand-img"></div>
                    </a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                        data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                </span>
            </span>
        </div>
    </nav>
    <div aria-label="breadcrumb">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="../../">Home</a></li>
            <li class="breadcrumb-item"><a href="../">Support</a></li>
            <li class="breadcrumb-item active" aria-current="Issues">Issues</li>
        </ol>
    </div>

    <!-- Content -->
    <main class="container">
        <div class="jumbotron mt-5" style="width: 70%; margin-left: auto; margin-right: auto;">
            <div class="mb-1">
                <h2>Documentation</h2>
                <input class="form-control" type="text" id="searchTicket" onkeyup="searchTicket()"
                    placeholder="Search for your ticket..">
            </div>
            <table class="table table-hover table-striped" id="tickets">
                <thead>
                    <td colspan='1' id="nameHead">
                        <p>Ticket Name</p>
                    </td>
                    <td colspan='1' id="dateHead">
                        <p>Date Filed</p>
                    </td>
                </thead>
                <tbody>
                    <?php
                        include('./get.php');
                        echo '<tr style="cursor: default;"><td class="text-sm text-muted" id="listEndName">End of List</td><td style="width:160px" class="text-sm text-muted" id="listEndDate"></td></tr>';
                    ?>
                </tbody>
            </table>
            <!-- Search Script -->
            <script>
                function searchTicket() {
                    // Declare variables
                    var input, filter, table, tr, td, i, txtValue;
                    input = document.getElementById("searchTicket");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("tickets");
                    tr = table.getElementsByTagName("tr");

                    // Loop through all table rows, and hide those who don't match the search query
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].querySelectorAll("td:not([id])")[0];
                        if (td) {
                            txtValue = td.textContent || td.innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                }
            </script>
        </div>
    </main>

    <nav class="nav justify-content-center align-items-center p-3 m-0 flex-column">
        <p class="nav-link p-1 m-1 text-muted">Website &copy;Lynden High School <span id="dateYear"></span>. All
            Rights Reserved.
        </p>
        <p class="nav-link p-1 m-1 text-muted">Developed by Jack Graddon</p>
        <p class="nav-link p-1 m-1 text-muted">Provide feedback on the site <a target="_blank" class="link"
                title="Requires a GitHub account." href="https://github.com/jackgraddon/lyndenit/issues/new/choose">here
                <i class="fa fa-external-link" aria-hidden="true"></i></a>.</p>
        <!-- Search Failed Warning (Will hide on successful search load) -->
        <p class="safari-warning-search text-muted text-sm">
            <i class="fa fa-eye-slash" aria-hidden="true"></i> Search has failed to load.
        </p>
    </nav>
    <script type="text/javascript">
        var date = new Date();
        var year = date.getFullYear();
        document.getElementById('dateYear').innerText = year;
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>