@extends('layouts.app', ['activePage' => 'SORTIE', 'titlePage' => __('Notifications')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card card-plain">
       <form class=" d-lg-block w-25 mx-auto" action="/connexion" method="post">
       <caption><h2>SUPRIMER LE PRODUIT</caption></h3><br>
       <table>
       <tr>
       <td><label class="label"><h4>partenaire </h4> </label></td>
       <td><select name="NomProduit" placeholder="LIBELLE">
       <option selected="selected">jsbcjdzkzjedfijebfdhndhdhh </option>
	     <option>zenfdkzefdhdhdetyhjehe</option>
	     <option>dneknfenfethegheryhg</option>
           </select></td>
       </tr>
       <tr>
       <td><label class="label"><h4>Magasin </h4> </label></td>
       <td><select name="NomProduit" placeholder="LIBELLE">
       <option selected="selected">jsbcjdzkzjedfijebfdhndhdhh </option>
	     <option>zenfdkzefdhdhdetyhjehe</option>
	     <option>dneknfenfethegheryhg</option>
           </select></td>
       </tr>
       <tr>
       <td><label class="label"><h4>Nom du produit</h4>  </label></td>
       <td><select name="NomProduit" placeholder="LIBELLE">
       <option selected="selected">jsbcjdzkzjedfijebfdhndhdhh </option>
	     <option>zenfdkzefdhdhdetyhjehe</option>
	     <option>dneknfenfethegheryhg</option>
           </select>
       </td>
       </tr>
       <tr >
       <td ><label class="label"><h4 class=" float-center">QUANTITE RESIDUELLE</h4> </label></td>
          <td><label name=reste > <H4>15</H4> </label> </td>
       </tr>
       <tr>
       <td><label class="label"><h4> COMMENTAIRE / RAISON</h4></label></td>
       <td><textarea name=description></textarea><br></td>
       </tr>
       <tr >
       <td colspan="2" ><br><label class="label"><h4 class=" float-center">QUANTITE A SUPPRIMER</h4> </label><br>
       <input type="number" name="quantite" > 
       </tr>
       </table><br>
       <input type="submit" value="SUPPRIMER" class="float-right  ">
       </form>
      </div>
    </div>
  </div>
</div>
@endsection
