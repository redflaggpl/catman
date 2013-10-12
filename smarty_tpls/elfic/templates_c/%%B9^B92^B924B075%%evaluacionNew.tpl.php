<?php /* Smarty version 2.6.26, created on 2012-06-05 17:48:09
         compiled from evaluacion/evaluacionNew.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'evaluacion/evaluacionNew.tpl', 54, false),)), $this); ?>
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
      <th class="questsnew">
		Evaluación de Tutores: 
      </th>
    </tr>
    </table>
<table cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td width="70%" valign="top">
      <table width="100%" class="adminform">
        <tr>
          <td>
            <form name="adminForm" id="adminForm" method="post" action="index2.php?com=evaluacion&do=set">
 			  <table width="100%" cellspacing="0" cellpadding="0">
			    <tr>
				  <th colspan="2">Evaluación de <?php echo $this->_tpl_vars['tutor']; ?>
</th>
				</tr>
				<tr>
				   <td class="headlines" valign="top">Asignatura</td>
				   <td><?php echo $this->_tpl_vars['curso']; ?>
</td>
				</tr>
				<tr>
				   <td class="headlines" valign="top">Su concepto del tutor es:</td>
				   <td>
				       <select name="concepto_tutor" id="concepto_tutor" class="required">
				           <option value="">--</option>
				           <option value="Excelente">Excelente</option>
				           <option value="Bueno">Bueno</option>
				           <option value="Regular">Regular</option>
				           <option value="Malo">Malo</option>
				       </select>
                   </td>
				</tr>
				<tr>
				   <td colspan="2"><hr size="1"></td>
				</tr>
				<tr>
				<td colspan="2">
				<table class="adminlist">
				   <?php unset($this->_sections['row']);
$this->_sections['row']['name'] = 'row';
$this->_sections['row']['loop'] = is_array($_loop=$this->_tpl_vars['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['row']['show'] = true;
$this->_sections['row']['max'] = $this->_sections['row']['loop'];
$this->_sections['row']['step'] = 1;
$this->_sections['row']['start'] = $this->_sections['row']['step'] > 0 ? 0 : $this->_sections['row']['loop']-1;
if ($this->_sections['row']['show']) {
    $this->_sections['row']['total'] = $this->_sections['row']['loop'];
    if ($this->_sections['row']['total'] == 0)
        $this->_sections['row']['show'] = false;
} else
    $this->_sections['row']['total'] = 0;
if ($this->_sections['row']['show']):

            for ($this->_sections['row']['index'] = $this->_sections['row']['start'], $this->_sections['row']['iteration'] = 1;
                 $this->_sections['row']['iteration'] <= $this->_sections['row']['total'];
                 $this->_sections['row']['index'] += $this->_sections['row']['step'], $this->_sections['row']['iteration']++):
$this->_sections['row']['rownum'] = $this->_sections['row']['iteration'];
$this->_sections['row']['index_prev'] = $this->_sections['row']['index'] - $this->_sections['row']['step'];
$this->_sections['row']['index_next'] = $this->_sections['row']['index'] + $this->_sections['row']['step'];
$this->_sections['row']['first']      = ($this->_sections['row']['iteration'] == 1);
$this->_sections['row']['last']       = ($this->_sections['row']['iteration'] == $this->_sections['row']['total']);
?>
				    <tr bgcolor="<?php echo smarty_function_cycle(array('values' => "#f4f4f4,#e8e8e8"), $this);?>
" onmouseover="rowOverEffect(this)" 
				       onmouseout="rowOutEffect(this)">
				      <td class="title"><?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['id']; ?>
</th>
				      <td class="title"><?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['pregunta']; ?>
</th>
				    </tr>
				    <tr>
				       <td colspan="2">
				           <!--<select name="respuesta[<?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['id']; ?>
]" class="required">
				               <option value="">--</option>
				               <option value="1">Si</option>
				               <option value="0">No</option>
				           </select>-->
				           Si <input type="radio" name="respuesta[<?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['id']; ?>
]" value="1" class="required">
				           No <input type="radio" name="respuesta[<?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['id']; ?>
]" value="0" >
				       </td>
				    </tr>
				    <?php endfor; else: ?>
				    <tr>
				      <td colspan="7">No se han registrado cursos</td>
				    </tr>
				    <?php endif; ?>
				  </table>
				</td>
				</tr>
			     <tr>
			       <td>
			         <input type="hidden" id="do_save" name="do_save" value="do">
			         <input type="hidden" id="tutor_id" name="tutor_id" value="<?php echo $this->_tpl_vars['tutor_id']; ?>
">
			         <input type="hidden" id="curso_id" name="curso_id" value="<?php echo $this->_tpl_vars['cid']; ?>
">
			       </td>
			       <td>
			           <input type="submit" name="Submit" value="Enviar" />
			           <input type="button" name="Cancelar" value="Cancelar"
			               onClick="location.href='index2.php?com=evaluacion'"></td>
			     </tr>
			   </table>
		     </form>
	       </td>
	     </tr>
	  </table>
	</td>
    <td width="1%">&nbsp;</td>
    <td width="29%" valign="top">
	  <div class="tab-page" id="pdetails-pane">
	    <?php echo '
		  <script type="text/javascript">
		    var tabPane1 = new WebFXTabPane( document.getElementById( "pdetails-pane" ), 1 );
		  </script>
		'; ?>

		<!-- incia tab +info -->
	      <div class="tab-page" id="info-page">
	       <h2 class="tab">+ Info</h2>
	         <?php echo '
	           <script type="text/javascript">
	             tabPane1.addTabPage( document.getElementById( "info-page" ) );
	           </script>
	         '; ?>

	         Directrices a tener en cuenta durante la elaboración de la evaluación
		  </div>
		 <!-- fin tab +info -->
	  </div><!-- cierre tabs -->
    </td>
  </tr>
</table>
</div>
</div><br></br>