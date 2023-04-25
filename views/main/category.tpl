<section class="category mt-3" >
    <div class="container">
        <div class="row col-12">
            <div class="col-12 text-center">
                <h2>{$rsCategory['name']}</h2>
                {foreach $rsProducts as $item name = products}
                    <div class="categoryItem ">
                        <a href = "/product/{$item['id']}/">
                            <img src="/images/products/{$item['image']}" width="200" />
                        </a><br />
                        <a href="/product/{$item['id']}/" style="color: black;">{$item['name']}</a>
                    </div>
                {/foreach}
            </div>
        </div>
    </div>
</section>