<div class="container">

    <!--  Formulario de registro   -->
    <div class="panel panel-default panel-primary">
        <div class="panel-heading">
            <h5 class="panel-title">Registrar Canción</h5>
        </div>
        <div class="panel-body">
            <form action="<?php echo URL; ?>songs/addsong" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-1 control-label">Artista</label>
                    <div class="col-sm-11">
                        <input type="text" name="artist" class="form-control" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-1 control-label">Canción</label>
                    <div class="col-sm-11">
                        <input type="text" name="track" class="form-control" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-1 control-label">Link</label>
                    <div class="col-sm-11">
                        <input type="text" name="link" class="form-control" required/>
                    </div>
                </div>  
                         
                <input type="submit" class="btn btn-embossed btn-success center-block" name="add_song" value="Registrar" />
            </form>
        </div>
    </div>

    <hr>

    <!--  Listado de registros   -->
    <div class="panel panel-default panel-primary">
        <div class="panel-heading">
            <h4 class="panel-title">
                <p class="p pull-right">Canciones registradas: <?php echo $amount_of_songs; ?></p>
                <p class="p">Lista de canciones</p>
            </h4>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-responsive table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Artista</th>
                        <th>Canción</th>
                        <th>Link</th>
                        <th>Acción</th>
                    </tr>
                </thead>

                <tbody>
                <?php foreach ($songs as $song): ?>
                    <tr>
                        <td><?= $song->id ?></td>
                        <td><?= $song->artist ?></td>
                        <td><?= $song->track ?></td>
                        <td><a href="<?= $song->link ?>"><?= $song->link ?></a></td>
                        <td>
                            <a class="btn btn-info" href="<?= URL . 'songs/editsong/' . $song->id ?>">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a class="btn btn-danger" href="<?= URL . 'songs/deletesong/' . $song->id ?>">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
