<?php

				require_once("Config/usuario/conexion.php");
?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>| Sistema Registro | </title>

        <!-- LLAMANDO A TODOS LOS ESTILOS-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <link  rel="stylesheet" href="plugin/BT/estilo_tabla.css">
        <link  rel="stylesheet" href="plugin/dist/sweetalert2.css">
       <link  rel="stylesheet" href="plugin/dist/sweetalert2.css">
       
        <style>
           #botones
             {
                 float:left;
                 padding-left:0px;
                               
             }
            #boton1,boton2,boton3
             {
                 
                display: inline-block;
                margin-left: 50px;
                margin-bottom: 15px;
                margin-top: 10px;
                 font-weight:bold;
                 
             }
            #contar
             {
                 float:right;
                 padding-right: 50px;
                 color: red;
                               
             }
            #color:hover
            {
            background:#C4CFDA;  
            }
            #boton
            {
                width:170px;
            }
            #boton2
            {
                width:170px;
            }
            #act,#act2
             {
                 width: 170px;
             }    
            #contener
            {
                width:95%;
                font-family: "comic sans ms";
                text-align: center;
                font-weight: bold;
            }

            #container 
            {
	height: 400px; 
	min-width: 310px; 
	max-width: 800px;
    width:700px;
	float:left;
}
            #container2
            {
	height: 400px; 
	min-width: 310px; 
	max-width: 800px;
    width:620px;
	float:right;
}
            #container3
            {
margin-top:450px;
}
        </style>
    </head>
    <body class="nav-md">                                                  <!-- LLAMAMOS A LA FUNCION VIEWDATA PARA QUE NOS CARGUE DATOS EN LA TABLA -->
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col" id="menu">                                      <!-- LA COLUMNA DE OPCIONES TENDRA SOLO 3 COLUMNAS EN BOOTSTRAP -->
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <center><a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>RootPein</span></a></center>
                        </div>
                        <div class="clearfix"></div>
                        <div class="profile">
                            <div class="profile_pic">
                                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Welcome</span>
                                <h2>Jhosep Dominguez</h2>
                            </div>
                        </div>
                        <br />

                        <!-- MENU -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                           <div class="menu_section">
                                <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-table"></i>Gestion de Registros <span class="fa fa-chevron-down"></span></a>             <!-- CREAMOS UNA OPCION QUE TENDRA SUB -OPCIONES-->
                                        <ul class="nav child_menu" style="display: none">
                                         <li><a href="index.html">Registro de Usuarios</a></li>                                                                     <!--SUB-OPCIONES -->  
                                         <li><a href="#">Reporte Estadistico</a></li>                                                                                 <!--SUB-OPCIONES -->
                                        </ul>
                                 </li>  <!-- CERRAMOS LA OPCION CONTENEDORA -->  

                                <li><a><i class="fa fa-table"></i>Gestion de Registros <span class="fa fa-chevron-down"></span></a>                    <!-- CREAMOS UNA OPCION QUE TENDRA SUB -OPCIONES-->
                                        <ul class="nav child_menu" style="display: none">
                                           <li><a href="reporte.html"> Proveedores</a></li>                                                                          <!--SUB-OPCIONES -->  
                                           <li><a href="reporte.html"> Registro de Proveedores</a></li>                                                              <!--SUB-OPCIONES -->  
                                        </ul>
                                </li>

                                <li><a><i class="fa fa-table"></i>Gestion de Registros <span class="fa fa-chevron-down"></span></a> <!-- MODIFICANDO-->
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="tables.html"> Proveedores</a></li>
                                        <li><a href="tables_dynamic.html"> Registro de Proveedores</a></li>
                                    </ul>
                                </li>

                                <li><a><i class="fa fa-table"></i>Gestion de Registros <span class="fa fa-chevron-down"></span></a> <!-- MODIFICANDO-->
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="tables.html"> Proveedores</a></li>
                                        <li><a href="tables_dynamic.html"> Registro de Proveedores</a></li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </div>

                        <div class="menu_section">
                            <h3>Reportes</h3>
                            <ul class="nav side-menu">
                               <li><a><i class="fa fa-windows"></i> Gestion de Reportes <span class="fa fa-chevron-down"></span></a>         <!-- CREAMOS UNA OPCION QUE TENDRA SUB -OPCIONES-->
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="page_404.html">404 Error</a></li>                                                                       <!--SUB-OPCIONES -->   
                                    <li><a href="page_500.html">500 Error</a></li>                                                                        <!--SUB-OPCIONES --> 
                                </ul>                
                                </li>
                            </ul>
                        </div> <!--CERRAMOS LA SECCCION -->  

                        <div class="menu_section">
                            <h3>Listas</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="page_404.html">404 Error</a></li>
                                        <li><a href="page_500.html">500 Error</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="menu_section">
                            <h3>Gestion de Pedido</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-windows"></i> Lista de pedido <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="page_404.html">404 Error</a></li>                                                <!--SUB-OPCIONES -->
                                        <li><a href="page_500.html">500 Error</a></li>                                                <!--SUB-OPCIONES --> 
                                    </ul>
                                </li>
                            </ul>
                        </div>  <!-- CERRANDO LA SECCION --> 

                    </div>
                </div>
            </div>
           
            <!-- LOGIN DERECHO SUPERIOR -->
            <div class="top_nav"> 
                <center><h1><font color="#ffffff">Sistema Administrativo de Registros</font></h1></center>
                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                    <div id="botones">
                    <a href="#myModal" role="button" class="btn btn-custom" data-toggle="modal" id="boton1">Nuevo Usuario</a>                               <!--CREAMOS UN BOTON DONDE LLAMARA A UN MODAL --> 
                    <a href="#myModal" role="button" class="btn btn-custom" data-toggle="modal" id="boton1" style=" font-weight: bold;">Nuevo Usuario</a>  <!--CREAMOS UN BOTON DONDE LLAMARA A UN MODAL --> 
                    <a href="#myModal" role="button" class="btn btn-custom" data-toggle="modal" id="boton2" style=" font-weight: bold;">Reporte PDF</a>   <!--CREAMOS UN BOTON DONDE LLAMARA A UN MODAL --> 
                    <a href="#myModal" role="button" class="btn btn-custom" data-toggle="modal" id="boton3" style=" font-weight: bold;">Reporte Excel</a>   <!--CREAMOS UN BOTON DONDE LLAMARA A UN MODAL -->
                    <a href="#myModal" role="button" class="btn btn-custom" data-toggle="modal" id="boton3" style=" font-weight: bold;">Reporte Excel</a>  <!--CREAMOS UN BOTON DONDE LLAMARA A UN MODAL -->
                    <a href="#myModal" role="button" class="btn btn-custom" data-toggle="modal" id="boton3" style=" font-weight: bold;">Reporte Excel</a>  <!--CREAMOS UN BOTON DONDE LLAMARA A UN MODAL -->
                    <a href="#myModal" role="button" class="btn btn-custom" data-toggle="modal" id="boton3" style=" font-weight: bold;">Reporte Excel</a>  <!--CREAMOS UN BOTON DONDE LLAMARA A UN MODAL -->
                    <a href="#myModal" role="button" class="btn btn-custom" data-toggle="modal" id="boton3" style=" font-weight: bold;">Reporte Excel</a>
                    </div>  
                                     
                     <div id="contar">
                        <img src="images/user.png" id="usuario" hidden=""><label id="con"></label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <img src="images/update.png" id="useract" hidden="" alt="pene" onclick="act();">&nbsp;&nbsp;<label id="con2"></label>
                    </div>
                    
            </nav>
        </div>
    </div>

    <!--CONTENIDO CUERPO --> 
                    <div class="right_col" role="main">
                            <div class="row">        

                                 <br>
                                <div id="container" style="height: 400px">
    
                                </div>
                                <div id="container2" style="height: 400px">
    
                                </div>

                                <div id="container3" style="height: 400px">
    
                                </div>
                                <br> 

                        </div>                          
                                               
                        <center> Sistema de Registros by |<span class="lead"> <i class="fa fa-paw"></i>RootPein</span></center> 
                            
                </div>
        </div>
</div>
            <!-- LLAMAMOS A TODOS LOS SCRIPT  -->
            <script src="plugin/jquery.js"></script>
           <script src="plugin/notify.js"></script> 
           <script src="plugin/notify.min.js"></script>
            <script src="plugin/query_table.js"></script>
            <script  src="plugin/jquery.dataTables.js"></script>
            <script  src="plugin/query_table.js"></script>
            <script  src="plugin/paginar.js"></script>
            <script src="plugin/formato_tabla.js"></script>
            <script src="plugin/bootstrap.min.js"></script>
            <script src="plugin/nicescroll/jquery.nicescroll.min.js"></script>
            <script src="plugin/custom.js"></script>
            <script src="plugin/dist/sweetalert2.min.js"></script>
             <script src="grafico/js/highcharts.js"></script>
            <script src="grafico/js/highcharts-3d.js"></script>
            <script src="grafico/js/modules/exporting.js"></script>
 
            <!-- LLAMAMOS A TODOS LOS SCRIPT  -->
            <script type="text/javascript">
            $(function () {
    $('#container').highcharts({
        chart: {
            type: 'column',
            margin: 95,
            options3d: {
                enabled: true,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Promedio de Registros Mayores de Edad'
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        xAxis: {
            categories: [
            <?php
$sql=pg_query("select count(edad) as contar ,edad from usuario where edad>'18' group by edad order by contar desc");
while($res=pg_fetch_array($sql)){            
?>                  
            
            ['<?php echo $res['edad']; ?>'],
<?php
}
?>
            ]
        },
        yAxis: {
            title: {
                text: null
            }
        },
        series: [{
            name: 'edad',
            data: [
            
            <?php
$sql=pg_query("select count(edad) as contar ,edad from usuario where edad>'18' group by edad order by contar desc");
while($res=pg_fetch_array($sql)){            
?>          
            
            [<?php echo $res['contar'] ?>],
            
<?php
}
?>
            ]
        }]
    });
});

            $(function () {
    $('#container2').highcharts({
        chart: {
            type: 'column',
            margin: 95,
            options3d: {
                enabled: true,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Promedio de Registros Mayores de Edad'
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        xAxis: {
            categories: [
            <?php
$sql=pg_query("select count(edad) as contar ,edad from usuario where edad>'18' group by edad order by contar desc");
while($res=pg_fetch_array($sql)){            
?>                  
            
            ['<?php echo $res['edad']; ?>'],
<?php
}
?>
            ]
        },
        yAxis: {
            title: {
                text: null
            }
        },
        series: [{
            name: 'edad',
            data: [
            
            <?php
$sql=pg_query("select count(edad) as contar ,edad from usuario where edad>'18' group by edad order by contar desc");
while($res=pg_fetch_array($sql)){            
?>          
            
            [<?php echo $res['contar'] ?>],
            
<?php
}
?>
            ]
        }]
    });
});



//SEGUNDO GRAFICO


            //TERCER GRAFICO 
            $(function () {
    $('#container3').highcharts({
        title: {
            text: 'Estadicticas de Registros'
        },
        xAxis: {
            categories: ['2016', '2017', '2018', '2019', '2020']
        },
        labels: {
            items: [{
                html: 'Total Registros',
                style: {
                    left: '50px',
                    top: '18px',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                }
            }]
        },
        series: [{
            type: 'column',
            name: '2016',
            data: [3, 2, 1, 3, 4]
        }, {
            type: 'column',
            name: '2017',
              data: [4, 3, 3, 9, 0]
        },
        {
            type: 'spline',
            name: '2018',
            data: [3, 2.67, 3, 6.33, 3.33],
            marker: {
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[3],
                fillColor: 'white'
            }
        }, {
            type: 'pie',
            name: 'Total Registros',
            data: [{
                name: '2016',
                y: 13,
                color: Highcharts.getOptions().colors[0] // Jane's color
            }, {
                name: '2017',
                y: 23,
                color: Highcharts.getOptions().colors[1] // John's color
            }, {
                name: '2018',
                y: 19,
                color: Highcharts.getOptions().colors[2] // Joe's color
            }],
            center: [100, 80],
            size: 100,
            showInLegend: false,
            dataLabels: {
                enabled: false
            }
        }]
    });
});

		</script>
            </body>
        </html>
