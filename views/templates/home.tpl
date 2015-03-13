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
        <h1>{$greeting}</h1>
    </div>
{/block}