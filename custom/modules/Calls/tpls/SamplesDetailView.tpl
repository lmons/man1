
<table width="100%">
    {foreach from=$sampleInfo item=foo}
        <tr width="100%">
            <td>{$foo.sampleName}
            </td>
            <td>{$foo.name}
            </td>
            <td>{$foo.quantity}
            </td>

        </tr>
    {/foreach}
</table>