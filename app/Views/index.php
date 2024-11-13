<?= $this->extend("layout/template") ?>
<?= $this->section("content") ?>
<div class="container-sm">
  <div class="row">
    <div class="col-12 pt-4 m-4 text-center">
      <h1>Mám rád fotbal</h1>
    </div>
    <div class="col-6 pt-4 m-5">
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti tempora, repellendus inventore officiis, necessitatibus vero ullam a ratione illum praesentium consequuntur, temporibus suscipit quo molestiae nesciunt magnam! Enim, ipsa. Perspiciatis.</p>
    </div>
    <div class="col-6 m-1">
      <img src="<?= base_url("obrazky/fotbal2.jpg") ?>" alt="f">
    </div>
  </div>
</div>



<?= $this->endSection() ?>