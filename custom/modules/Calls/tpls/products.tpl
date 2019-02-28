{*draw product in html table *}

{literal}
    <script type="text/javascript">
        $( document ).ready(function() {
        {/literal}
        {foreach from=$checkedProductId item=foo}
        {literal}
            $("#{/literal}{$foo}{literal}").trigger("click");
        {/literal}
    {/foreach}{literal}
        });
    </script>
{/literal}
<table width="100%">
    {section name=tr loop=$assignedProductName step=$cols}
        <tr width="100%">
            {section name=td start=$smarty.section.tr.index
            loop=$smarty.section.tr.index+$cols}
                {if $assignedProductId[td]}
                    <td width="18%"><input type="checkbox" onclick="setSelectedProduct('{$assignedProductId[td]}')" id="{$assignedProductId[td]}" name="{$assignedProductName[td]}">{$assignedProductName[td]|default:""}
                    </td>
                {/if}

            {/section}
        </tr>
    {/section}
</table>
{literal}
    <script>
        $( document ).ready(function() {
        $(".spinner").spinner({
            min: 0,
            max: 10
        });
        });
    </script>
{/literal}

