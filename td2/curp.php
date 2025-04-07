<!DOCTYPE html>

<head>
    <title>Obtener CURP</title>
</head>
<body>
    <h1 style="text-align: center;">Formulario para CURP</h1>
    <form method="POST" action="calcular_curp.php" style="width: 50%; margin: 0 auto;">
        <label for="pname">Nombres:</label><br>
        <input type="text" id="p_name" name="p_name" required><br><br>
        
        <label for="p_apellido">Primer Apellido:</label><br>
        <input type="text" id="p_apellido" name="p_apellido" required><br><br>
        
        <label for="s_apellido">Segundo Apellido:</label><br>
        <input type="text" id="s_apellido" name="s_apellido" required><br><br>
        
        <label for="fecha">Día de Nacimiento:</label><br>
        <select id="fecha" name="fecha" required>
            <?php for ($i = 1; $i <= 31; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select><br><br>
        
        <label for="mes">Mes de Nacimiento:</label><br>
        <select id="mes" name="mes" required>
            <?php 
            $meses = [
                "enero", "febrero", "marzo", "abril", "mayo", "junio", 
                "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"
            ];
            foreach ($meses as $index => $mes): ?>
                <option value="<?= $index + 1 ?>"><?= $mes ?></option>
            <?php endforeach; ?>
        </select><br><br>
        
        <label for="anio">Año de Nacimiento:</label><br>
        <select id="anio" name="anio" required>
            <?php for ($i = date("Y"); $i >= 1900; $i--): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select><br><br>
        
        <label for="sexo">Sexo:</label><br>
        <input type="radio" id="sexo_hombre" name="sexo" value="hombre" required> Hombre<br>
        <input type="radio" id="sexo_mujer" name="sexo" value="mujer" required> Mujer<br><br>
        
        <label for="estado">Estado:</label><br>
        <select id="estado" name="estado" required>
            <option value="aguascalientes">Aguascalientes</option>
            <option value="baja california">Baja California</option>
            <option value="baja california sur">Baja California Sur</option>
            <option value="campeche">Campeche</option>
            <option value="chiapas">Chiapas</option>
            <option value="chihuahua">Chihuahua</option>
            <option value="coahuila">Coahuila</option>
            <option value="colima">Colima</option>
            <option value="durango">Durango</option>
            <option value="guanajuato">Guanajuato</option>
            <option value="guerrero">Guerrero</option>
            <option value="hidalgo">Hidalgo</option>
            <option value="jalisco">Jalisco</option>
            <option value="mexico">México</option>
            <option value="michoacan">Michoacán</option>
            <option value="morelos">Morelos</option>
            <option value="nayarit">Nayarit</option>
            <option value="nuevo leon">Nuevo León</option>
            <option value="oaxaca">Oaxaca</option>
            <option value="puebla">Puebla</option>
            <option value="queretaro">Querétaro</option>
            <option value="quintana roo">Quintana Roo</option>
            <option value="san luis potosi">San Luis Potosí</option>
            <option value="sinaloa">Sinaloa</option>
            <option value="sonora">Sonora</option>
            <option value="tabasco">Tabasco</option>
            <option value="tamaulipas">Tamaulipas</option>
            <option value="tlaxcala">Tlaxcala</option>
            <option value="veracruz">Veracruz</option>
            <option value="yucatan">Yucatán</option>
        </select><br><br>
        
        <button type="submit">Calcular CURP</button>
    </form>
</body>
</html>