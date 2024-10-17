<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Reporte Entradas</title>  
    <style>  
        body {  
            font-family: Arial, sans-serif;  
            font-size: 12px;  
            margin: 0;  
            padding: 0;  
        }  
        header {  
            text-align: center;  
            margin: 0;  
            padding-top: 0;  
            padding-bottom: 0;  
        }  
        header img {  
            width: 110px;  
            height: 50px;  
            vertical-align: middle;  
        }  
        header h3 {  
            display: inline;  
            margin-left: 10px;  
            vertical-align: middle;  
        }  
        table {  
            border-collapse: collapse;  
            width: 100%;  
            margin: 0 auto;  
            border: 1px solid black;  
        }  
        .table2 {  
            border-collapse: collapse;  
            width: 100%;  
            margin: 0 auto;  
            border: none;  
        }  
        .th2, .td2 {  
            border: none;  
            padding: 8px;  
            text-align: center;  
        }  
        th, td {  
            border: 1px solid black;  
            padding: 1px 4px; /* Reducir el padding para ajustar contenido */  
            text-align: center;  
            margin: 0;  
        }  
        th {  
            background-color: #f2f2f2;  
        }  
        .text-left {  
            text-align: left;  
        }  
        .text-center {  
            text-align: center;  
        }  
        footer {  
            text-align: center;  
            margin-top: 50px;  
        }  
        .container {  
            position: relative;  
        }  
        .card-body {  
            margin-top: 0;  
            padding-top: 0;  
        }  
        .footer-text {  
            position: fixed;  
            bottom: 0;  
            width: 100%;  
            text-align: center;  
            padding-bottom: 10px;  
        }  
    </style>  
</head>  
<body>  
    <header>  
        <table class="table2">  
            <tr class="tr2">  
                <td class="td2"><h3>Instituto de Educación Superior Tecnológico Público La Salle</h3></td>  
            </tr>  
        </table>  
        <hr style="margin-top: 0;">  
    </header>  
    <section>  
        <div class="container">  
            <div class="card-body">  
                <h2 style="text-align: center; margin-top: 0;">Lista de Entradas</h2>  
                <table id="comprobante" class="table table-bordered table-striped"> 
                    <thead> 
                        <tr> 
                            <th>Id</th> 
                            <th>Estudiante</th> 
                            <th>Programa</th> 
                            <th>Dni</th> 
                            <th>Monto</th> 
                            <th>Rubro</th> 
                            <th>Fecha</th> 
                            <th>Semestre</th> 
                            <th>Descripción</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        @foreach ($comprobantes as $comprobante) 
                        <tr> 
                            <td>{{ $comprobante->id }}</td> 
                            <td>{{ $comprobante->estudiante ? $comprobante->estudiante->nombre . ' ' . $comprobante->estudiante->apellido : 'No asignado' }}</td> 
                            <td>{{ $comprobante->estudiante ? $comprobante->estudiante->programa->nombre_programa : 'No asignado' }}</td> 
                            <td>{{ $comprobante->estudiante ? $comprobante->estudiante->dni : 'No asignado' }}</td> 
                            <td>{{ $comprobante->rubro ? $comprobante->rubro->monto : 'No asignado' }}{{ $comprobante->precionuevo }}</td> 
                            <td>{{ $comprobante->rubro ? $comprobante->rubro->nombre_rubro : 'No asignado' }}</td> 
                            <td>{{ $comprobante->estado }}</td>
                            <td>{{ $comprobante->fecha }}</td> 
                            <td>{{ $comprobante->semestre }}</td> 
                        </tr> 
                        @endforeach 
                    </tbody> 
                </table> 
            </div>  
            <div 
            class="footer-text">  
                <hr>  
                <p>Responsable de Sistema de Información  &copy;</p>  
            </div>  
        </div>  
    </section>  
</body>  
</html>