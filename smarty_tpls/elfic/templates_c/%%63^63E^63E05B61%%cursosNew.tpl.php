<?php /* Smarty version 2.6.26, created on 2012-08-08 18:48:37
         compiled from cursos/cursosNew.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'cursos/cursosNew.tpl', 38, false),)), $this); ?>
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
	Nuevo curso
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
               action="index2.php?com=cursos&do=new">
          <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <th colspan="6">Detalles</th>
            </tr>
            <tr>
            <td class="headlines">Tutor: </td>
             <td>
                <select name="tutor_id" id="tutor_id" class="required">
					<option value="">--</option>
		  			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tutores']), $this);?>

				  </select> 
			 </td>
              <td  class="headlines">Programa</td>
              <td>
                  <select name="programas_id" 
                          id="programas_id" class="required" onchange="getCatedras();">
                          <option value="">--</option>
					<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['programas']), $this);?>

				  </select> 
              </td>
            </tr>
            <tr>
            <td class="headlines">Grupo: </td>
             <td>
                <select name="grupo" id="grupo" class="required">
					<option value="">--</option>
		  			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['grupos']), $this);?>

				  </select> 
			 </td>
              <td  class="headlines"></td>
              <td>
              </td>
            </tr>
             <tr>
            <td class="headlines">Semestre: </td>
             <td>
                <select name="semestre" id="semestre" class="required" onchange="getCatedras();">
					<option value="">--</option>
		  			<option value="1">1</option>
		  			<option value="2">2</option>
		  			<option value="3">3</option>
		  			<option value="4">4</option>
		  			<option value="5">5</option>
		  			<option value="6">6</option>
		  			<option value="7">7</option>
		  			<option value="8">8</option>
		  			<option value="9">9</option>
		  			<option value="10">10</option>
				  </select> 
			 </td>
              <td  class="headlines">Catedra</td>
              <td>
              <div id="catedrascombo"></div>
              </td>
            <tr>
              <td class="headlines">Periodo</td>
              <td>
                  <select name="periodo_id" id="periodo_id" class="required">
					<option value="">--</option>
		  			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['periodos']), $this);?>

				  </select> 
              </td>
              <td class="headlines">Día</td>
              <td>
                  <select name="dia" id="dia" class="required">
					<option value="">--</option>
		  			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['dias']), $this);?>

				  </select> 
              </td>
            </tr>
            <tr>
              <td class="headlines">Hora</td>
              <td>
                  <select name="hora" id="hora" class="required">
					<option value="">--</option>
		  			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['horas']), $this);?>

				  </select> 
              </td>
              <td class="headlines">Estado</td>
              <td>
                   <select name="estado" id="estado" class="required">
					<option value="">--</option>
		  			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['estados']), $this);?>

				  </select>
              </td>
            </tr>
            <tr>
              <td class="headlines">
                  <input type="hidden" name="do_save" value="do" />
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
	    <h2 class="tab">Información</h2>
	    <?php echo '
	    <script type="text/javascript">
	      tabPane1.addTabPage( document.getElementById( "info-page" ) );
	    </script>
	    '; ?>

	  </div>
	  <!-- fin tab info -->
		   </div><!-- cierre pestañas -->
		</td>
	</tr>
</table>
</div>
</div>