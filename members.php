<?php
include("include/functions.php");

$TITLE = "Member List [PHP-QAT: Quality Assurance Team]";
$SITE_UPDATE = date("D M d H:i:s Y T", filectime($SCRIPT_FILENAME))."<br>/* $Id$ */";

$member_list = array( array("name" => "Andr� Langhorst",
							"email" => "andre@php.net",
							"focus" => "empty",
							"skills" => "empty",
							"platform" => array("empty",
									     "empty"
									     )
							),

					  array("name" => "Hellekin O. Wolf",
							"email" => "hellekin@php.net",
							"focus" => "Testing RC builds",
							"skills" => "PHP",
							"platform" => array("Debian GNU/Linux SID + Apache 1.3.20",
									     "empty"
									     )
							),

					  array("name" => "Jalal Pushman",
							"email" => "the_jalal@yahoo.com",
							"focus" => "empty",
							"skills" => "empty",
							"platform" => array("empty",
									     "empty"
									     )
							),

					  array("name" => "James Moore",
							"email" => "jmoore@php.net",
							"focus" => "Windows Performance and Bugs, Release Testing",
							"skills" => "C/C++, PHP, Java, XML, XSLT .......",
							"platform" => array("Windows 2000 Professional",
												"Linux Redhat", "BeOS (Newbie)")),

					  array("name" => "Jani Taskinen",
							"email" => "sniper@php.net",
							"focus" => "empty",
							"skills" => "empty",
							"platform" => array("empty",
									     "empty"
									     )
							),

					  array("name" => "Joey Smith",
							"email" => "joey@php.net",
							"focus" => "empty",
							"skills" => "empty",
							"platform" => array("empty",
									     "empty"
									     )
							),

					  array("name" => "Karl Austin",
							"email" => "karl@karl.uk.co",
							"focus" => "Testing",
							"skills" => "Design, Programming, Hosting",
							"platform" => array("RH 7.1 2.4.14",
												"RH 7.1 2.4.10",
												"WinXP Pro"
												)
					  ),
					  
					  array("name" => "Olivier Cahagne",
							"email" => "olivier.cahagne@epita.fr",
							"focus" => "Testing builds",
							"skills" => "PHP",
							"platform" => array("NetBSD 1.5 + Apache 1.3 + suEXEC",
									     "Win2k + Apache 1.3 + IIS"
									     )
							),

					  array("name" => "Phil Driscoll",
							"email" => "phil@dialsolutions.co.uk",
							"focus" => "Windows installer",
							"skills" => "Competent C programmer, Linux newbie",
							"platform" => array("SuSE Linux on various x86 platforms",
							"Occasional access to NT4")),

					  array("name" => "Sebastian Bergmann",
							"email" => "sebastian@php.net",
							"focus" => "Testing Builds",
							"skills" => "PHP, Java",
							"platform" => array("Win32 + Apache2",
									     "Linux 2.4.xx + Apache2"
									     )
							),

					  array("name" => "Zak Greant",
							"email" => "zak@php.net",
							"focus" => "General",
							"skills" => "empty",
							"platform" => array("SuSe 7.1: Apache 1.3.20 + MySQL + Postgres", 
										  "empty"
									     )
							),

					  array("name" => "Marco Kaiser",
							"email" => "bate@php.net",
							"focus" => "Testing Builds / PHP-QAT Website",
							"skills" => "PHP, C++, Perl, HTML, Javascipt, Photoshop",
							"platform" => array("FreeBSD 4.4: Apache + mod_perl + mod_ssl + openssl + GDLIB Support + MySQL",
									     "SuSe 7.x: Apache + mod_perl + mod_ssl + openssl + GDLIB Support + MySQL"
									     )
							)
 					);

$supportmember_list = array( array("name" => "Brendan W. McAdams",
							"email" => "brendan@plexmedia.com",
							"focus" => "empty",
							"skills" => "empty",
							"platform" => array("empty",
									     "empty"
									     )
							),

					  array("name" => "Cameron Brunner ",
							"email" => "gamr@gattcomp.com.au",
							"focus" => "empty",
							"skills" => "empty",
							"platform" => array("empty",
									     "empty"
									     )
							),

					  array("name" => "Hartmut Holzgraefe",
							"email" => "harmut@six.de",
							"focus" => "empty",
							"skills" => "empty",
							"platform" => array("empty",
									     "empty"
									     )
							),

					  array("name" => "Howard Cohodas",
							"email" => "Howard.Cohodas@dkt.com",
							"focus" => "empty",
							"skills" => "empty",
							"platform" => array("empty",
									     "empty"
									     )
							),

					  array("name" => "Kirill Maximov",
							"email" => "maxkir@email.com",
							"focus" => "empty",
							"skills" => "empty",
							"platform" => array("empty",
									     "empty"
									     )
							),

					  array("name" => "Richard Lynch",
							"email" => "richard@zend.com",
							"focus" => "empty",
							"skills" => "empty",
							"platform" => array("empty",
									     "empty"
									     )
							)
					);

$inactivemember_list = array("Alexander Feldman",
							 "Andreas Otto",
							 "Evan Klein",
							 "M�rten Gustafson",
							 "Patrik Bengtsson",
							 "Rebecca \"Bean\" Visger",
							 "Shawn Wallace");

common_header();
?>
<table width="70%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="10"><img src="gfx/spacer.gif" width="10" height="1"></td>
          <td width="100%">
            <h1>PHP-QAT Members</h1>
          </td>
          <td width="10"><img src="gfx/spacer.gif" width="10" height="1"></td>
        </tr>
        <tr>
          <td width="10">&nbsp;</td>
          <td width="100%"><b><font color="#FF9900">To become a member</font></b>,
            you need to contribute to the PHP Quality Assurance effort. We always
            need people to hunt for bugs, to test Release Candidates and otherwise
            help out. Start by subscribing to the PHP|QA mailing list (Send a
            blank message to <a href="mailto:php-qa-subscribe@lists.php.net">php-qa-subscribe@lists.php.net</a>.
            Once you have subscribed, sent a message to the list introducing yourself.
            We would like to know your name, your skill set and your interests
            (as they relate to doing QA for PHP).<br>
            Every once in a while core QA team members review and update the membership
            list. If you have been actively contributing to the effort for a while,
            we may ask you to join the group. Also, you can mail the group and
            ask to become a member. </td>
          <td width="10">&nbsp;</td>
        </tr>
        <tr>
          <td width="10">&nbsp;</td>
          <td width="100%">&nbsp;</td>
          <td width="10">&nbsp;</td>
        </tr>
        <tr>
          <td width="10">&nbsp;</td>
          <td width="100%"><b><font color="#FF9900">Wanted:</font></b><br>
            If you have any of the following platforms which can be used for testing
            please contact us Now: </td>
          <td width="10">&nbsp;</td>
        </tr>
        <tr>
          <td width="10">&nbsp;</td>
          <td width="100%">
            <ul>
              <li class="lihack">MAC OS</li>
              <li class="lihack">MAC OS X</li>
            </ul>
          </td>
          <td width="10">&nbsp;</td>
        </tr>
        <tr>
          <td width="10">&nbsp;</td>
          <td width="100%">
            <h3>PHP-QAT Members:</h3>
          </td>
          <td width="10">&nbsp;</td>
        </tr>
<?php
// BEGIN MEMMBERS
for ($x=0; $x < count($member_list); $x++) {
?>
        <tr>
          <td width="10">&nbsp;</td>
          <td width="100%">
            <ul>
              <li class="lihack"><b><?= $member_list[$x]["name"]."</b> [".make_link("mailto:".$member_list[$x]["email"], $member_list[$x]["email"])."]"; ?>
                <ul>
                  <li class="lihack">Skills: <?= $member_list[$x]["skills"]; ?></li>
                  <li class="lihack">Focus: <?= $member_list[$x]["focus"]; ?></li>
				  <?php
				  	// BEGIN platform
				 	for ($y=0; $y < count ($member_list[$x]["platform"]); $y++) {
				 		if (strcmp($member_list[$x]["platform"][$y],"empty")==0) continue;
				  ?>
                  <li class="lihack">platform <?= ($y+1).": ".$member_list[$x]["platform"][$y]; ?></li>
                  <?php
				  	} // END platform
				  ?>
                </ul>
              </li>
            </ul>
<?php
} // END MEMBERS
?>
            </td>
          <td width="10">&nbsp;</td>
        </tr>
        <tr>
          <td width="10">&nbsp;</td>
          <td width="100%"></td>
          <td width="10">&nbsp;</td>
        </tr>
        <tr>
          <td width="10">&nbsp;</td>
          <td width="100%">
            <h3>PHP-QAT Supporting Members:</h3>
          </td>
          <td width="10">&nbsp;</td>
        </tr>
<?php
// BEGIN SUPPORT MEMMBERS
for ($x=0; $x < count($supportmember_list); $x++) {
?>
        <tr>
          <td width="10">&nbsp;</td>
          <td width="100%">
            <ul>
              <li class="lihack"><b><?= $supportmember_list[$x]["name"]."</b> [".make_link("mailto:".$supportmember_list[$x]["email"], $supportmember_list[$x]["email"])."]"; ?>
                <ul>
                  <li class="lihack">Skills: <?= $supportmember_list[$x]["skills"]; ?></li>
                  <li class="lihack">Focus: <?= $supportmember_list[$x]["focus"]; ?></li>
				  <?php
				  	// BEGIN platform
				 	for ($y=0; $y < count ($supportmember_list[$x]["platform"]); $y++) {
				  ?>
                  <li class="lihack">platform <?= ($y+1).": ".$supportmember_list[$x]["platform"][$y]; ?></li>
                  <?php
				  	} // END platform
				  ?>
                </ul>
              </li>
            </ul>
<?php
} // END MEMBERS
?>
            </td>
          <td width="10">&nbsp;</td>
        </tr>
        <tr>
          <td width="10">&nbsp;</td>
          <td width="100%"></td>
          <td width="10">&nbsp;</td>
        </tr>
        <tr>
          <td width="10">&nbsp;</td>
          <td width="100%">
            <h3>PHP-QAT Inactive Members:</h3>
          </td>
          <td width="10">&nbsp;</td>
        </tr>
        <tr>
          <td width="10">&nbsp;</td>
          <td width="100%">
            <ul>
<?php
// BEGIN SUPPORT MEMMBERS
for ($x=0; $x < count($inactivemember_list); $x++) {
            echo "<li class=\"lihack\">".$inactivemember_list[$x]."</li>";
} // END MEMBERS
?>
            </ul>
            </td>
          <td width="10">&nbsp;</td>
        </tr>
      </table>
<?php

common_footer();
?>
