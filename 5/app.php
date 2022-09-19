<?php

class Componentes{
    public static function myModal($tbtn, $color, $titulo, $tcrp, $tbtnc, $tbtni, $vinculo){
        ?>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-<?php echo $color ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <?php echo $tbtn ?>
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog        ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $titulo ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php echo $tcrp ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo $tbtnc ?></button>
                        <a target="_blank" href="<?php echo $vinculo ?>"><button type="button" class="btn btn-primary"><?php echo $tbtni ?></button></a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    public static function myCarousel($txt1, $img1, $txt2, $img2, $txt3, $img3){
        ?>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo $img1 ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $txt1 ?></h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $img2 ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $txt2 ?></h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $img3 ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $txt3 ?></h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <?php
    }
}