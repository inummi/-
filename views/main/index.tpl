{*Шаблон главной страницы*}
<section>
    <div class="container">  
            <div class="row">
                <div class=" text-center">
                    {foreach $rsProducts as $item name = products}
                        <div class="productsOnMain col-xl-4 col-md-6 col-sm-12">
                                <a href = "/product/{$item['id']}/">
                                    <img src="/images/products/{$item['image']}" width="200" />
                                </a><br />
                                <a href="/product/{$item['id']}/" style="color: black;">{$item['name']}</a>
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
    <div>
</section>