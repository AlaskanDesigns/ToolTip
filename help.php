<?php
/*
 *      OSCLass – software for creating and publishing online classified
 *                           advertising platforms
 *
 *                        Copyright (C) 2010 OSCLASS
 *
 *       This program is free software: you can redistribute it and/or
 *     modify it under the terms of the GNU Affero General Public License
 *     as published by the Free Software Foundation, either version 3 of
 *            the License, or (at your option) any later version.
 *
 *     This program is distributed in the hope that it will be useful, but
 *         WITHOUT ANY WARRANTY; without even the implied warranty of
 *        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *             GNU Affero General Public License for more details.r
 *
 *      You should have received a copy of the GNU Affero General Public
 * License along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
?>
<style>
#radio1 {
	background: #ea6056;
}
#radio1, #radio2, #radio3, #radio4, #radio5, #radio6 {
	display: block;
	position: relative;
	width: 20%;
	left: 25px;
	top: -25px;
	padding: .3em .6em .3em .6em;
	line-height: 50px;
	color: white;
	font-weight: bold;
	border: 2px solid #D9D9D9;
	border-radius: .3em;
}
#radio2 {
	background: #35c3d9;
}
#radio3 {
	background: #68b21f;
}
#radio4 {
	background: #c00058;
}
#radio5 {
	background: #000000;
}
#radio6 {
	color: black;
	font-weight: bold;
	background: white;
}
.left-side{
    width:30%;
    float:left;

}
.right-side{
    width:70%;
    float:left;
}

</style>

<div id="item-form well">
  <div class="left-side">
    <h4>Choose a color scheme</h4>
    <form  title="By choosing a color scheme below you will change the background color of this ToolTip to match your Osclass theme." method="post" action="" id="ToolTip">
      <ul>
        <li>
          <input type="radio" name="color"   value="red">
          <label id="radio1">
            <center>
              RD
            </center>
          </label>
        </li>
        <li>
          <input type="radio" name="color"   value="blue">
          <label id="radio2">
            <center>
              BL
            </center>
          </label>
        </li>
        <li>
          <input type="radio" name="color"   value="green">
          <label id="radio3">
            <center>
              GN
            </center>
          </label>
        </li>
        <li>
          <input type="radio" name="color"   value="purple">
          <label id="radio4">
            <center>
              PL
            </center>
          </label>
        </li>
        <li>
          <input type="radio" name="color"   value="black" >
          <label id="radio5">
            <center>
              BK
            </center>
          </label>
        </li>
        <li>
          <input type="radio" name="color"   value="white" checked="checked">
          <label id="radio6">
            <center>
              WT
            </center>
          </label>
        </li>
        <input type="submit" value="<?php _e('Save changes', 'ToolTip'); ?>" class="btn btn-submit">
      </ul>
    </form>
    <script>
$.post("ToolTip_color.php", // server side script that will receive this request
       $("[name-color]").serialize() // serialized data 
);
</script>
    <?php
if (isset($_POST['color'])) {
  //$user = $_POST['color'];
echo  $_POST['color'];
  //$gen = $_POST['gen'];
  //echo '$user';
  //echo 'User: '. $user. ' - gender: '. $gen;
}
?>
  </div>
  <div class="right-side">
    <fieldset>
      <legend>
      <h1>
        <?php _e('ToolTip', 'ToolTip'); ?>
      </h1>
      </legend>
      <h2>
        <?php _e('What is ToolTip Plugin?  &nbsp;&nbsp;(Only for Osclass >= 3.2)', 'ToolTip'); ?>
      </h2>
      <p>
        <?php _e('ToolTip Plugin allows you to show a jQuery ToolTip on any part of your site you want.', 'ToolTip'); ?>
      </p>
      <h2>
        <?php _e('How does ToolTip Plugin work?', 'ToolTip'); ?>
      </h2>
      <p>
        <?php _e('In order to use ToolTip Plugin, you should  add "title" attribute to the element where you want  ToolTip to appear.' , 'ToolTip'); ?>
      </p>
      <h2>
        <?php _e('Example - 1:', 'ToolTip'); ?>
      </h2>
      <pre style="vertical-align: middle">
                       &lt;div title=&quot;This is my tooltip&quot;&gt;   
   
                </pre>
      <h2>
        <?php _e('Example - 2:', 'ToolTip'); ?>
      </h2>
      <p>
        <?php _e('If you want to display category descriptions in a ToolTip when the mouse moves over the category: Locate the following line in your bender_theme/functions.php &nbsp (your_theme/main.php in other themes)', 'ToolTip'); ?>
      </p>
      <pre>&lt;ul class=&quot;r-list&quot;&gt;             &lt;li&gt;                 &lt;h1&gt;&lt;a class=&quot;category &lt;?php echo osc_category_slug() ; ?&gt;&quot; href=&quot;&lt;?php echo osc_search_category_url() ; ?&gt;&quot;&gt;&lt;?php echo osc_category_name() ; ?&gt;&lt;/a&gt; &lt;span&gt;(&lt;?php echo osc_category_total_items() ; ?&gt;)&lt;/span&gt;&lt;/h1&gt;</pre>
      <p>
        <?php _e('In the above code add title attribute like so:', 'ToolTip'); ?>
      </p>
      <pre>&lt;ul class=&quot;r-list&quot;&gt;             &lt;li&gt;                 &lt;h1&gt;&lt;a class=&quot;category &lt;?php echo osc_category_slug() ; ?&gt;&quot; <span style="color: red;font-weight: 900">title=&quot;&lt;?php echo osc_category_description(); ?&gt;</span></pre>
      <p> Now when the user moves their mouse over the category heading they will see the category description in the ToolTip. </p>
      <p>Reference: <a href= "http://jqueryui.com/tooltip/" target="_blank">jQuery ToolTip</a></p>
      <p>Last update August 4, 2013</p>
    </fieldset>
  </div>
</div>
