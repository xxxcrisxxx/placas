<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de placas</title>
</head>

<body>
    <main class="main">
        <section class="section-form">
            <form method="GET" action="./Functions/generate.php">
                <div class="inputs-group">
                    <label for="">Selecciona una provincia</label>
                    <select name="provincia" id="" required>
                        <option value="">Selecciona una provincia</option>
                        <option value="G">Guayas</option>
                        <option value="P">Pichincha</option>
                        <option value="M">Manabi</option>
                        <option value="A">Azuay</option>
                        <option value="Y">Santa Elena</option>
                        <option value="L">Loja</option>
                        <option value="O">El Oro</option>
                        <option value="N">Napo</option>
                        <option value="Q">Orellana</option>
                        <option value="C">Carchi</option>
                    </select>
                </div>
                <div class="inputs-group">
                    <label for="">Vehículos comerciales (taxis o autobuses) A, U, Z | Vehículos de uso oficial X | Vehículo particular P</label>
                    <input type="text" placeholder="ingresa el tipo de vehiculo" name="type">
                </div>
                <button type="submit">Generar placa</button>
            </form>
        </section>
    </main>
</body>

</html>