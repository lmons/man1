<form action="index.php" method="post" name="EditView" >
    <input type="hidden" name="module" value="Calls"/>
    <input type="hidden" name="record" value=""/>
    <input type="hidden" name="return_module" value="Administration"/>
    <input type="hidden" name="return_action" value="index"/>
    <input type="hidden" name="action" value=""/>
    <table cellpadding="0" cellspacing="0" border="0" width="100%">
        <tr>
            <td>
                <div class="moduleTitle">
                    <h2>Call Restrictions</h2>
                </div>
            </td>
        </tr>
        <tr>
            <td align="left"><h4>Submit restriction</h4></td>
        </tr>
        <tr>
            <td scope="row">
                <div class="tabForm">
                    <slot><input type="checkbox" id="enable_restriction_submit" {$submitChecked} name="enable_restriction_submit"></slot>
                    <slot>Enable restriction for submitted call after</slot>
                    <slot><input id='submit_hours' tabindex='8' size='11' maxlength='10' type="text" name="submit_hours" value="{$submitHours}"></slot>
                    <slot>hours</slot>
                     </div>
                <div class="tabForm">
                    <slot><input type="checkbox" id="enable_restriction_cycle_plan" {$submitCPChecked} name="enable_restriction_cycle_plan"></slot>
                    <slot>Enable restriction for submitted call in cycle plan</slot>
                </div>
            </td>
        </tr>
        <tr>
        <td align="left"><h4>Plan restriction</h4></td>

        </tr>
        <tr>
            <td scope="row">
                <div class="tabForm">
                    <table border="0" width="100%">

                        <tr>

                                <slot><input type="checkbox" id="enable_restriction_plan_week_or_month" {$planChecked} name="enable_restriction_plan_week_or_month" ></slot>

                                <slot>plan in the next</slot>
                    <slot><input id='plan_weeks'  maxlength='10' type="text" name="plan_weeks" value="{$planWeeks}"></slot>
                                <slot>Weeks</slot>
                            <slot> &nbsp;&nbsp;</slot>
                    <slot>Or</slot>
                    <slot> &nbsp; </slot>


                    <slot><input id='plan_months' type="text" name="plan_months" value="{$planMonths}" ></slot>
                                <slot>Months:</slot>
                        </tr>
                        <slot> &nbsp; </slot>
                        <tr>

                            <td><slot><input type="checkbox" id="enable_restriction_plan_first_days"  {$planAdvChecked} name="enable_restriction_plan_first_days" ></slot>

                               <slot>plan next week if cross   <slot><input type="text" id="plan_next_week"  name="plan_next_week" value="{$planNextWeek}"></slot> first days from current week</slot>


                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <input id="save_btn_rest" type="submit" name="button" class="button"
                       onclick="this.form.action.value='saveplansubmitconfiguration';"
                       value="SAVE "
                        />
                <input id="cancel_btn_rest" type="submit" name="button" class="button"
                       onclick="this.form.action.value='index'; this.form.module.value='Administration';"
                       value="Cancel"
                        />
            </td>
        </tr>
        <tr>
            <td>
                <slot>&nbsp;</slot>
            </td>
        </tr>
    </table>
</form>
