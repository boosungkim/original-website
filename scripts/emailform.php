<div class='email-subscription-wrapper'>
    <div class='email-subscription'>
    <div class='text-section'>
        <h2>Subscribe to my weekly blog</h2>
        <p>Every week I write a blog entry about Math and Computer Science, ranging from my opinions on a technology to full documentations of my projects. Subscribe to stay updated!</p>
    </div>
    <div class='form-section'>
        <!-- Email subscription -->
        <form method=post name="subscribeform" action='https://boosungkim.com/lists/?p=subscribe&id=1'>
            <table border=0>
                <tr>
                    <td class="attributeinput">
                        <input type=text name=attribute1 value="" size="40" placeholder=" Name">
                        <script language="Javascript" type="text/javascript">
                            addFieldToCheck("attribute1","Name");
                        </script>
                    </td>
                </tr>
                <tr>
                    <td class="attributeinput">
                        <input type=text name=email value="" size="40" placeholder=" Email address">
                        <script language="Javascript" type="text/javascript">
                            addFieldToCheck("email","Email");
                        </script>
                    </td>
                </tr>
            </table>
            <input type="hidden" name="list[2]" value="signup">
            <input type="hidden" name="listname[2]" value="my-weekly-blog"/>
            <div style="display:none">
                <input type="text" name="VerificationCodeX" value="" size="20">
            </div>
            <p>
                <input class="email-button" type=submit name="subscribe" value="Subscribe" onClick="return checkform();">
            </p>
      </form>
    </div>
  </div>
</div>
