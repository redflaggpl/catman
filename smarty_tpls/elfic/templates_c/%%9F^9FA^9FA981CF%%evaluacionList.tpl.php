<?php /* Smarty version 2.6.26, created on 2012-05-10 09:12:48
         compiled from evaluacion/evaluacionList.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'evaluacion/evaluacionList.tpl', 49, false),)), $this); ?>
<br />
<?php if ($this->_tpl_vars['msg'] != ''): ?>
<div class="message">
  <?php echo $this->_tpl_vars['msg']; ?>

</div>
<?php endif; ?>

<div align="center" class="centermain">
  <div class="main">
    <table class="adminheading">
    <tr>
      <th class="evaluacion">
        Evaluación de Tutores: 
      </th>
      <th width="500">
          <table width="600" >
      	    <tr>
      	        <td>
      	            <form id="searchform" action="index2.php?com=evaluacion" method="post">
			        <div id = "searchcontainer">
			          <div id="searchfield">Tutor: 
				        <input type="text" name="tutor" id="tutor" value=<?php echo $this->_tpl_vars['tutor']; ?>
>
				        </div>
				        <div id="searchfield">
					        Curso: 
					         <input type="text" name="curso" id="curso" value=<?php echo $this->_tpl_vars['curso']; ?>
>
				        </div>
				        <div id="searchfield">
				        	<input type="submit" label="Filtrar" value="filtrar">
				        </div>
			        </div>
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
      <th class="title">Estudiante</th>
      <th class="title">Tutor</th>
      <th class="title">Curso</th>
      <th class="title">Concepto</th>
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
       onmouseout="rowOutEffect(this)" onclick="document.location.href='?com=evaluacion&do=getEval&eid=<?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['id']; ?>
'">
      <td><?php echo $this->_sections['row']['iteration']; ?>
</td>
      <td><?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['id']; ?>
</td>
      <td><?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['estudiante']; ?>
</td>
      <td><?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['tutor']; ?>
</td>
      <td><?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['curso']; ?>
</td>
      <td><?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['concepto']; ?>
</td>
    </tr>
    <?php endfor; else: ?>
    <tr>
      <td colspan="7">No se han registrado evaluaciones</td>
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
<div id="break"></div>
</div>
