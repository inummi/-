{*Страница продукта*}
<section>
<div class="container">
    <div class="row mt-5">
         <div class="col-xl-6 col-md-6 col-sm-12 mt-3">
            <img src="/images/products/{$rsProduct['image']}" style="float:left height: auto;
  max-width: 100%;">
         </div>
         <div class="col-xl-6 col-md-6 col-sm-12">
            <h3>Стоимость: {$rsProduct['price']} ₽ </h3>
            
            <a style="color:red" id="removeCart_{$rsProduct['id']}" {if ! $itemInCart}class="hideme"{/if} href="#" onclick="removeFromCart({$rsProduct['id']});
            return false;" alt="Удалить из корзины"> <button type="button" class="btn btn-danger">Удалить из корзины</button> </a>

            <a style="color:#008000" id="addCart_{$rsProduct['id']}"{if $itemInCart}class="hideme"{/if} href="#" onclick="addToCart({$rsProduct['id']});
            return false;" alt="Добавить в корзину"><button type="button" class="btn btn-success">Добавить в корзину</button> </a>
            
            <h4 class="mt-2">Описание</h4>
            <p>{$rsProduct['description']}</p>
        
         
    </div>
    </div>
</section>