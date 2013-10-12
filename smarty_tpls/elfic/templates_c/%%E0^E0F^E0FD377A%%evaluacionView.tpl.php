<?php /* Smarty version 2.6.26, created on 2012-05-10 06:27:07
         compiled from evaluacion/evaluacionView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'evaluacion/evaluacionView.tpl', 39, false),)), $this); ?>
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
            <table width="100%" cellspacing="0" cellpadding="0">
			    <tr>
				  <th colspan="2">Evaluación de <?php echo $this->_tpl_vars['tutor']; ?>
</th>
				</tr>
				<tr>
				   <td class="headlines" valign="top">Asignatura</td>
				   <td><strong><?php echo $this->_tpl_vars['curso']; ?>
</strong></td>
				</tr>
				<tr>
				   <td class="headlines" valign="top">Su concepto del tutor es:</td>
				   <td><strong><?php echo $this->_tpl_vars['concepto']; ?>
</strong></td>
				</tr>
				<tr>
				   <td colspan="2"><hr size="1"></td>
				</tr>
				<tr>
				<td colspan="2">
				<table class="adminlist">
				    <tr>
					  <th class="title">Pregunta</th>
				      <th class="title">Respuesta</th>
				    </tr>
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
				      <!--<td class="title"><?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['id']; ?>
</th>-->
				      <td class="title"><?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['pregunta']; ?>
:</th>
				      <td class="title"><strong><?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['respuesta']; ?>
</strong></th>
				    </tr>
				    <?php endfor; else: ?>
				    <tr>
				      <td colspan="7">No se han registrado cursos</td>
				    </tr>
				    <?php endif; ?>
				  </table>
				</td>
				</tr>
			   </table>
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