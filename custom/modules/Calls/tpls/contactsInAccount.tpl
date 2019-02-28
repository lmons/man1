<input type="hidden" id="contactInAccountFree" value="{$free}" />
<table width="100%" id="contactInAccount">
    {section name=tr loop=$assignedAccountContactsName step=6}
        <tr width="100%">
            {section name=td start=$smarty.section.tr.index
            loop=$smarty.section.tr.index+6}
                {if $assignedAccountContactsId[td]}
                    <td width="18%"><input type="checkbox" {if $assignedAccountContactsId[td]|in_array:$selectedContactsId} checked {/if} id="{$assignedAccountContactsId[td]}" value="{$assignedAccountContactsId[td]}" name="contacts-in-account[]">{$assignedAccountContactsName[td]|default:""}
                    </td>
                {/if}

            {/section}
        </tr>
    {/section}
</table>
