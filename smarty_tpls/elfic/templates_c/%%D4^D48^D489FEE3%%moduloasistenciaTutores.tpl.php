<?php /* Smarty version 2.6.26, created on 2012-04-24 05:31:07
         compiled from home/moduloasistenciaTutores.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'home/moduloasistenciaTutores.tpl', 11, false),)), $this); ?>
<div id="modulo">
    <form action="index2.php?com=<?php echo $this->_tpl_vars['link']; ?>
" method="post">
    <table width="300" class="adminlist">
    	<tr>
    	    <th><?php echo $this->_tpl_vars['nombre']; ?>
</th>
    	</tr>
    	<tr>
    		<td>Cursos: 
    		    <select name="curso_id">
    		        <option value="">-Curso-</option>
				   <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['data']), $this);?>

				</select>
				<input type="submit" value="Registrar" id="submit" name="submit">
				<input type="hidden" value="setInTutor" name="do" id="do">
    		</td>
        </tr>
    </table>
    </form>
</div>