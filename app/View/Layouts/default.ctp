<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Clínica Psicologíca UEES');
//$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	

	<?php
		//FORMATO ORIGINAL DE CAKE PHP
		// echo $this->Html->meta('icon');
		// echo $this->Html->css('cake.generic');
		// echo $this->fetch('meta');
		// echo $this->fetch('css');
		// echo $this->fetch('script');

		echo $this->Html->css('https://fonts.googleapis.com/icon?family=Material+Icons%27');
		echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js');
		echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css');
		echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js');
		echo $this->Html->script('https://cdn.jsdelivr.net/npm/sweetalert2@11');

				//Llamado a menu/barra de navegación
		echo $this->element('navbar');
	?>
	<style>
					footer{
						bottom: 0;
					}
				</style>
	<!-- <style>
				body {
			display: flex;
			min-height: 100vh;
			flex-direction: column;
		}

		main {
			flex: 1 0 auto;
		}
	</style> -->

	</head>
<body>
	
	<?php if(isset($currentuser)): ?>
	<?php echo $this->element('navbar'); ?>
	<?php endif; ?>

	<div class="wrapper">

			<div id="header">
				<h1><?php //echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
			</div>
			<div class="row" id="content">

				<?php echo $this->Session->flash(); ?>

				<div class="col s10 offset-s1"><?php echo $this->fetch('content'); ?></div>

			</div>
			<div id="footer">
				<?php 
					echo $this->element('footer');
					/*echo $this->Html->link(
						$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
						'http://www.cakephp.org/',
						array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
					);*/
				?>
				
				<p>
					<?php //echo $cakeVersion; ?>
				</p>
			</div>
					<!-- Activadores de MATERIALIZE -->
			<script>
						document.addEventListener('DOMContentLoaded', function() {
				var elems = document.querySelectorAll('.datepicker');
				var instances = M.Datepicker.init(elems,{
					firstDay: true, 
					format: 'yyyy-mm-dd',
					i18n: {
					months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
					weekdays: ["Domingo","Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
					weekdaysShort: ["Dom","Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
					weekdaysAbbrev: ["D","L", "MA", "MI", "J", "V", "S"],
					cancel:    'Cancelar',
					clear:    'Limpiar',
					done:    'Guardar'
				}
				});
				});

						document.addEventListener('DOMContentLoaded', function() {
					var elems = document.querySelectorAll('.timepicker');
					var instances = M.Timepicker.init(elems,{
						twelveHour: false
					});
				});

							document.addEventListener('DOMContentLoaded', function() {
					var elems = document.querySelectorAll('select:not(.swal2-select)');
					var instances = M.FormSelect.init(elems);
				});

							document.addEventListener('DOMContentLoaded', function() {
					var elems = document.querySelectorAll('.slider');
					var instances = M.Slider.init(elems,{
						indicators: false
					});
				});

					// 		document.addEventListener('DOMContentLoaded', function() {
					// var elems = document.querySelectorAll('.carousel');
					// var instances = M.Carousel.init(elems);});
				

	
			</script>
		</div>
	
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
