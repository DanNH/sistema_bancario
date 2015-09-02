@extends('App.app')
@section('content')
<html>
<head>
	   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! Html::style('assets/css/option.css')!!}
    {!! Html::script('assets/external/jquery/jquery.js') !!}
    {!! Html::script('assets/jquery-ui.min.js') !!}
    {!! Html::script('assets/js/balumno.js') !!}
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>
 
				<div class="panel-body">
					<table height="50px">
					<tr>
					<td width="70px" height="40px">Codigo</td>
					<td>
						<input type="text" size="20" id="f_codigo" >
						<input type="button"  value="B" onclick="winbuscaralumno()">
					</td>	
					</tr>
					<tr><td height="40px">Usuario</td>
						<td><div id="cbousuarios">
							{!! Form::select('usuario', $users,null,['class'=>'combo','onChange'=>'cbousuario(this.options[this.selectedIndex].value)']) !!}
							 </div>
						</td>
				</table>
				
				</div>
			</div>
		</div>
	</div>
</div>

<div id="winbuscaralumno" title="Buscar Alumno">
<table class="formulario" cellpadding="0" cellspacing="0" width="100%">
<tr>
	<td width="130px">Apellido Paterno</td>
	<td width="180px"><input type="text" size="20" id="b_apaterno" name="b_apaterno" class="flatNavBA" tabindex="1" /></td>
	<td width="90px">Sucursal</td>
	<td>Todos</td>
</tr>
<tr>
	<td>Apellido Materno</td>
	<td><input type="text" size="20" id="b_amaterno" name="b_amaterno" class="flatNavBA" tabindex="2" /></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>Nombres</td>
	<td><input type="text" size="20" id="b_nombres" name="b_nombres" class="flatNavBA" tabindex="3" /></td>
	<td><input type="button" class="bbutton" value="Buscar" onclick="fnbuscaralumno()" tabindex="4" ></td>
	<td></td>
</tr>
<tr>
	<td colspan="3"><strong>RESULTADO</strong></td>
	<td align="right"><span id="b_resultado" name="b_resultado"></span></td>
</tr>
<tr>
	<td colspan="4"><div id="b_grilla" name="b_grilla" class="divgrid"></div></td>
</tr>
</table>
</div>
</body>
</html>
<div id="lista" title="listado">
@endsection