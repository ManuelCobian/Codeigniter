 <div align="center"><h1>Mis Articulos</h1></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <?php 
        foreach ($consulta->result() as $fila ) {
           
       

        ?>
          <div class="post-preview">
           <a href="<?=base_url()?>article/post/<?= $fila->id ?>">
              <h2 class="post-title">
                <?= $fila->Post ?>
              </h2>
              <h3 class="post-subtitle">
                <?= $fila->Descripcion ?>
              </h3>
            </a>
            <p class="post-meta">Posted by 
              <a href="#">Luis Cobian</a>
              <?= $fila->fecha ?></p>
          </div>
          <?php  
          }  

          ?>
          
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>

    <hr>