<h1 class='center'><strong>BIENVENIDOS A LA CLINICA PSICOLOGICA UEES</strong></h1>

    <!-- <div class="carousel" style="margin-left: -50">
    <a class="carousel-item" href="#two!"><?php //echo $this->Html->image('peakpx.jpg')?></a>
    <!-- <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
    <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
    <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
    </div> -->

    <!--CAMPO DE VALIDACIÓN-->
    <div id="navbar" class="navbar-collapse collapse">
          <?php echo $this->Form->create('User', array('class' => 'navbar-form navbar-right')); ?>
            <div class="input-field col s12 m6">  
              <?php echo $this->Form->input('username', array('label' => 'Ingrese su correo', 'class' => 'form-control', 'placeholder' => 'Usuario')); ?>
            </div>
            <div class="input-field col s12 m6">
              <?php echo $this->Form->input('password', array('label' => 'Ingrese su contraseña', 'class' => 'form-control', 'placeholder' => 'Contraseña')); ?>
            </div>
            <?php echo $this->Form->button('Acceder', array('class' => 'btn btn-success')); ?>
            <?php echo $this->Form->end(); ?>
        </div>

        <!-- SLIDER -->
    <div class="container z-depth-4">
        <div class="slider">
        <ul class="slides">
        <li>
            <?php echo $this->Html->image('portada-uees.jpg')?>
            <div class="caption center-align">
            <h3><strong>Ayudando a las personas</strong></h3>
            <!-- <h5 class="light grey-text text-lighten-3">Ayudando a las personas</h5> -->
            </div>
        </li>
        <li>
        <?php echo $this->Html->image('lic-psicologia.png')?>
            <div class="caption left-align">
            <h3><strong>A encontrarse a si mismos</strong></h3>
            <!-- <h5 class="light grey-text text-lighten-3">Encuentrate a ti mismo</h5> -->
            </div>
        </li>
        <li>
        <?php echo $this->Html->image('71034-psicologia.jpg')?>
            <div class="caption right-align">              
            <h3><strong>Y a comprender</strong></h3>
            <!-- <h5 class="light grey-text text-lighten-3">Te ha hablado Dross</h5> -->
            </div>
        </li>
        <li>
        <?php echo $this->Html->image('71028-psicologia.jpg')?>
            <div class="caption center-align">
            <h3><strong>Sus emociones y pensamientos</strong></h3>            
            </div>
        </li>
        </ul>
    </div>

    <!-- ESTILO DE SOMBRA DEL TEXTO -->
    <style>
      .caption {font-size: 77 px; text-shadow: 15px 15px 6px black;}
    </style>
  </div>