
  <nav>
    <div class="nav-wrapper row blue darken-3">
      <a href="#" class="brand-logo"><?php echo $this->Html->image('UEES-logo.png',array('class'=>'col s1'))?> Clínica Psicológica UEES</a>
      
      <?php if($current_user['user_role'] == 'ADMIN'):?>
        <ul id="nav-mobile" class="right hide-on-med-and-down col s3 offset-s1">
        <li><?php //echo $this->Html->link('Inicio',array('controller' => 'Home','action'=> 'home'));?></li>
        <li><?php echo $this->Html->link('Reservas',array('controller' => 'bookings','action'=> 'index'));?></li>
        <li><?php echo $this->Html->link('Pacientes',array('controller' => 'patients','action'=> 'index'));?></li>
        <li><?php echo $this->Html->link('Pruebas',array('controller' => 'bookings','action'=> 'index'));?></li>
        <li><?php echo $this->Html->link('Usuarios',array('controller' => 'users','action'=> 'index'));?></li>
        <li><strong><?php echo $this->Html->link('Logout',array('controller' => 'users','action'=> 'logout'))?></strong></li>
      </ul>

      <?php elseif ($current_user['user_role'] == 'TERAPEUTA'):?>
        <ul id="nav-mobile" class="right hide-on-med-and-down col s3 offset-s1">
        <li><?php echo $this->Html->link('Reservas',array('controller' => 'bookings','action'=> 'index'));?></li>
        <li><?php echo $this->Html->link('Pacientes',array('controller' => 'patients','action'=> 'index'));?></li>
        <li><?php echo $this->Html->link('Pruebas',array('controller' => 'bookings','action'=> 'index'));?></li>
        <li><strong><?php echo $this->Html->link('Logout',array('controller' => 'users','action'=> 'logout'));?></strong></li>
        </ul>
      <?php endif;?>
     
    </div>
  </nav>
