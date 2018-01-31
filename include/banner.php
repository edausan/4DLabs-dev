<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">


        <!-- Slide One - Set the background image for this slide in the line below -->

        <div class="carousel-item active" style="background-image: url('img/banner1.jpg')">
            <div class="carousel-content">
                <h3>4D LABS SEMICONDUCTORS</h3>
                <p>Big Solutions in Small Packages</p>
            </div>
        </div>

        <?php 
            for ($i=2; $i < 6; $i++) {
        ?>
        <div class="carousel-item" style="background-image: url('img/banner<?php echo $i; ?>.jpg')">
            <div class="carousel-content">
                <h3>4D LABS SEMICONDUCTORS</h3>
                <p>Big Solutions in Small Packages</p>
            </div>
        </div>

        <?php } ?>

        <!-- <div class="carousel-item" style="background-image: url('img/banner2.jpg')">
            <div class="carousel-content">
                <h3>4D LABS SEMICONDUCTORS</h3>
                <p>Big Solutions in Small Packages</p>
            </div>
        </div>

        <div class="carousel-item" style="background-image: url('img/banner3.jpg')">
            <div class="carousel-content">
                <h3>4D LABS SEMICONDUCTORS</h3>
                <p>Big Solutions in Small Packages</p>
            </div>
        </div> -->
        
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