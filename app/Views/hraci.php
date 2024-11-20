<?= $this->extend("layout/template") ?>
<?= $this->section("content") ?>
<div class="container-sm">
    <div class="row row-cols-4 row-cols-md-6">
          

        <div class="card col mb-3 me-3" style="width:355px" >
            <div class="row" >
                <span class="fi fi-cz"></span>
            <img class=" col-6" src="<?= base_url("obrazky/breite-radim.png"); ?>" alt="Card image">
            <div class="card-body col-6">
              <h4 class="card-title">Breite Radim</h4>
              <p class="card-text">Hraje fotbal</p>
            </div>
          </div>
        </div>

    <div class="card col mb-3 me-3" style="width:355px" >
        <div class="row" >
            <span class="fi fi-cz"></span>
        <img class=" col-6" src="<?= base_url("obrazky/dohnalek-adam.png"); ?>" alt="Card image">
        <div class="card-body col-6">
          <h4 class="card-title">Dohnálek Adam</h4>
          <p class="card-text">taky hraje fotbal</p>
        </div>
      </div>
    </div>

    <div class="card col mb-3 me-3" style="width:355px" >
        <div class="row" >
            <span class="fi fi-cz"></span>
        <img class=" col-6" src="<?= base_url("obrazky/kliment-jan.png"); ?>" alt="Card image">
        <div class="card-body col-6">
          <h4 class="card-title">Kliment Jan</h4>
          <p class="card-text">Umí hrát fotbal</p>
        </div>
      </div>
    </div>

    <div class="card col mb-3 me-3" style="width:355px" >
        <div class="row" >
            <span class="fi fi-ng"></span>
        <img class="col-6" src="<?= base_url("obrazky/kliment-jan.png"); ?>" alt="Card image">
        <div class="card-body col-6">
          <h4 class="card-title">Muritala Yunusa</h4>
          <p class="card-text">Rychle běhá</p>
        </div>
      </div>
    </div>
    
    <div class="card col mb-3 me-3" style="width:355px" >
      <div class="row" >
          <span class="fi fi-ng"></span>
      <img class="col-6 pt-2" src="<?= base_url("obrazky/kliment-jan.png"); ?>" alt="Card image">
      <div class="card-body col-6">
        <h4 class="card-title">Dele Ola</h4>
        <p class="card-text">Rychle běhá</p>
      </div>
    </div>
  </div>

  <div class="card col mb-3 me-3" style="width:355px" >
    <div class="row" >
        <span class="fi fi-nig"></span>
    <img class=" col-6" src="<?= base_url("obrazky/kliment-jan.png"); ?>" alt="Card image">
    <div class="card-body col-6">
      <h4 class="card-title">Muritala Yunusa</h4>
      <p class="card-text">Rychle běhá</p>
    </div>
  </div>
</div>

</div>
</div>

<?= $this->endSection() ?>