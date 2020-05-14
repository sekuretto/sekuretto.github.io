<?php $__env->startSection('main'); ?>
<div id="containerprofile">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#profiili">Profiili</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#omatilmoitukset">Käyttäjän ilmoitukset</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="profiili" class="container tab-pane active"><br>
                <h2><b><?php echo e($user->name); ?></b></h2>
                <h2>Tiedot</h2>
                <h5>Sähköposti: <?php echo e($user->email); ?></h5>
                <h5>Kaupunki: <?php echo e($user->city); ?></h5>
                
                <?php if($user == Auth::user()): ?>
                <hr>
                        <h2>Muokkaa omia tietojasi</h2>
                    <?php echo Form::open(['action' => ['ProfileController@update', $user->id], 'method' => 'POST']); ?>

                        <div class="form-group">
                        <?php echo e(Form::label('email', 'Sähköposti')); ?>

                        <?php echo e(Form::text('email', $user->email, ['class' => 'form-control'])); ?>

                        </div>
                        <div class="form-group">
                        <?php echo e(Form::label('city', 'Kotikaupunki')); ?>

                        <?php echo e(Form::text('city', $user->city, ['class' => 'form-control'])); ?>

                        </div>
                        <?php echo e(Form::hidden('_method','PUT')); ?>

                        <?php echo e(Form::submit('Tallenna muutokset', ['class' => 'btn btn-primary'])); ?>

                    <?php echo Form::close(); ?>

                        <br>
                <hr>
                <form method="get" action="platzform.php">
                    <div class="form-group">
                        <h2>Vaihda salasana</h2>
                        <label>Uusi salasana:</label> 
                        <input type="password" class="form-control" size="30" name="uusisalasana"><br>
                        <label>Vahvista salasana:</label> 
                        <input type="password" class="form-control" size="30" name="vahvistus"><br>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#salasana">Vaihda salasana</button>
                        <input type="reset" class="btn btn-secondary" value="Peruuta">
                        <br>
                    </div>
                </form>
                <hr>
                <form method="get" action="platzform.php">
                    <div class="form-group">
                        <h2>Poista käyttäjä</h2>
                        <button style="margin-bottom: 100px" type="button" class="btn btn-primary" name="submit" data-toggle="modal" data-target="#poistakayttaja">
                            Poista käyttäjä
                        </button>
                        <br>
                    </div>
                </form>
                <?php endif; ?>
            </div>
            
        <!--KÄYTTÄJÄN POISTO-->
        <div class="modal hide fade" tabindex="-1" role="dialog" id="poistakayttaja">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Poistetaanko käyttäjä? Oletko aaaaivan varma tästä? Toimintoa ei voi perua.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <?php echo Form::open(['action' => ['PagesController@deleteuser', $user->id], 'method' => 'POST', 'class' => 'pull-right']); ?>

                        <?php echo e(Form::submit('Kyllä, poista minut', ['class' => 'btn btn-danger'])); ?>

              <button type="button" class="btn btn-secondary" data-dismiss="modal">Peruuta</button>
              <?php echo Form::close(); ?>


          </div>
          
        </div>
      </div>       
    </div>
            
            <br>
            <div id="omatilmoitukset" class="container tab-pane fade"><br>
                
                            <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <article>
                                <h3 class="subinfo"><b><?php echo e($post->category); ?></b> - <?php echo e($post->title); ?> | <b>Lisätty:</b> <?php echo e($post->user->name); ?> - <?php echo e($post->created_at); ?></h3>
                                <hr>
                                <div class="box"><?php echo nl2br(e($post->body)); ?><br>
                                    <?php if($post->image == 'noimage.png'): ?>
                                        <img class="img-fluid articleimg" src="/storage/noimage.png" alt="kuva"><br>
                                    <?php else: ?>
                                        <a data-lightbox="<?php echo e($post->id); ?>" data-caption="<?php echo e($post->title); ?>" href="/storage/<?php echo e($post->user->name); ?>/<?php echo e($post->image); ?>"><img class="img-fluid articleimg" src="/storage/<?php echo e($post->user->name); ?>/<?php echo e($post->image); ?>"></a>
                                    <?php endif; ?>
                                    <p><b>Sähköposti: <?php echo e($post->user->email); ?></b><br></p>
                                    <p><b>Kotikaupunki: <?php echo e($post->user->city); ?></b></p>  
                                    <?php if($post->user == Auth::user()): ?>
                                    <?php echo Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']); ?>

                                        <?php echo e(Form::hidden('_method', 'DELETE')); ?>       
                                        <?php echo e(Form::submit('Poista ilmoitus', ['class' => 'btn btn-danger'])); ?>

                                    <?php echo Form::close(); ?> 
                                    <?php endif; ?>
                                    
                                </div>
                                </article>
                                <br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jumbo'); ?>
<aside>
        <div class="jumbotron jumbotron-fluid" id="jumbo">
            
            <div class="container">
                <h1 class="display-4" id="jumbo-h1">Käyttäjän <b><?php echo e($user->name); ?></b> profiili</h1>    
            </div>
             <?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  
        </div>
    </aside>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>