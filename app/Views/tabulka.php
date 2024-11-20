<?= $this->extend("layout/template") ?>
<?= $this->section("content") ?>
  <div class="container-sm">
    
    <table class="table table-bordered mt-5">
        <thead class="table-dark"> 
       <tr>
        <th>Datum</th>
        <th>Domácí</th>
        <th>Hosté</th>
        <th>Výsledek</th>
        </thead>
       </tr>
       <tr>
        <td>23.6.2024</td>
        <td><span class="fi fi-cz"></span> SK Sigma Olomouc</td>
        <td><span class="fi fi-pl"></span> Pogoň Štětín</td>
        <td>1:1</td>
       </tr>
       <tr>
        <td>28.6.2024</td>
        <td><span class="fi fi-pl"></span> Svarta Parta</td>
        <td><span class="fi fi-sk"></span> Tatry Party</td>
        <td>1:1</td>
       </tr>
       <tr>
        <td>8.7.2023</td>
        <td><span class="fi fi-cz"></span> TK Brno Vesnice</td>
        <td><span class="fi fi-sk"></span> MŠK Severní Maďarsko</td>
        <td>2:1</td>
       </tr>
       <tr>
        <td>5.4,2023</td>
        <td><span class="fi fi-cz"></span> Perník Pardubice</td>
        <td><span class="fi fi-cz"></span> Kladno tjt Město</td>
        <td>2:3</td>
       </tr>
       <tr>
        <td>5.3.2023</td>
        <td><span class="fi fi-pl"></span> Waršava Warzone</td>
        <td><span class="fi fi-cz"></span> Praha 5</td>
        <td>1:1</td>
       </tr>
    </table>
</div>

<?= $this->endSection() ?>