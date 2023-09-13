<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Carrito</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<h1>Carrito</h1>
		<hr>
		<table class="table">
			<thead>
			  <tr>
				<th scope="col">#</th>
				<th scope="col">Item</th>
				<th scope="col">Cantidad</th>
				<th scope="col">Acción</th>
				<th scope="col">Total</th>
			  </tr>
			</thead>
			<tbody id="items"></tbody>
			<tfoot>
			  <tr id="footer">
				<th scope="row" colspan="5">Carrito vacío - comience a comprar!</th>
			  </tr>
			</tfoot>
		  </table>
		<div class="row" id="cards"></div>
	</div>

	<template id="template-footer">
        <th scope="row" colspan="2">Total productos</th>
        <td>10</td>
        <td>
            <button class="btn btn-danger btn-sm" id="vaciar-carrito">
                vaciar todo
            </button>
        </td>
        <td class="font-weight-bold">$ <span>5000</span></td>
    </template>
    
    <template id="template-carrito">
      <tr>
        <th scope="row">id</th>
        <td>Café</td>
        <td>1</td>
        <td>
            <button class="btn btn-info btn-sm">
                +
            </button>
            <button class="btn btn-danger btn-sm">
                -
            </button>
        </td>
        <td>$ <span>500</span></td>
      </tr>
    </template>


	<template id="template-card">
		<div class="col-12 mb-2 col-md-4">
		  <div class="card">
			  <img src="" alt="" class="card-img-top">
			<div class="card-body">
			  <h5>Titulo</h5>
			  <p>precio</p>
			  <button class="btn btn-dark">Comprar</button>
			</div>
		  </div>
		</div>
	  </template>
	

	  <form method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">
  <input name="merchantId"      type="hidden"  value="508029"   >
  <input name="accountId"       type="hidden"  value="512321" >
  <input name="description"     type="hidden"  value="Ventas en linea"  >
  <input name="referenceCode"   type="hidden"  value="Pago001" >
  <input name="amount"          type="hidden"  value="20000"   >
  <input name="tax"             type="hidden"  value="0"  >
  <input name="taxReturnBase"   type="hidden"  value="0" >
  <input name="currency"        type="hidden"  value="COP" >
  <input name="signature"       type="hidden"  value="5ce296b77a4dc6fce925829c4ed1739b"  >
  <input name="test"            type="hidden"  value="0" >
  <input name="buyerEmail"      type="hidden"  value="cliente1@gmail.com" >
  <input name="responseUrl"     type="hidden"  value=" https://fuyai07.github.io/ejemplo/respuesta" >
  <input name="confirmationUrl" type="hidden"  value=" https://fuyai07.github.io/ejemplo/confirmar" >
  <input name="Submit"          type="submit"  value="Enviar" >
</form>

<script src="app.js"></script>
</body>
</html>