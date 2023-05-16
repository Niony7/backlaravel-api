   @extends('layout')

   @section('content')


    <h1><i class="fa fa-angle-right">clients</h1>
    <a href="/clients/create" class="btn btn-primary my-4"> + Nouveau Client </a>

      {{-- <ul>
      @foreach ($clients as $client ) 
      <li>{{ $client->name }} <em class="text-muted">{{ $client->entreprise->name  }} </em></li>
      @endforeach
      </ul>
      <hr> --}}


      <div class="card">
         <div class="card-body">
             <h5 class="card-title">Table Client</h5>
             <div class="table-responsive">
                 <table id="idDatatabe" class="table table-striped table-bordered">
                     <thead>
                         <tr>
                            <th>#</th>
                             <th>Name</th>
                             <th>email</th>
                             <th>status</th>
                             <th>Entreprise</th>
                             <th>date</th>
                             <th>editer</th>
                             <th>supprimer</th>
                         </tr>
                     </thead>
                     <tbody>
                        {{-- recuperer les client --}}
                        @foreach ($clients as $client ) 
                         <tr>
                            <td>{{ $client->id }}</td>
                             <td>{{ $client->name }}</td>
                             <td>{{ $client->email }}</td>
                             <td>{{ $client->entreprise->name }}</td>
                             <td>{{ $client->status ?'Actif' : 'Inactif'}}</td>
                             <td>{{ $client->updated_at }}</td>
                             <td>
                                <button class="btn btn-primary" onclick="editer(id)" id={{ $client->id }}
                                    ><i class="fa fa-edit"></i></button>
                             </td>
                             <td>
                                <button class="btn btn-danger " onclick="suppr(id)" id={{ $client->id }}
                                    ><i class="fa fa-trash"></i></button>
                             </td>
                             
                         </tr>
                         @endforeach
                     </tbody>
                     <tfoot>
                         <tr>
                            <th>#</th>
                             <th>Name</th>
                             <th>email</th>
                             <th>status</th>
                             <th>Entreprise</th>
                             <th>date</th>
                             <th>editer</th>
                             <th>supprimer</th>

                         </tr>
                     </tfoot>
                 </table>
             </div>

         </div>
     </div>
 </div>
</div>



 <!-- this page js -->
 <script src="../DataTables/js/jquery.datatables.min.js"></script>
 <script src="../DataTables/datatables.min.js"></script>
 <script>
   
     // DATA TABLE 
    $(document).ready(function () {
   $("#idDatatabe").DataTable();
    });
</script>  


   @endsection
