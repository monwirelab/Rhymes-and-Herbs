<?php
    include('includes/index_header.php');
?>

    <!-- SLIDES -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner over-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="Photos/plant.png" alt="First slide">
            <div class="carousel-caption">
                <p><a href="plants.php">Plant Gallery</a></p>
            </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="Photos/recipe.jpg" alt="Second slide">
            <div class="carousel-caption">
                <p><a href="recipes.php">Recipe Ideas</a></p>
            </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="Photos/poem.jpg" alt="Third slide">
            <div class="carousel-caption">
                <p><a href="poems.php">My Poems</a></p>
            </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="Photos/aboutme.jpg" alt="Fourth slide">
            <div class="carousel-caption">
                <p><a href="about_me.php">Get To Know Me</a></p>
            </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<?php
    include('includes/footer.php');
?>

    </body>

</html>