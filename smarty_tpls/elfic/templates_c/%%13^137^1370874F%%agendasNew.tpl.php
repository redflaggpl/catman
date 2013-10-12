<?php /* Smarty version 2.6.26, created on 2012-05-07 15:53:12
         compiled from cursos/agendasNew.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'cursos/agendasNew.tpl', 39, false),)), $this); ?>
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
      <th class="agendas">
	    Cargar Agenda
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
               action="index2.php?com=cursos&do=cargarAgenda" enctype="multipart/form-data">
          <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <th colspan="6">Detalles</th>
            </tr>
            <tr>
            <td class="headlines">Tutor: </td>
             <td>
             <?php if ($this->_tpl_vars['tutores'] != 'false'): ?>
                <select name="tutor_id" id="tutor_id" class="required">
					<option value="">--</option>
		  			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tutores'],'selected' => $this->_tpl_vars['tutor_id']), $this);?>

				  </select> 
			 <?php else: ?>
			    <?php echo $this->_tpl_vars['tutor']; ?>

			    <input type="hidden" value="<?php echo $this->_tpl_vars['tutor_id']; ?>
">
			 <?php endif; ?>
			 </td>
              <td  class="headlines">Curso</td>
              <td>
                  <select name="curso_id" id="curso_id" class="required">
					<option value="">--Seleccione--</option>
		  			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['cursos'],'selected' => $this->_tpl_vars['curso']), $this);?>

				  </select> 
              </td>
            <tr>
            <tr>
                <td class="headlines">Cargar PDF</td>
	            <td colspan="3">
	            <input id="agenda" type="file" name="agenda" />
	            </td>
            </tr>
              <td class="headlines" valign="top">Comentarios</td>
              <td colspan="3">
                  <textarea id="comentarios" cols="50" rows="10" ></textarea>
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