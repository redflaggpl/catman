<?php /* Smarty version 2.6.26, created on 2012-08-09 12:33:49
         compiled from asistencia/asistenciaTutoresList.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'asistencia/asistenciaTutoresList.tpl', 93, false),array('function', 'cycle', 'asistencia/asistenciaTutoresList.tpl', 132, false),)), $this); ?>
<br />
<?php if ($this->_tpl_vars['msg'] != ''): ?>
<div class="message">
  <?php echo $this->_tpl_vars['msg']; ?>

</div>
<?php endif; ?>
<?php echo '
    <script src="js/ajax.js" type="text/javascript"></script>
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script src="js/jquery.validate.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
    	$("#searchform").validate();
		});
	</script>
'; ?>

<?php echo '
<script language="javascript" type="text/javascript">


    // This function gets called when the end-user clicks on some date.
    function selected(cal, date) {
	cal.sel.value = date; // just update the date in the input field.
	if (cal.dateClicked && cal.sel.id == "nonexistent")
	// if we add this call we close the calendar on single-click.
	// just to exemplify both cases, we are using this only for the 1st
	// and the 3rd field, while 2nd and 4th will still require double-click.
	cal.callCloseHandler();
    }

    // And this gets called when the end-user clicks on the _selected_ date,
    // or clicks on the "Close" button.  It just hides the calendar without
    // destroying it.
    function closeHandler(cal) {
	cal.hide();                        // hide the calendar
	//  cal.destroy();
	_dynarch_popupCalendar = null;
    }

    // This function shows the calendar under the element having the given id.
    // It takes care of catching "mousedown" signals on document and hiding the
    // calendar if the click was outside.
    function showCalendar(id, format, showsTime, showsOtherMonths) {
	var el = document.getElementById(id);
	if (_dynarch_popupCalendar != null) {
	    // we already have some calendar created
	    _dynarch_popupCalendar.hide();                 // so we hide it first.
	} else {
	    // first-time call, create the calendar.
	    var cal = new Calendar(1, null, selected, closeHandler);
	    // uncomment the following line to hide the week numbers
	    // cal.weekNumbers = false;
	    if (typeof showsTime == "string") {
		cal.showsTime = true;
		cal.time24 = (showsTime == "24");
	    }
	    if (showsOtherMonths) {
		cal.showsOtherMonths = true;
	    }
	    _dynarch_popupCalendar = cal;                  // remember it in the global var
	    cal.setRange(1900, 2070);        // min/max year allowed.
	    cal.create();
	}
	_dynarch_popupCalendar.setDateFormat(format);    // set the specified date format
	_dynarch_popupCalendar.parseDate(el.value);      // try to parse the text in field
	_dynarch_popupCalendar.sel = el;                 // inform it what input field we use

	// the reference element that we pass to showAtElement is the button that
	// triggers the calendar.  In this example we align the calendar bottom-right
	// to the button.
	_dynarch_popupCalendar.showAtElement(el, "Br");        // show the calendar

	return false;
    }
    </script>
    '; ?>

<div align="center" class="centermain">
  <div class="main">
    <table class="adminheading">
    <tr>
      <th class="asistencia-tut">
        Control de Asistencia Tutores
      </th>
      <th width="600">
          <table width="600" >
      	    <tr>
      	        <td>
      	            <form id="searchform" action="index2.php?com=asistencia" method="post">
			        <div id = "searchcontainer">
			          <div id="searchfield">Tutor: 
				        <select name="tutor" id="tutor" onChange="getCursosTutor();">
				           <option value="">--</option>
				           <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['tutores'],'selected' => $this->_tpl_vars['sel_tutor']), $this);?>

				        </select>
				        </div>
				        <div id="searchfield">
				        <div id="cursoscombo">
				        Curso: 
				        <select name="catedra" id="catedra" >
				           <option value="">--</option>
				           <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['cursos'],'selected' => $this->_tpl_vars['sel_curso']), $this);?>

				        </select>
				        </div>
				     </div>
				     <div id="searchfield">
				     Fecha Inicial: <input name="fini" type="text" id="fini" size="10" maxlength="10"/>
					<input type="reset" value="..." onClick="return showCalendar('fini', '%Y-%m-%d', '24', true);" />
					Fecha Final: <input name="ffin" type="text" id="ffin" size="10" maxlength="10" />
					<input type="reset" value="..." onClick="return showCalendar('ffin', '%Y-%m-%d', '24', true);" />
					
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
      <th class="title">Tutor</th>
      <th class="title">Entrada</th>
      <th class="title">Salida</th>
      <th class="title">Curso</th>
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
      <td onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)" ><?php echo $this->_tpl_vars['lista'][$this->_sections['row']['index']]['tutor']; ?>
</td>
      <td onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)" ><?php echo $this->_tpl_vars['lista'][$this->_sections['row']['index']]['entrada']; ?>
</td>
      <td onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)" ><?php echo $this->_tpl_vars['lista'][$this->_sections['row']['index']]['salida']; ?>
</td>
      <td onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)" ><?php echo $this->_tpl_vars['lista'][$this->_sections['row']['index']]['catedra']; ?>
 (<?php echo $this->_tpl_vars['lista'][$this->_sections['row']['index']]['grupo']; ?>
) - <?php echo $this->_tpl_vars['lista'][$this->_sections['row']['index']]['dia']; ?>
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