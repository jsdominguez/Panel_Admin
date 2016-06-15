                var con2 = 0;

                $('document').ready(function() <!-- CREAMOS UNA FUNCIONA ANONIMA -->
                  {

                    var num = 0;

                    $('#boton').click(function() <!-- CAPURAMOS LA VARIBLES CUANDO HACEMOS CLICK EN EL ID -->
                      {
                        var no = $('#nombre').val();
                        var ap = $('#apellido').val();
                        var ed = $('#edad').val();
                        var co = $('#correo').val();
                        var te = $('#telefono').val();
                        var selec = $('#selec').val();



                        if (no != "" && ap != "" && ed != "" && co != "" && te != "" && te.length <= 9) <!-- VALIDANDO QUE LOS INPUT -->
                        {

                          if (ed < 18) {
                            $.notify("Ingrese los Campos Espeficicados", "error"); <!-- MANDAMOS UN MENSAJE SI LOS INPUT ESTAN VACIOS -->
                          } else {

                            jQuery.post("Config/usuario/registrar.php", <!-- MANDAMOS LOS PARAMETROS QUE RECIBIRA EL ARCHIVO PHP-->
                              {
                                nom: no,
                                ape: ap,
                                eda: ed,
                                cor: co,
                                tel: te,
                                selec: selec,
                                success: function() <!-- SUCCES CUANDO TERMINA LA TRANSACCION Y NOS DEVUELVA UN MENSAJE-->

                                {
                                  num++;
                                  $.notify("Usuario Registrado", "success");
                                  viewdata();
                                  $('#nombre').val(''); <!-- YA REGISTRADO LIMPIAMOS LOS INPUT-->
                                  $('#apellido').val('');
                                  $('#edad').val('');
                                  $('#correo').val('');
                                  $('#telefono').val('');
                                  $('#selec').val('');
                                  $('#usuario').show();
                                  $('#con').html('<h3>' + num + '+</h3>');
                                }
                              }).done(function() {
                              viewdata();
                            });
                          }
                        } else {

                          $.notify("Ingrese los Campos Espeficicados", "error"); <!-- MANDAMOS UN MENSAJE SI LOS INPUT ESTAN VACIOS -->
                        };
                      }); <!-- TERMINA LA FUNCION CLICK DE JQUERY -->

                  }); <!-- TERMINA LA FUNCION -->


                function viewdata() { <!-- FUNCION PARA QUE AL INICIAR NOS CARGUE LA TABLA sCON DATOS-->
                  $.ajax({
                    type: "GET",
                    url: "Config/usuario/listar.php" <!-- LLAMAMOS AL ARCHIVO PHP -->
                  }).done(function(data) <!-- GUARDAMOS TODO EL RESULTADO QUE NOS ARROJA EL PHP Y LO GUARDAMOS COMO VARIABLE -->
                    {
                      $('#contener').html(data); <!-- Y LO VOTAMOS COMO HTML EN EL DIV QUE DECLARAMOS COMO SALIDA-->
                    });
                }


                function updatedata(str) {
                  var codigo = str;
                  var nom = $('#nom' + str).val();
                  var ape = $('#ape' + str).val();
                  var eda = $('#eda' + str).val();
                  var cor = $('#cor' + str).val();
                  var tel = $('#tel' + str).val();
                  var selec = $('#selec' + str).val();

                  var datas = "nom=" + nom + "&ape=" + ape + "&eda=" + eda + "&cor=" + cor + "&tel=" + tel + "&selec=" + selec;


                  swal({
                      title: 'Esta Seguro?',
                      text: 'Antes de actualizar verifique que todo este Correcto!',
                      type: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Si, Actualizar!',
                      cancelButtonText: 'No, Cancelar!',
                      confirmButtonClass: 'confirm-class',
                      cancelButtonClass: 'cancel-class',
                      closeOnConfirm: false,
                      closeOnCancel: false
                    },
                    function(isConfirm) {
                      if (isConfirm) {

                        swal('Genail!', 'El usuario ha sido actualizado.', 'success');
                        $.ajax({
                          type: "POST",
                          url: "Config/usuario/Update.php?codigo=" + codigo,
                          data: datas
                        }).done(function() {
                          swal('Genial!', 'El Usuario ha sido Actualizado!', 'success')
                          con2++;
                          $("#useract").show();
                          $("#con2").html("<h3>" + con2 + "+</h3>");
                          viewdata();
                        });

                      } else {
                        swal('Cancelado', 'La Actualizacion ha sido cancelada :)', 'error');
                      }
                    });

                }
