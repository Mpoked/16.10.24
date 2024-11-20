<?= $this->extend("layout/template") ?>
<?= $this->section("content") ?>
<div class="container-sm ">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators" style="bottom: -50px">
                <button type="button" data-bs-target="#" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1" class="" ></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2" class="" ></button>

            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?= base_url("obrazky/fotbal1.jpg"); ?>" alt="Los Angeles" class="d-block w-100">
                        </div>
                        <div class="col-6 bg-success">
                            <h1 class="text-center ">Tady hrajou fotbal</h1>
                        </div>


                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?= base_url("obrazky/fotbal2.jpg"); ?>" alt="Los Angeles" class="d-block w-100">
                        </div>
                        <div class="col-6 bg-success">
                            <h1 class="text-center ">Tady hrajou fotbal</h1>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?= base_url("obrazky/fotbal3.jpg"); ?>" alt="Los Angeles" class="d-block w-100">
                        </div>
                        <div class="col-6 bg-success">
                            <h1 class="text-center ">Tady hrajou fotbal</h1>
                        </div>


                    </div>
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

    </div>

<?= $this->endSection() ?>