<?= $this->extend("layout/template") ?>
<?= $this->section("content") ?>

<h1 class="text-center">Seznam hráčů z polska</h1>

<div class="row">
    <div class="col-6">
        <?php
        $table = new \CodeIgniter\View\Table();
        $table->setHeading('Jméno', "Věk", "číslo", "výška", "země");

        foreach($hraci as $row) {
            $table->addRow($row->jmeno, $row->vek, $row->cislo, $row->vyska, $row->country);
        }

        $template = array(
            'table_open'=> '<table class="table table-bordered">',
            'thead_open'=> '<thead>',
            'thead_close'=> '</thead>',
            'heading_row_start'=> '<tr>',
            'heading_row_end'=>' </tr>',
            'heading_cell_start'=> '<th>',
            'heading_cell_end' => '</th>',
            'tbody_open' => '<tbody>',
            'tbody_close' => '</tbody>',
            'row_start' => '<tr>',
            'row_end'  => '</tr>',
            'cell_start' => '<td>',
            'cell_end' => '</td>',
            'row_alt_start' => '<tr>',
            'row_alt_end' => '</tr>',
            'cell_alt_start' => '<td>',
            'cell_alt_end' => '</td>',
            'table_close' => '</table>'
            );
            
        $table->setTemplate($template);

        echo $table->generate();
        ?>
    </div>
</div>

<?= $this->endSection() ?>