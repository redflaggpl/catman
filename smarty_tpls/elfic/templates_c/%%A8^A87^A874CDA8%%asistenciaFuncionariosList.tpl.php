<?php /* Smarty version 2.6.26, created on 2012-05-07 14:06:51
         compiled from asistencia/asistenciaFuncionariosList.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'asistencia/asistenciaFuncionariosList.tpl', 30, false),array('function', 'cycle', 'asistencia/asistenciaFuncionariosList.tpl', 50, false),)), $this); ?>
<br />
<?php if ($this->_tpl_vars['msg'] != ''): ?>
<div class="message">
  <?php echo $this->_tpl_vars['msg']; ?>

</div>
<?php endif; ?>
<?php echo '
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
      <th class="asistencia">
        Control de Asistencia Funcionarios
      </th>
      <th width="400">
          <table width="400" >
      	    <tr>
      	        <td>
      	           <form id="searchform" action="index2.php?com=asistencia&do=list_fun" method="post">
			        Funcionario: <select name="funcionario" id="funcionario">
			           <option value="">--</option>
			            <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['funcionarios'],'selected' => $this->_tpl_vars['sel_func']), $this);?>

			        </select>
			        <input type="submit" label="Filtrar" value="filtrar">
			     </form>
      	        </td>
      	    </tr>
    	</table>
    </th>
    </tr>
    </table>
    <table class="adminlist">
    <tr>
      <th class="title">#</th>
       <th class="title">ID</th>
      <th class="title">Funcionario</th>
      <th class="title">Entrada</th>
      <th class="title">Salida</th>
      <th class="title">Comentarios</th>
    </tr>
   <?php unset($this->_sections['row']);
$this->_sections['row']['name'] = 'row';
$this->_sections['row']['loop'] = is_array($_loop=$this->_tpl_vars['lista']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
">
      <td><?php echo $this->_sections['row']['iteration']; ?>
</td>
      <td><?php echo $this->_tpl_vars['lista'][$this->_sections['row']['index']]['id']; ?>
</td>
      <td onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)" ><?php echo $this->_tpl_vars['lista'][$this->_sections['row']['index']]['funcionario']; ?>
</td>
      <td onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)" ><?php echo $this->_tpl_vars['lista'][$this->_sections['row']['index']]['entrada']; ?>
</td>
      <td onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)" ><?php echo $this->_tpl_vars['lista'][$this->_sections['row']['index']]['salida']; ?>
</td>
      <td onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)" ><?php echo $this->_tpl_vars['lista'][$this->_sections['row']['index']]['comentarios']; ?>
</td>
    </tr>
    <?php endfor; else: ?>
    <tr>
      <td colspan="8">No hay encuestas disponibles</td>
    </tr>
    <?php endif; ?>
    </table>
   
    <table class="adminlist">
		<tr>
			<th align="center" colspan="2"><?php echo $this->_tpl_vars['anchors']; ?>
</th>
		</tr>
		<tr>
			<th align="center" colspan="2"><?php echo $this->_tpl_vars['total']; ?>
</th>
		</tr>
	</table>
  </div>
</div>
<div id="break">
</div>