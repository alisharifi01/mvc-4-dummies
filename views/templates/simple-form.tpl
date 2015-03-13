{extends file="layout.tpl"}
{block name=title}MVC 4 Dummies{/block}
{block name="head"}
  <script>    
        $(function(){
            //
        });
   </script>
{/block}
{block name=main}
    <div style="text-align: center">
        <form action="simple-form" method="post">
            <input type="text" name="foo" placeholder="write something"/>
            <br/>
            <input type="submit"/>
            <hr/>
            {if isset($inputPosted)}
                {$inputPosted}
            {/if}
        </form>
    </div>
{/block}