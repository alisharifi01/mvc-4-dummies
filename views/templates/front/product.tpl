{extends file="layout/master.tpl"}
{block name="main"}
    name : {$product['name']}
    <br/>
    {if isset($product['price'])}
        price {$product['price']} $
    {/if}
{/block}
