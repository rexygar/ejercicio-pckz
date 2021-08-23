<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agendar hora</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{ asset('js/agendar.js') }}"></script>
</head>
<body>
    <div class="container">
        <div class="container-flex content">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header"><strong>Agendamiento de Horas</strong></div>
                        <div class="card-body">
                            <input type="hidden" id="url" value="{{ route('agenda.add') }}">
                            <div class="form-group row">
                                <label for="titulo" class="col-md-2 col-form-label text-md-center">Titulo</label>
                                <div class="col-md-3">
                                    <input id="titulo" type="text" class="form-control" value="" name="SKU" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fecha" class="col-md-2 col-form-label text-md-center">Fecha</label>
                                <div class="col-md-4">
                                    <input id="fecha" type="date" class="form-control" name="fecha" required>
                                </div>
                                <label for="inicio" class="col-md-2 col-form-label text-md-center">Hora de Inicio</label>
                                <div class="col-md-3">
                                    <input id="inicio" type="time" class="form-control" name="inicio" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="duracion" class="col-md-2 col-form-label text-md-center">Duracion</label>
                                <div class="col-md-4">
                                    <input id="duracion" type="number" min="15" class="form-control" step="15" name="duracion" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button id="agendar" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#miModal">Agendar</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="miModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Agenda</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="card">
                                    <div class="card-header"><strong>Agendado</strong></div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <p id="titu" class="col-md-6 col-form-label text-md-center"></p>
                                        </div>
                                        <div class="form-group row">
                                            <p id="fec" class="col-md-6 col-form-label text-md-center"></p>
                                        </div>
                                        <div class="form-group row">
                                            <p id="hora" class="col-md-6 col-form-label text-md-center"></p>
                                        </div>
                                        <div class="form-group row">
                                            <p id="dur" class="col-md-6 col-form-label text-md-center"></p>
                                        </div>
                                        <div class="form-group row">
                                            <p id="monto" class="col-md-6 col-form-label text-md-center"></p>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Entendido</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>