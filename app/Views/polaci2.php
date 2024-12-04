<?= $this->extend("layout/template") ?>
<?= $this->section("content") ?>

<h1 class="text-center">Seznam hráčů z polska</h1>

<div class="row">
        <?php
            foreach ($hraci as $row) {
                ?>
                <div class="card col-4 ">
                    <div class="card-body">
                        <?php 
                            echo "<h3>".$row->jmeno."</h3>";
                            echo "<p><b>Věk: </b>".$row->vek."</p>";
                        
                        ?>
                    </div>
                </div>
                <?php
            } 
        ?>  
</div>

<?= $this->endSection() ?>