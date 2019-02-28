
<div class="preload" style=" display: flex;position:fixed;
  z-index:99999;
  top:0;
  opacity:0.5;
  left:0;
  bottom:0;
  right:0;
  background:white;"><img src="/scrm/custom/modules/Calls/ajax-loader.gif" style=" width: 100px;
    height: 100px;
    margin: auto; ">
</div>
<table width="100%" id="keyMessages">
    <col width="30%">
    <col width="30%"
    <form name="samples-information" id="samples-information" action="index.php" method="post">


</table>
{literal}

{/literal}
{literal}
<script type="text/javascript">
    $( document ).ready(function() {
        setTimeout(function(){
        {/literal}
        {foreach from=$keyMessages item=foo}

        {literal}
         $("#{/literal}{$foo}{literal}").trigger("click");
          $("#reaction-{/literal}{$foo}{literal}").val("{/literal}{$reaction.$foo}{literal}");
        {/literal}
        {/foreach}{literal}   
        },2000)
        
    });
</script>
{/literal}