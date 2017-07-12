@extends('app')

@section('title', 'Redactar email')

@section('content')

@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
      <ul>
        @foreach($errors->all() as $error)
          <li>
            {{$error}}
          </li>
        @endforeach
      </ul>
    </div>
  @endif

<div class="row">
            
            <div class="col-md-12">
         

  {!! Form::open(['route' => 'admin.notificaciones', 'method' => 'POST', 'files' => true,'enctype' =>'multipart/form-data']) !!}

             <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>"> 
     
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Crear Nuevo Correo</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">

              <div class="form-group">
            {!! Form::label('rem', Auth::user()->email, ['class' => 'form-control']) !!} 
            <span id='name' class="badge"> {{Auth::user()->name}}</span>   
                        <!--input class="form-control" placeholder="Para:" id="destinatario" name="destinatario"-->
                      </div>

                    
                      <div class="form-group">
            {!! Form::email('destinatario', null, ['class' => 'form-control', 'placeholder' => 'Para:', 'required']) !!}    
                        <!--input class="form-control" placeholder="Para:" id="destinatario" name="destinatario"-->
                      </div>
                      <div class="form-group">
         {!! Form::text('asunto', null, ['class' => 'form-control', 'placeholder' => 'Asunto:', 'required']) !!}           
                        <!--input class="form-control" placeholder="Asunto:" id="asunto" name="asunto"-->
                      </div>


                      <div class="form-group">
                        <!--textarea id="contenido_mail" name="contenido_mail" class="form-control" style="height: 200px" placeholder="escriba aquí..."-->
          {!! Form::textarea('contenido_mail', null, ['class' => 'form-control','id'=>'contenido_mail' ,'placeholder' => 'escriba aquí...', 'required']) !!}

                         
                        <!--/textarea-->
                      </div>
                      <div class="form-group">
                        <div class="btn btn-default btn-file">
                          <i class="fa fa-paperclip"></i> Adjuntar Archivo
             {!! Form::file('file') !!}

                          <!--input type="file"  id="file" name="file" class="email_archivo" -->
                        </div>
                        <p class="help-block"  >Max. 20MB</p>
                        <div id="texto_notificacion">
                        
                        </div>
                      </div>

                

                    </div><!-- /.box-body -->
                    <div class="box-footer">
                      <div class="pull-right">
                     
                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> ENVIAR</button>
                      </div>
                   <br/>
                    </div><!-- /.box-footer -->
                  </div><!-- /. box -->

              </form>
            </div><!-- /.col -->
          </div><!-- /.row -->
              

    <script>
     
      function activareditor(){   
        $("#contenido_mail").wysihtml5();
      };

      activareditor();
    </script>


     {!! Form::close() !!}
@endsection