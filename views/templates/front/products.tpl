{extends file="layout/master.tpl"}
{block name="main"}
    <ul class="products-list">
        {foreach $products as $product}
            <li><a href="{$SITE_ROOT_URL}/product?product_id={$product['id']}"> {$product['name']}</a> </li>
        {/foreach}
    </ul>
{/block}
{block name="css"}
    <style>
        .products-list{
            margin: 0 auto;
            border: 1px solid #000;
            width:300px;
            display: block;
            margin-top: 20px;
        }
        .products-list li{
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
        }

    </style>
{/block}