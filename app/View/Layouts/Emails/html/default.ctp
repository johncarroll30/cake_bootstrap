<html>
<head>
  <style>
	body {
	  	font-family: 'Helvetica Neue', Helvetica, Arial, Geneva, sans-serif;
	  }
    a {
      color: #29556A;
      font-weight: bold;
      text-decoration: none;
    }
    .button a {
      text-decoration:none;font-size:14px;color:#E6F2F7;text-transform:uppercase;font-weight:bold;letter-spacing:2px;background-color:#29556A;border-style:solid;display:inline-block;border-width:15px 25px;border-color:#29556A;
      white-space:nowrap;
    }
    table, p {
      font-size: 16px;
    }
    .responsive {
      width: 550px;
    }
    #container {
      padding-top: 40px;
    }
    .text-and-image td span {
      float: left;
      display: block;
      width: 183px;
    }
    .text-and-image td img {
      float: left;
      display: block;
    }
    img.centered {
      display: block;
      margin-left: auto;
      margin-right: auto; 
    }
    @media only screen and (max-width: 550px) {
      [class=responsive] {
        width: 100% !important;
      }
      #container {
        padding-top: 0 !important;
      }
      img[align=right]{
        float: none !important;
      }
      .text-and-image td span {
        float: none;
        width: 100% !important;
      }
      .text-and-image td img {
        float: none;
        margin-top: 15px;
        margin-left: 0 !important;
      }
    }
    span { -webkit-text-size-adjust:none; }
  </style>
<meta name="robots" content="noindex,nofollow"></meta>
<meta property="og:title" content="Bootcamp: Saving and Budgeting with Simple"></meta>
</head>
<body style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;background-color:#fafafa;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;color:#444444;" >
<table id="container" cellpadding="0" cellspacing="0" width="100%" style="width:100%;background-color:#fafafa;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;font-size:16px;line-height:20px;color:#444444;font-family:'Helvetica Neue', Helvetica, Arial, Geneva, sans-serif;padding-top:40px;" >
  <tr><td>
    <table class="responsive" width="650" align="center" cellpadding="0" cellspacing="0" style="border-width:1px;border-style:solid;border-color:#e0e0e0;background-color:white;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;font-size:16px;width:650px;" >
      
      <tr>
        <td style="border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#e0e0e0;padding-top:25px;padding-bottom:25px;padding-right:25px;padding-left:25px;" >
          <?php echo $settings_website_title; ?>
          <span style="color:white;font-size:1px;-webkit-text-size-adjust:none;" ></span>
          
        </td>
      </tr>
      
      
      <tr>
        <td style="border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#e0e0e0;padding-top:25px;padding-bottom:25px;padding-right:25px;padding-left:25px;" >
          
          <?php echo $this->fetch('content'); ?>

        </td>
      </tr>
    </table>
    <table class="responsive" align="center" cellpadding="0" cellspacing="0" style="font-size:16px;width:550px;" >
      <tr><td style="text-align:center;padding-top:25px;padding-bottom:25px;padding-right:25px;padding-left:25px;" >
        <p style="font-size:12px;color:#888888;line-height:1.5em;" >
          <span style="color:#bbbbbb;font-family:Georgia,serif;font-style:italic;-webkit-text-size-adjust:none;" >
            This message was sent to you by 
          </span>
          <br />
<?php echo $settings_website_title; ?><br />
<?php echo $settings_full_address_breaked; ?><br /><br />
T: <?php echo $settings_contact_tel; ?><br />
F: <?php echo $settings_contact_fax; ?><br />
<a href="http://<?php echo $settings_website_url; ?>"><?php echo $settings_website_url; ?></a>
        </p>
      </td></tr>
    </table>
  </td></tr>
</table>
</body></html>
