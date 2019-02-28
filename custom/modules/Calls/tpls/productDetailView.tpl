{assign var=counter value=1}

{$val}
<table width="100%">
    {foreach from=$assignedProductName item=foo}
        <tr width="100%">

                    <td>{$counter}
                    </td>
                    <td >{$foo}
                    </td>

        </tr>
        {assign var=counter value=$counter+1}
    {/foreach}
</table>