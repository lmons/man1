

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
<table width="100%" id="Samples">
    <col width="10%">
    <col width="30%">
    <col width="30%">
    <col width="29%">
    <form name="samples-information" id="samples-information" action="index.php" method="post">

    <tr>
        <td>
            <a href="#" id="add-sample" onclick="addSample();return false"><img src="/scrm/custom/modules/Calls/add.png" height="20" width="20"> </a>
        </td>
        <td>
            Sample Name
        </td>
        <td>
            Sample Lot
        </td>
        <td>
            Quantity
        </td>
    </tr>
        {assign var=val value=1}

        {foreach from=$selectedSamplesLotId item=foo}
            <tr id="row-e-{$val}">
                <td>
                    <a href='#' id='delete-{$val}' onclick='deleteSample("e-{$val}");return false'><img src='/scrm/custom/modules/Calls/delete.png' height='20' width='20'> </a>
                </td>
                <td>{html_options name="sample-name[]" disabled=true options=$samplesLotName selected=$selectedSamplesId.$foo onchange="chooseSample(this.value,'e-"|cat:$val|cat:"')"}
                </td>
                <td>
                    <select name="sample-lot[]" disabled=true id="sample-lot-e-{$val}"><option value="null">-- none --</option>
                    {html_options  options=$samplesLotId selected=$selectedSamplesLotId.$foo }

                    </select> </td>
                <td><input name='sample-lot-quantity[]' disabled=true id='sample-lot-quantity' class='spinner' value='{$selectedSamplesLotQuantity.$foo}'>
                </td>

            </tr>
            {assign var=val value=$val+1}
        {/foreach}


</table>
{literal}
<script type="text/javascript">
    $( document ).ready(function() {
        $( ".spinner" ).spinner( "disable" );
    });
</script>
{/literal}
