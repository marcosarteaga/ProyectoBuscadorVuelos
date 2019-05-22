función pública __construir () 
    {
/ ** Contexto de la API de PayPal ** / 
        $ paypal_conf = \ Config :: get ('paypal'); 
        $ this -> _ api_context = new ApiContext (new OAuthTokenCredential ( 
            $ paypal_conf ['client_id'], 
            $ paypal_conf ['secret']) 
        ); 
        $ this -> _ api_context-> setConfig ($ paypal_conf ['settings']);
}
Entonces, después de ingresar cierta cantidad en el formulario y al hacer clic en el botón "Pagar con PayPal", se ejecuta la siguiente funcionalidad.

función pública payWithpaypal (solicitud $ solicitud) 
    {
$ pagador = nuevo pagador (); 
        $ payer-> setPaymentMethod ('paypal');
$ item_1 = nuevo artículo ();
$ item_1-> setName ('Item 1') / ** nombre del artículo ** / 
            -> setCurrency ('USD') 
            -> setQuantity (1) 
            -> setPrice ($ request-> get ('amount')); /** precio unitario **/
$ item_list = new ItemList (); 
        $ item_list-> setItems (array ($ item_1));
$ cantidad = nueva cantidad (); 
        $ amount-> setCurrency ('USD') 
            -> setTotal ($ request-> get ('amount'));
$ transaction = new Transaction (); 
        $ transaction-> setAmount ($ monto) 
            -> setItemList ($ item_list) 
            -> setDescription ('Descripción de su transacción');
$ redirect_urls = new RedirectUrls (); 
        $ redirect_urls-> setReturnUrl (URL :: route ('status')) / ** Especifique la URL de retorno ** / 
            -> setCancelUrl (URL :: route ('status'));
$ pago = nuevo Pago (); 
        $ pago-> setIntent ('Venta') 
            -> setPayer ($ payer) 
            -> setRedirectUrls ($ redirect_urls) 
            -> setTransactions (array ($ transaction)); 
        / ** dd ($ payment-> create ($ this -> _ api_context)); exit; ** / 
        try {
$ pago-> crear ($ esto -> _ api_context);
} catch (\ PayPal \ Exception \ PPConnectionException $ ex) {
if (\ Config :: get ('app.debug')) {
\ Session :: put ('error', 'Tiempo de espera de conexión'); 
                return Redirect :: route ('paywithpaypal');
} else {
\ Session :: put ('error', 'Ocurre un error, perdón por inconveniente'); 
                return Redirect :: route ('paywithpaypal');
}
}
foreach ($ pago-> getLinks () como $ enlace) {
if ($ link-> getRel () == 'approv_url') {
$ redirect_url = $ link-> getHref (); 
                descanso;
}
}
/ ** agregar ID de pago a la sesión ** / 
        Session :: put ('paypal_payment_id', $ payment-> getId ());
if (isset ($ redirect_url)) {
/ ** redirecciona a paypal ** / 
            return Redirect :: away ($ redirect_url);
}
\ Session :: put ('error', 'Error desconocido'); 
        return Redirect :: route ('paywithpaypal');
}