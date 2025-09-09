<?php

    require __DIR__."/vendor/autoload.php";

    use App\CarrinhoCompra;

    $carrinho1 = new CarrinhoCompra();
    print_r($carrinho1->showItems());

    echo 'Valor total: ' .$carrinho1-> totalPrice();

   $carrinho1->addItems('Bicicleta', '760.10');
   $carrinho1->addItems('XBOX','900.00');
   $carrinho1->addItems('Tapete','50.00');

   echo "<br/>";
   print_r($carrinho1->showItems());
   echo 'Valor total recalculado: '.$carrinho1->totalPrice();

   echo "<br/>";
   echo 'Status: '.$carrinho1->showStatus();

   echo '<br/>';
   $carrinho1->finishOrder();
   echo 'Status: '.$carrinho1->showStatus();

   if($carrinho1->validateCart()){
     echo 'Pedido realizado com sucesso!';
   }
   else{
    echo '<br/> Erro na confirmação do pedido. Carrinho não possui itens.';
   }

   echo'<br/>';
   echo 'status: ' .$carrinho1->showStatus();

