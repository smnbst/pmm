

    <!DOCTYPE html>
<html lang="en">
     <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>

  <body>

<div class="col-sm-4">
  <div class="form-style-2">
          <div class="form-style-2-heading">Provide Payment method information</div>
            
        <?php

         if(Lang::locale() == 'es' ){//Spanol        
             echo  Form::open(array("url"=>"http://localhost/pmm/public/es/routes.paymentMethod" ));
         }else if(Lang::locale() == 'en' ){ //Ingles         
               echo  Form::open(array("url"=>"http://localhost:8000/pmm" ));     
         }
        
         ?>
         
              <label for="field1"><span>Code
                <span class="required">*</span></span>
                <input ttype="text" class="form-control" name="c_code" value="" />
              </label>
              
              <label for="field2"><span>Description 
                    <span class="required">*  </span></span>
                <input type="text" class="form-control" name="c_description" value="" />
              </label>

                <label for="field3"><span>Actived
                    <span class="required">*  </span></span>
                <input type="text" class="form-control" name="c_status" value="" checked />
              </label>

                
                <label><span>&nbsp;</span><input type="submit" class="btn btn-success" value="Crear" /></label>

                <input type="hidden" name="_token" value="{{ Session::token() }}">
            
   {!! Form::close() !!} 
 </div>

<hr>
<h2>Created Payment Methods</h2>
<table class="table table-sm">
    <thead>

    <tr>
        <!--th>#</th-->        
        <th>Code</th>
        <th>Description</th>
        <th>Status</th>
       
    </tr>
    </thead>
        

@foreach ( $results as $result )
    
    <tr>
        <!--td>{{ $result->id }}</td-->
        <td>{{ $result->c_code }}</td>        
        <td>{{ $result->c_description }}</td>
        <td>{{ $result->c_status }}</td>
    </tr>    
       
@endforeach

</table>

</div>


</body>
</html>

