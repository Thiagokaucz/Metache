<style>
	*{
		padding: 0;
		margin: 0;
		border: 0;
	}
	
	#form-checkout {
      display: flex;
      flex-direction: column;
      width: 60%;
	  margin: 100px 20%;
	  padding: 10px 20px;
	  background-color: #eee;	
    }

    .container {
      height: auto;
      display: block;
	  margin-top: 10px; 
    }
	
	.container iframe{
		background-color: #fff !important;
		padding: 10px 20px !important;
		width: 95.6%;
		height: 18px !important;
	}
	
	h1{
		font-size: 1.6em;
		font-weight: 600;
		font-family: 'Montserrat', sans-serif;
		text-transform: uppercase;
		margin-top: 30px;
	}
	
	p{
		font-size: 1em;
		font-weight: 400;
		font-family: 'Montserrat', sans-serif;
		text-align: center;
		margin: 10px 0;
	}
	
	label{
		margin-top: 10px;
		margin-bottom: 3px;
		font-size: 1em;
		font-weight: 400;
		font-family: 'Montserrat', sans-serif;
		display: block;
	}
	
	input[type=text], input[type=email], input[type=number]{
		padding: 10px 20px;
		margin-top: 10px;
		margin-bottom: 3px;
		font-size: 1em;
		font-weight: 400;
		font-family: 'Montserrat', sans-serif;
		display: block;
		background-color: #fff;
		width: 100%;
	}
	
	select{
		padding: 10px 20px;
		margin-top: 10px;
		margin-bottom: 3px;
		font-size: 1em;
		font-weight: 400;
		font-family: 'Montserrat', sans-serif;
		display: block;
		background-color: #fff;
		width: 100%;
	}
	
	button{
		margin-top: 10px;
		padding: 10px 20px;
		font-size: 1em;
		font-weight: 400;
		font-family: 'Montserrat', sans-serif;
		width: 100%;
		background-color: #662747;
		color: #fff;
		border-radius: 5px;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		cursor: pointer;
	}
	
	button:hover{
		background-color: #511f38;
	}
	
</style>

<!-- Examplo retirado da documentação: https://www.mercadopago.com.br/developers/pt/docs/checkout-api/integration-configuration/card/integrate-via-cardform -->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://sdk.mercadopago.com/js/v2"></script>
  <script type="text/javascript" src="index.js" defer></script>
  
  <script>
    const mp = new MercadoPago("TEST-#");
  </script>
  
  
  <form id="form-checkout" action="process_payment.php" method="POST">
	<p><b>Nome:</b> APRO - 
	<b>Cartão:</b> 5031433215406351 -
	<b>CVV:</b> 123 -
	<b>Data:</b> 11/2025 -
	<b>CPF:</b> 12345678909</p>
	
    <div id="form-checkout__cardNumber" class="container"></div>
    <div id="form-checkout__expirationDate" class="container"></div>
    <div id="form-checkout__securityCode" class="container"></div>
    
	<input type="text" id="form-checkout__cardholderName" placeholder="Titular do cartão"  class="fields" />
    <select id="form-checkout__issuer" name="issuer">
      <option value="" disabled selected>Banco emissor</option>
    </select>
    <select id="form-checkout__installments" name="installments">
      <option value="" disabled selected>Parcelas</option>
    </select>
    <select id="form-checkout__identificationType" name="identificationType">
      <option value="" disabled selected>Tipo de documento</option>
    </select>
    <input type="text" id="form-checkout__identificationNumber" class="fields" name="identificationNumber" placeholder="Número do documento" />
    <input type="email" id="form-checkout__email" name="email" class="fields" placeholder="E-mail"/>

    <input id="token" name="token" type="hidden">
    <input id="paymentMethodId" name="paymentMethodId" type="hidden">
    <input id="transactionAmount" name="transactionAmount" type="hidden" value="100">
    <input id="description" name="description" type="hidden" value="Nome do Produto">

    <button type="submit" id="form-checkout__submit">Pagar Agora</button>
  </form>