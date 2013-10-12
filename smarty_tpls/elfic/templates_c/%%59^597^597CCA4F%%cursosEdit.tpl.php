<?php /* Smarty version 2.6.26, created on 2012-08-03 14:31:39
         compiled from cursos/cursosEdit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'cursos/cursosEdit.tpl', 38, false),)), $this); ?>
<?php echo '
	<script src="js/ajax.js" type="text/javascript"></script>
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script src="js/jquery.validate.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
    	$("#adminForm").validate();
		});
	</script>
'; ?>


<div align="center" class="centermain"> 
	<div class="main">
<table class="adminheading">
    <tr>
      <th class="cursos">
	    Editando curso: <?php echo $this->_tpl_vars['catedra']; ?>

      </th>
    </tr>
    </table>
<table cellspacing="0" cellpadding="0" width="100%">
    <tr>
      <td width="50%" valign="top">
      <table width="100%" class="adminform">
        <tr>
          <td>
         <form name="adminForm" id="adminForm" method="post" 
               action="index2.php?com=cursos&do=view">
          <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <th colspan="6">Detalles</th>
            </tr>
            <tr>
            <td class="headlines">Tutor: </td>
             <td>
                <select name="tutor_id" id="tutor_id" class="required">
					<option value="">--</option>
		  			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tutores'],'selected' => $this->_tpl_vars['tutor_id']), $this);?>

				  </select> 
			 </td>
              <td  class="headlines">Catedra</td>
              <td>
                  <select name="catedra_id" id="catedra_id" class="required">
					<option value="">--Seleccione--</option>
		  			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['catedras'],'selected' => $this->_tpl_vars['catedra_id']), $this);?>

				  </select> 
              </td>
            </tr>
            <tr>
            <td class="headlines">Grupo: </td>
             <td>
                <select name="grupo" id="grupo" class="required">
					<option value="">--</option>
		  			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['grupos'],'selected' => $this->_tpl_vars['grupo']), $this);?>

				  </select> 
			 </td>
              <td  class="headlines"></td>
              <td>
              </td>
            </tr>
            <tr>
              <td class="headlines">Periodo</td>
              <td>
                  <select name="periodo_id" id="periodo_id" class="required">
					<option value="">--</option>
		  			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['periodos'],'selected' => $this->_tpl_vars['periodo_id']), $this);?>

				  </select> 
              </td>
              <td class="headlines">Día</td>
              <td>
                  <select name="dia" id="dia" class="required">
					<option value="">--</option>
		  			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['dias'],'selected' => $this->_tpl_vars['dia']), $this);?>

				  </select> 
              </td>
            </tr>
            <tr>
              <td class="headlines">Hora</td>
              <td>
                  <select name="hora" id="hora" class="required">
					<option value="">--</option>
		  			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['horas'],'selected' => $this->_tpl_vars['hora']), $this);?>

				  </select> 
              </td>
              <td class="headlines">Estado</td>
              <td>
                   <select name="estado" id="estado" class="required">
					<option value="">--</option>
		  			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['estados'],'selected' => $this->_tpl_vars['estado']), $this);?>

				  </select>
              </td>
            </tr>
            <tr>
              <td class="headlines">
                  <input type="hidden" name="do_edit" value="do" />
                  <input type="hidden" name="cid" value="<?php echo $this->_tpl_vars['cid']; ?>
" />
              </td>
              <td><input type="submit" name="Submit" value="Enviar" /> <input type="button" name="Cancelar" value="Cancelar" onClick="location.href='index2.php?com=cursos'"></td>
              <td></td>
              <td>&nbsp;</td>
            </tr>
          </table>
           </form>
          </td>
        </tr>
      </table>
    
	  </td>
      <td width="1%">&nbsp;</td>
      	<td width="49%" valign="top">
	<div class="tab-page" id="pdetails-pane">
	  <?php echo '
	  <script type="text/javascript">
	    var tabPane1 = new WebFXTabPane( document.getElementById( "pdetails-pane" ), 1 );
	  </script>
	  '; ?>

	  <!--  inicio tab info -->
	  <div class="tab-page" id="info-page">
	    <h2 class="tab">Agenda</h2>
	    <?php echo '
	    <script type="text/javascript">
	      tabPane1.addTabPage( document.getElementById( "info-page" ) );
	    </script>
	    
	    '; ?>

	    <?php if ($this->_tpl_vars['agenda'] != 0): ?>
	    <table width="100%" class="adminform">
			        <tr>
			          <td>
		                  <table width="100%" cellspacing="0" cellpadding="0">
						    <tr>
							  <th>ID</th>
							  <th>Comentarios</th>
							  <th>Fecha de Carga</th>
							  <th>Acciones</th>
							</tr>
							<tr>
							   <td> <?php echo $this->_tpl_vars['agenda']['id']; ?>
</td>
							   <td> <?php echo $this->_tpl_vars['agenda']['comentarios']; ?>
</td>
							   <td> <?php echo $this->_tpl_vars['agenda']['fecha']; ?>
</td>
							   <td>
							       <a href="files/<?php echo $this->_tpl_vars['cid']; ?>
.pdf" target="_blank">Ver PDF</a> | 
							       <a href="index2.php?com=cursos&do=borrarAgenda&cid=<?php echo $this->_tpl_vars['cid']; ?>
">Borrar</a>
							   </td>
							</tr>
					      </table>
			         </td>
			      </tr>
				</table>
	   <?php else: ?>
	       No se ha cargado agenda para este curso. <a href="index2.php?com=cursos&do=cargarAgenda&cid=<?php echo $this->_tpl_vars['cid']; ?>
&tutor_id=<?php echo $this->_tpl_vars['tutor_id']; ?>
">Cargar ahora</a>
	   <?php endif; ?>
	  </div>
	  <!-- fin tab info -->
		   </div><!-- cierre pestañas -->
		</td>
	</tr>
</table>
</div>
</div>