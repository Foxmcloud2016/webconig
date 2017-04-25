<?php				

					//UNA VEZ Q MUESTRO LOS DATOS TENGO Q MOSTRAR EL BLOQUE DE PAGINACIÓN SIEMPRE Y CUANDO HAYA MÁS DE UNA PÁGINA

						if($num_rows != 0)
						{
							$nextpage= $page +1;
							$prevpage= $page -1;

							?>
						<div class="paginacion">	
							<ul id="pagination-digg"><?php
           //SI ES LA PRIMERA PÁGINA DESHABILITO EL BOTON DE PREVIOUS, MUESTRO EL 1 COMO ACTIVO Y MUESTRO EL RESTO DE PÁGINAS
							if ($page == 1) 
							{
								?>
								<li class="previous-off">&laquo; Anterior</li>
								<li class="active">1</li> 
								<?php
								for($i= $page+1; $i<= $lastpage ; $i++)
									{?>
								<li><a href="nets_parque_escolar.php?page=<?php echo $i;?>"><?php echo $i;?></a></li>
								<?php }

           //Y SI LA ULTIMA PÁGINA ES MAYOR QUE LA ACTUAL MUESTRO EL BOTON NEXT O LO DESHABILITO
								if($lastpage >$page )
									{?>      
								<li class="next"><a href="nets_parque_escolar.php?page=<?php echo $nextpage;?>" >Próxima &raquo;</a></li><?php
							}
							else
								{?>
							<li class="next-off">Próxima &raquo;</li>
							<?php
						}
					} 
					else
					{

            //EN CAMBIO SI NO ESTAMOS EN LA PÁGINA UNO HABILITO EL BOTON DE PREVIUS Y MUESTRO LAS DEMÁS
						?>
						<li class="previous"><a href="nets_parque_escolar.php?page=<?php echo $prevpage;?>">&laquo; Anterior</a></li><?php
						for($i= 1; $i<= $lastpage ; $i++)
						{
                           //COMPRUEBO SI ES LA PÁGINA ACTIVA O NO
							if($page == $i)
							{
								?>       <li class="active"><?php echo $i;?></li><?php
							}
							else
							{
								?>       <li><a href="nets_parque_escolar.php?page=<?php echo $i;?>" ><?php echo $i;?></a></li><?php
							}
						}
             //Y SI NO ES LA ÚLTIMA PÁGINA ACTIVO EL BOTON NEXT     
						if($lastpage >$page )
							{   ?>   
						<li class="next"><a href="nets_parque_escolar.php?page=<?php echo $nextpage;?>">Próxima &raquo;</a></li><?php
					}
					else
					{
						?>       <li class="next-off">Próxima &raquo;</li><?php
					}
				}     
				?></ul>
				</div>
				<?php } ?>